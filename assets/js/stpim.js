var db = {};
var GLOBALS = new Globals();
var objControl = null;
var objValidation = null;
var TOOLS = new Tools();
var objErrorRT = null;
var vue = {};
var source = '';
var jenis_kuesioner = 'TStpim_';
var is_entri = 0;
var is_cleaning = 0;
//dom inputs
dom_input_prov = $('#' + jenis_kuesioner + 'prov');
dom_input_b4ak2 = $('#' + jenis_kuesioner +'_b4ak2');
dom_input_b4ak3 = $('#' + jenis_kuesioner +'_b4ak3');
var b4r2 = $('#' + jenis_kuesioner +'_b4r2');
var dom_input_kbli_label=$('#TStpim_r201_desk');
var dom_input_kbli=$('#TStpim_r201_kbli');
var master_kbli = {};

        function initAutoComplete() {
            let list_kbli=getKbli();
            list_kbli.then(function (data) {
                if (data.status) {
                    $('#TStpim_r201_desk').autocomplete({
                       //source: data.data,
                        lookup: data.data,
                        showNoSuggestionNotice: true,
                        noSuggestionNotice: 'Tidak ditemukan data',
                        onSelect: function (suggestion) {

                          // $(this).val(suggestion.value);
                           $('#TStpim_r201_kbli').val(suggestion.data);
                        },
                        onInvalidateSelection: function () {
                          //$(this).val(suggestion.data);
                           //$('#TStpim_r201_kbli').val('');
                        }
                    });

                    $('#TStpim_r201_kbli').autocomplete({
                       //source: data.data,
                        lookup: data.data,
                        showNoSuggestionNotice: true,
                        noSuggestionNotice: 'Tidak ditemukan data',
                        onSelect: function (suggestion) {
                           $(this).val(suggestion.data);

                        //   $('#TStpim_r201_kbli').val(suggestion.data);
                        },
                        onInvalidateSelection: function () {
                          $(this).val('');
                          // $('#TStpim_r201_kbli').val('');
                        }
                    });

                    $('.autocomplete-kbli').autocomplete({
                       //source: data.data,
                        lookup: data.data,
                        showNoSuggestionNotice: true,
                        noSuggestionNotice: 'Tidak ditemukan data',
                        onSelect: function (suggestion) {
                           var name = $(this).attr('id');
                           var id = name.replace('r402b_','').replace('_r402bk3','');
                           $.each(vue.list_r402b, function (index, value) {
                               if(value.no == parseInt(id)){
                                   value.r402bk3 = suggestion.data;
                               }
                           });

                        },
                        onInvalidateSelection: function () {
                          $(this).val('');
                        }
                    });



                }
            });
        }

        function getKbli() {
            return $.ajax({
                url: GLOBALS.URL_GETKBLIA,
                type: 'post',
                dataType: 'json',
                data: { ajax: true },
                success: function (data) {

                }
            });
        }

        function getKbki() {
            return $.ajax({
                url: GLOBALS.URL_GETKBKI,
                type: 'post',
                dataType: 'json',
                data: { ajax: true },
                success: function (data) {

                }
            });
        }

        function getKbkiT(term) {
            return $.ajax({
                url: GLOBALS.URL_GETKBKI2,
                type: 'post',
                dataType: 'json',
                data: { ajax: true, term:term },
                success: function (data) {

                }
            });
        }

        function initAutoCompleteKbki() {
            let list_kbki=getKbki();
            list_kbki.then(function (data) {
                if (data.status) {
                      objValidation.MASTER_KBKI = data.data;
                         // vue.list_kbki = data.data;
                }
            });


        }



$(".vue-select").live('change', function(){
  //alert(this.value)
  var result = this.value;
  var name = $(this).attr('id');
  if(name.includes('r402b')){
    var id = name.replace('r402b_','').replace('_r402bk8','');
    $.each(vue.list_r402b, function (index, value) {
        if(value.no == parseInt(id)){
            value.r402bk8 = result;
            vue.onChangeNegara(value,'r402b');
        }
    });
  }

  if(name.includes('r307')){
    var id = name.replace('r307_','').replace('_r307k8','');
    $.each(vue.list_r307, function (index, value) {
        if(value.no == parseInt(id)){
            value.r307k8 = result;
            vue.onChangeNegara(value,'r307');
        }
    });
  }


});

