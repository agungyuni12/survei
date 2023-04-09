var Globals = function () {
  this.RULE_RT = 'RT';
  this.RULE_ART = 'ART';
  this.RULE_RT_LOOP = 'RT_loop';
  this.RULE_ART_LOOP = 'ART_loop';
  this.MARK_ART = '@ART';
  this.MARK_USAHA = '@USAHA';
  this.DOMAIN_NAME = '/ibs';
  this.PAGE_ERROR = [];
  this.URL_RULE = this.DOMAIN_NAME + '/script/loadrule';
  this.URL_METADATA = this.DOMAIN_NAME + '/script/loadmetadata';
  this.URL_TOOLTIP = this.DOMAIN_NAME + '/script/loadtooltip';
  this.URL_ERROR_LIST = this.DOMAIN_NAME + '/script/loaderrorlist';
  this.URL_AUTO_SUM = this.DOMAIN_NAME + '/script/loadautosum';
  this.URL_SKIP = this.DOMAIN_NAME + '/script/loadskip';
  this.URL_FETCH_DATA = this.DOMAIN_NAME + '/quest/fetch_data';
  this.URL_AJAX_SAVE = this.DOMAIN_NAME + '/quest/ajax_save';
  this.URL_AJAX_CONFIRM = this.DOMAIN_NAME + '/quest/kirim';
  this.URL_LOAD_KBLI = this.DOMAIN_NAME + '/script/loadkbli';
  this.URL_DELETE_FILE = this.DOMAIN_NAME + '/quest/delete_file';
  this.URL_GETKBLI = this.DOMAIN_NAME + '/helper/setkbli';
  this.URL_GETKDGALIAN = this.DOMAIN_NAME + '/helper/setkdgalian';
  this.URL_RANGE_HARGA = this.DOMAIN_NAME + '/script/loadrangeharga';
  //master petugas
  this.URL_UPLOAD_PETUGAS = this.DOMAIN_NAME + '/petugas/upload_petugas';
  this.URL_TEMPLATE_PETUGAS = this.DOMAIN_NAME + '/petugas/template_petugas';
  this.URL_UPLOAD_MAPPING_PETUGAS = this.DOMAIN_NAME + '/petugas/upload_mapping_petugas';
  this.URL_TEMPLATE_MAPPING_PETUGAS = this.DOMAIN_NAME + '/petugas/template_mapping_petugas';
  this.URL_DELETE_PETUGAS = this.DOMAIN_NAME + '/petugas/delete';
  //DPA
  this.URL_DPA_INITIAL = this.DOMAIN_NAME + '/petugas/initial';
  this.URL_DPA_PRINT = this.DOMAIN_NAME + '/petugas/print_dpa';
  this.URL_DPA_CLEANING = this.DOMAIN_NAME + '/petugas/cleaning';
  this.URL_DPA_ZIPPER = this.DOMAIN_NAME + '/petugas/zipper';
  this.URL_DPA_GETSAMPLE = this.DOMAIN_NAME + '/dpa/get_sample';
  this.URL_DPA_GETDETAIL = this.DOMAIN_NAME + '/dpa/get_detail';
  this.URL_DPA_SAVE = this.DOMAIN_NAME + '/dpa/save_dpa';
  this.URL_ADD_PERUSAHAAN = this.DOMAIN_NAME + '/dpa/add_perusahaan';
  //tabulasi
  this.URL_GENERATE_TABLE = this.DOMAIN_NAME + '/tabulasi/generate';
  //status dokumen
  this.CLEAN = 'C';
  this.ERROR = 'E';
  this.WARNING = 'W';
  //save bulanan
  this.URL_SAVE_DOK_BULANAN = this.DOMAIN_NAME + '/bulanan/save_dok';
  //jenis kuesioner
  this.JENIS_KUESIONER = {
    AIR_BERSIH: 1,
    GALIAN_BH: 2,
    CAPTIVE: 3,
    GAS: 4,
    GALIAN_URT: 5,
    LISTRIK: 6,
    MIGAS: 7,
    NON_MIGAS: 8,
    KILANG: 9,
    GEOTHERMAL: 10
  }

  //untuk master wilayah
  this.URL_SET_KAB = this.DOMAIN_NAME + '/helper/setkab';
  this.URL_SET_KEC = this.DOMAIN_NAME + '/helper/setkec';
  this.URL_SET_DESA = this.DOMAIN_NAME + '/helper/setdesa';
  this.URL_SET_PETUGAS = this.DOMAIN_NAME + '/helper/set_petugas';

  //untuk URL revalidasi
  //air bersih
  this.URL_REVAL_GET_DATA = this.DOMAIN_NAME + '/reval/get_data';
  this.URL_REVAL_GET_DETAIL = this.DOMAIN_NAME + '/reval/get_detail';
  this.URL_REVAL_SAVE = this.DOMAIN_NAME + '/reval/save_reval';
  //untuk table grid
  this.NO_DATA_GRID = '<tr class="rows-data-modal empty"><td colspan="20"> <div style="margin-bottom: 0px" class="alert bg-gray text-center">Tidak ditemukan data</div> </td></tr>';
  this.URL_STPIM_ENTRI = this.DOMAIN_NAME + '/stpim/entry';
  this.URL_STPIM_GETSOURCE = this.DOMAIN_NAME + '/stpim/getsource';
  this.URL_SAVE_DOK_STPIM = this.DOMAIN_NAME + '/stpim/save_dok';
  this.URL_GETKBLIA = this.DOMAIN_NAME + '/helper/get_kbli';
  this.URL_GETKBKI2 = this.DOMAIN_NAME + '/script/get_kbki2';
  this.URL_GETKBKI = this.DOMAIN_NAME + '/script/get_kbki';
}
