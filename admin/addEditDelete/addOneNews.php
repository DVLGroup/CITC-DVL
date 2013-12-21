					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<?php
					$queryC = 'select * from tintuc_cataloge order by tintuc_cataloge_id asc';
					$resultC = mysql_query($queryC);
					$queryUser = 'select user_id,user_name from user order by user_id asc';
					$resultU = mysql_query($queryUser);
					?>
					<div>
					<h1 class="text-center text-danger">Thêm Dữ Liệu Tin Tức</h1>
					<div class="well">
						<form method="POST" action="addEditDelete/addNews.php" class="form-horizontal" id="management" enctype="multipart/form-data">
							
							<div class="form-group">
								<label class="control-label col-md-2">Tiêu Đề</label>
								<div class="col-md-8">
								<input type="text" name="tieuDe" class="form-control required" value="" placeholder="Nhập Tiêu Đề"  />
								<!-- <input type="hidden" name="check" value="1" /> -->
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">User Đằng Bài</label>
								<div class="col-md-8">
									<select class="form-control" name="userID">
										<?php
										while($row = mysql_fetch_array($resultU)){
										?>
										<option value="<?php echo($row['0']); ?>">
											<?php echo($row['1']); ?>
										</option>
										<?php
										}
										?>
									</select>
									<!-- <input type="password" name="password" class="form-control required" minlength="8" value="" placeholder="Nhập Mật Khẩu" /> -->
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Nội Dung</label>
								<div class="col-md-8">
									<textarea id="editor" name="noiDung"></textarea>
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Keyword</label>
								<div class="col-md-8">
									<input type="text" name="keyword" class="form-control required" minlength="8" value="" placeholder="Nhập Số Keyword" />
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Trạng Thái</label>
								<div class="col-md-8">
									<select class="form-control" name="trangThai">
										<option value="Đã Ủng Hộ">Đã Ủng Hộ</option>
										<option value="Chưa Ủng Hộ">Chưa Ủng Hộ</option>
									</select>
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Thể Loại</label>
								<div class="col-md-8">
									<!-- <input type="text" name="userLevel" class="form-control" value="" placeholder="Nhập Nhóm" /> -->
									<select name="theLoai" class="form-control">
										<?php
										while($rowC = mysql_fetch_array($resultC))
										{
										?>
										<option value="<?php echo($rowC['0']); ?>" ><?php echo($rowC['1']); ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<div class="btn-group">
										<a href="index-admin.php?changePage=3" class="btn btn-info text-center">Hủy</a>
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