<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user']))
{
	header('Location: index.php?uri=post.php');
};
?>

<html>
<?php include_once "header.php" ?>
<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="dashboard.php" class="logo">
				<span class="logo-mini"><b>A2</b></span>
				<span class="logo-lg"><b>11A2</b>Index</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="dashboard.php#" class="sidebar-toggle" data-toggle="push-menu" role="button">
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
						<a href="dashboard.php">
							<i class="fa fa-home"></i><span>TRANG CHỦ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-address-book-o"></i><span>DANH BẠ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="contact.php"><i class="fa fa-circle-o"></i>Học sinh</a></li>
							<li><a href="contactGV.php"><i class="fa fa-circle-o"></i>Giáo viên</a></li>
						</ul>
					</li>
					<li>
						<a href="TKB.php">
							<i class="fa fa-calendar"></i>
							<span>THỜI KHÓA BIỂU</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
					</li>
					<li class="treeview active">
						<a href="#">
							<i class="fa fa-map"></i> <span>GROUP</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="group.php"><i class="fa fa-circle-o"></i> Xem bài đăng</a></li>
							<li class="active"><a href="post.php"><i class="fa fa-circle-o"></i> Đăng bài</a></li>
						</ul>
					</li>
				</ul>
			</section>
			<div class="sidebar-footer">
				<a href="credit.php" class="link" data-toggle="tooltip" title="" data-original-title="Thông tin"><i class="fa fa-info-circle"></i></a>
				<!-- item-->
				<a href="https://m.me/nhutien1808" target="_blank" class="link" data-toggle="tooltip" title="" data-original-title="Hỗ trợ"><i class="fa fa-envelope"></i></a>
				<a href="logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
			</div>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					GROUP POST
				</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="dashboard.php#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="breadcrumb-item">Group Post</a></li>
				</ol>
			</section>		
			<section class="content">
				<div class="row">
					<div class="col-12">

						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Đăng bài<br>
									<small>Lưu ý: Hiện giờ mới chỉ hỗ trợ plain text (định dạng văn bản thường).</small>
									<small>Bài đăng được đăng qua tài khoản trung gian ảo </small>
								</h3>
								<div class="box-body pad">
									<form method="post">
										<textarea class="textarea" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="content"></textarea>
										<div class="col-12"><button class="pull-right col-4 btn btn-flat bg-aqua btn-lg" type="submit" name="btn-submit"><h4>Đăng</h4></button></div>
									</form>
									<?php 
									include_once "function.php";
									if (isset($_POST['btn-submit'])) {
										$message= '['.$_COOKIE['user'].']'."\n\n".$_POST['content'];
										$url = request('https://graph.facebook.com/1744536689167030/feed?method=post&message='.urlencode($message).'&access_token='.ACCESS_TOKEN);
										$res = array();
										$res = json_decode($url,true);
										if (!(strpos($res['id'], '1744536689167030')===false)) {
              				# code..
											echo "Thành công!";
										} else echo "Lỗi !";

              			# code...
									};
									?>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>		
			<script src="assets/vendor_components/jquery/dist/jquery.js"></script>
			
			<!-- jQuery UI 1.11.4 -->
			<script src="assets/vendor_components/jquery-ui/jquery-ui.js"></script>

			<!-- popper -->
			<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
			
			<!-- Bootstrap 4.0-->
			<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	

			<!-- SlimScroll -->
			<script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
			
			<!-- FastClick -->
			<script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

			<script src="js/template.js"></script>
		</body>

		
		</html>