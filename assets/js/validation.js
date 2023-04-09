var Validation = function (config) {
    this.globals = config.globals;
    this.source = config.source;
    this.RUN_SKIP = config.run_skip;
    this.START_PAGE = config.start_page;
    this.END_PAGE = config.end_page;
    this.WITH_DISABLE = config.with_disable;
    this.DEBUG_MODE = typeof (config.debug_mode) != 'undefined' ? config.debug_mode : false;
    this.JENIS_KUESIONER = typeof (config.jenis_kuesioner) != 'undefined' ? config.jenis_kuesioner : false;
    this.RULE = Array();
    this.RULE_ART = Array();
    this.ERROR_LIST = Array();
    this.TOOLTIP = Array();
    this.METADATA = Array();
    this.WARNING = Array();
    this.AUTO_SUM = Array();
    this.SKIP = Array();
    this.OBJ_ERROR = Array();
    this.RANGE_HARGA = Array();
    this.MASTER_KBLI = Array();
    this.MASTER_KBKI = Array();


    this.CURRENT_PAGE = 0;
    this.ROW_UPLOAD = 0;
    this.NOTIF = null;
    this.STATUS_DOKUMEN = null;
    this.KBLI = null;
    this.PAGE_ERROR = [];
    this.LOOKUP_EMPTY = [{
        data: '',
        value: ''
    }];
    this.VALIDASI_ERROR = Array();
    this.CHECK_RULE = Array();
    this.CONTROL = {};

    var self = this;


    this.getRule = async function () {

        let result;

        try {
            result = await $.ajax({
                url: self.globals.URL_RULE,
                type: 'post',
                data: {
                    ajax: true,
                    source: self.source
                },
                dataType: 'json',
            });
            if (result.status) {
                self.RULE = result.result;
            }
            return result;
        } catch (error) {
            return error;
        }
    }
    this.getMetadata = async function () {
        let result;

        try {
            result = await $.ajax({
                url: self.globals.URL_METADATA,
                dataType: 'json',
                type: 'post',
                data: {
                    ajax: true,
                    source: self.source
                },
            });
            if (result.status) {
                self.METADATA = result.result;
            }
            return result;
        } catch (error) {
            return error;
        }
    }
    this.getErrorList = async function () {
        let result;

        try {
            result = await $.ajax({
                url: self.globals.URL_ERROR_LIST,
                dataType: 'json',
                type: 'post',
                data: {
                    ajax: true,
                    source: self.source
                },
            });
            if (result.status) {
                self.ERROR_LIST = result.result;
            }
            return result;
        } catch (error) {
            return error;
        }
    }
    this.getTooltip = async function () {
        let result;

        try {
            result = await $.ajax({
                url: self.globals.URL_TOOLTIP,
                dataType: 'json',
                type: 'post',
                data: {
                    ajax: true,
                    source: self.source
                },
            });
            if (result.status) {
                self.TOOLTIP = result.result;
            }
            return result;
        } catch (error) {
            return error;
        }
    }
    this.getAutoSum = function () {
        return $.ajax({
            url: self.URL_AUTO_SUM,
            dataType: 'json',
            type: 'post',
            data: {
                ajax: true,
                source: self.source
            },
            success: function (data) {
                if (data.status) {
                    self.AUTO_SUM = data.result;
                }
            }

        });
    }
    this.getSkip = function () {
        return $.ajax({
            url: self.URL_SKIP,
            dataType: 'json',
            type: 'post',
            data: {
                ajax: true,
                source: self.source
            },
            success: function (data) {
                if (data.status) {
                    self.SKIP = data.result;
                }
            }
        });
    }
    this.getKbli = function () {
        return $.ajax({
            url: self.URL_LOAD_KBLI,
            type: 'post',
            dataType: 'json',
            data: {
                ajax: true
            },
            success: function (data) {
                self.KBLI = data.result;
            }
        });
    }

    this.getRangeHarga = async function () {
        let result;

        try {
            result = await $.ajax({
                url: self.globals.URL_RANGE_HARGA,
                dataType: 'json',
                type: 'post',
                data: {
                    ajax: true,
                    source: self.source
                },
            });
            if (result.status) {
                self.RANGE_HARGA = result.result;
            }
            return result;
        } catch (error) {
            return error;
        }
    }

    this.applyMetadata = function (page_index) {
        var list_meta = self.METADATA;
        if (typeof page_index !== 'undefined')
            list_meta = $.grep(METADATA, function (obj) {
                return obj.Page == page_index.toString();
            });
        list_meta.forEach(function (meta) {
            var selector = "[name*='[" + meta.Field + "]']";
            if (meta.Level == 'RT') {
                var obj = $(selector);
                self.executeMetadata(obj, meta);
            } else {
                // $(selector).each(function () {
                //     self.executeMetadata($(this), meta);
                // });
            }
        });
        console.log('--done apply metadata--');
    }
    this.applyMetadataByObject = function (obj) {
        obj.find('input,textarea').each(function (i, e) {
            var obj = $(this);
            var name = obj.attr('name');
            if (typeof (name) != 'undefined') {
                //var field = obj.attr('mt-field');
                var temp = name.substr(name.lastIndexOf("[") + 1);
                var field = temp.replace(']', '');
                var meta = $.grep(self.METADATA, function (obj) {
                    return obj.Field == field;
                });
                if (!$.isEmptyObject(meta)) {
                    self.executeMetadata(obj, meta[0]);
                }
            }


        });
    }

    this.executeMetadata = function (obj, meta) {
        if (obj.hasClass('flat'))
            return;
        var regex = '';
        if ($.inArray(meta.DataType, ["float", "decimal"]) != -1) {
            obj.addClass('text-right mask');
            if (meta.MaxLength !== "") {
                var max = parseInt(meta.MaxLength) + Math.floor(meta.MaxLength / 3) + 3;
                obj.attr('maxlength', max);
            }
            obj.inputmask({
                alias: "decimal",
                onBeforeMask: function (value, opts) {
                    value = value.replace(".", ",");
                    var processedValue = value;
                    var arr_str = value.split(',');
                    if (arr_str[1] === '00')
                        processedValue = arr_str[0];
                    return processedValue;
                },
                radixPoint: ",",
                autoGroup: true,
                groupSeparator: ".",
                groupSize: 3,
                digits: 2,
                greedy: true,
                unmaskAsNumber: true,
                removeMaskOnSubmit: true,
                positionCaretOnTab: false,
                positionCaretOnClick: 'select'

            });
        } else if ($.inArray(meta.DataType, ["int", "smallint", "bigint"]) != -1) {
            //console.log(obj);
            obj.addClass('text-right mask');
            if (meta.MaxLength !== "") {
                var max = parseInt(meta.MaxLength) + Math.floor(meta.MaxLength / 3);
                obj.attr('maxlength', max);
                //tambah attribute custom
            }
            obj.inputmask({
                alias: 'decimal',
                placeholder: "",
                digits: 0,
                groupSize: 3,
                autoGroup: true,
                groupSeparator: ".",
                radixPoint: ",",
                unmaskAsNumber: true,
                removeMaskOnSubmit: true,
                positionCaretOnTab: false,
                positionCaretOnClick: 'select'
            });

            //untuk range checked
            // if (meta.Range) {
            //     var split= meta.Range.split(',');
            //     var r = meta.Range.split("-");
            //     var min = r[0];
            //     var max = r[1];
            //     var contain_min = false;
            //     if (min.indexOf("#") !== -1) {
            //         //ganti regexnya dengan pake backslash - di regex
            //         min = min.replace("-", "\-");
            //         contain_min = true;
            //     }
            //     if (max < 10) {
            //         regex =`^[${min}-${max}]+$`;
            //     } else {
            //         if (!contain_min)
            //             regex ="^[0-9]";
            //         else
            //             regex ="[\-0-9]";
            //     }
            // } else {
            //     regex = "^[0-9]";
            // }

        } else if ($.inArray(meta.DataType, ["char", "varchar"]) != -1) {
            obj.addClass('text-left');
            if (meta.MaxLength !== "") {
                var max = parseInt(meta.MaxLength);
                obj.attr('maxlength', max);
            }
            //jika mau dibuat uppercase
            if (meta.Format == 'uppercase') {
                obj.addClass('text-uppercase');
            }
            if (meta.Format == 'lowercase') {
                obj.addClass('text-lowercase');
            }

            if (meta.Type == "numeric") {
                if (meta.AllowedChar !== null) {
                    obj.addClass('textFieldTelp');
                }
                else {
                    obj.addClass('textFieldNumber');
                }
            }

            //untuk range checked
            if (meta.Range) {

            }
        }
        //custom attr
        obj.attr('mt-range', meta.Range);
        obj.attr('mt-allowed-char', meta.AllowedChar);
        obj.attr('mt-is-blank', meta.BlankNotBlank);
        obj.attr('mt-field', meta.Field);
        obj.attr('mt-alias', meta.Alias);
        obj.attr('mt-page', meta.Page);
        //        obj.attr('mt-alias', meta.Alias);

        // if (regex) {
        //     obj.live('keypress', function (e) {
        //         var r = new RegExp(regex);
        //         var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        //         if (!r.test(key) && e.keyCode != 13) {
        //             event.preventDefault();
        //             // objControl.showNotification('Rincian ' + meta.Field + ' harus terisi nilai dengan range ' + meta.Range + '', 'error', 'Error Range!');
        //             // obj.val('');
        //             // obj.addClass('error');
        //             return false;
        //         }
        //     });
        // }

    }

    this.markError = function (obj_error, page_index) {
        if (typeof page_index !== 'undefined') {
            var selector_form = "#form-page" + page_index + ' :input';
            $(selector_form).each(function () {
                if ($(this).hasClass('mark-error')) {
                    try {
                        if ($(this).hasClass('flat')) {
                            $(this).removeClass('mark-error');
                            var parent = $(this).parent();
                            parent.removeClass('iradio_square-red mark-error-icheck');
                            parent.addClass('iradio_square-green');
                            parent.parent().removeClass('mark-error');
                            //parent.parent().popover('destroy');
                            //parent.parent().tooltip('destroy');
                            parent.parent().tooltipster('destroy');
                        } else {
                            $(this).removeClass('mark-error');
                            // $(this).popover('destroy');
                            //$(this).tooltip('destroy');
                            $(this).tooltipster('destroy');
                        }
                    } catch (e) {
                        console.log(e);
                        console.log($(this));
                    }
                }
            });
        } else {
            $('input,textarea').each(function () {
                if ($(this).hasClass('mark-error')) {
                    try {
                        if ($(this).hasClass('flat')) {
                            $(this).removeClass('mark-error');
                            var parent = $(this).parent();
                            parent.removeClass('iradio_square-red mark-error-icheck');
                            parent.addClass('iradio_square-green');
                            parent.parent().removeClass('mark-error');
                            //parent.parent().popover('destroy');
                            //parent.parent().tooltip('destroy');
                            parent.parent().tooltipster('destroy');
                        } else {
                            $(this).removeClass('mark-error');
                            //$(this).popover('destroy');
                            //$(this).tooltip('destroy');
                            $(this).tooltipster('destroy');
                        }
                    } catch (e) {
                        console.log(e);
                        console.log($(this));
                    }
                }
            });
        }

        //tempel errornya
        obj_error.forEach(function (e) {
            var selector = "[name*='[" + e.Field + "]']";
            var row = parseInt(e.row);
            if (row !== 0) {
                selector = "[name*='[" + (row - 1) + "][" + e.Field + "]']";
            }
            var obj = $(selector);
            obj.each(function () {
                if ($(this).hasClass('flat')) {
                    $(this).addClass('mark-error');
                    var parent = $(this).parent();
                    parent.removeClass('iradio_square-green');
                    parent.addClass('iradio_square-red mark-error-icheck');
                    maskPopover(parent.parent(), e);
                } else {
                    maskPopover($(this), e);
                }

            });
        });
        //console.log(OPENTIP);
        console.log('--done mark error--');
    }

    this.maskPopover = function (obj, data) {
        obj.addClass('mark-error');
        var content = "<span>" + data.Message + "</span>";

        obj.tooltipster({
            animation: 'fade',
            side: 'left',
            theme: 'tooltipster-borderless',
            trigger: 'hover',
            content: content,
            contentAsHTML: true
        });
    }

    this.setTooltip = function () {
        self.TOOLTIP.forEach(function (t) {
            var selector = ".tooltip-" + t.Field;
            var obj = $(selector);
            try {
                new Opentip(obj, t.Hints, {
                    target: obj,
                    tipJoint: "bottom left",
                    showOn: 'click'
                });
            } catch (e) {
                console.log(e);
                console.log(t);
            }
        });
        console.log('--done tooltip--');
    }

    //this for custom functions used in Validation
    this.LEN = function (text, no_art, no_usaha) {
        var string = String(text);
        if (string == 'null') {
            return 0;
        }
        else {
            return string.length;
        }

    }
    this.LENROW = function (field, row, no_art, no_usaha) {
        var result = null;
        var value = this.GETVALUEROW(field, row, no_art, no_usaha);
        var string = String(value);
        if (string == 'null') {
            return 0;
        } else {
            return string.length;
        }
    }
    this.COMPAREDATE = function (date1, date2, operand) {

        var split_date1 = date1.split("-");
        var new_date1 = split_date1[2] + '-' + split_date1[1] + '-' + split_date1[0];
        var split_date2 = date2.split("-");
        var new_date2 = split_date2[2] + '-' + split_date2[1] + '-' + split_date2[0];

        var a = new Date(new_date1);
        var b = new Date(new_date2);
        var condition = "a.getTime() " + operand + " b.getTime()";
        return String(eval(condition));
    }
    this.CONSIST = function (text, string_cek) {
        var string = String(text);
        if (string.indexOf(string_cek) != -1) {
            return true;
        } else {
            return false;
        }
    }

    this.CONSISTROW = function (field, string_cek, row, no_art, no_usaha) {
        var value = this.GETVALUEROW(field, row, no_art, no_usaha);
        var string = String(value);
        if (string.indexOf(string_cek) != -1) {
            return true;
        } else {
            return false;
        }
    }

    this.FIND = function (field, value, no_art, no_usaha) {
        var selector = "[name*='[" + field + "]']";
        if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
        }
        var row = 1;
        var counter = 0;
        $(selector).each(function () {
            var field_value = self.GETVALUEROW(field, row, no_art, no_usaha);
            if (field_value === value) {
                counter++;
            }
            row++;
        });
        return String(counter);
    }
    this.FINDROW = function (field, value, no_art, no_usaha) {
        var selector = "[name*='[" + field + "]']";
        if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
        }
        var result = null;
        var row = 1;
        $(selector).each(function () {
            var field_value = self.GETVALUEROW(field, row, no_art, no_usaha);
            if (field_value === value) {
                result = row;
                return false;
            }
            row++;
        });
        return result;
    }
    this.COMPAREROWLESSTHAN = function (field, biggerValue, smallerValue) {
        var biggerParam = this.FINDROW(field, biggerValue);
        var smallerParam = this.FINDROW(field, smallerValue);
        var result = 0;
        if (biggerParam == null || smallerParam == null) {
            result = 1;
        } else {
            if (biggerParam < smallerParam) {
                result = 0;
            } else {
                result = 1;
            }
        }
        return result;
    }
    this.SUM = function (field, no_art, no_usaha) {
        var selector = "[name*='[" + field + "]']";
        if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
        }
        var result = 0;
        var row = 1;
        $(selector).each(function () {
            var field_value = self.GETVALUEROW(field, row, no_art, no_usaha);
            if (field_value !== null) {
                result = result + parseInt(field_value);
            }
            row++;
        });
        return result;
    }
    this.SUMB = function (list, field) {
      return  vue.sumBlok(list,field);
    }
    this.COUNTB = function (list, field) {
      return  vue.countBlok(list,field,'');
    }
    this.COUNTBL = function (list, field,filter) {
      return  vue.countBlokFilter(list,field,filter);
    }
    this.COUNTBC = function (list, field) {
      return  vue.countBlok(list,field,'c');
    }

    this.ISNULL = function (valueCheck, complement, is_ori) {
        if (valueCheck == '' || valueCheck === '' || valueCheck == null )
            return complement;
        else {
            var type = $.type(valueCheck);
            if (type == 'number') {
                // if (typeof (is_ori) == 'undefined') {
                //     valueCheck = Math.round(valueCheck * 100);
                // }
            }
            return valueCheck;
        }
    }
    this.CEKMASTER = function (valueCheck,list) {
      var a = {};
        switch(list){
          case "KBLI":
              a = this.MASTER_KBLI;
              break;
          case "KBKI":
              a = this.MASTER_KBKI;
              break;
          default:
              break;
        }
        var result = false;
        $.each(a, function(key, value2) {
            if (String(value2.kode) == String(valueCheck)) {
                result = true;

              }
        });

        return result;
    }
    this.MOD = function (field_binary, field_check, binary_index) {
        var result = false;
        // var value_binary = self.GETVALUE(field_binary);
        // var value_check = self.GETVALUE(field_check);
        var value_binary = field_binary;
        var value_check = field_check;
        var string_binary = parseInt(value_binary, 10).toString(2);
        var str_pad = string_binary.padStart(7, '0');
        var list_index = [64, 32, 16, 8, 4, 2, 1];
        list_str = str_pad.split('');
        var array_binary = Array();
        $.each(list_str, function (index, i) {
            if (i == '1') {
                array_binary.push(list_index[index]);
            }
        });
        binary_index = parseInt(binary_index);
        if ($.inArray(binary_index, array_binary) != -1) {
            if (self.LEN(value_check) != 0) {
                result = true;
            }
        }
        else {
            if (self.LEN(value_check) != 0) {
                result = false;
            }
            else {
                result = true;
            }
        }
        return result;


    }
    this.GETVALUE = function (field, no_art, no_usaha) {
        //withDisable = (typeof withDisable === 'undefined') ? false : true;
        var value = null;
        var selector = "[name*='[" + field + "]']";
        if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
        }
        var obj = $(selector);
        //cek object type
        if (obj.attr('type') === 'checkbox') {
            //cek apakah attr checked
            if (obj.is(':checked'))
                value = 1;
            else
                value = 0;
        } else if (obj.attr('type') === 'radio') {
            var selector = "[name*='[" + field + "]']";
            if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
                selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
            }
            selector += ':checked';
            value = $(selector).val();
            if (typeof value === 'undefined')
                value = null;
        } else if (obj.is("textarea")) {
            value = obj.val().replace(/\r\n|\r|\n/g, "");
        } else {
            //cek apakah pakai mask-currency
            if (obj.hasClass('mask'))
                value = obj.inputmask('unmaskedvalue');
            else {
                value = obj.val();
                //console.log(field+':'+value);
                if (value != null) {
                    value = value.replace(/"/g, '\\"');
                }
            }

        }
        // //cek lagi apakah obj disabled atau tidak
        // if (!this.WITH_DISABLE) {
        //     if (value == 0 || value == "" || obj.prop('disabled'))
        //         value = null;
        // }
        //cek lagi apakah obj disabled atau tidak
        if (!this.WITH_DISABLE) {
            if (obj.prop('disabled'))
                value = null;
        }
        return value;
    }
    this.GETVALUEROW = function (field, row, no_art, no_usaha) {
        var selector = "[name*='[" + field + "]']";
        if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
        }
        var index = 1;
        var value = null;
        $(selector).each(function () {
            var obj = $(this);
            if (index == row) {
                if (obj.attr('type') === 'checkbox') {
                    //cek apakah attr checked
                    if (obj.is(':checked'))
                        value = 1;
                    else
                        value = 0;
                } else if (obj.attr('type') === 'radio') {
                    var selector = "[name*='[" + field + "]']";
                    if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
                        selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
                    }
                    selector += ':checked';
                    value = $(selector).val();
                    if (typeof value === 'undefined')
                        value = null;
                } else if (obj.is("textarea")) {
                    value = obj.val().replace(/\r\n|\r|\n/g, "");
                } else {
                    //cek apakah pakai mask-currency
                    if (obj.hasClass('mask'))
                        value = obj.inputmask('unmaskedvalue');
                    else {
                        value = obj.val();
                        if (value != null) {
                            value = value.replace(/"/g, '\\"');
                        }
                    }
                }
                // if (!self.WITH_DISABLE) {
                //     //cek lagi apakah obj disabled atau tidak
                //     if (value == 0 || value == "" || obj.prop('disabled'))
                //         value = null;
                // }
                if (!this.WITH_DISABLE) {
                    if (obj.prop('disabled'))
                        value = null;
                }
                return false;
            }
            index++;
        });
        return value;
    }
    this.GET_OBJECT = function (field, no_art, no_usaha) {
        var selector = "[name*='[" + field + "]']";
        if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
        }
        return $(selector);
    }

    this.ISUNIQ = function (list,column, val) {
        var result = null;
        result = vue.isUniq(list,column, val);
        return result;

    }
    this.GET_VALUE_BY_OBJECT = function (obj) {
        var value = null;
        if (obj.attr('type') === 'checkbox') {
            //cek apakah attr checked
            if (obj.is(':checked'))
                value = 1;
            else
                value = 0;
        } else if (obj.attr('type') === 'radio') {
            value = obj.filter(":checked").val();
            if (typeof value === 'undefined')
                value = null;
        } else {
            //cek apakah pakai mask-currency
            if (obj.hasClass('mask'))
                value = obj.inputmask('unmaskedvalue');
            else {
                value = obj.val();
                if (value != null) {
                    value = value.replace(/"/g, '\\"');
                }
            }

        }
        // if (!self.WITH_DISABLE) {
        //     //cek lagi apakah obj disabled atau tidak
        //     if (value == 0 || value == "" || obj.prop('disabled'))
        //         value = null;
        // }
        if (!this.WITH_DISABLE) {
            if (obj.prop('disabled'))
                value = null;
        }
        return value;
    }
    this.SKIP_SUBSTRING = function (field, start, length) {
        var value = this.GETVALUE(field);
        var result = value.substring(start, length);
        return result;
    }
    this.generateErrorList = function () {
        var result = '';
        if (!$.isEmptyObject(self.ERROR_LIST)) {
            result = '';
            self.ERROR_LIST.forEach(function (error) {
                var treatment = '';
                var message = '';
                if (error.Level == self.globals.RULE_RT) {
                    message = error.Message;
                    treatment = error.Treatment;
                }
                else if (error.Level == self.globals.RULE_ART) {
                    message = error.Message;
                    treatment = `${error.Treatment} <span style='color:#00a65a'>( baris ke ${error.row})</span>`;
                }
                else if (error.Level == self.globals.RULE_RT_LOOP) {
                    message = `<span style='color:#00a65a'>[ART ${error.no_art}, USAHA ${error.no_usaha}]</span> <br> ${error.Message}`;
                    treatment = `<span style='color:#00a65a'>[ART ${error.no_art}, USAHA ${error.no_usaha}]</span> <br> ${error.Treatment}`;
                }
                else if (error.Level == self.globals.RULE_ART_LOOP) {
                    message = `<span style='color:#00a65a'>[ART ${error.no_art}, USAHA ${error.no_usaha}]</span> <br> ${error.Message}`;
                    treatment = `<span style='color:#00a65a'>[ART ${error.no_art}, USAHA ${error.no_usaha}]</span> <br> ${error.Treatment} <span style='color:#00a65a'>( baris ke ${error.row})</span>`;
                }
                result += '<tr>';
                result += '<td class="moving row-field" no-art="' + error.no_art + '" no-usaha="' + error.no_usaha + '" page="' + error.page + '" row="' + error.row + '" field="' + error.Field + '" tipe="' + error.Level + '" message="' + message + '" treatment="' + treatment + '">' + error.Alias + '</td>';
                result += '</tr>';
            });
            return result;
        }
    }
    this.movingCursor = function (row_field) {
        var page = row_field.attr('page');
        var row = row_field.attr('row');
        var tipe = row_field.attr('tipe');
        var field = row_field.attr('field');
        var message = row_field.attr('message');
        var treatment = row_field.attr('treatment');

        //set value detail error
        $('#container-message').html(message);
        $('#container-perlakuan').html(treatment);

        //hapus semua class mark error di input
        $('input,textarea').each(function () {
            if ($(this).hasClass('mark-error'))
                $(this).removeClass('mark-error');
        });

        //aktifkan tab sesuai dengan value page
        this.moveToTab(page);
        //set class ke field
        $('.moving').each(function () {
            $(this).removeClass('bg-orange');
        });
        $(row_field).addClass('bg-orange');
        //focus ke element
        //cek jika levelnya ART, treatmet landing
        if (tipe == "RT") {
            var selector = "[name*='[" + field + "]']";
            var obj = $(selector);
            obj.addClass('mark-error');
            obj.focus();
        } else {

        }
        //set global current page
        self.CURRENT_PAGE = parseInt(page);
    }
    this.movingToTab = function (page) {
        $("ul.tab-form > li").each(function () {
            $(this).removeClass('active');
        });
        $(".tab-pane").each(function () {
            $(this).removeClass('active');
        });
        var tab = '#tab_' + page;
        $('ul.tab-form > li').each(function () {
            var child = $(this).children('a');
            if (child.attr('href') == tab) {
                child.attr('aria-expanded', 'true');
                $(this).addClass('active');
            } else {
                child.attr('aria-expanded', 'false');
            }
        });
        $(tab).addClass('active');
    }

    this.sanitazeFunc = function (string, no_art, no_usaha) {
        var list_func = ['LEN', 'LENROW', 'SUM', 'FIND', 'FINDROW', 'ISNULL', 'CONSIST', 'MOD', 'COMPAREDATE','COUNTB','COUNTBL','SUMB','CEKMASTER'];
        list_func.forEach(function (x) {
            var pattern = x + '\\(';
            string = string.replace(new RegExp(pattern, 'g'), 'self.' + x + '(');
        });
        if (typeof (no_art) != 'undefined')
            string = self.replaceAll(string, self.globals.MARK_ART, no_art);
        if (typeof (no_usaha) != 'undefined')
            string = self.replaceAll(string, self.globals.MARK_USAHA, no_usaha);
        return string;
    }
    this.replaceAll = function (string, find, replace) {
        return string.replace(new RegExp(this.escapeRegExp(find), 'g'), replace);
    }
    this.escapeRegExp = function (string) {
        return string.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
    }
    this.processRegexBefore = function (rule, objVal) {
        //untuk fungsi yg gak pakai relfields
        var list_func = ['LENROW', 'SUM', 'FIND', 'FINDROW'];
        list_func.forEach(function (func) {
            var pattern = "self." + func + '\s?\\(.*?\\)';
            var res = rule.match(new RegExp(pattern, 'g'));
            if (res != null) {
                res.forEach(function (match) {
                    var original = match;
                    //console.log(match);
                    var temp = match.substr(match.indexOf("(") + 1);
                    var fields = temp.replace(")", '').split(',');
                    //console.log(temp);
                    //console.log(fields);
                    if (fields != null) {
                        var i = 0;
                        var first_field = '';
                        var new_field = "";
                        fields.forEach(function (field) {
                            if (i == 0) {
                                first_field = field;
                                field = "'" + field + "'";
                            }
                            new_field += field + ",";
                            i++;
                        });

                        new_field = new_field.substr(0, new_field.lastIndexOf(","));
                        //console.log(new_field);
                        var new_func = "self." + func + "(" + new_field + ")";
                        //console.log(new_func);
                        var result = String(eval(new_func));
                        //var meta = self.getMeta(first_field);
                        //result = self.replaceValue(result, meta);
                        rule = rule.replace(original, result);

                    }

                });
            }
        });
        return rule;
    }
    this.replaceValue = function (value, meta) {
        if ($.inArray(meta.DataType, ['char', 'varchar']) != -1) {
            value = value.toString();
            value = self.replaceAll(value, "'", "\\'");
            value = "'" + value + "'";
        }
        else {
            if (value === "" || typeof (value) == 'undefined')
                value = null;
            else
                value = value;
        }
        return value;
    }


    this.validateART = function (objVal) {
        var selector = "[name*='[" + objVal.Field + "]']";
        var row = 1;
        $(selector).each(function () {
            var obj = $(this);
            if (obj.prop('disabled'))
                return;
            var rule = objVal.Rule;
            //ambil nilai kondisi
            var condition = objVal.Condition;
            condition = condition.toLowerCase();

            try {
                //sanitaze function
                rule = self.sanitazeFunc(rule);
                //process regex before
                rule = self.processRegexBefore(rule, objVal);
                //ambil relFields, kemudian pecah dengan delimiter ;
                if (objVal.RelFields !== '' && objVal.RelFields != null) {
                    var relFields = objVal.RelFields;
                    var splitRelFields = relFields.split(";");
                    splitRelFields.sort(function (a, b) {
                        return b.length - a.length;
                    });
                    splitRelFields.forEach(function (fields) {
                        var meta = self.getMeta(fields);
                        //ambil value form berdasarkan relfields
                        var value = self.GETVALUEROW(fields, row);
                        //cek apakah value yang di input merupakan fungsi atau bukan
                        if (self.isFunction(value)) {
                            objVal.Message = "Isikan dengan nilai yang benar";
                            self.addErrorList(objVal, row);
                            row++;
                            return;
                        }
                        value = self.replaceValue(value, meta);
                        rule = self.replaceAll(rule, fields, value);
                    });
                }

                var result = String(eval(rule));
                //console.log(rule + ': ' + result);
            } catch (err) {
                if (self.DEBUG_MODE)
                    self.catchError(objVal, rule, err);
            } finally {
                //bandingkan kondisi dengan hasil eval, jika sama berarti clean, jika tidak berarti error
                if (self.DEBUG_MODE)
                    self.checkRule(objVal, rule, result);
                if (condition !== result) {
                    self.addErrorList(objVal, row);
                }
            }
            row++;
        });
    }

    this.validate = function (page_index) {
        var list_rule = this.getAllKonsistensi(page_index);
        // console.log(list_rule);

        self.OBJ_ERROR = new Array();
        self.VALIDASI_ERROR = new Array();
        self.CHECK_RULE = new Array();
        var index = 1;
        //ini variable untuk menyimpan rule yg masih error
        var errorRule = {};
        var number_of_rule = list_rule.length;
        list_rule.forEach(function (objVal) {
            //cek apakah rule termasuk RT atau ART
            // if (objVal.Level === self.globals.RULE_ART) {
            //   //  self.validateART(objVal);
            //
            // }
            if (objVal.Level === self.globals.RULE_ART) {
                //self.validateART(objVal);
                vue.validateBlok(objVal);
            }
            else if (objVal.Level === self.globals.RULE_RT_LOOP) {
                self.validateLoop(objVal);
            }
            else if (objVal.Level === self.globals.RULE_ART_LOOP) {
                self.validateARTLoop(objVal);
            }
            else {
                //cek juga apakah field termasuk disabled
                var selector = "[name*='[" + objVal.Field + "]']";
                var obj = $(selector);
                if (obj.prop('disabled'))
                    return;
                //ambil rule
                var rule = objVal.Rule;
                //ambil nilai kondisi
                var condition = objVal.Condition;
                condition = condition.toLowerCase();
                try {
                    //sanitaze function
                    rule = self.sanitazeFunc(rule);
                    //process regex before
                    rule = self.processRegexBefore(rule, objVal);
                    //ambil relFields, kemudian pecah dengan delimiter ;
                    if (objVal.RelFields !== '' && objVal.RelFields != null) {
                        var relFields = objVal.RelFields;
                        var splitRelFields = relFields.split(";");
                        splitRelFields.sort(function (a, b) {
                            return b.length - a.length;
                        });
                        splitRelFields.forEach(function (fields) {
                            var meta = self.getMeta(fields);
                            //ambil value form berdasarkan relfields
                            var value = self.GETVALUE(fields);
                            //cek apakah value yang di input merupakan fungsi atau bukan
                            if (self.isFunction(value)) {
                                objVal.Message = "Isikan dengan nilai yang benar";
                                self.addErrorList(objVal);
                                index++;
                                return;
                            }
                            value = self.replaceValue(value, meta);
                            rule = self.replaceAll(rule, fields, value);
                            //console.log(rule);
                        });
                    }
                    //console.log(objVal);
                    //console.log(rule + '#' + objVal.Field);
                    // if (objVal.ErrorID == 1) {
                    //     console.log(rule);
                    //     // // var test1 = String.eval("'JBAKJDBAKJDBKAJSBDKAJSDBSJD'!='' && !self.CONSIST('JBAKJDBAKJDBKAJSBDKAJSDBSJD','@')");
                    //     // // console.log(test1);
                    //     // var test2 = String.eval("!self.CONSIST('alfianmay@bps','@')");
                    //     // console.log(test2);
                    // }
                    // var test1 = String(eval("'JBAKJDBAKJDBKAJSBDK@AJSDBSJD'!='' && !self.CONSIST('JBAKJDBAKJD@BKAJSBDKAJSDBSJD','@')"));
                    // console.log(test1);
                    // var test2 = String(eval("!self.CONSIST('alfianmay@bps','@')"));
                    // console.log(test2);
                    var result = String(eval(rule));
                    //console.log(rule + ': ' + result);
                } catch (err) {
                    if (self.DEBUG_MODE)
                        self.catchError(objVal, rule, err);
                } finally {
                    //bandingkan kondisi dengan hasil eval, jika sama berarti clean, jika tidak berarti error
                    if (self.DEBUG_MODE)
                        self.checkRule(objVal, rule, result);
                    if (condition !== result) {
                        self.addErrorList(objVal);
                    }
                }
            }
            self.progressValidation(index, number_of_rule);
            index++;
        });
        //eksekusi custom validation
        self.customValidation();
        //eksekusi validasi metadata
        console.log('eksekusi rule berhasil');
    }

    this.validateLoop = function (objVal) {
        $('.container-art-usaha-detail').each(function () {
            var no_art = $(this).attr('no-art');
            var no_usaha = $(this).attr('no-usaha');
            var selector = "[name*='[" + objVal.Field + "]']";
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";

            var obj = $(selector);
            if (obj.prop('disabled'))
                return;
            var rule = objVal.Rule;
            //ambil nilai kondisi
            var condition = objVal.Condition;
            condition = condition.toLowerCase();
            try {
                //sanitaze function
                rule = self.sanitazeFunc(rule, no_art, no_usaha);
                //process regex before
                rule = self.processRegexBefore(rule, objVal);
                //ambil relFields, kemudian pecah dengan delimiter ;
                if (objVal.RelFields !== '' && objVal.RelFields != null) {
                    var relFields = objVal.RelFields;
                    var splitRelFields = relFields.split(";");
                    splitRelFields.sort(function (a, b) {
                        return b.length - a.length;
                    });

                    splitRelFields.forEach(function (fields) {
                        var meta = self.getMeta(fields);
                        //ambil value form berdasarkan relfields
                        var value = self.GETVALUE(fields, no_art, no_usaha);
                        //cek apakah value yang di input merupakan fungsi atau bukan
                        if (self.isFunction(value)) {
                            objVal.Message = "Isikan dengan nilai yang benar";
                            self.addErrorList(objVal, 0, no_art, no_usaha);
                            return;
                        }
                        value = self.replaceValue(value, meta);
                        rule = self.replaceAll(rule, fields, value);
                        //console.log(rule);
                    });
                }
                //console.log(rule);
                var result = String(eval(rule));
                //console.log(rule + ': ' + result);
                // if (objVal.Field == 'b7_k3') {
                //     console.log(rule);
                //     console.log(rule + ': ' + result);
                // }
            } catch (err) {
                if (self.DEBUG_MODE)
                    self.catchError(objVal, rule, err);
            } finally {
                //bandingkan kondisi dengan hasil eval, jika sama berarti clean, jika tidak berarti error
                if (self.DEBUG_MODE)
                    self.checkRule(objVal, rule, result);
                if (condition !== result) {
                    self.addErrorList(objVal, 0, no_art, no_usaha);
                }
            }
        });

    }

    this.validateARTLoop = function (objVal) {
        $('.container-art-usaha-detail').each(function () {
            var no_art = $(this).attr('no-art');
            var no_usaha = $(this).attr('no-usaha');
            var selector = "[name*='[" + objVal.Field + "]']";
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
            var row = 1;
            $(selector).each(function () {
                var obj = $(this);
                if (obj.prop('disabled'))
                    return;
                var rule = objVal.Rule;

                //ambil nilai kondisi
                var condition = objVal.Condition;
                condition = condition.toLowerCase();
                try {
                    //sanitaze function
                    rule = self.sanitazeFunc(rule, no_art, no_usaha);
                    //process regex before
                    rule = self.processRegexBefore(rule, objVal);
                    //ambil relFields, kemudian pecah dengan delimiter ;
                    if (objVal.RelFields !== '' && objVal.RelFields != null) {
                        var relFields = objVal.RelFields;
                        var splitRelFields = relFields.split(";");
                        splitRelFields.sort(function (a, b) {
                            return b.length - a.length;
                        });
                        splitRelFields.forEach(function (fields) {
                            var meta = self.getMeta(fields);
                            //ambil value form berdasarkan relfields
                            var value = self.GETVALUEROW(fields, row, no_art, no_usaha);
                            //cek apakah value yang di input merupakan fungsi atau bukan
                            if (self.isFunction(value)) {
                                objVal.Message = "Isikan dengan nilai yang benar";
                                self.addErrorList(objVal, row, no_art, no_usaha);
                                row++;
                                return;
                            }
                            value = self.replaceValue(value, meta);
                            rule = self.replaceAll(rule, fields, value);
                        });
                    }
                    var result = String(eval(rule));
                } catch (err) {
                    if (self.DEBUG_MODE)
                        self.catchError(objVal, rule, err);
                } finally {
                    //bandingkan kondisi dengan hasil eval, jika sama berarti clean, jika tidak berarti error
                    if (self.DEBUG_MODE)
                        self.checkRule(objVal, rule, result);
                    if (condition !== result) {
                        self.addErrorList(objVal, row, no_art, no_usaha);
                    }
                }
                row++;
            });
        });


    }

    this.getAllKonsistensi = function (page_index) {
        var all_konsitensi = Array();
        //untuk blank not blank
        var blank_not_blank = $.grep(self.METADATA, function (obj) {
            return obj.BlankNotBlank == 'notblank';
        });
        if (typeof page_index !== 'undefined')
            blank_not_blank = $.grep(blank_not_blank, function (obj) {
                return obj.Page == page_index.toString();
            });

        var i = 1000;
        blank_not_blank.forEach(function (data) {
            var error = {};
            error.JenisKuesioner = data.JenisKuesioner;
            error.ErrorID = i++;
            error.Field = data.Field;
            error.Alias = data.Alias;
            error.Page = data.Page;
            error.RelFields = data.Field;
            error.Rule = `LEN(${data.Field})==0`;
            error.Message = `Rincian ${data.Alias} tidak boleh kosong`;
            error.Treatment = `Manual cek rincian ${data.Alias}`;
            error.ExecutionPage = data.Page;
            error.Level = data.Level;
            error.IsFatal = 1;
            error.Condition = 'FALSE';
            error.Table = data.Table;
            all_konsitensi.push(error);
        });

        //untuk range
        var range = $.grep(self.METADATA, function (obj) {
            return obj.Range !== '' && obj.Range != null;
        });
        if (typeof page_index !== 'undefined')
            range = $.grep(range, function (obj) {
                return obj.Page == page_index.toString();
            });
        var j = 3000;
        range.forEach(function (data) {
            var rule = '';
            var error = {};
            if ($.inArray(data.DataType, ["int", "smallint", "bigint", "float", "decimal"]) != -1) {
                var split = data.Range.split(',');
                if (split.length > 1) {
                    split.forEach(function (r) {
                        var split = r.split('-');
                        if (split.length > 1) {
                            var min = split[0].replace("#", "-");
                            var max = split[1];
                            rule += `(${data.Field}<${min} || ${data.Field}>${max}) || `;
                        }
                        else {
                            rule += `${data.Field}!=${split[0]} || `;
                        }
                    });
                    rule = rule.substring(0, rule.length - 3);

                }
                else {
                    var r = split[0].split('-');
                    if (r.length > 1) {
                        var min = r[0].replace("#", "-");
                        var max = r[1];
                        rule = `(${data.Field}<${min} || ${data.Field}>${max})`;
                    }
                    else {
                        rule = `${data.Field}!=${r[0]}`;
                    }
                }

                error.JenisKuesioner = data.JenisKuesioner;
                error.ErrorID = j++;
                error.Field = data.Field;
                error.Alias = data.Alias;
                error.Page = data.Page;
                error.RelFields = data.Field;
                // if (data.BlankNotBlank == 'notblank')
                //     error.Rule = rule;
                // else {
                //     if (data.Level == self.globals.RULE_RT_LOOP || data.Level == self.globals.RULE_ART_LOOP)
                //         error.Rule = rule + ` && LEN(${data.Field},@ART,@USAHA)!=0`;
                //     else
                        error.Rule = rule + ` && LEN(${data.Field})!=0`;
                // }
                error.Message = `Rincian ${data.Alias} harus dalam range (${data.Range})`;
                error.Treatment = `Manual cek rincian ${data.Alias}`;
                error.ExecutionPage = data.Page;
                error.Level = data.Level;
                error.IsFatal = 1;
                error.Condition = 'FALSE';
                error.Table = data.Table;

                all_konsitensi.push(error);

            }

        });

        var list_rule = self.RULE;
        if (typeof page_index !== 'undefined')
            list_rule = $.grep(self.RULE, function (obj) {
                return obj.Page == page_index.toString();
            });
        list_rule.forEach(function (data) {
            all_konsitensi.push(data);
        });
        return all_konsitensi;
    }

    this.getMeta = function (field) {
        var meta = $.grep(self.METADATA, function (obj) {
            return obj.Field == field;
        });
        if (meta.length != 0)
            return meta[0];
        else
            return {};
    }

    this.isFunction = function (string) {
        if ($.isFunction(window[string]))
            return true;
        else
            return false;
    }

    this.addErrorList = function (objVal, row, no_art, no_usaha) {
        //console.log(no_usaha);
        row = (typeof row === 'undefined') ? 0 : row;
        no_art = (typeof no_art === 'undefined') ? 0 : no_art;
        no_usaha = (typeof no_usaha === 'undefined') ? 0 : no_usaha;

        var tempErrorArr = {};
        tempErrorArr.JenisKuesioner = objVal.JenisKuesioner;
        tempErrorArr.ErrorID = objVal.ErrorID;
        tempErrorArr.page = objVal.Page;
        tempErrorArr.row = row;
        tempErrorArr.Field = objVal.Field;
        tempErrorArr.Alias = objVal.Alias;
        tempErrorArr.Message = objVal.Message;
        tempErrorArr.Treatment = objVal.Treatment;
        tempErrorArr.IsFatal = objVal.IsFatal;
        tempErrorArr.Level = objVal.Level;
        tempErrorArr.no_art = no_art;
        tempErrorArr.no_usaha = no_usaha;
        tempErrorArr.Table = objVal.Table;
        self.OBJ_ERROR.push(tempErrorArr);
    }

    this.getErrors = function () {
        return self.OBJ_ERROR;
    }

    this.progressValidation = function (current_step, max_step) {
        var percentage = Math.round((current_step / max_step) * 100);
        return percentage;
    }

    this.catchError = function (obj_val, rule, err) {
        var temp = {};
        temp.obj_val = obj_val;
        temp.rule = rule;
        temp.err = err;
        temp.ErrorID = obj_val.ErrorID;
        self.VALIDASI_ERROR.push(temp);
    }

    this.checkRule = function (obj_val, rule, result) {
        var temp = {};
        temp.obj_val = obj_val;
        temp.rule = rule;
        temp.result = result;
        temp.ErrorID = obj_val.ErrorID;
        self.CHECK_RULE.push(temp);
    }

    this.getStatusDokumen = function () {
        var status_dokumen = self.globals.CLEAN;
        if (!$.isEmptyObject(self.OBJ_ERROR)) {
            status_dokumen = self.globals.WARNING;
            $.each(self.OBJ_ERROR, function (index, e) {
                if (parseInt(e.IsFatal) === 1) {
                    status_dokumen = self.globals.ERROR;
                    return false;
                }
            });

        }
        return status_dokumen;
    }

    this.expressionTest = function (exp) {
        console.log(String(eval(exp)));
    }

    this.customValidation = function () {
        self.rataBahanBakar();
        if (self.JENIS_KUESIONER == self.globals.JENIS_KUESIONER.GALIAN_BH) {
            self.cekGalianBH();
        }
        if (self.JENIS_KUESIONER == self.globals.JENIS_KUESIONER.GALIAN_URT) {
            self.cekGalianUrt();
        }
    }
    this.rataBahanBakar = function () {
        var error_id = 500;
        switch (self.JENIS_KUESIONER) {
            case self.globals.JENIS_KUESIONER.GALIAN_BH:
                var list_object = $("input[mt-rh]");
                if (list_object.length > 0) {
                    $.each(list_object, function (index, obj) {
                        let obj_input = $(obj);
                        let mt_rh = obj_input.attr('mt-rh');
                        let range_harga = $.grep(self.RANGE_HARGA, function (obj) {
                            return obj.kode == mt_rh && obj.prov == self.CONTROL.KODE_PROV;
                        });
                        let value = self.GET_VALUE_BY_OBJECT(obj_input);
                        let obj_pembagi = obj_input.parent().prev().children();
                        let value_pembagi = self.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi);
                            let min = parseInt(range_harga[0].min);
                            let max = parseInt(range_harga[0].max);
                            if (rata < min || rata > max) {
                                //error
                                let tempErrorArr = {};
                                tempErrorArr.JenisKuesioner = self.JENIS_KUESIONER;
                                tempErrorArr.ErrorID = error_id;
                                tempErrorArr.page = obj_input.attr('mt-page');
                                tempErrorArr.row = 0;
                                tempErrorArr.Field = obj_input.attr('mt-field');
                                tempErrorArr.Message = `Range Harga (Nilai/Volume) harus berada di dalam range ${min} - ${max}`;
                                tempErrorArr.Treatment = "Manual Cek";
                                tempErrorArr.IsFatal = 1;
                                tempErrorArr.Level = "RT";
                                tempErrorArr.no_art = 0;
                                tempErrorArr.no_usaha = 0;
                                tempErrorArr.Alias = obj_input.attr('mt-alias');
                                self.OBJ_ERROR.push(tempErrorArr);
                            }
                        }
                        error_id++;
                    });
                }
                break;
            case self.globals.JENIS_KUESIONER.AIR_BERSIH:
                var list_object = $("input[mt-rh]");

                if (list_object.length > 0) {
                    $.each(list_object, function (index, obj) {
                        let obj_input = $(obj);
                        let mt_rh = obj_input.attr('mt-rh');
                        let range_harga = $.grep(self.RANGE_HARGA, function (obj) {
                            return obj.kode == mt_rh && obj.prov == self.CONTROL.KODE_PROV;
                        });
                        let value = self.GET_VALUE_BY_OBJECT(obj_input);
                        let obj_pembagi = obj_input.parent().prev().children();
                        let value_pembagi = self.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi);
                            let min = parseInt(range_harga[0].min);
                            let max = parseInt(range_harga[0].max);
                            if (rata < min || rata > max) {
                                //error
                                let field = obj_input.attr('mt-field');
                                let is_fatal = 1;
                                if (field.includes('b3r3') || field.includes('b5r4')) {
                                    is_fatal = 0;
                                }
                                let tempErrorArr = {};
                                tempErrorArr.JenisKuesioner = self.JENIS_KUESIONER;
                                tempErrorArr.ErrorID = error_id;
                                tempErrorArr.page = obj_input.attr('mt-page');
                                tempErrorArr.row = 0;
                                tempErrorArr.Field = field;
                                tempErrorArr.Message = `Range Harga (Nilai/Volume) harus berada di dalam range ${min} - ${max}`;
                                tempErrorArr.Treatment = "Manual Cek";
                                tempErrorArr.IsFatal = is_fatal;
                                tempErrorArr.Level = "RT";
                                tempErrorArr.no_art = 0;
                                tempErrorArr.no_usaha = 0;
                                tempErrorArr.Alias = obj_input.attr('mt-alias');
                                self.OBJ_ERROR.push(tempErrorArr);
                            }
                        }
                        error_id++;
                    });
                }
                break;
            case self.globals.JENIS_KUESIONER.CAPTIVE:
                var list_object = $("input[mt-rh]");
                if (list_object.length > 0) {
                    $.each(list_object, function (index, obj) {
                        let obj_input = $(obj);
                        let mt_rh = obj_input.attr('mt-rh');
                        let field = obj_input.attr('mt-field');
                        let range_harga = $.grep(self.RANGE_HARGA, function (obj) {
                            return obj.kode == mt_rh && obj.prov == self.CONTROL.KODE_PROV;
                        });
                        let value = self.GET_VALUE_BY_OBJECT(obj_input);
                        let value_pembagi = 0;
                        let min = parseInt(range_harga[0].min);
                        let max = parseInt(range_harga[0].max);
                        if (field == 'p14a' || field == 'p14b') {
                            if (value != 0 && value != '') {
                                if (value < min || value > max) {
                                    let tempErrorArr = {};
                                    tempErrorArr.JenisKuesioner = self.JENIS_KUESIONER;
                                    tempErrorArr.ErrorID = error_id;
                                    tempErrorArr.page = obj_input.attr('mt-page');
                                    tempErrorArr.row = 0;
                                    tempErrorArr.Field = obj_input.attr('mt-field');
                                    tempErrorArr.Message = `Range Harga (Nilai/Volume) harus berada di dalam range ${min} - ${max}`;
                                    tempErrorArr.Treatment = "Manual Cek";
                                    tempErrorArr.IsFatal = 1;
                                    tempErrorArr.Level = "RT";
                                    tempErrorArr.no_art = 0;
                                    tempErrorArr.no_usaha = 0;
                                    tempErrorArr.Alias = obj_input.attr('mt-alias');
                                    self.OBJ_ERROR.push(tempErrorArr);
                                }
                            }
                        }
                        else {
                            if (field == 'p15a') {
                                value_pembagi = self.GETVALUE('p13a');
                            }
                            else if (field == 'p15b') {
                                value_pembagi = self.GETVALUE('p13b');
                            }
                            if (value_pembagi != 0 && value_pembagi != '') {
                                let rata = (value / value_pembagi);
                                if (rata < min || rata > max) {
                                    //error
                                    let tempErrorArr = {};
                                    tempErrorArr.JenisKuesioner = self.JENIS_KUESIONER;
                                    tempErrorArr.ErrorID = error_id;
                                    tempErrorArr.page = obj_input.attr('mt-page');
                                    tempErrorArr.row = 0;
                                    tempErrorArr.Field = obj_input.attr('mt-field');
                                    tempErrorArr.Message = `Range Harga (Nilai/Volume) harus berada di dalam range ${min} - ${max}`;
                                    tempErrorArr.Treatment = "Manual Cek";
                                    tempErrorArr.IsFatal = 1;
                                    tempErrorArr.Level = "RT";
                                    tempErrorArr.no_art = 0;
                                    tempErrorArr.no_usaha = 0;
                                    tempErrorArr.Alias = obj_input.attr('mt-alias');
                                    self.OBJ_ERROR.push(tempErrorArr);
                                }
                            }
                        }
                        error_id++;
                    });
                }
                break;
            case self.globals.JENIS_KUESIONER.GALIAN_URT:
                var list_object = $("input[mt-rh]");
                if (list_object.length > 0) {
                    $.each(list_object, function (index, obj) {
                        let obj_input = $(obj);
                        let mt_rh = obj_input.attr('mt-rh');
                        let range_harga = $.grep(self.RANGE_HARGA, function (obj) {
                            return obj.kode == mt_rh && obj.prov == self.CONTROL.KODE_PROV;
                        });
                        let value = self.GET_VALUE_BY_OBJECT(obj_input);
                        if (value != 0 && value != '') {
                            let rata = value;
                            let min = parseInt(range_harga[0].min);
                            let max = parseInt(range_harga[0].max);
                            if (rata < min || rata > max) {
                                //error
                                let tempErrorArr = {};
                                tempErrorArr.JenisKuesioner = self.JENIS_KUESIONER;
                                tempErrorArr.ErrorID = error_id;
                                tempErrorArr.page = obj_input.attr('mt-page');
                                tempErrorArr.row = 0;
                                tempErrorArr.Field = obj_input.attr('mt-field');
                                tempErrorArr.Message = `Range Harga (Nilai/Volume) harus berada di dalam range ${min} - ${max}`;
                                tempErrorArr.Treatment = "Manual Cek";
                                tempErrorArr.IsFatal = 1;
                                tempErrorArr.Level = "RT";
                                tempErrorArr.no_art = 0;
                                tempErrorArr.no_usaha = 0;
                                tempErrorArr.Alias = obj_input.attr('mt-alias');
                                self.OBJ_ERROR.push(tempErrorArr);
                            }
                        }
                        error_id++;
                    });
                }
                break;

            default:
                break;
        }
    }

    this.cekGalianBH = function () {
        var error_id = 300;
        let status = $('#MGalianBh_status').val();
        //buat list kode galian di rincian 104
        if (status == 1) {
            let list_kode = [];
            $("select[name*='r104'][name*='_k7']").each(function () {
                let obj = $(this);
                let value = self.GET_VALUE_BY_OBJECT(obj);
                if (value != '') {
                    list_kode.push(value);
                }
            });
            //cek blok 5, apakah ada di list, kalo gak ada error
            if (list_kode.length > 0) {
                $("select[name*='r5_kode']").each(function () {
                    let obj = $(this);
                    let value = self.GET_VALUE_BY_OBJECT(obj);
                    if ($.inArray(value, list_kode) == -1 && value != '') {
                        let tempErrorArr = {};
                        tempErrorArr.JenisKuesioner = self.JENIS_KUESIONER;
                        tempErrorArr.ErrorID = error_id;
                        tempErrorArr.page = obj.attr('mt-page');
                        tempErrorArr.row = 0;
                        tempErrorArr.Field = obj.attr('mt-field');
                        tempErrorArr.Message = `Kode bahan galian tidak ada di rincian R104`;
                        tempErrorArr.Treatment = "Manual Cek";
                        tempErrorArr.IsFatal = 1;
                        tempErrorArr.Level = "RT";
                        tempErrorArr.no_art = 0;
                        tempErrorArr.no_usaha = 0;
                        tempErrorArr.Alias = obj.attr('mt-alias');
                        self.OBJ_ERROR.push(tempErrorArr);
                    };
                    error_id++;
                });
            }

            //cek lagi ke blok 5, apakah kode di r104 sudah ada semua
            let list_kode_blok5 = [];
            $("select[name*='r5_kode']").each(function () {
                let obj = $(this);
                let value = self.GET_VALUE_BY_OBJECT(obj);
                if (value != '') {
                    list_kode_blok5.push(value);
                }
            });
            $("select[name*='r104'][name*='_k7']").each(function () {
                let obj = $(this);
                let value = self.GET_VALUE_BY_OBJECT(obj);
                if ($.inArray(value, list_kode_blok5) == -1 && value != '') {
                    let tempErrorArr = {};
                    tempErrorArr.JenisKuesioner = self.JENIS_KUESIONER;
                    tempErrorArr.ErrorID = error_id;
                    tempErrorArr.page = obj.attr('mt-page');
                    tempErrorArr.row = 0;
                    tempErrorArr.Field = obj.attr('mt-field');
                    tempErrorArr.Message = `Kode bahan galian tidak ada di rincian blok 5`;
                    tempErrorArr.Treatment = "Manual Cek";
                    tempErrorArr.IsFatal = 1;
                    tempErrorArr.Level = "RT";
                    tempErrorArr.no_art = 0;
                    tempErrorArr.no_usaha = 0;
                    tempErrorArr.Alias = obj.attr('mt-alias');
                    self.OBJ_ERROR.push(tempErrorArr);
                };
                error_id++;
            });
        }

    }

    this.cekGalianUrt = function () {
        let error_id = 400;
        let arr_max_produksi = [];
        let arr_max_volume = [];
        let max_produksi = 0;
        let max_volume = 0;
        let arr_kode_bh = [];
        $("input[name*='r109'][name*='_k5']").each(function () {
            let obj = $(this);
            let value = self.GET_VALUE_BY_OBJECT(obj);
            if (value != '' && value > max_produksi) {
                max_produksi = value;
            }
        });
        if (max_produksi != 0) {
            //cek apakah yg punya nilai maximum lebih dari satu
            $("input[name*='r109'][name*='_k5']").each(function () {
                let obj = $(this);
                let value = self.GET_VALUE_BY_OBJECT(obj);
                if (value == max_produksi) {
                    //ambil nilai
                    let temp = {};
                    let obj_volume = obj.parent().prev().prev().children();
                    let obj_bh = obj.parent().prev().prev().prev().children();
                    let nilai_volume = self.GET_VALUE_BY_OBJECT(obj_volume);
                    let kode_bh = self.GET_VALUE_BY_OBJECT(obj_bh);
                    temp.produksi = value;
                    temp.obj_volume = obj_volume;
                    temp.nilai_volume = nilai_volume;
                    temp.obj_bh = obj_bh;
                    temp.kode_bh = kode_bh;
                    arr_max_produksi.push(temp);
                }
            });

            if (arr_max_produksi.length == 1) {
                let kode_bh = arr_max_produksi[0].kode_bh;
                arr_kode_bh.push(kode_bh);
            }
            else {
                $.each(arr_max_produksi, function (index, value) {
                    if (value.nilai_volume != '' && value.nilai_volume > max_volume) {
                        max_volume = value.nilai_volume;
                    }
                });
                if (max_volume != 0) {
                    $.each(arr_max_produksi, function (index, value) {
                        if (value.nilai_volume == max_volume) {
                            arr_max_volume.push(value);
                        }
                    });
                }
                if (arr_max_volume.length > 0) {
                    $.each(arr_max_volume, function (index, value) {
                        arr_kode_bh.push(value.kode_bh);
                    });
                }
            }

            //cek arr_kode_bh
            if(arr_kode_bh.length>0){
                let obj_r102 = $('#TGalianUrt_r102_kode');
                let value_r102 = self.GET_VALUE_BY_OBJECT(obj_r102);
                if ($.inArray(value_r102, arr_kode_bh) == -1) {
                    let tempErrorArr = {};
                    tempErrorArr.JenisKuesioner = self.JENIS_KUESIONER;
                    tempErrorArr.ErrorID = error_id;
                    tempErrorArr.page = obj_r102.attr('mt-page');
                    tempErrorArr.row = 0;
                    tempErrorArr.Field = obj_r102.attr('mt-field');
                    tempErrorArr.Message = `Kode bahan galian utama tidak sesuai dengan nilai/volume produksi`;
                    tempErrorArr.Treatment = "Manual Cek";
                    tempErrorArr.IsFatal = 1;
                    tempErrorArr.Level = "RT";
                    tempErrorArr.no_art = 0;
                    tempErrorArr.no_usaha = 0;
                    tempErrorArr.Alias = obj_r102.attr('mt-alias');
                    self.OBJ_ERROR.push(tempErrorArr);
                }
            }

        }
    }
}
