var Tools = function () {
    var GLOBALS = new Globals();
    var self = this;
    this.copyObject = function (src) {
        return $.extend(true, {}, src);
    }
    this.getLabelBulan = function (param) {
        var label = '';
        var bulan = param.toString();
        switch (bulan) {
            case '1':
                label = 'Januari';
                break;
            case '2':
                label = 'Februari';
                break;
            case '3':
                label = 'Maret';
                break;
            case '4':
                label = 'April';
                break;
            case '5':
                label = 'Mei';
                break;
            case '6':
                label = 'Juni';
                break;
            case '7':
                label = 'Juli';
                break;
            case '8':
                label = 'Agustus';
                break;
            case '9':
                label = 'September';
                break;
            case '10':
                label = 'Oktober';
                break;
            case '11':
                label = 'November';
                break;
            case '12':
                label = 'Desember';
                break;
            default:
                label = '';
                break;
        }
        return label;
    }

    this.showError = function (text) {
        swal("", text, "error");
    }
    this.showSuccess = function (text) {
        swal("", text, "success");
    }
    this.countColumn = function (tr) {
        var colCount = 0;
        tr.find('td').each(function () {
            if ($(this).attr('colspan')) {
                colCount += +$(this).attr('colspan');
            } else {
                colCount++;
            }
        });
        return colCount;
    }

    this.getTr = function (obj) {
        var tr = obj.parent().parent();
        return tr;
    }

    this.getTdText = function (tr, col_index) {
        var td = tr.find('td:eq(' + col_index + ')');
        return td.text();
    }

    this.getTd = function (tr, col_index) {
        return tr.find('td:eq(' + col_index + ')');
    }

    this.filter = function (data) {
        $.each(data, function (key, value) {
            if (value === null)
                data[key] = '';
            else if ($.type(value) === "string") {
                value = value.trim();
                value = self.escapeHtml(value);
                data[key] = value;
            }
        });
        return data;
    }

    this.escapeHtml = function (unsafe) {
        return unsafe
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }
    this.isPengganti = function (jenis_sample) {
        var result = false;
        var js = jenis_sample.toString();
        if ($.inArray(js, [GLOBALS.SAMPEL_PENGGANTI, GLOBALS.SAMPLE_TAMBAHAN_T, GLOBALS.SAMPLE_TAMBAHAN_X]) != -1)
            result = true;
        return result;
    }
    this.isTambahan = function (jenis_sample) {
        var result = false;
        var js = jenis_sample.toString();
        if ($.inArray(js, [GLOBALS.SAMPLE_TAMBAHAN_T, GLOBALS.SAMPLE_TAMBAHAN_X]) != -1)
            result = true;
        return result;
    }
    this.isUtama = function (jenis_sample) {
        var result = false;
        var js = jenis_sample.toString();
        if (js === GLOBALS.SAMPEL_UTAMA)
            result = true;
        return result;
    }
    this.isEntri = function (idpersh_entri) {
        var result = false;
        var js = idpersh_entri.toString();
        if (js === GLOBALS.DATA_ENTRI)
            result = true;
        return result;
    }
    this.notEligibleLnprt = function (hasil_pencacahan) {
        var result = false;
        var js = hasil_pencacahan.toString();
        if ($.inArray(js, ['2']) != -1)
            result = true;
        return result;
    }
    this.notEligibleNonFinansial = function (hasil_pencacahan) {
        var result = false;
        var js = hasil_pencacahan.toString();
        if ($.inArray(js, ['2', '3', '4', '5', '6', '7']) != -1)
            result = true;
        return result;
    }
    this.notEligibleLnprt = function (hasil_pencacahan) {
        var result = false;
        var js = hasil_pencacahan.toString();
        if ($.inArray(js, ['2', '3', '4', '5', '6']) != -1)
            result = true;
        return result;
    }
    this.notEligibleRt = function (hasil_pencacahan) {
        var result = false;
        var js = hasil_pencacahan.toString();
        if ($.inArray(js, ['2', '3', '4']) != -1)
            result = true;
        return result;
    }
    this.notEligibleDesa = function (hasil_pencacahan) {
        var result = false;
        var js = hasil_pencacahan.toString();
        if ($.inArray(js, ['2']) != -1)
            result = true;
        return result;
    }
    this.labelJenisSampel = function (jenis_sampel) {
        var label = '';
        if (self.isUtama(jenis_sampel)) {
            label = '<span class="badge bg-blue" style="width:85px">UTAMA</span>';
        }
        else if (self.isTambahan(jenis_sampel)) {
            label = '<span class="badge bg-orange" style="width:85px">TAMBAHAN</span>';
        }
        else if (self.isPengganti(jenis_sampel)) {
            label = '<span class="badge bg-red" style="width:85px">PENGGANTI</span>';
        }
        return label;
    }
    this.viewHasilCacahTw = function (hasil_cacah, flagentritw) {
        var label = '';
        if (flagentritw === '' || flagentritw === null) {
            label = '<span class="badge" style="width:120px">BELUM DIUPDATE</span>'; //jika tw blm diaktifkan
        }
        else {
            if (flagentritw === '0') {
                if (hasil_cacah === '1') {
                    label = '<span class="badge bg-blue" style="width:120px">DICACAH</span>';
                }
                else if (hasil_cacah === '2') {
                    label = '<span class="badge bg-red" style="width:120px">DIGANTI</span>';
                }
                else if (hasil_cacah === '3') {
                    label = '<span class="badge bg-orange" style="width:120px">BELUM ADA RESPON</span>';
                }
                else {
                    label = '<span class="badge" style="width:120px">BELUM DIUPDATE</span>';
                }
            }
            else {
                if (hasil_cacah === '1') {
                    label = '<span class="badge bg-blue" style="width:120px">DICACAH</span>';
                }
                else if (hasil_cacah === '2') {
                    label = '<span class="badge bg-red" style="width:120px">DIGANTI</span>';
                }
                else if (hasil_cacah === '3' || hasil_cacah === '' || hasil_cacah === NULL) {
                    label = '<span class="badge bg-orange" style="width:120px">BELUM ADA RESPON</span>';
                }
            }
        }
        return label;
    }
    this.viewHasilCacahTw_2 = function (hasil_cacah, flagentritw) {
        var label = '';
        if (flagentritw) {
            if (flagentritw === '0') {
                if (hasil_cacah === '1') {
                    label = '<span class="badge bg-blue" style="width:120px">DICACAH</span>';
                }
                else if (hasil_cacah === '2') {
                    label = '<span class="badge bg-red" style="width:120px">DIGANTI</span>';
                }
                else if (hasil_cacah === '3' ) {
                    label = '<span class="badge bg-orange" style="width:120px">BELUM ADA<br>RESPON</span>';
                }
                else if (hasil_cacah === '' || hasil_cacah === NULL) {
                    label = '<span class="badge" style="width:120px">BELUM<br>DIUPDATE</span>';
                }
            }
            else {
                if (hasil_cacah === '1') {
                    label = '<span class="badge bg-blue" style="width:120px">DICACAH</span>';
                }
                else if (hasil_cacah === '2') {
                    label = '<span class="badge bg-red" style="width:120px">DIGANTI</span>';
                }
                else if (hasil_cacah === '3' || hasil_cacah === '' || hasil_cacah === NULL) {
                    label = '<span class="badge bg-orange" style="width:120px">BELUM ADA<br>RESPON</span>';
                }
                else {
                    label = '<span class="badge" style="width:120px">BELUM<br>DIUPDATE</span>';
                }
            }
        }
        else {
            label = '<span class="badge" style="width:90px">BELUM<br>DIUPDATE</span>'; //jika tw blm diaktifkan
        }
        
        return label;
    }
    this.labelDataEntri = function (idpersh_entri) {
        var label = '';
        if (self.isEntri(idpersh_entri)) {
            label = '<span class="fa fa-check" style="width:20px;font-size:18px; color:SeaGreen;"></span>';
        }
        else {
            label = '';
        }
        return label;
    }
    this.editLogoColor = function (is_edit) {
        var result = ''
        if (is_edit === '') {
            result = '<i class="fa fa-edit text-black" style="font-size:20px"></i>';
        }
        else {
            result = '<i class="fa fa-edit text-green" style="font-size:20px;"></i>';
        }
        return result;
    }
    this.editLogoColorEdit = function (hasil_cacah) {
        var result = ''
        if (hasil_cacah === '') {
            result = '<i class="fa fa-edit text-black" style="font-size:20px"></i>';
        }
        else {
            result = '<i class="fa fa-edit text-green" style="font-size:20px;"></i>';
        }
        return result;
    }
    this.markLastRow = function (table) {
        var row = table.find("tbody").last().find("tr").last();
        // row.css({ "background-color": "#96D5E9"});
        row.addClass('text-primary');
    }
    this.markEligibleRow = function (table, value_eligible, column_eligible) {
        var rows = table.find("tbody > tr");
        rows.each(function (i, row) {
            var hasil_pencacahan = $(row).find("td").eq(column_eligible).find('label').text();
            if (value_eligible == parseInt(hasil_pencacahan) || $.trim(hasil_pencacahan) == '') {
                $(row).addClass('text-primary');
                return false;
            }
        });

    }
    this.getNamaKuesioner = function (jenis_kuesioner) {
        var JENIS_KUESIONER = GLOBALS.JENIS_KUESIONER;
        var result = '';
        switch (jenis_kuesioner) {
            case JENIS_KUESIONER.KUESIONER_FINANSIAL:
                result = 'PMTB - FINANSIAL';
                break;
            case JENIS_KUESIONER.KUESIONER_RT:
                result = 'PMTB - RT';
                break;
            case JENIS_KUESIONER.KUESIONER_LNPRT:
                result = 'PMTB - LNPRT';
                break;
            case JENIS_KUESIONER.KUESIONER_NONFINANSIAL:
                result = 'PMTB - NONFINANSIAL';
                break;
            case JENIS_KUESIONER.KUESIONER_APBDESA:
                result = 'PMTB - DESA';
                break;
            default:
                break;
        }
        return result;
    }

}
