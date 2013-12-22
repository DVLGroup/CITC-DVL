				<?php
				$query = "select * from sanpham,daugia,user where user.user_id = daugia.user_id and sanpham.sp_id = daugia.sp_id order by sanpham.sp_id asc";
				$result = mysql_query($query);

				mysql_close($my_connect);
				?>
				<h1 class="text-danger">Bảng Dữ Liệu Các Phiên Đấu Giá</h1>
				<!-- <div class="btn-group">
					<a href="index-admin.php?changePage=11" class="btn btn-info">Thêm Mới</a>
				</div> -->
				<div class="btn-group">
					<a href="index-admin.php?changePage=9" class="btn btn-default">Làm Tươi Trang</a>
				</div>
				<div class="btn-group">
					<input placeholder="Tìm Kiếm..." type="search" name="search" class="form-control" value="" id="id_search" />
				</div>
				<div class="btn-group">
				<span class="loading text-primary">Loading...</span>
				</div>
				<hr id="Eight" />
				<div id="tableEight" class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th class="lead">STT</th>
								<th class="lead">Mã SP</th>
								<th class="lead">Tên SP</th>
								<th class="lead">ID User</th>
								<th class="lead">Tên Người Đấu Giá</th>
								<th class="lead">Giá Đấu</th>
								<th>&nbsp;</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							if($result){
							while ($row = mysql_fetch_array($result)) {

							?>
							<tr>
								<td><?php echo($i++); ?></td>
								<td><?php echo($row['0'])?></td>
								<td><?php echo($row['1']); 
									
									if($row['2']==0)
								 		echo(" <strong class='text-success'>(Đã Xong)</strong>"); 
									else {
										echo(" <strong class='text-danger'>(Đang Đấu Giá)</strong>");
									}
								 	?>
								</td>
								
								<td><?php echo($row['7']); ?></td>
								<td><?php echo($row['11']); ?></td>
								<td><?php echo($row['8']); ?></td>

							
								<td>
									<a target="_blank" href="<?php echo($row['5']);?>">Xem Hình</a>
									&nbsp;
									<a href="addEditDelete/deleteOneDauGia.php?spID=<?php echo($row['0']); ?>&userID=<?php echo($row['7']); ?>&spName=<?php echo($row['1']); ?>&userName=<?php echo($row['11']); ?>">Xóa</a>
								</td>
							</tr>
							<?php
							}
							}
							?>
						</tbody>
					</table>
				</div>
				<hr />

