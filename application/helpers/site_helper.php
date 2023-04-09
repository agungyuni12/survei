<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admins
 *
 * @author Maulnick
 */


function get_percent_value_form($percent){
	$blkg_koma = explode(".", $percent);
	if((isset($blkg_koma[1]) && $blkg_koma[1]<10) || !(isset($blkg_koma[1]))){
		$value = $percent*100;
	}
	else $value = $percent;
	return $value;
}

function get_percent_value_form_custom($percent, $dec){
	$blkg_koma = explode(".", $percent);
	
	if($dec == 2){
		if((isset($blkg_koma[1]) && $blkg_koma[1]<10) || !(isset($blkg_koma[1]))){
			$value = $percent*100;
		}
		else $value = $percent;
	}

	elseif($dec == 3){
		if((isset($blkg_koma[1]) && $blkg_koma[1]<10) || !(isset($blkg_koma[1]))){
			$value = $percent*1000;
		}
		elseif((isset($blkg_koma[1]) && $blkg_koma[1]<100) || !(isset($blkg_koma[1]))){
			$value = $percent*1000;
		}
		else $value = $percent;
	}

	
	return $value;
}



function get_mail_type_icon($mail_type){
	$arr_img = array('.jpg','.png','.jpeg');

	/*if($ext == ".doc" || $ext == ".docx"){$img = "word - color";}
	elseif($ext == ".xls" || $ext == ".xlsx"){$img = "xlx - color";}
	elseif($ext == ".ppt" || $ext == ".pptx"){$img = "ppt - color";}
	elseif($ext == ".pdf"){$img = "pdf - color";}
	elseif(in_array($ext, $arr_img)){$img = "gallery - color";}
	else{$img = "copy - color";}*/

	if($mail_type == "Surat") $img = "email document - office";
	elseif($mail_type == "Nota") $img = "new resume template - office.png";
	elseif($mail_type == "Memo") $img = "spiral bound - office.png";
	elseif($mail_type == "Nota Analisa") $img = "accounting - office.png";
	elseif($mail_type == "Surat Tugas") $img = "submit resume - office.png";
	elseif($mail_type == "BAST") $img = "sonic screwdriver - office.png";
	elseif($mail_type == "PKS") $img = "save archive - office.png";
	elseif($mail_type == "SPPK") $img = "accounting - office.png";
	elseif($mail_type == "Undangan") $img = "mailbox opened - office.png";
	


	return get_icon_url($img);
}



function get_spreadsheet_attr(){
	$i = 0;

	/********** Assets **********/
	$arr[$i+0] = array('title' => 'Cash & Bank', 'db' => 'cash_bank', 'class' => '', 'category' => 'asset');
	$arr[$i+1] = array('title' => 'Marketable Securities', 'db' => 'securities', 'class' => '', 'category' => 'asset');
	$arr[$i+2] = array('title' => 'Accounts Receivable', 'db' => 'acc_rev', 'class' => '', 'category' => 'asset');
	$arr[$i+3] = array('title' => 'Accounts Receivable fr Affiliated', 'db' => 'acc_rev_aff', 'class' => '', 'category' => 'asset');
	$arr[$i+4] = array('title' => 'Inventory', 'db' => 'inventory', 'class' => '', 'category' => 'asset');
	$arr[$i+5] = array('title' => 'Other Current Assets', 'db' => 'oth_cur_assets', 'class' => '', 'category' => 'asset');
	$arr[$i+6] = array('title' => 'Prepaid Expenses', 'db' => 'prepaid', 'class' => '', 'category' => 'asset');
	$arr[$i+7] = array('title' => 'Current Assets', 'db' => 'current_asset', 'class' => 'ss_semi_bold', 'category' => 'asset');
	$arr[$i+8] = array('title' => 'Net Fixed Assets', 'db' => 'net_fixed', 'class' => '', 'category' => 'asset');
	$arr[$i+9] = array('title' => 'Investments', 'db' => 'investment', 'class' => '', 'category' => 'asset');
	$arr[$i+10] = array('title' => 'Net Other Non Current Assets', 'db' => 'other_non_cur_asst', 'class' => '', 'category' => 'asset');
	$arr[$i+11] = array('title' => 'Net Intangibles', 'db' => 'intangibles', 'class' => '', 'category' => 'asset');
	$arr[$i+12] = array('title' => 'Non Current Assets', 'db' => 'non_current_asset', 'class' => 'ss_semi_bold', 'category' => 'asset');
	$arr[$i+13] = array('title' => 'Total Assets', 'db' => 'total_asset', 'class' => 'ss_bold', 'category' => 'asset');


	/********** Liabilities **********/
	

	return $arr;
}




function get_supporting_attribute($department){
	$arr_color_cbs = array("#89cbc9","#bb6a56","#4bacc6","#5c97cb","#b16972","#65757e","#bb6a56","#4bacc6","#65757e");
	$arr_desc_cbs[2] = "Sebagai jembatan bagi RM untuk implementasi Wholesale & Retail Product, Bank at Work dan Value Chain (Account Plan)";
	$arr_desc_cbs[5] = "Support kegiatan jasa keagenan sindikasi/club deal dan CBMS";
	$arr_desc_cbs[4] = "Enabler for syndication and structured finance deal";
	$arr_desc_cbs[3] = "Melaksanakan Inisiatif Strategis CB meliputi pengembangan system (CBIC), business process, organisasi dan mengkoordinasikan seluruh pelaksanaan project strategis (PMO)";
	$arr_desc_cbs[0] = "Melaksanakan kegiatan-kegiatan logistik, filling, protokoler, budgeting, administrasi kepegawaian dan kehumasan";
	$arr_desc_cbs[1] = "Berkoordinasi untuk memberikan kajian/review/advis dari sisi yuridis untuk meminimalisir risiko bank";
	$arr_desc_cbs[6] = "Terkait Performance CB";
	$arr_desc_cbs[7] = "Terkait kepegawaian CB";
	$arr_desc_cbs[8] = "Terkait Compliance CB";




	if($department == "DECISION SUPPORT"){
		$number = 6;
	}elseif($department == "HCBP CORPORATE BANKING"){
		$number = 7;
	}elseif($department == "CORPORATE GENERAL SERVICES"){
		$number = 0;
	}elseif($department == "CORPORATE STRATEGIC PROJECT"){
		$number = 3;
	}elseif($department == "DECENTRALIZED COMPLIANCE & OPR. RISK "){
		$number = 8;
	}elseif($department == "CORPORATE LEGAL"){
		$number = 1;
	}elseif($department == "CORPORATE SOLUTION & COLLABORATION"){
		$number = 2;
	}elseif($department == "SYNDICATION & STRUCTURED FINANCE"){
		$number = 4;
	}elseif($department == "SYNDICATION - AGENCY & TRUSTEE"){
		$number = 5;
	}

	$res['desc'] = $arr_desc_cbs[$number];
	$res['color'] = $arr_color_cbs[$number];
	$res['img'] =  base_url()."assets/img/survey/cbs_".$number.".png";

	return $res;
}


function get_count_day($date){
	$count = intval(abs(strtotime(date('y-m-d')) - strtotime($date))/86400);
	return $count;
}


function get_count_day_text($date){
	$count = intval(abs(strtotime(date('y-m-d')) - strtotime($date))/86400);
	if($count == 0) return "Today";
	elseif($count == 1) return "Yesterday";
	else return $count." days ago";
}

function get_kpi_color($realization){
	$arr['color_pct'] = array_color_broventh(9); $arr['color_txt'] = "";
	$arr['color_font'] = 'white';

	if($realization){
		if($realization >= 100){$arr['color_pct'] = array_color_broventh(3); $arr['color_txt'] = array_color_broventh(2);}
		elseif($realization<100 && $realization >= 95){$arr['color_pct'] = array_color_broventh(7); $arr['color_txt'] = array_color_broventh(6); $arr['color_font'] = "#777";}
		elseif($realization<95 && $realization >= 0){$arr['color_pct'] = array_color_broventh(5); $arr['color_txt'] = array_color_broventh(4);}

		if(!$arr['color_txt']) $arr['color_txt'] = $arr['color_pct'];
	}


	return $arr;
}


function get_news_page_title($type){
	if($type == "OCE") return "Office of Chief Economist";
	elseif($type == "Mansek") return "Mandiri Sekuritas";
	elseif($type == "SSF") return "SSF Loan Market Updates";
	elseif($type == "CCS") return "Credit Control & Supervision";
	else return $type;
}

function get_kpi_type_result($type){
	if($type == "Ending Balance Dana") return "performance-fund";
	elseif($type == "Ending Balance Kredit") return "performance-credit";
	elseif($type == "Fee Based Income") return "performance-fee";
	elseif($type == "Fee Based Income") return "performance-fee";
	elseif($type == "Wholesale Income Anchor Clients") return "anchor-Wholesale";
	elseif($type == "Alliance Income Anchor Clients") return "anchor-Value Chain";
	else return $type;
}


function get_position_priority($position){
	if(strtoupper($position) == "GROUP HEAD") $data['priority'] = 1;
	elseif(strtoupper($position) == "DEPARTMENT HEAD") $data['priority'] = 2;
	elseif(strtoupper($position) == "TEAM LEADER") $data['priority'] = 3;
	elseif(strtoupper($position) == "OFFICER") $data['priority'] = 4;
	elseif(strtoupper($position) == "PELAKSANA") $data['priority'] = 5;
	elseif(strtoupper($position) == "SEKRETARIS") $data['priority'] = 5;

	return $data['priority'];
}