$(".select2-kbki").live('change', function(){
  //alert(this.value)
  var result = this.value;
  var name = $(this).attr('id');

  if(name.includes('r307')){
    var id = name.replace('r307_','').replace('_r307k8','');
    $.each(vue.list_r307, function (index, value) {
        if(value.no == parseInt(id)){
            value.r307k2_kode = result;
        }
    });
  }


});
/*Inisiasi Kuesioner*/
function initKues(data,psource,psave) {

    vue.id = data.id;
    vue.tahun = data.tahun;
   // vue.list_r307 = data.list_r307;
    is_entri = data.is_entri;
    is_cleaning = data.is_cleaning;
    vue.output = data.output;
    vue.list_satuan = data.list_satuan;
    var cleaning = 'edit';
    if(is_cleaning == 1){cleaning = 'cleaning'; jenis_kuesioner = 'TStpimCleaning_';}
    vue.renderData(data, 1);
    vue.master_negara = master_negara;
    vue.list_satuan = data.list_satuan;
    source = psource;
    var aksi = $('#aksi').val();
    var is_save = psave;
    objValidation = new Validation({
        'globals': GLOBALS,
        'source': source,
        'start_page': 1,
        'end_page': 12,
        'run_skip': false,
        'with_disable': false
    });
    objControl = new Control({
        'globals': GLOBALS
    });




    if (aksi === 'view') {
        objControl.disableAll();
    }

    if (is_save) {
        swal('Sedang memproses kuesioner, silakan tunggu', {
            closeOnClickOutside: true,
            button: false,
        });
    } else {
        objControl.showModalPrepare();
    }
    // objControl.showModalPrepare();
  //  objControl.disableLogger();

    (async () => {

       let getRule = await objValidation.getRule();
        let getMeta = await objValidation.getMetadata();
        let getError = await objValidation.getErrorList();
      let list_kbki= await getKbki();

        if(getError.status && getMeta.status && list_kbki.status){
            objValidation.applyMetadata();
            objControl.initControl();
            objControl.VALIDATION = objValidation;
            objValidation.MASTER_KBLI = data.list_kbli;
            vue.list_error = objValidation.ERROR_LIST ;
           //initAutoCompleteKbki();
             objValidation.MASTER_KBKI = list_kbki.data;

            vue.markError();
            $('#container-field-error').html(objValidation.generateErrorList());
            $('.select2').select2();
            $("#fixTable").tableFixer({"head" : true, "left" : 3});
            $("#fixTable2").tableFixer({"head" : true, "left" : 2});
            // initAutoComplete();
          //  initAutoCompleteKbki();
                if (is_save) {
                    objControl.showNotification('Data berhasil disimpan', 'success', 'Berhasil!');
                } else {
                   objControl.hideModalPrepare();
                }


        }
        else{
          objControl.showNotification('Gagal menyiapkan kuesioner, silakan refresh halaman kembali', 'error', 'Gagal!');
        }


    })()
}
/*End*/

/*Modal and Button event*/
$("#modal-daftar-error").dialog({
    autoOpen: false,
    width: '740px',
    resizeable: false,
    title: "DAFTAR ERROR/WARNING SKKRT",
    position: {
        my: 'top',
        at: 'top+150',
        of: window
    }
});
$('#container-field').slimScroll({
    height: '350px',
    size: '10px',
    color: '#F08519',
    alwaysVisible: false,
    railVisible: true
});


$(".btn-simpan").live('click', function (ev) {
  var form = $("#form-quest");
  ev.preventDefault();
 // SaveAndValidate();
 $.each(vue.list_r307, function (index, data) {
     var string = String(data.r307k2_kode);
     if(data.r307k2_kode != null && string.length > 10){
         data.r307k2_kode = data.r307k2_kode.substring(1, 11);
     }});

   objValidation.validate();
   objErrorRT =  JSON.stringify(objValidation.getErrors());

   saveAndValidate();

});

function saveAndValidate(){
  var index = 'utama';
  try{
    (async () => {

        let hal2 = buildData(1);
        let hal3 = buildData(2);
        let utama = buildData(5);

        let save = await saveData_(utama, "1", objErrorRT, 'final');
        index = 'r307';
        let savehal2 = await saveData_(hal2, "1", null, 's1');
        index = 'r402';
        let savehal5 = await saveData_(hal3, "1", null, 's4');


        if(save.status && savehal2.status  && savehal5.status  ) {
            var form = $("#form-quest");
            form.append("save", true);
            form.submit();
        }
        else{
            objControl.showNotification('Gagal menyimoan data', 'error', 'Gagal!');
          }

    })()
  }
  catch (error) {
    //  if (!hide_modal_progress) {
          objControl.showNotification('Gagal menyimpan data step ' + index , 'error', 'Gagal!');
      //}

}

}

$(".btn-error").live('click', function (ev) {
  $("#modal-daftar-error").dialog('open');
});
$("#btn-test").live('click', function (ev) {

  ev.preventDefault();
  var nilai='9.12312323';
  var float=parseFloat(nilai).toFixed(2);
  console.log(nilai);
  console.log(float);
  console.log(objValidation.CONSIST('hehe'));
  objValidation.validate();
  console.log(objValidation.getErrors());

});
/*End of Event*/

/*Validation */
function SaveAndValidate() {

    var queue_name = 'save_validate';
    var concurrent_calls = 7;
    var counter = 0;
    add_api_call_to_queue(queue_name, 'VALIDATE', GLOBALS.CONST_ERROR_RT, objValidation.RULE);
    for (i = 1; i <= concurrent_calls; i++) {
        $(document).dequeue(queue_name);
        var persen = Persentase(i, concurrent_calls) + "%";
        $('#progress-bar-save').width(persen);
        counter++;
        if (counter == concurrent_calls) {
            $('#container-label-process').hide();
        }




    }

}
function add_api_call_to_queue(qname, process_type, model, data = null) {
    $(document).queue(qname, function() {
        if (process_type = "VALIDATE") {
            objValidation.validate();
            objErrorRT =  JSON.stringify(objValidation.getErrors());
            $(document).dequeue(qname);
        }
    });
}
function Persentase(index, maxValue) {
    var result = (index / maxValue) * 100;
    result = Math.round(result);
    return result;
}
/*End of Validation */

