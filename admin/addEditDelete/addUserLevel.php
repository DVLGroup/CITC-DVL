<!DOCTYPE HTML>
<html>
	<head>
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
		<link href="../css/bootstrapv3.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="../css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="../css/jquery.dataTables.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="../css/jquery.qtip.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="../css/header.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="../css/body.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="../css/footer.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="../css/style.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="../css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
		<link href="../css/docs.css" type="text/css" rel="stylesheet" />

		<!-- Javascript -->
		<script src="../js/jquery.min.js" type="text/javascript"></script>
		<script src="../js/bootstrap.js" type="text/javascript"></script>
		<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="../js/jquery.qtip.js" type="text/javascript"></script>
		
	</head>
	<body>
		<?php
		
		require '../Connect.php';
		$tenNhom = $_POST['userLevelName'];

		if ($tenNhom != null) {
			$sql = "INSERT INTO `user_level`(`user_level_name`)
			 VALUES ('$tenNhom')";

			if (mysql_query($sql)) {
				// header('"Location: http://theos.in/"localhost/phptest/admin/index-admin.php?changePage=1');
		?>
		<div class="container">
			<form method="GET" class="form-horizontal" action="../index-admin.php">
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
			mysql_close($my_connect);
		} else {
		?>
		<div class="container">
			<form method="GET" action="../index-admin.php" class="form-horizontal">
				<div class="form-group">
					<div class="row well">
						<div class="col-md-8 col-md-offset-2">
							<div class="alert alert-danger">
								<p class="text-center">
									Thêm Không Thành Công! Tên Nhóm Đã Tồn Tại...
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
			mysql_close($my_connect);
			}
		}
		else
			header('Location: ../index-admin.php');
		?>
	</body>
</html>