function get_position_color($position){
	if(strtoupper($position) == "DIRECTOR") return array_color_new(10);
	elseif(strtoupper($position) == "GROUP HEAD") return array_color_new(9);
	elseif(strtoupper($position) == "DEPARTMENT HEAD") return array_color_new(1);
	elseif(strtoupper($position) == "TEAM LEADER") return array_color_new(2);
	elseif(strtoupper($position) == "OFFICER") return array_color_new(3);
	elseif(strtoupper($position) == "PELAKSANA") return array_color_new(5);
	elseif(strtoupper($position) == "SEKRETARIS") return array_color_new(6);
	else return array_color_new(8);
}

function get_greeting(){
	$hrs = date("H");
	$mnt = date("i");

	if($hrs >  4){
		$msg = "It's Still Early"; // REALLY early
		$color = "#e7f4f6";
		$img = "dawn.png";
	}
	if(($hrs >  6) && ($mnt > 29) || ($hrs >  7)){
		$msg = "Good Morning";      // After 6am
		$color = "#724f23";
		$img = "morning.png";
	}
	if($hrs > 11){
		$msg = "Good Afternoon";    // After 12pm
		$color = "#3b5998";
		$img = "afternoon.png";
	}
	if($hrs > 16){
		$msg = "Good Evening";      // After 5pm
		$color = "#3E2A8D";
		$img = "evening.png";
	}
	if($hrs > 18){
		$msg = "Good Night";        // After 6pm
		$color = "#e5e5e5";
		$img = "night.png";
	}
	if($hrs > 22 || $hrs < 4){
		$msg = "It's Late";        // After 10pm
		$color = "#e5e5e5";
		$img = "midnight.png";
	}
	return array("msg" => $msg, "color" => $color, "img" => $img);
}

function get_calendar_category($category,$start){
	if($category == "Bussiness Related") $img = "Bussiness_Related.png";
	elseif($category == "Customer Engagement") $img = "Customer_Engagement.png";
	elseif($category == "Worked Related") $img = "Worked_Related.png";
	elseif($category == "Employee Engagement") $img = "Employee_Engagement.png";
	elseif($category == "Meeting") $img = "Worked_Related.png";
	elseif($category == "TIB") $img = "Worked_Related.png";
	else{
		if($start < 15) $img = "Others_morning.png";
		elseif($start >= 15 && $start < 19) $img = "Others_evening.png";
		elseif($start >=19) $img = "Others_night.png";
	}

	return base_url()."assets/img/calendar_category/".$img;
}

function get_ssf_activities(){
	$arr_act = array("Negosiasi Terms & Condition", "Penunjukan Konsultan FS", "Pengumpulan Data & Dokumen", "Penyusunan CBI & NAK", "Market Checking","Proses Persetujuan Kredit","Arrangement Sindikasi","Dokumentasi");
	return $arr_act;
}

function dot_devider(){
	return " · ";
}

function get_commitment_category_title($key_categ){
	if($key_categ == "credit"){ $title_categ = "Credit Pipeline"; }
	else if($key_categ == "dana"){ $title_categ = "Dana Pipeline";}
	else if($key_categ == "fund"){ $title_categ = "Dana Pipeline";}
	else if($key_categ == "ots"){ $title_categ = "Call Report"; }
	else if($key_categ == "account_plan"){ $title_categ = "Account Plan"; }
	else if($key_categ == "other"){ $title_categ = "Other"; }

	return $title_categ;
}

function get_commitment_category_img($category){
	$arr = array("credit" => "refund", "dana" => "cash in hand", "fund" => "cash in hand", "ots" => "check book", "other" => "blog", "account_plan" => "survey");
	if($category) return base_url()."assets/img/icon/".$arr[$category]." - office.png";
	else return $arr;
}

function get_array_permohonan(){
	return array("Permohonan Fasilitas Baru","Tambahan Fasilitas","Perpanjangan Fasilitas","Perubahan Syarat","Restrukturisasi","Others");
}

function get_directorate_priority($dir){
	if($dir == "Corporate Banking") return 1;
}

function get_arr_segment_ap(){
	return array("Wholesale","Value Chain","Subsidiaries");
}

function get_arr_directorate(){
	return array("Corporate Banking","Commercial Banking","Digital Banking & Technology","Finance & Treasury");
}

function get_raker_component($category){
	$arr_prod = array("FBI", "Dana", "Kredit", "VST", "Culture");
	$arr_icon = array("purse - office", "money transfer - office", "donate - office", "gondola - office", "art - office");
	$arr_title = array("Fee Based Income", "Dana", "Kredit", "Corporate Solution", "Culture");
	$arr_color = array(3,1,5,7,9);
	$i=0;
	foreach($arr_prod as $row){
		if($category == $row){
			$arr['icon'] = $arr_icon[$i];
			$arr['title'] = $arr_title[$i];
			$arr['color'] = $arr_color[$i];
			break;
		}
		$i++;
	}
	return $arr;
}

function get_ftp_tenor($tenor, $tenor_type){
	if($tenor_type != "Hari") return $tenor." ".$tenor_type;
	else{
		if(1<=$tenor && $tenor<=4) return "1 s/d 4 Hari";
		elseif(5<=$tenor && $tenor<=12) return "5 s/d 12 Hari";
		elseif(13<=$tenor && $tenor<=20) return "13 s/d 20 Hari";
		elseif(21<=$tenor && $tenor<=31) return "21 s/d 28 Hari";
	}
}

function get_year_eom_array($year){
	$arr_eom = array();
	for($i=1; $i<=12; $i++){
		$time = $year."-".$i."-1";
		$arr_eom[$i] = date("Y-m-t", strtotime($time));
	}
	return $arr_eom;
}

function get_date_where($start,$end){
}

function loading_sign(){
	echo "<div class=\"center_text\">"
	."<img style=\"height:40px; margin-bottom:5px;\" src=\"".base_url()."assets/img/loader_images/loading.gif\">"
	."<div>Loading . . .</div>"
	."</div>";
}

function user_display($user){
	$user_name_words = explode(" ",$user['full_name']);
	$user_disp = $user_name_words[0];
	if(strlen($user_disp) < 3){
		$user_disp = $user_name_words[0]." ".$user_name_words[1];
	}
	if(isset($user['panggilan'])&& $user['panggilan']){
		$user_disp = $user['panggilan'];
	}

	return $user_disp;
}

function get_user_nick_name($user){
	if(isset($user->panggilan)&& $user->panggilan){
		$user_disp = $user->panggilan;
	}
	else{
		$user_name_words = explode(" ",$user->full_name);
		$user_disp = $user_name_words[0];
		if(strlen($user_disp) < 3){
			$user_disp = $user_name_words[0]." ".$user_name_words[1];
		}
	}
	return $user_disp;
}

function write_this_instead_of($long, $short, $max){
	if(strlen($long) > $max){
		echo $short;
	}else{echo $long;}
}

function return_menu_array($menu){
	if($menu == "Performance Information"){
		return array("Dana","Kredit","Fee Based","Profitability","Biaya","DS Files","Special Rate","Required Yield","Commitment Monitoring");
	}
	elseif($menu == "Customer Information"){
		return array("CB Customer","CES, CBI & Call Report","Obligo Monitoring","Sales Pipeline");
	}
	elseif($menu == "Internal Information"){
		return array("Meeting Room","Legal & Compliance","Human Resources","Calendar of Event","Product Knowledge","Internal Sharing","CBIC Tube","FTP Rate","Informasi Kurs");
	}
	elseif($menu == "Market & Industry"){
		return array("Market Outlook","Portfolio Checking","Risk Knowledge","Industry Peers");
	}
	else{
		return array("My Page","My Report","My Tools","Search Page");
	}
}

function get_user_wallpaper($user){
	if(strtoupper($user->group) == "CORPORATE BANKING 6"){$wp = "farm.png";}
	elseif(strtolower($user->department) == "sector airport"){$wp = "airport.png";}
	elseif(strtolower($user->department) == "sector infrastructure & toll road"){$wp = "bridge.png";}
	elseif(strtolower($user->department) == "sector construction"){$wp = "construction.png";}
	elseif(strtolower($user->department) == "sector sea port & transportation"){$wp = "seaport.png";}
	elseif(strtolower($user->department) == "sector mining"){$wp = "mining.png";}
	elseif(strtolower($user->department) == "sector oil & gas i"){$wp = "oil & gas 1.png";}
	elseif(strtolower($user->department) == "sector oil & gas ii"){$wp = "oil & gas 2.png";}
	elseif(strtolower($user->department) == "sector information, communication & technology"){$wp = "bts.png";}
	elseif(strtolower($user->department) == "sector electricity"){$wp = "lightning.png";}
	elseif(strtolower($user->department) == "sector property"){$wp = "property.png";}
	elseif(strtolower($user->department) == "management information support"){$wp = "mis.png";}

	else{$wp = "gedung ny.jpg";}

	$wp = "assets/img/group_wallpaper/".$wp;

	return $wp;
}

function get_user_position(){
	return array("Director","Group Head","Department Head","Officer","Sekretaris","all");
}