/*Build and save data*/
var buildData = function(step) {
    var bundle = {};
    bundle.source = source;
    bundle.is_cleaning = is_cleaning;
    bundle.is_entri = is_entri;
    if (step == 1) {
      $.each(vue.list_r307, function (index, data) {
          var string = String(data.r307k2_kode);
          if(data.r307k2_kode != null && string.length > 10){
              data.r307k2_kode = data.r307k2_kode.substring(1, 11);
          }});

        bundle.list_r307 = TOOLS.copyObject(vue.list_r307);
        bundle.dok = {};
    } else if (step == 2) {

      $.each(vue.list_r402b, function (index, data) {
          var string = String(data.r402bk3);
          if(string != 'null' && string.length > 5){
              data.r402bk3 = data.r402bk3.substring(1, 6);
          }});

        bundle.list_r402b = TOOLS.copyObject(vue.list_r402b);
        bundle.dok = {};
    //
    }
    // }
    else if (step == 5) {
        //build data blok 1
        var dok = {};
        $("[name*='TStpim']").each(function() {
            //let temp = {};
            var obj = $(this);
            var name = obj.attr('name');
            var field = name.substring(
                name.lastIndexOf("[") + 1,
                name.lastIndexOf("]")
            );
            //var value = objValidation.GET_VALUE_BY_OBJECT(obj);
            var value = null;
            //cek apakah pakai mask-currency
            if (obj.hasClass('mask')) {
                value = obj.inputmask('unmaskedvalue');
                //  console.log(value);
            } else {
                value = obj.val();
                if (value != null) {
                    value = value.replace(/"/g, '\\"');
                    value = value.replace(/'/g, "\\'");
                }
            }
            // console.log(value);
            dok[field] = value;
            if(field == 'r201_kbli'){
              dok[field] = $('#TStpim_r201_kbli').val();
            }
            if(field == 'r201_desk'){
              dok[field] = $('#TStpim_r201_desk').val();
            }


        });
        bundle.dok = dok;
    }

    return JSON.stringify(bundle);
}


async function saveData_(bundle,errorType,objError,step) {
    let result;
    try{
        result= await $.ajax({
            url: GLOBALS.URL_SAVE_DOK_STPIM,
            type: 'post',
            dataType: 'json',
            data: {
                ajax: true,
                bundle: bundle,
                errorType: errorType,
                objError: objError,
                step : step
            }
        });
        return result;
    }
    catch (e){
        return e;
    }
}
/*End Build and save data*/

/*Vue*/

Vue.directive('mask-decimal', {
  bind: function(el, binding) {
    var maskOpts = {};
    maskOpts.onBeforeMask = function(value, opts) {
      value = value.replace(".", ",");
      var processedValue = value;
      var arr_str = value.split(',');
      if (arr_str[1] === '00')
        processedValue = arr_str[0];
      return processedValue;
    };
    maskOpts.alias = "decimal";
    maskOpts.radixPoint = ",";
    maskOpts.autoGroup = true;
    maskOpts.groupSeparator = ".";
    maskOpts.groupSize = 3;
    maskOpts.digits = 2;
    maskOpts.greedy = true;
    maskOpts.unmaskAsNumber = true;
    maskOpts.removeMaskOnSubmit = true;
    maskOpts.positionCaretOnTab = false;
    maskOpts.positionCaretOnClick = 'select';
    maskOpts.autoUnmask = true;
    maskOpts.clearIncomplete = true;
    Inputmask(maskOpts).mask(el);
  }
});

Vue.directive('mask-integer', {
  bind: function(el, binding) {
    var maskOpts = {};
    maskOpts.alias = "decimal";
    maskOpts.radixPoint = ",";
    maskOpts.autoGroup = true;
    maskOpts.groupSeparator = ".";
    maskOpts.groupSize = 3;
    maskOpts.digits = 0;
    maskOpts.greedy = true;
    maskOpts.unmaskAsNumber = true;
    maskOpts.removeMaskOnSubmit = true;
    maskOpts.positionCaretOnTab = false;
    maskOpts.positionCaretOnClick = 'select';
    maskOpts.autoUnmask = true;
    maskOpts.clearIncomplete = true;
    Inputmask(maskOpts).mask(el);
  }
});


function initialVueData() {
  return {
    list_r402b: [],
    list_r307: [],
    list_error: [],
    list_satuan: [],
    list_kbki: [],
    master_negara:[],
    list_input_r402b: [],
    list_input_r307: [],
    new_row_r307: {
      id     : null,
      tahun  : null,
      no	   : null,
      r307k2 : null,
      r307k2_kode : null,
      r307k3 : null,
      r307k4 : null,
      r307k5 : null,
      r307k6 : null,
      r307k7 : null,
      r307k8 : null,
      r307k8_lain : null,
      rows   : null,
      r307k5_1 : null,
      r307k7_1 : null,
      is_show_lainnya:false
      },
      new_row_r402b: {
        id :  null,
        tahun :  null,
        no :  null,
        rows : null,
        r402bk2 :  null,
        r402bk3 :  null,
        r402bk4 :  null,
        r402bk5 :  null,
        r402bk6 :  null,
        r402bk7 :  null,
        r402bk8 :  null,
        r402bk8_lain :  null,
        r402bk6_1 : null,
        is_show_lainnya:false
      },
      tahun: null,
      id: null,
      status_dok:null,
      output:null,
      row_index_r307: 0,
      row_index_r402b: 0,
      last_id_r307: 0,
      last_id_r402b: 0,
  }

}

function initVue() {
  vue = new Vue({
    el: '#vue-b41',
    data: function() {
      return initialVueData();
    },
    watch: {
      "list_b41.b41": function(val) {
        console.log(val);
      }
    },

    methods: {

      renderData: function(row_data,step) {
        if (step == 1) {
              vue.row_index_r402b = row_data.list_r402b.length;
              vue.colspan_r402b += row_data.list_r402b.length;
              vue.last_id_r402b = 1;
              if (vue.row_index_r402b > 0) {
                  var list_r402b = [];
                  var i = 0;
                  var rows = 0;
                  $.each(row_data.list_r402b, function (index, data) {
                      let temp = data;
                      data.id = parseInt(data.id);
                      data.no = parseInt(data.no);
                      rows++;
                      if (data.id > vue.last_id_r402b) {
                          vue.last_id_r402b = data.id;
                      }
                      var i = 1
                      temp.is_show_lainnya = false;
                      temp.r402bk8_lain = data.r402bk8_lain;


                      if(parseInt(data.r402bk8) == 999){
                        temp.is_show_lainnya = true;

                      }


                      temp.rows = rows;
                      temp.r402bk8_lain = data.r402bk8_lain;
                     // temp.q0 = parseFloat(data.q0);
                      vue.list_r402b.push(temp);
                      // if (vue.row_index_r402b == i) {
                      //     list_r402b.sort(function (a, b) {
                      //         return a.no - b.no;
                      //     });
                      // }
                  });

                  // vue.$nextTick(function () {
                  //     //vue.markError();
                  //     vue.list_input_r402b = $('#fixTable').find('input');
                  // });
              }
            vue.renderData(row_data,2);
          }
          else if (step ==2) {
                  vue.row_index_r307 = row_data.list_r307.length;
                  vue.colspan_r307 += row_data.list_r307.length;
                  vue.last_id_r307 = 1;
                  if (vue.row_index_r307 > 0) {
                      var list_r307 = [];
                      var i = 0;
                      var rows = 0;
                      $.each(row_data.list_r307, function (index, data) {
                          let temp = data;
                          data.id = parseInt(data.id);
                          data.no = parseInt(data.no);
                          rows++;
                          if (data.id > vue.last_id_r307) {
                              vue.last_id_r307 = data.id;
                          }
                          var i = 1
                          // if(data.r307 > 0){
                          //   vue.hitungHargaSatuan(data,'r307k5','r307');
                          // }

                          temp.rows = rows;
                          temp.is_show_lainnya = false;
                          temp.r307k8_lain = data.r307k8_lain;

                          if(parseInt(data.r307k8) == 999){
                            temp.is_show_lainnya = true;
                          }
                         // temp.q0 = parseFloat(data.q0);
                          vue.list_r307.push(temp);
                          // if (vue.row_index_r307 == i) {
                          //     list_r307.sort(function (a, b) {
                          //         return a.no - b.no;
                          //     });
                          // }
                      });

                      // vue.$nextTick(function () {
                      //     //vue.markError();
                      //     vue.list_input_r402b = $('#fixTable').find('input');
                      // });
                  }
          }
      },
      validateBlok: function(objVal) {
        var a = null;

              a = vue.getBlokData(objVal.Table);

        row = 0;
        $.each(a, function(key, value2) {
          // /console.log(key);
          //console.log(value);

          var index = $(this).index();
          //var fieldValue = GetValue(field, $(this))
          //access function in objVal
            var rule = objVal.Rule;
            var list_func = ['LEN', 'LENROW', 'SUM', 'FIND', 'FINDROW', 'ISNULL', 'CONSIST', 'COMPAREDATE','ISUNIQ','COUNTB','COUNTBL','SUMB','CEKMASTER'];
            list_func.forEach(function (x) {
                var pattern = x + '\\(';
                rule = rule.replace(new RegExp(pattern, 'g'), 'objValidation.' + x + '(');
            });

          //ambil relFields, kemudian pecah dengan delimiter ;
          var relFields = objVal.RelFields;
          var splitRelFields = relFields.split(";");
          splitRelFields.sort(function(a, b) {
            return b.length - a.length;
          });
          //ambil nilai kondisi
          var condition = objVal.Condition;
          condition = condition.toLowerCase();

          try {
            splitRelFields.forEach(function(fields) {
              //ambil value form berdasarkan relfield
              var temp = fields.replace(objVal.Table,'');
              var value = value2[fields];
              if(temp == "k2" || temp == "k2_kode"  ){
                if(value2[fields] != null){
                  value = "'"+value2[fields].toString()+"'";
                }
                else {
                   value = "''";
                }
              }



                if(value == "")
                {
                    value = null;
                }
              row = value2['no'];
              //console.log(value);
              //cek apakah value yang di input merupakan fungsi atau bukan
              if (objValidation.isFunction(value)) {
                objVal.Message = "Isikan dengan nilai yang benar";
                  objValidation.addErrorList(objVal, row);
                // row++;
                return;
              }
              rule = objValidation.replaceAll(rule, fields, value);

            });
            var result = String(eval(rule));
            if (rule.includes("/ISNULL(0,0)") || rule.includes("/ISNULL(null,0)")) {
              result = "false";
            }

          } catch (err) {
            var texterror = 'Nomor urut ' + row + ' Field ' + objVal.Field + ' Error: ' + err.message;
            console.log(texterror);
          } finally {
            //bandingkan kondisi dengan hasil eval, jika sama berarti clean, jika tidak berarti error
            if (condition != result) {
                objValidation.addErrorList(objVal, row);
            }
          }
          row++;
        });
      },
      isUniq : function(list, column, valD) {

          var a = vue.getBlokData(list);
          column = column.replace('kolom_','');
          d = 0;
          result = false;
          if (a != null) {
              $.each(a, function(key, value2) {
                  if (value2[column] == valD) {
                      d += 1;
                  }

              });
          }
          if(d  > 1){
              result = true;
          }
          return result;
      },
      sumBlok: function(list, field) {

        var a = vue.getBlokData(list);
        result = 0;
        if (a != null) {
          $.each(a, function(key, value2) {
            if (value2[field] != null && value2[field] != '') {
              result += parseInt(value2[field]);
            }

          });
        }

        return result;
      },
       countBlok: function(list, field) {

           var a = vue.getBlokData(list);
           result = 0;
           if (a != null) {
             $.each(a, function(key, value2) {
               if (value2[field] != null && value2[field] != '') {
                 result += 1;
               }

             });
           }

           return result;
         },
         countBlokFilter: function(list, field,filter) {

           var a = vue.getBlokData(list);
           field = "k".concat(field);
           result = 0;
           if (a != null) {
             $.each(a, function(key, value2) {
               if (value2[field] == filter) {
                 result += 1;
               }

             });
           }

         return result;
       },

        getBlokData : function(list){
            var a = null;
            switch(list){
                case "r307":
                    a = TOOLS.copyObject(vue.list_r307);
                    break;
                case "r402b":
                    a = TOOLS.copyObject(vue.list_r402b);
                    break;
                default:
                    a = TOOLS.copyObject(vue.list_r402b);
                    break;


            }
            return a;
        },
        getBlokNo: function(list,field, numb) {
            var a = vue.getBlokData(list);

            result = 0;
            if (a != null) {
                $.each(a, function(key, value2) {
                    if (value2.no == numb) {
                        result = value2[field];

                    }

                });
            }

            return result;
        },
      changeName: function(tabel, field, id) {
        return tabel + '[' + id + '][' + field + ']';
      },
        autoSumP: function (data,kolomharga,kolomjumlah,list) {

            //hitung harga
            vue.sumkolom(list,kolomharga);
            vue.hitungHargaSatuan(data,kolomharga,kolomjumlah);

            const rinc2 = ['r307jumk5','r307jumk7'];
            var kolomJum2 ='r1001e';
            autosumPersen(rinc2,kolomJum2);

            const rinc = ['r402bjumk6'];
            var kolomJum ='r1002a';
            autosumPersen(rinc,kolomJum);
            // vue.hitungHarga(data,kolom);
            // vue.hitungRasio(kolom);
        },
      changeId: function(tabel, field, id) {
        return tabel + '_' + id + '_' + field;
      },
      onChangeNegara: function(data,list) {
      switch (list) {
        case 'r307':
             switch (data.r307k8) {
               case '999':
                 data.is_show_lainnya = true;
                 break;
               default:
                 data.r307k8_lain = null;
                 data.is_show_lainnya = false;
                 break;
             }
             break;
       case 'r402b':
            switch (data.r402bk8) {
              case '999':
                data.is_show_lainnya = true;
                break;
              default:
                data.r402bk8_lain = null;
                data.is_show_lainnya = false;
                break;
            }
            break;
      default:
            break;

    }
    },
        sumkolom:function (list,nama_kolom){
            var result = 0;
            var kolom = nama_kolom.replace(list,'');

            if(list == 'r307'){
              $.each(vue.list_r307, function (index, data) {
                  let value = 0;
                  if(data[nama_kolom] != null && !isNaN(data[nama_kolom])){
                      value = parseFloat(data[nama_kolom]);
                  }
                  result += value;
              });
            }

            if(list == 'r402b'){
              $.each(vue.list_r402b, function (index, data) {
                  let value = 0;
                  if(data[nama_kolom] != null && !isNaN(data[nama_kolom])){
                      value = parseFloat(data[nama_kolom]);
                  }
                  result += value;
              });
            }


            var jtipe = 'jum';
            $('#' + jenis_kuesioner+ list +jtipe+kolom).val(result);
        },
        hitungHargaSatuan: function(data,kolomharga,kolomjumlah) {
                var kolomhasil = kolomharga+'_1';
                if(data[kolomjumlah] > 0)
                {
                  rasio = (parseFloat(data[kolomharga])/parseFloat(data[kolomjumlah])).toFixed(2);
                  // if(kolomharga.includes("k5")){
                  //   data.r307k5_1 = rasio;
                  // }
                  data[kolomhasil] = rasio;
                }
        },
        unmarkWarning:function(selector){
            let obj = $(selector);
            if (obj.hasClass('form-control-warning')) {
                obj.removeClass('form-control-warning');
                try {
                    obj.popover('dispose');
                } catch (error) {
                }
            }
        },
        markWarning:function(rasio,selector,i,j,message){
            let obj = $(selector);
            // if(rasio > j || rasio < i ){
                // markerror

                obj.addClass('form-control-warning');
               // var message = "Rasio terhadap bulan lalu < " + i.toString() +" atau > "+j.toString();
                var content = "<span style='text-decoration: underline'> "+ message+" </span>";
                // var content = data.Message;
                obj.popover({
                    trigger: 'focus',
                    title: '<strong>WARNING</strong>',
                    placement: 'auto',
                    content: content,
                    html: true,
                    animation: true,
                    container: 'body',
                    delay: {
                        show: 200,
                        hide: 100
                    }
                })

        },
        markError: function () {
            //remvove all erro class
            $('input, select').each(function () {
                var obj = $(this);
                if (obj.hasClass('form-control-danger')) {
                    obj.removeClass('form-control-danger');
                    try {
                        obj.popover('dispose');
                    } catch (error) {
                    }
                }
            });
            $('select').each(function () {
                var obj = $(this);
                if (obj.hasClass('form-control-danger')) {
                    obj.removeClass('form-control-danger');
                    try {
                        obj.popover('dispose');
                    } catch (error) {
                    }
                }
            });
            if (vue.list_error.length > 0) {
                $.each(vue.list_error, function (index, data) {

                    var nama_table = "";
                    var namaField = data.Field;
                    switch(data.Table){
                        case "r402b":
                            nama_table = '#r402b_';
                            break;
                        case "r307":
                            nama_table = '#r307_';
                            break;
                        default:
                            nama_table = '#r402b_';
                            break;
                    }
                    $temp = nama_table + data.row + '_' +namaField.replace(data.Table+'_','');
                    if(data.Level == 'RT'){
                        $temp = '#' + jenis_kuesioner  + data.Field;
                    }
                    console.log($temp);
                    let selector = $temp;

                    let obj = $(selector);
                     obj.addClass('form-control-danger');
                    var content = "<span style='text-decoration: underline'><strong>Pesan:</strong></span><br>" + data.Message + "<br><br><span style='text-decoration: underline'><strong>Perlakuan:</strong></span><br>" + data.Treatment;
                   // var content = data.Message;
                    obj.popover({
                        trigger: 'focus',
                        title: '<strong>KESALAHAN</strong>',
                        placement: 'auto',
                        content: content,
                        html: true,
                        animation: true,
                        container: 'body',
                        delay: {
                            show: 200,
                            hide: 100
                        }
                    })
                });
            }
        },
        addRowR307: function () {
            vue.row_index_r307++;
            vue.last_id_r307++;
            var new_row = TOOLS.copyObject(vue.new_row_r307);
            new_row.no = vue.last_id_r307;
            new_row.tahun = vue.tahun;
            new_row.id = vue.id;
            new_row.rows = vue.row_index_r307;
            vue.list_r307.push(new_row);
        },
        addRowR402b: function () {

          if(vue.list_r402b.length < 30){
              vue.row_index_r402b++;
              vue.last_id_r402b++;
              var new_row = TOOLS.copyObject(vue.new_row_r402b);
              new_row.no = vue.last_id_r402b;
              new_row.tahun = vue.tahun;
              new_row.id = vue.id;
              new_row.rows =  vue.row_index_r402b;
              vue.list_r402b.push(new_row);
              vue.$nextTick(function () {
                  //vue.markError();
                  vue.list_input_r402b = $('#fixTable').find('input');
              });
              $("#fixTable").tableFixer({"head" : true, "left" : 4});
          } else{
              swal.fire({
                  icon: 'error',
                  text: 'r307oditas sudah 30!'
              })
          }

        },

        deleteRowR307: function (data) {
            swal({
                text: "Apakah Anda yakin akan menghapus data?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#ef5350",
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.value) {
                    vue.list_r307 = $.grep(vue.list_r307, function (value) {
                        return value.rows != data.rows;
                    });
                    this.renumberingRow('r307');
                    vue.row_index_r307 = vue.list_r307.length;
                }
            });
        },

        deleteRowR402b: function (data) {
            swal({
                text: "Apakah Anda yakin akan menghapus data?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#ef5350",
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.value) {
                    vue.list_r402b = $.grep(vue.list_r402b, function (value) {
                        return value.rows != data.rows;
                    });
                    this.renumberingRow('r402b');
                    vue.row_index_r402b = vue.list_r402b.length;
                    vue.$nextTick(function () {
                        //vue.markError();
                        vue.list_input_r402b = $('#fixTable').find('input');
                    });
                }
            });
        },

        renumberingRow: function (jenis_isian) {
            var rows = 1;
            switch (jenis_isian) {
                case 'r307':
                    $.each(vue.list_r307, function (index, value) {
                        value.rows = rows;
                        rows++;
                    });
                    break;
                case 'r402b':
                    $.each(vue.list_r402b, function (index, value) {
                        value.rows = rows;
                        rows++;
                    });
                    break;
                default:
                    break;
            }
        },
        changeNamar307 : function(data){
            data.date_modified = new Date();
            data.date_show = vue.showDate(data.date_modified);
        },
        changeSatuanr307 : function(data){
            data.satuan_modified = new Date();
            data.sdate_show = vue.showDate(data.satuan_modified);
            $.each(vue.list_r402b, function (index, value) {
                if(value.id_r307oditas == data.id){
                    value.satuan = data.satuan;
                }
            });
        },
        changeDatar307 : function(data){
            var satuan = '';
            $.each(vue.list_r307, function (index, value) {
                if(data.id_r307oditas == value.id){
                    data.satuan = value.satuan;
                }
            });

        },

        showDate: function(dateObj){
            const monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"];
            //dateObj = new Date(dateObj);
            const month = monthNames[dateObj.getMonth()];
            const day = String(dateObj.getDate()).padStart(2, '0');
            const year = dateObj.getFullYear();
            const output = month  + '\n'+ day  + ',' + year;
            return output;
        },

        keymonitor: function (event, kolom, panjang, list_input) {
            if (typeof (kolom) != 'undefined') {
                event.preventDefault();
                var current_target = $(event.currentTarget);
                var current_row = current_target.parent().parent().parent();
                var next_obj = current_target;
                switch (event.keyCode) {
                    case 37: // left

                        let current_index_left = list_input.index(current_target);
                        left_obj = list_input[current_index_left - 1];
                        // left_obj = current_row.find('td').eq(kolom - 2).find('input');
                        if (typeof (left_obj) != 'undefined') {
                            left_obj.focus();
                            left_obj.select();
                        }
                        break;
                    case 38: // up
                        let current_index_up = list_input.index(current_target);
                        tambah = panjang;
                        next_obj = list_input[current_index_up - tambah];
                        if (typeof (next_obj) != 'undefined') {
                            next_obj.focus();
                            next_obj.select();
                        }
                        break;
                    case 39: // right
                        let current_index_right = list_input.index(current_target);
                        right_obj = list_input[current_index_right + 1];
                        // right_obj = current_row.find('tr').find('td').eq(kolom).find('input');
                        if (typeof (right_obj) != 'undefined') {
                            right_obj.focus();
                            right_obj.select();
                        }
                        break;
                    case 40: // down
                        let current_index2 = list_input.index(current_target);
                        tambah = panjang;
                        next_obj = list_input[current_index2 + tambah];
                        if (typeof (next_obj) != 'undefined') {
                            next_obj.focus();
                            next_obj.select();
                        }
                        break;
                    default: return;
                }
            }
        },
        getSuggestionList:function(){
         // var lisdata = [];
         // var term = '';
         // let list_kbki=getKbkiT(term);
         // list_kbki.then(function (data) {
         //     if (data.status) {
         //          lisdata = data.data;
         //     }
         // });
          return objValidation.MASTER_KBKI;

      }


    },

    created: function() {
      //  var self = this;
    },
    updated: function() {
      this.$nextTick(function() {
        //vue.applyMask();
      })
    },
  });
}
/* End of Vue*/
function autosumPersen (rinc,kolomJum){
  var sum = 0;
  var temp = 0;
  for (let x in rinc) {
   //temp  = $('#' + jenis_kuesioner +'r210'+rinc[x]).val();
   temp = objValidation.GETVALUE(rinc[x]);
   if(temp != "" && temp != null && !isNaN(temp)){
     sum += parseFloat(temp);
   }
  }
 $('#' + jenis_kuesioner + kolomJum).val(sum.toFixed(2));
}

