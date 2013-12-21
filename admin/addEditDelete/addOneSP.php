					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

					<div>
					<h1 class="text-center text-danger">Thêm Dữ Liệu Sản Phẩm</h1>
					<div class="well">
						<form method="POST" action="addEditDelete/addSP.php" class="form-horizontal" id="management" enctype="multipart/form-data">
							<div class="form-group">
								<label class="control-label col-md-2">Tên Sản Phẩm</label>
								<div class="col-md-8">
								<input type="text" name="spName" class="form-control required" value="" placeholder="Nhập Tên Sản Phẩm"  />
								<!-- <input type="hidden" name="check" value="1" /> -->
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Trạng Thái</label>
								<div class="col-md-8">
								<input class="form-control" name="trangThai" type="text" readonly="readonly" value="Đang Đấu Giá" />
								<!-- <input type="hidden" name="check" value="1" /> -->
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Thời Gian</label>
								<div class="col-md-8">
									<input type="datetime-local" name="thoiGian" class="form-control required"  value=""  />
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Giá Gốc</label>
								<div class="col-md-8">
									<input type="text" name="giaGoc" class="form-control required digits" value="" placeholder="Nhập Giá Gốc" />
								</div>
								<div class="col-md-offset-2"></div>

							</div>

							<div class="form-group">
								<label class="control-label col-md-2">Hình Đại Diện</label>
								<div class="col-md-8">
									<input type="url" name="avatar" class="form-control required url" minlength="8" value="" placeholder="Nhập URL Hình Đại Diện"/>
								</div>
								<div class="col-md-offset-2"></div>

							</div>
							
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<div class="btn-group">
										<a href="index-admin.php?changePage=8" class="btn btn-info text-center">Hủy</a>
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