function get_thumbnail_src($src){
	$src_ex = explode("/", $src);
	$return = "";
	for($i=0; $i<(count($src_ex) - 1); $i++){
		$return = $return.$src_ex[$i]."/";
	}
	return $return."thumb"."/".$src_ex[count($src_ex) - 1]."_thumbnail.jpg";
}

function data_biaya(){
	$arr_res = array();
	$arr_res[1] = array("group" => "CB1", "rkap" => 21450, "anggaran" => 7223, "real" => 7684, "rkap_pr" => 1753, "anggaran_pr" => 635, "real_pr" => 634);
	$arr_res[2] = array("group" => "CB2", "rkap" => 18171, "anggaran" => 6161, "real" => 6605, "rkap_pr" => 1442, "anggaran_pr" => 522, "real_pr" => 515);
	$arr_res[3] = array("group" => "CB3", "rkap" => 17598, "anggaran" => 5993, "real" => 6382, "rkap_pr" => 1309, "anggaran_pr" => 474, "real_pr" => 474);
	$arr_res[4] = array("group" => "CB4", "rkap" => 17899, "anggaran" => 6055, "real" => 7023, "rkap_pr" => 1435, "anggaran_pr" => 520, "real_pr" => 517);
	$arr_res[5] = array("group" => "CB5", "rkap" => 14683, "anggaran" => 5008, "real" => 5312, "rkap_pr" => 1197, "anggaran_pr" => 434, "real_pr" => 433);
	$arr_res[6] = array("group" => "CB6", "rkap" => 13540, "anggaran" => 4601, "real" => 4799, "rkap_pr" => 1064, "anggaran_pr" => 385, "real_pr" => 379);
	$arr_res[7] = array("group" => "CS", "rkap" => 12021, "anggaran" => 4099, "real" => 4465, "rkap_pr" => 934.00, "anggaran_pr" => 338, "real_pr" => 322);
	//$arr_res[8] = array("group" => "DCOR", "rkap" => 0, "anggaran" => 0, "real" => 63, "rkap_pr" => 0, "anggaran_pr" => 0, "real_pr" => 0);

	return $arr_res;
}

function get_biaya_time(){
	$result['year'] = 2019;
	$result['month'] = 5;
	return $result;
}

function cmp($a, $b){
	if($a['gap'] == $b['gap']){
		return 0;
	}
	return ($b['gap']<$a['gap']) ? -1:1;
}
function get_group_buc($group){
	$group = explode(" ", $group);
	$res = $group[2];
	/*if($res == 3){$res = 5;}
	elseif($res == 5){$res = 3;}
	elseif($res == 4){$res = 6;}
	elseif($res == 6){$res = 4;}*/
	return $res;
}

function get_user_buc_like($user){

}

function get_user_group_filter($user){
	$group_ex = explode(" ", $user['group']);
	$data['group'] = ""; $data['buc'] = "CB";
	if($user['role'] != "Director" && ($group_ex[0] == "CORPORATE" && $group_ex[1] == "BANKING") && !is_user_role($user,"SYSTEM ADMINISTRATOR") && !is_user_role($user,"AP ADMINISTRATOR")){
		$data['group'] = $user['group'];

		$buc_num = get_group_buc($data['group']);
		$data['buc'] = "CB".$buc_num;
	}
	if($data['group']){$data['group_title'] = "CB".$group_ex[2];}
	else{$data['group_title'] = "Dir CB";}

	return $data;
}

function get_realization_color($pct){
	if($pct<95){return "red";}
	elseif($pct>=100){return "green";}
	else{return "orange";}
}

function get_files_upload_desc($code){
	if($code == "sr_atch"){
		return "Nota Special Rate";
	}
	else{
		return long_text($code,100);
	}
}

function first_letter_text($string, $max){
	if(strlen($string) > $max){
		return get_first_letter($string);
	}else{return check_all_big($string);}
}

function first_letter_text_real($string, $max){
	if(strlen($string) > $max){
		return get_first_letter($string);
	}else{return $string;}
}

function get_first_letter($string){
	$string = strtoupper($string);
	$words = explode(" ", $string);
	$acronym = "";

	foreach ($words as $w) {
		$stop_letter = array("&","OF");
		if(!(in_array($w, $stop_letter))){
			if($w) $acronym .= $w[0];
		}
	}
	return $acronym;
}

function get_ext_icon($ext){
	$arr_img = array('.jpg','.png','.jpeg');

	if($ext == ".doc" || $ext == ".docx"){$img = "word - color";}
	elseif($ext == ".xls" || $ext == ".xlsx"){$img = "xlx - color";}
	elseif($ext == ".ppt" || $ext == ".pptx"){$img = "ppt - color";}
	elseif($ext == ".pdf"){$img = "pdf - color";}
	elseif(in_array($ext, $arr_img)){$img = "gallery - color";}
	else{$img = "copy - color";}

	return get_icon_url($img.'.png');
}

function get_group_title($group,$dept){
	if($dept){
		if(strlen($dept)>15){$group_title = get_first_letter($dept);}
		else{$group_title = $dept;}
	}
	elseif($group){
		$group_ex = explode(" ", $group);
		$group_title = "CB".$group_ex[2];
	}
	else{$group_title = "Dir. Corporate Banking";}

	return $group_title;
}

function get_group_title_real($user){
	if(strtoupper($user['position']) == "DIRECTOR") return get_long_text($user['directorate'],200);
	elseif(strtoupper($user['position']) == "GROUP HEAD") return get_long_text($user['group'],200);
	else return get_long_text($user['dept'],200);
}

function plus_icon(){
	$src = get_icon_url('plus - tosca.png');
	echo "<img style=\"height:20px;\" src='".$src."'>";
}

function get_s($num){
	if($num > 1){echo "s";}
}

function sales_pipeline_icon($cycle){
	$num = explode("Cycle-", $cycle)[1];
	$arr_icon = array("reading","fine print","idea","training","blog","collaboration","handshake","gps receiving","cancel");
	icon_url($arr_icon[$num-1]." - office.png");
}

function twcp_icon($cycle){
	$num = $cycle-1;
	$arr_icon = array("idea","collaboration","reading","podium","blog","training","fine print","handshake","cancel");
	icon_url($arr_icon[$cycle]." - office.png");
}

function get_file_ext($ext){
	$ext = strtolower($ext);
	if($ext == ".doc" || $ext == ".docx"){$img = "word";}
	elseif($ext == ".xls" || $ext == ".xlsx"){$img = "xlx";}
	elseif($ext == ".ppt" || $ext == ".pptx"){$img = "ppt";}
	elseif($ext == ".png" || $ext == ".jpg"){$img = "gallery";}
	else{$img = "pdf";}
	return $img;
}

function get_file_ext_office($ext){
	$ext = strtolower($ext);
	if($ext == ".doc" || $ext == ".docx"){$img = "word";}
	elseif($ext == ".xls" || $ext == ".xlsx"){$img = "xls";}
	elseif($ext == ".ppt" || $ext == ".pptx"){$img = "ppt";}
	elseif($ext == ".png" || $ext == ".jpg"){$img = "images";}
	elseif($ext == ".pdf"){$img = "pdf";}
	else{$img = "file";}
	return $img." - office.png";
}

function get_ext_office($ext){
	return get_icon_url(get_file_ext_office($ext));
}

function get_perf_table_title($title){
	if($title == "cbgroup"){return "group";}
	if($title == "cbdept"){return "dept";}
	elseif($title == "bikole"){return "kolektabilitas";}
	else{return $title;}
}

function get_report_date($report_type,$last_date){

	$last_date_array = explode("-", $last_date);
	$last_month_mtd = $last_date_array[1]-1; $last_year_mtd = $last_date_array[0];
	if($last_date_array[1]==1){
		$last_month_mtd = 12;
		$last_year_mtd=$last_date_array[0] -1;
	}

	if($report_type == "YoY"){
		$date=date('Y-m-t',mktime(0, 0, 0, $last_date_array[1], cal_days_in_month(CAL_GREGORIAN, $last_date_array[1], $last_date_array[0]-1), $last_date_array[0]-1)).";"
		.date('Y-m-d',mktime(0, 0, 0, $last_date_array[1], $last_date_array[2], $last_date_array[0]));
	}

	elseif($report_type == "YtD"){
		$date=date('Y-m-t',mktime(0, 0, 0, '12', cal_days_in_month(CAL_GREGORIAN, 12, $last_date_array[0]-1), $last_date_array[0]-1)).";";
		// get last date of last month in previous year
		$first_month=date('m',mktime(0, 0, 0, '01', cal_days_in_month(CAL_GREGORIAN, 1, $last_date_array[0]), $last_date_array[0]));
		$this_month=date('m',mktime(0, 0, 0, $last_date_array[1], cal_days_in_month(CAL_GREGORIAN, $last_date_array[1], $last_date_array[0]), $last_date_array[0]));
		$gap_month=$this_month - $first_month;
		for($i=1;$i<=$gap_month;++$i){
			if($i==2){
				$date=$date.date('Y-m-t',mktime(0, 0, 0, "02", "01", $last_date_array[0])).";";
			}else{
				$date=$date.date('Y-m-t',mktime(0, 0, 0, $i, cal_days_in_month(CAL_GREGORIAN, $i, $last_date_array[0]), $last_date_array[0])).";";
			}
		}
		$date=$date.date('Y-m-d',mktime(0, 0, 0, $last_date_array[1], $last_date_array[2], $last_date_array[0]));
	}

	elseif($report_type == "MtD"){
		$date=date('Y-m-t',mktime(0, 0, 0, $last_month_mtd, cal_days_in_month(CAL_GREGORIAN, $last_month_mtd, $last_year_mtd), $last_year_mtd)).";"; // get last date of last month within same year

		for($i=1;$i<=$last_date_array[2];++$i){
			if($i==$last_date_array[2]){
				$date=$date.date('Y-m-d',mktime(0, 0, 0, $last_date_array[1], $i, $last_date_array[0]));
			}else{
				$date=$date.date('Y-m-d',mktime(0, 0, 0, $last_date_array[1], $i, $last_date_array[0])).";";
			}
		}
	}
	$array_date=explode(';', $date);
	return $array_date;
}

