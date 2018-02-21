<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user']))
{
	header('Location: login.php?uri=credit.php');
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">

	<title>11A2 Index Tool</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	
	<!-- font awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.css">
	
	<!-- ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- fox_admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	
	<!-- weather weather -->
	<link rel="stylesheet" href="assets/vendor_components/weather-icons/weather-icons.css">
	
	<!-- jvectormap -->
	<link rel="stylesheet" href="assets/vendor_components/jvectormap/jquery-jvectormap.css">
	
	<!-- date picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
	
	<!-- daterange picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


</head>

<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="index.php" class="logo">
				<span class="logo-mini"><b>A2</b></span>
				<span class="logo-lg"><b>11A2</b>Index</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="index.php#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">		  
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->      
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">        
					<li class="header">Menu</li>
					<li>
						<a href="index.php">
							<i class="fa fa-home"></i><span>TRANG CHỦ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="contact.php">
							<i class="fa fa-address-book-o"></i><span>DANH BẠ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>

				</ul>
			</section>
			<div class="sidebar-footer">
				<a href="credit.php" class="link bg-gray" data-toggle="tooltip" title="" data-original-title="Thông tin"><i class="fa fa-info-circle"></i></a>
				<!-- item-->
				<a href="https://m.me/nhutien1808" target="_blank" class="link" data-toggle="tooltip" title="" data-original-title="Hỗ trợ"><i class="fa fa-envelope"></i></a>
				<a href="logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
			</div>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Thông tin trang web
				</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="breadcrumb-item">Credit</li>
				</ol>
			</section>
			<section class="content">
				<div class="row">
					<div class="col">
						<div class="box box-primary">
							<div class="box-body box-profile">
								<img src="images/profile.jpg" alt="Profile picture" class="profile-user-img rounded-circle img-fluid mx-auto d-block">
								<h3 class="profile-username text-center">NGUYỄN NHƯ TIẾN</h3>
								<p class="text-muted text-center">KroNko1808</p>
								<h5 class="timeline-body margin-bottom text-center">"Thích thì làm thôi :)"</h5>
							</div>
							<div class="row">
								<div class="col">
									<div class="profile-user-info">
										<h2 class="timeline-body margin-bottom text-center">Công nghệ sử dụng</h2>
										<h6 class="timeline-body text-center">GITHUB</h6>
										<h6 class="timeline-body text-center">HEROKU</h6>
										<h6 class="timeline-body text-center">PHP</h6>
										<h2 class="timeline-body margin-bottom text-center">Special thanks to</h2>
										<h6 class="timeline-body text-center">TEMPLATE <b>FOX</b> OF j2TeaM</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
	</div>
</div>

<script src="assets/vendor_components/jquery/dist/jquery.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="assets/vendor_components/jquery-ui/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	

<!-- ChartJS -->
<script src="assets/vendor_components/chart-js/chart.js"></script>

<!-- Sparkline -->
<script src="assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>

<!-- jvectormap -->
<script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>	
<script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- jQuery Knob Chart -->
<script src="assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>

<!-- daterangepicker -->
<script src="assets/vendor_components/moment/min/moment.min.js"></script>
<script src="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- datepicker -->
<script src="assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>

<!-- Slimscroll -->
<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- fox_admin App -->
<script src="js/template.js"></script>

<!-- fox_admin dashboard demo (This is only for demo purposes) -->
<script src="js/pages/dashboard.js"></script>

<!-- fox_admin for demo purposes -->
<script src="js/demo.js"></script>

<!-- weather for demo purposes -->
<script src="assets/vendor_plugins/weather-icons/WeatherIcon.js"></script>

<script type="text/javascript">

	WeatherIcon.add('icon1'	, WeatherIcon.SLEET , {stroke:false , shadow:false , animated:true } );
	WeatherIcon.add('icon2'	, WeatherIcon.SNOW , {stroke:false , shadow:false , animated:true } );
	WeatherIcon.add('icon3'	, WeatherIcon.LIGHTRAINTHUNDER , {stroke:false , shadow:false , animated:true } );

</script>
</body>

</html>