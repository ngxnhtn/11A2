<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user']))
{
	header('Location: index.php?uri=contactGV.php');
};

?>
<html manifest="cache.appcache">
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
					<li class="active treeview">
						<a href="#">
							<i class="fa fa-address-book-o"></i><span>DANH BẠ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="contact.php"><i class="fa fa-circle-o"></i>Học sinh</a></li>
							<li class="active"><a href="contactGV.php"><i class="fa fa-circle-o"></i>Giáo viên</a></li>
						</ul>
					</li>
					<li><a href="TKB.php">
						<i class="fa fa-calendar"></i>
						<span>THỜI KHÓA BIỂU</span>
						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
					</a></li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-map"></i> <span>GROUP</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="group.php"><i class="fa fa-circle-o"></i> Xem bài đăng</a></li>
							<li><a href="post.php"><i class="fa fa-circle-o"></i> Đăng bài</a></li>
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
					Danh bạ
				</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="dashboard.php#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="breadcrumb-item">Danh bạ</a></li>
				</ol>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="box">
							<div class="box-header">
								
							</div>
							<div class="box-body">
								<table id="example2" class="table table-bordered table-striped table-responsive">
									<thead>
										<tr>
											<th>STT</th>
											<th>Họ và tên giáo viên</th>
											<th>Bộ môn</th>
											<th>Số điện thoại</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Hoàng Thị Hưng</td>
											<td>Văn a.k.a GVCN</td>
											<td>0949822686</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Nguyễn Hà Hưng</td>
											<td>Toán</td>
											<td>0986669884</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Nguyễn Hoàn Long</td>
											<td>Lý</td>
											<td>01672574724</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Nguyễn Thị Minh Ngọc</td>
											<td>Hóa</td>
											<td>01686479610</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Nguyễn Thị Minh Hằng</td>
											<td>Anh</td>
											<td></td>
										</tr>
										<tr>
											<td>6</td>
											<td>Lưu Thị Lệ</td>
											<td>Lịch Sử</td>
											<td>01668695568</td>
										</tr>
										<tr>
											<td>7</td>
											<td>Nguyễn Thị Vân</td>
											<td>Địa Lý</td>
											<td>0979843864</td>
										</tr>
										<tr>
											<td>8</td>
											<td>Lê Hà Thu</td>
											<td>Sinh</td>
											<td>01687371979</td>
										</tr>
										<tr>
											<td>9</td>
											<td>Trịnh Thế Châu</td>
											<td>GDCD</td>
											<td></td>
										</tr>
										<tr>
											<td>10</td>
											<td>Lê Thị Thanh Huyền</td>
											<td>Công Nghệ</td>
											<td></td>
										</tr>
										<tr>
											<td>11</td>
											<td>Nguyễn Trường Giang</td>
											<td>Tin Học</td>
											<td>0979833686</td>
										</tr>
										<tr>
											<td>12</td>
											<td>Bùi Đức Hoà</td>
											<td>Thể Dục</td>
											<td>0916144345</td>
										</tr>
										<tr>
											<td>13</td>
											<td>Trịnh Thế Hưng</td>
											<td>GDQP</td>
											<td></td>
										</tr>
									</tbody>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

		<script src="./assets/vendor_components/jquery/dist/jquery.min.js"></script>

		<!-- popper -->
		<script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

		<!-- Bootstrap 4.0-->
		<script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<!-- DataTables -->
		<script src="./assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="./assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

		<!-- SlimScroll -->
		<script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

		<!-- FastClick -->
		<script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

		<!-- This is data table -->
		<script src="./assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

		<script src="js/template.js"></script>
	</body>

	</html>