function get_report_date_custom($report_type,$start_date,$end_date){
	if($report_type == "bulanan"){
		if($end_date<$start_date){$array_date = array($end_date);}

		else{
			$date=$start_date.";";
			$start_ex = explode("-", $start_date);
			$end_ex = explode("-", $end_date);

			for($i = $start_ex[0];$i<=$end_ex[0];$i++){
				$start_m = 1; $end_m = 12;
				if($i == $start_ex[0]){$start_m = $start_ex[1];}
				if($i == $end_ex[0]){$end_m = $end_ex[1];}

				for($j=$start_m;$j<$end_m;$j++){
					$date = $date.date('Y-m-d',mktime(0, 0, 0, $j, cal_days_in_month(CAL_GREGORIAN, $j, $i), $i)).";";
				}
			}
			$date = $date.$end_date.";";
			$array_date=explode(';', $date);
		}

	}elseif ($report_type == "harian") {
		$array_date = array("range_date",$start_date,$end_date);
	}
	return $array_date;
}

function get_update_sub_modul($sub_modul){
	if($sub_modul=='Internal Sharing'){return 'mysharing';}
	elseif($sub_modul=='Tokosidia'){return 'mysharing';}
	elseif($sub_modul=='Calendar of Event'){return 'calendar';}
	elseif($sub_modul=='Market Outlook'){return 'market';}
	elseif(($sub_modul=='Legal & Compliance News')){return 'compliance';}
	elseif(($sub_modul=='Human Resources')){return 'hr';}
	elseif(($sub_modul=='DS Files')){return 'dsfile';}
}

function get_code_sub_modul($sub_modul){
	if($sub_modul=='market'){return 'Market Outlook';}
	elseif(($sub_modul=='compliance')){return 'Legal & Compliance News';}
	elseif(($sub_modul=='hr')){return 'Human Resources';}
}

function get_pct_tgt_realz($realz, $target, $data){
	if(is_object($target)){
		$target = $target->target;
	}

	if(is_object($realz)){
		$realz =  $realz->endbal;
	}

	if($realz){$data['realization'] = $realz;}
	else{$data['realization'] = 0;}

	if($target && $target!=0){
		$data['target'] = $target;
		$data['pct'] = ($data['realization'])/($data['target'])*100;
	}else{
		if($data['realization']) $data['pct'] = 100;
		else $data['pct'] = 0;
		
		$data['target'] = 0;
	}
	return $data;
}

function pipeline_title($pie){
	if($pie=='group_cb'){ $title='Group';}
	elseif($pie=='client_tier'){$title='Tiering';}
	elseif($pie=='progres'){$title='Progress';}
	elseif(($pie=='jenis_pembiayaan')){$title='Type Of Credit';}
	elseif(($pie=='sektor')){$title='Sektor';}
	elseif(($pie=='infra')){$title='Infrastruktur';}
	elseif(($pie=='valuta')){$title='Valuta';}
	return $title;
}

function long_text($string,$char){
	$ex = explode(" ", $string);
	$words = "";
	foreach($ex as $row){
		$row_word = check_all_big($row);
		$words.=$row_word." ";
	}
	echo substr($words, 0,$char);
	//echo ucwords(strtolower(substr($string,0,$char)));
	if((strlen($string))>$char){echo "...";}
}

function long_text_real($string,$char){
	echo substr($string,0,$char);
	if((strlen($string))>$char){echo "...";}
}

function check_all_big($string){
	$arr_all_big = array("PLN","DCOR","HCBP","BOD","SEVP","PTPN","II","III","IV","VI","XIII","LPDP","BPDP","BPJS","XL","BOD","KMK","KI","AKR","SME","IDR","(AKM)","CASA", "MKM", "KTA", "PWE", "LC", "KPR", "MGM", "FX", "EDC","ATM","DF","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII","SSF","PT","FBI","II","III","AKR","KAI","IBFI");
	if(!in_array(strtoupper($string), $arr_all_big)) return ucwords(strtolower($string));
	else return strtoupper($string);
}

function get_first_letter_big($string){
	return ucwords(strtolower($string));
}

function get_long_text($string,$char){
	$return_result = "";
	$ex = explode(" ", $string);
	$words = "";
	foreach($ex as $row){
		$row_word = check_all_big($row);
		$words.=$row_word;
		if($row != end($ex)) $words.=" ";
	}
	$return_result = substr($words, 0,$char);
	//echo ucwords(strtolower(substr($string,0,$char)));
	if((strlen($string))>$char){$return_result .= "...";}
	return $return_result;
}

function get_long_text_real($string,$char){
	$return_result = substr($string, 0,$char);
	if((strlen($string))>$char){$return_result .= "...";}
	return $return_result;
}

function array_profit(){
	$array_profit = array("pend_bunga","biaya_ftp","asset_spread","biaya_bunga","pend_ftp","liability_spread","pend_bunga_bersih","ppap","pend_bersih_asset","premi_penjaminan","pend_bersih_lia","pend_bersih","fee_dan_pend","biaya_opre","biaya_um","biaya_tk","biaya_prom","biaya_lain","kontri_tnp_ppa","kontri_ppa","kontri_intra","kontri_cost","kontri_ppap");
	return $array_profit;
}

function accounting_format($amount){
	if($amount>=0){
		return get_satuan($amount);
	}else{
		return "(".get_satuan(abs($amount)).")";
	}
}


function currency_format($amount){
	if($amount>=0){
		return get_satuan($amount);
	}else{
		return "-".get_satuan(abs($amount));
	}
}

function currency_format_full($amount){
	if($amount>=0){
		$res = explode(" ", get_satuan($amount));
		if(isset($res[1]) && $res[1]){
			if($res[1] == "T") return $res[0]." Trillion";
			elseif($res[1] == "M") return $res[0]." Billion";
			elseif($res[1] == "Jt") return $res[0]." Million";
		}
		else return $res[0];

	}else{
		return "-".get_satuan(abs($amount));
	}
}

function get_satuan($amount){
	if($amount >= 1000000000000){
		$amount = $amount/1000000000000;
		return get_blkg_cmma($amount)." T";
	}elseif($amount >= 1000000000){
		$amount = $amount/1000000000;
		return get_blkg_cmma($amount)." M";
	}elseif($amount >= 1000000){
		$amount = $amount/1000000;
		return get_blkg_cmma($amount)." Jt";
	}elseif($amount>0){
		return get_blkg_cmma($amount);
	}
	else{
		return "-";
	}
}

function get_blkg_cmma($amount){
	$whole = floor($amount);
	$fraction = $amount - $whole;

	if($fraction == 0){$i=0;}
	else{
		if($amount >= 100){
			$i = 0;
		}elseif($amount >=10){
			$i = 1;
		}elseif($amount>0){
			$i = 2;
		}
	}

	return number_format($amount,$i);
}

function get_batas_sp($bawah_val,$atas_val,$bawah_rate,$atas_rate,$val,$rate){
	$result = false;
	if($val>$bawah_val){
		if(($atas_val && ($val<$atas_val)) || ($atas_val==0)){}
	}

return $result;
}

function get_form_element($array){
	$result = array();
	foreach ($array as $row) {
		$result[$row] = $this->input->post($row);
	}
	return $result;
}

function get_arr_peers(){
	return array('cur_ratio','quick_ratio','return_on_avg','operating_pro_mar','net_profit','return_on_avr_asst','ebitda_grow','net_inc_grow','sales_grow','debt_to_equ','debt_to_asst','ltd_to_equ','ebitda_to_liab','leverage_ratio','assets_to','inventory_to','receivable_to','acc_pay_to','fixed_asst_to','sga');
}

function peers_ratio($code){
	if($code == "cur_ratio"){return array("Current Ratio","","Liquidity");}
	elseif($code == "quick_ratio"){return array("Quick Ratio","","Liquidity");}
	elseif($code == "return_on_avg"){return array("Return to Average Equity","%","Profitability");}
	elseif($code == "operating_pro_mar"){return array("Operating Profit Margin","%","Profitability");}
	elseif($code == "net_profit"){return array("Net Profit Margin","%","Profitability");}
	elseif($code == "return_on_avr_asst"){return array("Return to Average Asset","%","Profitability");}
	elseif($code == "ebitda_grow"){return array("Ebitda Growth","%","Growth");}
	elseif($code == "net_inc_grow"){return array("Net Income Growth","%","Growth");}
	elseif($code == "sales_grow"){return array("Sales Growth","%","Growth");}
	elseif($code == "debt_to_equ"){return array("Debt To Equity","%","Solvency");}
	elseif($code == "debt_to_asst"){return array("Debt To Assets","%","Solvency");}
	elseif($code == "ltd_to_equ"){return array("LTD To Equity","%","Solvency");}
	elseif($code == "ebitda_to_liab"){return array("Ebitda To Liabilities","%","Solvency");}
	elseif($code == "leverage_ratio"){return array("Leverage Ratio","%","Solvency");}
	elseif($code == "assets_to"){return array("Assets TO","%","Activity");}
	elseif($code == "inventory_to"){return array("Inventory TO","%","Activity");}
	elseif($code == "receivable_to"){return array("Receivable TO","%","Activity");}
	elseif($code == "acc_pay_to"){return array("Account Payable TO","%","Activity");}
	elseif($code == "fixed_asst_to"){return array("Fixed Asset TO","%","Activity");}
	elseif($code == "sga"){return array("SGA/Sales","%","Activity");}
}