function sumR210(){
  const rinc = ['r210a', 'r210b', 'r210c', 'r210d', 'r210e','r210f'];
  var kolomJum = 'r210jum';
  autosumPersen(rinc,kolomJum);
}

function sumR212(){
  const rinc = ['r212a', 'r212b', 'r212c', 'r212d', 'r212e','r212f','r212g'];
  var kolomJum = 'r212jum';
  autosumPersen(rinc,kolomJum);
}

function sumR213(){
  const rinc = ['r213k3a', 'r213k3b1', 'r213k3b2', 'r213k3b3', 'r213k3b4'];
  var kolomJum = 'r213jum';
  autosumPersen(rinc,kolomJum);
}

function sumR214(){
  const rinc = ['r214k3a', 'r214k3b1', 'r214k3b2', 'r214k3b3', 'r214k3b4'];
  var kolomJum ='r214jum';
  autosumPersen(rinc,kolomJum);
}

function sumR301(){
  const rinc = ['r301ak2', 'r301bk2', 'r301ck2', 'r301dk2'];
  var kolomJum ='r301jk2';
  autosumPersen(rinc,kolomJum);

  const rinc3 = ['r301ak3', 'r301bk3', 'r301ck3', 'r301dk3'];
  var kolomJum3 ='r301jk3';
  autosumPersen(rinc3,kolomJum3);

  const rinc2 = ['r301jk2', 'r301jk3'];
  var kolomJum2 ='r1001a';
  autosumPersen(rinc2,kolomJum2);
  blok10();
}

