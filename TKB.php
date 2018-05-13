<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user']))
{
	header('Location: index.php?uri=TKB.php');
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
					<li class="active">
						<a href="TKB.php">
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
						Thời khóa biểu
					</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashboard.php#"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="breadcrumb-item">Thời khóa biểu</a></li>
					</ol>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">
										<?php
										include_once "function.php";
										include_once "simple_html_dom.php";
										$html = request('http://c3myduca.edu.vn/TKB/tkb_class_2_0.html');
										$html = str_get_html($html);
										$tkb = $html->find('font');
										echo 'Thời khóa biểu lớp: 11A2 - Buổi sáng'

										?>
									</h3>
								</div>
								<div class="box-body">
									<table id="example2" class="table table-bordered table-striped table-responsive">
										<thead>
											<tr>
												<th>Thứ hai</th>
												<th>Thứ ba</th>
												<th>Thứ tư</th>
												<th>Thứ năm</th>
												<th>Thứ sáu</th>
												<th>Thứ bảy</th>
												<th>Chủ nhật</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $tkb[8]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[9]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[10]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[11]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[12]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[13]->nodes[0]->_[4]; ?></td>
												<td></td>
											</tr>
											<tr>
												<td><?php echo $tkb[15]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[16]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[17]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[18]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[19]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[20]->nodes[0]->_[4]; ?></td>
												<td></td>
											</tr>
											<tr>
												<td><?php echo $tkb[22]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[23]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[24]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[25]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[26]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[27]->nodes[0]->_[4]; ?></td>
												<td></td>
											</tr>
											<tr>
												<td><?php echo $tkb[29]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[30]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[31]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[32]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[33]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[34]->nodes[0]->_[4]; ?></td>
												<td></td>
											</tr>
											<tr>
												<td><?php echo $tkb[36]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[37]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[38]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[39]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[40]->nodes[0]->_[4]; ?></td>
												<td><?php echo $tkb[41]->nodes[0]->_[4]; ?></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">
										Thời khóa biểu lớp: 11A2 - Buổi chiều
									</h3>
								</div>
								<div class="box-body">
									<table id="example2" class="table table-bordered table-striped table-responsive">
										<thead>
											<tr>
												<th>Thứ hai</th>
												<th>Thứ ba</th>
												<th>Thứ tư</th>
												<th>Thứ năm</th>
												<th>Thứ sáu</th>
												<th>Thứ bảy</th>
												<th>Chủ nhật</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		</div>
	</div>

</body>
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

</html>