function array_color($i){
	$arr_col = array("#106d80","#189cb8", "#5db9cd","#ff9900","#ffb74c","#ad5b54","#f88379","#faa8a1","#888888","#ababab","#cfcfcf", '#FFEBEE', '#FFCDD2', '#EF9A9A', '#E57373', '#EF5350', '#F44336', '#E53935', '#D32F2F', '#C62828', '#B71C1C', '#FF8A80', '#FF5252', '#FF1744', '#D50000', '#FCE4EC', '#F8BBD0', '#F48FB1', '#F06292', '#EC407A', '#E91E63', '#D81B60', '#C2185B', '#AD1457', '#880E4F', '#FF80AB', '#FF4081', '#F50057', '#C51162', '#F3E5F5', '#E1BEE7', '#CE93D8', '#BA68C8', '#AB47BC', '#9C27B0', '#8E24AA', '#7B1FA2', '#6A1B9A', '#4A148C', '#EA80FC', '#E040FB', '#D500F9', '#AA00FF', '#EDE7F6', '#D1C4E9', '#B39DDB', '#9575CD', '#7E57C2', '#673AB7', '#5E35B1', '#512DA8', '#4527A0', '#311B92', '#B388FF', '#7C4DFF', '#651FFF', '#6200EA', '#E8EAF6', '#C5CAE9', '#9FA8DA', '#7986CB', '#5C6BC0', '#3F51B5', '#3949AB', '#303F9F', '#283593', '#1A237E', '#8C9EFF', '#536DFE', '#3D5AFE', '#304FFE', '#2196F3', '#E3F2FD', '#BBDEFB', '#90CAF9', '#64B5F6', '#42A5F5', '#2196F3', '#1E88E5', '#1976D2', '#1565C0', '#0D47A1', '#82B1FF', '#448AFF', '#2979FF', '#2962FF', '#03A9F4', '#E1F5FE', '#B3E5FC', '#81D4FA', '#4FC3F7', '#29B6F6', '#03A9F4', '#039BE5', '#0288D1', '#0277BD', '#01579B', '#80D8FF', '#40C4FF', '#00B0FF', '#0091EA', '#00BCD4', '#E0F7FA', '#B2EBF2', '#80DEEA', '#4DD0E1', '#26C6DA', '#00BCD4', '#00ACC1', '#0097A7', '#00838F', '#006064', '#84FFFF', '#18FFFF', '#00E5FF', '#00B8D4', '#009688', '#E0F2F1', '#B2DFDB', '#80CBC4', '#4DB6AC', '#26A69A', '#009688', '#00897B', '#00796B', '#00695C', '#004D40', '#A7FFEB', '#64FFDA', '#1DE9B6', '#00BFA5', '#4CAF50', '#E8F5E9', '#C8E6C9', '#A5D6A7', '#81C784', '#66BB6A', '#4CAF50', '#43A047', '#388E3C', '#2E7D32', '#1B5E20', '#B9F6CA', '#69F0AE', '#00E676', '#00C853', '#8BC34A', '#F1F8E9', '#DCEDC8', '#C5E1A5', '#AED581', '#9CCC65', '#8BC34A', '#7CB342', '#689F38', '#558B2F', '#33691E', '#CCFF90', '#B2FF59', '#76FF03', '#64DD17', '#CDDC39', '#F9FBE7', '#F0F4C3', '#E6EE9C', '#DCE775', '#D4E157', '#CDDC39', '#C0CA33', '#AFB42B', '#9E9D24', '#827717', '#F4FF81', '#EEFF41', '#C6FF00', '#AEEA00', '#FFEB3B', '#FFFDE7', '#FFF9C4', '#FFF59D', '#FFF176', '#FFEE58', '#FFEB3B', '#FDD835', '#FBC02D', '#F9A825', '#F57F17', '#FFFF8D', '#FFFF00', '#FFEA00', '#FFD600', '#FFC107', '#FFF8E1', '#FFECB3', '#FFE082', '#FFD54F', '#FFCA28', '#FFC107', '#FFB300', '#FFA000', '#FF8F00', '#FF6F00', '#FFE57F', '#FFD740', '#FFC400', '#FFAB00', '#FF9800', '#FFF3E0', '#FFE0B2', '#FFCC80', '#FFB74D', '#FFA726', '#FF9800', '#FB8C00', '#F57C00', '#EF6C00', '#E65100', '#FFD180', '#FFAB40', '#FF9100', '#FF6D00', '#FF5722', '#FBE9E7', '#FFCCBC', '#FFAB91', '#FF8A65', '#FF7043', '#FF5722', '#F4511E', '#E64A19', '#D84315', '#BF360C', '#FF9E80', '#FF6E40', '#FF3D00', '#DD2C00', '#795548', '#EFEBE9', '#D7CCC8', '#BCAAA4', '#A1887F', '#8D6E63', '#795548', '#6D4C41', '#5D4037', '#4E342E', '#3E2723', '#9E9E9E', '#FAFAFA', '#F5F5F5', '#EEEEEE', '#E0E0E0', '#BDBDBD', '#9E9E9E', '#757575', '#616161', '#424242', '#212121', '#607D8B', '#ECEFF1', '#CFD8DC', '#B0BEC5', '#90A4AE', '#78909C', '#607D8B', '#546E7A', '#455A64', '#37474F', '#263238', '#000000', '#FFFFFF',);
	return $arr_col[$i];
}

function array_color_new($i){
	$arr_col = array("#1bbfe2","#88d3f0","#1ab99b","#8cdccd","#dd5967","#ea9ba3","#ffc80b","#ffe385","#e6e7e8","#c5cdd6","#3f5a78","#dadada","#778c9f","#1bbfe2","#88d3f0","#1ab99b","#dd5967","#ea9ba3","#ffc80b","#ffe385","#e6e7e8","#c5cdd6","#3f5a78","#1bbfe2","#88d3f0","#1ab99b","#8cdccd","#dd5967","#ea9ba3","#ffc80b","#ffe385","#e6e7e8","#c5cdd6","#3f5a78","#778c9f","#1bbfe2","#88d3f0","#1ab99b","#dd5967","#ea9ba3","#ffc80b","#ffe385","#e6e7e8","#c5cdd6","#3f5a78");
	return $arr_col[$i];
}

function array_color_broventh($i){
	$arr_col = array("#1bbfe2","#88d3f0","#1ab99b","#8cdccd","#dd5967","#ea9ba3","#ffc80b","#ffe385","#e6e7e8","#c5cdd6","#3f5a78","#778c9f","#1bbfe2","#88d3f0","#1ab99b","#dd5967","#ea9ba3","#ffc80b","#ffe385","#e6e7e8","#c5cdd6","#3f5a78");
	return $arr_col[$i];
}

function dir_info($id){
	if($id=="rt"){
		$arr['name'] = "Royke Tumilaar";
		$arr['title'] = "Director of Corporate Banking";
		$arr['desc'] = '<p>Mr. Royke Tumilaar is an Indonesian
		citizen. Born in 1964. He is domiciled
		in Jakarta. He was appointed as the
		Director of Corporate Banking of Bank
		Mandiri at the Annual General Meeting of
		Shareholders on March 16, 2015.</p><p><b>Career:
		</b></p><p>He began his professional career at Bank Dagang Negara, where the last position he
		assumed was Professional Staff of Band Dagang Negara Jakarta’s Loan Settlement
		Team. Since 2007, he served as Group Head of Regional Commercial Sales I until May
		2010 and was concurrently appointed Commissioner of Mandiri Sekuritas in August
		2009. Since May 2010, he was named Group Head of Jakarta Commercial Sales until
		May 2011.
		He earned his Economics Degree from Trisakti University (1987) and attained his MBA
		in Finance from the University of Technology, Sydney in 1999.
		</p><p><b>Training course:
		</b></p><p>He had taken part in various training programs and seminars which, inter alia, are:
		Corporate Finance Workshop (2003), High Impact Leadership (2008), Strategic Business
		Leadership Engagement (2011) and Risk Management Certification (2012).<br></p>';
	}elseif($id=="aa"){
		$arr['name'] = "Alexandra Askandar";
		$arr['title'] = "SEVP of Corporate Banking";
		$arr['desc'] = '<p style="margin-bottom: 18px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(72, 72, 72); ">Born in Medan on January 9, 1972. Appointed as Commissioner on October 18, 2011. She obtained her Master of Business Administration degree from Boston University, United States of America, and had participated in banking and corporate finance seminars.</p><p style="margin-bottom: 18px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(72, 72, 72); ">She is currently in-charge as Group Head Syndication, Oil and Gas in Bank Mandiri since 2011. Prior to the position, she had served as Group Head Syndicated and Structured Finance (2009-2010), Department Head VII of Corporate Banking III Group (2006) and Relationship Manager of Corporate Banking Group (2000-2005), Account Manager – Loan Workout Division in Indonesian Bank Restructuring Agency (1999-2000) and ISO 9000 &amp; 14000 Consultant as well as Treasurer in Surveyor Indonesia (1995 -1997).</p>';
	}elseif($id=="dy"){
		$arr['name'] = "Dikdik Yustandi";
		$arr['title'] = "SEVP of Corporate Banking";
		$arr['desc'] = '';
	}
	return $arr;
}

