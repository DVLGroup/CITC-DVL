					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

					<div>
					<h1 class="text-center text-danger">Thêm Dữ Liệu Thể Loại</h1>
					<div class="well">
						<form method="POST" action="addEditDelete/addTinTucCataloge.php" class="form-horizontal" id="management" enctype="multipart/form-data">
							<div class="form-group">
								<label class="control-label col-md-2">Tên Thể Loại</label>
								<div class="col-md-8">
								<input type="text" name="theLoaiName" class="form-control required" value="" placeholder="Nhập Tên Thể Loại"  />
								<!-- <input type="hidden" name="check" value="1" /> -->
								</div>
								<div class="col-md-offset-2"></div>
							</div>
							
							<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
									<div class="btn-group">
										<a href="index-admin.php?changePage=4" class="btn btn-info text-center">Hủy</a>
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