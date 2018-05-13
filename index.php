<!DOCTYPE html>
<?php
ob_start();
if(isset($_COOKIE['user']))
{
	header('Location: dashboard.php');
};
?>
<html>
<?php include_once "header.php" ?>
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
						<input type="text" name="username" class="form-control" required="true" placeholder="Tên người dùng (Tùy chọn)">
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
					setcookie('user', $_POST['username'], time() + 3600*24*30);
					if(!isset($_GET['uri'])){
						header('Location: dashboard.php');
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
<?php 
ob_end_flush();
?>
