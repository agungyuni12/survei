<!DOCTYPE html>
<?php
	setcookie("pma_lang", "", time() - 3600);
?>
<html class="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>SURVEI INDUSTRI BESAR SEDANG - Entry Stpim</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ionicon.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/all.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/datepicker3.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/select2.min(1).css" rel="stylesheet">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles(1).css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/default-style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="skin-blue sidebar-mini" style="padding-right: 0px;">
    <div class="wrapper">
        <!-- Header -->
        
	<header class="main-header">
		<!-- Logo -->
		<a href="#" class="logo" style="background-color: #1D9F9F">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>SIBS</b></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>SIBS2021</b></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top" style="background-color: #28ADAD" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle  hidden" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<!--<img src="./SURVEI INDUSTRI BESAR SEDANG - Entry Stpim_files/saved_resource" class="user-image" alt="User Image">-->
							<span><?php echo $user['comp_name'];?> <i class="caret"></i></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header bg-teal-active">
								<!--<img src="./SURVEI INDUSTRI BESAR SEDANG - Entry Stpim_files/saved_resource" class="img-circle" alt="User Image">-->
								<p>
									<?php echo $user['comp_kip'];?> <!--<small>BPS Kab. Dompu</small> -->
									<small><?php echo $user['comp_name'];?></small>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-right">
									<a href="<?php echo site_url('login/logout')?>" class="btn btn-danger">Keluar</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>        <!-- Left side column. contains the logo and sidebar -->
	<?php if($this->session->userdata('sess_admin')){?>
	<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar" style="height: auto;">
			<ul class="sidebar-menu">
				<li>
					<a class="selector-url" href="#">
						<i class="fa fa-dashboard"></i> <span>Perusahaan</span>
					</a>
				</li>
				<li>
					<a class="selector-url" href="#">
						<i class="fa fa-briefcase"></i> <span>Hasil Survei</span>
					</a>
				</li>
		</section>
	<aside>
	<?php }?>
    <aside class="main-sidebar" style="display:none">
    <!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar" style="height: auto;">
			<!-- Sidebar user panel -->
			

			<div class="user-panel">
				<div class="pull-left image">
					<img src="#" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Agung Yuniarta Sosiawan</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li>
					<a class="selector-url" href="#">
						<i class="fa fa-dashboard"></i> <span>Beranda</span>
					</a>
				</li>
								<li class="treeview">
						<a href="#">
							<i class="fa fa-briefcase"></i> <span>Administrasi</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a class="selector-url" href="#">
									<i class="fa fa-circle-o"></i> User</a>
							</li>
						   
						</ul>
					</li>
											<li class="treeview">
						<a href="#">
							<i class="fa fa-bank"></i> <span>Master </span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a class="selector-url" href="#">
									<i class="fa fa-circle-o"></i> Direktori</a>
							</li>
							<li>
								<a class="selector-url" href="#">
									<i class="fa fa-circle-o"></i> Petugas</a>
							</li>
						</ul>
					</li>
											<li class="treeview">
						<a href="#">
							<i class="fa fa-edit"></i> <span>Entri</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li>
								<a class="selector-url" href="#">
									<i class="fa fa-circle-o"></i> DPA &amp; STPIM</a>
							</li>
							<li>
								<a class="selector-url" href="#">
									<i class="fa fa-circle-o"></i>SIBS Bulanan </a>
							</li>
							<!-- <li>
								<a class="selector-url" href="">
									<i class="fa fa-circle-o"></i> STPIM</a>
							</li> -->
							
						</ul>
					</li>
										<li>
					<a class="selector-url" href="#">
						<i class="fa fa-bar-chart-o"></i> <span>Monitoring</span>
					</a>
				</li>
				
				<li>
					<a class="selector-url" href="#">
						<i class="fa fa-table"></i> <span>Tabulasi</span>
					</a>
				</li>
				
				<li>
					<a class="selector-url" href="#">
						<i class="fa fa-download"></i> <span>Export Data</span>
					</a>
				</li>
				
				<li>
					<a class="selector-url" href="#">
						<i class="fa fa-comments"></i> <span>Forum</span>
						<span class="pull-right-container">
							<small id="label-notification-forum" class="label pull-right bg-orange" style="font-size:12px"></small>
						</span>
					</a>
				</li>
				<!--            <li class="treeview">
					<a href="#">
						<i class="fa fa-book"></i> <span>Dokumen</span> <i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li>
							<a class="selector-url" href="/ibs/helper/download?file=XSMFcBgJfScTW7sQkJLXykprXqnMrT4Be2UB6S5J_pmQb7YrMoGSrhz44nHzNT6f0M6w-wgkRNFApF_40eqvTepHBNyP7Ywr7YvX1pMYDm4CF6mr57W4Jg2M6RVC7KG9">
								<i class="fa fa-circle-o"></i>Pedoman Pencacahan.pdf</a>
						</li>
						<li>
							<a class="selector-url" href="/ibs/helper/download?file=XSMFcBgJfScTW7sQkJLXykprXqnMrT4Be2UB6S5J_pl8UOssuXtGhQaT_Os33xJM6ep6Qj_fC6eSjcUjSS3T0ohT-MAxs0oIqczMCzLQHoFDpa22A0t_IPya3iwQ2fDL">
								<i class="fa fa-circle-o"></i>Pedoman Pengolahan.pdf</a>
						</li>
					</ul>
				</li>-->
			</ul>
		</section>
    <!-- /.sidebar -->
	</aside>        
	<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 648px;margin-left:0;">
        <div id="content">
			<?php echo $content;?>
		</div><!-- content -->
    </div>
        <!-- Footer -->
	<footer class="main-footer" style="margin-left:0;">
		<div style="background: url(&#39;/ibs/images/footer.png&#39;) repeat scroll center bottom rgba(0, 0, 0, 0);height:5px;"></div>
		<strong>Copyright © <a href="http://www.bps.go.id/">BADAN PUSAT STATISTIK</a></strong>
	</footer>        <!-- Control Sidebar -->

