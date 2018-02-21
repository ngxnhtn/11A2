<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user']))
{
	header('Location: login.php?uri=contact.php');
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
					<li class="active">
						<a href="contact.php">
							<i class="fa fa-address-book-o"></i><span>DANH BẠ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li><a href="TKB.php">
						<i class="fa fa-calendar"></i>
						<span>THỜI KHÓA BIỂU</span>
						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
					</a></li>

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
					<li class="breadcrumb-item"><a href="index.php#"><i class="fa fa-dashboard"></i> Home</a></li>
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
											<th>Họ và tên</th>
											<th>Ngày sinh</th>
											<th>Link FB</th>
											<th>Số điện thoại</th>
											<th>Email</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Phan V&#259;n An</td>
											<td>02/12/2001</td>
											<td><a href="https://www.facebook.com/100017815215803" target="_blank">Facebook</a></td>
											<td></td>
											<td>antro2101@gmail.com</td>
										</tr>
										<tr>
											<td>2</td>
											<td>D&#432;&#417;ng Vân Anh</td>
											<td>26/05/2001</td>
											<td><a href="https://www.facebook.com/100006172158057" target="_blank">Facebook</a></td>
											<td>0981528978</td>
											<td>yoonaduong2001@gmail.com</td>
										</tr>
										<tr>
											<td>3</td>
											<td>&#272;ào Ph&#432;&#417;ng Anh</td>
											<td>30/03/2001</td>
											<td><a href="https://www.facebook.com/100004907827793" target="_blank">Facebook</a></td>
											<td>01635204737</td>
											<td>phuong.dao303@gmail.com</td>
										</tr>
										<tr>
											<td>4</td>
											<td>&#272;oàn Th&#7883; Vân Anh</td>
											<td>21/10/2001</td>
											<td><a href="https://www.facebook.com/100010393337643" target="_blank">Facebook</a></td>
											<td></td>
											<td>doananh459@gmail.com</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Hoàng Vân Anh</td>
											<td>02/07/2001</td>
											<td><a href="https://www.facebook.com/100009002930237" target="_blank">Facebook</a></td>
											<td></td>
											<td>hoangvananh987@gmail.com</td>
										</tr>
										<tr>
											<td>6</td>
											<td>Tr&#7847;n &#272;&#7913;c Anh</td>
											<td>11/02/2001</td>
											<td><a href="https://www.facebook.com/100005804177782" target="_blank">Facebook</a></td>
											<td>01656979671</td>
											<td>tranducanh21101@gmail.com</td>
										</tr>
										<tr>
											<td>7</td>
											<td>Nguy&#7877;n Th&#7883; Ánh</td>
											<td>05/09/2001</td>
											<td><a href="https://www.facebook.com/100010798368675" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>8</td>
											<td>V&#361; Th&#7883; Ng&#7885;c Bích</td>
											<td>23/12/2001</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>9</td>
											<td>Phùng Minh Châu</td>
											<td>02/05/2001</td>
											<td><a href="https://www.facebook.com/100012602435068" target="_blank">Facebook</a></td>
											<td></td>
											<td>phungminhchau522001@gmail.com</td>
										</tr>
										<tr>
											<td>10</td>
											<td>Ph&#7841;m Hoa Chi</td>
											<td>06/01/2001</td>
											<td><a href="https://www.facebook.com/100008161386581" target="_blank">Facebook</a></td>
											<td></td>
											<td>chihoa162001@gmail.com</td>
										</tr>
										<tr>
											<td>11</td>
											<td>Nguy&#7877;n Th&#7883; Dung</td>
											<td>14/06/2001</td>
											<td><a href="https://www.facebook.com/100013284187703" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>12</td>
											<td>Nguy&#7877;n Quý D&#432;&#417;ng</td>
											<td>06/07/2001</td>
											<td><a href="https://www.facebook.com/100009942727066" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>13</td>
											<td>Ph&#7841;m Th&#7883; &#272;&#7843;m</td>
											<td>19/03/2001</td>
											<td><a href="https://www.facebook.com/100009712260325" target="_blank">Facebook</a></td>
											<td></td>
											<td>phamdam2k1@gmail.com</td>
										</tr>
										<tr>
											<td>14</td>
											<td>&#272;&#7863;ng Ti&#7871;n &#272;&#7841;t</td>
											<td></td>
											<td><a href="https://www.facebook.com/100012271063480" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>15</td>
											<td>&#272;&#7895; Trung &#272;&#7841;t</td>
											<td>05/03/2001</td>
											<td><a href="https://www.facebook.com/100008664677521" target="_blank">Facebook</a></td>
											<td></td>
											<td>dotrungdat.mda@gmail.com</td>
										</tr>
										<tr>
											<td>16</td>
											<td>Ph&#7841;m Thành &#272;&#7841;t</td>
											<td>29/01/2001</td>
											<td><a href="https://www.facebook.com/100014612373535" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>17</td>
											<td>Nguy&#7877;n Xuân &#272;&#7913;c</td>
											<td>04/09/2001</td>
											<td><a href="https://www.facebook.com/100014749290896" target="_blank">Facebook</a></td>
											<td></td>
											<td>xuanduc942001@gmail.com</td>
										</tr>
										<tr>
											<td>18</td>
											<td>V&#432;&#417;ng Minh Hi&#7871;u</td>
											<td>02/12/2001</td>
											<td><a href="https://www.facebook.com/100014974512069" target="_blank">Facebook</a></td>
											<td>01688621201</td>
											<td>2k1mdamda@gmail.com</td>
										</tr>
										<tr>
											<td>19</td>
											<td>&#272;inh Th&#7871; Hoàng</td>
											<td>08/02/2001</td>
											<td><a href="https://www.facebook.com/100022912910187" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>20</td>
											<td>Lê Hoàng</td>
											<td>02/11/2001</td>
											<td><a href="https://www.facebook.com/100006407550787" target="_blank">Facebook</a></td>
											<td>01658110201</td>
											<td>hoangleahihi@gmail.com</td>
										</tr>
										<tr>
											<td>21</td>
											<td>D&#432;&#417;ng Quang Huy</td>
											<td>17/08/2001</td>
											<td><a href="https://www.facebook.com/100007632007303" target="_blank">Facebook</a></td>
											<td>01684162017</td>
											<td>quanghuy1782001@gmail.com</td>
										</tr>
										<tr>
											<td>22</td>
											<td>Phùng Quang Huy</td>
											<td>26/07/2002</td>
											<td></td>
											<td></td>
											<td>phungquanghuy180f1@gmail.com</td>
										</tr>
										<tr>
											<td>23</td>
											<td>Tr&#432;&#417;ng Ng&#7885;c Huy</td>
											<td>16/04/2001</td>
											<td></td>
											<td></td>
											<td>truongngochuy548@gmail.com</td>
										</tr>
										<tr>
											<td>24</td>
											<td>Nguy&#7877;n Ti&#7871;n H&#432;ng</td>
											<td>09/03/2001</td>
											<td></td>
											<td></td>
											<td>jandvhungnguyen@gmail.com</td>
										</tr>
										<tr>
											<td>25</td>
											<td>Ph&#7841;m Th&#7883; Thanh H&#432;&#417;ng</td>
											<td>23/02/2001</td>
											<td><a href="https://www.facebook.com/100009777000889" target="_blank">Facebook</a></td>
											<td></td>
											<td>phamthanhhuong2302@gmail.com</td>
										</tr>
										<tr>
											<td>26</td>
											<td>Nguy&#7877;n Th&#7883; Liên</td>
											<td>27/01/2001</td>
											<td><a href="https://www.facebook.com/100009225109575" target="_blank">Facebook</a></td>
											<td></td>
											<td>nguyenliena271mda@gmail.com</td>
										</tr>
										<tr>
											<td>27</td>
											<td>Nguy&#7877;n Quang Linh</td>
											<td>04/03/2001</td>
											<td><a href="https://www.facebook.com/100015010338376" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>28</td>
											<td>Nguy&#7877;n H&#7919;u Long</td>
											<td>29/08/2001</td>
											<td><a href="https://www.facebook.com/100016866013058" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>29</td>
											<td>Tr&#7883;nh Th&#7843;o My</td>
											<td>12/03/2001</td>
											<td><a href="https://www.facebook.com/100016834595253" target="_blank">Facebook</a></td>
											<td></td>
											<td>nguyenda1232001@gmail.com</td>
										</tr>
										<tr>
											<td>30</td>
											<td>&#272;oàn V&#259;n Nam</td>
											<td>10/02/2001</td>
											<td><a href="https://www.facebook.com/100007690988990" target="_blank">Facebook</a></td>
											<td></td>
											<td>doanvannam347@gmail.com</td>
										</tr>
										<tr>
											<td>31</td>
											<td>Nguy&#7877;n Th&#7883; Qu&#7923;nh Nga</td>
											<td>17/08/2001</td>
											<td></td>
											<td></td>
											<td>moonlight1782001@gmail.com</td>
										</tr>
										<tr>
											<td>32</td>
											<td>&#272;ào Th&#7883; H&#7891;ng Ngát</td>
											<td>11/01/2001</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>33</td>
											<td>&#272;&#7863;ng Th&#7883; H&#7891;ng Ngân</td>
											<td>11/02/2001</td>
											<td><a href="https://www.facebook.com/100011266336786" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>34</td>
											<td>V&#361; Hà Ngân</td>
											<td>29/06/2001</td>
											<td><a href="https://www.facebook.com/100011724416447" target="_blank">Facebook</a></td>
											<td>0168840871</td>
											<td>hangan29062001@gmail.com</td>
										</tr>
										<tr>
											<td>35</td>
											<td>Lê Ki&#7873;u Oanh</td>
											<td>11/08/2001</td>
											<td><a href="https://www.facebook.com/100004845735900" target="_blank">Facebook</a></td>
											<td></td>
											<td>oanhharry@gmail.com</td>
										</tr>
										<tr>
											<td>36</td>
											<td>Lê Thu Ph&#432;&#417;ng</td>
											<td>02/03/2001</td>
											<td><a href="https://www.facebook.com/100015136573707" target="_blank">Facebook</a></td>
											<td>01685410223</td>
											<td>phuongmint322001@gmail.com</td>
										</tr>
										<tr>
											<td>37</td>
											<td>Nguy&#7877;n Hoài Ph&#432;&#417;ng</td>
											<td>03/08/2001</td>
											<td><a href="https://www.facebook.com/100012210852937" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>38</td>
											<td>Nguy&#7877;n Th&#7871; Quang</td>
											<td>16/12/2001</td>
											<td><a href="https://www.facebook.com/100014415228679" target="_blank">Facebook</a></td>
											<td>0966202102</td>
											<td></td>
										</tr>
										<tr>
											<td>39</td>
											<td>L&#432;u Ti&#7871;n Quy&#7873;n</td>
											<td>08/05/2001</td>
											<td><a href="https://www.facebook.com/100006250456293" target="_blank">Facebook</a></td>
											<td>01688470508</td>
											<td>luutienquyen111@gmail.com</td>
										</tr>
										<tr>
											<td>40</td>
											<td>Tr&#7883;nh Xuân S&#417;n</td>
											<td>31/01/2001</td>
											<td><a href="https://www.facebook.com/100004614672569" target="_blank">Facebook</a></td>
											<td>01689950245</td>
											<td>sontrinhhp2001@gmail.com</td>
										</tr>
										<tr>
											<td>41</td>
											<td>Lê Th&#7883; Tân</td>
											<td>03/01/2001</td>
											<td><a href="https://www.facebook.com/100007349710980" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>42</td>
											<td>Nguy&#7877;n Chí Thanh</td>
											<td>28/01/2001</td>
											<td></td>
											<td></td>
											<td>tienmoney32@gmail.com</td>
										</tr>
										<tr>
											<td>43</td>
											<td>Bùi H&#432;&#417;ng Th&#7843;o</td>
											<td>07/05/2001</td>
											<td><a href="https://www.facebook.com/100012042169541" target="_blank">Facebook</a></td>
											<td>0967456592</td>
											<td>buihuongthao571@gmail.com</td>
										</tr>
										<tr>
											<td>44</td>
											<td>Nguy&#7877;n Th&#7883; Th&#7843;o</td>
											<td>13/04/2001</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>45</td>
											<td>Nguy&#7877;n Th&#7883; Th&#7911;y Tiên</td>
											<td>16/09/2001</td>
											<td><a href="https://www.facebook.com/100017236357537" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>46</td>
											<td>Nguy&#7877;n Nh&#432; Ti&#7871;n</td>
											<td>18/08/2001</td>
											<td><a href="https://www.facebook.com/100015322683755" target="_blank">Facebook</a></td>
											<td>01667718666</td>
											<td>nhutienhn2001@gmail.com</td>
										</tr>
										<tr>
											<td>47</td>
											<td>Nguy&#7877;n Th&#7883; Uyên Trang</td>
											<td></td>
											<td><a href="https://www.facebook.com/100007737090972" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>48</td>
											<td>&#272;&#7863;ng H&#7919;u Minh Trí</td>
											<td>13/03/2001</td>
											<td><a href="https://www.facebook.com/100005433069978" target="_blank">Facebook</a></td>
											<td>01252592957</td>
											<td>minhtrihn2001@gmail.com</td>
										</tr>
										<tr>
											<td>49</td>
											<td>Nguy&#7877;n Th&#7883; Thu Uyên</td>
											<td>03/01/2001</td>
											<td><a href="https://www.facebook.com/100005572545570" target="_blank">Facebook</a></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>50</td>
											<td>Ph&#7841;m Th&#7883; Nh&#432; Ý</td>
											<td>26/12/2001</td>
											<td><a href="https://www.facebook.com/100017472756164" target="_blank">Facebook</a></td>
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
	
	<!-- foxadmin App -->
	<script src="./js/template.js"></script>
	
	<!-- foxadmin for demo purposes -->
	<script src="./js/demo.js"></script>
	
	<!-- This is data table -->
	<script src="./assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	
	<!-- start - This is for export functionality only -->
	<script src="./assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="./assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="./assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
	<script src="./assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
	<script src="./assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
	<script src="./assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="./assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
	<!-- end - This is for export functionality only -->
	
	<!-- foxadmin for Data Table -->
	
</body>

</html>