function sumR302k4(){
  const rinc = ['r302ak4', 'r302bk4', 'r302ck4','r302dk4','r302ek4','r302fk4','r302gk4','r302hk4','r302ik4','r302jk4','r302kk4'];
  var kolomJum ='r302jumk4';
  autosumPersen(rinc,kolomJum);

  const rinc2 = ['r302jumk4'];
  var kolomJum2 ='r1001b';
  autosumPersen(rinc2,kolomJum2);
  blok10();


}

function sumR302k6(){
  const rinc = ['r302ak6', 'r302bk6', 'r302ck6','r302dk6','r302ek6','r302fk6','r302gk6','r302hk6','r302ik6','r302jk6','r302kk6'];
  var kolomJum ='r302jumk6';
  autosumPersen(rinc,kolomJum);

  const rinc2 = ['r302jumk6'];
  var kolomJum2 ='r1001d';
  autosumPersen(rinc2,kolomJum2);
  blok10();
}

function sumR303(){
  const rinc3 = ['r303ak3', 'r303bk3'];
  var kolomJum3 ='r1001c';
  autosumPersen(rinc3,kolomJum3);
  blok10();
}

function sumR306(){
  const rinc = ['r306a1','r306a2', 'r306b', 'r306c1','r306c2','r306d','r306e','r306f','r306g','r306h','r306i','r306j1','r306j2','r306k','r306l'];
  var kolomJum ='r306_jml';
  autosumPersen(rinc,kolomJum);

  const rinc2 = ['r306_jml'];
  var kolomJum2 ='r1001d';
  autosumPersen(rinc2,kolomJum2);

  const rinc3 = ['r306a2'];
  var kolomJum3 ='r1003a';
  autosumPersen(rinc3,kolomJum3);

  autosumPersen( ['r306b'],'r1003b');
  autosumPersen(['r306d'],'r1003c');
  autosumPersen(['r306e'],'r1003d');
  autosumPersen(['r306g'],'r1003e');
  autosumPersen(['r306h'],'r1003f');
  blok10();
}

