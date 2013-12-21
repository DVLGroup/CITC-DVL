				<?php
				$query = "select * from user,user_level where user.user_level_id = user_level.user_level_id and user.user_level_id != '1' order by user.user_id asc";
				$result = mysql_query($query);

				mysql_close($link);
				?>
				<h1 class="text-danger">Bảng Dữ Liệu Người Dùng</h1>
				<div class="btn-group">
					<a href="index-admin.php?changePage=5" class="btn btn-info">Thêm Mới</a>
				</div>
				<div class="btn-group">
					<a href="index-admin.php?changePage=1" class="btn btn-default">Làm Tươi Trang</a>
				</div>
				<div class="btn-group">
					<input placeholder="Tìm Kiếm..." type="search" name="search" class="form-control" value="" id="id_search" />
				</div>
				<!-- <div class="btn-group">
				<span class="loading text-primary">Loading...</span>
				</div> -->
				<hr id="Eight" />
				<div id="tableEight" class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th class="lead">STT</th>
								<th class="lead">ID</th>
								<th class="lead">Email</th>
								<th class="lead">Họ Tên</th>
								<th class="lead">Địa Chỉ</th>
								<th class="lead">SĐT</th>
								<th class="lead">Nhóm</th>
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
								<td><?php echo($row['1']); ?></td>
								<td><?php echo($row['2']); ?></td>
								<td><?php echo($row['3']); ?></td>
								<td><?php echo($row['5']); ?></td>
								<td><?php echo($row['10']); ?></td>

								<td><a href="addEditDelete/editOneUser.php?userID=<?php echo($row['0']); ?>">Sửa</a> &nbsp; <a href="addEditDelete/deleteOneUser.php?userID=<?php echo($row['0']); ?>&userEmail=<?php echo($row['1']); ?>">Xóa</a></td>
							</tr>
							<?php
							}
							}
							?>
						</tbody>
					</table>
				</div>
				<hr />