function array_group_color($i){
	$arr_col = array("#189cb8", "#5db9cd","#ff9900","#ffb74c","#888888","#ababab","#cfcfcf");
	return $arr_col[$i];
}

function get_employee_photo_thumb($user){
	if(!$user->profile_picture){
		if(file_exists("assets/uploads/user_photo/thumb/".$user->nik.".jpg_thumbnail.jpg")){
			$url = base_url()."assets/uploads/user_photo/thumb/".$user->nik.".jpg_thumbnail.jpg";
		}else{
			$url = base_url()."assets/img/general/profile.gif";
		}
	}else{
		$ex = explode("/", $user->profile_picture);
		$url = base_url()."assets/uploads/user_profile/thumb/".end($ex)."_thumbnail.jpg";
		
	}
	return $url;
}

function get_employee_photo($user){
	if(!$user->profile_picture){
		if(file_exists("assets/uploads/user_photo/".$user->nik.".jpg")){
			$url = base_url()."assets/uploads/user_photo/".$user->nik.".jpg";
		}else{
			$url = base_url()."assets/img/general/profile.gif";
		}
	}else{
		$url = base_url().$user->profile_picture;
		
	}
	return $url;
}

function employee_photo($user){
	$url = base_url()."assets/general/profile.gif";
	if (!empty($user)) {
		if(!$user->profile_picture){
			if(file_exists("assets/uploads/user_photo/".$user->nik.".jpg")){
				$url = base_url()."assets/uploads/user_photo/".$user->nik.".jpg";
			}else{
				
			}
		}else{
			$url = base_url().$user->profile_picture;
			
		}
	}
	echo "<img alt='John Doe' class='p-2  bg-white rounded-circle' style='width:75px; height: 75px;' src='".$url."'>";

}

function employee_photo_custom($user){
	if(!$user->profile_picture){
		if(file_exists("assets/uploads/user_photo/".$user->nik.".jpg")){
			$url = base_url()."assets/uploads/user_photo/".$user->nik.".jpg";
		}else{
			$url = base_url()."assets/img/general/profile.gif";
		}
	}else{
		$url = base_url().$user->profile_picture;
		
	}
	echo "<img style='width:100%; margin-top:-1px;' src='".$url."'>";
}

function my_photo($user){
	if(!$user['profile_picture']){
		if(file_exists("assets/uploads/user_photo/".$user['nik'].".jpg")){
			$url = base_url()."assets/uploads/user_photo/".$user['nik'].".jpg";
		}else{
			$url = base_url()."assets/img/general/profile.gif";
		}
	}else{
		$url = base_url().$user['profile_picture'];
	}

	echo "<img style='width:100%; margin:0 auto; margin-top:0px; margin-left:0px;' src='".$url."'>";
}


function employee_photo_thumb_small($user){
	if(!$user->profile_picture){
		if(file_exists("assets/uploads/user_photo/thumb/".$user->nik.".jpg_thumbnail.jpg")){
			$url = base_url()."assets/uploads/user_photo/thumb/".$user->nik.".jpg_thumbnail.jpg";
		}else{
			$url = base_url()."assets/img/general/profile.gif";
		}
	}else{
		$ex = explode("/", $user->profile_picture);
		$url = base_url()."assets/uploads/user_profile/thumb/".end($ex)."_thumbnail.jpg";
		
	}
	echo "<img style='width:100%; margin:0 auto; margin-top:0px; margin-left:0px;' src='".$url."'>";
}


function employee_photo_thumb($user){
	if(!$user->profile_picture){
		if(file_exists("assets/uploads/user_photo/thumb/".$user->nik.".jpg_thumbnail.jpg")){
			$url = base_url()."assets/uploads/user_photo/thumb/".$user->nik.".jpg_thumbnail.jpg";
		}else{
			$url = base_url()."assets/img/general/profile.gif";
		}
	}else{
		$ex = explode("/", $user->profile_picture);
		$url = base_url()."assets/uploads/user_profile/thumb/".end($ex)."_thumbnail.jpg";
		
	}
	echo "<img style='width:100%; margin:0 auto; margin-top:0px; margin-left:0px;' src='".$url."'>";
}

function my_photo_thumb($user){
	if(!$user['profile_picture']){
		if(file_exists("assets/uploads/user_photo/thumb/".$user['nik'].".jpg_thumbnail.jpg")){
			$url = base_url()."assets/uploads/user_photo/thumb/".$user['nik'].".jpg_thumbnail.jpg";
		}else{
			$url = base_url()."assets/img/general/profile.gif";
		}
	}else{
		$ex = explode("/", $user['profile_picture']);
		$url = base_url()."assets/uploads/user_profile/thumb/".end($ex)."_thumbnail.jpg";
		//$url = base_url().$user['profile_picture']."_thumbnail.jpg";
	}

	echo "<img style='width:100%; margin:0 auto; margin-top:0px; margin-left:0px;' src='".$url."'>";
}


function component_title($title){
	//$title = str_replace(array('_'), ' ',$title);
	echo "<h4 style='margin:0 0px 10px 0; color:#df756c' class='pull-right'>".$title."</h4>";
	echo "<div style='clear:both'></div>";
}

function component_title_box($title){
	$title = str_replace(array('_'), ' ',$title);
	echo "<h4>".$title."</h4>";
}

function sub_title_link(){
	return "<span style=\"font-size:12px;\" class='glyphicon glyphicon-menu-right'></span>";
}

function sub_title_span($type,$sub_title){
	return "<span class='".$type."_sub_title'>$sub_title</span>";
}

function get_sub_title($contr){
	$arr_financial = array('dsfile','special_rate','required_yield','biaya','profitability','portfolio','credit_pipeline','credit_pipeline_list','fourdx');
	$arr_customer = array('customer_group','sales_pipeline','customer_files','mos');
	$arr_internal = array('hr','product_knowledge','calendar','currency','compliance','watchlist','downgrade','ftp','mysharing','tube','meeting');
	$arr_market = array('market','idata','peers');
	$arr_mypage = array('mypage','mytools','myreport');
	$arr_ots = array('ots');
	$arr_admin = array('user','log_activity');

	if(in_array($contr, $arr_financial)){return "Performance Information";}
	elseif(in_array($contr, $arr_customer)){return "Customer Information";}
	elseif(in_array($contr, $arr_internal)){return "Internal Information";}
	elseif(in_array($contr, $arr_market)){return "Market & Industry (iData)";}
	elseif(in_array($contr, $arr_mypage)){return "My Page";}
	elseif(in_array($contr, $arr_ots)){return "OTS";}
	elseif(in_array($contr, $arr_admin)){return "Admin";}
	elseif($contr == "updates" || !$contr){return "My Page";}
	elseif($contr == "customize_analysis"){return "My Analysis";}
	elseif($contr == "festival"){return "CBIC Festival";}
}

function write_page_sign($contr, $page_name){
	echo "<a href=\"".base_url()."\"><div style=\"float:left; \"><span class=\"glyphicon glyphicon glyphicon-home\" aria-hidden=\"true\" ></span></a></div>";
	echo return_arrow();
	echo "<div class=\"small_to_show\" style=\"float:left; \">".get_sub_title($contr)."</div>";
	if($page_name){
		echo "<div class=\"small_to_show\" style=\"float:left; \">".return_arrow()."</div>";
		echo "<div style=\"float:left; \">".$page_name."</div>";
	}else{echo "</div>";}
}

function get_group($group){
	if($group == "Corporate Banking I" || $group == "CB 1"){return "CORPORATE BANKING 1";}
	elseif($group == "Corporate Banking II" || $group == "CB 2"){return "CORPORATE BANKING 2";}
	elseif($group == "Corporate Banking III" || $group == "CB 3"){return "CORPORATE BANKING 3";}
	elseif($group == "Corporate Banking IV" || $group == "CB 4"){return "CORPORATE BANKING 4";}
	elseif($group == "Corporate Banking V" || $group == "CB 5"){return "CORPORATE BANKING 5";}
	elseif($group == "Corporate Banking VI" || $group == "CB 6"){return "CORPORATE BANKING 6";}
	elseif($group == "Corporate Banking VII" || $group == "CB 7"){return "CORPORATE BANKING 7";}
	elseif($group == "CBS"){return "CORPORATE SOLUTION";}
	elseif($group == "GVI 1"){return "GOVERNMENT & INSTITUTIONAL 1";}
	elseif($group == "GVI 2"){return "GOVERNMENT & INSTITUTIONAL 2";}
	elseif($group == "GVP"){return "GOVERNMENT PROGRAM";}
	else{return $group;}
}

