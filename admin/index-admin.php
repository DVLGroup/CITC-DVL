<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		require 'Connect.php';
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Poor People's Magazine (DVL-PPM)</title>
		<meta name="description" content="" />
		<meta name="author" content="TrongLoi" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

		<!-- Css -->
		<link href="css/bootstrapv3.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/jquery.dataTables.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/jquery.qtip.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/header.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/body.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/footer.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/style.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
		<link href="css/docs.css" type="text/css" rel="stylesheet" />

		<!-- Javascript -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="js/jquery.qtip.js" type="text/javascript"></script>
		<script src="js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="js/messages_vi.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$("#management").validate({
					errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
					rules : {
						rePassword : {
							equalTo : "#password" // So sánh trường repassword với trường có id là password
						},
					}
				});

			});
		</script>
		<?php
		session_start();
		if (isset($_REQUEST["logOut"])) {
			if ($_REQUEST["logOut"] == 1) {
				session_destroy();
				header('Location: loginForm.php');
			}
		}

		if (isset($_SESSION["adminLog"])) {
		} else {
			header('location: loginForm.php');
		}
		?>
	</head>

	<body>

		<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="nav navbar-brand" href="index-admin.php">PPM</a>
				</div>
				<?php

				function echoActiveClassIfRequestMatches($requestUri) {
					$current_file_name = basename($_SERVER['REQUEST_URI']);

					if ($current_file_name == $requestUri)
						echo 'class="active"';
				}
				?>
				<nav class="collapse navbar-collapse bs-navbar-collapse" style="color: white;">
					<ul class="nav navbar-nav" id="myTab">
						<li <?php echoActiveClassIfRequestMatches("index-admin.php?changePage=1") ?>>
							<a  href="index-admin.php?changePage=1">User</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches("index-admin.php?changePage=2") ?>>
							<a href="index-admin.php?changePage=2">Nhóm User</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches("index-admin.php?changePage=3") ?>>
							<a href="index-admin.php?changePage=3">Tin Tức</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches("index-admin.php?changePage=4") ?>>
							<a href="index-admin.php?changePage=4">Thể Loại</a>
						</li>

						<li class="dropdown">
							<a href="#" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> <?php
							echo($_SESSION["adminLog"]);
							?> <span class="caret"></span> </a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="configPage.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;Tùy Chỉnh Tài Khoản&nbsp;&nbsp;&nbsp;</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="index-admin.php?logOut=1"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;Đăng Xuất&nbsp;&nbsp;&nbsp;</a>
								</li>

							</ul>

						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="container bs-docs-container">
			<div class="row">
				<div class="col-md-12">
					<?php
					if(isset($_GET['changePage']))
					{
					if($_GET['changePage']=='1')
					{
					require 'include/userForm.php';
					}
					else if($_GET['changePage']=='2')
					{
					require 'include/userLevelForm.php';
					}
					else if($_GET['changePage']=='3')
					{
					require 'include/tintucForm.php';
					}
					else if($_GET['changePage']=='4')
					{
					require 'include/tintucCatalogeForm.php';
					}
					else if($_GET['changePage']=='5')
					{
					require 'addEditDelete/addOneUser.php';
					}
					else if($_GET['changePage']=='6')
					{
					require 'addEditDelete/addOneUserLevel.php';
					}
					}
					else {
					?>
					<h1 class="text-center text-info">Chào Mừng Đến Với Trang Quản Trị</h1>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<footer class="navbar navbar-inverse navbar-fixed-bottom bs-docs-nav">
			<div class="container">
				<p class="collapse navbar-collapse bs-navbar-collapse" style="color: white;">
					&copy; 2012 - <?php echo date('Y');
					//mysql_close($link);
					?>
					by DVL Grp. All rights reserved. Designed (with Bootstrap 3.0) and coded this admin page by one of the member of DVL <strong><a href="#">VIET_NT</a></strong>
				</p>

			</div>
		</footer>

	</body>
</html>
