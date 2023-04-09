var Control = function (config) {
    this.globals = config.globals;
    this.VALIDATION = {};
    this.oldConsoleLog = null;
    this.MASTER_KABUPATEN = typeof config.master_kabupaten !== 'undefined' ? config.master_kabupaten : null;
    this.MASTER_KECAMATAN = typeof config.master_kecamatan !== 'undefined' ? config.master_kecamatan : null;
    this.DATA_KAB = typeof config.data_kab !== 'undefined' ? config.data_kab : null;
    this.DATA_KEC = typeof config.data_kec !== 'undefined' ? config.data_kec : null;
    this.KODE_PROV = typeof config.kode_prov !== 'undefined' ? config.kode_prov : null;
    this.KODE_KAB = typeof config.kode_kab !== 'undefined' ? config.kode_kab : null;

    var self = this;

    this.initControl = function () {
        $('input,select').live("keypress", function (e) {
            /* ENTER PRESSED*/
            if (e.keyCode === 13) {
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("form").eq(0).find(":input:not([readonly])[type!='hidden']");
                var idx = inputs.index(this);
                if (idx === inputs.length - 1) {
                    inputs[0].select();
                } else {
                    var obj = inputs[idx + 1];
                    if (obj.type === 'select-one') {
                        obj.focus();
                    }
                    else {
                        obj.focus();
                        obj.select();
                    }
                }
                return false;
            }
        });
        $("input,textarea").live("focus", function () {
            $(this).select();
        });
        $('.text-uppercase').live('keyup', function () {
            this.value = this.value.toUpperCase();
        });
        $('.text-lowercase').live('keyup', function () {
            this.value = this.value.toLowerCase();
        });
        $('.moving').live('click', function () {
            self.movingCursor($(this));
            self.checkPos();
        });
        $(".btn-next").live('click', function () {
            //console.log(CURRENT_PAGE);
            self.VALIDATION.CURRENT_PAGE = self.VALIDATION.CURRENT_PAGE + 1;
            self.moveToTab(self.VALIDATION.CURRENT_PAGE);
            self.checkPos();
        });
        $(".btn-prev").live('click', function () {
            self.VALIDATION.CURRENT_PAGE = self.VALIDATION.CURRENT_PAGE - 1;
            self.moveToTab(self.VALIDATION.CURRENT_PAGE);
            self.checkPos();
        });

        $("ul.tab-form > li").live('click', function () {
            var child = $(this).children();
            self.VALIDATION.CURRENT_PAGE = parseInt(child.attr('halaman'));
            self.checkPos();
        });

        //fungsi untuk paksa isi format telp
        $(".textFieldTelp").live('keydown', function (e) {
            // Allow: delete, backspace, tab, escape, enter, space, semicolon, numpadadd, numpadsubstract, kurung, kurung, minus, plus
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 32, 107, 109, 48, 57, 173, 188, 189, 190, 191]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode === 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        //fungsi untuk paksa isi format numeric
        $(".textFieldNumber").live('keydown', function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode === 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
        $('.btn-add-row').live('click', function () {
            var table_name = $(this).attr('table');
            var no_art = $(this).attr('no-art');
            var no_usaha = $(this).attr('no-usaha');
            var table = self.getTable(table_name, no_art, no_usaha);
            var tr = table.find('>tbody').children();
            if (tr.hasClass('empty') && self.rowCount(table_name, no_art, no_usaha) === 1) {
                tr.remove();
            }
            self.addRowGrid(table_name, no_art, no_usaha);
        });

        $('.btn-delete-row').live('click', function () {
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin akan menghapus data ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true
            }).then((willDelete) => {
                if (willDelete) {
                    var tr = $(this).parent().parent();
                    var table_name = $(this).attr('table');
                    var no_art = $(this).attr('no-art');
                    var no_usaha = $(this).attr('no-usaha');
                    var table = self.getTable(table_name, no_art, no_usaha);
                    if (self.rowCount(table_name, no_art, no_usaha) === 1) {
                        self.deleteRow(tr);
                        table.append(self.globals.NO_DATA_GRID);
                    }
                    else {
                        self.deleteRow(tr);
                        self.renumbering(table_name, no_art, no_usaha);
                    }
                }
            });
        });

        $('.btn-delete-row-usaha').live('click', function () {
            var rows = $(this).attr('rows');
            var is_isi = self.checkUsahaIsi(rows);
            if (is_isi) {
                swal({
                    title: "Konfirmasi",
                    text: "Usaha ini sudah pernah di entri. Apakah anda yakin akan menghapus usaha ini?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                }).then((willDelete) => {
                    if (willDelete) {
                        var tr = $(this).parent().parent();
                        var table_name = $(this).attr('table');
                        var no_art = $(this).attr('no-art');
                        var no_usaha = $(this).attr('no-usaha');
                        var table = self.getTable(table_name, no_art, no_usaha);
                        if (self.rowCount(table_name, no_art, no_usaha) === 1) {
                            self.deleteRow(tr);
                            table.append(self.globals.NO_DATA_GRID);
                        }
                        else {
                            self.deleteRow(tr);
                            self.renumbering(table_name, no_art, no_usaha);
                        }
                        //hapus keterangan usahanya
                        self.deleteKeteranganUsaha(rows);

                    }
                });
            }
            else {
                swal({
                    title: "Konfirmasi",
                    text: "Apakah anda yakin akan menghapus data ini?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                }).then((willDelete) => {
                    if (willDelete) {
                        var tr = $(this).parent().parent();
                        var table_name = $(this).attr('table');
                        var no_art = $(this).attr('no-art');
                        var no_usaha = $(this).attr('no-usaha');
                        var table = self.getTable(table_name, no_art, no_usaha);
                        if (self.rowCount(table_name, no_art, no_usaha) === 1) {
                            self.deleteRow(tr);
                            table.append(self.globals.NO_DATA_GRID);
                        }
                        else {
                            self.deleteRow(tr);
                            self.renumbering(table_name, no_art, no_usaha);
                        }
                    }
                });
            }

        });

        $('.btn-delete-keterangan-usaha').live('click', function () {
            var rows = $(this).attr('rows');
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin akan menghapus data keterangan usaha ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true
            }).then((willDelete) => {
                if (willDelete) {
                    self.deleteKeteranganUsaha(rows);
                }
            });
        });
        $('.btn-clear-radio').live('click', function () {
            var name = $(this).attr('target-name');
            var selector = "input[name='" + name + "']";
            $(selector).each(function () {
                $(this).prop('checked', false);
            });
        });
        $(".pilih-provinsi").live('change', function () {
            var id = $(this).attr('id');
            var kab_selector = id.replace(/.$/, "5");
            var prov = $(this).val();
            self.searchKabupaten(prov, $('#' + kab_selector));
        });

        $(".pilih-kabupaten").live('change', function () {
            var id = $(this).attr('id');
            var kec_selector = id.replace(/.$/, "5");
            var kab = $(this).val();
            self.searchKecamatan(kab, $('#' + kec_selector));
        });
        $(".btn-error").live('click', function (ev) {
            self.showErrorDialog($(this));
        });
        $('.btn-confirm-warning').live('click', function () {
            self.confirmWarning();
        });

        self.countTableRow();
        self.setArtUsaha();
        self.buildKabupatenDrop();
        self.buildKecamatanDrop();
        self.rataBahanBakar();
        if (self.VALIDATION.JENIS_KUESIONER == self.globals.JENIS_KUESIONER.CAPTIVE) {
            self.captiveP12();
        }
        self.bindKeyControl();

    }
    this.initStyle = function () {

    }
    this.captiveP12 = function () {
        let obj_p12 = self.VALIDATION.GET_OBJECT('p12');
        let obj_p12_1 = self.VALIDATION.GET_OBJECT('p12_1');
        let obj_p12_2 = self.VALIDATION.GET_OBJECT('p12_2');
        let obj_p12_3 = self.VALIDATION.GET_OBJECT('p12_3');
        let value_p12 = obj_p12.val() != '' ? parseInt(obj_p12.val()) : 0;
        obj_p12_1.live('click', function () {
            if ($(this).prop('checked')) {
                value_p12 += 1;
            }
            else {
                value_p12 -= 1;
            }
            if (value_p12 == 0)
                obj_p12.val('');
            else
                obj_p12.val(value_p12);
        });
        obj_p12_2.live('click', function () {
            if ($(this).prop('checked')) {
                value_p12 += 2;
            }
            else {
                value_p12 -= 2;
            }
            if (value_p12 == 0)
                obj_p12.val('');
            else
                obj_p12.val(value_p12);
        });
        obj_p12_3.live('click', function () {
            if ($(this).prop('checked')) {
                value_p12 += 64;
            }
            else {
                value_p12 -= 64;
            }
            if (value_p12 == 0)
                obj_p12.val('');
            else
                obj_p12.val(value_p12);
        });


    }
    this.fetchData = function (page_index) {
        var quest_type = $('#Params_quest_type').val();
        return $.ajax({
            url: this.VALIDATION.globals.URL_FETCH_DATA,
            type: 'post',
            dataType: 'json',
            data: {
                ajax: true,
                source: this.VALIDATION.source,
                page_index: page_index
            },
            success: function (data) {
                if (data.status) {
                    this.VALIDATION.STATUS_DOKUMEN = data.status_dokumen;
                }
            }
        });
    }
    this.setObjByString = function (obj, str, val) {
        var keys, key;
        //make sure str is a string with length
        if (!str || !str.length || Object.prototype.toString.call(str) !== "[object String]") {
            return false;
        }
        if (obj !== Object(obj)) {
            //if it's not an object, make it one
            obj = {};
        }
        keys = str.split(".");
        while (keys.length > 1) {
            key = keys.shift();
            if (obj !== Object(obj)) {
                //if it's not an object, make it one
                obj = {};
            }
            if (!(key in obj)) {
                //if obj doesn't contain the key, add it and set it to an empty object
                obj[key] = {};
            }
            obj = obj[key];
        }
        return obj[keys[0]] = val == 'true' ? true : val == 'false' ? false : val;
    };
    this.buildDataForm = function (form) {
        var data = {};
        var quest_type = $('#Params_quest_type').val();
        var source = $('#Params_source').val();
        form.each(function () {
            var obj = $(this);
            var name = obj.attr('name');
            //console.log(name);
            var value = null;
            //cek object type
            if (obj.attr('type') === 'checkbox') {
                //cek apakah attr checked
                if (obj.is(':checked'))
                    value = 1;
                else
                    value = 0;
            }
            else if (obj.attr('type') === 'radio') {
                var selector = "[name*='" + name + "']:checked";
                value = $(selector).val();
            }
            else {
                //cek apakah pakai mask-currency
                if (obj.hasClass('mask'))
                    value = obj.inputmask('unmaskedvalue');
                else if (obj.hasClass('text-uppercase')) {
                    value = obj.val();
                    if (value != null)
                        value = value.toUpperCase();
                }
                else {
                    value = obj.val();
                }


            }
            //cek lagi apakah obj disabled atau tidak
            if (value == 0 || value == "" || obj.prop('disabled'))
                value = null;

            self.setObjByString(data, name, value);
        });
        self.setObjByString(data, 'ajax', true);
        self.setObjByString(data, 'quest_type', quest_type);
        self.setObjByString(data, 'source', source);
        self.setObjByString(data, 'current_page', CURRENT_PAGE);
        return data;
    }

    this.buildDataUsaha = function () {
        var data = Array();
        $('.container-art-usaha').each(function () {
            var temp = {};
            var temp_data = {};
            var container = $(this);
            var no_art = $(this).attr('no-art');
            var no_usaha = $(this).attr('no-usaha');
            container.find('input,textarea').each(function () {
                var obj = $(this);
                var name = obj.attr('name');
                var value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj);
                self.setObjByString(temp_data, name, value);
            });
            temp.no_art = $(this).attr('no-art');
            temp.no_usaha = $(this).attr('no-usaha');
            temp.data = temp_data;
            data.push(temp);
        });
        return data;
    }

    this.ajaxSave = function (data) {
        return $.ajax({
            url: this.VALIDATION.globals.URL_AJAX_SAVE,
            type: 'post',
            dataType: 'json',
            data: data,
            success: function (data) {
                if (data.status) {
                    this.VALIDATION.STATUS_DOKUMEN = data.status_dokumen;
                }
            }
        });
    }

    this.ajaxConfirm = function (is_confirm) {
        return $.ajax({
            url: this.VALIDATION.globals.URL_AJAX_CONFIRM,
            type: 'post',
            dataType: 'json',
            data: {
                ajax: true,
                source: this.VALIDATION.source,
                is_confirm: is_confirm
            },
            success: function (data) {
            }
        });
    }

    this.autoSum = function (fields, destination, level) {
        var result = 0;
        if (level == 'RT') {
            fields.forEach(function (field) {
                var value = parseInt(this.VALIDATION.GETVALUE(field)) || 0;
                result = result + value;
            });
        }
        else {
            result = this.VALIDATION.SUM(fields);
        }
        //pasangkan ke tujuan
        result = result == 0 ? '' : result;
        destination.forEach(function (des) {
            var selector = "[name*='[" + des + "]']";
            $(selector).val(result);
        });
    }

    this.mapping = function (page_index) {
        // $.when(fetchData(page_index)).then(function (result) {
        //     $.each(result.data, function (key, value) {
        //         var selector = "[name*='[" + key + "]']";
        //         var obj = $(selector);
        //         if (obj.attr('type') === 'checkbox') {
        //             if (value == 1 || value === '1')
        //                 obj.iCheck('check');
        //         }
        //         else if (obj.attr('type') === 'radio') {
        //             var selector = "[name*='[" + key + "]'][value='" + value + "']";
        //             $(selector).iCheck('check');
        //         }
        //         else {
        //             obj.val(value);
        //         }
        //     });
        //     var persen = persentase(page_index, END_PAGE);
        //     updateModalPrepare(persen + '%', persen + '%');
        //     page_index++;
        //     if (page_index <= 12) {
        //         setTimeout(function () {
        //             mapping(page_index);
        //         }, 300);
        //     }
        //     else {
        //
        //
        //         runAutoSum();
        //         skip();
        //         checkUsaha();
        //         check801A4();
        //         check205();
        //         check403A();
        //         check802B();
        //
        //         //initAutoComplete();
        //         hideModalPrepare();
        //         RUN_SKIP = true;
        //         $('#btn-select-file').removeAttr('disabled');
        //
        //
        //     }
        //
        // });
    }

    this.disableInput = function (selectors) {
        var selectorArr = selectors.split(",").map(function (item) {
            return item.trim();
        });
        $.each(selectorArr, function (key, value) {
            if (value.indexOf('table') != -1) {
                var obj = $('#' + value);
                obj.find("input, a").each(function () {
                    if ($(this).hasClass('flat')) {
                        $(this).iCheck('disable');
                        $(this).parent().parent().addClass('text-disabled');
                    }
                    else {
                        $(this).prop("disabled", true);
                        $(this).addClass('control-disabled');
                    }

                });
            }
            else {
                var selector = "[name*='[" + value + "]']";
                var obj = $(selector);
                obj.each(function () {
                    if ($(this).hasClass('flat')) {
                        $(this).iCheck('disable');
                        $(this).parent().parent().addClass('text-disabled');
                    }
                    else {
                        $(this).attr('disabled', 'disabled');
                        $(this).addClass('control-disabled');
                    }
                });
            }
        });
    }

    this.enableInput = function (selectors) {
        var selectorArr = selectors.split(",").map(function (item) {
            return item.trim();
        });
        $.each(selectorArr, function (key, value) {
            if (value.indexOf('table') != -1) {
                var obj = $('#' + value);
                obj.find("input, a").each(function () {
                    if ($(this).hasClass('flat')) {
                        $(this).iCheck('disable');
                        $(this).parent().parent().addClass('text-disabled');
                    }
                    else {
                        $(this).removeAttr('disabled');
                        $(this).removeClass('control-disabled');
                    }
                });
            }
            else {
                var selector = "[name*='[" + value + "]']";
                var obj = $(selector);
                obj.each(function () {
                    if ($(this).hasClass('flat')) {
                        $(this).iCheck('enable');
                        $(this).parent().parent().removeClass('text-disabled');
                    }
                    else {
                        $(this).removeAttr('disabled');
                        $(this).removeClass('control-disabled');
                    }
                });
            }

        });
    }
    this.disableBlok = function (selectors) {
        var listBlok = selectors.split(",").map(function (item) {
            return item.trim();
        });
        $.each(listBlok, function (key, blok) {
            var selector = '.container-blok-' + blok;
            $(selector).find('input,textarea').each(function (i, e) {
                if ($(this).hasClass('flat')) {
                    $(this).iCheck('disable');
                    $(this).parent().parent().addClass('text-disabled');
                }
                else
                    $(this).attr('disabled', 'disabled');
            });
        });
    }

    this.enableBlok = function (selectors) {
        var listBlok = selectors.split(",").map(function (item) {
            return item.trim();
        });
        $.each(listBlok, function (key, blok) {
            var selector = '.container-blok-' + blok;
            $(selector).find('input,textarea').each(function (i, e) {
                if ($(this).hasClass('flat')) {
                    $(this).iCheck('enable');
                    $(this).parent().parent().removeClass('text-disabled');
                }
                else
                    $(this).removeAttr('disabled');
            });
        });
    }

    this.skip = function (field) {
        var list_skip = this.VALIDATION.SKIP;
        if (typeof field !== 'undefined')
            list_skip = $.grep(this.VALIDATION.SKIP, function (obj) {
                return obj.Field == field;
            });
        list_skip.forEach(function (obj_skip) {
            try {
                if (typeof field === 'undefined') {
                    var field = obj_skip.Field;
                }
                var value = this.VALIDATION.GETVALUE(field).toString();
                if (obj_skip.CustomFunctions != null)
                    value = String(eval(obj_skip.CustomFunctions));
                var rangeValue = obj_skip.RangeValue.split(",").map(function (item) {
                    return item.trim();
                });
                if (value !== "") {
                    if ($.inArray(value, rangeValue) !== -1) {
                        console.log('hehe');
                        if (obj_skip.EnableInput != null) {
                            this.enableInput(obj_skip.EnableInput);
                        }
                        if (obj_skip.DisableInput != null) {
                            this.disableInput(obj_skip.DisableInput);
                        }
                        if (obj_skip.EnableBlok != null) {
                            this.enableBlok(obj_skip.EnableBlok);
                        }
                        if (obj_skip.DisableBlok != null) {
                            this.disableBlok(obj_skip.DisableBlok);
                        }
                        if (obj_skip.Page != null && this.VALIDATION.RUN_SKIP == true) {
                            var selector_form = "#form-page" + this.VALIDATION.CURRENT_PAGE + ' :input';
                            var data = this.buildDataForm($(selector_form));
                            var obj_error = this.VALIDATION.Validate(this.VALIDATION.CURRENT_PAGE);
                            this.VALIDATION.markError(obj_error, this.VALIDATION.CURRENT_PAGE);
                            this.setObjByString(data, 'obj_error', obj_error);
                            this.ajaxSave(data);
                            var destination = parseInt(obj_skip.Page);
                            this.goToPage(this.VALIDATION.CURRENT_PAGE, destination);
                        }
                    }
                    else {
                        console.log('ini tidak ada di level');
                    }
                }

            } catch (e) {
                console.log(field);
                console.log(e);
            }
        });
    }

    this.goToPage = function (origin, destination) {
        if (destination < this.VALIDATION.START_PAGE || destination > this.VALIDATION.END_PAGE) {
            alert('End of page!');
            return;
        }
        var selector_origin = '#container-page-' + origin;
        var selector_destination = '#container-page-' + destination;
        if (destination < origin) {
            $(selector_origin).hide("slide", { direction: "right" }, 1000);
            $(selector_destination).show("slide", { direction: "left" }, 1000);
        }
        else {
            $(selector_origin).hide("slide", { direction: "left" }, 500, function () {
                $(selector_destination).show("slide", { direction: "right" }, 1000);
            });
        }

        //untuk control button
        if (destination == this.VALIDATION.END_PAGE) {
            $('.btn-next').hide();
            $('.btn-prev').show();
        }
        else if (destination == this.VALIDATION.START_PAGE) {
            $('.btn-next').show();
            $('.btn-prev').hide();
        }
        else {
            $('.btn-next').show();
            $('.btn-prev').show();
        }

        moveSlider(destination);
        this.VALIDATION.CURRENT_PAGE = destination;
        return true;
    }

    this.moveSlider = function (destination) {
        var cell = $(".cell[page='" + destination + "']");
        $('.cell').removeClass('next prev active done');
        cell.addClass('active');
        cell.prevAll('.cell').addClass('done');
        cell.prev('.cell').addClass('prev');
        cell.next('.cell').addClass('next');
    }
    this.showNotification = function (text, type, title) {
        swal(title, text, type);
    }

    this.enableLogger = function () {
        if (oldConsoleLog == null)
            return;
        window['console']['log'] = oldConsoleLog;
    }
    this.disableLogger = function () {
        oldConsoleLog = console.log;
        window['console']['log'] = function () {
        };
    };

    this.saveAll = function () {
        var selector_form = "#form-page" + page_index + ' :input';
        var data = this.buildDataForm($(selector_form));
        var obj_error = this.VALIDATION.Validate(page_index);
        this.VALIDATION.markError(obj_error, page_index);
        this.setObjByString(data, 'obj_error', obj_error);
        $.when(this.ajaxSave(data)).then(function () {
            if (!$.isEmptyObject(obj_error)) {
                this.VALIDATION.PAGE_ERROR.push(page_index);
            }
            page_index++;
            if (page_index <= this.VALIDATION.END_PAGE) {
                this.saveAll(page_index);
            }
        });
    }

    this.movingCursor = function (row_field) {
        var page = row_field.attr('page');
        var row = parseInt(row_field.attr('row'));
        var tipe = row_field.attr('tipe');
        var field = row_field.attr('field');
        var message = row_field.attr('message');
        var treatment = row_field.attr('treatment');
        var no_usaha = row_field.attr('no-usaha');
        var no_art = row_field.attr('no-art');
        //set value detail error
        $('#container-message').html(message);
        $('#container-perlakuan').html(treatment);

        //hapus semua class mark error di input
        $('input,textarea,select').each(function () {
            if ($(this).hasClass('error'))
                $(this).removeClass('error');
        });

        //set class ke field
        $('.moving').each(function () {
            $(this).removeClass('bg-orange');
        });
        $(row_field).addClass('bg-orange');

        //focus ke element
        //cek jika levelnya ART, treatmet landing

        var obj = {};
        if (tipe == self.globals.RULE_RT) {
            var selector = "[name*='[" + field + "]']";
            obj = $(selector);
            obj.addClass('error');
            obj.focus();

        }
        else if (tipe == self.globals.RULE_ART) {
            var selector = "[name*='[" + field + "]']";
            var index = 1;
            var value = null;
            $(selector).each(function () {
                if (index == row) {
                    obj = $(this);
                    obj.addClass('error');
                    obj.focus();
                    index++
                    return;
                }
                else
                    index++;
            });
        }

        else if (tipe == self.globals.RULE_RT_LOOP) {
            var selector = "[name*='[" + field + "]']";
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
            obj = $(selector);
            obj.addClass('error');
            obj.focus();

        }
        else if (tipe == self.globals.RULE_ART_LOOP) {
            var selector = "[name*='[" + field + "]']";
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
            var index = 1;
            var value = null;
            $(selector).each(function () {
                if (index == row) {
                    obj = $(this);
                    obj.addClass('error');
                    obj.focus();
                    index++
                    return;
                }
                else
                    index++;
            });
        }
        //aktifkan tab sesuai dengan value page
        self.moveToTab(page);
        // var absTopPosition = obj.position().top;
        // var scrollTopPosition = $(document).scrollTop();
        // var yPos = absTopPosition - scrollTopPosition;

        // var absLeftPosition = obj.position().left;
        // var scrollLeftPosition = $(document).scrollLeft();
        // var xPos = absLeftPosition - scrollLeftPosition;

        // $("#modal-daftar-error").dialog("option", "position", {
        //     //my: 'left top',
        //     //at: 'left top',
        //     //of: obj,
        //     autoOpen: false,
        //     width: '740px',
        //     resizeable: false,
        //     title: "DAFTAR ERROR/WARNING SPE",
        //     position: [xPos, yPos]
        // }).dialog("open");

        //set global current page
        self.VALIDATION.CURRENT_PAGE = parseInt(page);
    }

    this.moveToTab = function (page) {
        $("ul.tab-parent > li").each(function () {
            $(this).removeClass('active');
        });
        $(".tab-child").each(function () {
            $(this).removeClass('active');
        });
        var tab = '#tab_' + page;
        $('ul.tab-parent > li').each(function () {
            var child = $(this).children('a');
            if (child.attr('href') == tab) {
                child.attr('aria-expanded', 'true');
                $(this).addClass('active');
            }
            else {
                child.attr('aria-expanded', 'false');
            }
        });
        $(tab).addClass('active');

    }

    this.showModalPrepare_ = function () {
        swal('Sedang mempersiapkan kuesioner, silakan tunggu', {
            closeOnClickOutside: false,
            button: false,
        });
    }
    this.hideModalPrepare = function () {
        swal.close();
    }

    this.checkPos = function () {
        if (self.VALIDATION.CURRENT_PAGE == 0) {
            $('.btn-next').show();
            $('.btn-prev').hide();
            $('.btn-kirim').hide();
        }
        else if (self.VALIDATION.CURRENT_PAGE == self.VALIDATION.END_PAGE) {
            $('.btn-next').hide();
            $('.btn-prev').show();
            $('.btn-kirim').show();
        }
        else {
            $('.btn-next').show();
            $('.btn-prev').show();
            $('.btn-kirim').hide();
        }

    }

    this.addRowGrid = function (table_name, no_art, no_usaha) {
        var table = self.getTable(table_name, no_art, no_usaha);
        var new_row = $(self.generateRow(table_name, no_art, no_usaha));
        self.VALIDATION.applyMetadataByObject(new_row);
        $(new_row).appendTo(table).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
        //self.VALIDATION.applyMetadataByObject(table);

    }

    this.deleteRow = function (tr) {
        tr.remove();
    }

    this.rowCount = function (table_name, no_art, no_usaha) {
        var table = self.getTable(table_name, no_art, no_usaha);
        var row_count = table.find('> tbody > tr').length;
        return row_count;
    }

    this.getTable = function (table_name, no_art, no_usaha) {
        var selector = "[id='table-" + table_name + "']";
        if (typeof (no_art) != 'undefined' && typeof (no_usaha) != 'undefined') {
            selector += "[no-art='" + no_art + "'][no-usaha='" + no_usaha + "']";
        }
        var table = $(selector);
        return table;
    }

    this.renumbering = function (table_name, no_art, no_usaha) {
        var index = 1;
        var table = self.getTable(table_name, no_art, no_usaha);
        var rows = table.find('> tbody > tr');
        if ($.inArray(table_name, ['RTART', 'RTTANAMAN', 'RTHEWAN']) != -1) {
            rows.each(function () {
                var label = $(this).children().children('label');
                var no_urut = label.siblings();
                label.html(index);
                no_urut.val(index);
                index++;
            });
        }
        else {
            rows.each(function () {
                var label = $(this).children().children('label');
                var no_urut = label.html();
                label.html(index);
                index++;
            });
        }

    }

    this.numberToLetter = function (num) {
        var result = '';
        result = String.fromCharCode(96 + num);
        return result;
    }


    this.generateRow = function (table_name, no_art, no_usaha) {
        var new_row = '';
        var max_row = self.rowCount(table_name, no_art, no_usaha);
        // if (max_row >= 10) {
        //     self.showNotification('Batas maksimal baris pada tabel ' + table_name + ' adalah 10 baris', 'error', 'Gagal menambah baris');
        //     return;
        // }

        switch (table_name) {
            case self.globals.TABLE_FINANSIALBLOK3A:
                var new_row = '<tr index="' + self.globals.ROW_FINANSIALBLOK3A + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + self.globals.ROW_FINANSIALBLOK3A + '">' + (max_row + 1) + '</label></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3a_' + self.globals.ROW_FINANSIALBLOK3A + '_b3a_k1" name="TFinansialBlok3a[' + self.globals.ROW_FINANSIALBLOK3A + '][b3a_k1]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3a_' + self.globals.ROW_FINANSIALBLOK3A + '_b3a_k2" name="TFinansialBlok3a[' + self.globals.ROW_FINANSIALBLOK3A + '][b3a_k2]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3a_' + self.globals.ROW_FINANSIALBLOK3A + '_b3a_k2" name="TFinansialBlok3a[' + self.globals.ROW_FINANSIALBLOK3A + '][b3a_k3]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3a_' + self.globals.ROW_FINANSIALBLOK3A + '_b3a_k4" name="TFinansialBlok3a[' + self.globals.ROW_FINANSIALBLOK3A + '][b3a_k4]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3a_' + self.globals.ROW_FINANSIALBLOK3A + '_b3a_k5" name="TFinansialBlok3a[' + self.globals.ROW_FINANSIALBLOK3A + '][b3a_k5]" class="form-control"></td>';
                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + self.globals.ROW_FINANSIALBLOK3A + '" href="javascript:void(0)" table="' + self.globals.TABLE_FINANSIALBLOK3A + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_FINANSIALBLOK3A++;
                break;
            case self.globals.TABLE_FINANSIALBLOK4A:
                var new_row = '<tr index="' + self.globals.ROW_FINANSIALBLOK4A + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + self.globals.ROW_FINANSIALBLOK4A + '">' + (max_row + 1) + '</label></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k1" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k1]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k1_kode" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k1_kode]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k2" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k2]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k3" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k3]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k4" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k4]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k5" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k5]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k6" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k6]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k7" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k7]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k8" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k8]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4a_' + self.globals.ROW_FINANSIALBLOK4A + '_b4a_k9" name="TFinansialBlok4a[' + self.globals.ROW_FINANSIALBLOK4A + '][b4a_k9]" class="form-control"></td>';
                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + self.globals.ROW_FINANSIALBLOK4A + '" href="javascript:void(0)" table="' + self.globals.TABLE_FINANSIALBLOK4A + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_FINANSIALBLOK4A++;
                break;
            case self.globals.TABLE_FINANSIALBLOK5A:
                var new_row = '<tr index="' + self.globals.ROW_FINANSIALBLOK5A + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + self.globals.ROW_FINANSIALBLOK5A + '">' + (max_row + 1) + '</label></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k1" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k1]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k1_kode" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k1_kode]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k2" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k2]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k2" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k3]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k4" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k4]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k5" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k5]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k6" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k6]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k7" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k7]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k8" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k8]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5a_' + self.globals.ROW_FINANSIALBLOK5A + '_b5a_k9" name="TFinansialBlok5a[' + self.globals.ROW_FINANSIALBLOK5A + '][b5a_k9]" class="form-control"></td>';
                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + self.globals.ROW_FINANSIALBLOK5A + '" href="javascript:void(0)" table="' + self.globals.TABLE_FINANSIALBLOK5A + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_FINANSIALBLOK5A++;
                break;
            case self.globals.TABLE_FINANSIALBLOK3B:
                var new_row = '<tr index="' + self.globals.ROW_FINANSIALBLOK3B + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + self.globals.ROW_FINANSIALBLOK3B + '">' + (max_row + 1) + '</label></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3b_' + self.globals.ROW_FINANSIALBLOK3B + '_b3b_k1" name="TFinansialBlok3b[' + self.globals.ROW_FINANSIALBLOK3B + '][b3b_k1]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3b_' + self.globals.ROW_FINANSIALBLOK3B + '_b3b_k2" name="TFinansialBlok3b[' + self.globals.ROW_FINANSIALBLOK3B + '][b3b_k2]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3b_' + self.globals.ROW_FINANSIALBLOK3B + '_b3b_k2" name="TFinansialBlok3b[' + self.globals.ROW_FINANSIALBLOK3B + '][b3b_k3]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3b_' + self.globals.ROW_FINANSIALBLOK3B + '_b3b_k4" name="TFinansialBlok3b[' + self.globals.ROW_FINANSIALBLOK3B + '][b3b_k4]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok3b_' + self.globals.ROW_FINANSIALBLOK3B + '_b3b_k5" name="TFinansialBlok3b[' + self.globals.ROW_FINANSIALBLOK3B + '][b3b_k5]" class="form-control"></td>';
                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + self.globals.ROW_FINANSIALBLOK3B + '" href="javascript:void(0)" table="' + self.globals.TABLE_FINANSIALBLOK3B + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_FINANSIALBLOK3B++;
                break;
            case self.globals.TABLE_FINANSIALBLOK4B:
                var new_row = '<tr index="' + self.globals.ROW_FINANSIALBLOK4B + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + self.globals.ROW_FINANSIALBLOK4B + '">' + (max_row + 1) + '</label></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k1" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k1]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k1_kode" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k1_kode]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k2" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k2]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k3" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k3]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k4" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k4]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k5" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k5]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k6" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k6]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k7" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k7]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k8" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k8]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok4b_' + self.globals.ROW_FINANSIALBLOK4B + '_b4b_k9" name="TFinansialBlok4b[' + self.globals.ROW_FINANSIALBLOK4B + '][b4b_k9]" class="form-control"></td>';
                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + self.globals.ROW_FINANSIALBLOK4B + '" href="javascript:void(0)" table="' + self.globals.TABLE_FINANSIALBLOK4B + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_FINANSIALBLOK4B++;
                break;
            case self.globals.TABLE_FINANSIALBLOK5B:
                var new_row = '<tr index="' + self.globals.ROW_FINANSIALBLOK5B + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + self.globals.ROW_FINANSIALBLOK5B + '">' + (max_row + 1) + '</label></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k1" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k1]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k1_kode" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k1_kode]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k2" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k2]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k2" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k3]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k4" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k4]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k5" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k5]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k6" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k6]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k7" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k7]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k8" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k8]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TFinansialBlok5b_' + self.globals.ROW_FINANSIALBLOK5B + '_b5b_k9" name="TFinansialBlok5b[' + self.globals.ROW_FINANSIALBLOK5B + '][b5b_k9]" class="form-control"></td>';
                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + self.globals.ROW_FINANSIALBLOK5B + '" href="javascript:void(0)" table="' + self.globals.TABLE_FINANSIALBLOK5B + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_FINANSIALBLOK5B++;
                break;
            case self.globals.TABLE_RTART:
                var new_row = '<tr index="' + self.globals.ROW_RTART + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + self.globals.ROW_RTART + '">' + (max_row + 1) + '</label><input type="hidden" value="' + (max_row + 1) + '" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k1" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k1]"></td>';
                new_row += '<td><input type="text" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k2" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k2]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k2" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k3]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k4" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k4]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k5" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k5]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k6" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k6]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k7" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k7]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k8" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k8]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtArt_' + self.globals.ROW_RTART + '_b2_k9" name="TRtArt[' + self.globals.ROW_RTART + '][b2_k9]" class="form-control"></td>';
                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + self.globals.ROW_RTART + '" href="javascript:void(0)" table="' + self.globals.TABLE_RTART + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_RTART++;
                break;
            case self.globals.TABLE_RTUSAHA:
                var rows = self.guid();
                var new_row = '<tr index="' + self.globals.ROW_RTUSAHA + '" rows="' + rows + '" class="rows-data-modal">';
                new_row += '<td><input type="text" id="TRtUsaha_' + self.globals.ROW_RTUSAHA + '_b3_k1" name="TRtUsaha[' + self.globals.ROW_RTUSAHA + '][b3_k1]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtUsaha_' + self.globals.ROW_RTUSAHA + '_b3_k2" name="TRtUsaha[' + self.globals.ROW_RTUSAHA + '][b3_k2]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtUsaha_' + self.globals.ROW_RTUSAHA + '_b3_k2" name="TRtUsaha[' + self.globals.ROW_RTUSAHA + '][b3_k3]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtUsaha_' + self.globals.ROW_RTUSAHA + '_b3_k4" name="TRtUsaha[' + self.globals.ROW_RTUSAHA + '][b3_k4]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtUsaha_' + self.globals.ROW_RTUSAHA + '_b3_k5" name="TRtUsaha[' + self.globals.ROW_RTUSAHA + '][b3_k5]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtUsaha_' + self.globals.ROW_RTUSAHA + '_b3_k6" name="TRtUsaha[' + self.globals.ROW_RTUSAHA + '][b3_k6]" class="form-control"></td>';
                new_row += '<td><input type="text" id="TRtUsaha_' + self.globals.ROW_RTUSAHA + '_b3_k7" name="TRtUsaha[' + self.globals.ROW_RTUSAHA + '][b3_k7]" class="form-control"><input type="hidden" value="' + rows + '" id="TRtUsaha_' + self.globals.ROW_RTUSAHA + '_rows" name="TRtUsaha[' + self.globals.ROW_RTUSAHA + '][rows]"></td>';
                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row-usaha" index="' + self.globals.ROW_RTUSAHA + '" href="javascript:void(0)" table="' + self.globals.TABLE_RTUSAHA + '" rows="' + rows + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_RTUSAHA++;
                break;
            case self.globals.TABLE_RTTANAMAN:
                var row_index = self.globals.ROW_RTTANAMAN[no_art + no_usaha];
                var no_urut_usaha = self.globals.NO_USAHA_RTTANAMAN[no_art + no_usaha];
                console.log(no_art + no_usaha);
                console.log(row_index);
                var new_row = '<tr index="' + row_index + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + row_index + '">' + (max_row + 1) + '</label>';
                new_row += '<input type="hidden" no-art="' + no_art + '" no-usaha="' + no_usaha + '" value="' + (max_row + 1) + '" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k1" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k1]"></td>';

                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k2" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k2]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k2" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k3]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k4" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k4]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k5" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k5]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k6" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k6]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k7" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k7]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k8" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k8]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k9" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k9]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k10" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k10]" class="form-control"></td>';

                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_b7_k11" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][b7_k11]" class="form-control">';
                new_row += '<input type="hidden" value="' + no_art + '" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_no_art" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][no_art]">';
                new_row += '<input type="hidden" value="' + no_usaha + '" id="TRtTanaman_' + no_urut_usaha + '_' + row_index + '_no_usaha" name="TRtTanaman[' + no_urut_usaha + '][' + row_index + '][no_usaha]">';
                new_row += '</td>';

                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + row_index + '" href="javascript:void(0)" table="' + self.globals.TABLE_RTTANAMAN + '" no-art="' + no_art + '" no-usaha="' + no_usaha + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_RTTANAMAN[no_art + no_usaha]++;
                break;
            case self.globals.TABLE_RTHEWAN:
                var row_index = self.globals.ROW_RTHEWAN[no_art + no_usaha];
                var no_urut_usaha = self.globals.NO_USAHA_RTHEWAN[no_art + no_usaha];

                var new_row = '<tr index="' + row_index + '" class="rows-data-modal">';
                new_row += '<td style="text-align:center;vertical-align:middle"><label class="rows_' + row_index + '">' + (max_row + 1) + '</label>';
                new_row += '<input type="hidden" no-art="' + no_art + '" no-usaha="' + no_usaha + '" value="' + (max_row + 1) + '" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k1" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k1]"></td>';

                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k2" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k2]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k2" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k3]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k4" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k4]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k5" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k5]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k6" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k6]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k7" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k7]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k8" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k8]" class="form-control"></td>';
                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k9" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k9]" class="form-control"></td>';

                new_row += '<td><input no-art="' + no_art + '" no-usaha="' + no_usaha + '" type="text" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_b8_k10" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][b8_k10]" class="form-control">';
                new_row += '<input type="hidden" value="' + no_art + '" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_no_art" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][no_art]">';
                new_row += '<input type="hidden" value="' + no_usaha + '" id="TRtHewan_' + no_urut_usaha + '_' + row_index + '_no_usaha" name="TRtHewan[' + no_urut_usaha + '][' + row_index + '][no_usaha]">';
                new_row += '</td>';

                new_row += '<td width="75px" style="text-align: center;vertical-align: middle"><a class="btn-delete-row" index="' + row_index + '" href="javascript:void(0)" table="' + self.globals.TABLE_RTHEWAN + '" no-art="' + no_art + '" no-usaha="' + no_usaha + '"> <i style="color:red;font-size: 20px" class="fa fa-trash-o"></i> </a> </td>';
                new_row += '</tr>';
                self.globals.ROW_RTHEWAN[no_art + no_usaha]++;
                break;
            default:
                break;
        }
        return new_row;
    }

    this.guid = function () {
        function s4() {
            return Math.floor((1 + Math.random()) * 0x10000)
                .toString(16)
                .substring(1);
        }
        return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
    }

    this.setArtUsaha = function () {
        var index = 0;
        $('.container-art-usaha-detail').each(function () {
            var no_art = $(this).attr('no-art');
            var no_usaha = $(this).attr('no-usaha');
            $(this).find('input,textarea').each(function (i, e) {
                $(this).attr('no-art', no_art);
                $(this).attr('no-usaha', no_usaha);
                var name = $(this).attr('name');
                var id = $(this).attr('id');
                if (name.indexOf('TRtKeteranganUsaha') != -1) {
                    var position = 18;
                    var inject_name = '[' + index + ']';
                    var new_name = [name.slice(0, position), inject_name, name.slice(position)].join('');

                    var inject_id = '_' + index + '';
                    var new_id = [id.slice(0, position), inject_id, id.slice(position)].join('');
                    $(this).attr('name', new_name);
                    $(this).attr('id', new_id);
                }
            });
            index++;
        });
    }

    this.countTableRow = function () {
        self.globals.ROW_FINANSIALBLOK3A = self.rowCount(self.globals.TABLE_FINANSIALBLOK3A);
        self.globals.ROW_FINANSIALBLOK4A = self.rowCount(self.globals.TABLE_FINANSIALBLOK4A);
        self.globals.ROW_FINANSIALBLOK5A = self.rowCount(self.globals.TABLE_FINANSIALBLOK5A);
        self.globals.ROW_FINANSIALBLOK3B = self.rowCount(self.globals.TABLE_FINANSIALBLOK3B);
        self.globals.ROW_FINANSIALBLOK4B = self.rowCount(self.globals.TABLE_FINANSIALBLOK4B);
        self.globals.ROW_FINANSIALBLOK5B = self.rowCount(self.globals.TABLE_FINANSIALBLOK5B);
        self.globals.ROW_RTART = self.rowCount(self.globals.TABLE_RTART);
        self.globals.ROW_RTUSAHA = self.rowCount(self.globals.TABLE_RTUSAHA);


        $('.container-art-usaha-detail').each(function () {
            var no_art = $(this).attr('no-art');
            var no_usaha = $(this).attr('no-usaha');
            $(this).find('.table-RTTANAMAN').each(function (i, e) {
                var table = $(this);
                var row_count = table.find('> tbody > tr').length;

                self.globals.ROW_RTTANAMAN[no_art + no_usaha] = row_count;
                self.globals.NO_USAHA_RTTANAMAN[no_art + no_usaha] = self.globals.NO_URUT_USAHA;
            });
            $(this).find('.table-RTHEWAN').each(function (i, e) {
                var table = $(this);
                var row_count = table.find('> tbody > tr').length;

                self.globals.ROW_RTHEWAN[no_art + no_usaha] = row_count;
                self.globals.NO_USAHA_RTHEWAN[no_art + no_usaha] = self.globals.NO_URUT_USAHA;
            });

            self.globals.NO_URUT_USAHA++;
        });
    }

    this.checkUsahaIsi = function (rows) {
        var selector = '#tab_' + rows;
        var result = false;
        $(selector).find('input,textarea').each(function (i, e) {
            var value = self.VALIDATION.GET_VALUE_BY_OBJECT($(this));
            if (value != '') {
                result = true;
                return false;
            }
        });
        return result;
    }

    this.deleteKeteranganUsaha = function (rows) {
        var selector = "#tab_" + rows;
        var a = $('.container-keterangan-usaha-tab').find('a[href="' + selector + '"]');
        var tab = a.parent();
        var detail = $(selector);

        tab.remove();
        detail.remove();

        //cek apakah tab masih ada, jika kosong, ubah htmlnya
        if ($('.container-keterangan-usaha-tab').children().length == 0) {
            $('.container-keterangan-usaha').html('<div style="margin-bottom: 0px" class="alert bg-gray text-center">Tidak ditemukan data</div>');
        }
        else {

        }
    }
    this.ubahIdentitasUsaha = function (rows, no_art, no_usaha) {
        if (self.checkUsahaIsi(rows)) {
            var selector = "#tab_" + rows;
            var a = $('.container-keterangan-usaha-tab').find('a[href="' + selector + '"]');
            var detail = $(selector);

            //ubah detail art di link tabnya
            a.attr('no-art', no_art);
            a.attr('no-usaha', no_usaha);
            a.html('ART ' + no_art + ', USAHA ' + no_usaha);
            detail.attr('no-art', no_art);
            detail.attr('no-usaha', no_usaha);

            detail.find('input, textarea, a.btn-delete-row, button.btn-add-row, table#table-RTTANAMAN, table#table-RTHEWAN').each(function () {
                var obj = $(this);
                var name = obj.attr('name');
                if (typeof (name) != 'undefined') {
                    if (name.indexOf('b5_art') != -1)
                        obj.val(no_art);
                    if (name.indexOf('b5_usaha') != -1)
                        obj.val(no_usaha);
                    if (name.indexOf('no_art') != -1)
                        obj.val(no_art);
                    if (name.indexOf('no_usaha') != -1)
                        obj.val(no_usaha);
                }

                obj.attr('no-art', no_art);
                obj.attr('no-usaha', no_usaha);
            });

        }
    }

    this.showButtonDeleteUsaha = function (rows) {
        $('a.btn-delete-keterangan-usaha[rows="' + rows + '"]').show();
    }
    this.hideButtonDeleteUsaha = function (rows) {
        $('a.btn-delete-keterangan-usaha[rows="' + rows + '"]').hide();
    }

    this.addKeteranganUsaha = function (rows, no_art, no_usaha) {
        console.log(self.checkUsahaIsi(rows));
        if (!self.checkUsahaIsi(rows)) {
            //cek dulu, apakah sudah ada ART-usaha detilnya, kalau masih kosong buat framenya dulu
            if ($('.container-keterangan-usaha').find('ul.container-keterangan-usaha-tab').length == 0) {
                var frame = '<div class="nav-tabs-custom"><ul class="nav nav-tabs tab-form container-keterangan-usaha-tab" id="art"></ul><div class="tab-content grouping-usaha" style="background-color: #66BB6A"></div></div>';

                $('.container-keterangan-usaha').html(frame);
            }
            //ini untuk tabnya
            var tab = '<li><a href="#tab_' + rows + '" data-toggle="tab" no-art="' + no_art + '" no-usaha="' + no_usaha + '" aria-expanded="true">ART ' + no_art + ', USAHA ' + no_usaha + '</a></li>';
            $('.container-keterangan-usaha-tab').append(tab);
            //ini untuk container usaha detailnya
            //var container_art_usaha = $($('#container-new-usaha').html());
            var container_art_usaha = $(self.globals.NEW_USAHA);
            container_art_usaha.attr('id', 'tab_' + rows);
            container_art_usaha.attr('no-art', no_art);
            container_art_usaha.attr('no-usaha', no_usaha);
            container_art_usaha.addClass('container-art-usaha-detail');

            var index = self.globals.NO_URUT_USAHA;
            container_art_usaha.find('input,textarea,button.btn-add-row, table#table-RTTANAMAN, table#table-RTHEWAN,a.btn-delete-keterangan-usaha').each(function () {
                var obj = $(this);
                var name = obj.attr('name');
                var id = $(this).attr('id');
                if (typeof (name) != 'undefined') {
                    if (name.indexOf('b5_art') != -1)
                        obj.val(no_art);
                    if (name.indexOf('b5_usaha') != -1)
                        obj.val(no_usaha);
                    if (name.indexOf('no_art') != -1)
                        obj.val(no_art);
                    if (name.indexOf('no_usaha') != -1)
                        obj.val(no_usaha);
                    if (name.indexOf('TRtKeteranganUsaha') != -1) {
                        var position = 18;
                        var inject_name = '[' + index + ']';
                        var new_name = [name.slice(0, position), inject_name, name.slice(position)].join('');

                        var inject_id = '_' + index + '';
                        var new_id = [id.slice(0, position), inject_id, id.slice(position)].join('');
                        $(this).attr('name', new_name);
                        $(this).attr('id', new_id);
                    }
                }
                //untuk tambah rows di button delete
                if (obj.hasClass('btn-delete-keterangan-usaha'))
                    obj.attr('rows', rows);

                obj.attr('no-art', no_art);
                obj.attr('no-usaha', no_usaha);
            });
            container_art_usaha.find('li').each(function () {
                var obj = $(this);
                var a = obj.children();
                var href = a.attr('href');
                a.attr('href', href + '_' + rows);
            });
            container_art_usaha.find('div.tab-pane').each(function () {
                var obj = $(this);
                var id = obj.attr('id');
                obj.attr('id', id + '_' + rows);
            });
            self.VALIDATION.applyMetadataByObject(container_art_usaha);

            $(".grouping-usaha").append(container_art_usaha);

            self.globals.ROW_RTTANAMAN[no_art + no_usaha] = 1;
            self.globals.NO_USAHA_RTTANAMAN[no_art + no_usaha] = self.globals.NO_URUT_USAHA;
            self.globals.ROW_RTHEWAN[no_art + no_usaha] = 1;
            self.globals.NO_USAHA_RTHEWAN[no_art + no_usaha] = self.globals.NO_URUT_USAHA;
            self.globals.NO_URUT_USAHA++;
        }
    }

    this.searchKabupaten = function (prov, obj_kab) {

        if (prov != '') {
            obj_kab.html('<option value="" selected="selected">---PILIH KABUPATEN/KOTA---</option>');
            list_kabupaten = $.grep(self.MASTER_KABUPATEN, function (obj) {
                return obj.prov == prov;
            });
            list_kabupaten.forEach(function (kab) {
                $(obj_kab).append('<option value="' + kab.kab + '">[' + kab.kab + '] ' + kab.nama + '</option>')
            });
        }
    }
    this.searchKecamatan = function (kab, obj_kec) {

        if (kab != '') {
            obj_kec.html('<option value="" selected="selected">---PILIH KECAMATAN---</option>');
            list_kecamatan = $.grep(self.MASTER_KECAMATAN, function (obj) {
                return obj.prov == self.KODE_PROV && obj.kab == kab;
            });
            list_kecamatan.forEach(function (kec) {
                $(obj_kec).append('<option value="' + kec.kec + '">[' + kec.kec + '] ' + kec.nama + '</option>')
            });
        }
    }

    this.buildKabupatenDrop = function () {
        $('.pilih-provinsi').each(function () {
            var obj_prov = $(this);
            var name = obj_prov.attr('name');
            var matches = name.match(/\[(.*?)\]/);
            var field_prov = matches[1];
            var field_kab = field_prov.replace(/.$/, "5");
            var value_prov = obj_prov.val();
            var value_kab = self.DATA_KAB[field_kab];
            if (value_prov != '' && value_kab != '') {
                var obj_kab = $("[name*='" + field_kab + "']");
                self.searchKabupaten(value_prov, obj_kab);
                obj_kab.val(value_kab);
            }
        });

    }
    this.buildKecamatanDrop = function () {
        $('.pilih-kabupaten').each(function () {
            var obj_kab = $(this);
            var name = obj_kab.attr('name');
            var matches = name.match(/\[(.*?)\]/);
            var field_kab = matches[1];
            var field_kec = field_kab.replace(/.$/, "5");
            var value_kab = obj_kab.val();
            var value_kec = self.DATA_KEC[field_kec];
            if (value_kab != '' && value_kec != '') {
                var obj_kec = $("[name*='" + field_kec + "']");
                self.searchKecamatan(value_kab, obj_kec);
                obj_kec.val(value_kec);
            }
        });

    }
    this.getRangeHarga = function (obj_popover) {
        let result = '';
        let mt_rh = obj_popover.attr('mt-rh');
        let range_harga = $.grep(self.VALIDATION.RANGE_HARGA, function (obj) {
            return obj.kode == mt_rh && obj.prov == self.KODE_PROV;
        });
        if (!$.isEmptyObject(range_harga)) {
            let range = range_harga[0];
            if (range.min != null && range.max != null) {
                result += `<b>Range :</b> ${self.formatRata(range.min)} - ${self.formatRata(range.max)}`;
            }
        }
        else {
            //cek apakah ada attr range
            result = typeof (obj_popover.attr('mt-rh-text')) != 'undefined' ? `<b>Range :</b>` + obj_popover.attr('mt-rh-text') : '';
        }
        return result;
    }
    this.rataBahanBakar = function () {

        switch (self.VALIDATION.JENIS_KUESIONER) {
            case self.globals.JENIS_KUESIONER.GALIAN_BH:
                $("input[name*='r303'][name*='_k4']:not([name*='sum'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi = obj_popover.parent().prev().children();
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });


                });
                $("input[name*='r303'][name*='_k6']:not([name*='sum'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi = obj_popover.parent().prev().children();
                    var tip = self.eventPopover(obj_popover);
                    let string_range = self.getRangeHarga(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name*='r302'][name*='_k4']:not([name*='sum'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi1 = obj_popover.parent().prev().children();
                    let obj_pembagi2 = obj_popover.parent().prev().prev().children();
                    var tip = self.eventPopover(obj_popover);
                    let string_range = self.getRangeHarga(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi1);
                        let value_pembagi2 = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi2);
                        let value_pembagi = value_pembagi1 * value_pembagi2;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi1);
                        let value_pembagi2 = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi2);
                        let value_pembagi = value_pembagi1 * value_pembagi2;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name='TGalianBh[r301a]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    var tip = self.eventPopover(obj_popover);
                    let string_range = self.getRangeHarga(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('r201a1_k2');
                        let value_pembagi2 = self.VALIDATION.GETVALUE('r201a1_k3');
                        let value_pembagi3 = self.VALIDATION.GETVALUE('r201a3_k2');
                        let value_pembagi4 = self.VALIDATION.GETVALUE('r201a3_k3');
                        let value_pembagi = (value_pembagi1 + value_pembagi2 + value_pembagi3 + value_pembagi4) * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('r201a1_k2');
                        let value_pembagi2 = self.VALIDATION.GETVALUE('r201a1_k3');
                        let value_pembagi3 = self.VALIDATION.GETVALUE('r201a3_k2');
                        let value_pembagi4 = self.VALIDATION.GETVALUE('r201a3_k3');
                        let value_pembagi = (value_pembagi1 + value_pembagi2 + value_pembagi3 + value_pembagi4) * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name='TGalianBh[r301b]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    var tip = self.eventPopover(obj_popover);
                    let string_range = self.getRangeHarga(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('r201c');
                        let value_pembagi = (value_pembagi1) * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('r201c');
                        let value_pembagi = (value_pembagi1) * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name='TGalianBh[r301c]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    var tip = self.eventPopover(obj_popover);
                    let string_range = self.getRangeHarga(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('r201d');
                        let value_pembagi = value_pembagi1 * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('r201d');
                        let value_pembagi = value_pembagi1 * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name='TGalianBh[r402_k3]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    var tip = self.eventPopover(obj_popover);
                    let string_range = self.getRangeHarga(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE('r402_k2');
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE('r402_k2');
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name*='r503b'], input[name*='r505b'], input[name*='r506b'] ").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let field = obj_popover.attr('mt-field');
                    let field_split = field.split('_');
                    let field_pembagi = field_split[0].replace(/.$/, "a") + '_' + field_split[1];
                    var tip = self.eventPopover(obj_popover);
                    let string_range = self.getRangeHarga(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE(field_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE(field_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                break;
            case self.globals.JENIS_KUESIONER.GALIAN_URT:
                $("input[name='TGalianUrt[r108a_k2]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('r105a1_k2');
                        let value_pembagi2 = self.VALIDATION.GETVALUE('r105a1_k3');
                        let value_pembagi3 = self.VALIDATION.GETVALUE('r105b');
                        let value_pembagi4 = self.VALIDATION.GETVALUE('r104a');
                        let value_pembagi = (value_pembagi1 + value_pembagi2 + value_pembagi3) * value_pembagi4;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('r105a1_k2');
                        let value_pembagi2 = self.VALIDATION.GETVALUE('r105a1_k3');
                        let value_pembagi3 = self.VALIDATION.GETVALUE('r105b');
                        let value_pembagi4 = self.VALIDATION.GETVALUE('r104a');
                        let value_pembagi = (value_pembagi1 + value_pembagi2 + value_pembagi3) * value_pembagi4;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name*='r109'][name*='_k5']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi = obj_popover.parent().prev().prev().children();
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });

                $("input[name*='r107'][name*='_k3']:not([name*='sum'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        if (string_range != '') {
                            content = string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('focus', function () {
                        if (string_range != '') {
                            content = string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });

                });
                break;
            case self.globals.JENIS_KUESIONER.AIR_BERSIH:
                $("input[name*='b3r6'][name*='_k4']:not([name*='j'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi = obj_popover.parent().prev().children();
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name*='b3r6'][name*='_k6']:not([name*='j'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi = obj_popover.parent().prev().children();
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });

                $("input[name*='b4'][name*='_k3']:not([name*='j'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi = obj_popover.parent().prev().children();
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name*='b5r4'][name*='_k4']:not([name*='4h'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi = obj_popover.parent().prev().children();
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });

                $("input[name*='b3r3'][name*='_k4']:not([name*='3h'])").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let obj_pembagi = obj_popover.parent().prev().children();
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_pembagi);
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });

                $("input[name='TAirBersih[b3r1g_k2]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('b2r1f_k2');
                        let value_pembagi2 = self.VALIDATION.GETVALUE('b2r1f_k3');
                        let value_pembagi = (value_pembagi1 + value_pembagi2) * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('b2r1f_k2');
                        let value_pembagi2 = self.VALIDATION.GETVALUE('b2r1f_k3');
                        let value_pembagi = (value_pembagi1 + value_pembagi2) * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });

                $("input[name='TAirBersih[b3r1g_k3]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('b2r1f_k4');
                        let value_pembagi2 = self.VALIDATION.GETVALUE('b2r1f_k5');
                        let value_pembagi = (value_pembagi1 + value_pembagi2) * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi1 = self.VALIDATION.GETVALUE('b2r1f_k4');
                        let value_pembagi2 = self.VALIDATION.GETVALUE('b2r1f_k5');
                        let value_pembagi = (value_pembagi1 + value_pembagi2) * 12;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });

                break;
            case self.globals.JENIS_KUESIONER.CAPTIVE:
                $("input[name='TCaptive[p15a]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE('p13a');;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE('p13a');;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name='TCaptive[p15b]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE('p13b');;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE('p13b');;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                $("input[name='TCaptive[p15g]']").each(function () {
                    let content = '';
                    let obj_popover = $(this);
                    let string_range = self.getRangeHarga(obj_popover);
                    var tip = self.eventPopover(obj_popover);
                    let field_alias = obj_popover.attr('mt-alias');
                    obj_popover.live('keyup', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE('p13g');;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }

                    });
                    obj_popover.live('focus', function () {
                        let value = self.VALIDATION.GET_VALUE_BY_OBJECT(obj_popover);
                        let value_pembagi = self.VALIDATION.GETVALUE('p13g');;
                        if (value_pembagi != 0 && value_pembagi != '') {
                            let rata = (value / value_pembagi).toFixed(2);
                            content = '<b>Rata rata ' + field_alias + '</b> : ' + self.formatRata(rata) + '<br>' + string_range;
                            tip.content(content);
                            tip.show();
                        }
                    });
                    obj_popover.live('blur', function () {
                        tip.hide();
                    });
                });
                break;
            default:
                break;
        }



    }
    this.eventPopover = function (obj_popover) {
        var popover = new Tooltip();
        popover.position(obj_popover.get(0));
        popover.type('success');
        popover.effect('fade');
        return popover;
    }
    this.bindKeyControl = function () {
        let button_error = $('.btn-error');
        $(document).live('keydown', function (e) {
            if (e.which == 39 && e.ctrlKey) {
                let current_page = self.VALIDATION.CURRENT_PAGE;
                let next_page = current_page + 1;
                if (next_page <= self.VALIDATION.END_PAGE) {
                    self.moveToTab(next_page);
                    self.VALIDATION.CURRENT_PAGE = next_page;
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    $(':input:enabled:visible:first').focus();
                }
                else {
                    alert('end of page');
                }


            }
            else if (e.which == 37 && e.ctrlKey) {
                let current_page = self.VALIDATION.CURRENT_PAGE;
                let prev_page = current_page - 1;
                if (prev_page >= self.VALIDATION.START_PAGE) {
                    self.moveToTab(prev_page);
                    self.VALIDATION.CURRENT_PAGE = prev_page;
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    $(':input:enabled:visible:first').focus();
                }
                else {
                    alert('end of page');
                }

            }
            else if (e.ctrlKey && e.which == 83) {
                var form = $("#form-quest");
                self.VALIDATION.validate();
                var list_error = JSON.stringify(self.VALIDATION.getErrors());
                var input = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "list_error").val(list_error);

                form.append($(input));
                form.submit();
                e.preventDefault();
                e.stopPropagation();
            }
            else if (e.ctrlKey && (e.which == 69 || e.which == 87)) {
                if (!button_error.is(":hidden")) {
                    // self.showErrorDialog(button_error);
                    $("#modal-daftar-error").dialog('open');
                    e.preventDefault();
                    e.stopPropagation();
                }
            }
            else if (e.which == 27) {
                // self.hideErrorDialog();
                $("#modal-daftar-error").dialog('close');
            }


        });
    }
    this.showErrorDialog = function (button) {
        if (button.hasClass('btn-warning')) {
            let title = 'DAFTAR WARNING';
            $(".ui-dialog").find(".ui-dialog-titlebar").css("background", "#F39B19");
            $("#modal-daftar-error").dialog("option", "title", title).dialog('open');
        }
        else {
            let title = 'DAFTAR ERROR';
            $(".ui-dialog").find(".ui-dialog-titlebar").css("background", "#d73925");
            $("#modal-daftar-error").dialog("option", "title", title).dialog('open');
        }
    }
    this.hideErrorDialog = function () {
        $("#modal-daftar-error").dialog('close');
    }
    this.confirmWarning = function () {

    }
    this.formatRata = function (string_value) {
        let result = Inputmask.format(string_value,
            {
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
        return result;
    }
}