function get_db_product($product){
	if(in_array($product, array('CASA','GIRO','TABBIS','DEPO','DOC','TAB'))){
		return "mfund";
	}
	elseif (in_array($product, array('KMK','KI','TR'))) {
		return "mcredit";
	}
}
function get_array_status(){
	return array("Not Started","On Progress","Delay","Done");
}
function status_font_color($status){
	if($status == "On Progress"){return "black";}
	elseif($status == "Delay"){return "white";}
	elseif($status == "Potential to be Delayed"){return "white";}
	elseif($status == "Done"){return "white";}
	elseif($status == "Not Started"){return "white";}
}
function status_color($status){
	if($status == "On Progress"){return "#67cb7a";}
	elseif($status == "Delay"){return "#da635d";}
	elseif($status == "Potential to be Delayed"){return "#ffcc00";}
	elseif($status == "Done"){return "#08c";}
	elseif($status == "Not Started"){return "#8e8e93";}
}

function status_soft_color($status){
	if($status == "On Progress" || $status == "Ongoing"){return "#e0f4e4";}
	elseif($status == "Delay"){return "#f3d0ce";}
	elseif($status == "Potential to be Delayed"){return "#ffea99";}
	elseif($status == "Done"){return "#cce7f4";}
	elseif($status == "Not Started"){return "#d2d2d2";}
}
function arr_4dx_category(){
	return  array('credit', 'fund', 'fee', 'other');
}
function arr_initiative_category(){
	return  array('tiering', 'bis_process','service','rm_ca','vst', 'cbic', 'it_cpx');
}
function fourdx_categ($id){
	if($id=="credit"){return "Kredit";}
	elseif($id=="fund"){return "Dana";}
	elseif($id=="nclouts"){return "NCL Outs";}
	elseif($id=="fee"){return "Fee Based";}
	elseif($id=="alliance"){return "Alliance";}
	elseif($id=="other"){return "Others";}
	elseif($id=="cs"){return "Corp. Services";}
	elseif($id=="mis"){return "MIS";}
	elseif($id=="dcor"){return "DCOR";}
	elseif($id=="tiering"){return "Cilent Tiering";}
	elseif($id=="rm_ca"){return "RM & CA";}
	elseif($id=="bis_process"){return "Bussiness Process Re-engineering";}
	elseif($id=="cbic"){return "CBIC";}
	elseif($id=="it_cpx"){return "IT Capex";}
	elseif($id=="service"){return "Service Privileges";}
	elseif($id=="vst"){return "Value Solution Team";}
}
function draw_category_icon($id){
	if($id=="credit"){return icon_url("money transfer - office.png");}
	elseif($id=="fund"){return icon_url("donate - office.png");}
	elseif($id=="fee"){return icon_url("coins - office.png");}
	elseif($id=="mis"){return icon_url("multiple devices - office.png");}
	else{return icon_url("book shelf - office.png");}
}
function icon_url($img){
	echo base_url()."assets/img/icon/".$img;
}
function get_icon_url($img){
	return base_url()."assets/img/icon/".$img;
}
function get_knowledge_info($sub_modul){
	$info = array();
	if($sub_modul == "structure"){
		$info = array('modul' => "organization", 'modul_title' => "Organisasi", 'sub_title'=>"Struktur Organisasi");
	}elseif($sub_modul == "ownership"){
		$info = array('modul' => "organization", 'modul_title' => "Organisasi", 'sub_title'=>"Ownership");
	}elseif($sub_modul == "model"){
		$info = array('modul' => "business", 'modul_title' => "Model Bisnis", 'sub_title'=>"Model Bisnis Nasabah");
	}elseif($sub_modul == "product"){
		$info = array('modul' => "business", 'modul_title' => "Model Bisnis", 'sub_title'=>"Potensi Product Perbankan");
	}elseif($sub_modul == "sales"){
		$info = array('modul' => "business", 'modul_title' => "Model Bisnis", 'sub_title'=>"Customer Sales");
	}elseif($sub_modul == "distribution"){
		$info = array('modul' => "branches", 'modul_title' => "Sebaran Bisnis", 'sub_title'=>"Sebaran Bisnis Nasabah");
	}elseif($sub_modul == "product_reg"){
		$info = array('modul' => "branches", 'modul_title' => "Sebaran Bisnis", 'sub_title'=>"Potensi Product Perbankan Wilayah");
	}elseif($sub_modul == "model_vc"){
		$info = array('modul' => "value_chain", 'modul_title' => "Value Chain", 'sub_title'=>"Model Bisnis Value Chain");
	}elseif($sub_modul == "distribution_vc"){
		$info = array('modul' => "value_chain", 'modul_title' => "Value Chain", 'sub_title'=>"Sebaran Bisnis Value Chain");
	}elseif($sub_modul == "support"){
		$info = array('modul' => "value_chain", 'modul_title' => "Value Chain", 'sub_title'=>"Dukungan Anchor Client");
	}elseif($sub_modul == "visi"){
		$info = array('modul' => "vision", 'modul_title' => "Company Profile", 'sub_title'=>"Visi Misi");
	}elseif($sub_modul == "value"){
		$info = array('modul' => "vision", 'modul_title' => "Company Profile", 'sub_title'=>"Nilai Perusahaan");
	}elseif($sub_modul == "strategy"){
		$info = array('modul' => "vision", 'modul_title' => "Company Profile", 'sub_title'=>"Strategi Perusahaan");
	}elseif($sub_modul == "priority"){
		$info = array('modul' => "vision", 'modul_title' => "Company Profile", 'sub_title'=>"Prioritas Perusahaan");
	}elseif($sub_modul == "target"){
		$info = array('modul' => "vision", 'modul_title' => "Company Profile", 'sub_title'=>"Target Bisnis");
	}elseif($sub_modul == "strength"){
		$info = array('modul' => "swot", 'modul_title' => "SWOT", 'sub_title'=>"Strengths");
	}elseif($sub_modul == "weakness"){
		$info = array('modul' => "swot", 'modul_title' => "SWOT", 'sub_title'=>"Weaknesses");
	}elseif($sub_modul == "opportunity"){
		$info = array('modul' => "swot", 'modul_title' => "SWOT", 'sub_title'=>"Opportunities");
	}elseif($sub_modul == "threat"){
		$info = array('modul' => "swot", 'modul_title' => "SWOT", 'sub_title'=>"Threats");
	}elseif($sub_modul == "impact"){
		$info = array('modul' => "industry", 'modul_title' => "Industry", 'sub_title'=>"Industy Impact to Bussiness");
	}elseif($sub_modul == "general_analysis"){
		$info = array('modul' => "general_analysis", 'modul_title' => "BMRI Relation", 'sub_title'=>"Posisi BMRI di Mata Nasabah");
	}elseif($sub_modul == "product_voc"){
		$info = array('modul' => "voc", 'modul_title' => "Voice of Client", 'sub_title'=>"Client Voice about Product");
	}elseif($sub_modul == "service_voc"){
		$info = array('modul' => "voc", 'modul_title' => "Voice of Client", 'sub_title'=>"Client Voice about Services");
	}elseif($sub_modul == "rm_voc"){
		$info = array('modul' => "voc", 'modul_title' => "Voice of Client", 'sub_title'=>"Client Voice about Relationship Manager");
	}
	$info['sub'] = $sub_modul;
	return $info;
}

function is_user_role($user,$role){
	if(is_array($user)){
		$arr_role = explode(";",$user['role']);
		$user_role = $user['role'];
	}else{
		$arr_role = explode(";",$user->role);
		$user_role = $user->role;
	}

	if(($user_role == $role || in_array($role,$arr_role)) || (in_array("SYSTEM ADMINISTRATOR", $arr_role) && $role != "MEGA ADMINISTRATOR")){
		return true;
	}
}

function is_user_role_only($user,$role){
	if(is_array ( $user )){
		$arr_role = explode(";",$user['role']);
		$user_role = $user['role'];
	}else{
		$arr_role = explode(";",$user->role);
		$user_role = $user->role;
	}

	if(($user_role == $role || in_array($role,$arr_role)) || (in_array("MEGA ADMINISTRATOR", $arr_role))){
		return true;
	}
}

function does_user_role($role){
	$user = $this->session->userdata('userdb');
	$arr_role = explode(";",$user['role']);
	if(($user['role'] == $role || in_array($role,$arr_role)) || in_array("SYSTEM ADMINISTRATOR", $arr_role)){
		return true;
	}
}

function make_dir($path){
	if (!is_dir($path)) {
		mkdir($path, 0777, true);
	}
}
function upload_config($upload_path){
	$full_path = "assets/uploads/".$upload_path;
	if (!is_dir($full_path)) {
		mkdir($full_path, 0777, true);
	}
	$config = array(
		'upload_path' => $full_path,
		'allowed_types' => "*",
		'overwrite' => FALSE,
		'max_size' => "2048000000",
		'maintain_ratio' => TRUE,
	);
	return $config;
}

function upload_config_full_url($upload_path){
	$full_path = $upload_path;
	if (!is_dir($full_path)) {
		mkdir($full_path, 0777, true);
	}
	$config = array(
		'upload_path' => $full_path,
		'allowed_types' => "*",
		'overwrite' => FALSE,
		'max_size' => "2048000000",
		'maintain_ratio' => TRUE,
	);
	return $config;
}

function return_growth_type($type){
	if($type=="MtD"){return "Month to Date";}
	elseif($type=="YtD"){return "Year to Date";}
	else{return "Year on Year";}
}
function get_disabled($submenu,$urls){
	if(is_array($urls)){
		foreach($urls as $url){
			if($submenu == $url){
				echo "selected";
				break;
			}
		}
	}else{
		if($submenu == $urls){
			echo "selected";
		}
	}
}

