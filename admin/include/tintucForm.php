				<?php
				$query = "SELECT * FROM `tintuc`,tintuc_cataloge WHERE tintuc.`tintuc_cataloge_id` = tintuc_cataloge.`tintuc_cataloge_id` order by tintuc_id asc";
				$result = mysql_query($query);

				mysql_close($link);
				?>
				<h1 class="text-danger">Bảng Dữ Liệu Tin Tức</h1>
				<div class="btn-group">
					<a href="index-admin.php?changePage=7" class="btn btn-info">Thêm Mới</a>
				</div>
				<div class="btn-group">
					<a href="index-admin.php?changePage=3" class="btn btn-default">Làm Tươi Trang</a>
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
								<th class="lead">ID</th>
								<th class="lead">Tiêu Đề</th>
								<th class="lead">Ngày Post</th>
								<th class="lead">Trạng Thái</th>
								<th class="lead">Loại Tin</th>
							
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
								<td><?php echo($row['4']); ?></td>
								<td><?php echo($row['6']); ?></td>
								<td><?php echo($row['9']); ?></td>


								<td>
									<a href="addEditDelete/editOneNews.php?tintucID=<?php echo($row['0']); ?>">Sửa</a> 
									&nbsp; 
									<a href="addEditDelete/deleteOneNews.php?tintucID=<?php echo($row['0']); ?>&tintucTitle=<?php echo($row['1']); ?>">Xóa</a>
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

