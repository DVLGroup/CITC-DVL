					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<?php
					$queryLU = 'select * from user_level order by user_level_id asc';
					$resultLU = mysql_query($queryLU);
					?>
					<div id="addUser">
					<h1 class="text-center text-danger">Thêm Dữ Liệu Người Dùng</h1>
					<div class="well">
						<form method="POST" action="addEditDelete/addUser.php" class="form-horizontal" id="management" enctype="multipart/form-data">
							<div class="form-group">
								<label class="control-label col-md-2">Họ Tên</label>
								<div class="col-md-8">
								<input type="text" name="name" class="form-control required" value="" placeholder="Nhập Họ Tên"  />
								<!-- <input type="hidden" name="check" value="1" /> -->
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Email</label>
								<div class="col-md-8">
								<input type="text" name="email" class="form-control required email" value="" placeholder="Nhập Email"  />
								<!-- <input type="hidden" name="check" value="1" /> -->
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Mật Khẩu</label>
								<div class="col-md-8">
									<input type="password" name="password" class="form-control required" minlength="8" value="" placeholder="Nhập Mật Khẩu" />
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Địa Chỉ</label>
								<div class="col-md-8">
									<input type="text" name="diachi" class="form-control required" minlength="8" value="" placeholder="Nhập Địa Chỉ" />
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Số Điện Thoại</label>
								<div class="col-md-8">
									<input type="text" name="sdt" class="form-control required digits" minlength="8" value="" placeholder="Nhập Số Điện Thoại" />
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Avatar</label>
								<div class="col-md-8">
									<input type="file" accept="jpeg|png|jpg" name="avatar" class="form-control required" minlength="8" value="" />
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Nhóm Người Dùng</label>
								<div class="col-md-8">
									<!-- <input type="text" name="userLevel" class="form-control" value="" placeholder="Nhập Nhóm" /> -->
									<select name="userLevel" class="form-control">
										<?php
										while($rowLU = mysql_fetch_array($resultLU))
										{
										?>
										<option value="<?php echo($rowLU['0']); ?>" ><?php echo($rowLU['1']); ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Mô Tả</label>
								<div class="col-md-8">
									<textarea name="moTa" class="form-control"></textarea>
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<div class="btn-group">
										<a href="index-admin.php?changePage=1" class="btn btn-info text-center">Hủy</a>
									</div>
									
									<div class="btn-group">
										<button type="submit" class="btn btn-default">Đồng Ý</button>
									</div>
									
									<div class="btn-group">
										<button type="reset" class="btn btn-warning">Làm Tươi Form</button>
									</div>
								</div>
							</div>
						</form>
						
					</div>
				</div>