function get_breadcrumb_menu($contr, $func, $type, $id){
	$arr_bc = array("portal","portfolio","fund","credit","fee","obligo","customer_group","customer_files");
	$arr_perf = array("portfolio","fund","credit","fee");
	$arr_cust = array("obligo","customer_group","customer_files");
	if(in_array($contr,$arr_bc)){
		echo "<div style=\"padding-left:20px; float:left; color:#333\"><a href='".base_url()."'><span class=\"glyphicon glyphicon glyphicon-home\" aria-hidden=\"true\" ></span></a></div>";
		echo return_arrow();
		if(in_array($contr,$arr_perf)){
			echo "<div style=\"margin-left:5px; float:left; color:#333; font-size:14px;\"><a href='".base_url()."portfolio/realization'>Performance</a></div>";
			echo return_arrow();
			echo "<div style=\"margin-left:5px; float:left; color:#333\">
			<button class=\"btn btn-link\" onclick=\"toggle_visibility('menu1')\">".return_contr_func_real_name($contr)."</span></button>
			<div class=\"bc_menu\" id=\"menu1\">
			<div><a href='".base_url()."portfolio/realization'>Summary</a></div>
			<div><a href='".base_url()."fund/summary'>Dana</a></div>
			<div><a href='".base_url()."credit/summary'>Kredit</a></div>
			<div><a href='".base_url()."fee/summary'>Fee Based</a></div>
			</div>
			</div>";
			if($contr != "portfolio"){
				$prod_add = "";
				if($func!="summary" && $func!="special_rate" && $func!="product"){$prod_add = return_contr_func_real_name($contr);}
				echo return_arrow();
				echo "<div style=\"margin-left:5px; float:left; color:#333\">
				<button class=\"btn btn-link\" onclick=\"toggle_visibility('menu2')\">".return_contr_func_real_name($func)." ".$prod_add."</span></button>
				<div class=\"bc_menu\" id=\"menu2\">
				<div><a href='".base_url().$contr."/summary'>Summary</a></div>
				<div><a href='".base_url().$contr."/growth'>Pergerakan ".return_contr_func_real_name($contr)."</a></div>
				<div><a href='".base_url().$contr."/realization'>Realisasi ".return_contr_func_real_name($contr)."</a></div>";
				if($contr == "fund"){
					echo "<div><a href='".base_url().$contr."/special_rate'>Special Rate</a></div>";
				}elseif($contr == "credit"){
					echo "<div><a href='".base_url().$contr."/monitoring'>Monitoring ".return_contr_func_real_name($contr)."</a></div>";
				}elseif($contr == "fee"){
					echo "<div><a href='".base_url().$contr."/product'>Komposisi Product</a></div>";
				}
				if($contr != "fee"){
					echo "<div><a href='".base_url().$contr."/pipeline'>Pipeline ".return_contr_func_real_name($contr)."</a></div>";
				}
				echo	"</div>";
			}
		}
		if(in_array($contr,$arr_cust)){
			echo "<div style=\"margin-left:5px; float:left; color:#333; font-size:14px;\"><a href='".base_url()."customer_group/search'>Customer</a></div>";
			if($func != "search"){
				echo return_arrow();
				echo "<div style=\"margin-left:5px; float:left; color:#333\">";
				if($contr=="customer_files"){echo "<button class=\"btn btn-link\" onclick=\"toggle_visibility('menu1')\">Files</span></button>";}
				elseif($contr=="obligo"){echo "<a href='".base_url()."obligo/summary/'>Obligo Monitoring</a>";}
				else{echo "<button class=\"btn btn-link\" onclick=\"toggle_visibility('menu1')\">".return_contr_func_real_name($func)."</span></button>";}

				echo	"<div class=\"bc_menu\" id=\"menu1\">
				<div><a href='".base_url()."performance/summary'>Summary</a></div>
				<div><a href='".base_url()."customer_group/fund/".$type."/".$id."'>Dana</a></div>
				<div><a href='".base_url()."customer_group/credit/".$type."/".$id."'>Kredit</a></div>
				<div><a href='".base_url()."customer_group/fee/".$type."/".$id."'>Fee Based</a></div>";
				if($type=="customer"){
					echo "<div><a href='".base_url()."customer_group/fee/".$type."/".$id."'>Files</a></div>
					<div><a href='".base_url()."obligo/summary/".$type."/".$id."'>Obligo Monitoring</a></div>";
				}
				echo	"</div>
				</div>";
			}
		}
		if($contr == "portal"){
			echo "<div style=\"margin-left:5px; float:left; color:#333; font-size:14px;\"><a href='".base_url()."portfolio/realization'>RING Portal</a></div>";
			echo return_arrow();
			echo "<div style=\"margin-left:5px; float:left; color:#333; font-size:14px;\"><a href='".base_url()."portfolio/realization'>Customer Information</a></div>";
		}
		echo "</div>";
	}
}

function return_arrow(){
	return "<div style=\"margin-left:5px; margin-right:5px; float:left; color:#c3c3c3; font-size:16px;\"><span class=\"glyphicon glyphicon glyphicon-menu-right\" aria-hidden=\"true\"></span></div>";
}

function return_contr_func_real_name($param){
	if($param=="portfolio"){return "Summary";}
	elseif($param=="fund"){return "Dana";}
	elseif($param=="credit"){return "Kredit";}
	elseif($param=="fee"){return "Fee Based";}
	elseif($param=="summary"){return "Summary";}
	elseif($param=="growth"){return "Pergerakan";}
	elseif($param=="realization"){return "Realisasi";}
	elseif($param=="pipeline"){return "Pipeline";}
	elseif($param=="special_rate"){return "Special Rate";}
	elseif($param=="monitoring"){return "Monitoring";}
	elseif($param=="product"){return "Komposisi Product";}
	elseif($param=="portal"){return "RING Portal";}
}

function get_subordinate($param){
	$param = strtolower($param);
	if($param=="direktur" || $param=="director"){
		return "group head";
	}else if($param=="group head"){
		return "department head";
	}else if($param=="department head"){
		return "officer";
	}else{
		return "";
	}
}

function get_superior($param){
	$param = strtolower($param);
	if($param=="group head"){
		return "director";
	}else if($param=="department head"){
		return "group head";
	}else if($param=="officer"){
		return "department head";
	}else{
		return "";
	}
}

function get_level($param){
	$param = strtolower($param);
	if($param=="direktur" || $param=="director"){
		return 3;
	}else if($param=="group head"){
		return 2;
	}else if($param=="department head"){
		return 1;
	}else if($param=="officer"){
		return 0;
	}else{
		return 0;
	}
}

function get_position_name($level,$user){
	if($level==3){
		return "Director";
	}else if($level==2){
		return $user->group;
	}else if($level==1){
		return $user->department;
	}else{
		return '';
	}
}


function excelDateToDate($readDate){
    $phpexcepDate = $readDate-25569; //to offset to Unix epoch
    return strtotime("+$phpexcepDate days", mktime(0,0,0,1,1,1970));
}

function excelDateToDateNew($readDate){
	$UNIX_DATE = ($readDate - 25569) * 86400;
	$date = new DateTime("@$UNIX_DATE");
	return $date->format("Y-m-d");
}

function beautify_words($word){
	return ucwords(str_replace("_"," ",$word));
}

function code_frequency($word){
	if($word=='quarter'){
		$string = "Triwulan ini";
	}else if($word=='month'){
		$string = "Bulan ini";
	}else if($word=='week'){
		$string = "Minggu ini";
	}else if($word=='year'){
		$string = "Tahun ini";
	}
	return $string;
}

function shorten_news($news, $onclick, $limit=200, $start=0){
	// strip and trim news
	$news = strip_tags($news, "");
	$news = str_replace("  ", " ", $news);
	$news = str_replace("  ", " ", $news);
	$news = str_replace("  ", " ", $news);
	$news = str_replace("&nbsp;&nbsp;", "&nbsp;", $news);
	$news = str_replace("&nbsp;&nbsp;", "&nbsp;", $news);
	$news = str_replace("&nbsp;&nbsp;", "&nbsp;", $news);
	$news = str_replace("&nbsp; ", "&nbsp;", $news);
	$news = str_replace("&nbsp; ", "&nbsp;", $news);
	$news = str_replace("&nbsp; ", "&nbsp;", $news);
	$news = str_replace(" &nbsp;", "&nbsp;", $news);
	$news = str_replace(" &nbsp;", "&nbsp;", $news);
	$news = str_replace(" &nbsp;", "&nbsp;", $news);

	// shorten news
	$shorten = substr($news, $start, $limit);

	if (strlen($news) > $limit) {
		return "$shorten . . .<br /><div style='text-align:right'><a onclick='$onclick'>Read More</a></div>";
	}

	return $shorten;
}

function internalsharingdefault() {
	return base_url()."assets/img/general/internalsharingdefault.jpg";
}

function json_error(&$json, $exception, $code = 500) {
	log_message('error', $exception->getMessage());

	$json = array();
	$json['status'] = "error";
	$json['message'] = "Internal Server Error (500).<br />Silahkan hubungi Administrator.";
	$json['exception'] = $exception->getMessage();

	return $json;
}