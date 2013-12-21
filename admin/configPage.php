<!DOCTYPE htHTML>
<html>
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
		<link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
		<link href="css/docs.css" type="text/css" rel="stylesheet" />

		<!-- Javascript -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="js/jquery.qtip.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#management").validate({
					errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
					rules : {
						rePassword : {
							equalTo : "#password" // So sánh trường repassword với trường có id là password
						},
					}
				});
				$(function() {
					$(window).scroll(function() {
						if ($(this).scrollTop() !== 0) {
							$('#bttop').fadeIn();
						} else {
							$('#bttop').fadeOut().animate({
								bottom : "60px",
								right : "10px"
							});
						}
					});
					$('#bttop').click(function() {
						$('body,html').animate({
							scrollTop : 0
						}, 800);
						$('#bttop').animate({
							bottom : "700px",
							right : "250px"
						}, 800);
					});
				});
			});
		</script>
		<?php
		session_start();
		?>
	</head>
	<body style="background-color: #222222">
		<div class="btn btn-lg" id="bttop"><img width="65" height="32" src="images/batmanToTop.png" />
		</div>
		<div class="container fluid">
			<?php
			if(isset($_REQUEST['checkConfig']))
			{
			if($_REQUEST['checkConfig']==1){
			?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
					&times;
				</button>
				<strong>Lỗi! </strong> Mật Khẩu Xác Nhận Sai, Vui Lòng Nhập Lại!
			</div>
			<?php
			}
			}
			?>
			<div class="thumbnail">
				<form action="saveConfig.php" id="management" class="form-horizontal">
					<hr />
					<div class="form-group">
						<div class="alert alert-info col-md-12">
							<p class="lead text-center">
								<strong>Tùy Chỉnh Tài Khoản</strong>
							</p>
						</div>
					</div>
					<hr />
					<div class="form-group">
						<label class="control-label col-md-3"> ID Người Quản Trị </label>
						<div class="col-md-6">
							<input type="text" disabled="disabled" class="form-control" value="<?php echo($_SESSION["adminID"]); ?>" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3"> Email </label>
						<div class="col-md-6">
							<input type="text" disabled="disabled" class="form-control" value="<?php echo($_SESSION["adminLog"]); ?>" />
						</div>
					</div>
					<hr />
					<div class="form-group">
						<label class="control-label col-md-3">Mật Khẩu Mới</label>
						<div class="col-md-6">
							<input type="password" class="form-control required" minlength="8" id="password" name="newPassword" placeholder="Nhập Mật Khẩu Mới"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Lặp Lại Mật Khẩu Mới</label>
						<div class="col-md-6">
							<input type="password" class="form-control required" minlength="8" id="rePassword" name="rePassword" placeholder="Lặp Lại Mật Khẩu Mới"/>
						</div>
					</div>
					<hr />
					<div class="form-group">
						<label class="control-label col-md-3">Xác Nhận Mật Khẩu Cũ</label>
						<div class="col-md-6">
							<input type="password" class="form-control required" name="oldPassword" placeholder="Xác Nhận Mật Khẩu Cũ"/>
						</div>
					</div>
					<hr />
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<a href="index-admin.php" class="btn btn-info" >Trở Về</a>
							<button type="submit" class="btn btn-default">
								Lưu Tùy Chọn
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<br />
		<br />
	</body>
</html>
