<!-- Content Header (Page header) -->
<style>
.nav-tabs-custom > .nav-tabs > li {
	width: 8.33333333%;
    text-align: center;
	margin-right: 0;
}
</style>
<section class="content-header">
    <div class="panel panel-info">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<form class="form-inline" method="get" action="<?php echo base_url('pengawas/hasil_survey');?>">
						<div class="form-group mb-2">
							<label for="staticEmail2" class="sr-only">KIP</label>
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<input type="text" name="kip" class="form-control" id="kip" placeholder="KIP">
						</div>
						<button type="submit" class="btn btn-primary mb-2">Cari</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	if($datasurvey == '0'){
		echo "<div class='text-center'><h1>Tidak ada data untuk ditampilkan</h1></div>";
	}else{
		
?>

<form id="form-quest">
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs tab-form tab-parent w-100">
                    <li class="tab_1 active"><a href="#tab_1" data-toggle="tab" halaman="1">Halaman 1</a></li>
                    <li class="tab_2"><a href="#tab_2" data-toggle="tab" halaman="2">Halaman 2</a></li>
                    <li class="tab_3"><a href="#tab_3" data-toggle="tab" halaman="3">Halaman 3</a></li>
                    <li class="tab_4"><a href="#tab_4" data-toggle="tab" halaman="4">Halaman 4</a></li>
                    <li class="tab_5"><a href="#tab_5" data-toggle="tab" halaman="5">Halaman 5</a></li>
                    <li class="tab_6"><a href="#tab_6" data-toggle="tab" halaman="6">Halaman 6</a></li>
                    <li class="tab_7"><a href="#tab_7" data-toggle="tab" halaman="7">Halaman 7</a></li>
                    <li class="tab_8"><a href="#tab_8" data-toggle="tab" halaman="8">Halaman 8</a></li>
                    <li class="tab_9"><a href="#tab_9" data-toggle="tab" halaman="9">Halaman 9</a></li>
                    <li class="tab_10"><a href="#tab_10" data-toggle="tab" halaman="10">Halaman 10</a></li>
                    <li class="tab_11"><a href="#tab_11" data-toggle="tab" halaman="11">Halaman 11</a></li>
                    <li class="tab_12"><a href="#tab_12" data-toggle="tab" halaman="12">Halaman 12</a></li>
                </ul>
                <div id="vue-b41" class="tab-content">
					<div id="tab_1" class="tab-pane active tab-child">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-body">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td width="54%" style="text-align: left;"><b>RAHASIA</b></td> 
													<td colspan="2">KIP</td> 
													<td colspan="3" style="text-align: right;">
														<input readonly="readonly" name="MDirektori[kip]" id="MDirektori_kip" type="text" maxlength="9" value="<?php echo $kip;?>" style="width: 75%;">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						
						<div id="form-input-page1" class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK I. KETERANGAN UMUM</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="1" style="text-align: center; width: 50px;">101</td> 
													<td colspan="2">Nama Lengkap Perusahaan</td> 
													<td colspan="5" style="width: 400px; text-align: left;">
														<input name="TStpim[r101]" id="TStpim_r101" type="text" maxlength="250" value="<?php echo $arr_page1->r101;?>" class="form-control text-left text-uppercase" style="width: 100%;" mt-allowed-char="().,/.-@" mt-is-blank="notblank" mt-field="r101" mt-alias="r101" mt-page="1">
													</td>
												</tr> 
												<tr>
													<td rowspan="4" style="text-align: center; width: 20px;">102</td> 
													<td colspan="2">Alamat Perusahaan/Unit Produksi</td> 
													<td colspan="5">
														<input name="TStpim[r102]" id="TStpim_r102" type="text" maxlength="250" value="<?php echo $arr_page1->r102;?>" class="form-control text-left text-uppercase" style="width: 100%;" mt-allowed-char="().,/.-@" mt-is-blank="notblank" mt-field="r102" mt-alias="r102" mt-page="1">
													</td>
												</tr> 
												<tr>
													<td style="width: 20%;">Kode Pos</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r102_pos]" id="TStpim_r102_pos" type="text" maxlength="5" value="<?php echo $arr_page1->r102_pos;?>" class="form-control text-left text-uppercase textFieldNumber" mt-is-blank="blank" mt-field="r102_pos" mt-alias="r102_pos" mt-page="1">
													</td> 
													<td colspan="3"></td>
												</tr> 
												<tr>
													<td style="width: 20%;">Website</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r102_web]" id="TStpim_r102_web" type="text" maxlength="50" value="<?php echo $arr_page1->r102_web;?>" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-@" mt-is-blank="blank" mt-field="r102_web" mt-alias="r102_web" mt-page="1">
													</td> 
													<td style="width: 20%;">Email</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r102_mail]" id="TStpim_r102_mail" type="text" maxlength="50" value="<?php echo $arr_page1->r102_mail;?>" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-@" mt-is-blank="blank" mt-field="r102_mail" mt-alias="r102_mail" mt-page="1">
													</td>
												</tr> 
												<tr>
													<td style="width: 20%;">Telepon</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r102_telp]" id="TStpim_r102_telp" type="text" maxlength="50" value="<?php echo $arr_page1->r102_telp;?>" class="form-control text-left text-uppercase textFieldNumber" mt-is-blank="blank" mt-field="r102_telp" mt-alias="r102_telp" mt-page="1">
													</td> 
													<td style="width: 20%;">Fax</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r102_fax]" id="TStpim_r102_fax" type="text" maxlength="50" value="<?php echo $arr_page1->r102_fax;?>" class="form-control text-left text-uppercase textFieldNumber" mt-is-blank="blank" mt-field="r102_fax" mt-alias="r102_fax" mt-page="1">
													</td>
												</tr> 
												<tr>
													<td rowspan="1" style="text-align: center; width: 50px;">103</td> 
													<td colspan="2">Nama Kantor Pusat</td> 
													<td colspan="5" style="width: 400px; text-align: left;">
														<input name="TStpim[r103]" id="TStpim_r103" type="text" maxlength="250" value="<?php echo $arr_page1->r103;?>" class="form-control text-left text-uppercase" style="width: 100%;" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r103" mt-alias="r103" mt-page="1">
													</td>
												</tr> 
												<tr>
													<td rowspan="4" style="text-align: center; width: 20px;">104</td> 
													<td colspan="2">Alamat Kantor Pusat</td> 
													<td colspan="5">
														<input name="TStpim[r104]" id="TStpim_r104" type="text" maxlength="250" value="<?php echo $arr_page1->r104;?>" class="form-control text-left text-uppercase" style="width: 100%;" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r104" mt-alias="r104" mt-page="1">
													</td>
												</tr> 
												<tr>
													<td style="width: 20%;">Kode Pos</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r104_pos]" id="TStpim_r104_pos" type="text" maxlength="5" value="<?php echo $arr_page1->r104_pos;?>" class="form-control text-left text-uppercase textFieldNumber" mt-is-blank="blank" mt-field="r104_pos" mt-alias="r104_pos" mt-page="1">
													</td> 
													<td colspan="3"></td>
												</tr> 
												<tr>
													<td style="width: 20%;">Website</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r104_web]" id="TStpim_r104_web" type="text" maxlength="50" value="<?php echo $arr_page1->r104_web;?>" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-@" mt-is-blank="blank" mt-field="r104_web" mt-alias="r104_web" mt-page="1">
													</td> 
													<td style="width: 20%;">Email</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r104_mail]" id="TStpim_r104_mail" type="text" maxlength="50" value="<?php echo $arr_page1->r104_mail;?>" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-@" mt-is-blank="blank" mt-field="r104_mail" mt-alias="r104_mail" mt-page="1">
													</td>
												</tr> 
												<tr>
													<td style="width: 20%;">Telepon</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r104_telp]" id="TStpim_r104_telp" type="text" maxlength="50" value="<?php echo $arr_page1->r104_telp;?>" class="form-control text-left text-uppercase textFieldNumber" mt-is-blank="blank" mt-field="r104_telp" mt-alias="r104_telp" mt-page="1">
													</td> 
													<td style="width: 20%;">Fax</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r104_fax]" id="TStpim_r104_fax" type="text" maxlength="50" value="<?php echo $arr_page1->r104_fax;?>" class="form-control text-left text-uppercase textFieldNumber" mt-is-blank="blank" mt-field="r104_fax" mt-alias="r104_fax" mt-page="1">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_2" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_1_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_2" class="tab-pane tab-child"><br> 
						<div id="form-input-page2" class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK II : KARAKTERISTIK PERUSAHAAN</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">201</td> 
													<td colspan="7">Produk utama pada tahun 2020</td>
												</tr> 
												<tr>
													<td colspan="6">
														<input name="TStpim[r201_desk]" id="TStpim_r201_desk" type="text" maxlength="250" value="<?php echo $arr_page2->r201_desk;?>" class="form-control text-left text-uppercase" autocomplete="off" mt-allowed-char="().,/.-" mt-is-blank="notblank" mt-field="r201_desk" mt-alias="r201_desk" mt-page="2">
													</td> 
													<td style="width: 7%; text-align: right;">KBLI :</td> 
													<td colspan="2">
														<input type="text" name="TStpim[r201_kbli]" id="TStpim_r201_kbli" maxlength="5" value="<?php echo $arr_page2->r201_kbli;?>" class="form-control text-left text-uppercase textFieldNumber" autocomplete="off" mt-is-blank="notblank" mt-field="r201_kbli" mt-alias="r201_kbli" mt-page="2">
													</td>
												</tr> 
												<tr>
													<td rowspan="4" style="text-align: center; width: 50px;">202</td> 
													<td rowspan="2" style="text-align: center; width: 10px;">a.</td> 
													<td colspan="8">Bulan kegiatan produksi perusahaan selama tahun 2020</td>
												</tr> 
												<tr>
													<td colspan="8">
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Jan" <?php if(in_array('Jan',$arr_page2->r202a_mth)){echo "checked";}?>>Jan</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Feb" <?php if(in_array('Feb',$arr_page2->r202a_mth)){echo "checked";}?>>Feb</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Mar" <?php if(in_array('Mar',$arr_page2->r202a_mth)){echo "checked";}?>>Mar</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Apr" <?php if(in_array('Apr',$arr_page2->r202a_mth)){echo "checked";}?>>Apr</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Mei" <?php if(in_array('Mei',$arr_page2->r202a_mth)){echo "checked";}?>>Mei</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Jun" <?php if(in_array('Jun',$arr_page2->r202a_mth)){echo "checked";}?>>Jun</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Jul" <?php if(in_array('Jul',$arr_page2->r202a_mth)){echo "checked";}?>>Jul</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Agt" <?php if(in_array('Agt',$arr_page2->r202a_mth)){echo "checked";}?>>Agt</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Sep" <?php if(in_array('Sep',$arr_page2->r202a_mth)){echo "checked";}?>>Sep</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Okt" <?php if(in_array('Okt',$arr_page2->r202a_mth)){echo "checked";}?>>Okt</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Nov" <?php if(in_array('Nov',$arr_page2->r202a_mth)){echo "checked";}?>>Nov</label>
														<label class="checkbox-inline"><input type="checkbox" name="TStpim[r202a_mth][]" value="Des" <?php if(in_array('Des',$arr_page2->r202a_mth)){echo "checked";}?>>Des</label>
														
													</td>
												</tr> 
												<!--tr>
													<td style="width: 20%;">Jumlah</td> 
													<td width="3px">:</td> 
													<td style="width: 20%;">
														<input name="TStpim[r202a_jlh]" id="TStpim_r202a_jlh" type="text" value="12" class="form-control text-right mask" maxlength="2" mt-range="1-12" mt-is-blank="notblank" mt-field="r202a_jlh" mt-alias="r202a_jlh" mt-page="2" style="text-align: right;">
													</td> 
													<td colspan="5"> Bulan</td>
												</tr--> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 10px;">b.</td>  
													<td colspan="8">Banyaknya hari kerja dan rata-rata jam kerja selama 2020</td>
												</tr> 
												<tr>
													<td style="width: 30%;">1. Rata-rata hari kerja per bulan</td> 
													<td width="3px">:</td> 
													<td style="width: 10%;">
														<input name="TStpim[r202b_1]" id="TStpim_r202b_1" type="text" value="<?php echo $arr_page2->r202b_1;?>" class="form-control text-right mask" maxlength="2" mt-range="1-31" mt-is-blank="notblank" mt-field="r202b_1" mt-alias="r202b_1" mt-page="2" style="text-align: right;">
													</td> 
													<td>hari</td> 
													<td style="width: 30%;">2. Rata-rata jam kerja per hari</td> 
													<td width="3px">:</td> 
													<td style="width: 10%;">
														<input name="TStpim[r202b_2]" id="TStpim_r202b_2" type="text" value="<?php echo $arr_page2->r202b_2;?>" class="form-control text-right mask" maxlength="2" mt-range="1-24" mt-is-blank="notblank" mt-field="r202b_2" mt-alias="r202b_2" mt-page="2" style="text-align: right;">
													</td> 
													<td>jam</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">203</td> 
													<td colspan="8">Apakah perusahaan melakukan pengurangan jam kerja/hari kerja/bulan kerja selama tahun 2020?</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r203]" id="TStpim_r203" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r203" mt-alias="r203" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="4">
														<label class="radio-inline"><input type="radio" name="TStpim[r203]" id="r203_1" value="1" <?php if($arr_page2->r203 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="4">
														<label class="radio-inline"><input type="radio" name="TStpim[r203]" id="r203_2" value="2" <?php if($arr_page2->r203 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td colspan="3">(Langsung ke rincian 207)</td> 
													<td></td-->
												</tr> 
												<tr class="r204 hidden">
													<td rowspan="6" style="text-align: center; width: 50px;">204</td> 
													<td colspan="6">Jika rincian 203 terisi kode 1 (Ya), apakah penyebabnya?</td> 
													<td style="width: 5%; text-align: center;">Ya</td> 
													<td style="width: 5%; text-align: center;">Tidak</td> 
													<td style="width: 20%;"></td>
												</tr> 
												<tr class="r204_opt hidden">
													<td colspan="6">a. Pasokan bahan baku berkurang atau harga mahal </td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r204a]" id="r204a_1" value="1" <?php if($arr_page2->r204a == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r204a]" id="r204a_2" value="2" <?php if($arr_page2->r204a == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r204a]" id="TStpim_r204a" type="text" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="blank" mt-field="r204a" mt-alias="r204a" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r204_opt hidden">
													<td colspan="6">b. Permintaan pasar menurun </td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r204b]" id="r204b_1" value="1" <?php if($arr_page2->r204b == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r204b]" id="r204b_2" value="2" <?php if($arr_page2->r204b == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r204b]" id="TStpim_r204b" type="text" class="form-control text-right mask" maxlength="1" mt-range="3-4" mt-is-blank="blank" mt-field="r204b" mt-alias="r204b" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r204_opt hidden">
													<td colspan="6">c. Perawatan mesin </td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r204c]" id="r204c_1" value="1" <?php if($arr_page2->r204c == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r204c]" id="r204c_2" value="2" <?php if($arr_page2->r204c == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r204c]" id="TStpim_r204c" type="text" class="form-control text-right mask" maxlength="1" mt-range="5-6" mt-is-blank="blank" mt-field="r204c" mt-alias="r204c" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r204_opt hidden">
													<td colspan="6">d. Pandemi COVID</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r204d]" id="r204d_1" value="1" <?php if($arr_page2->r204d == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r204d]" id="r204d_2" value="2" <?php if($arr_page2->r204d == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r204d]" id="TStpim_r204d" type="text" class="form-control text-right mask" maxlength="1" mt-range="7-8" mt-is-blank="blank" mt-field="r204d" mt-alias="r204d" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r204_opt hidden">
													<td colspan="2">e. Lainnya, tuliskan</td> 
													<td colspan="6">
														<input name="TStpim[r204e_lainnya]" id="TStpim_r204e_lainnya" type="text" value="<?php echo $arr_page2->r204e_lainnya;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r204e_lainnya" mt-alias="r204e_lainnya" mt-page="2">
													</td> 
													<!--td style="width: 5%; text-align: center;">
														
													</td> 
													<td style="width: 5%; text-align: center;">2</td> 
													<td style="width: 20%;">
														<input name="TStpim[r204e]" id="TStpim_r204e" type="text" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="blank" mt-field="r204e" mt-alias="r204e" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r205 hidden">
													<td rowspan="5" style="text-align: center; width: 50px;">205</td> 
													<td colspan="6">Jika rincian 204.d. terisi (Ya), tindakan apa yang dilakukan perusahaan?</td> 
													<td style="width: 5%; text-align: center;">Ya</td> 
													<td style="width: 5%; text-align: center;">Tidak</td> 
													<td style="width: 20%;"></td>
												</tr> 
												<tr class="r205_opt hidden">
													<td colspan="6">a. Merumahkan karyawan</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r205a]" id="r205a_1" value="1" <?php if($arr_page2->r205a == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r205a]" id="r205a_2" value="2" <?php if($arr_page2->r205a == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r205a]" id="TStpim_r205a" type="text" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="blank" mt-field="r205a" mt-alias="r205a" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r205_opt hidden">
													<td colspan="6">b. Pemutusan Hubungan Kerja (PHK) karyawan</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r205b]" id="r205b_1" value="1" <?php if($arr_page2->r205b == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r205b]" id="r205b_2" value="1" <?php if($arr_page2->r205b == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r205b]" id="TStpim_r205b" type="text" class="form-control text-right mask" maxlength="1" mt-range="3-4" mt-is-blank="blank" mt-field="r205b" mt-alias="r205b" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r205_opt hidden">
													<td colspan="6">c. Pengurangan kapasitas terpakai perusahaan</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r205c]" id="r205c_1" value="1" <?php if($arr_page2->r205c == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r205c]" id="r205c_2" value="2" <?php if($arr_page2->r205c == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r205c]" id="TStpim_r205c" type="text" class="form-control text-right mask" maxlength="1" mt-range="5-6" mt-is-blank="blank" mt-field="r205c" mt-alias="r205c" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r205_opt hidden">
													<td colspan="2">d. Lainnya, tuliskan</td> 
													<td colspan="6">
														<input name="TStpim[r205d_lainnya]" id="TStpim_r205d_lainnya" type="text" value="<?php echo $arr_page2->r205d_lainnya;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r205d_lainnya" mt-alias="r205d_lainnya" mt-page="2">
													</td> 
													<!--td style="width: 5%; text-align: center;">7</td> 
													<td style="width: 5%; text-align: center;">8</td> 
													<td style="width: 20%;">
														<input name="TStpim[r205d]" id="TStpim_r205d" type="text" class="form-control text-right mask" maxlength="1" mt-range="7-8" mt-is-blank="blank" mt-field="r205d" mt-alias="r205d" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr class="r206 hidden">
													<td style="text-align: center; width: 50px;">206</td>
													<td colspan="8">Jika rincian 205 a dan/atau b (Ya), berapa karyawan yang dirumahkan dan/atau  di-PHK? </td> 
													<td style="width: 20%;">
														<input name="TStpim[r206]" id="TStpim_r206" type="text" value="<?php echo $arr_page2->r206;?>" class="form-control text-left text-uppercase textFieldNumber" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r206" mt-alias="r206" mt-page="2">
													</td>
												</tr> 
												<tr>
													<td rowspan="5" style="text-align: center; width: 50px;">207</td> 
													<td colspan="8">Bagaimana perolehan laba perusahaan tahun 2020 dibandingkan dengan tahun 2019? Laba yang dimaksud adalah laba sebelum pajak (earning before tax )</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r207]" id="TStpim_r207" type="text" value="3" class="form-control text-right mask" maxlength="1" mt-range="1-4" mt-is-blank="notblank" mt-field="r207" mt-alias="r207" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r207]" id="TStpim_r207_1" value="1" <?php if($arr_page2->r207 == '1'){echo "checked";}?>>a. Meningkat</label>
													</td>
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r207]" id="TStpim_r207_2" value="2" <?php if($arr_page2->r207 == '2'){echo "checked";}?>>b. Menurun</label>
													</td>
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r207]" id="TStpim_r207_3" value="3" <?php if($arr_page2->r207 == '3'){echo "checked";}?>>c. Tetap</label>
													</td>
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r207]" id="TStpim_r207_4" value="4" <?php if($arr_page2->r207 == '4'){echo "checked";}?>>d. Tidak dapat dibandingkan</label>
													</td>
												</tr> 
												<tr>
													<td rowspan="6" style="text-align: center; width: 50px;">208</td> 
													<td colspan="6">Bagaimana prospek perusahaan pada tahun 2021 dibandingkan dengan tahun 2020?</td> 
													<td style="width: 5%; text-align: center;"></td> 
													<td style="width: 5%; text-align: center;"></td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r208]" id="TStpim_r208" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-5" mt-is-blank="notblank" mt-field="r208" mt-alias="r208" mt-page="2" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r208]" id="TStpim_r208_1" value="1" <?php if($arr_page2->r208 == '1'){echo "checked";}?>>a. Lebih baik</label>
													</td> 
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r208]" id="TStpim_r208_2" value="2" <?php if($arr_page2->r208 == '2'){echo "checked";}?>>b. Sama baik</label>
													</td>
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r208]" id="TStpim_r208_3" value="3" <?php if($arr_page2->r208 == '3'){echo "checked";}?>>c. Sama buruk</label>
													</td>
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r208]" id="TStpim_r208_4" value="4" <?php if($arr_page2->r208 == '4'){echo "checked";}?>>d. Lebih buruk</label>
													</td> 
												</tr> 
												<tr>
													<td colspan="6">
														<label class="radio-inline"><input type="radio" name="TStpim[r208]" id="TStpim_r208_5" value="5" <?php if($arr_page2->r208 == '5'){echo "checked";}?>>e. Tidak dapat dibandingkan</label>
													</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">209</td>
													<td colspan="8">Menurut saudara bagaimana kegiatan produksi perusahaan selama 2020, tuliskan secara ringkas dan jelas fenomena yang terjadi?</td>
												</tr> 
												<tr>
													<td colspan="8">
														<textarea name="TStpim[r209]" id="TStpim_r209" class="form-control text-left text-uppercase" maxlength="250" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r209" mt-alias="r209" mt-page="2" style="height: 250px;"><?php echo $arr_page2->r209;?></textarea>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_1" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_2_prev" style="width: 150px">Kembali</a>
								<a href="#tab_3" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_2_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_3" class="tab-pane tab-child"><br> 
						<div id="form-input-page3" class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK II : KARAKTERISTIK PERUSAHAAN (LANJUTAN)</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="5" style="text-align: center; width: 50px;">210</td> 
													<td colspan="9">Persentase permodalan per 31 Desember 2020</td>
												</tr> 
												<tr>
													<td>a.</td> 
													<td> Pemerintah</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR210()" name="TStpim[r210a]" id="TStpim_r210a" type="text" value="<?php echo $arr_page3->r210a;?>"  maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r210a" mt-alias="r210a" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 5px;">%</td> 
													<td style="width: 5px;"></td> 
													<td colspan="2">d. Asing/Luar Negri</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR210()" name="TStpim[r210d]" id="TStpim_r210d" type="text" value="<?php echo $arr_page3->r210d;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r210d" mt-alias="r210d" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 5px;">%</td>
												</tr> 
												<tr>
													<td>b.</td> 
													<td>Perusahaan/Lembaga Non Keuangan </td> 
													<td style="width: 20%;">
														<input onkeyup="sumR210()" name="TStpim[r210b]" id="TStpim_r210b" type="text" value="<?php echo $arr_page3->r210b;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r210b" mt-alias="r210b" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 5px;">%</td> 
													<td style="width: 5px;"></td> 
													<td colspan="2">e. Lembaga Nirlaba</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR210()" name="TStpim[r210e]" id="TStpim_r210e" type="text" value="<?php echo $arr_page3->r210e;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r210e" mt-alias="r210e" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 5px;">%</td>
												</tr> 
												<tr>
													<td>c.</td> 
													<td>Perusahaan/Lembaga Keuangan </td> 
													<td style="width: 20%;">
														<input onkeyup="sumR210()" name="TStpim[r210c]" id="TStpim_r210c" type="text" value="<?php echo $arr_page3->r210c;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r210c" mt-alias="r210c" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 5px;">%</td> 
													<td style="width: 5px;"></td> 
													<td colspan="2">f. Perorangan</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR210()" name="TStpim[r210f]" id="TStpim_r210f" type="text" value="<?php echo $arr_page3->r210f;?>" maxlength="7" value="" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r210f" mt-alias="r210f" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 5px;">%</td>
												</tr> 
												<tr>
													<td colspan="7" style="text-align: right;">Jumlah a+b+c+d+e+f</td> 
													<td style="width: 20%;">
														<input readonly="readonly" name="TStpim[r210jum]" id="TStpim_r210jum" type="text" value="<?php echo $arr_page3->r210jum;?>" maxlength="18" value="" class="form-control">
													</td> 
													<td style="width: 5px;">%</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">211</td> 
													<td colspan="9">Jika isian Rincian 210.d. lebih dari atau sama dengan 10%, maka isikan informasi pemegang saham asing <br><i>(urutkan dari kepemilikan saham terbesar)</i>:</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th style="width: 7%; text-align: center;">No</th> 
																	<th style="width: 30%; text-align: center;">Nama</th> 
																	<th style="width: 20%; text-align: center;">Negara</th> 
																	<th style="width: 23%; text-align: center;">Bidang Usaha</th> 
																	<th colspan="2" style="text-align: center;">Kepemilikan saham</th>
																</tr> 
																<tr>
																	<th style="width: 7%; text-align: center;">(1)</th> 
																	<th style="width: 30%; text-align: center;">(2)</th> 
																	<th style="width: 20%; text-align: center;">(3)</th> 
																	<th style="width: 23%; text-align: center;">(4)</th> 
																	<th colspan="2" style="text-align: center;">(5)</th>
																</tr> 
																<tr>
																	<td style="width: 7%; text-align: center;">1.</td> 
																	<td>
																		<input name="TStpim[r211k2_1]" id="TStpim_r211k2_1" type="text" value="<?php echo $arr_page3->r211k2_1;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r211k2_1" mt-alias="r211k2_1" mt-page="3">
																	</td> 
																	<td>
																		<select name="TStpim[r211k3_1]" id="TStpim_r211k3_1" class="form-control select2">
																			<option value="">---PILIH NEGARA---</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option>
																		</select>
																	</td> 
																	<td>
																		<input name="TStpim[r211k4_1]" id="TStpim_r211k4_1" type="text" value="<?php echo $arr_page3->r211k4_1;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r211k4_1" mt-alias="r211k4_1" mt-page="3">
																	</td> 
																	<td>
																		<input name="TStpim[r211k5_1]" id="TStpim_r211k5_1" type="text" value="<?php echo $arr_page3->r211k5_1;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r211k5_1" mt-alias="r211k5_1" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td style="width: 7%; text-align: center;">2.</td> 
																	<td>
																		<input name="TStpim[r211k2_2]" id="TStpim_r211k2_2" type="text" value="<?php echo $arr_page3->r211k2_2;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r211k2_2" mt-alias="r211k2_2" mt-page="3">
																	</td> 
																	<td>
																		<select name="TStpim[r211k3_2]" id="TStpim_r211k3_2" class="form-control select2">
																			<option value="" selected="selected" data-select2-id="4">---PILIH NEGARA---</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option>
																		</select>
																	</td> 
																	<td>
																		<input name="TStpim[r211k4_2]" id="TStpim_r211k4_2" type="text" value="<?php echo $arr_page3->r211k4_2;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r211k4_2" mt-alias="r211k4_2" mt-page="3">
																	</td> 
																	<td>
																		<input name="TStpim[r211k5_2]" id="TStpim_r211k5_2" type="text" value="<?php echo $arr_page3->r211k5_2;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r211k5_2" mt-alias="r211k5_2" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td style="width: 5%; text-align: center;">3.</td> 
																	<td>Lainnya</td> <td colspan="2"></td> 
																	<td>
																		<input name="TStpim[r211k5_lainnya]" id="TStpim_r211k5_lainnya" type="text" value="<?php echo $arr_page3->r211k5_lainnya;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r211k5_lainnya" mt-alias="r211k5_lainnya" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="9" style="text-align: center; width: 50px;">212</td> 
													<td colspan="9">Persentase nilai penjualan barang/jasa menurut jenis konsumen selama tahun 2020</td>
												</tr> 
												<tr>
													<td style="width: 10px;">a.</td> 
													<td colspan="6">Perusahaan industri pengolahan lainnya </td> 
													<td style="width: 20%;">
														<input onkeyup="sumR212()" name="TStpim[r212a]" id="TStpim_r212a" type="text" value="<?php echo $arr_page3->r212a;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r212a" mt-alias="r212a" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td style="width: 10px;">b.</td> 
													<td colspan="6"> Pedagang besar (eksportir, distributor, agen, grosir)</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR212()" name="TStpim[r212b]" id="TStpim_r212b" type="text" value="<?php echo $arr_page3->r212b;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r212b" mt-alias="r212b" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td style="width: 10px;">c.</td> 
													<td colspan="6"> Pedagang eceran</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR212()" name="TStpim[r212c]" id="TStpim_r212c" type="text" value="<?php echo $arr_page3->r212c;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r212c" mt-alias="r212c" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td style="width: 10px;">d.</td> 
													<td colspan="6"> Pemerintah/Institusi</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR212()" name="TStpim[r212d]" id="TStpim_r212d" type="text" value="<?php echo $arr_page3->r212d;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r212d" mt-alias="r212d" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td style="width: 10px;">e.</td> 
													<td colspan="6">Kegiatan usaha lainnya (restoran, hotel, dll)</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR212()" name="TStpim[r212e]" id="TStpim_r212e" type="text" value="<?php echo $arr_page3->r212e;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r212e" mt-alias="r212e" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td style="width: 10px;">f.</td> 
													<td colspan="6">Rumah tangga</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR212()" name="TStpim[r212f]" id="TStpim_r212f" type="text" value="<?php echo $arr_page3->r212f;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r212f" mt-alias="r212f" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td style="width: 10px;">g.</td> 
													<td colspan="2">Lainnya, tuliskan</td> 
													<td colspan="4">
														<input name="TStpim[r212g_lainnya]" id="TStpim_r212g_lainnya" type="text" value="<?php echo $arr_page3->r212g_lainnya;?>" maxlength="500" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r212g_lainnya" mt-alias="r212g_lainnya" mt-page="3">
													</td> 
													<td style="width: 20%;">
														<input onkeyup="sumR212()" name="TStpim[r212g]" id="TStpim_r212g" value="<?php echo $arr_page3->r212g;?>" type="text" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r212g" mt-alias="r212g" mt-page="3" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td style="width: 10px;"></td> 
													<td colspan="6">Jumlah</td> 
													<td style="width: 20%;">
														<input readonly="readonly" name="TStpim[r212jum]" id="TStpim_r212jum" value="<?php echo $arr_page3->r212jum;?>" type="text" maxlength="18" class="form-control">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">213</td> 
													<td colspan="9">Tuliskan persentase nilai pembelian bahan baku utama menurut asal provinsi</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr style="text-align: center;">
																	<th style="width: 30%; text-align: center;">Nama bahan baku utama</th> 
																	<th colspan="3" style="text-align: center;">Asal</th> 
																	<th colspan="2" style="text-align: center;">Persentase</th>
																</tr> 
																<tr style="text-align: center;">
																	<th style="width: 30%; text-align: center;">(1)</th> 
																	<th colspan="3" style="text-align: center;">(2)</th> 
																	<th colspan="2" style="text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td rowspan="7">
																		<input name="TStpim[r213k1]" id="TStpim_r213k1" type="text" maxlength="250" value="<?php echo $arr_page3->r213k1;?>" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r213k1" mt-alias="r213k1" mt-page="3">
																	</td> 
																	<td style="width: 5%; text-align: center;">a.</td> 
																	<td colspan="2">Dalam satu provinsi</td> 
																	<td>
																		<input onchange="sumR213()" name="TStpim[r213k3a]" id="TStpim_r213k3a" type="text" maxlength="7" value="<?php echo $arr_page3->r213k3a;?>" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r213k3a" mt-alias="r213k3a" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td style="width: 5%; text-align: center;">b.</td> 
																	<td colspan="2">Provinsi lain</td> 
																	<td></td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td></td> 
																	<td style="width: 5%;">1.</td> 
																	<td style="width: 40%;">
																		<select name="TStpim[r213k2b1]" id="TStpim_r213k2b1" class="form-control text-left text-uppercase textFieldNumber select2">
																			<option value="">---PILIH PROVINSI---</option> <option value="11">[11] ACEH</option> <option value="12">[12] SUMATERA UTARA</option> <option value="13">[13] SUMATERA BARAT</option> <option value="14">[14] RIAU</option> <option value="15">[15] JAMBI</option> <option value="16">[16] SUMATERA SELATAN</option> <option value="17">[17] BENGKULU</option> <option value="18">[18] LAMPUNG</option> <option value="19">[19] KEPULAUAN BANGKA BELITUNG</option> <option value="21">[21] KEPULAUAN RIAU</option> <option value="31">[31] DKI JAKARTA</option> <option value="32">[32] JAWA BARAT</option> <option value="33">[33] JAWA TENGAH</option> <option value="34">[34] DI YOGYAKARTA</option> <option value="35">[35] JAWA TIMUR</option> <option value="36">[36] BANTEN</option> <option value="51">[51] BALI</option> <option value="52">[52] NUSA TENGGARA BARAT</option> <option value="53">[53] NUSA TENGGARA TIMUR</option> <option value="61">[61] KALIMANTAN BARAT</option> <option value="62">[62] KALIMANTAN TENGAH</option> <option value="63">[63] KALIMANTAN SELATAN</option> <option value="64">[64] KALIMANTAN TIMUR</option> <option value="65">[65] KALIMANTAN UTARA</option> <option value="71">[71] SULAWESI UTARA</option> <option value="72">[72] SULAWESI TENGAH</option> <option value="73">[73] SULAWESI SELATAN</option> <option value="74">[74] SULAWESI TENGGARA</option> <option value="75">[75] GORONTALO</option> <option value="76">[76] SULAWESI BARAT</option> <option value="81">[81] MALUKU</option> <option value="82">[82] MALUKU UTARA</option> <option value="91">[91] PAPUA BARAT</option> <option value="94">[94] PAPUA</option>
																		</select>
																	</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR213()" name="TStpim[r213k3b1]" id="TStpim_r213k3b1" type="text" maxlength="7" value="<?php echo $arr_page3->r213k3b1;?>" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r213k3b1" mt-alias="r213k3b1" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td></td> 
																	<td style="width: 5px;">2.</td> 
																	<td style="width: 40%;">
																		<select name="TStpim[r213k2b2]" id="TStpim_r213k2b2" class="form-control text-left text-uppercase textFieldNumber select2">
																			<option value="" selected="selected">---PILIH PROVINSI---</option> <option value="11">[11] ACEH</option> <option value="12">[12] SUMATERA UTARA</option> <option value="13">[13] SUMATERA BARAT</option> <option value="14">[14] RIAU</option> <option value="15">[15] JAMBI</option> <option value="16">[16] SUMATERA SELATAN</option> <option value="17">[17] BENGKULU</option> <option value="18">[18] LAMPUNG</option> <option value="19">[19] KEPULAUAN BANGKA BELITUNG</option> <option value="21">[21] KEPULAUAN RIAU</option> <option value="31">[31] DKI JAKARTA</option> <option value="32">[32] JAWA BARAT</option> <option value="33">[33] JAWA TENGAH</option> <option value="34">[34] DI YOGYAKARTA</option> <option value="35">[35] JAWA TIMUR</option> <option value="36">[36] BANTEN</option> <option value="51">[51] BALI</option> <option value="52">[52] NUSA TENGGARA BARAT</option> <option value="53">[53] NUSA TENGGARA TIMUR</option> <option value="61">[61] KALIMANTAN BARAT</option> <option value="62">[62] KALIMANTAN TENGAH</option> <option value="63">[63] KALIMANTAN SELATAN</option> <option value="64">[64] KALIMANTAN TIMUR</option> <option value="65">[65] KALIMANTAN UTARA</option> <option value="71">[71] SULAWESI UTARA</option> <option value="72">[72] SULAWESI TENGAH</option> <option value="73">[73] SULAWESI SELATAN</option> <option value="74">[74] SULAWESI TENGGARA</option> <option value="75">[75] GORONTALO</option> <option value="76">[76] SULAWESI BARAT</option> <option value="81">[81] MALUKU</option> <option value="82">[82] MALUKU UTARA</option> <option value="91">[91] PAPUA BARAT</option> <option value="94">[94] PAPUA</option>
																		</select>
																	</td> 
																	<td>
																		<input onchange="sumR213()" name="TStpim[r213k3b2]" id="TStpim_r213k3b2" value="<?php echo $arr_page3->r213k3b2;?>" type="text" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r213k3b2" mt-alias="r213k3b2" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td></td> 
																	<td style="width: 5px;">3.</td> 
																	<td style="width: 40%;">
																		<select name="TStpim[r213k2b3]" id="TStpim_r213k2b3" class="form-control text-left text-uppercase textFieldNumber select2">
																			<option value="" selected="selected">---PILIH PROVINSI---</option> <option value="11">[11] ACEH</option> <option value="12">[12] SUMATERA UTARA</option> <option value="13">[13] SUMATERA BARAT</option> <option value="14">[14] RIAU</option> <option value="15">[15] JAMBI</option> <option value="16">[16] SUMATERA SELATAN</option> <option value="17">[17] BENGKULU</option> <option value="18">[18] LAMPUNG</option> <option value="19">[19] KEPULAUAN BANGKA BELITUNG</option> <option value="21">[21] KEPULAUAN RIAU</option> <option value="31">[31] DKI JAKARTA</option> <option value="32">[32] JAWA BARAT</option> <option value="33">[33] JAWA TENGAH</option> <option value="34">[34] DI YOGYAKARTA</option> <option value="35">[35] JAWA TIMUR</option> <option value="36">[36] BANTEN</option> <option value="51">[51] BALI</option> <option value="52">[52] NUSA TENGGARA BARAT</option> <option value="53">[53] NUSA TENGGARA TIMUR</option> <option value="61">[61] KALIMANTAN BARAT</option> <option value="62">[62] KALIMANTAN TENGAH</option> <option value="63">[63] KALIMANTAN SELATAN</option> <option value="64">[64] KALIMANTAN TIMUR</option> <option value="65">[65] KALIMANTAN UTARA</option> <option value="71">[71] SULAWESI UTARA</option> <option value="72">[72] SULAWESI TENGAH</option> <option value="73">[73] SULAWESI SELATAN</option> <option value="74">[74] SULAWESI TENGGARA</option> <option value="75">[75] GORONTALO</option> <option value="76">[76] SULAWESI BARAT</option> <option value="81">[81] MALUKU</option> <option value="82">[82] MALUKU UTARA</option> <option value="91">[91] PAPUA BARAT</option> <option value="94">[94] PAPUA</option>
																		</select>
																	</td> 
																	<td>
																		<input onchange="sumR213()" name="TStpim[r213k3b3]" id="TStpim_r213k3b3" type="text" value="<?php echo $arr_page3->r213k3b3;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r213k3b3" mt-alias="r213k3b3" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td></td> 
																	<td style="width: 5px;">4.</td> 
																	<td style="width: 40%;">Lainnya</td> 
																	<td>
																		<input onchange="sumR213()" name="TStpim[r213k3b4]" id="TStpim_r213k3b4" type="text" value="<?php echo $arr_page3->r213k3b4;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r213k3b4" mt-alias="r213k3b4" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td colspan="3" style="width: 10px; text-align: right;">Jumlah</td> 
																	<td style="text-align: center;">
																		<input readonly="readonly" name="TStpim[r213jum]" id="TStpim_r213jum" type="text" maxlength="18" value="<?php echo $arr_page3->r213jum;?>" class="form-control">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">214</td> 
													<td colspan="9">Tuliskan persentase nilai penjualan produk utama menurut provinsi tujuan</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr style="text-align: center;">
																	<th style="width: 30%; text-align: center;">Nama produk utama yang dijual</th> 
																	<th colspan="3" style="text-align: center;">Tujuan</th> 
																	<th colspan="2" style="text-align: center;">Persentase</th>
																</tr> 
																<tr style="text-align: center;">
																	<th style="width: 30%; text-align: center;">(1)</th> 
																	<th colspan="3" style="text-align: center;">(2)</th> 
																	<th colspan="2" style="text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td rowspan="7">
																		<input name="TStpim[r214k1]" id="TStpim_r214k1" type="text" maxlength="250" value="<?php echo $arr_page3->r214k1;?>" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r214k1" mt-alias="r214k1" mt-page="3">
																	</td> 
																	<td style="width: 5%; text-align: center;">a.</td> 
																	<td colspan="2">Dalam satu provinsi</td> 
																	<td>
																		<input onchange="sumR214()" name="TStpim[r214k3a]" id="TStpim_r214k3a" type="text" maxlength="7" value="<?php echo $arr_page3->r214k3a;?>" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r214k3a" mt-alias="r214k3a" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td style="width: 5%; text-align: center;">b.</td> 
																	<td colspan="2">Provinsi lain</td> 
																	<td></td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td></td> 
																	<td style="width: 5%;">1.</td> 
																	<td style="width: 40%;">
																		<select name="TStpim[r214k2b1]" id="TStpim_r214k2b1" class="form-control text-left text-uppercase textFieldNumber select2">
																			<option value="" selected="selected">---PILIH PROVINSI---</option> <option value="11">[11] ACEH</option> <option value="12">[12] SUMATERA UTARA</option> <option value="13">[13] SUMATERA BARAT</option> <option value="14">[14] RIAU</option> <option value="15">[15] JAMBI</option> <option value="16">[16] SUMATERA SELATAN</option> <option value="17">[17] BENGKULU</option> <option value="18">[18] LAMPUNG</option> <option value="19">[19] KEPULAUAN BANGKA BELITUNG</option> <option value="21">[21] KEPULAUAN RIAU</option> <option value="31">[31] DKI JAKARTA</option> <option value="32">[32] JAWA BARAT</option> <option value="33">[33] JAWA TENGAH</option> <option value="34">[34] DI YOGYAKARTA</option> <option value="35">[35] JAWA TIMUR</option> <option value="36">[36] BANTEN</option> <option value="51">[51] BALI</option> <option value="52">[52] NUSA TENGGARA BARAT</option> <option value="53">[53] NUSA TENGGARA TIMUR</option> <option value="61">[61] KALIMANTAN BARAT</option> <option value="62">[62] KALIMANTAN TENGAH</option> <option value="63">[63] KALIMANTAN SELATAN</option> <option value="64">[64] KALIMANTAN TIMUR</option> <option value="65">[65] KALIMANTAN UTARA</option> <option value="71">[71] SULAWESI UTARA</option> <option value="72">[72] SULAWESI TENGAH</option> <option value="73">[73] SULAWESI SELATAN</option> <option value="74">[74] SULAWESI TENGGARA</option> <option value="75">[75] GORONTALO</option> <option value="76">[76] SULAWESI BARAT</option> <option value="81">[81] MALUKU</option> <option value="82">[82] MALUKU UTARA</option> <option value="91">[91] PAPUA BARAT</option> <option value="94">[94] PAPUA</option>
																		</select>
																	</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR214()" name="TStpim[r214k3b1]" id="TStpim_r214k3b1" type="text" value="<?php echo $arr_page3->r214k3b1;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r214k3b1" mt-alias="r214k3b1" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td></td> 
																	<td style="width: 5px;">2.</td> 
																	<td style="width: 40%;">
																		<select name="TStpim[r214k2b2]" id="TStpim_r214k2b2" class="form-control text-left text-uppercase textFieldNumber select2">
																			<option value="" selected="selected">---PILIH PROVINSI---</option> <option value="11">[11] ACEH</option> <option value="12">[12] SUMATERA UTARA</option> <option value="13">[13] SUMATERA BARAT</option> <option value="14">[14] RIAU</option> <option value="15">[15] JAMBI</option> <option value="16">[16] SUMATERA SELATAN</option> <option value="17">[17] BENGKULU</option> <option value="18">[18] LAMPUNG</option> <option value="19">[19] KEPULAUAN BANGKA BELITUNG</option> <option value="21">[21] KEPULAUAN RIAU</option> <option value="31">[31] DKI JAKARTA</option> <option value="32">[32] JAWA BARAT</option> <option value="33">[33] JAWA TENGAH</option> <option value="34">[34] DI YOGYAKARTA</option> <option value="35">[35] JAWA TIMUR</option> <option value="36">[36] BANTEN</option> <option value="51">[51] BALI</option> <option value="52">[52] NUSA TENGGARA BARAT</option> <option value="53">[53] NUSA TENGGARA TIMUR</option> <option value="61">[61] KALIMANTAN BARAT</option> <option value="62">[62] KALIMANTAN TENGAH</option> <option value="63">[63] KALIMANTAN SELATAN</option> <option value="64">[64] KALIMANTAN TIMUR</option> <option value="65">[65] KALIMANTAN UTARA</option> <option value="71">[71] SULAWESI UTARA</option> <option value="72">[72] SULAWESI TENGAH</option> <option value="73">[73] SULAWESI SELATAN</option> <option value="74">[74] SULAWESI TENGGARA</option> <option value="75">[75] GORONTALO</option> <option value="76">[76] SULAWESI BARAT</option> <option value="81">[81] MALUKU</option> <option value="82">[82] MALUKU UTARA</option> <option value="91">[91] PAPUA BARAT</option> <option value="94">[94] PAPUA</option>
																		</select>
																	</td> 
																	<td>
																		<input onchange="sumR214()" name="TStpim[r214k3b2]" id="TStpim_r214k3b2" type="text" value="<?php echo $arr_page3->r214k3b2;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r214k3b2" mt-alias="r214k3b2" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td></td> 
																	<td style="width: 5px;">3.</td> 
																	<td style="width: 40%;">
																		<select name="TStpim[r214k2b3]" id="TStpim_r214k2b3" class="form-control text-left text-uppercase textFieldNumber select2">
																			<option value="" selected="selected">---PILIH PROVINSI---</option> <option value="11">[11] ACEH</option> <option value="12">[12] SUMATERA UTARA</option> <option value="13">[13] SUMATERA BARAT</option> <option value="14">[14] RIAU</option> <option value="15">[15] JAMBI</option> <option value="16">[16] SUMATERA SELATAN</option> <option value="17">[17] BENGKULU</option> <option value="18">[18] LAMPUNG</option> <option value="19">[19] KEPULAUAN BANGKA BELITUNG</option> <option value="21">[21] KEPULAUAN RIAU</option> <option value="31">[31] DKI JAKARTA</option> <option value="32">[32] JAWA BARAT</option> <option value="33">[33] JAWA TENGAH</option> <option value="34">[34] DI YOGYAKARTA</option> <option value="35">[35] JAWA TIMUR</option> <option value="36">[36] BANTEN</option> <option value="51">[51] BALI</option> <option value="52">[52] NUSA TENGGARA BARAT</option> <option value="53">[53] NUSA TENGGARA TIMUR</option> <option value="61">[61] KALIMANTAN BARAT</option> <option value="62">[62] KALIMANTAN TENGAH</option> <option value="63">[63] KALIMANTAN SELATAN</option> <option value="64">[64] KALIMANTAN TIMUR</option> <option value="65">[65] KALIMANTAN UTARA</option> <option value="71">[71] SULAWESI UTARA</option> <option value="72">[72] SULAWESI TENGAH</option> <option value="73">[73] SULAWESI SELATAN</option> <option value="74">[74] SULAWESI TENGGARA</option> <option value="75">[75] GORONTALO</option> <option value="76">[76] SULAWESI BARAT</option> <option value="81">[81] MALUKU</option> <option value="82">[82] MALUKU UTARA</option> <option value="91">[91] PAPUA BARAT</option> <option value="94">[94] PAPUA</option>
																		</select>
																	</td> 
																	<td>
																		<input onchange="sumR214()" name="TStpim[r214k3b3]" id="TStpim_r214k3b3" type="text" value="<?php echo $arr_page3->r214k3b3;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r214k3b3" mt-alias="r214k3b3" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td></td> 
																	<td style="width: 5px;">4.</td> 
																	<td style="width: 40%;">Lainnya</td> 
																	<td>
																		<input onchange="sumR214()" name="TStpim[r214k3b4]" id="TStpim_r214k3b4" type="text" value="<?php echo $arr_page3->r214k3b4;?>" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r214k3b4" mt-alias="r214k3b4" mt-page="3" style="text-align: right;">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr> 
																<tr>
																	<td colspan="3" style="width: 10px; text-align: right;">Jumlah</td> 
																	<td style="text-align: center;">
																		<input readonly="readonly" name="TStpim[r214jum]" id="TStpim_r214jum" type="text" maxlength="18" value="<?php echo $arr_page3->r214jum;?>" class="form-control">
																	</td> 
																	<td style="width: 5px;">%</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="5" style="text-align: center; width: 50px;">215</td> 
													<td colspan="6">Apakah perusahaan memiliki sertifikat Standar Nasional Indonesia (SNI) ?</td> 
													<td style="width: 5%; text-align: center;">Ya</td> 
													<td style="width: 5%; text-align: center;">Tidak</td> 
													<td style="width: 20%;"></td>
												</tr> 
												<tr>
													<td colspan="6">a. SNI produk (sertifikasi produk)</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r215a]" id="r215a_1" value="1" <?php if($arr_page3->r215a == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r215a]" id="r215a_2" value="2" <?php if($arr_page3->r215a == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r215a]" id="TStpim_r215a" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r215a" mt-alias="r215a" mt-page="3" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">b. SNI manajemen lingkungan ISO 14001</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r215b]" id="r215b_1" value="1" <?php if($arr_page3->r215b == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r215b]" id="r215b_2" value="2" <?php if($arr_page3->r215b == '2'){echo "checked";}?>>Tidak</label>
													</td>  
													<!--td style="width: 20%;">
														<input name="TStpim[r215b]" id="TStpim_r215b" type="text" value="4" class="form-control text-right mask" maxlength="1" mt-range="3-4" mt-is-blank="notblank" mt-field="r215b" mt-alias="r215b" mt-page="3" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">c. SNI manajemen lain (sistem manajemen halal, audit, dll)</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r215c]" id="r215c_1" value="1" <?php if($arr_page3->r215c == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r215c]" id="r215c_2" value="2" <?php if($arr_page3->r215c == '2'){echo "checked";}?>>Tidak</label>
													</td>  
													<!--td style="width: 20%;">
														<input name="TStpim[r215c]" id="TStpim_r215c" type="text" value="6" class="form-control text-right mask" maxlength="1" mt-range="5-6" mt-is-blank="notblank" mt-field="r215c" mt-alias="r215c" mt-page="3" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">d. SNI lainnya (metode uji, proses, person, dll)</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r215d]" id="r215d_1" value="1" <?php if($arr_page3->r215d == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r215d]" id="r215d_2" value="2" <?php if($arr_page3->r215d == '1'){echo "checked";}?>>Tidak</label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r215d]" id="TStpim_r215d" type="text" value="8" class="form-control text-right mask" maxlength="1" mt-range="7-8" mt-is-blank="notblank" mt-field="r215d" mt-alias="r215d" mt-page="3" style="text-align: right;">
													</td-->
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_2" data-toggle="tab" halaman="3" class="btn btn-warning bg-flat btn-simpan pull-left hal_3_prev" style="width: 150px">Kembali</a>
								<a href="#tab_4" data-toggle="tab" halaman="3" class="btn btn-success bg-flat btn-simpan pull-right hal_3_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_4" class="tab-pane tab-child"><br> 
						<div id="form-input-page4" class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK II : KARAKTERISTIK PERUSAHAAN (LANJUTAN)</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">216</td> 
													<td colspan="8" style="width: 80%;">Apakah perusahaan melakukan kegiatan Penelitian dan Pengembangan (R&amp;D) sendiri? <br><i> Kegiatan penelitian dan pengembangan adalah kegiatan kreatif yang dilakukan dengan sistematis untuk menambah pengetahuan dan pemanfaatan pengetahuan ini untuk merancang penerapan baru</i></td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r216]" id="TStpim_r216" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r216" mt-alias="r216" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r216]" id="TStpim_r216_1" value="1" <?php if($arr_page4->r216 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="6"> </td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r216]" id="TStpim_r216_2" value="2" <?php if($arr_page4->r216 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">217</td> 
													<td colspan="8">Apakah perusahaan membiayai kegiatan Penelitian dan Pengembangan (R&amp;D) yang dilakukan oleh pihak lain?</td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r217]" id="TStpim_r217" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r217" mt-alias="r217" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r217]" id="TStpim_r217_1" value="1" <?php if($arr_page4->r217 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="6"> </td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r217]" id="TStpim_r217_2" value="2" <?php if($arr_page4->r217 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">218</td> 
													<td colspan="8">Apakah perusahaan melakukan inovasi (menghasilkan barang/jasa baru atau menggunakan teknologi baru)? </td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r218]" id="TStpim_r218" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r218" mt-alias="r218" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r218]" id="TStpim_r218_1" value="1" <?php if($arr_page4->r218 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="6"> </td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r218]" id="TStpim_r218_2" value="2" <?php if($arr_page4->r218 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">219</td> 
													<td colspan="8">Apakah perusahaan menggunakan bahan baku ramah lingkungan? </td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r219]" id="TStpim_r219" type="text" value="1" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r219" mt-alias="r219" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r219]" id="TStpim_r218_1" value="1" <?php if($arr_page4->r219 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="6"> </td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r219]" id="TStpim_r218_2" value="2" <?php if($arr_page4->r219 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="1" style="text-align: center; width: 50px;">220</td> 
													<td colspan="8">Jika rincian 219 terisi kode 1 (Ya), berapa persentase nilai penggunaan bahan baku ramah lingkungan terhadap total nilai bahan baku?</td> 
													<td rowspan="1" style="width: 20%;">
														<input name="TStpim[r220]" id="TStpim_r220" type="text" maxlength="7" value="<?php echo $arr_page4->r220;?>" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r220" mt-alias="r220" mt-page="4" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">221</td> 
													<td colspan="8">Apakah perusahaan memproduksi barang/jasa ramah lingkungan </td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r221]" id="TStpim_r221" type="text" value="1" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r221" mt-alias="r221" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r221]" id="TStpim_r221_1" value="1" <?php if($arr_page4->r221 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="6"> </td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r221]" id="TStpim_r221_2" value="2" <?php if($arr_page4->r221 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="1" style="text-align: center; width: 50px;">222</td> 
													<td colspan="8">Jika rincian 221 terisi kode 1 (Ya), berapa persentase nilai barang/jasa ramah lingkungan terhadap total nilai produksi?</td> 
													<td rowspan="1" style="width: 20%;">
														<input name="TStpim[r222]" id="TStpim_r222" type="text" maxlength="7" value="<?php echo $arr_page4->r222;?>" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r222" mt-alias="r222" mt-page="4" style="text-align: right;">
													</td> 
													<td style="width: 10px;">%</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">223</td> 
													<td colspan="8">Apakah perusahaan menggunakan teknologi ramah lingkungan </td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r223]" id="TStpim_r223" type="text" value="1" class="form-control text-right mask" maxlength="1" mt-range="1-3" mt-is-blank="notblank" mt-field="r223" mt-alias="r223" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r223]" id="TStpim_r223_1" value="1" <?php if($arr_page4->r223 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="2"> </td> 
													<td colspan="4">
														<label class="radio-inline"><input type="radio" name="TStpim[r223]" id="TStpim_r223_2" value="2" <?php if($arr_page4->r223 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r223]" id="TStpim_r223_3" value="3" <?php if($arr_page4->r223 == '3'){echo "checked";}?>>Tidak Tahu</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">224</td> 
													<td colspan="8">Apakah perusahaan telah mencantumkan Ekolabel pada produknya </td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r224]" id="TStpim_r224" type="text" value="1" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r224" mt-alias="r224" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r224]" id="TStpim_r224_1" value="1" <?php if($arr_page4->r224 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="6"> </td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r224]" id="TStpim_r224_2" value="2" <?php if($arr_page4->r224 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="5" style="text-align: center; width: 50px;">225</td> 
													<td colspan="6">Pengelolaan lingkungan hidup yang dikenakan terhadap perusahaan Ada ?</td> 
													<td style="width: 5%; text-align: center;">Ya</td> 
													<td style="width: 5%; text-align: center;">Tidak</td> 
													<td style="width: 20%;"></td>
												</tr> 
												<tr>
													<td colspan="6">a. Analisa mengenai dampak lingkungan hidup</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r225a]" id="TStpim_r225a_1" value="1" <?php if($arr_page4->r225a == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r225a]" id="TStpim_r225a_2" value="2" <?php if($arr_page4->r225a == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r225a]" id="TStpim_r225a" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="blank" mt-field="r225a" mt-alias="r225a" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">b. Upaya pengelolaan lingkungan hidup dan upaya pemantauan lingkungan hidup</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r225b]" id="TStpim_r225b_1" value="1" <?php if($arr_page4->r225b == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r225b]" id="TStpim_r225b_2" value="2" <?php if($arr_page4->r225b == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r225b]" id="TStpim_r225b" type="text" value="4" class="form-control text-right mask" maxlength="1" mt-range="3-4" mt-is-blank="blank" mt-field="r225b" mt-alias="r225b" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">c. Surat pernyataan pengelolaan lingkungan hidup</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r225c]" id="TStpim_r225c_1" value="1" <?php if($arr_page4->r225c == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r225c]" id="TStpim_r225c_2" value="2" <?php if($arr_page4->r225c == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r225c]" id="TStpim_r225c" type="text" value="6" class="form-control text-right mask" maxlength="1" mt-range="5-6" mt-is-blank="blank" mt-field="r225c" mt-alias="r225c" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">d. Instalasi pengolahan limbah</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r225d]" id="TStpim_r225d_1" value="1" <?php if($arr_page4->r225d == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r225d]" id="TStpim_r225d_2" value="2" <?php if($arr_page4->r225d == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r225d]" id="TStpim_r225d" type="text" value="8" class="form-control text-right mask" maxlength="1" mt-range="7-8" mt-is-blank="blank" mt-field="r225d" mt-alias="r225d" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td rowspan="8" style="text-align: center; width: 50px;">226</td> 
													<td colspan="6">Apakah perusahaan menggunakan teknologi pembangkit listrik di bawah ini ?</td> 
													<td style="width: 5%; text-align: center;">Ya</td> 
													<td style="width: 5%; text-align: center;">Tidak</td> 
													<td style="width: 20%;"></td>
												</tr> 
												<tr>
													<td colspan="6">a. Pembangkit Listrik Tenaga Surya/Solar Cell</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226a]" id="TStpim_r226a_1" value="1" <?php if($arr_page4->r226a == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226a]" id="TStpim_r226a_2" value="2" <?php if($arr_page4->r226a == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r226a]" id="TStpim_r226a" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="blank" mt-field="r226a" mt-alias="r226a" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">b. Pembangkit Listrik Tenaga Air</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226b]" id="TStpim_r226b_1" value="1" <?php if($arr_page4->r226b == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226b]" id="TStpim_r226b_2" value="2" <?php if($arr_page4->r226b == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r226b]" id="TStpim_r226b" type="text" value="4" class="form-control text-right mask" maxlength="1" mt-range="3-4" mt-is-blank="blank" mt-field="r226b" mt-alias="r226b" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">c. Pembangkit Listrik Tenaga Angin</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226c]" id="TStpim_r226c_1" value="1" <?php if($arr_page4->r226c == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226c]" id="TStpim_r226c_2" value="2" <?php if($arr_page4->r226c == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r226c]" id="TStpim_r226c" type="text" value="6" class="form-control text-right mask" maxlength="1" mt-range="5-6" mt-is-blank="blank" mt-field="r226c" mt-alias="r226c" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">d.  Pembangkit Listrik Tenaga Diesel</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226d]" id="TStpim_r226d_1" value="1" <?php if($arr_page4->r226d == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226d]" id="TStpim_r226d_2" value="2" <?php if($arr_page4->r226d == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r226d]" id="TStpim_r226d" type="text" value="8" class="form-control text-right mask" maxlength="1" mt-range="7-8" mt-is-blank="blank" mt-field="r226d" mt-alias="r226d" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">e. Pembangkit Listrik Tenaga Biomassa</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226e]" id="TStpim_r226e_1" value="1" <?php if($arr_page4->r226e == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226e]" id="TStpim_r226e_2" value="2" <?php if($arr_page4->r226e == '2'){echo "checked";}?>></label>
													</td> 
													<!--td style="width: 20%;">
														<input name="TStpim[r226e]" id="TStpim_r226e" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="blank" mt-field="r226e" mt-alias="r226e" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="6">f. Pembangkit Listrik Tenaga Gas</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226f]" id="TStpim_r226f_1" value="1" <?php if($arr_page4->r226f == '1'){echo "checked";}?>></label>
													</td> 
													<td style="width: 5%; text-align: center;">
														<label class="radio-inline"><input type="radio" name="TStpim[r226f]" id="TStpim_r226f_2" value="2" <?php if($arr_page4->r226f == '2'){echo "checked";}?>></label>
													</td>  
													<!--td style="width: 20%;">
														<input name="TStpim[r226f]" id="TStpim_r226f" type="text" value="4" class="form-control text-right mask" maxlength="1" mt-range="3-4" mt-is-blank="blank" mt-field="r226f" mt-alias="r226f" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="2">g. Lainnya. Tuliskan</td> 
													<td colspan="4">
														<input name="TStpim[r226g_lainnya]" id="TStpim_r226g_lainnya" type="text" maxlength="250" value="<?php echo $arr_page4->r226g_lainnya;?>" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r226g_lainnya" mt-alias="r226g_lainnya" mt-page="4">
													</td> 
													<!--td style="width: 5%; text-align: center;">5</td> 
													<td style="width: 5%; text-align: center;">6</td> 
													<td style="width: 20%;">
														<input name="TStpim[r226g]" id="TStpim_r226g" type="text" value="6" class="form-control text-right mask" maxlength="1" mt-range="5-6" mt-is-blank="blank" mt-field="r226g" mt-alias="r226g" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">227</td> 
													<td colspan="8">Apakah perusahaan menggunakan teknologi robot, artificial intelegence , otomatisasi dalam proses produksi?</td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r227]" id="TStpim_r227" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r227" mt-alias="r227" mt-page="4" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r227]" id="TStpim_r227_1" value="1" <?php if($arr_page4->r227 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td colspan="6"> </td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r227]" id="TStpim_r227_2" value="2" <?php if($arr_page4->r227 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_3" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_4_prev" style="width: 150px">Kembali</a>
								<a href="#tab_5" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_4_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_5" class="tab-pane tab-child"><br>
						<div id="form-input-page5">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK II : KARAKTERISTIK PERUSAHAAN (LANJUTAN)</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">228</td> 
													<td colspan="8">Apakah perusahaan mempunyai Izin Usaha Industri (IUI) ?</td> 
													<!--td rowspan="2" style="width: 20%;">
														<input name="TStpim[r228]" id="TStpim_r228" type="text" value="1" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r228" mt-alias="r228" mt-page="5" style="text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td style="width: 10px;">
														<label class="radio-inline"><input type="radio" name="TStpim[r228]" id="TStpim_r228_1" value="1" <?php if(@$arr_page5->r228 == '1'){echo "checked";}?>>Ya</label>
													</td> 
													<td style="width: 20%;">
														<label class="radio-inline"><input type="radio" name="TStpim[r228]" id="TStpim_r228_2" value="2" <?php if(@$arr_page5->r228 == '2'){echo "checked";}?>>Tidak</label>
													</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="4" style="text-align: center; width: 50px;">229</td> 
													<td colspan="9">a. Banyaknya pekerja/karyawan rata-rata per hari kerja selama tahun 2020</td>
												</tr> 
												<tr>
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th rowspan="2" style="width: 20%; text-align: center;">Jenis Pekerja/Jenis Kelamin</th> 
																	<th colspan="2" style="text-align: center;">Pekerja Produksi</th> 
																	<th colspan="2" style="text-align: center;">Pekerja Lainnya</th>
																</tr> 
																<tr>
																	<th style="width: 20%; text-align: center;">WNI</th> 
																	<th style="width: 20%; text-align: center;">Asing</th> 
																	<th style="width: 20%; text-align: center;">WNI</th> 
																	<th style="width: 20%; text-align: center;">Asing</th>
																</tr> 
																<tr>
																	<th style="width: 20%; text-align: center;">(1)</th> 
																	<th style="width: 20%; text-align: center;">(2)</th> 
																	<th style="width: 20%; text-align: center;">(3)</th> 
																	<th style="width: 20%; text-align: center;">(4)</th> 
																	<th style="width: 20%; text-align: center;">(5)</th>
																</tr> 
																<tr>
																	<td colspan="5">1. Pekerja dengan Perjanjian Kerja Waktu Tertentu (PKWT)</td>
																</tr> 
																<tr>
																	<td>&nbsp;&nbsp;&nbsp; a. Laki-laki</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a1ak2]" id="TStpim_r229a1ak2" type="text" value="<?php echo $arr_page5->r229a1ak2;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a1ak2" mt-alias="r229a1ak2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a1ak3]" id="TStpim_r229a1ak3" type="text" value="<?php echo $arr_page5->r229a1ak3;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a1ak3" mt-alias="r229a1ak3" mt-page="5" style="text-align: right;">
																	</td>
																	<td style="width: 20%;">
																		<input name="TStpim[r229a1ak4]" id="TStpim_r229a1ak4" type="text" value="<?php echo $arr_page5->r229a1ak4;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a1ak4" mt-alias="r229a1ak4" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a1ak5]" id="TStpim_r229a1ak5" type="text" value="<?php echo $arr_page5->r229a1ak5;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a1ak5" mt-alias="r229a1ak5" mt-page="5" style="text-align: right;">
																	</td>
																</tr> 
																<tr>
																	<td>&nbsp;&nbsp;&nbsp; b. Perempuan</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a1bk2]" id="TStpim_r229a1bk2" type="text" value="<?php echo $arr_page5->r229a1bk2;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a1bk2" mt-alias="r229a1bk2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a1bk3]" id="TStpim_r229a1bk3" type="text" value="<?php echo $arr_page5->r229a1bk3;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a1bk3" mt-alias="r229a1bk3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a1bk4]" id="TStpim_r229a1bk4" type="text" value="<?php echo $arr_page5->r229a1bk4;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a1bk4" mt-alias="r229a1bk4" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a1bk5]" id="TStpim_r229a1bk5" type="text" value="<?php echo $arr_page5->r229a1bk5;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a1bk5" mt-alias="r229a1bk5" mt-page="5" style="text-align: right;">
																	</td>
																</tr> 
																<tr>
																	<td colspan="5">2. Pekerja dengan Perjanjian Kerja Waktu Tidak Tertentu (PKWTT)</td>
																</tr> 
																<tr>
																	<td>&nbsp;&nbsp;&nbsp; a. Laki-laki</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a2ak2]" id="TStpim_r229a2ak2" type="text" value="<?php echo $arr_page5->r229a2ak2;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a2ak2" mt-alias="r229a2ak2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a2ak3]" id="TStpim_r229a2ak3" type="text" value="<?php echo $arr_page5->r229a2ak3;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a2ak3" mt-alias="r229a2ak3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a2ak4]" id="TStpim_r229a2ak4" type="text" value="<?php echo $arr_page5->r229a2ak4;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a2ak4" mt-alias="r229a2ak4" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a2ak5]" id="TStpim_r229a2ak5" type="text" value="<?php echo $arr_page5->r229a2ak5;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a2ak5" mt-alias="r229a2ak5" mt-page="5" style="text-align: right;">
																	</td>
																</tr> 
																<tr>
																	<td>&nbsp;&nbsp;&nbsp; b. Perempuan</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a2bk2]" id="TStpim_r229a2bk2" type="text" value="<?php echo $arr_page5->r229a2bk2;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a2bk2" mt-alias="r229a2bk2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a2bk3]" id="TStpim_r229a2bk3" type="text" value="<?php echo $arr_page5->r229a2bk3;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a2bk3" mt-alias="r229a2bk3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a2bk4]" id="TStpim_r229a2bk4" type="text" value="<?php echo $arr_page5->r229a2bk4;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a2bk4" mt-alias="r229a2bk4" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a2bk5]" id="TStpim_r229a2bk5" type="text" value="<?php echo $arr_page5->r229a2bk5;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a2bk5" mt-alias="r229a2bk5" mt-page="5" style="text-align: right;">
																	</td>
																</tr> 
																<tr>
																	<td>3. Pekerja Tidak Dibayar</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a3k2]" id="TStpim_r229a3k2" type="text" value="<?php echo $arr_page5->r229a3k2;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a3k2" mt-alias="r229a3k2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a3k3]" id="TStpim_r229a3k3" type="text" value="<?php echo $arr_page5->r229a3k3;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a3k3" mt-alias="r229a3k3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a3k4]" id="TStpim_r229a3k4" type="text" value="<?php echo $arr_page5->r229a3k4;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a3k4" mt-alias="r229a3k4" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229a3k5]" id="TStpim_r229a3k5" type="text" value="<?php echo $arr_page5->r229a3k5;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229a3k5" mt-alias="r229a3k5" mt-page="5" style="text-align: right;">
																	</td>
																</tr> 
																<tr>
																	<td style="text-align: center;">
																		<b>Jumlah (1+2+3)</b>
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229ajk2]" id="TStpim_r229ajk2" type="text" value="<?php echo $arr_page5->r229ajk2;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229ajk2" mt-alias="r229ajk2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229ajk3]" id="TStpim_r229ajk3" type="text" value="<?php echo $arr_page5->r229ajk3;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229ajk3" mt-alias="r229ajk3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229ajk4]" id="TStpim_r229ajk4" type="text" value="<?php echo $arr_page5->r229ajk4;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229ajk4" mt-alias="r229ajk4" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 20%;">
																		<input name="TStpim[r229ajk5]" id="TStpim_r229ajk5" type="text" value="<?php echo $arr_page5->r229ajk5;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229ajk5" mt-alias="r229ajk5" mt-page="5" style="text-align: right;">
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
												<tr>
													<td colspan="9">b. Banyaknya pekerja/karyawan menurut tingkat pendidikan tahun 2020</td>
												</tr> 
												<tr>
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th style="width: 40%; text-align: center;">Tingkat pendidikan pekerja/karyawan</th> 
																	<th colspan="2" style="text-align: center;">Jumlah pekerja/karyawan</th>
																</tr> 
																<tr>
																	<th style="width: 40%; text-align: center;">(1)</th> 
																	<th colspan="2">(2)</th>
																</tr> 
																<tr>
																	<td>1. Sd SMP SMA</td> 
																	<td style="width: 55%;">
																		<input name="TStpim[r229b1]" id="TStpim_r229b1" type="text" value="<?php echo $arr_page5->r229b1;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229b1" mt-alias="r229b1" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">orang</td>
																</tr> 
																<tr>
																	<td>2. SMK</td> 
																	<td style="width: 55%;">
																		<input name="TStpim[r229b2]" id="TStpim_r229b2" type="text" value="<?php echo $arr_page5->r229b2;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229b2" mt-alias="r229b2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">orang</td>
																</tr> 
																<tr>
																	<td>3. D.I s.d DIV</td> 
																	<td style="width: 55%;">
																		<input name="TStpim[r229b3]" id="TStpim_r229b3" type="text" value="<?php echo $arr_page5->r229b3;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229b3" mt-alias="r229b3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">orang</td>
																</tr> 
																<tr>
																	<td>4. S-1 s.d S-3</td> 
																	<td style="width: 55%;">
																		<input name="TStpim[r229b4]" id="TStpim_r229b4" type="text" value="<?php echo $arr_page5->r229b4;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229b4" mt-alias="r229b4" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">orang</td>
																</tr> 
																<tr>
																	<td style="text-align: center;">
																		<b>Jumlah</b>
																	</td> 
																	<td style="width: 55%;">
																		<input name="TStpim[r229b_jml]" id="TStpim_r229b_jml" type="text" value="<?php echo $arr_page5->r229b_jml;?>" class="form-control text-right">
																	</td> 
																	<td style="width: 5%;">orang</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td colspan="8">c.Banyak pekerja yang khusus melakukan Penelitian dan Pengembangan (R&amp;D) : </td> 
													<td rowspan="2" style="width: 20%;">
														<input name="TStpim[r229c]" id="TStpim_r229c" type="text" value="<?php echo $arr_page5->r229c;?>" class="form-control text-right mask" maxlength="6" mt-range="0-99999" mt-is-blank="blank" mt-field="r229c" mt-alias="r229c" mt-page="5" style="text-align: right;">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> <br> 
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK III : PENGELUARAN</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="4" style="text-align: center; width: 50px;">301</td> 
													<td colspan="9">Pengeluaran untuk pekerja/karyawan selama tahun 2020</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th style="width: 30%; text-align: center;">Jenis Pekerja/Jenis Kelamin</th> 
																	<th colspan="2" style="text-align: center;">Pekerja Produksi</th> 
																	<th colspan="2" style="text-align: center;">Pekerja Lainnya</th>
																</tr> 
																<tr>
																	<th style="width: 30%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 20%; text-align: center;">(2)</th> 
																	<th colspan="2" style="width: 20%; text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td>a.Upah/gaji, upah lembur, tunjangan</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR301()" name="TStpim[r301ak2]" id="TStpim_r301ak2" type="text" value="<?php echo $arr_page5->r301ak2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r301ak2" mt-alias="r301ak2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR301()" name="TStpim[r301ak3]" id="TStpim_r301ak3" type="text" value="<?php echo $arr_page5->r301ak3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r301ak3" mt-alias="r301ak3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td>b.Premi iuran BPJS Ketenagakerjaan</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR301()" name="TStpim[r301bk2]" id="TStpim_r301bk2" type="text" value="<?php echo $arr_page5->r301bk2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r301bk2" mt-alias="r301bk2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR301()" name="TStpim[r301bk3]" id="TStpim_r301bk3" type="text" value="<?php echo $arr_page5->r301bk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r301bk3" mt-alias="r301bk3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td>c.Premi iuran BPJS Kesehata</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR301()" name="TStpim[r301ck2]" id="TStpim_r301ck2" type="text" value="<?php echo $arr_page5->r301ck2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r301ck2" mt-alias="r301ck2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR301()" name="TStpim[r301ck3]" id="TStpim_r301ck3" type="text" value="<?php echo $arr_page5->r301ck3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r301ck3" mt-alias="r301ck3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td>d.Lainnya</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR301()" name="TStpim[r301dk2]" id="TStpim_r301dk2" type="text" value="<?php echo $arr_page5->r301dk2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r301dk2" mt-alias="r301dk2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 35%;">
																		<input onchange="sumR301()" name="TStpim[r301dk3]" id="TStpim_r301dk3" type="text" value="<?php echo $arr_page5->r301dk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r301dk3" mt-alias="r301dk3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td style="width: 10px; text-align: center;">Jumlah</td> 
																	<td style="width: 35%;">
																		<input name="TStpim[r301jk2]" id="TStpim_r301jk2" type="text" value="<?php echo $arr_page5->r301jk2;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="notblank" mt-field="r301jk2" mt-alias="r301jk2" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 35%;">
																		<input name="TStpim[r301jk3]" id="TStpim_r301jk3" type="text" value="<?php echo $arr_page5->r301jk3;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r301jk3" mt-alias="r301jk3" mt-page="5" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_4" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_5_prev" style="width: 150px">Kembali</a>
								<a href="#tab_6" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_5_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_6" class="tab-pane tab-child"><br> 
						<div id="form-input-page6" class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK III : PENGELUARAN (LANJUTAN)</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="1" style="text-align: center; width: 50px;">302</td> 
													<td colspan="9">Banyaknya dan nilai seluruh bahan bakar dan pelumas yang digunakan selama tahun 2020</td>
												</tr>
											</tbody>
										</table> 
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<th rowspan="2" style="width: 15%; text-align: center;">Jenis Bahan Bakar dan Pelumas</th> 
													<th rowspan="2" style="width: 5%; text-align: center;">Satuan Standar</th> 
													<th colspan="3" style="text-align: center;">Seluruhnya</th> 
													<th colspan="3" style="text-align: center;">Untuk Pembangkit Listrik</th>
												</tr> 
												<tr>
													<th style="width: 15%; text-align: center;"> Banyaknya </th> 
													<th colspan="2" style="text-align: center;"> Nilai(Rp) </th> 
													<th style="width: 15%; text-align: center;"> Banyaknya </th> 
													<th colspan="2" style="text-align: center;"> Nilai(Rp) </th>
												</tr> 
												<tr>
													<th style="width: 15%; text-align: center;">(1)</th> 
													<th style="width: 5%; text-align: center;">(2)</th> 
													<th style="width: 15%; text-align: center;">(3)</th> 
													<th colspan="2" style="width: 20%; text-align: center;">(4)</th> 
													<th style="width: 15%; text-align: center;">(5)</th> 
													<th colspan="2" style="width: 20%; text-align: center;">(6)</th>
												</tr> 
												<tr>
													<td>a. Bensin</td> 
													<td style="width: 5%; text-align: center;">Liter</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302ak3]" id="TStpim_r302ak3" type="text" value="<?php echo $arr_page6->r302ak3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ak3" mt-alias="r302ak3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302ak4]" id="TStpim_r302ak4" type="text" value="<?php echo $arr_page6->r302ak4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ak4" mt-alias="r302ak4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302ak5]" id="TStpim_r302ak5" type="text" value="<?php echo $arr_page6->r302ak5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ak5" mt-alias="r302ak5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302ak6]" id="TStpim_r302ak6" type="text" value="<?php echo $arr_page6->r302ak6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ak6" mt-alias="r302ak6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>b. Minyak Solar/Minyak Diesel</td> 
													<td style="width: 5%; text-align: center;">Liter</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302bk3]" id="TStpim_r302bk3" type="text" value="<?php echo $arr_page6->r302bk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302bk3" mt-alias="r302bk3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302bk4]" id="TStpim_r302bk4" type="text" value="<?php echo $arr_page6->r302bk4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302bk4" mt-alias="r302bk4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302bk5]" id="TStpim_r302bk5" type="text" value="<?php echo $arr_page6->r302bk5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302bk5" mt-alias="r302bk5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302bk6]" id="TStpim_r302bk6" type="text" value="<?php echo $arr_page6->r302bk6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302bk6" mt-alias="r302bk6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>c. Bio Solar/Bio Diesel</td> 
													<td style="width: 5%; text-align: center;">Liter</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302ck3]" id="TStpim_r302ck3" type="text" value="<?php echo $arr_page6->r302ck3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ck3" mt-alias="r302ck3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302ck4]" id="TStpim_r302ck4" type="text" value="<?php echo $arr_page6->r302ck4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ck4" mt-alias="r302ck4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302ck5]" id="TStpim_r302ck5" type="text" value="<?php echo $arr_page6->r302ck5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ck5" mt-alias="r302ck5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302ck6]" id="TStpim_r302ck6" type="text" value="<?php echo $arr_page6->r302ck6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ck6" mt-alias="r302ck6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>d. Batubara</td> 
													<td style="width: 5%; text-align: center;">Ton</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302dk3]" id="TStpim_r302dk3" type="text" value="<?php echo $arr_page6->r302dk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302dk3" mt-alias="r302dk3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302dk4]" id="TStpim_r302dk4" type="text" value="<?php echo $arr_page6->r302dk4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302dk4" mt-alias="r302dk4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302dk5]" id="TStpim_r302dk5" type="text" value="<?php echo $arr_page6->r302dk5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302dk5" mt-alias="r302dk5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302dk6]" id="TStpim_r302dk6" type="text" value="<?php echo $arr_page6->r302dk6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302dk6" mt-alias="r302dk6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>e. Briket Batubara</td> 
													<td style="width: 5%; text-align: center;">Kg</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302ek3]" id="TStpim_r302ek3" type="text" value="<?php echo $arr_page6->r302ek3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ek3" mt-alias="r302ek3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302ek4]" id="TStpim_r302ek4" type="text" value="<?php echo $arr_page6->r302ek4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ek4" mt-alias="r302ek4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302ek5]" id="TStpim_r302ek5" type="text" value="<?php echo $arr_page6->r302ek5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ek5" mt-alias="r302ek5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302ek6]" id="TStpim_r302ek6" type="text" value="<?php echo $arr_page6->r302ek6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ek6" mt-alias="r302ek6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>f. Gas Alam</td> 
													<td style="width: 5%; text-align: center;">MMBTU</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302fk3]" id="TStpim_r302fk3" type="text" value="<?php echo $arr_page6->r302fk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302fk3" mt-alias="r302fk3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302fk4]" id="TStpim_r302fk4" type="text" value="<?php echo $arr_page6->r302fk4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302fk4" mt-alias="r302fk4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302fk5]" id="TStpim_r302fk5" type="text" value="<?php echo $arr_page6->r302fk5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302fk5" mt-alias="r302fk5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302fk6]" id="TStpim_r302fk6" type="text" value="<?php echo $arr_page6->r302fk6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302fk6" mt-alias="r302fk6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>g. Minyak Bakar</td> 
													<td style="width: 5%; text-align: center;">Liter</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302gk3]" id="TStpim_r302gk3" type="text" value="<?php echo $arr_page6->r302gk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302gk3" mt-alias="r302gk3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302gk4]" id="TStpim_r302gk4" type="text" value="<?php echo $arr_page6->r302gk4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302gk4" mt-alias="r302gk4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302gk5]" id="TStpim_r302gk5" type="text" value="<?php echo $arr_page6->r302gk5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302gk5" mt-alias="r302gk5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302gk6]" id="TStpim_r302gk6" type="text" value="<?php echo $arr_page6->r302gk6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302gk6" mt-alias="r302gk6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>h. LPG</td> 
													<td style="width: 5%; text-align: center;">Kg</td> 
														<td style="width: 15%;">
														<input name="TStpim[r302hk3]" id="TStpim_r302hk3" type="text" value="<?php echo $arr_page6->r302hk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302hk3" mt-alias="r302hk3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302hk4]" id="TStpim_r302hk4" type="text" value="<?php echo $arr_page6->r302hk4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302hk4" mt-alias="r302hk4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302hk5]" id="TStpim_r302hk5" type="text" value="<?php echo $arr_page6->r302hk5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302hk5" mt-alias="r302hk5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302hk6]" id="TStpim_r302hk6" type="text" value="<?php echo $arr_page6->r302hk6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302hk6" mt-alias="r302hk6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>i. Biomassa (arang, kayu bakar,cangkang sawit, ampas tebu/baggase, sekam padi)</td> 
													<td style="width: 5%; text-align: center;">Ton</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302ik3]" id="TStpim_r302ik3" type="text" value="<?php echo $arr_page6->r302ik3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ik3" mt-alias="r302ik3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302ik4]" id="TStpim_r302ik4" type="text" value="<?php echo $arr_page6->r302ik4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ik4" mt-alias="r302ik4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302ik5]" id="TStpim_r302ik5" type="text" value="<?php echo $arr_page6->r302ik5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ik5" mt-alias="r302ik5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302ik6]" id="TStpim_r302ik6" type="text" value="<?php echo $arr_page6->r302ik6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302ik6" mt-alias="r302ik6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>j. Bahan bakar lainnya, tuliskan </td> 
													<td rowspan="2" style="width: 5%; text-align: center;"></td> 
													<td rowspan="2" style="width: 15%;"></td> 
													<td rowspan="2" style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302jk4]" id="TStpim_r302jk4" type="text" value="<?php echo $arr_page6->r302jk4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302jk4" mt-alias="r302jk4" mt-page="6" style="text-align: right;">
													</td> 
													<td rowspan="2" style="width: 5%;">.000</td> 
													<td rowspan="2" style="width: 15%;"></td> 
													<td rowspan="2" style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302jk6]" id="TStpim_r302jk6" type="text" value="<?php echo $arr_page6->r302jk6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302jk6" mt-alias="r302jk6" mt-page="6" style="text-align: right;">
													</td> 
													<td rowspan="2" style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td>
														<input name="TStpim[r302jk1]" id="TStpim_r302jk1" type="text" value="<?php echo $arr_page6->r302jk1;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r302jk1" mt-alias="r302jk1" mt-page="6">
													</td>
												</tr> 
												<tr>
													<td>k. Pelumas</td> 
													<td style="width: 5%; text-align: center;">Liter</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302kk3]" id="TStpim_r302kk3" type="text" value="<?php echo $arr_page6->r302kk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302kk3" mt-alias="r302kk3" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k4()" name="TStpim[r302kk4]" id="TStpim_r302kk4" type="text" value="<?php echo $arr_page6->r302kk4;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302kk4" mt-alias="r302kk4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;">
														<input name="TStpim[r302kk5]" id="TStpim_r302kk5" type="text" value="<?php echo $arr_page6->r302kk5;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302kk5" mt-alias="r302kk5" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 15%;">
														<input onchange="sumR302k6()" name="TStpim[r302kk6]" id="TStpim_r302kk6" type="text" value="<?php echo $arr_page6->r302kk6;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r302kk6" mt-alias="r302kk6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr> 
												<tr>
													<td style="text-align: center;">Jumlah</td> 
													<td style="width: 5%; text-align: center;"></td> 
													<td style="width: 15%;"></td> 
													<td style="width: 15%;">
														<input name="TStpim[r302jumk4]" id="TStpim_r302jumk4" type="text" value="<?php echo $arr_page6->r302jumk4;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r302jumk4" mt-alias="r302jumk4" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td style="width: 15%;"></td> 
													<td style="width: 15%;">
														<input name="TStpim[r302jumk6]" id="TStpim_r302jumk6" type="text" value="<?php echo $arr_page6->r302jumk6;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r302jumk6" mt-alias="r302jumk6" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td>
												</tr>
											</tbody>
										</table> 
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">303</td> 
													<td colspan="9">Penggunaan listrik yang dipakai oleh perusahaan</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th rowspan="2" style="width: 10%; text-align: center;"></th>
																	<th colspan="2" style="text-align: center;">Daya tersambung</th> 
																	<th colspan="2" style="text-align: center;">Banyaknya</th> 
																	<th colspan="2" style="text-align: center;">Nilai (Rp)</th>
																</tr> 
																<tr>
																	<th colspan="2" style="width: 30%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(2)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td>a. PLN </td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r303ak1]" id="TStpim_r303ak1" type="text" value="<?php echo $arr_page6->r303ak1;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r303ak1" mt-alias="r303ak1" mt-page="6" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">VA</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r303ak2]" id="TStpim_r303ak2" type="text" value="<?php echo $arr_page6->r303ak2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r303ak2" mt-alias="r303ak2" mt-page="6" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kWh</td> 
																	<td style="width: 15%;">
																		<input onchange="sumR303()" name="TStpim[r303ak3]" id="TStpim_r303ak3" type="text" value="<?php echo $arr_page6->r303ak3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r303ak3" mt-alias="r303ak3" mt-page="6" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td>b. Non PLN </td> 
																	<td colspan="2"></td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r303bk2]" id="TStpim_r303bk2" type="text" value="<?php echo $arr_page6->r303bk2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r303bk2" mt-alias="r303bk2" mt-page="6" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kWh</td> 
																	<td style="width: 15%;">
																		<input onchange="sumR303()" name="TStpim[r303bk3]" id="TStpim_r303bk3" type="text" value="<?php echo $arr_page6->r303bk3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r303bk3" mt-alias="r303bk3" mt-page="6" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">304</td> 
													<td colspan="9">Pembangkit Listrik yang digunakan</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th style="width: 40%; text-align: center;">Jenis Pembangkit Listrik</th> 
																	<th style="width: 30%; text-align: center;">Banyaknya</th> 
																	<th colspan="2" style="text-align: center;">Kapasitas Terpasang</th>
																</tr> 
																<tr>
																	<th style="width: 40%; text-align: center;">(1)</th> 
																	<th style="width: 30%; text-align: center;">(2)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td style="width: 40%;">
																		<input name="TStpim[r304k1]" id="TStpim_r304k1" type="text" value="<?php echo $arr_page6->r304k1;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r304k1" mt-alias="r304k1" mt-page="6">
																	</td> 
																	<td style="width: 30%;">
																		<input name="TStpim[r304k2]" id="TStpim_r304k2" type="text" value="<?php echo $arr_page6->r304k2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r304k2" mt-alias="r304k2" mt-page="6" style="text-align: right;">
																	</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r304k3]" id="TStpim_r304k3" type="text" value="<?php echo $arr_page6->r304k3;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r304k3" mt-alias="r304k3" mt-page="6" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">KVA/KW</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="3" style="text-align: center; width: 50px;">305</td> 
													<td colspan="7">Tenaga listrik yang digunakan sendiri oleh perusahaan</td> 
													<td style="width: 25%;">
														<input name="TStpim[r305]" id="TStpim_r305" type="text" value="<?php echo $arr_page6->r305;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r305" mt-alias="r305" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">kWh</td>
												</tr> 
												<tr>
													<td style="text-align: center; width: 50px;">a.</td> 
													<td colspan="6">Tenaga listrik yang digunakan sendiri oleh perusahaan</td> 
													<td style="width: 25%;">
														<input name="TStpim[r305a]" id="TStpim_r305a" type="text" value="<?php echo $arr_page6->r305a;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r305a" mt-alias="r305a" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">kWh</td>
												</tr> 
												<tr>
													<td style="text-align: center; width: 50px;">b.</td> 
													<td colspan="6">Tenaga listrik yang dijual</td> 
													<td style="width: 25%;">
														<input name="TStpim[r305b]" id="TStpim_r305b" type="text" value="<?php echo $arr_page6->r305b;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r305b" mt-alias="r305b" mt-page="6" style="text-align: right;">
													</td> 
													<td style="width: 5%;">kWh</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_5" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_6_prev" style="width: 150px">Kembali</a>
								<a href="#tab_7" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_6_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_7" class="tab-pane tab-child"><br> 
						<div id="form-input-page7" class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK III : PENGELUARAN (LANJUTAN)</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">306</td> 
													<td colspan="9">Pengeluaran selama tahun 2020</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th colspan="6" style="width: 10%; text-align: center;"></th> 
																	<th colspan="2" style="text-align: center;">Nilai (Rp)</th>
																</tr> 
																<tr>
																	<th colspan="6" style="width: 70%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(2)</th>
																</tr> 
																<tr>
																	<td rowspan="3" style="width: 5%;">a.</td> 
																	<td colspan="5">Pengeluaran untuk sewa atau kontrak</td> 
																	<td colspan="2"></td>
																</tr> 
																<tr>
																	<td colspan="5">1. Gedung, mesin, serta alat alat</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306a1]" id="TStpim_r306a1" type="text" value="<?php echo @$arr_page7->r306a1;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306a1" mt-alias="r306a1" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="5">2. Tanah</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306a2]" id="TStpim_r306a2" type="text" value="<?php echo @$arr_page7->r306a2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306a2" mt-alias="r306a2" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">b.</td> 
																	<td colspan="5">Pajak/Tax (tidak termasuk pajak upah, pajak perseorangan)</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306b]" id="TStpim_r306b" type="text" value="<?php echo @$arr_page7->r306b;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306b" mt-alias="r306b" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="6" style="width: 5%;">c.</td> 
																	<td colspan="5">Jasa industri (maklun) yang dibayarkan ke pihak lain</td> 
																	<td colspan="2"></td>
																</tr> 
																<tr>
																	<td colspan="5">1. Dalam Negeri</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306c1]" id="TStpim_r306c1" type="text" value="<?php echo @$arr_page7->r306c1;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306c1" mt-alias="r306c1" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="5">2. Luar Negeri</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306c2]" id="TStpim_r306c2" type="text" value="<?php echo @$arr_page7->r306c2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306c2" mt-alias="r306c2" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="3">&nbsp;&nbsp;&nbsp; a. Negara Utama tempat pengolahan</td> 
																	<td rowspan="2" style="width: 15%;">
																		<input name="TStpim[r306c2a]" id="TStpim_r306c2a" type="text" value="<?php echo @$arr_page7->r306c2a;?>" maxlength="4" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r306c2a" mt-alias="r306c2a" mt-page="7" style="text-align: right;">
																	</td> 
																	<td rowspan="2" style="width: 5%;">%</td> 
																	<td rowspan="2" colspan="2"></td>
																</tr> 
																<tr>
																	<td style="width: 10%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tuliskan</td> 
																	<td colspan="2" style="width: 25%;">
																		<input name="TStpim[r306c2a_desk]" id="TStpim_r306c2a_desk" type="text" value="<?php echo @$arr_page7->r306c2a_desk;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r306c2a_desk" mt-alias="r306c2a_desk" mt-page="7">
																	</td>
																</tr> 
																<tr>
																	<td colspan="3">&nbsp;&nbsp;&nbsp; b. Negara Lainnya</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r306c2b]" id="TStpim_r306c2b" type="text" value="<?php echo @$arr_page7->r306c2b;?>" maxlength="4" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r306c2b" mt-alias="r306c2b" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">%</td> 
																	<td colspan="2"></td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">d.</td> 
																	<td colspan="5">Bunga atas pinjaman</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306d]" id="TStpim_r306d" type="text" value="<?php echo @$arr_page7->r306d;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306d" mt-alias="r306d" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">e.</td> 
																	<td colspan="5">Hadiah, sumbangan dan sejenisnya</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306e]" id="TStpim_r306e" type="text" value="<?php echo @$arr_page7->r306e;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306e" mt-alias="r306e" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">f.</td> 
																	<td colspan="5">Kemasan</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306f]" id="TStpim_r306f" type="text" value="<?php echo @$arr_page7->r306f;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306f" mt-alias="r306f" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">g.</td> 
																	<td colspan="5">Deviden/laba yang dibagikan</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306g]" id="TStpim_r306g" type="text" value="<?php echo @$arr_page7->r306g;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306g" mt-alias="r306g" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">h.</td> 
																	<td colspan="5">Premi asuransi kerugian yang dibayarkan</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306h]" id="TStpim_r306h" type="text" value="<?php echo @$arr_page7->r306h;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306h" mt-alias="r306h" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">i.</td> 
																	<td colspan="5">Biaya penelitian dan pengembangan (R&amp;D). (Tidak termasuk pengeluaran untuk pekerja/karyawan yang khusus melakukan R&amp;D)</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306i]" id="TStpim_r306i" type="text" value="<?php echo @$arr_page7->r306i;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306i" mt-alias="r306i" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="6" style="width: 5%;">j.</td> 
																	<td colspan="5">Kekayaan intelektual (Paten, Merk, Hak Cipta, Desain Industri, Royalti) yang dibayarkan ke pihak lain</td> 
																	<td colspan="2"></td>
																</tr> 
																<tr>
																	<td colspan="5">1. Dalam Negeri</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306j1]" id="TStpim_r306j1" type="text" value="<?php echo @$arr_page7->r306j1;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306j1" mt-alias="r306j1" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="5">2. Luar Negeri</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306j2]" id="TStpim_r306j2" type="text" value="<?php echo @$arr_page7->r306j2;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306j2" mt-alias="r306j2" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="3">&nbsp;&nbsp;&nbsp; a.  Negara domisili perusahaan/pemilik kekayaan intelektual berada</td> 
																	<td rowspan="2" style="width: 15%;">
																		<input name="TStpim[r306j2a]" id="TStpim_r306j2a" type="text" value="<?php echo @$arr_page7->r306j2a;?>" maxlength="4" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r306j2a" mt-alias="r306j2a" mt-page="7" style="text-align: right;">
																	</td> 
																	<td rowspan="2" style="width: 5%;">%</td> 
																	<td rowspan="2" colspan="2"></td>
																</tr> 
																<tr>
																	<td style="width: 10%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tuliskan</td> 
																	<td colspan="2" style="width: 25%;">
																		<input name="TStpim[r306j2a_desk]" id="TStpim_r306j2a_desk" type="text" value="<?php echo @$arr_page7->r306j2a_desk;?>" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r306j2a_desk" mt-alias="r306j2a_desk" mt-page="7">
																	</td>
																</tr> 
																<tr>
																	<td colspan="3">&nbsp;&nbsp;&nbsp; b. Negara Lainnya</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r306j2b]" id="TStpim_r306j2b" type="text" value="<?php echo @$arr_page7->r306j2b;?>" maxlength="4" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r306j2b" mt-alias="r306j2b" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">%</td> 
																	<td colspan="2"></td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">k.</td> 
																	<td colspan="4">Air (Selain yang digunakan untuk bahan baku dan penolong)</td> 
																	<td style="width: 5%;">Liter</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306k]" id="TStpim_r306k" type="text" value="<?php echo @$arr_page7->r306k;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306k" mt-alias="r306k" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">l.</td> 
																	<td colspan="5">Lainnya <br>Termasuk: Biaya representasi, pencegahan pencemaran lingkungan, suku cadang,ATK, pemeliharaan kecil barang modal, Management fee , promosi/iklan, pos, telepon, faksimile, perjalanan dinas, biaya peningkatan SDM, Corporate Social Responsibility (CSR)</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR306()" name="TStpim[r306l]" id="TStpim_r306l" type="text" value="<?php echo @$arr_page7->r306l;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r306l" mt-alias="r306l" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;"></td> 
																	<td colspan="5">Jumlah</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r306_jml]" id="TStpim_r306_jml" type="text" value="<?php echo @$arr_page7->r306_jml;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="notblank" mt-field="r306_jml" mt-alias="r306_jml" mt-page="7" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_6" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_7_prev" style="width: 150px">Kembali</a>
								<a href="#tab_8" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_7_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_8" class="tab-pane tab-child"><br> 
						<div id="form-input-page8">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK III : PENGELUARAN (LANJUTAN)</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body">
										<table class="table table-bordered table-condensed">
											<tbody>
												<tr>
													<td rowspan="3" style="text-align: center; width: 50px;">307</td> 
													<td colspan="9">
														<b>Bahan baku dan bahan penolong</b>
													</td>
												</tr> 
												<tr>
													<td colspan="9">Sebutkan jenis bahan baku dan bahan penolong yang digunakan selama tahun 2020 dirinci menurut "banyaknya" dan "nilai" serta asal bahan tersebut tidak termasuk kemasan/pembungkus, pengepak, pengikat barang jadi, bahan bakar yang habis dipakai, perabot/peralatan</td>
												</tr> 
												<tr>
													<td colspan="9" style="text-align: center;"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> 
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BAHAN BAKU DAN BAHAN PENOLONG YANG DIGUNAKAN SELAMA TAHUN 2020</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body table-responsive no-padding tabel" style="height: 500px; overflow: auto; position: relative;">
										<table id="fixTable" class="table table-bordered table-striped table-condensed fixed" style="height: 150px; width: 100%; padding-top: 0px;">
											<thead>
												<tr>
													<th rowspan="2" colspan="1" style="font-size: 16px; text-align: center; width: 50px; position: relative; left: 0px; background-color: rgb(255, 255, 255); z-index: 2; top: 0px;">No</th> 
													<th rowspan="2" colspan="2" style="font-size: 16px; text-align: center; width: 300px; position: relative; left: 0px; background-color: rgb(255, 255, 255); z-index: 2; top: 0px;">Nama Bahan Baku</th> 
													<th rowspan="2" colspan="1" style="width: 100px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Satuan standar</th> 
													<th rowspan="1" colspan="3" style="width: 420px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Produksi dalam negri</th> 
													<th rowspan="1" colspan="3" style="width: 420px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Impor</th> 
													<th rowspan="2" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Negara utama asal bahan baku</th> 
													<th rowspan="3" colspan="1" style="width: 50px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;"></th>
												</tr> 
												<tr>
													<th rowspan="1" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Banyaknya</th> 
													<th rowspan="1" colspan="2" style="width: 220px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Nilai (Rp)</th> 
													<th rowspan="1" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Banyaknya</th> 
													<th rowspan="1" colspan="2" style="width: 220px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Nilai (Rp)</th>
												</tr> 
												<tr>
													<th rowspan="1" colspan="1" style="width: 50px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 2; top: 0px; left: 0px;">(1)</th> 
													<th rowspan="1" colspan="2" style="width: 250px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 2; top: 0px; left: 0px;">(2)</th> 
													<th rowspan="1" colspan="1" style="width: 100px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(3)</th> 
													<th rowspan="1" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(4)</th> 
													<th rowspan="1" colspan="2" style="width: 220px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(5)</th> 
													<th rowspan="1" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(6)</th> 
													<th rowspan="1" colspan="2" style="width: 220px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(7)</th> 
													<th rowspan="1" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(8)</th>
												</tr>
											</thead> 
											<tbody>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">1</td> 
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="TStpim[b2r307k2]" id="r307_2_r307k2" value="<?php echo @$arr_page8->b2r307k2;?>" class="form-control text-left text-uppercase">
													</td> 
													<td rowspan="2" style="width: 100px;">
														<select name="TStpim[b2r307k3]" id="r307_2_r307k3" class="form-control">
															<option value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b2r307k4]" id="r307_2_r307k4" value="<?php echo @$arr_page8->b2r307k4;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b2r307k5]" id="r307_2_r307k5" value="<?php echo @$arr_page8->b2r307k5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b2r307k6]" id="r307_2_r307k6" value="<?php echo @$arr_page8->b2r307k6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b2r307k7]" id="r307_2_r307k7" value="<?php echo @$arr_page8->b2r307k7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<select name="TStpim[b2r307k8]" id="r307_2_r307k8" class="form-control select2 vue-select select2-hidden-accessible" data-select2-id="r307_2_r307k8" tabindex="-1" aria-hidden="true">
															<option value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td>
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; width: 300px; background-color: rgb(255, 255, 255); z-index: 1;">
														<!--div class="vue-simple-suggest designed">
															<div role="combobox" aria-haspopup="listbox" aria-owns="1-suggestions" aria-expanded="false" class="input-wrapper">
																<input name="TStpim[b2r307k2_kode]" id="r307_2_r307k2_kode" class="default-input form-control-danger" aria-activedescendant="" aria-autocomplete="list" aria-controls="1-suggestions" data-original-title="" title="">
															</div>
														</div-->
													</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b2r307k5_1]" id="r307_2_r307k5_1" value="<?php echo @$arr_page8->b2r307k5_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b2r307k7_1]" id="r307_2_r307k7_1" value="<?php echo @$arr_page8->b2r307k7_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="TStpim[b2r307k8_lain]" id="r307_2_r307k8_lain" value="<?php echo @$arr_page8->b2r307k8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">2</td> 
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="TStpim[b3r307k2]" id="r307_3_r307k2" value="<?php echo @$arr_page8->b3r307k2;?>" class="form-control text-left text-uppercase">
													</td> 
													<td rowspan="2" style="width: 100px;">
														<select name="TStpim[b3r307k3]" id="r307_3_r307k3" class="form-control">
															<option value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b3r307k4]" id="r307_3_r307k4" value="<?php echo @$arr_page8->b3r307k4;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b3r307k5]" id="r307_3_r307k5" value="<?php echo @$arr_page8->b3r307k5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b3r307k6]" id="r307_3_r307k6" value="<?php echo @$arr_page8->b3r307k6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b3r307k7]" id="r307_3_r307k7" value="<?php echo @$arr_page8->b3r307k7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<select name="TStpim[b3r307k8]" id="r307_3_r307k8" class="form-control select2 vue-select select2-hidden-accessible" data-select2-id="r307_3_r307k8" tabindex="-1" aria-hidden="true">
															<option value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td>
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; width: 300px; background-color: rgb(255, 255, 255); z-index: 1;">
														<!--div class="vue-simple-suggest designed">
															<div role="combobox" aria-haspopup="listbox" aria-owns="3-suggestions" aria-expanded="false" class="input-wrapper">
																<input name="TStpim[b3r307k2_kode]" id="r307_3_r307k2_kode" class="default-input form-control-danger" aria-activedescendant="" aria-autocomplete="list" aria-controls="3-suggestions" data-original-title="" title="">
															</div>
														</div-->
													</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b3r307k5_1]" id="r307_3_r307k5_1" value="<?php echo @$arr_page8->b3r307k5_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b3r307k7_1]" id="r307_3_r307k7_1" value="<?php echo @$arr_page8->b3r307k7_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="TStpim[b3r307k8_lain]" id="r307_3_r307k8_lain" value="<?php echo @$arr_page8->b3r307k8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">3</td> 
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="TStpim[b4r307k2]" id="r307_4_r307k2" value="<?php echo @$arr_page8->b4r307k2;?>" class="form-control text-left text-uppercase">
													</td> 
													<td rowspan="2" style="width: 100px;">
														<select name="TStpim[b4r307k3]" id="r307_4_r307k3" class="form-control">
															<option value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b4r307k4]" id="r307_4_r307k4" value="<?php echo @$arr_page8->b4r307k4;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b4r307k5]" id="r307_4_r307k5" value="<?php echo @$arr_page8->b4r307k5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b4r307k6]" id="r307_4_r307k6" value="<?php echo @$arr_page8->b4r307k6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b4r307k7]" id="r307_4_r307k7" value="<?php echo @$arr_page8->b4r307k7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<select name="TStpim[b4r307k8]" id="r307_4_r307k8" class="form-control select2 vue-select select2-hidden-accessible" data-select2-id="r307_4_r307k8" tabindex="-1" aria-hidden="true">
															<option value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td>
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; width: 300px; background-color: rgb(255, 255, 255); z-index: 1;">
														<!--div class="vue-simple-suggest designed">
															<div role="combobox" aria-haspopup="listbox" aria-owns="5-suggestions" aria-expanded="false" class="input-wrapper">
																<input name="TStpim[b4r307k2_kode]" id="r307_4_r307k2_kode" class="default-input form-control-danger" aria-activedescendant="" aria-autocomplete="list" aria-controls="5-suggestions" data-original-title="" title="">
															</div>
														</div-->
													</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b4r307k5_1]" id="r307_4_r307k5_1" value="<?php echo @$arr_page8->b4r307k5_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b4r307k7_1]" id="r307_4_r307k7_1" value="<?php echo @$arr_page8->b4r307k7_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="TStpim[b4r307k8_lain]" id="r307_4_r307k8_lain" value="<?php echo @$arr_page8->b4r307k8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">4</td> 
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="TStpim[b5r307k2]" id="r307_5_r307k2" value="<?php echo @$arr_page8->b5r307k2;?>" class="form-control text-left text-uppercase">
													</td> 
													<td rowspan="2" style="width: 100px;">
														<select name="TStpim[b5r307k3]" id="r307_5_r307k3" class="form-control">
															<option value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b5r307k4]" id="r307_5_r307k4" value="<?php echo @$arr_page8->b5r307k4;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b5r307k5]" id="r307_5_r307k5" value="<?php echo @$arr_page8->b5r307k5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b5r307k6]" id="r307_5_r307k6" value="<?php echo @$arr_page8->b5r307k6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b5r307k7]" id="r307_5_r307k7" value="<?php echo @$arr_page8->b5r307k7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<select name="TStpim[b5r307k8]" id="r307_5_r307k8" class="form-control select2 vue-select select2-hidden-accessible" data-select2-id="r307_5_r307k8" tabindex="-1" aria-hidden="true">
															<option value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td>
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; width: 300px; background-color: rgb(255, 255, 255); z-index: 1;">
														<!--div class="vue-simple-suggest designed">
															<div role="combobox" aria-haspopup="listbox" aria-owns="7-suggestions" aria-expanded="false" class="input-wrapper">
																<input name="TStpim[b5r307k2_kode]" id="r307_5_r307k2_kode" class="default-input form-control-danger" aria-activedescendant="" aria-autocomplete="list" aria-controls="7-suggestions" data-original-title="" title="">
															</div>
														</div-->
													</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b5r307k5_1]" id="r307_5_r307k5_1" value="<?php echo @$arr_page8->b5r307k5_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b5r307k7_1]" id="r307_5_r307k7_1" value="<?php echo @$arr_page8->b5r307k7_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="TStpim[b5r307k8_lain]" id="r307_5_r307k8_lain" value="<?php echo @$arr_page8->b5r307k8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">5</td> 
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="TStpim[b6r307k2]" id="r307_6_r307k2" value="<?php echo @$arr_page8->b6r307k2;?>" class="form-control text-left text-uppercase">
													</td> 
													<td rowspan="2" style="width: 100px;">
														<select name="TStpim[b6r307k3]" id="r307_6_r307k3" class="form-control">
															<option value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b6r307k4]" id="r307_6_r307k4" value="<?php echo @$arr_page8->b6r307k4;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b6r307k5]" id="r307_6_r307k5" value="<?php echo @$arr_page8->b6r307k5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b6r307k6]" id="r307_6_r307k6" value="<?php echo @$arr_page8->b6r307k6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b6r307k7]" id="r307_6_r307k7" value="<?php echo @$arr_page8->b6r307k7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<select name="TStpim[b6r307k8]" id="r307_6_r307k8" class="form-control select2 vue-select select2-hidden-accessible" data-select2-id="r307_6_r307k8" tabindex="-1" aria-hidden="true">
															<option value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td>
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; width: 300px; background-color: rgb(255, 255, 255); z-index: 1;">
														<!--div class="vue-simple-suggest designed">
															<div role="combobox" aria-haspopup="listbox" aria-owns="9-suggestions" aria-expanded="false" class="input-wrapper">
																<input name="TStpim[b6r307k2_kode]" id="r307_6_r307k2_kode" class="default-input form-control-danger" aria-activedescendant="" aria-autocomplete="list" aria-controls="9-suggestions" data-original-title="" title="">
															</div>
														</div-->
													</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b6r307k5_1]" id="r307_6_r307k5_1" value="<?php echo @$arr_page8->b6r307k5_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b6r307k7_1]" id="r307_6_r307k7_1" value="<?php echo @$arr_page8->b6r307k7_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="TStpim[b6r307k8_lain]" id="r307_6_r307k8_lain" value="<?php echo @$arr_page8->b6r307k8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">6</td> 
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="TStpim[b7r307k2]" id="r307_7_r307k2" value="<?php echo @$arr_page8->b7r307k2;?>" class="form-control text-left text-uppercase">
													</td> 
													<td rowspan="2" style="width: 100px;">
														<select name="TStpim[b7r307k3]" id="r307_7_r307k3" class="form-control">
															<option value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b7r307k4]" id="r307_7_r307k4" value="<?php echo @$arr_page8->b7r307k4;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b7r307k5]" id="r307_7_r307k5" value="<?php echo @$arr_page8->b7r307k5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b7r307k6]" id="r307_7_r307k6" value="<?php echo @$arr_page8->b7r307k6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b7r307k7]" id="r307_7_r307k7" value="<?php echo @$arr_page8->b7r307k7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<select name="TStpim[b7r307k8]" id="r307_7_r307k8" class="form-control select2 vue-select select2-hidden-accessible" data-select2-id="r307_7_r307k8" tabindex="-1" aria-hidden="true">
															<option value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td>
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; width: 300px; background-color: rgb(255, 255, 255); z-index: 1;">
														<!--div class="vue-simple-suggest designed">
															<div role="combobox" aria-haspopup="listbox" aria-owns="11-suggestions" aria-expanded="false" class="input-wrapper">
																<input name="TStpim[b7r307k2_kode]" id="r307_7_r307k2_kode" class="default-input form-control-danger" aria-activedescendant="" aria-autocomplete="list" aria-controls="11-suggestions" data-original-title="" title="">
															</div>
														</div-->
													</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b7r307k5_1]" id="r307_7_r307k5_1" value="<?php echo @$arr_page8->b7r307k5_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b7r307k7_1]" id="r307_7_r307k7_1" value="<?php echo @$arr_page8->b7r307k7_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="TStpim[b7r307k8_lain]" id="r307_7_r307k8_lain" value="<?php echo @$arr_page8->b7r307k8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">7</td> 
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="TStpim[b8r307k2]" id="r307_8_r307k2" value="<?php echo @$arr_page8->b8r307k2;?>" class="form-control text-left text-uppercase">
													</td> 
													<td rowspan="2" style="width: 100px;">
														<select name="TStpim[b8r307k3]" id="r307_8_r307k3" class="form-control">
															<option value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b8r307k4]" id="r307_8_r307k4" value="<?php echo @$arr_page8->b8r307k4;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b8r307k5]" id="r307_8_r307k5" value="<?php echo @$arr_page8->b8r307k5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b8r307k6]" id="r307_8_r307k6" value="<?php echo @$arr_page8->b8r307k6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 200px;">
														<input type="text" name="TStpim[b8r307k7]" id="r307_8_r307k7" value="<?php echo @$arr_page8->b8r307k7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1" style="width: 200px;">
														<select name="TStpim[b8r307k8]" id="r307_8_r307k8" class="form-control select2 vue-select select2-hidden-accessible" data-select2-id="r307_8_r307k8" tabindex="-1" aria-hidden="true">
															<option value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td>
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td colspan="2" style="font-size: 16px; position: relative; left: 0px; width: 300px; background-color: rgb(255, 255, 255); z-index: 1;">
														<!--div class="vue-simple-suggest designed">
															<div role="combobox" aria-haspopup="listbox" aria-owns="13-suggestions" aria-expanded="false" class="input-wrapper">
																<input name="TStpim[b8r307k2_kode]" id="r307_8_r307k2_kode" class="default-input form-control-danger" aria-activedescendant="" aria-autocomplete="list" aria-controls="13-suggestions" data-original-title="" title="">
															</div>
														</div-->
													</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b8r307k5_1]" id="r307_8_r307k5_1" value="<?php echo @$arr_page8->b8r307k5_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td rowspan="1">Harga : </td> 
													<td style="text-align: right;">
														<input type="text" readonly="readonly" name="TStpim[b8r307k7_1]" id="r307_8_r307k7_1" value="<?php echo @$arr_page8->b8r307k7_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="TStpim[b8r307k8_lain]" id="r307_8_r307k8_lain" value="<?php echo @$arr_page8->b8r307k8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr> 
												<tr>
													<td colspan="3" style="font-size: 16px; position: relative; left: 0px; text-align: center; background-color: rgb(249, 249, 249); z-index: 1;">Jumlah</td> 
													<td colspan="2"></td> 
													<td style="text-align: right;">
														<input name="TStpim[r307jumk5]" id="TStpim_r307jumk5" value="<?php echo @$arr_page8->r307jumk5;?>" type="text" value="" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 5%;">.000</td> 
													<td colspan="1"></td> 
													<td style="text-align: right;">
														<input name="TStpim[r307jumk7]" id="TStpim_r307jumk7" value="<?php echo @$arr_page8->r307jumk7;?>" type="text" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 5%;">.000</td> 
													<td colspan="2"></td>
												</tr> 
												<tr>
													<td colspan="3" style="background-color: rgb(255, 255, 255); position: relative; z-index: 1; left: 0px;"></td> 
													<td colspan="9"></td>
												</tr>
											</tbody>
										</table>
									</div> 
									<!--div><br> 
										<button type="button" class="btn btn-info btn-add-b4 col-md-4"><i class="fa fas fa-plus"></i> Tambah Baris &nbsp;</button>
									</div-->
								</div>
							</div>
						</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_7" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_8_prev" style="width: 150px">Kembali</a>
								<a href="#tab_9" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_8_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_9" class="tab-pane tab-child"><br> 
						<div id="form-input-page9">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK IV : PRODUKSI (BARANG YANG DIHASILKAN)</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body">
										<table class="table table-bordered table-condensed">
											<tbody>
												<tr>
													<td rowspan="1" style="text-align: center; width: 50px;">401</td> 
													<td colspan="6"> Persentase realisasi produksi terhadap kapasitas terpasang selama tahun 2020?</td> 
													<td rowspan="1" style="width: 20%;">
														<input name="TStpim[r401]" id="TStpim_r401" type="text" maxlength="4" value="<?php echo @$arr_page9->r401;?>" class="form-control text-right mask" mt-range="0-100" mt-is-blank="notblank" mt-field="r401" mt-alias="r401" mt-page="9" style="text-align: right;">
													</td> 
													<td style="width: 5%;">%</td>
												</tr> 
												<tr>
													<td rowspan="3" style="text-align: center; width: 50px;">402</td> 
													<td colspan="6">a.&nbsp;&nbsp;Apakah ada produksi yang diekspor, baik yang diekspor sendiri atau pihak lain?</td> 
													
													<!--td colspan="2">
														<input name="TStpim[r402a]" id="TStpim_r402a" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r402a" mt-alias="r402a" mt-page="9" style="width: 50%; text-align: right;">
													</td-->
												</tr> 
												<tr>
													<td colspan="3">
														<label class="radio-inline"><input type="radio" name="TStpim[r402a]" id="TStpim_r402a_1" value="1" <?php if(@$arr_page9->r402a=='1'){echo "checked";}?>>Ya</label>
													</td>
													<td colspan="3">
														<label class="radio-inline"><input type="radio" name="TStpim[r402a]" id="TStpim_r402a_2" value="2" <?php if(@$arr_page9->r402a=='2'){echo "checked";}?>>Tidak</label>
													</td>
												</tr>
												<tr>
													<td colspan="8">b.&nbsp;&nbsp; Sebutkan semua produksi yang dihasilkan selama tahun 2020 dirinci menurut jenis barang <br>Tidak termasuk barang yang belum selesai diolah (setengah jadi) dan barang yang tidak diproses/tidak diolah</td>
												</tr> 
												<tr>
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped"></table>
													</td>
												</tr> 
												<tr>
													<td rowspan="1" style="text-align: center; width: 50px;"></td> 
													<td colspan="9"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> 
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body table-responsive no-padding tabel" style="height: 500px; overflow: auto; position: relative;">
										<table id="fixTable2" class="table table-bordered table-striped table-condensed fixed" style="height: 150px; width: 100%; padding-top: 0px;">
											<thead>
												<tr>
													<th rowspan="1" colspan="1" style="font-size: 16px; text-align: center; width: 50px; position: relative; left: 0px; background-color: rgb(255, 255, 255); z-index: 2; top: 0px;">No</th> 
													<th rowspan="1" colspan="1" style="font-size: 16px; text-align: center; width: 200px; position: relative; left: 0px; background-color: rgb(255, 255, 255); z-index: 2; top: 0px;">Nama Barang yang dihasilkan</th> 
													<th rowspan="1" colspan="1" style="width: 250px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">KBLI 5-digit</th> 
													<th rowspan="1" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Satuan Standar</th> 
													<th rowspan="1" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Banyaknya</th> 
													<th rowspan="1" colspan="2" style="width: 320px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Nilai (Rp)</th> 
													<th rowspan="1" colspan="1" style="width: 100px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Persentase yang di ekspor *)</th> 
													<th rowspan="1" colspan="1" style="width: 200px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">Negara tujuan utama ekspor **)</th> 
													<th rowspan="2" colspan="1" style="width: 50px; text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;"></th>
												</tr> 
												<tr>
													<th rowspan="1" colspan="1" style="text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 2; top: 0px; left: 0px;">(1)</th> 
													<th rowspan="1" colspan="1" style="text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 2; top: 0px; left: 0px;">(2)</th> 
													<th rowspan="1" colspan="1" style="text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(3)</th> 
													<th rowspan="1" colspan="1" style="text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(4)</th> 
													<th rowspan="1" colspan="1" style="text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(5)</th> 
													<th rowspan="1" colspan="2" style="text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(6)</th> 
													<th rowspan="1" colspan="1" style="text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(7)</th> 
													<th rowspan="1" colspan="1" style="text-align: center; background-color: rgb(255, 255, 255); position: relative; z-index: 1; top: 0px;">(8)</th>
												</tr>
											</thead> 
											<tbody>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">1</td> 
													<td rowspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="r402b[b2r402bk2]" id="r402b_2_r402bk2" value="<?php echo @$arr_page9->b2r402bk2;?>" class="form-control text-left text-uppercase ">
													</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b2r402bk3]" id="r402b_2_r402bk3" value="<?php echo @$arr_page9->b2r402bk3;?>" class="form-control autocomplete-kbli" autocomplete="off">
													</td> 
													<td rowspan="2">
														<select name="r402b[b2r402bk4]" id="r402b_2_r402bk4" class="form-control">
															<option disabled="disabled" value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td style="width: 15%;">
														<input type="text" name="r402b[b2r402bk5]" id="r402b_2_r402bk5" value="<?php echo @$arr_page9->b2r402bk5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 300px;">
														<input type="text" name="r402b[b2r402bk6]" id="r402b_2_r402bk6" value="<?php echo @$arr_page9->b2r402bk6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 20px;">.000</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b2r402bk7]" id="r402b_2_r402bk7" value="<?php echo @$arr_page9->b2r402bk7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1">
														<select name="r402b[b2r402bk8]" id="r402b_2_r402bk8" class="form-control select2">
															<option disabled="disabled" value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td rowspan="2">
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td rowspan="1" style="width: 5%;">Harga : </td> 
													<td colspan="1" style="width: 300px;">
														<input type="text" readonly="readonly" name="r402b[b2r402bk6_1]" id="r402b_2_r402bk6_1" value="<?php echo @$arr_page9->b2r402bk6_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="r402b[b2r402bk8_lain]" id="r402b_2_r402bk8_lain" value="<?php echo @$arr_page9->b2r402bk8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">2</td> 
													<td rowspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="r402b[b3r402bk2]" id="r402b_3_r402bk2" value="<?php echo @$arr_page9->b3r402bk2;?>" class="form-control text-left text-uppercase ">
													</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b3r402bk3]" id="r402b_3_r402bk3" value="<?php echo @$arr_page9->b3r402bk3;?>" class="form-control autocomplete-kbli" autocomplete="off">
													</td> 
													<td rowspan="2">
														<select name="r402b[b3r402bk4]" id="r402b_3_r402bk4" class="form-control">
															<option disabled="disabled" value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td style="width: 15%;">
														<input type="text" name="r402b[b3r402bk5]" id="r402b_3_r402bk5" value="<?php echo @$arr_page9->b3r402bk5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 300px;">
														<input type="text" name="r402b[b3r402bk6]" id="r402b_3_r402bk6" value="<?php echo @$arr_page9->b3r402bk6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 20px;">.000</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b3r402bk7]" id="r402b_3_r402bk7" value="<?php echo @$arr_page9->b3r402bk7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1">
														<select name="r402b[b3r402bk8]" id="r402b_3_r402bk8" class="form-control select2>
															<option disabled="disabled" value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td rowspan="2">
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td rowspan="1" style="width: 5%;">Harga : </td> 
													<td colspan="1" style="width: 300px;">
														<input type="text" readonly="readonly" name="r402b[b3r402bk6_1]" id="r402b_3_r402bk6_1" value="<?php echo @$arr_page9->b3r402bk6_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="r402b[b3r402bk8_lain]" id="r402b_3_r402bk8_lain" value="<?php echo @$arr_page9->b3r402bk8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">3</td> 
													<td rowspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="r402b[b4r402bk2]" id="r402b_4_r402bk2" value="<?php echo @$arr_page9->b4r402bk2;?>" class="form-control text-left text-uppercase ">
													</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b4r402bk3]" id="r402b_4_r402bk3" value="<?php echo @$arr_page9->b4r402bk3;?>" class="form-control autocomplete-kbli" autocomplete="off">
													</td> 
													<td rowspan="2">
														<select name="r402b[b4r402bk4]" id="r402b_4_r402bk4" class="form-control">
															<option disabled="disabled" value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td style="width: 15%;">
														<input type="text" name="r402b[b4r402bk5]" id="r402b_4_r402bk5" value="<?php echo @$arr_page9->b4r402bk5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 300px;">
														<input type="text" name="r402b[b4r402bk6]" id="r402b_4_r402bk6" value="<?php echo @$arr_page9->b4r402bk6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 20px;">.000</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b4r402bk7]" id="r402b_4_r402bk7" value="<?php echo @$arr_page9->b4r402bk7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1">
														<select name="r402b[b4r402bk8]" id="r402b_4_r402bk8" class="form-control select2">
															<option disabled="disabled" value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td rowspan="2">
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td rowspan="1" style="width: 5%;">Harga : </td> 
													<td colspan="1" style="width: 300px;">
														<input type="text" readonly="readonly" name="r402b[b4r402bk6_1]" id="r402b_4_r402bk6_1" value="<?php echo @$arr_page9->b4r402bk6_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="r402b[b4r402bk8_lain]" id="r402b_4_r402bk8_lain" value="<?php echo @$arr_page9->b4r402bk8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">4</td> 
													<td rowspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="r402b[b5r402bk2]" id="r402b_5_r402bk2" value="<?php echo @$arr_page9->b5r402bk2;?>" class="form-control text-left text-uppercase ">
													</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b5r402bk3]" id="r402b_5_r402bk3" value="<?php echo @$arr_page9->b5r402bk3;?>" class="form-control autocomplete-kbli" autocomplete="off">
													</td> 
													<td rowspan="2">
														<select name="r402b[b5r402bk4]" id="r402b_5_r402bk4" class="form-control">
															<option disabled="disabled" value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td style="width: 15%;">
														<input type="text" name="r402b[b5r402bk5]" id="r402b_5_r402bk5" value="<?php echo @$arr_page9->b5r402bk5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 300px;">
														<input type="text" name="r402b[b5r402bk6]" id="r402b_5_r402bk6" value="<?php echo @$arr_page9->b5r402bk6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 20px;">.000</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b5r402bk7]" id="r402b_5_r402bk7" value="<?php echo @$arr_page9->b5r402bk7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1">
														<select name="r402b[b5r402bk8]" id="r402b_5_r402bk8" class="form-control select2">
															<option disabled="disabled" value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td rowspan="2">
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td rowspan="1" style="width: 5%;">Harga : </td> 
													<td colspan="1" style="width: 300px;">
														<input type="text" readonly="readonly" name="r402b[b5r402bk6_1]" id="r402b_5_r402bk6_1" value="<?php echo @$arr_page9->b5r402bk6_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="r402b[b5r402bk8_lain]" id="r402b_5_r402bk8_lain" value="<?php echo @$arr_page9->b5r402bk8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">5</td> 
													<td rowspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="r402b[b6r402bk2]" id="r402b_6_r402bk2" value="<?php echo @$arr_page9->b6r402bk2;?>" class="form-control text-left text-uppercase ">
													</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b6r402bk3]" id="r402b_6_r402bk3" value="<?php echo @$arr_page9->b6r402bk3;?>" class="form-control autocomplete-kbli" autocomplete="off">
													</td> 
													<td rowspan="2">
														<select name="r402b[b6r402bk4]" id="r402b_6_r402bk4" class="form-control">
															<option disabled="disabled" value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td style="width: 15%;">
														<input type="text" name="r402b[b6r402bk5]" id="r402b_6_r402bk5" value="<?php echo @$arr_page9->b6r402bk5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 300px;">
														<input type="text" name="r402b[b6r402bk6]" id="r402b_6_r402bk6" value="<?php echo @$arr_page9->b6r402bk6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 20px;">.000</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b6r402bk7]" id="r402b_6_r402bk7" value="<?php echo @$arr_page9->b6r402bk7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1">
														<select name="r402b[b6r402bk8]" id="r402b_6_r402bk8" class="form-control select2">
															<option disabled="disabled" value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td rowspan="2">
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td rowspan="1" style="width: 5%;">Harga : </td> 
													<td colspan="1" style="width: 300px;">
														<input type="text" readonly="readonly" name="r402b[b6r402bk6_1]" id="r402b_6_r402bk6_1" value="<?php echo @$arr_page9->b6r402bk6_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="r402b[b6r402bk8_lain]" id="r402b_6_r402bk8_lain" value="<?php echo @$arr_page9->b6r402bk8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr>
												<tr>
													<td rowspan="2" style="font-size: 16px; text-align: center; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">6</td> 
													<td rowspan="2" style="font-size: 16px; position: relative; left: 0px; background-color: rgb(249, 249, 249); z-index: 1;">
														<input type="text" name="r402b[b7r402bk2]" id="r402b_7_r402bk2" value="<?php echo @$arr_page9->b7r402bk2;?>" class="form-control text-left text-uppercase ">
													</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b7r402bk3]" id="r402b_7_r402bk3" value="<?php echo @$arr_page9->b7r402bk3;?>" class="form-control autocomplete-kbli" autocomplete="off">
													</td> 
													<td rowspan="2">
														<select name="r402b[b7r402bk4]" id="r402b_7_r402bk4" class="form-control">
															<option disabled="disabled" value="">PILIH SATUAN</option> <option value="2"> BAL</option><option value="3"> BOTOL</option><option value="4"> BATANG</option><option value="5"> BUAH</option><option value="10"> EKOR</option><option value="11"> FEET</option><option value="12"> GALON</option><option value="14"> GRAM</option><option value="15"> GROSS</option><option value="18"> KG</option><option value="19"> KODI</option><option value="20"> KW</option><option value="21"> LEMBAR</option><option value="23"> LUSIN</option><option value="24"> LITER</option><option value="25"> METER</option><option value="26"> M2</option><option value="27"> M3</option><option value="30"> MMBTU</option><option value="33"> POND</option><option value="34"> POTONG</option><option value="35"> PASANG</option><option value="36"> RIM</option><option value="37"> ROLL</option><option value="38"> SET</option><option value="42"> TON</option><option value="43"> YARD</option><option value="44"> ZAK</option><option value="45"> TUBE</option><option value="46"> *</option><option value="47"> 000 BTG</option>
														</select>
													</td> 
													<td style="width: 15%;">
														<input type="text" name="r402b[b7r402bk5]" id="r402b_7_r402bk5" value="<?php echo @$arr_page9->b7r402bk5;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 300px;">
														<input type="text" name="r402b[b7r402bk6]" id="r402b_7_r402bk6" value="<?php echo @$arr_page9->b7r402bk6;?>" class="form-control" style="text-align: right;">
													</td> 
													<td style="width: 20px;">.000</td> 
													<td rowspan="2">
														<input type="text" name="r402b[b7r402bk7]" id="r402b_7_r402bk7" value="<?php echo @$arr_page9->b7r402bk7;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1">
														<select name="r402b[b7r402bk8]" id="r402b_7_r402bk8" class="form-control select2">
															<option disabled="disabled" value="">PILIH NEGARA</option> <option value="111">[111] JEPANG</option> <option value="112">[112] HONGKONG</option> <option value="113">[113] KOREA UTARA</option> <option value="114">[114] KOREA SELATAN</option> <option value="115">[115] TAIWAN</option> <option value="116">[116] CHINA</option> <option value="117">[117] MONGOLIA</option> <option value="118">[118] MAKAU</option> <option value="119">[119] ASIA UTARA LAINNYA</option> <option value="120">[120] PAPUA NUGINI</option> <option value="121">[121] THAILAND</option> <option value="122">[122] SINGAPURA</option> <option value="123">[123] FILIPINA</option> <option value="124">[124] MALAYSIA</option> <option value="125">[125] MYANMAR</option> <option value="126">[126] KAMBOJA</option> <option value="127">[127] BRUNEI DARUSSALAM</option> <option value="128">[128] LAOS</option> <option value="129">[129] NEPAL</option> <option value="130">[130] BHUTAN</option> <option value="131">[131] VIETNAM</option> <option value="132">[132] MALADEWA</option> <option value="133">[133] INDIA</option> <option value="134">[134] PAKISTAN</option> <option value="135">[135] BANGLADESH</option> <option value="136">[136] SRI LANKA</option> <option value="137">[137] AFGHANISTAN</option> <option value="138">[138] INDONESIA</option> <option value="139">[139] ASIA SELATAN DAN TENGGARA LAINNYA</option> <option value="141">[141] IRAK</option> <option value="142">[142] IRAN</option> <option value="143">[143] ARAB SAUDI</option> <option value="144">[144] ISRAEL</option> <option value="145">[145] KUWAIT</option> <option value="146">[146] YORDANIA</option> <option value="147">[147] YAMAN SELATAN</option> <option value="148">[148] LEBANON</option> <option value="149">[149] PALESTINA</option> <option value="151">[151] YAMAN</option> <option value="152">[152] OMAN</option> <option value="153">[153] SURIAH</option> <option value="154">[154] TURKI</option> <option value="155">[155] UNI EMIRAT ARAB</option> <option value="156">[156] QATAR</option> <option value="157">[157] BAHRAIN</option> <option value="158">[158] SIPRUS</option> <option value="159">[159] ASIA BARAT LAINNYA</option> <option value="211">[211] MESIR</option> <option value="212">[212] LIBYA</option> <option value="213">[213] MAROKO</option> <option value="214">[214] TUNISIA</option> <option value="215">[215] ALGERIA</option> <option value="216">[216] SUDAN</option> <option value="217">[217] ERITREA</option> <option value="218">[218] LESOTHO</option> <option value="219">[219] NAMIBIA</option> <option value="220">[220] SAHARA BARAT</option> <option value="221">[221] ETHIOPIA</option> <option value="222">[222] TANZANIA</option> <option value="223">[223] MADAGASKAR</option> <option value="224">[224] SOMALIA</option> <option value="225">[225] KENYA</option> <option value="226">[226] REUNION</option> <option value="227">[227] MOZAMBIK</option> <option value="228">[228] BOTSWANA</option> <option value="229">[229] GUINEA KHATULISTIWA</option> <option value="230">[230] TOGO</option> <option value="231">[231] GHANA</option> <option value="232">[232] LIBERIA</option> <option value="233">[233] GUINEA</option> <option value="234">[234] ANGOLA</option> <option value="235">[235] KONGO</option> <option value="236">[236] KAMERUN</option> <option value="237">[237] NIGERIA</option> <option value="238">[238] SIERRA LEONE</option> <option value="239">[239] GABON</option> <option value="240">[240] PANTAI GADING</option> <option value="241">[241] SENEGAL</option> <option value="242">[242] MAURITANIA</option> <option value="243">[243] MALI</option> <option value="244">[244] BENIN</option> <option value="245">[245] BURKINA FASO</option> <option value="246">[246] GUINEA BISSAU</option> <option value="247">[247] GAMBIA</option> <option value="249">[249] SEYCHELLES</option> <option value="251">[251] UGANDA</option> <option value="252">[252] AFRIKA TENGAH</option> <option value="253">[253] NIGER</option> <option value="254">[254] CHAD</option> <option value="255">[255] DJIBOUTI</option> <option value="256">[256] SAINT HELENA</option> <option value="257">[257] SAO TOME DAN PRINCIPE</option> <option value="260">[260] SWAZILAND</option> <option value="261">[261] AFRIKA SELATAN</option> <option value="262">[262] ZIMBABWE</option> <option value="263">[263] ZAMBIA</option> <option value="264">[264] MALAWI</option> <option value="265">[265] KOMORO</option> <option value="266">[266] BURUNDI</option> <option value="267">[267] MAURITIUS</option> <option value="268">[268] RWANDA</option> <option value="269">[269] ZAIRE</option> <option value="270">[270] MAYOTTE</option> <option value="271">[271] REPUBLIK DEMOKRATIK KONGO</option> <option value="272">[272] SPANYOL</option> <option value="273">[273] PULAU BOUVET</option> <option value="299">[299] AFRIKA LAINNYA</option> <option value="311">[311] AUSTRALIA</option> <option value="312">[312] SELANDIA BARU</option> <option value="318">[318] FEDERASI MIKRONESIA</option> <option value="319">[319] GUAM</option> <option value="320">[320] PALAU</option> <option value="321">[321] NAURU</option> <option value="322">[322] KALEDONIA BARU</option> <option value="323">[323] NIUE</option> <option value="324">[324] KEPULAUAN MARIANA UTARA</option> <option value="325">[325] SAINT VINCENT DAN GRENADINE</option> <option value="326">[326] VANUATU</option> <option value="327">[327] WALLIS AND FUTUNA ISLANDS</option> <option value="328">[328] WILAYAH SAMUDRA HINDIA BRITANIA</option> <option value="329">[329] OCEANIA LAINNYA</option> <option value="331">[331] SAMOA AMERICA</option> <option value="332">[332] KEPULAUAN COOK</option> <option value="333">[333] FIJI</option> <option value="334">[334] KIRIBATI</option> <option value="335">[335] KEPULAUAN MARSHALL</option> <option value="336">[336] SAMOA</option> <option value="337">[337] KEPULAUAN SOLOMON</option> <option value="338">[338] TONGA</option> <option value="339">[339] TUVALU</option> <option value="340">[340] PULAU NATAL</option> <option value="341">[341] KEPULAUAN TERLUAR KECIL AMERIKA SERIKAT</option> <option value="342">[342] KEPULAUAN COCOS (KEELING)</option> <option value="343">[343] TOKELAU</option> <option value="344">[344] PULAU HEARD DAN KEPULAUAN MC DONALDS</option> <option value="345">[345] PITCAIRN</option> <option value="346">[346] DARATAN SELATAN DAN ANTARTIKA PERANCIS</option> <option value="391">[391] TIMOR TIMUR</option> <option value="392">[392] ANTARTIKA</option> <option value="411">[411] AMERIKA SERIKAT</option> <option value="412">[412] KANADA</option> <option value="419">[419] AMERIKA UTARA LAINNYA</option> <option value="421">[421] MEKSIKO</option> <option value="422">[422] GUATEMALA</option> <option value="423">[423] HONDURAS</option> <option value="424">[424] NIKARAGUA</option> <option value="425">[425] PANAMA</option> <option value="426">[426] KUBA</option> <option value="427">[427] CURACAO</option> <option value="428">[428] SURINAME</option> <option value="431">[431] CHILI</option> <option value="432">[432] VENEZUELA</option> <option value="433">[433] ARGENTINA</option> <option value="434">[434] BRAZIL</option> <option value="435">[435] KOLOMBIA</option> <option value="436">[436] BOLIVIA</option> <option value="437">[437] URUGUAY</option> <option value="438">[438] PARAGUAY</option> <option value="441">[441] EKUADOR</option> <option value="442">[442] PERU</option> <option value="443">[443] GUYANA</option> <option value="444">[444] TRINIDAD DAN TOBAGO</option> <option value="445">[445] BAHAMA</option> <option value="446">[446] JAMAIKA</option> <option value="447">[447] PUERTO RICO</option> <option value="448">[448] BELIZE</option> <option value="449">[449] REPUBLIK DOMINICA</option> <option value="450">[450] EL SALVADOR</option> <option value="451">[451] KOSTA RICA</option> <option value="452">[452] HAITI</option> <option value="453">[453] BARBADOS</option> <option value="454">[454] ANTIGUA DAN BARBUDA</option> <option value="455">[455] ANGUILLA</option> <option value="456">[456] ARUBA</option> <option value="457">[457] BERMUDA</option> <option value="458">[458] TANJUNG VERDE</option> <option value="459">[459] KEPULAUAN CAYMAN</option> <option value="460">[460] DOMINIKA</option> <option value="461">[461] KEPULAUAN FALKLAND</option> <option value="462">[462] GUYANA PERANCIS</option> <option value="463">[463] POLINESIA PERANCIS</option> <option value="464">[464] GREENLAND</option> <option value="465">[465] GRENADA</option> <option value="466">[466] MARTINIK</option> <option value="467">[467] ANTILLEN BELANDA</option> <option value="468">[468] PULAU NORFOLK</option> <option value="469">[469] SAINT LUCIA</option> <option value="470">[470] SAN MARINO</option> <option value="471">[471] KEPULAUAN TURK DAN CAICOS</option> <option value="472">[472] GUADELOUPE</option> <option value="473">[473] SAINT KITTS AND NEVIS</option> <option value="475">[475] SAINT PIERRE DAN MIQUELON</option> <option value="476">[476] MONTSERRAT</option> <option value="477">[477] KEPULAUAN VIRGIN INGGRIS</option> <option value="478">[478] KEPULAUAN VIRGIN AMERIKA SERIKAT</option> <option value="479">[479] SAINT BARTHELEMY</option> <option value="480">[480] SAINT MARTIN</option> <option value="481">[481] SINT MAARTEN</option> <option value="499">[499] AMERIKA TENGAH DAN SELATAN LAINNYA</option> <option value="511">[511] INGGRIS</option> <option value="512">[512] BELANDA</option> <option value="513">[513] PERANCIS</option> <option value="514">[514] JERMAN</option> <option value="515">[515] AUSTRIA</option> <option value="516">[516] BELGIA</option> <option value="517">[517] SWISS</option> <option value="518">[518] LUKSEMBURG</option> <option value="519">[519] GIBRALTAR</option> <option value="520">[520] MONAKO</option> <option value="521">[521] DENMARK</option> <option value="522">[522] NORWEGIA</option> <option value="523">[523] SWEDEN</option> <option value="524">[524] FINLANDIA</option> <option value="525">[525] IRLANDIA</option> <option value="526">[526] ITALIA</option> <option value="527">[527] SPAIN</option> <option value="528">[528] PORTUGAL</option> <option value="529">[529] ISLANDIA</option> <option value="531">[531] YUNANI</option> <option value="532">[532] VATIKAN</option> <option value="533">[533] ANDORRA</option> <option value="534">[534] LIECHTENSTEIN</option> <option value="539">[539] EROPA BARAT LAINNYA</option> <option value="542">[542] HUNGARIA</option> <option value="543">[543] POLANDIA</option> <option value="544">[544] ROMANIA</option> <option value="545">[545] BULGARIA</option> <option value="548">[548] ALBANIA</option> <option value="549">[549] ARMENIA</option> <option value="550">[550] AZERBAIJAN</option> <option value="551">[551] BELARUS</option> <option value="552">[552] KAZAKHSTAN</option> <option value="553">[553] KIRGIZSTAN</option> <option value="554">[554] MOLDOVA</option> <option value="555">[555] TAJIKISTAN</option> <option value="556">[556] TURKMENISTAN</option> <option value="557">[557] UKRAINA</option> <option value="558">[558] UZBEKISTAN</option> <option value="559">[559] LITHUANIA</option> <option value="560">[560] LATVIA</option> <option value="561">[561] ESTONIA</option> <option value="562">[562] GEORGIA</option> <option value="563">[563] KROASIA</option> <option value="564">[564] BOSNIA DAN HERZEGOVINA</option> <option value="565">[565] MALTA</option> <option value="566">[566] SLOWAKIA</option> <option value="567">[567] SLOVENIA</option> <option value="568">[568] CEKO</option> <option value="569">[569] GEORGIA SELATAN DAN KEPULAUAN SANDWICH SELATAN</option> <option value="570">[570] REPUBLIK MAKEDONIA</option> <option value="571">[571] KEPULAUAN FAROE</option> <option value="572">[572] FEDERASI RUSIA</option> <option value="573">[573] SERBIA</option> <option value="574">[574] MONTENEGRO</option> <option value="575">[575] KOSOVO</option> <option value="576">[576] KEPULAUAN ALAND</option> <option value="577">[577] SVALBARD DAN JAN MAYEN</option> <option value="578">[578] GUERNSEY</option> <option value="579">[579] PULAU MAN</option> <option value="580">[580] JERSEY</option></option><option value="999"> LAINNYA</option>
														</select>
													</td> 
													<!--td rowspan="2">
														<button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button>
													</td-->
												</tr> 
												<tr>
													<td rowspan="1" style="width: 5%;">Harga : </td> 
													<td colspan="1" style="width: 300px;">
														<input type="text" readonly="readonly" name="r402b[b7r402bk6_1]" id="r402b_7_r402bk6_1" value="<?php echo @$arr_page9->b7r402bk6_1;?>" class="form-control" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="1">
														<input type="text" name="r402b[b7r402bk8_lain]" id="r402b_7_r402bk8_lain" value="<?php echo @$arr_page9->b7r402bk8_lain;?>" class="form-control text-left text-uppercase" style="display: none;">
													</td>
												</tr> 
												<tr>
													<td colspan="3" style="width: 10%; text-align: center; background-color: rgb(249, 249, 249); position: relative; z-index: 1; left: 0px;">Jumlah</td> 
													<td colspan="2"></td> 
													<td style="text-align: right;">
														<input name="TStpim[r402bjumk6]" id="TStpim_r402bjumk6" type="text" value="<?php echo @$arr_page9->r402bjumk6;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r402bjumk6" mt-alias="r402bjumk6" mt-page="9" style="text-align: right;">
													</td> 
													<td rowspan="1" style="width: 20px;">.000</td> 
													<td colspan="2"></td>
												</tr>
											</tbody>
										</table>
									</div> 
									<!--div><br> 
										<button type="button" class="btn btn-info btn-add-b4 col-md-4"><i class="fa fas fa-plus"></i> Tambah Baris &nbsp;</button>
									</div-->
								</div>
							</div>
						</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_8" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_9_prev" style="width: 150px">Kembali</a>
								<a href="#tab_10" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_9_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_10" class="tab-pane tab-child"><br> 
						<div id="form-input-page10" class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK V : PENDAPATAN/PENERIMAAN LAIN DAN STOK</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">501</td> 
													<td colspan="9">Pendapatan dari jasa industri (maklun)</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th colspan="6" style="width: 10%; text-align: center;"></th> 
																	<th colspan="2" style="text-align: center;">Nilai (Rp)</th>
																</tr> 
																<tr>
																	<th colspan="6" style="width: 70%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(2)</th>
																</tr> 
																<tr>
																	<td colspan="6">1. Dalam Negeri</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR501()" name="TStpim[r501a]" id="TStpim_r501a" value="<?php echo @$arr_page10->r501a;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r501a" mt-alias="r501a" mt-page="10" style="text-align: right;">
																	</td>
																</tr> 
																<tr>
																	<td colspan="6">2. Luar Negeri</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR501()" name="TStpim[r501b]" id="TStpim_r501b" value="<?php echo @$arr_page10->r501b;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r501b" mt-alias="r501b" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="3">&nbsp;&nbsp;&nbsp; a. Negara Utama tempat pengolahan</td> 
																	<td rowspan="2" style="width: 15%;">
																		<input name="TStpim[r501b1]" id="TStpim_r501b1" value="<?php echo @$arr_page10->r501b1;?>" type="text" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r501b1" mt-alias="r501b1" mt-page="10" style="text-align: right;">
																	</td> 
																	<td rowspan="2" style="width: 5%;">%</td> 
																	<td rowspan="2" colspan="2"></td>
																</tr> 
																<tr>
																	<td style="width: 10%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tuliskan</td> 
																	<td colspan="2" style="width: 25%;">
																		<input name="TStpim[r501b1_desk]" id="TStpim_r501b1_desk" value="<?php echo @$arr_page10->r501b1_desk;?>" type="text" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r501b1_desk" mt-alias="r501b1_desk" mt-page="10">
																	</td>
																</tr> 
																<tr>
																	<td colspan="3">&nbsp;&nbsp;&nbsp; b. Negara Lainnya</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r501b2]" id="TStpim_r501b2" value="<?php echo @$arr_page10->r501b2;?>" type="text" maxlength="7" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r501b2" mt-alias="r501b2" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">%</td> 
																	<td colspan="2"></td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;"></td> 
																	<td colspan="5">Jumlah</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r501jum]" id="TStpim_r501jum" value="<?php echo @$arr_page10->r501jum;?>" type="text" maxlength="16" class="form-control text-right mask" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r501jum" mt-alias="r501jum" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">502</td> 
													<td colspan="9">Pengeluaran lainnya</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th colspan="6" style="width: 10%; text-align: center;"></th> 
																	<th colspan="2" style="text-align: center;">Nilai (Rp)</th>
																</tr> 
																<tr>
																	<th colspan="6" style="width: 70%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(2)</th>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">a.</td> 
																	<td colspan="5">Keuntungan/kerugian penjualan barang dalam bentuk yang sama</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR502()" name="TStpim[r502a]" id="TStpim_r502a" value="<?php echo @$arr_page10->r502a;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r502a" mt-alias="r502a" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="6" style="width: 5%;">b.</td> 
																	<td colspan="5">Penjualan kekayaan intelektual (Paten, Merk, Hak Cipta, Desain Industri)</td> 
																	<td colspan="2"></td>
																</tr> 
																<tr>
																	<td colspan="5">1. Dalam Negeri</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR502()" name="TStpim[r502b1]" id="TStpim_r502b1" value="<?php echo @$arr_page10->r502b1;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r502b1" mt-alias="r502b1" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="5">2. Luar Negeri</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR502()" name="TStpim[r502b2]" id="TStpim_r502b2" value="<?php echo @$arr_page10->r502b2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r502b2" mt-alias="r502b2" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="3">&nbsp;&nbsp;&nbsp; a. Persentase pembeli utama</td> 
																	<td rowspan="2" style="width: 15%;">
																		<input name="TStpim[r502b2a]" id="TStpim_r502b2a" value="<?php echo @$arr_page10->r502b2a;?>" type="text" maxlength="4" class="form-control text-right mask" mt-range="0-100" mt-is-blank="blank" mt-field="r502b2a" mt-alias="r502b2a" mt-page="10" style="text-align: right;">
																	</td> 
																	<td rowspan="2" style="width: 5%;">%</td> 
																	<td rowspan="2" colspan="2"></td>
																</tr> 
																<tr>
																	<td style="width: 10%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tuliskan (negara)</td> 
																	<td colspan="2" style="width: 25%;">
																		<input name="TStpim[r502b2a_desk]" id="TStpim_r502b2a_desk" value="<?php echo @$arr_page10->r502b2a_desk;?>" type="text" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r502b2a_desk" mt-alias="r502b2a_desk" mt-page="10">
																	</td>
																</tr> 
																<tr>
																	<td colspan="3">&nbsp;&nbsp;&nbsp; b. Persentase pembeli lainnya</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r502b2b]" id="TStpim_r502b2b" value="<?php echo @$arr_page10->r502b2b;?>" type="text" class="form-control text-right mask" maxlength="7" mt-range="0-100" mt-is-blank="blank" mt-field="r502b2b" mt-alias="r502b2b" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">%</td> 
																	<td colspan="2"></td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">c.</td> 
																	<td colspan="5">Jasa yang tidak berkaitan dengan proses produksi</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR502()" name="TStpim[r502c]" id="TStpim_r502c" value="<?php echo @$arr_page10->r502c;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r502c" mt-alias="r502c" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">d.</td> 
																	<td colspan="5">Tenaga listrik yang dijual</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR502()" name="TStpim[r502d]" id="TStpim_r502d" value="<?php echo @$arr_page10->r502d;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r502d" mt-alias="r502d" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">e.</td> 
																	<td colspan="5">Pendapatan non operasional (Laba/Deviden yang diterima, bunga atas simpanan dan piutang, pendapatan dari sewa lahan, klaim asuransi kerugian yang diterima)</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR502()" name="TStpim[r502e]" id="TStpim_r502e" value="<?php echo @$arr_page10->r502e;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r502e" mt-alias="r502e" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">f.</td> 
																	<td colspan="3">Lainnya</td> 
																	<td colspan="2" style="width: 30%;">
																		<input name="TStpim[r502f_desk]" id="TStpim_r502f_desk" value="<?php echo @$arr_page10->r502f_desk;?>" type="text" maxlength="250" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r502f_desk" mt-alias="r502f_desk" mt-page="10">
																	</td> 
																	<td style="width: 25%;">
																		<input onchange="sumR502()" name="TStpim[r502f]" id="TStpim_r502f" value="<?php echo @$arr_page10->r502f;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r502f" mt-alias="r502f" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;"></td> 
																	<td colspan="5">Jumlah</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r502jumlah]" id="TStpim_r502jumlah" value="<?php echo @$arr_page10->r502jumlah;?>" type="text" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r502jumlah" mt-alias="r502jumlah" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">503</td> 
													<td colspan="9">Nilai stok pada awal dan akhir tahun 2020</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th colspan="2" style="text-align: center;">Jenis stok</th> 
																	<th colspan="2" style="text-align: center;">1 Januari 2020 (Rp) </th> 
																	<th colspan="2" style="text-align: center;">31 Desember 2020 (Rp)</th>
																</tr> 
																<tr>
																	<th colspan="2" style="width: 30%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(2)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td style="width: 5%;">a.</td> 
																	<td style="width: 15%;">Nilai stok bahan baku, bahan penolong, bahan bakar, bahan pembungkus, dan lain-lain</td> 
																	<td style="width: 15%;">
																		<input onchange="sumR503()" name="TStpim[r503ak2]" id="TStpim_r503ak2" value="<?php echo @$arr_page10->r503ak2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r503ak2" mt-alias="r503ak2" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input onchange="sumR503()" name="TStpim[r503ak3]" id="TStpim_r503ak3" value="<?php echo @$arr_page10->r503ak3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r503ak3" mt-alias="r503ak3" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td style="width: 5%;">b.</td> 
																	<td style="width: 15%;">Nilai stok barang produksi setengah jadi (dinilai sesuai dengan nilai bahan baku ditambah nilai pekerjaan yang dilakukan)</td> 
																	<td style="width: 15%;">
																		<input onchange="sumR503()" name="TStpim[r503bk2]" id="TStpim_r503bk2" value="<?php echo @$arr_page10->r503bk2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r503bk2" mt-alias="r503bk2" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input onchange="sumR503()" name="TStpim[r503bk3]" id="TStpim_r503bk3" value="<?php echo @$arr_page10->r503bk3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r503bk3" mt-alias="r503bk3" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td style="width: 5%;">c.</td> 
																	<td style="width: 15%;">Nilai stok barang jadi yang dihasilkan</td> 
																	<td style="width: 15%;">
																		<input onchange="sumR503()" name="TStpim[r503ck2]" id="TStpim_r503ck2" value="<?php echo @$arr_page10->r503ck2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r503ck2" mt-alias="r503ck2" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input onchange="sumR503()" name="TStpim[r503ck3]" id="TStpim_r503ck3" value="<?php echo @$arr_page10->r503ck3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r503ck3" mt-alias="r503ck3" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="2" style="text-align: center;">Jumlah</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r503jk2]" id="TStpim_r503jk2" value="<?php echo @$arr_page10->r503jk2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r503jk2" mt-alias="r503jk2" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r503jk3]" id="TStpim_r503jk3" value="<?php echo @$arr_page10->r503jk3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r503jk3" mt-alias="r503jk3" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">504</td> 
													<td colspan="9">Jika perusahaan menggunakan bahan baku atau memproduksi barang di bawah ini, berapa stok per 31 Desember 2020?</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th style="text-align: center;">Jenis barang</th> 
																	<th colspan="2" style="text-align: center;">31 Desember 2020</th>
																</tr> 
																<tr>
																	<th style="width: 30%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 70%; text-align: center;">(2)</th>
																</tr> 
																<tr>
																	<td style="width: 45%;">a. Garam</td> 
																	<td style="width: 50%;">
																		<input name="TStpim[r504a]" id="TStpim_r504a" value="<?php echo @$arr_page10->r504a;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r504a" mt-alias="r504a" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kg</td>
																</tr> 
																<tr>
																	<td style="width: 45%;">b. Gula pasir</td> 
																	<td style="width: 50%;">
																		<input name="TStpim[r504b]" id="TStpim_r504b" value="<?php echo @$arr_page10->r504b;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r504b" mt-alias="r504b" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kg</td>
																</tr> 
																<tr>
																	<td style="width: 45%;">c. Jagung</td> 
																	<td style="width: 50%;">
																		<input name="TStpim[r504c]" id="TStpim_r504c" value="<?php echo @$arr_page10->r504c;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r504c" mt-alias="r504c" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kg</td>
																</tr> 
																<tr>
																	<td style="width: 45%;">d. Bawang putih</td> 
																	<td style="width: 50%;">
																		<input name="TStpim[r504d]" id="TStpim_r504d" value="<?php echo @$arr_page10->r504d;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r504d" mt-alias="r504d" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kg</td>
																</tr> 
																<tr>
																	<td style="width: 45%;">e. Kacang kedelai</td> 
																	<td style="width: 50%;">
																		<input name="TStpim[r504e]" id="TStpim_r504e" value="<?php echo @$arr_page10->r504e;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r504e" mt-alias="r504e" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kg</td>
																</tr> 
																<tr>
																	<td style="width: 45%;">f. Beras</td> 
																	<td style="width: 50%;">
																		<input name="TStpim[r504f]" id="TStpim_r504f" value="<?php echo @$arr_page10->r504f;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r504f" mt-alias="r504f" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kg</td>
																</tr> 
																<tr>
																	<td style="width: 45%;">g. Ubi kayu/Singkong</td> 
																	<td style="width: 50%;">
																		<input name="TStpim[r504g]" id="TStpim_r504g" value="<?php echo @$arr_page10->r504g;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r504g" mt-alias="r504g" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kg</td>
																</tr> 
																<tr>
																	<td style="width: 45%;">h. Minyak Goreng</td> 
																	<td style="width: 50%;">
																		<input name="TStpim[r504h]" id="TStpim_r504h" value="<?php echo @$arr_page10->r504h;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r504h" mt-alias="r504h" mt-page="10" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">kg</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_9" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_10_prev" style="width: 150px">Kembali</a>
								<a href="#tab_11" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_10_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_11" class="tab-pane tab-child"><br> 
						<div id="form-input-page11">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK VI : Modal Tetap</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">601</td> 
													<td colspan="9">Nilai taksiran, posisi awal tahun dan penambahan/pengurangan/perbaikan besar barang modal tetap selama tahun 2020</td>
												</tr> 
												<tr>
													<td></td> 
													<td colspan="8">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th style="text-align: center;">Jenis barang modal</th> 
																	<th colspan="2" style="text-align: center;">Posisi Awal Tahun <br> (harga perolehan)</th> 
																	<th colspan="2" style="text-align: center;">Pembelian/ penambahan dan pembuatan/ perbaikan besar</th> 
																	<th colspan="2" style="text-align: center;">Penjualan/ pengurangan barang modal</th> 
																	<th colspan="2" style="text-align: center;">Nilai taksiran seluruh barang modal tetap menurut harga berlaku per 31 desember 2020</th>
																</tr> 
																<tr>
																	<th style="width: 20%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 20%; text-align: center;">(2)</th> 
																	<th colspan="2" style="width: 20%; text-align: center;">(3)</th> 
																	<th colspan="2" style="width: 20%; text-align: center;">(4)</th> 
																	<th colspan="2" style="width: 20%; text-align: center;">(5)</th>
																</tr> 
																<tr>
																	<td colspan="1">a. Tanah</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ak2]" id="TStpim_r601ak2" value="<?php echo @$arr_page11->r601ak2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ak2" mt-alias="r601ak2" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ak3]" id="TStpim_r601ak3" value="<?php echo @$arr_page11->r601ak3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ak3" mt-alias="r601ak3" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ak4]" id="TStpim_r601ak4" value="<?php echo @$arr_page11->r601ak4;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ak4" mt-alias="r601ak4" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ak5]" id="TStpim_r601ak5" value="<?php echo @$arr_page11->r601ak5;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ak5" mt-alias="r601ak5" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="1">b. Gedung</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601bk2]" id="TStpim_r601bk2" value="<?php echo @$arr_page11->r601bk2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601bk2" mt-alias="r601bk2" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601bk3]" id="TStpim_r601bk3" value="<?php echo @$arr_page11->r601bk3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601bk3" mt-alias="r601bk3" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601bk4]" id="TStpim_r601bk4" value="<?php echo @$arr_page11->r601bk4;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601bk4" mt-alias="r601bk4" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601bk5]" id="TStpim_r601bk5" value="<?php echo @$arr_page11->r601bk5;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601bk5" mt-alias="r601bk5" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="1">c. Mesin dan perlengkapan</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ck2]" id="TStpim_r601ck2" value="<?php echo @$arr_page11->r601ck2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ck2" mt-alias="r601ck2" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ck3]" id="TStpim_r601ck3" value="<?php echo @$arr_page11->r601ck3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ck3" mt-alias="r601ck3" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ck4]" id="TStpim_r601ck4" value="<?php echo @$arr_page11->r601ck4;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ck4" mt-alias="r601ck4" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ck5]" id="TStpim_r601ck5" value="<?php echo @$arr_page11->r601ck5;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ck5" mt-alias="r601ck5" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="1">d. Kendaraan</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601dk2]" id="TStpim_r601dk2" value="<?php echo @$arr_page11->r601dk2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601dk2" mt-alias="r601dk2" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601dk3]" id="TStpim_r601dk3" value="<?php echo @$arr_page11->r601dk3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601dk3" mt-alias="r601dk3" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601dk4]" id="TStpim_r601dk4" value="<?php echo @$arr_page11->r601dk4;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601dk4" mt-alias="r601dk4" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601dk5]" id="TStpim_r601dk5" value="<?php echo @$arr_page11->r601dk5;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601dk5" mt-alias="r601dk5" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="1">e. Software/ database</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ek2]" id="TStpim_r601ek2" value="<?php echo @$arr_page11->r601ek2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ek2" mt-alias="r601ek2" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ek3]" id="TStpim_r601ek3" value="<?php echo @$arr_page11->r601ek3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ek3" mt-alias="r601ek3" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ek4]" id="TStpim_r601ek4" value="<?php echo @$arr_page11->r601ek4;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ek4" mt-alias="r601ek4" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601ek5]" id="TStpim_r601ek5" value="<?php echo @$arr_page11->r601ek5;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601ek5" mt-alias="r601ek5" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="1">f. Lainnya</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601fk2]" id="TStpim_r601fk2" value="<?php echo @$arr_page11->r601fk2;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601fk2" mt-alias="r601fk2" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601fk3]" id="TStpim_r601fk3" value="<?php echo @$arr_page11->r601fk3;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601fk3" mt-alias="r601fk3" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601fk4]" id="TStpim_r601fk4" value="<?php echo @$arr_page11->r601fk4;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601fk4" mt-alias="r601fk4" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601fk5]" id="TStpim_r601fk5" value="<?php echo @$arr_page11->r601fk5;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r601fk5" mt-alias="r601fk5" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td colspan="1" style="text-align: center;">Jumlah</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601jumk2]" id="TStpim_r601jumk2" value="<?php echo @$arr_page11->r601jumk2;?>" type="text" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r601jumk2" mt-alias="r601jumk2" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601jumk3]" id="TStpim_r601jumk3" value="<?php echo @$arr_page11->r601jumk3;?>" type="text" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r601jumk3" mt-alias="r601jumk3" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601jumk4]" id="TStpim_r601jumk4" value="<?php echo @$arr_page11->r601jumk4;?>" type="text" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r601jumk4" mt-alias="r601jumk4" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 15%;">
																		<input name="TStpim[r601jumk5]" id="TStpim_r601jumk5" value="<?php echo @$arr_page11->r601jumk5;?>" type="text" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r601jumk5" mt-alias="r601jumk5" mt-page="11" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> 
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK VII : PERNYATAAN</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">701</td> 
													<td colspan="8">Menurut perusahaan, untuk pengisian kuesioner selanjutnya lebih baik dilakukan dengan cara?</td> 
													<td rowspan="2" style="width: 20%;">
														<input name="TStpim[r701]" id="TStpim_r701" type="text" value="2" class="form-control text-right mask" maxlength="1" mt-range="1-2" mt-is-blank="notblank" mt-field="r701" mt-alias="r701" mt-page="11" style="text-align: right;">
													</td>
												</tr> 
												<tr>
													<td style="width: 10px;"></td> 
													<td colspan="6">Online (web base ) &nbsp;&nbsp;&nbsp; -1 </td> 
													<td style="width: 20%;">Kuesioner (paper base ) &nbsp;&nbsp;&nbsp; -2</td> 
													<td style="width: 10px;"></td>
												</tr> 
												<tr>
													<td rowspan="2" style="text-align: center; width: 50px;">702</td> 
													<td colspan="8">Jika rincian 701 terisi kode 1 (online /web base ), tuliskan email resmi yang dapat dihubungi:</td> 
													<td rowspan="2" style="width: 20%;"></td>
												</tr> 
												<tr>
													<td rowspan="1" colspan="8">
														<input name="TStpim[r702]" id="TStpim_r702" type="text" maxlength="50" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-@" mt-is-blank="blank" mt-field="r702" mt-alias="r702" mt-page="11"></td></tr> <tr><td rowspan="7" style="text-align: center; width: 50px;">703</td> <td colspan="9">Data yang tercantum dalam daftar isian ini diisi dengan sebenarnya dan menurut keadaan yang sesungguhnya</td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">a.</td> <td colspan="3">Nama</td> <td colspan="5"><input name="TStpim[r703a]" id="TStpim_r703a" type="text" maxlength="250" value="HJ HAJRAH" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r703a" mt-alias="r703a" mt-page="11"></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">b.</td> <td colspan="3">Jabatan</td> <td colspan="5"><input name="TStpim[r703b]" id="TStpim_r703b" type="text" maxlength="250" value="MANAGER" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r703b" mt-alias="r703b" mt-page="11"></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">c.</td> <td colspan="3">Nomor handphone</td> <td colspan="5"><input name="TStpim[r703c]" id="TStpim_r703c" type="text" maxlength="20" value="085338125393" class="form-control text-left text-uppercase textFieldNumber" mt-is-blank="blank" mt-field="r703c" mt-alias="r703c" mt-page="11"></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">d.</td> <td colspan="3">E-mail</td> <td colspan="5"><input name="TStpim[r703d]" id="TStpim_r703d" type="text" maxlength="50" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-@" mt-is-blank="blank" mt-field="r703d" mt-alias="r703d" mt-page="11"></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">e.</td> <td colspan="3">Tanda Tangan &amp; Cap Perusahaan</td> <td colspan="5"><input name="TStpim[r703e]" id="TStpim_r703e" type="text" value="1" class="form-control text-right mask" maxlength="1" mt-range="0-1" mt-is-blank="blank" mt-field="r703e" mt-alias="r703e" mt-page="11" style="width: 20%; text-align: right;"></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">f.</td> <td colspan="4">Tanggal</td> <td><input name="TStpim[r703f_tgl]" id="TStpim_r703f_tgl" type="text" value="14" class="form-control text-left text-uppercase textFieldNumber" maxlength="2" mt-range="1-31" mt-is-blank="notblank" mt-field="r703f_tgl" mt-alias="r703f_tgl" mt-page="11" style="width: 100%;"></td><td style="text-align: center; width: 10px;">/</td> <td><input name="TStpim[r703f_bln]" id="TStpim_r703f_bln" type="text" value="6" class="form-control text-left text-uppercase textFieldNumber" maxlength="2" mt-range="1-12" mt-is-blank="notblank" mt-field="r703f_bln" mt-alias="r703f_bln" mt-page="11" style="width: 100%;"></td><td style="text-align: center; width: 10px;">/ 2021</td></tr></tbody></table></div></div></div>
						</div--> <br> 
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK VIII : CATATAN</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body">
										<table class="table table-bordered table-condensed">
											<tbody>
												<tr>
													<td>
														<textarea rows="30" name="TStpim[b8]" id="TStpim_b8" class="text-left text-uppercase" maxlength="500" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="b8" mt-alias="b8" mt-page="11" style="width: 100%;">value="<?php echo @$arr_page11->b8;?>"</textarea>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> <br> 
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;"><div class="box box-default box-solid"><div class="box-header with-border bg-navy" style="text-align: center; color: white;"><p class="box-title" style="font-weight: bold;">BLOK IX: KETERANGAN PETUGAS BPS</p> <div class="box-tools pull-right"></div></div> <div class="box-body" style="overflow-x: scroll;"><table class="table table-bordered table-condensed table-striped"><tbody><tr><td rowspan="4" style="text-align: center; width: 50px;">901</td> <td colspan="9">Bagian ini hanya diisi oleh petugas BPS</td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">a.</td> <td colspan="3">Nama</td> <td colspan="5"><input name="TStpim[r901a]" id="TStpim_r901a" type="text" maxlength="250" value="BADRUN" class="form-control text-left text-uppercase" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r901a" mt-alias="r901a" mt-page="11"></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">b.</td> <td colspan="3">Jabatan</td> <td colspan="5"><select name="TStpim[r901b]" id="TStpim_r901b" class="form-control text-left text-uppercase" maxlength="250" mt-allowed-char="().,/.-" mt-is-blank="blank" mt-field="r901b" mt-alias="r901b" mt-page="11"><option value="">---PILIH JABATAN---</option> <option value="1" selected="selected">Mitra</option> <option value="2">KSK</option> <option value="3">Staf BPS Kab/ Kota</option> <option value="4">Staf BPS Provinsi</option> <option value="5">Kasie BPS Kab/ Kota</option> <option value="6">Kasie BPS Provinsi</option></select></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">c.</td> <td colspan="3">Tanda Tangan</td> <td colspan="5"><input name="TStpim[r901c]" id="TStpim_r901c" type="text" value="1" class="form-control text-right mask" maxlength="1" mt-range="0-1" mt-is-blank="notblank" mt-field="r901c" mt-alias="r901c" mt-page="11" style="width: 20%; text-align: right;"></td></tr></tbody></table></div></div></div>
						</div-->
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_10" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_11_prev" style="width: 150px">Kembali</a>
								<a href="#tab_12" data-toggle="tab" halaman="2" class="btn btn-success bg-flat btn-simpan pull-right hal_11_next" style="width: 150px">Lanjut</a>
							</div>
						</div-->
					</div> 
					<div id="tab_12" class="tab-pane tab-child"><br> 
						<div id="form-input-page12">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<div class="box box-default box-solid">
									<div class="box-header with-border bg-navy" style="text-align: center; color: white;">
										<p class="box-title" style="font-weight: bold;">BLOK X : RINGKASAN</p> 
										<div class="box-tools pull-right"></div>
									</div> 
									<div class="box-body" style="overflow-x: scroll;">
										<table class="table table-bordered table-condensed table-striped">
											<tbody>
												<tr>
													<td colspan="11">Bagian ini hanya diisi oleh petugas pengawas BPS</td>
												</tr> 
												<tr>
													<td>1001</td> 
													<td colspan="10">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th colspan="6" style="width: 40%; text-align: center;"></th> 
																	<th colspan="2" style="width: 30%; text-align: center;">Nilai (Rp)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">Tahun 2019</th>
																</tr> 
																<tr>
																	<th colspan="6" style="width: 40%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(2)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">a.</td> 
																	<td colspan="5">Pekerja (R.301 jumlah) kolom (2) + kolom (3)</td> 
																	<td style="width: 10%;">
																		<input name="TStpim[r1001a]" id="TStpim_r1001a" value="<?php echo @$arr_page12->r1001a;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1001a" mt-alias="r1001a" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">b.</td> 
																	<td colspan="5">Bahan bakar (R.302 jumlah) kolom (4)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1001b]" id="TStpim_r1001b" value="<?php echo @$arr_page12->r1001b;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1001b" mt-alias="r1001b" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">c.</td> 
																	<td colspan="5">Nilai tenaga listrik (R.303.a + R.303.b) kolom (3)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1001c]" id="TStpim_r1001c" value="<?php echo @$arr_page12->r1001c;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1001c" mt-alias="r1001c" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">d.</td> 
																	<td colspan="5">Pengeluaran lainnya (R.306 jumlah) kolom (2)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1001d]" id="TStpim_r1001d" value="<?php echo @$arr_page12->r1001d;?>" type="text" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1001d" mt-alias="r1001d" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">e.</td> 
																	<td colspan="5">Bahan baku dan penolong (R.307.Jumlah kolom (5) + kolom (7))</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1001e]" id="TStpim_r1001e" type="text" value="<?php echo @$arr_page12->r1001e;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1001e" mt-alias="r1001e" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;"></td> 
																	<td colspan="5" style="text-align: center;">
																		<b>Jumlah</b>
																	</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1001jumlah]" id="TStpim_r1001jumlah" type="text" value="<?php echo @$arr_page12->r1001jumlah;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r1001jumlah" mt-alias="r1001jumlah" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td>1002</td> 
													<td colspan="10">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th colspan="6" style="width: 10%; text-align: center;"></th> 
																	<th colspan="2" style="text-align: center;">Nilai (Rp)</th> 
																	<th colspan="2" style="text-align: center;">Tahun 2019</th>
																</tr> 
																<tr>
																	<th colspan="6" style="width: 40%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(2)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">a.</td> 
																	<td colspan="5">Barang-barang yang dihasilkan (R.402.b jumlah) kolom (6)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1002a]" id="TStpim_r1002a" type="text" value="<?php echo @$arr_page12->r1002a;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1002a" mt-alias="r1002a" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">b.</td> 
																	<td colspan="5">Jasa industri (R.501 jumlah) kolom (2)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1002b]" id="TStpim_r1002b" type="text" value="<?php echo @$arr_page12->r1002b;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1002b" mt-alias="r1002b" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">c.</td> 
																	<td colspan="5">Pendapatan lainnya (R.502 jumlah - R.502.e</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1002c]" id="TStpim_r1002c" type="text" value="<?php echo @$arr_page12->r1002c;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1002c" mt-alias="r1002c" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">d.</td> 
																	<td colspan="5">Selisih nilai stok barang (R.503.b) kolom (3)-(2)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1002d]" id="TStpim_r1002d" type="text" value="<?php echo @$arr_page12->r1002d;?>" class="form-control text-right mask" maxlength="14" mt-range="#99999999999-99999999999" mt-is-blank="blank" mt-field="r1002d" mt-alias="r1002d" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;"></td> 
																	<td colspan="5" style="text-align: center;">
																		<b>Jumlah</b>
																	</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1002jumlah]" id="TStpim_r1002jumlah" type="text" value="<?php echo @$arr_page12->r1002jumlah;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r1002jumlah" mt-alias="r1002jumlah" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td>1003</td> 
													<td colspan="10">
														<table class="table table-bordered table-condensed table-striped">
															<tbody>
																<tr>
																	<th colspan="6" style="width: 10%; text-align: center;"></th> 
																	<th colspan="2" style="text-align: center;">Nilai (Rp)</th> 
																	<th colspan="2" style="text-align: center;">Tahun 2019</th>
																</tr> 
																<tr>
																	<th colspan="6" style="width: 40%; text-align: center;">(1)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(2)</th> 
																	<th colspan="2" style="width: 30%; text-align: center;">(3)</th>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">a.</td> 
																	<td colspan="5">R.306.a.2 (sewa tanah)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1003a]" id="TStpim_r1003a" type="text" value="<?php echo @$arr_page12->r1003a;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1003a" mt-alias="r1003a" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">b.</td> 
																	<td colspan="5">R.306.b (pajak)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1003b]" id="TStpim_r1003b" type="text" value="<?php echo @$arr_page12->r1003b;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1003b" mt-alias="r1003b" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">c.</td> 
																	<td colspan="5">R.306.d (bunga atas pinjaman)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1003c]" id="TStpim_r1003c" type="text" value="<?php echo @$arr_page12->r1003c;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1003c" mt-alias="r1003c" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">d.</td> 
																	<td colspan="5">R.306.e (hadiah, sumbangan, derma dan sejenisnya)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1003d]" id="TStpim_r1003d" type="text" value="<?php echo @$arr_page12->r1003d;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1003d" mt-alias="r1003d" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">e.</td> 
																	<td colspan="5">R.306.g (deviden/laba yang dibagikan)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1003e]" id="TStpim_r1003e" type="text" value="<?php echo @$arr_page12->r1003e;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1003e" mt-alias="r1003e" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;">f.</td> 
																	<td colspan="5">R.306.h (premi asuransi kerugian yang dibayarkan)</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1003f]" id="TStpim_r1003f" type="text" value="<?php echo @$arr_page12->r1003f;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1003f" mt-alias="r1003f" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr> 
																<tr>
																	<td rowspan="1" style="width: 5%;"></td> 
																	<td colspan="5" style="text-align: center;">
																		<b>Jumlah</b>
																	</td> 
																	<td style="width: 25%;">
																		<input name="TStpim[r1003jumlah]" id="TStpim_r1003jumlah" type="text" value="<?php echo @$arr_page12->r1003jumlah;?>" class="form-control text-right mask" maxlength="16" mt-range="0-999999999999" mt-is-blank="blank" mt-field="r1003jumlah" mt-alias="r1003jumlah" mt-page="12" style="text-align: right;">
																	</td> 
																	<td style="width: 5%;">.000</td> 
																	<td style="width: 10%; text-align: right;">NULL</td> 
																	<td style="width: 5%;">.000</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr> 
												<tr>
													<td rowspan="1" style="text-align: center; width: 50px;">1004</td> 
													<td colspan="4">Nilai Tambah = jumlah (1002) - jumlah (1001) + 1001.a +  jumlah (1003)</td> 
													<td colspan="3">
														<input name="TStpim[r1004]" id="TStpim_r1004" type="text" value="<?php echo @$arr_page12->r1004;?>" class="form-control text-right mask" maxlength="14" mt-range="0-99999999999" mt-is-blank="blank" mt-field="r1004" mt-alias="r1004" mt-page="12" style="text-align: right;">
													</td> 
													<td style="width: 5%;">.000</td> 
													<td>NULL</td> 
													<td style="width: 5%;">.000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> <br> 
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;"><div class="box box-default box-solid"><div class="box-header with-border bg-navy" style="text-align: center; color: white;"><p class="box-title" style="font-weight: bold;">BLOK XI : IDENTITAS PENGAWAS</p> <div class="box-tools pull-right"></div></div> <div class="box-body" style="overflow-x: scroll;"><table class="table table-bordered table-condensed table-striped"><tbody><tr><td rowspan="1" style="text-align: center; width: 50px;">1101.</td> <td colspan="3">Nama</td> <td colspan="5"><input name="TStpim[r1101]" id="TStpim_r1101" type="text" maxlength="30" value="ARDI" class="form-control text-left text-uppercase" mt-is-blank="blank" mt-field="r1101" mt-alias="r1101" mt-page="12"></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">1102.</td> <td colspan="3">Jabatan</td> <td colspan="5"><select name="TStpim[r1102]" id="TStpim_r1102" class="form-control text-right mask" maxlength="1" mt-range="1-9" mt-is-blank="blank" mt-field="r1102" mt-alias="r1102" mt-page="12" style="text-align: right;"><option value="" selected="selected">---PILIH JABATAN---</option> <option value="1">KSK</option> <option value="2">Staf BPS Kab/ Kota</option> <option value="3">Staf BPS Provinsi</option> <option value="4">Kasie BPS Kab/ Kota</option> <option value="5">Kasie BPS Provinsi</option></select></td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">1103.</td> <td colspan="4">Tanggal Pemeriksaan</td> <td><input name="TStpim[r1103_tgl]" id="TStpim_r1103_tgl" type="text" value="15" class="form-control text-left text-uppercase textFieldNumber" maxlength="2" mt-range="1-31" mt-is-blank="notblank" mt-field="r1103_tgl" mt-alias="r1103_tgl" mt-page="12" style="width: 100%;"></td><td style="text-align: center; width: 10px;">/</td> <td><input name="TStpim[r1103_bln]" id="TStpim_r1103_bln" type="text" value="6" class="form-control text-left text-uppercase textFieldNumber" maxlength="2" mt-range="1-12" mt-is-blank="notblank" mt-field="r1103_bln" mt-alias="r1103_bln" mt-page="12" style="width: 100%;"></td><td style="text-align: center; width: 10px;">/ 2021</td></tr> <tr><td rowspan="1" style="text-align: center; width: 50px;">1104.</td> <td colspan="3">Tanda Tangan</td> <td colspan="5"><input name="TStpim[r1104]" id="TStpim_r1104" type="text" value="1" class="form-control text-right mask" maxlength="1" mt-range="0-1" mt-is-blank="blank" mt-field="r1104" mt-alias="r1104" mt-page="12" style="width: 20%; text-align: right;"></td></tr></tbody></table></div></div></div>
						</div-->
						</div>
						<!--div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12" style="padding-right: 50px; padding-left: 50px;">
								<a href="#tab_11" data-toggle="tab" halaman="2" class="btn btn-warning bg-flat btn-simpan pull-left hal_12_prev" style="width: 150px">Kembali</a>
								<a href="#" class="btn btn-success bg-flat btn-simpan pull-right hal_12_submit" style="width: 150px">Simpan</a>
							</div>
						</div-->
					</div>
					
					<input name="TStpim[id]" id="TStpim_id" type="hidden" value="1613442645">
					<input name="TStpim[r201_kbli]" id="TStpim_r201_kbli" type="hidden" value="13121" class="text-left text-uppercase textFieldNumber" maxlength="5" mt-is-blank="notblank" mt-field="r201_kbli" mt-alias="r201_kbli" mt-page="2">
					<input type="hidden" value="Rg0owmHHmfHbF3uANKjYpZeOC497GpiS8PhOeUlHowoUux9yxuz3yVV5LCTjU4oHYp7_AX5VzvBk8Bfn5Dzcyw" name="Params[source]" id="Params_source">
				</div>
            </div>
            <!--div>
                             <button type="button" class="btn btn-danger btn-error pull-left" style="width: 150px">Daftar Error</button>
                            <div class="col-sm-6 col-md-6 col-lg-6" style="text-align: center">
                  <a href="#" class="btn-prev" style="text-align:center;font-size: 70px"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                  <a href="#" class="btn-next" style="text-align:center;font-size: 70px"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
                <button class="btn btn-success bg-flat btn-simpan pull-right" style="width: 150px">Simpan</button>
            </div-->
        </div>
    </div>
</section>
</form>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("#form-quest :input").prop("disabled", true);
    });
</script>
