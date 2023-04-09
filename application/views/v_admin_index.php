<!DOCTYPE html>
<?php
	setcookie("pma_lang", "", time() - 3600);
?>
<html class="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Stpim - Pengawas</title>
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
							<span><?php echo $user['user_fullname'];?> <i class="caret"></i></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header bg-teal-active">
								<!--<img src="./SURVEI INDUSTRI BESAR SEDANG - Entry Stpim_files/saved_resource" class="img-circle" alt="User Image">-->
								<p>
									<?php echo $user['user_fullname'];?> <!--<small>BPS Kab. Dompu</small> -->
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-right">
									<a href="<?php echo site_url('login_admin/logout')?>" class="btn btn-danger">Keluar</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>        <!-- Left side column. contains the logo and sidebar -->
	
	<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar" style="height: auto;">
			<ul class="sidebar-menu">
				<li>
					<a class="selector-url" href="<?php echo base_url('pengawas');?>">
						<i class="fa fa-building"></i> <span>Perusahaan</span>
					</a>
				</li>
				<li>
					<a class="selector-url" href="<?php echo base_url('pengawas/hasil_survey');?>">
						<i class="fa fa-briefcase"></i> <span>Hasil Survei</span>
					</a>
				</li>
		</section>
	</aside>
	  
	<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 648px;">
        <div id="content">
			<?php echo $content;?>
		</div><!-- content -->
    </div>
        <!-- Footer -->
	<footer class="main-footer">
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
	$('#table').DataTable();
</script>
</body>
</html>