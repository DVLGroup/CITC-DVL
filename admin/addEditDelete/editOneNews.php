<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<link rel="stylesheet" href="../js/wysibb/theme/default/wbbtheme.css" />

		<!-- Javascript -->
		<script src="../js/jquery.min.js" type="text/javascript"></script>
		<script src="../js/bootstrap.js" type="text/javascript"></script>
		<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="../js/jquery.qtip.js" type="text/javascript"></script>
		<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="../js/messages_vi.js" type="text/javascript"></script>
		<script src="../js/wysibb/jquery.wysibb.js" type="text/javascript"></script>
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
				$("#editor").wysibb();
			});
		</script>
		<?php
		require '../Connect.php';
		if (!isset($_REQUEST['tintucID'])) {
				header('Location: ../index-admin.php');
		}
		
		$tintucIDEdit = $_REQUEST['tintucID'];
		
		$querySelectTinTuc = "select * from tintuc where tintuc_id = $tintucIDEdit";
		$resultSelectUser = mysql_query($querySelectTinTuc);
		$queryC = 'select * from tintuc_cataloge order by tintuc_cataloge_id asc';
		$resultC = mysql_query($queryC);
		$queryUser = 'select user_id,user_name from user where user_id != 2 order by user_id asc';
		$resultU = mysql_query($queryUser);
		
		while ($row = mysql_fetch_array($resultSelectUser)) {
			$title= $row['1'];
			$userId = $row['2'];
			$noiDung=$row['3'];
			$ngayDang = $row['4'];
			$keyword = $row['5'];
			$trangThai = $row['6'];
			$theLoai = $row['7'];
			
		}
		mysql_close($my_connect);
		// echo($emailEdit . $passwordEdit.$userLevelEdit);
	?>
	</head>
	<body>
		<div class="container">
			<div class="well">
				<form method="POST" action="../addEditDelete/editNews.php" class="form-horizontal" id="management">
					<input type="hidden" name="tintucID" value="<?php echo($tintucIDEdit); ?>" />
					
					<div class="form-group">
						<label class="control-label col-md-2">Tiêu Đề</label>
						<div class="col-md-8">
							<input type="text" name="tieuDe" class="form-control required" value="<?php echo($title); ?>" placeholder="Nhập Tiêu Đề"  />
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Mã Số Tác Giả</label>
						<div class="col-md-8">
							<input readonly="readonly" type="text" name="tacGia" class="form-control required" value="<?php echo($userId); ?>"/>
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Nội Dung</label>
						<div class="col-md-8">
							<textarea name="noiDung" id="editor"><?php echo($noiDung); ?></textarea>
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Ngày Đăng</label>
						<div class="col-md-8">
							<input disabled="disabled" type="text" name="ngayDang" class="form-control required" minlength="8" value="<?php echo($ngayDang); ?>" placeholder="Nhập Địa Chỉ" />
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Keyword</label>
						<div class="col-md-8">
							<input type="text" name="keyword" class="form-control required" value="<?php echo($keyword); ?>" placeholder="Nhập Tiêu Đề"  />
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Trạng Thái</label>
						<div class="col-md-8">
							<select class="form-control" name="trangThai">
								<?php
								if($trangThai == "Đã Ủng Hộ"){
								?>
								<option selected="selected" value="Đã Ủng Hộ">Đã Ủng Hộ</option>
								<option value="Chưa Ủng Hộ">Chưa Ủng Hộ</option>
								<?php
								} 
								else if($trangThai == "Chưa Ủng Hộ"){
								?>
								<option selected="selected" value="Chưa Ủng Hộ">Chưa Ủng Hộ</option>
								<option value="Đã Ủng Hộ">Đã Ủng Hộ</option>
								<?php
								}
								?>
								
							</select>
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-2">Thể Loại</label>
						<div class="col-md-8">
					
							<select name="theLoai" class="form-control">
								<?php
								while($row = mysql_fetch_array($resultC))
								{
									if($row['0']==$theLoai)
									{
										?>
										<option selected="selected" value="<?php echo($row['0']); ?>" ><?php echo($row['1']); ?></option>
										<?php
									}
									else {
										?>
										<option value="<?php echo($row['0']); ?>" ><?php echo($row['1']); ?></option>
										<?php
									}
								}
								?>
							</select>
						</div>
						<div class="col-md-offset-2"></div>

					</div>
					
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<div class="alert alert-warning">
								<strong>Cảnh Báo! </strong> Bạn Có Chắc Muốn Sửa Tin Tức: <strong><?php echo($title); ?></strong> Không?
							</div>
							<div class="btn-group">
								<a href="../index-admin.php?changePage=3" class="btn btn-info text-center">Không</a>
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