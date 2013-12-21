<html>
	<head>
		<title>Xác Nhận Thêm</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
		<link href="css/docs.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		
	</head>
	<body>
		<?php
		require 'connect_db.php';

		$email = $_POST['email'];
		$password = $_POST['password'];
		$userLevel = $_POST['userLevel'];
		if ($email != null && $password != null && $userLevel != null) {
			$sql = "INSERT INTO `user`(`user_email`, `user_password`, `user_level_id`) VALUES ('$email','$password','$userLevel')";

			if (mysql_query($sql)) {
				// header('"Location: http://theos.in/"localhost/phptest/admin/index-admin.php?changePage=1');
		?>
		<div class="container">
			<form method="GET" class="form-horizontal" action="index-admin.php">
				<div class="form-group">
					<div class="row well">
						<div class="col-md-8 col-md-offset-2">
							<div class="alert alert-success">
								<p class="text-center">
									Thêm Thành Công!
								</p>
							</div>
						</div>
						<div class="col-md-2 col-md-offset-5">
							<input type="hidden" name="changePage" value="1" />
							<button class="btn btn-info btn-block" type="submit" >
								Trở Về
							</button>
						</div>

					</div>
				</div>
			</form

		</div>
		<?php
			mysql_close($link);
		} else {
		?>
		<div class="container">
			<form method="GET" action="index-admin.php" class="form-horizontal">
				<div class="form-group">
					<div class="row well">
						<div class="col-md-8 col-md-offset-2">
							<div class="alert alert-danger">
								<p class="text-center">
									Thêm Không Thành Công!
								</p>
							</div>
						</div>
						<div class="col-md-2 col-md-offset-5">
							<input type="hidden" name="changePage" value="1" />
							<button class="btn btn-info btn-block" type="submit" >
								Trở Về
							</button>
						</div>
					</div>
				</div>
			</form>

		</div>
		<?php
			mysql_close($link);
			}
		}
		?>
	</body>
</html>