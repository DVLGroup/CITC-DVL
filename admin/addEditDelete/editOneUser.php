<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE HTML>
<html>
	<head>
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
		<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="../js/messages_vi.js" type="text/javascript"></script>
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
		require '../Connect.php';
		if (!isset($_REQUEST['userID'])) {
				header('Location: ../index-admin.php');
		}
		
		$userIDEdit = $_REQUEST['userID'];

		$querySelectUser = "select * from user where user_id = $userIDEdit";
		$resultSelectUser = mysql_query($querySelectUser);
		$querySelectLU = 'select * from user_level order by user_level_id asc';
		$resultSelectLU = mysql_query($querySelectLU);
		while ($row = mysql_fetch_array($resultSelectUser)) {
			$emailEdit = $row['1'];
			$userNameEdit = $row['2'];
			$userDchiEdit=$row['3'];
			$userAvatar = $row['4'];
			$userSDTEdit = $row['5'];
			$userLevelEdit = $row['6'];
			$passwordEdit = $row['7'];
			$description = $row['8'];
		}
		// echo($emailEdit . $passwordEdit.$userLevelEdit);
	?>
	</head>
	<body>
		<div class="container">
			<div class="well">
				<form method="POST" action="../addEditDelete/editUser.php" class="form-horizontal" id="management">
					<input type="hidden" name="userIDEdit" value="<?php echo($userIDEdit); ?>" />
					<div class="form-group">
						<label class="control-label col-md-2">Họ Tên</label>
						<div class="col-md-8">
							<input disabled="disabled" type="text" name="nameEdit" class="form-control required" value="<?php echo($userNameEdit); ?>" placeholder="Nhập Tên"  />
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Email</label>
						<div class="col-md-8">
							<input disabled="disabled" type="text" name="emailEdit" class="form-control required email" value="<?php echo($emailEdit); ?>" placeholder="Nhập Email"  />
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Mật Khẩu</label>
						<div class="col-md-8">
							<input type="password" name="passwordEdit" class="form-control required" minlength="8" value="<?php echo($passwordEdit); ?>" placeholder="Nhập Mật Khẩu" />
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Địa Chỉ</label>
						<div class="col-md-8">
							<input type="text" name="dChiEdit" class="form-control required" minlength="8" value="<?php echo($userDchiEdit); ?>" placeholder="Nhập Địa Chỉ" />
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Điện Thoại</label>
						<div class="col-md-8">
							<input type="text" name="sdtEdit" class="form-control required digits" minlength="8" value="<?php echo($userSDTEdit); ?>" placeholder="Nhập Địa Chỉ" />
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">Nhóm Người Dùng</label>
						<div class="col-md-8">
							<!-- <input type="text" name="userLevel" class="form-control" value="" placeholder="Nhập Nhóm" /> -->
							<select name="userLevelEdit" class="form-control">
								<?php
								while($rowSLU = mysql_fetch_array($resultSelectLU))
								{
									if($rowSLU['0']==$userLevelEdit)
									{
										?>
										<option selected="selected" value="<?php echo($rowSLU['0']); ?>" ><?php echo($rowSLU['1']); ?></option>
										<?php
									}
									else {
										?>
										<option value="<?php echo($rowSLU['0']); ?>" ><?php echo($rowSLU['1']); ?></option>
										<?php
									}
								}
								?>
							</select>
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Mô Tả</label>
						<div class="col-md-8">
							<textarea class="form-control" name="moTaEdit"><?php echo($description); ?></textarea>
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<div class="alert alert-warning">
								<strong>Cảnh Báo! </strong> Bạn Có Chắc Muốn Sửa User Có Email là: <strong><?php echo($emailEdit); ?></strong> Không?
							</div>
							<div class="btn-group">
								<a href="../index-admin.php?changePage=1" class="btn btn-info text-center">Không</a>
							</div>

							<div class="btn-group">
								
								<button class="btn btn-default" type="submit">Có</button>
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>