function sumR501(){
  const rinc3 = ['r501a', 'r501b'];
  var kolomJum3 ='r501jum';
  autosumPersen(rinc3,kolomJum3);
  autosumPersen(['r501jum'],'r1002b');
}

function sumR502(){
  const rinc = ['r502a','r502b2', 'r502b1', 'r502c','r502d','r502f'];
  var kolomJum ='r1002c';
  autosumPersen(rinc,kolomJum);

  const rinc2 = ['r502a','r502b2', 'r502b1', 'r502c','r502d','r502f','r502e'];
  var kolomJum2 ='r502jumlah';
  autosumPersen(rinc2,kolomJum2);


}

function sumR503(){
  const rinc = ['r503ak2','r503bk2', 'r503ck2', 'r503dk2'];
  var kolomJum ='r503jk2';
  autosumPersen(rinc,kolomJum);

  const rinc2 = ['r503ak3','r503bk3', 'r503ck3', 'r503dk3'];
  var kolomJum2 ='r503jk3';
  autosumPersen(rinc2,kolomJum2);

  var hasil = 0;
  temp = objValidation.GETVALUE('r503bk3');
  if(temp != "" && temp != null && !isNaN(temp)){
    hasil += parseFloat(temp);
  }

  temp1 = objValidation.GETVALUE('r503bk2');
  if(temp1 != "" && temp1 != null && !isNaN(temp1)){
    hasil = hasil-parseFloat(temp1);
  }

  $('#' + jenis_kuesioner + 'r1002d').val(hasil.toFixed(2));


}

function sumR202a(){
  var sum = 0;
  var temp = 0;
  var x = 1;
  while (x <= 12) {
   temp  = $('#' + jenis_kuesioner +'r202a_'+x).val();
   if(temp != null && !isNaN(temp)){
     if(temp == 1){
       sum += 1;
     }
   }
   x++;
  }
 $('#' + jenis_kuesioner +'r202a_jlh').val(sum.toFixed(2));
}

function blok10(){
  autosumPersen( ['r1001a','r1001b','r1001c','r1001d','r1001e'],'r1001jumlah');
  autosumPersen( ['r1002a','r1002b','r1002c','r1002d'],'r1002jumlah');
  autosumPersen( ['r1003a','r1003b','r1003c','r1003d','r1001e','r1001f'],'r1003jumlah');
}
