<!DOCTYPE html>
<?php
if(isset($_COOKIE['user']))
{
	header('Location: index.php');
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="./images/favicon.ico">

	<title>LOGIN</title>
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="./assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="./assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="./assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="./css/master_style.css">

	<!-- foxadmin Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="./css/skins/_all-skins.css">	

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition lockscreen">
	<!-- Automatic element centering -->
	<div class="lockscreen-wrapper">
		<div class="lockscreen-logo">
			<a href="./index.html"><b>11A2</b>Index</a>
		</div>
		<div class="lockscreen-box-body">

			<!-- START LOCK SCREEN ITEM -->
			<div class="lockscreen-item">
				<!-- lockscreen image -->
				<div class="lockscreen-image">
					<img src="./images/user.jpg" alt="User Image">
				</div>
				<!-- /.lockscreen-image -->	
				
				<!-- User name -->
				<div class="lockscreen-name margin-top-20"><h3>11A2 Index Tool</h3></div>
				
				<!-- lockscreen credentials (contains the form) -->
				<form class="lockscreen-credentials form-element margin-top-20" method="POST">
					<div class="form-group has-feedback">
						<input type="text" name="username" class="form-control" required="true" placeholder="Tên người dùng">
						<input type="password" class="form-control" placeholder="Password" name="password" required="true">
					</div>
					<!-- /.col -->
					<div class="text-center">
						<button type="submit" class="btn btn-info btn-block btn-flat margin-top-10" name="btn-submit">ĐĂNG NHẬP</button>
					</div>
					<!-- /.col -->
				</form>
				<!-- /.lockscreen credentials -->

			</div>
			<!-- /.lockscreen-item -->
			<div class="help-block text-center margin-top-20">
				Nhập password để truy cập
			</div>
			<?php
			if(isset($_POST['btn-submit'])){
			if ($_POST['password'] === '20162019'){
		echo '<div class="text-center bg-green">correct</div>';
		setcookie('user', $_POST['username'], time() + 3600);
		if(!isset($_GET['uri'])){
		header('Location: index.php');
	} else header('Location: '.$_GET['uri']);
		
	}	else echo '<div class="text-center bg-red">PASSWORD SAI</div>';
}
?>
</div>
</div>
<!-- /.center -->

<!-- jQuery 3 -->
<script src="./assets/vendor_components/jquery/dist/jquery.min.js"></script>

<!-- popper -->
<script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>