<!--script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script-->
<!--script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script-->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript"  src="<?php echo base_url()?>assets/js/jQuery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.ba-bbq.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/app.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
<!--script type="text/javascript" src="<?php echo base_url()?>assets/js/dexie.js"></script-->
<!--script type="text/javascript" src="<?php echo base_url()?>assets/js/vue.js"></script-->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/table-fixer.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/inputmask.dependencyLib.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/inputmask.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/inputmask.numeric.extensions.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/globals.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/validation.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/control.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/tools.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<!--script type="text/javascript" src="<?php echo base_url()?>assets/js/stpim.js"></script-->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/negarav1.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/umd.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/umd151.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/iife.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/main.js"></script>

<script type="text/javascript">
 /*   $(document).ready(function() {
          initVue();
          initKues({"id":"1613442645","tahun":"2021","list_r307":[{"id":1613442645,"tahun":2021,"no":2,"r307k2":"BENANG MESRAIS","r307k3":5,"r307k4":"2090.00","r307k5":"5225.00","r307k6":null,"r307k7":null,"r307k8":null,"r307k2_kode":"27993.00.001","r307k8_lain":null,"r307k5_1":"2.50","r307k7_1":null},{"id":1613442645,"tahun":2021,"no":3,"r307k2":"BENANG EMAS","r307k3":23,"r307k4":"142.00","r307k5":"7100.00","r307k6":null,"r307k7":null,"r307k8":null,"r307k2_kode":"27993.00.001","r307k8_lain":null,"r307k5_1":"50.00","r307k7_1":null},{"id":1613442645,"tahun":2021,"no":4,"r307k2":"BENANG PERAK","r307k3":23,"r307k4":"121.00","r307k5":"6050.00","r307k6":null,"r307k7":null,"r307k8":null,"r307k2_kode":"27993.00.002","r307k8_lain":null,"r307k5_1":"50.00","r307k7_1":null},{"id":1613442645,"tahun":2021,"no":5,"r307k2":"BENANG TOP","r307k3":23,"r307k4":"325.00","r307k5":"9750.00","r307k6":null,"r307k7":null,"r307k8":null,"r307k2_kode":"27993.00.001","r307k8_lain":null,"r307k5_1":"30.00","r307k7_1":null},{"id":1613442645,"tahun":2021,"no":6,"r307k2":"BENANG YAMALO","r307k3":38,"r307k4":"223.00","r307k5":"5575.00","r307k6":null,"r307k7":null,"r307k8":null,"r307k2_kode":"27993.00.001","r307k8_lain":null,"r307k5_1":"25.00","r307k7_1":null},{"id":1613442645,"tahun":2021,"no":7,"r307k2":"BENANG GURI","r307k3":5,"r307k4":"88.00","r307k5":"880.00","r307k6":null,"r307k7":null,"r307k8":null,"r307k2_kode":"27993.00.001","r307k8_lain":null,"r307k5_1":"10.00","r307k7_1":null},{"id":1613442645,"tahun":2021,"no":8,"r307k2":"BENANG RAYON","r307k3":5,"r307k4":"29950.00","r307k5":"74875.00","r307k6":null,"r307k7":null,"r307k8":null,"r307k2_kode":"27993.00.001","r307k8_lain":null,"r307k5_1":"2.50","r307k7_1":null}],"list_r402b":[{"id":1613442645,"tahun":2021,"no":2,"r402bk2":"KAIN NGGOLI KOTAK-KOTAK","r402bk3":"13121","r402bk4":"21","r402bk5":"440.00","r402bk6":"176000.00","r402bk7":null,"r402bk8":null,"r402bk8_lain":null,"r402bk6_1":400},{"id":1613442645,"tahun":2021,"no":3,"r402bk2":"KAIN NGGOLI BIASA","r402bk3":"13121","r402bk4":"21","r402bk5":"430.00","r402bk6":"106755.00","r402bk7":null,"r402bk8":null,"r402bk8_lain":null,"r402bk6_1":248.27},{"id":1613442645,"tahun":2021,"no":4,"r402bk2":"KAIN NGGOLI SONGKET","r402bk3":"13121","r402bk4":"21","r402bk5":"67.00","r402bk6":"26800.00","r402bk7":null,"r402bk8":null,"r402bk8_lain":null,"r402bk6_1":400},{"id":1613442645,"tahun":2021,"no":5,"r402bk2":"SELENDANG NGGOLI SONGKET ","r402bk3":"13121","r402bk4":"38","r402bk5":"51.00","r402bk6":"36618.00","r402bk7":null,"r402bk8":null,"r402bk8_lain":null,"r402bk6_1":718},{"id":1613442645,"tahun":2021,"no":6,"r402bk2":"TAPLAK MEJA","r402bk3":"13121","r402bk4":"21","r402bk5":"114.00","r402bk6":"11400.00","r402bk7":null,"r402bk8":null,"r402bk8_lain":null,"r402bk6_1":100},{"id":1613442645,"tahun":2021,"no":7,"r402bk2":"SELENDANG SAL","r402bk3":"13121","r402bk4":"21","r402bk5":"92.00","r402bk6":"9442.00","r402bk7":null,"r402bk8":null,"r402bk8_lain":null,"r402bk6_1":102.63}],"list_satuan":[{"kode":2,"nama":"BAL","jenis_kues":1},{"kode":3,"nama":"BOTOL","jenis_kues":1},{"kode":4,"nama":"BATANG","jenis_kues":1},{"kode":5,"nama":"BUAH","jenis_kues":1},{"kode":10,"nama":"EKOR","jenis_kues":1},{"kode":11,"nama":"FEET","jenis_kues":1},{"kode":12,"nama":"GALON","jenis_kues":1},{"kode":14,"nama":"GRAM","jenis_kues":1},{"kode":15,"nama":"GROSS","jenis_kues":1},{"kode":18,"nama":"KG","jenis_kues":1},{"kode":19,"nama":"KODI","jenis_kues":1},{"kode":20,"nama":"KW","jenis_kues":1},{"kode":21,"nama":"LEMBAR","jenis_kues":1},{"kode":23,"nama":"LUSIN","jenis_kues":1},{"kode":24,"nama":"LITER","jenis_kues":1},{"kode":25,"nama":"METER","jenis_kues":1},{"kode":26,"nama":"M2","jenis_kues":1},{"kode":27,"nama":"M3","jenis_kues":1},{"kode":30,"nama":"MMBTU","jenis_kues":1},{"kode":33,"nama":"POND","jenis_kues":1},{"kode":34,"nama":"POTONG","jenis_kues":1},{"kode":35,"nama":"PASANG","jenis_kues":1},{"kode":36,"nama":"RIM","jenis_kues":1},{"kode":37,"nama":"ROLL","jenis_kues":1},{"kode":38,"nama":"SET","jenis_kues":1},{"kode":42,"nama":"TON","jenis_kues":1},{"kode":43,"nama":"YARD","jenis_kues":1},{"kode":44,"nama":"ZAK","jenis_kues":1},{"kode":45,"nama":"TUBE","jenis_kues":1},{"kode":46,"nama":"*","jenis_kues":1},{"kode":47,"nama":"000 BTG","jenis_kues":1}],"list_kbli":[{"kode":"10110"},{"kode":"10120"},{"kode":"10130"},{"kode":"10211"},{"kode":"10212"},{"kode":"10213"},{"kode":"10214"},{"kode":"10215"},{"kode":"10216"},{"kode":"10217"},{"kode":"10219"},{"kode":"10221"},{"kode":"10222"},{"kode":"10291"},{"kode":"10292"},{"kode":"10293"},{"kode":"10294"},{"kode":"10295"},{"kode":"10296"},{"kode":"10297"},{"kode":"10298"},{"kode":"10299"},{"kode":"10311"},{"kode":"10312"},{"kode":"10313"},{"kode":"10314"},{"kode":"10320"},{"kode":"10330"},{"kode":"10391"},{"kode":"10392"},{"kode":"10393"},{"kode":"10399"},{"kode":"10411"},{"kode":"10412"},{"kode":"10413"},{"kode":"10414"},{"kode":"10415"},{"kode":"10421"},{"kode":"10422"},{"kode":"10423"},{"kode":"10424"},{"kode":"10431"},{"kode":"10432"},{"kode":"10433"},{"kode":"10434"},{"kode":"10435"},{"kode":"10436"},{"kode":"10437"},{"kode":"10490"},{"kode":"10510"},{"kode":"10520"},{"kode":"10531"},{"kode":"10532"},{"kode":"10590"},{"kode":"10611"},{"kode":"10612"},{"kode":"10613"},{"kode":"10614"},{"kode":"10615"},{"kode":"10616"},{"kode":"10621"},{"kode":"10622"},{"kode":"10623"},{"kode":"10629"},{"kode":"10631"},{"kode":"10632"},{"kode":"10633"},{"kode":"10634"},{"kode":"10635"},{"kode":"10636"},{"kode":"10710"},{"kode":"10721"},{"kode":"10722"},{"kode":"10723"},{"kode":"10729"},{"kode":"10731"},{"kode":"10732"},{"kode":"10733"},{"kode":"10734"},{"kode":"10739"},{"kode":"10740"},{"kode":"10750"},{"kode":"10761"},{"kode":"10762"},{"kode":"10763"},{"kode":"10771"},{"kode":"10772"},{"kode":"10773"},{"kode":"10774"},{"kode":"10779"},{"kode":"10791"},{"kode":"10792"},{"kode":"10793"},{"kode":"10794"},{"kode":"10795"},{"kode":"10796"},{"kode":"10799"},{"kode":"10801"},{"kode":"10802"},{"kode":"11010"},{"kode":"11020"},{"kode":"11031"},{"kode":"11032"},{"kode":"11040"},{"kode":"11051"},{"kode":"11052"},{"kode":"11090"},{"kode":"12011"},{"kode":"12012"},{"kode":"12013"},{"kode":"12019"},{"kode":"12091"},{"kode":"12099"},{"kode":"13111"},{"kode":"13112"},{"kode":"13113"},{"kode":"13121"},{"kode":"13122"},{"kode":"13123"},{"kode":"13131"},{"kode":"13132"},{"kode":"13133"},{"kode":"13134"},{"kode":"13911"},{"kode":"13912"},{"kode":"13913"},{"kode":"13921"},{"kode":"13922"},{"kode":"13923"},{"kode":"13924"},{"kode":"13925"},{"kode":"13926"},{"kode":"13929"},{"kode":"13930"},{"kode":"13941"},{"kode":"13942"},{"kode":"13991"},{"kode":"13992"},{"kode":"13993"},{"kode":"13994"},{"kode":"13995"},{"kode":"13996"},{"kode":"13999"},{"kode":"14111"},{"kode":"14112"},{"kode":"14120"},{"kode":"14131"},{"kode":"14132"},{"kode":"14200"},{"kode":"14301"},{"kode":"14302"},{"kode":"14303"},{"kode":"15111"},{"kode":"15112"},{"kode":"15113"},{"kode":"15114"},{"kode":"15121"},{"kode":"15122"},{"kode":"15123"},{"kode":"15129"},{"kode":"15201"},{"kode":"15202"},{"kode":"15203"},{"kode":"15209"},{"kode":"16101"},{"kode":"16102"},{"kode":"16103"},{"kode":"16104"},{"kode":"16105"},{"kode":"16211"},{"kode":"16212"},{"kode":"16213"},{"kode":"16214"},{"kode":"16215"},{"kode":"16221"},{"kode":"16222"},{"kode":"16230"},{"kode":"16291"},{"kode":"16292"},{"kode":"16293"},{"kode":"16294"},{"kode":"16295"},{"kode":"16299"},{"kode":"17011"},{"kode":"17012"},{"kode":"17013"},{"kode":"17014"},{"kode":"17019"},{"kode":"17021"},{"kode":"17022"},{"kode":"17091"},{"kode":"17099"},{"kode":"18111"},{"kode":"18112"},{"kode":"18113"},{"kode":"18120"},{"kode":"18201"},{"kode":"18202"},{"kode":"19100"},{"kode":"19211"},{"kode":"19212"},{"kode":"19213"},{"kode":"19214"},{"kode":"19291"},{"kode":"19292"},{"kode":"20111"},{"kode":"20112"},{"kode":"20113"},{"kode":"20114"},{"kode":"20115"},{"kode":"20116"},{"kode":"20117"},{"kode":"20118"},{"kode":"20119"},{"kode":"20121"},{"kode":"20122"},{"kode":"20123"},{"kode":"20124"},{"kode":"20125"},{"kode":"20126"},{"kode":"20127"},{"kode":"20128"},{"kode":"20129"},{"kode":"20131"},{"kode":"20132"},{"kode":"20211"},{"kode":"20212"},{"kode":"20213"},{"kode":"20214"},{"kode":"20221"},{"kode":"20222"},{"kode":"20223"},{"kode":"20231"},{"kode":"20232"},{"kode":"20233"},{"kode":"20234"},{"kode":"20291"},{"kode":"20292"},{"kode":"20293"},{"kode":"20294"},{"kode":"20295"},{"kode":"20296"},{"kode":"20299"},{"kode":"20301"},{"kode":"20302"},{"kode":"21011"},{"kode":"21012"},{"kode":"21013"},{"kode":"21014"},{"kode":"21015"},{"kode":"21021"},{"kode":"21022"},{"kode":"21023"},{"kode":"21024"},{"kode":"22111"},{"kode":"22112"},{"kode":"22121"},{"kode":"22122"},{"kode":"22123"},{"kode":"22191"},{"kode":"22192"},{"kode":"22193"},{"kode":"22194"},{"kode":"22199"},{"kode":"22210"},{"kode":"22220"},{"kode":"22230"},{"kode":"22291"},{"kode":"22292"},{"kode":"22293"},{"kode":"22299"},{"kode":"23111"},{"kode":"23112"},{"kode":"23119"},{"kode":"23121"},{"kode":"23122"},{"kode":"23123"},{"kode":"23124"},{"kode":"23129"},{"kode":"23911"},{"kode":"23919"},{"kode":"23921"},{"kode":"23922"},{"kode":"23923"},{"kode":"23929"},{"kode":"23931"},{"kode":"23932"},{"kode":"23933"},{"kode":"23939"},{"kode":"23941"},{"kode":"23942"},{"kode":"23943"},{"kode":"23951"},{"kode":"23952"},{"kode":"23953"},{"kode":"23954"},{"kode":"23955"},{"kode":"23956"},{"kode":"23957"},{"kode":"23959"},{"kode":"23961"},{"kode":"23962"},{"kode":"23963"},{"kode":"23969"},{"kode":"23990"},{"kode":"24101"},{"kode":"24102"},{"kode":"24103"},{"kode":"24201"},{"kode":"24202"},{"kode":"24203"},{"kode":"24204"},{"kode":"24205"},{"kode":"24206"},{"kode":"24310"},{"kode":"24320"},{"kode":"25111"},{"kode":"25112"},{"kode":"25113"},{"kode":"25119"},{"kode":"25120"},{"kode":"25130"},{"kode":"25200"},{"kode":"25910"},{"kode":"25920"},{"kode":"25931"},{"kode":"25932"},{"kode":"25933"},{"kode":"25934"},{"kode":"25940"},{"kode":"25951"},{"kode":"25952"},{"kode":"25991"},{"kode":"25992"},{"kode":"25993"},{"kode":"25994"},{"kode":"25995"},{"kode":"25999"},{"kode":"26110"},{"kode":"26120"},{"kode":"26210"},{"kode":"26220"},{"kode":"26310"},{"kode":"26320"},{"kode":"26391"},{"kode":"26399"},{"kode":"26410"},{"kode":"26420"},{"kode":"26490"},{"kode":"26511"},{"kode":"26512"},{"kode":"26513"},{"kode":"26514"},{"kode":"26520"},{"kode":"26601"},{"kode":"26602"},{"kode":"26710"},{"kode":"26791"},{"kode":"26792"},{"kode":"26800"},{"kode":"27111"},{"kode":"27112"},{"kode":"27113"},{"kode":"27120"},{"kode":"27201"},{"kode":"27202"},{"kode":"27203"},{"kode":"27310"},{"kode":"27320"},{"kode":"27330"},{"kode":"27401"},{"kode":"27402"},{"kode":"27403"},{"kode":"27404"},{"kode":"27409"},{"kode":"27510"},{"kode":"27520"},{"kode":"27530"},{"kode":"27900"},{"kode":"28111"},{"kode":"28112"},{"kode":"28113"},{"kode":"28120"},{"kode":"28130"},{"kode":"28140"},{"kode":"28151"},{"kode":"28152"},{"kode":"28160"},{"kode":"28171"},{"kode":"28172"},{"kode":"28173"},{"kode":"28174"},{"kode":"28179"},{"kode":"28180"},{"kode":"28191"},{"kode":"28192"},{"kode":"28193"},{"kode":"28199"},{"kode":"28210"},{"kode":"28221"},{"kode":"28222"},{"kode":"28223"},{"kode":"28224"},{"kode":"28230"},{"kode":"28240"},{"kode":"28250"},{"kode":"28261"},{"kode":"28262"},{"kode":"28263"},{"kode":"28264"},{"kode":"28265"},{"kode":"28291"},{"kode":"28292"},{"kode":"28299"},{"kode":"29101"},{"kode":"29102"},{"kode":"29200"},{"kode":"29300"},{"kode":"30111"},{"kode":"30112"},{"kode":"30113"},{"kode":"30120"},{"kode":"30200"},{"kode":"30300"},{"kode":"30400"},{"kode":"30911"},{"kode":"30912"},{"kode":"30921"},{"kode":"30922"},{"kode":"30990"},{"kode":"31001"},{"kode":"31002"},{"kode":"31003"},{"kode":"31004"},{"kode":"31009"},{"kode":"32111"},{"kode":"32112"},{"kode":"32113"},{"kode":"32114"},{"kode":"32115"},{"kode":"32119"},{"kode":"32120"},{"kode":"32201"},{"kode":"32202"},{"kode":"32300"},{"kode":"32401"},{"kode":"32402"},{"kode":"32501"},{"kode":"32502"},{"kode":"32503"},{"kode":"32509"},{"kode":"32901"},{"kode":"32902"},{"kode":"32903"},{"kode":"32904"},{"kode":"32905"},{"kode":"32906"},{"kode":"32907"},{"kode":"32909"},{"kode":"33111"},{"kode":"33112"},{"kode":"33119"},{"kode":"33121"},{"kode":"33122"},{"kode":"33131"},{"kode":"33132"},{"kode":"33133"},{"kode":"33141"},{"kode":"33142"},{"kode":"33149"},{"kode":"33151"},{"kode":"33152"},{"kode":"33153"},{"kode":"33159"},{"kode":"33190"},{"kode":"33200"}],"is_entri":1,"is_cleaning":0,"is_belum":0},'Rg0owmHHmfHbF3uANKjYpZeOC497GpiS8PhOeUlHowoUux9yxuz3yVV5LCTjU4oHYp7_AX5VzvBk8Bfn5Dzcyw','');
          initAutoComplete();
          // objValidation.MASTER_KBKI = ;
          // initAutoCompleteKbki();
         Vue.component('vue-simple-suggest', VueSimpleSuggest);
    });
*/
	$(document).ready(function() {
		$('.select2').select2();
		$('#table').DataTable();
		
		$('.hal_1_next').click(function(){
			$.ajax({
				type: "POST",
				data: $('#form-input-page1 :input').serialize(),
				url: "<?php echo base_url('survey/page1_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_2').addClass('active');
		});
		
		$('.hal_2_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page2 :input').serialize(),
				url: "<?php echo base_url('survey/page2_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_3').addClass('active');
		});
		
		$('.hal_3_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page3 :input').serialize(),
				url: "<?php echo base_url('survey/page3_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_4').addClass('active');
		});
		
		$('.hal_4_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page4 :input').serialize(),
				url: "<?php echo base_url('survey/page4_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_5').addClass('active');
		});
		
		$('.hal_5_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page5 :input').serialize(),
				url: "<?php echo base_url('survey/page5_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_6').addClass('active');
		});
		
		$('.hal_6_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page6 :input').serialize(),
				url: "<?php echo base_url('survey/page6_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_7').addClass('active');
		});
		
		$('.hal_7_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page7 :input').serialize(),
				url: "<?php echo base_url('survey/page7_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_8').addClass('active');
		});
		
		$('.hal_8_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page8 :input').serialize(),
				url: "<?php echo base_url('survey/page8_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_9').addClass('active');
		});
		
		$('.hal_9_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page9 :input').serialize(),
				url: "<?php echo base_url('survey/page9_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_10').addClass('active');
		});
		
		$('.hal_10_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page10 :input').serialize(),
				url: "<?php echo base_url('survey/page10_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_11').addClass('active');
		});
		
		$('.hal_11_next').click(function(){	
			$.ajax({
				type: "POST",
				data: $('#form-input-page11 :input').serialize(),
				url: "<?php echo base_url('survey/page11_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
						console.log(result.sess);
					}
				}
			});
			$('.nav-tabs li').removeClass('active');
			$('.tab_12').addClass('active');
		});
		
		$('.hal_12_submit').click(function(){
			$.ajax({
				type: "POST",
				data: $('#form-input-page12 :input').serialize(),
				url: "<?php echo base_url('survey/page12_add_session') ?>",
				dataType: "json",
				success: function(result){
					if( result.status == 'success')
					{
					//	location.reload();
						window.location.href="<?php echo base_url('survey/finish');?>";
					}
				}
			});
		});
		
		//page2
		$("input[name$='TStpim[r203]']").click(function() {
			
			id = $(this).attr('id');
			if(id == 'r203_1'){
				$('.r204').removeClass('hidden');
				$('.r204_opt').removeClass('hidden');
			}else{
				$('.r204').addClass('hidden');
				$('.r204_opt').addClass('hidden');
			}
		});
		$("input[name$='TStpim[r204d]']").click(function() {
			id = $(this).attr('id');
			if(id == 'r204d_1'){
				$('.r205').removeClass('hidden');
				$('.r205_opt').removeClass('hidden');
			}else{
				$('.r205').addClass('hidden');
				$('.r205_opt').addClass('hidden');
			}
		});
		$("input[name$='TStpim[r205a]']").click(function() {
			id = $(this).attr('id');
			if(id == 'r205a_1'){
				$('.r206').removeClass('hidden');
			}else{
				if($('#r205b_1').is(':checked')){
					$('.r206').removeClass('hidden');
				}else{
					$('.r206').addClass('hidden');
				}
			}
		});
		$("input[name$='TStpim[r205b]']").click(function() {
			id = $(this).attr('id');
			if(id == 'r205b_1'){
				$('.r206').removeClass('hidden');
			}else{
				if($('#r205a_1').is(':checked')){
					$('.r206').removeClass('hidden');
				}else{
					$('.r206').addClass('hidden');
				}
			}
		});
	});
	
	function sumR210(){
		a = $('#TStpim_r210a').val() || 0;
		b = $('#TStpim_r210b').val() || 0;
		c = $('#TStpim_r210c').val() || 0;
		d = $('#TStpim_r210d').val() || 0;
		e = $('#TStpim_r210e').val() || 0;
		f = $('#TStpim_r210f').val() || 0;
		
		jum = parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f);
		
		$('#TStpim_r210jum').val(jum);
	}
	function sumR212(){
		a = $('#TStpim_r212a').val() || 0;
		b = $('#TStpim_r212b').val() || 0;
		c = $('#TStpim_r212c').val() || 0;
		d = $('#TStpim_r212d').val() || 0;
		e = $('#TStpim_r212e').val() || 0;
		f = $('#TStpim_r212f').val() || 0;
		g = $('#TStpim_r212g').val() || 0;
		
		jum = parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f)+parseInt(g);
		
		$('#TStpim_r212jum').val(jum);
	}
	function sumR229_2(){
		a = parseInt($('#TStpim_r229a1ak2').val() || 0)+parseInt($('#TStpim_r229a1bk2').val() || 0);
		b = parseInt($('#TStpim_r229a2ak2').val() || 0)+parseInt($('#TStpim_r229a2bk2').val() || 0);
		c = parseInt($('#TStpim_r229a3k2').val() || 0);
		jum = a+b+c;
		$('#TStpim_r229ajk2').val(jum);
	}
	function sumR229_3(){
		a = parseInt($('#TStpim_r229a1ak3').val() || 0)+parseInt($('#TStpim_r229a1bk3').val() || 0);
		b = parseInt($('#TStpim_r229a2ak3').val() || 0)+parseInt($('#TStpim_r229a2bk3').val() || 0);
		c = parseInt($('#TStpim_r229a3k3').val() || 0);
		jum = a+b+c;
		$('#TStpim_r229ajk3').val(jum);
	}
	function sumR229_4(){
		a = parseInt($('#TStpim_r229a1ak4').val() || 0)+parseInt($('#TStpim_r229a1bk4').val() || 0);
		b = parseInt($('#TStpim_r229a2ak4').val() || 0)+parseInt($('#TStpim_r229a2bk4').val() || 0);
		c = parseInt($('#TStpim_r229a3k4').val() || 0);
		jum = a+b+c;
		$('#TStpim_r229ajk4').val(jum);
	}
	function sumR229_5(){
		a = parseInt($('#TStpim_r229a1ak5').val() || 0)+parseInt($('#TStpim_r229a1bk5').val() || 0);
		b = parseInt($('#TStpim_r229a2ak5').val() || 0)+parseInt($('#TStpim_r229a2bk5').val() || 0);
		c = parseInt($('#TStpim_r229a3k5').val() || 0);
		jum = a+b+c;
		$('#TStpim_r229ajk5').val(jum);
	}
	function sumR229_b(){
		a = parseInt($('#TStpim_r229b1').val() || 0);
		b = parseInt($('#TStpim_r229b2').val() || 0);
		c = parseInt($('#TStpim_r229b3').val() || 0);
		d = parseInt($('#TStpim_r229b4').val() || 0);
		jum = a+b+c+d;
		$('#TStpim_r229b_jml').val(jum);
	}
	function sumR307k45(n_id,q_id,h_id){
		nilai 	= $("#"+n_id).val() || 0;
		qty 	= $("#"+q_id).val() || 1;
		$("#"+h_id).val(parseInt(nilai)/parseInt(qty));
		
		var total = 0;
		for(i = 2; i < 9; i++){
			total += parseInt($("#r307_"+i+"_r307k5_1").val() || 0);
		}
		$("#TStpim_r307jumk5").val(total);
		r307  = parseInt($('#TStpim_r307jumk5').val() || 0)+parseInt($('#TStpim_r307jumk7').val() || 0);
		$('#TStpim_r1001e').val(r307);
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001b = $('#TStpim_r1001b').val()||0;
		r1001c = $('#TStpim_r1001c').val()||0;
		r1001d = $('#TStpim_r1001d').val()||0;
		r1001e = $('#TStpim_r1001e').val()||0;
		$('#TStpim_r1001jumlah').val(parseInt(r1001a)+parseInt(r1001b)+parseInt(r1001c)+parseInt(r1001d)+parseInt(r1001e));
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR307k67(n_id,q_id,h_id){
		nilai 	= $("#"+n_id).val() || 0;
		qty 	= $("#"+q_id).val() || 1;
		$("#"+h_id).val(parseInt(nilai)/parseInt(qty));
		
		var total = 0;
		for(i = 2; i < 9; i++){
			total += parseInt($("#r307_"+i+"_r307k7_1").val() || 0);
		}
		$("#TStpim_r307jumk7").val(total);
		r307  = parseInt($('#TStpim_r307jumk5').val() || 0)+parseInt($('#TStpim_r307jumk7').val() || 0);
		$('#TStpim_r1001e').val(r307);
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001b = $('#TStpim_r1001b').val()||0;
		r1001c = $('#TStpim_r1001c').val()||0;
		r1001d = $('#TStpim_r1001d').val()||0;
		r1001e = $('#TStpim_r1001e').val()||0;
		$('#TStpim_r1001jumlah').val(parseInt(r1001a)+parseInt(r1001b)+parseInt(r1001c)+parseInt(r1001d)+parseInt(r1001e));
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR402b(n_id,q_id,h_id){
		nilai 	= $("#"+n_id).val() || 0;
		qty 	= $("#"+q_id).val() || 1;
		$("#"+h_id).val(parseInt(nilai)/parseInt(qty));
		
		var total = 0;
		for(i = 2; i < 8; i++){
			total += parseInt($("#r402b_"+i+"_r402bk6_1").val() || 0);
		}
		$("#TStpim_r402bjumk6").val(total);
		r402 = $("#TStpim_r402bjumk6").val();
		$('#TStpim_r1002a').val(r402);
		r1002a = $('#TStpim_r1002a').val()||0;
		r1002b = $('#TStpim_r1002b').val()||0;
		r1002c = $('#TStpim_r1002c').val()||0;
		r1002d = $('#TStpim_r1002d').val()||0;
		$('#TStpim_r1002jumlah').val(parseInt(r1002a)+parseInt(r1002b)+parseInt(r1002c)+parseInt(r1002d));
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR301k2(){
		a2 = $('#TStpim_r301ak2').val() || 0;
		b2 = $('#TStpim_r301bk2').val() || 0;
		c2 = $('#TStpim_r301ck2').val() || 0;
		d2 = $('#TStpim_r301dk2').val() || 0;
		jum = parseInt(a2)+parseInt(b2)+parseInt(c2)+parseInt(d2);
		$('#TStpim_r301jk2').val(jum);
		r301 = parseInt($('#TStpim_r301jk2').val() || 0)+parseInt($('#TStpim_r301jk3').val() || 0);
		$('#TStpim_r1001a').val(r301);
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001b = $('#TStpim_r1001b').val()||0;
		r1001c = $('#TStpim_r1001c').val()||0;
		r1001d = $('#TStpim_r1001d').val()||0;
		r1001e = $('#TStpim_r1001e').val()||0;
		$('#TStpim_r1001jumlah').val(parseInt(r1001a)+parseInt(r1001b)+parseInt(r1001c)+parseInt(r1001d)+parseInt(r1001e));
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR301k3(){
		a3 = $('#TStpim_r301ak3').val() || 0;
		b3 = $('#TStpim_r301bk3').val() || 0;
		c3 = $('#TStpim_r301ck3').val() || 0;
		d3 = $('#TStpim_r301dk3').val() || 0;
		jum = parseInt(a3)+parseInt(b3)+parseInt(c3)+parseInt(d3);
		$('#TStpim_r301jk3').val(jum);
		r301 = parseInt($('#TStpim_r301jk2').val() || 0)+parseInt($('#TStpim_r301jk3').val() || 0);
		$('#TStpim_r1001a').val(r301);
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001b = $('#TStpim_r1001b').val()||0;
		r1001c = $('#TStpim_r1001c').val()||0;
		r1001d = $('#TStpim_r1001d').val()||0;
		r1001e = $('#TStpim_r1001e').val()||0;
		$('#TStpim_r1001jumlah').val(parseInt(r1001a)+parseInt(r1001b)+parseInt(r1001c)+parseInt(r1001d)+parseInt(r1001e));
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR302k4(){
		a = $('#TStpim_r302ak4').val() || 0;b = $('#TStpim_r302bk4').val() || 0;c = $('#TStpim_r302ck4').val() || 0;d = $('#TStpim_r302dk4').val() || 0;e = $('#TStpim_r302ek4').val() || 0;f = $('#TStpim_r302fk4').val() || 0;g = $('#TStpim_r302gk4').val() || 0;h = $('#TStpim_r302hk4').val() || 0;i = $('#TStpim_r302ik4').val() || 0;j = $('#TStpim_r302jk4').val() || 0;k = $('#TStpim_r302kk4').val() || 0;
		jum = parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f)+parseInt(g)+parseInt(h)+parseInt(i)+parseInt(j)+parseInt(k);
		$('#TStpim_r302jumk4').val(jum);
		r302 = $('#TStpim_r302jumk4').val();
		$('#TStpim_r1001b').val(r302);
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001b = $('#TStpim_r1001b').val()||0;
		r1001c = $('#TStpim_r1001c').val()||0;
		r1001d = $('#TStpim_r1001d').val()||0;
		r1001e = $('#TStpim_r1001e').val()||0;
		$('#TStpim_r1001jumlah').val(parseInt(r1001a)+parseInt(r1001b)+parseInt(r1001c)+parseInt(r1001d)+parseInt(r1001e));
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR302k6(){
		a = $('#TStpim_r302ak6').val() || 0;b = $('#TStpim_r302bk6').val() || 0;c = $('#TStpim_r302ck6').val() || 0;d = $('#TStpim_r302dk6').val() || 0;e = $('#TStpim_r302ek6').val() || 0;f = $('#TStpim_r302fk6').val() || 0;g = $('#TStpim_r302gk6').val() || 0;h = $('#TStpim_r302hk6').val() || 0;i = $('#TStpim_r302ik6').val() || 0;j = $('#TStpim_r302jk6').val() || 0;k = $('#TStpim_r302kk6').val() || 0;
		jum = parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f)+parseInt(g)+parseInt(h)+parseInt(i)+parseInt(j)+parseInt(k);
		$('#TStpim_r302jumk6').val(jum);
	}
	function sumR303(){
		a = $('#TStpim_r303ak3').val() || 0;
		b = $('#TStpim_r303bk3').val() || 0;
		jum = parseInt(a)+parseInt(b);
		$('#TStpim_r1001c').val(jum);
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001b = $('#TStpim_r1001b').val()||0;
		r1001c = $('#TStpim_r1001c').val()||0;
		r1001d = $('#TStpim_r1001d').val()||0;
		r1001e = $('#TStpim_r1001e').val()||0;
		$('#TStpim_r1001jumlah').val(parseInt(r1001a)+parseInt(r1001b)+parseInt(r1001c)+parseInt(r1001d)+parseInt(r1001e));
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR306(){
		a1 = $('#TStpim_r306a1').val() || 0;a2 = $('#TStpim_r306a2').val() || 0;b = $('#TStpim_r306b').val() || 0;c1 = $('#TStpim_r306c1').val() || 0;c2 = $('#TStpim_r306c2').val() || 0;d = $('#TStpim_r306d').val() || 0;e = $('#TStpim_r306e').val() || 0;f = $('#TStpim_r306f').val() || 0;g = $('#TStpim_r306g').val() || 0;h = $('#TStpim_r306h').val() || 0;i = $('#TStpim_r306i').val() || 0;j1 = $('#TStpim_r306j1').val() || 0;j2 = $('#TStpim_r306j2').val() || 0;k = $('#TStpim_r306k').val() || 0;l = $('#TStpim_r306l').val() || 0;
		jum = parseInt(a1)+parseInt(a2)+parseInt(b)+parseInt(c1)+parseInt(c2)+parseInt(d)+parseInt(e)+parseInt(f)+parseInt(g)+parseInt(h)+parseInt(i)+parseInt(j1)+parseInt(j2)+parseInt(k)+parseInt(l);
		$('#TStpim_r306_jml').val(jum);
		r306 = $('#TStpim_r306_jml').val();
		$('#TStpim_r1001d').val(r306);
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001b = $('#TStpim_r1001b').val()||0;
		r1001c = $('#TStpim_r1001c').val()||0;
		r1001d = $('#TStpim_r1001d').val()||0;
		r1001e = $('#TStpim_r1001e').val()||0;
		$('#TStpim_r1001jumlah').val(parseInt(r1001a)+parseInt(r1001b)+parseInt(r1001c)+parseInt(r1001d)+parseInt(r1001e));
		
		//1003
		$('#TStpim_r1003a').val(a2);
		$('#TStpim_r1003b').val(b);
		$('#TStpim_r1003c').val(d);
		$('#TStpim_r1003d').val(e);
		$('#TStpim_r1003e').val(g);
		$('#TStpim_r1003f').val(h);
		r1003a = $('#TStpim_r1003a').val();
		r1003b = $('#TStpim_r1003b').val();
		r1003c = $('#TStpim_r1003c').val();
		r1003d = $('#TStpim_r1003d').val();
		r1003e = $('#TStpim_r1003e').val();
		r1003f = $('#TStpim_r1003f').val();
		$('#TStpim_r1003jumlah').val(parseInt(r1003a)+parseInt(r1003b)+parseInt(r1003c)+parseInt(r1003d)+parseInt(r1003e)+parseInt(r1003f));
		
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR501(){
		a = $('#TStpim_r501a').val() || 0;
		b = $('#TStpim_r501b').val() || 0;
		jum = parseInt(a)+parseInt(b);
		$('#TStpim_r501jum').val(jum);
		r501 = $('#TStpim_r501jum').val();
		$('#TStpim_r1002b').val(r501);
		r1002a = $('#TStpim_r1002a').val()||0;
		r1002b = $('#TStpim_r1002b').val()||0;
		r1002c = $('#TStpim_r1002c').val()||0;
		r1002d = $('#TStpim_r1002d').val()||0;
		$('#TStpim_r1002jumlah').val(parseInt(r1002a)+parseInt(r1002b)+parseInt(r1002c)+parseInt(r1002d));
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR502(){
		a = $('#TStpim_r502a').val() || 0;b1 = $('#TStpim_r502b1').val() || 0;b2 = $('#TStpim_r502b2').val() || 0;c = $('#TStpim_r502c').val() || 0;d = $('#TStpim_r502d').val() || 0;e = $('#TStpim_r502e').val() || 0;f = $('#TStpim_r502f').val() || 0;
		jum = parseInt(a)+parseInt(b1)+parseInt(b2)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f);
		$('#TStpim_r502jumlah').val(jum);
		r502 = parseInt($('#TStpim_r502jumlah').val() || 0)-parseInt(e);
		$('#TStpim_r1002c').val(r502);
		r1002a = $('#TStpim_r1002a').val()||0;
		r1002b = $('#TStpim_r1002b').val()||0;
		r1002c = $('#TStpim_r1002c').val()||0;
		r1002d = $('#TStpim_r1002d').val()||0;
		$('#TStpim_r1002jumlah').val(parseInt(r1002a)+parseInt(r1002b)+parseInt(r1002c)+parseInt(r1002d));
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR5032(){
		a = $('#TStpim_r503ak2').val() || 0;
		b = $('#TStpim_r503bk2').val() || 0;
		c = $('#TStpim_r503ck2').val() || 0;
		bk3 = $('#TStpim_r503bk3').val() || 0;
		jum = parseInt(a)+parseInt(b)+parseInt(c);
		selisih = parseInt(bk3)-parseInt(b);
		$('#TStpim_r503jk2').val(jum);
		$('#TStpim_r1002d').val(selisih);
		r1002a = $('#TStpim_r1002a').val()||0;
		r1002b = $('#TStpim_r1002b').val()||0;
		r1002c = $('#TStpim_r1002c').val()||0;
		r1002d = $('#TStpim_r1002d').val()||0;
		$('#TStpim_r1002jumlah').val(parseInt(r1002a)+parseInt(r1002b)+parseInt(r1002c)+parseInt(r1002d));
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR5033(){
		a = $('#TStpim_r503ak3').val() || 0;
		b = $('#TStpim_r503bk3').val() || 0;
		c = $('#TStpim_r503ck3').val() || 0;
		bk2 = $('#TStpim_r503bk2').val() || 0;
		jum = parseInt(a)+parseInt(b)+parseInt(c);
		selisih = parseInt(b)-parseInt(bk2);
		$('#TStpim_r503jk3').val(jum);
		$('#TStpim_r1002d').val(selisih);
		r1002a = $('#TStpim_r1002a').val()||0;
		r1002b = $('#TStpim_r1002b').val()||0;
		r1002c = $('#TStpim_r1002c').val()||0;
		r1002d = $('#TStpim_r1002d').val()||0;
		$('#TStpim_r1002jumlah').val(parseInt(r1002a)+parseInt(r1002b)+parseInt(r1002c)+parseInt(r1002d));
		r1001a = $('#TStpim_r1001a').val()||0;
		r1001 = $('#TStpim_r1001jumlah').val()||0;
		r1002 = $('#TStpim_r1002jumlah').val()||0;
		r1003 = $('#TStpim_r1003jumlah').val()||0;
		$('#TStpim_r1004').val(parseInt(r1002)-parseInt(r1001)+parseInt(r1001a)+parseInt(r1003));
	}
	function sumR601k2(k){
		if(k == 'k2'){
			a = $('#TStpim_r601ak2').val() || 0;
			b = $('#TStpim_r601bk2').val() || 0;
			c = $('#TStpim_r601ck2').val() || 0;
			d = $('#TStpim_r601dk2').val() || 0;
			e = $('#TStpim_r601ek2').val() || 0;
			f = $('#TStpim_r601fk2').val() || 0;
			$('#TStpim_r601jumk2').val(parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f));
		}else if(k == 'k3'){
			a = $('#TStpim_r601ak3').val() || 0;
			b = $('#TStpim_r601bk3').val() || 0;
			c = $('#TStpim_r601ck3').val() || 0;
			d = $('#TStpim_r601dk3').val() || 0;
			e = $('#TStpim_r601ek3').val() || 0;
			f = $('#TStpim_r601fk3').val() || 0;
			$('#TStpim_r601jumk3').val(parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f));
		}else if(k == 'k4'){
			a = $('#TStpim_r601ak4').val() || 0;
			b = $('#TStpim_r601bk4').val() || 0;
			c = $('#TStpim_r601ck4').val() || 0;
			d = $('#TStpim_r601dk4').val() || 0;
			e = $('#TStpim_r601ek4').val() || 0;
			f = $('#TStpim_r601fk4').val() || 0;
			$('#TStpim_r601jumk4').val(parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f));
		}else{
			a = $('#TStpim_r601ak5').val() || 0;
			b = $('#TStpim_r601bk5').val() || 0;
			c = $('#TStpim_r601ck5').val() || 0;
			d = $('#TStpim_r601dk5').val() || 0;
			e = $('#TStpim_r601ek5').val() || 0;
			f = $('#TStpim_r601fk5').val() || 0;
			$('#TStpim_r601jumk5').val(parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f));
		}
	}
	
</script>
</body>
</html>