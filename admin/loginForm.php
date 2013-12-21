<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8" />

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
		<link href="css/bootstrap-RC2.css" type="text/css" rel="stylesheet" media="print,screen" />

		<!-- Javascript -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="js/jquery.qtip.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$("#management").validate({
					errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
                   		rules: {
							rePassword: {
							equalTo: "#password" // So sánh trường repassword với trường có id là password
							},
                   		}
				});
			}); 
		</script>
		<?php
		$checkLogin = 0;
		?>
		<?php
		//require 'include/headPage.php';
		require 'Connect.php';
		if (isset($_POST['emailLogin']) && isset($_POST['passwordLogin'])) {
			$emailLog = $_POST['emailLogin'];
			$passLog = $_POST['passwordLogin'];
			// $passLog = sha1($_POST['passwordLogin']);
			echo($emailLog);
			echo($passLog);
			$queryLog = "SELECT * FROM user WHERE user_level_id = '1' and user_email = '" . $emailLog . "' and user_password = '" . $passLog . "'";
			$resultLog = mysql_query($queryLog);
			mysql_close($link);
			$checkLogin = 1;

			while ($row = mysql_fetch_array($resultLog)) {
				session_start();
				$_SESSION["adminLog"] = $emailLog;
				$_SESSION["adminID"] = $row['0'];
				$_SESSION["adminPass"] = $row['2'];
				$checkLogin = 2;
			}
			if($checkLogin == 2)
				header('Location: index-admin.php');
		} else {
			session_start();
			if (isset($_SESSION["adminLog"])) {
				header('Location: index-admin.php');
			}
		}
		?>
	</head>
	<body>
		<div class="container">
			<?php
			if($checkLogin == 1)
			{
			?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
					&times;
				</button>
				<strong>Cảnh Báo! </strong> Email Hoặc Mật Khẩu Của Bạn Có Thể Bị Sai, <strong>Bạn Còn 10 Lần Nhập Lại!</strong>
			</div>
			<?php
			}
			?>

			<div class="page-header">
				<h2 class="text-center thumbnail">Đăng Nhập Quản Trị Viên</h2>
			</div>
			<div class="well">
				<form method="post" class="form-horizontal" id="management">

					<div class="form-group">
						<label class="control-label col-md-3">Email</label>
						<div class="col-md-6">
							<input type="text" name="emailLogin" class="form-control required email" value="" placeholder="Nhập Email"  />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Mật Khẩu</label>
						<div class="col-md-6">
							<input type="password" name="passwordLogin" class="form-control required" value="" placeholder="Nhập Mật Khẩu"  />
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<div class="checkbox">
								<label>
									<input type="checkbox">
									Remember me </label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="submit" class="btn btn-info">
								Đăng Nhập
							</button>
							<button type="reset" class="btn btn-warning">
								Làm Tươi
							</button>
						</div>
					</div>

				</form>
			</div>
			<hr />
			<div class="thumbnail">
				<br />
				<br />
			</div>
		</div>
	</body>
</html>