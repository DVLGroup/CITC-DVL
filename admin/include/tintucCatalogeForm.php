				<?php
				$query = "select * from tintuc_cataloge order by tintuc_cataloge_id asc";
				$result = mysql_query($query);

				mysql_close($link);
				?>
				<h1 class="text-danger">Bảng Dữ Liệu Thể Loại</h1>
				<div class="btn-group">
					<a href="index-admin.php?changePage=12" class="btn btn-info">Thêm Mới</a>
				</div>
				<div class="btn-group">
					<a href="index-admin.php?changePage=4" class="btn btn-default">Làm Tươi Trang</a>
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
								<th class="lead">Tên Thể Loại</th>
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
								

								<td>
									&nbsp; <a href="addEditDelete/deleteOneTinTucCataloge.php?tintucCatalogeID=<?php echo($row['0']); ?>&tintucCatalogeName=<?php echo($row['1']); ?>">Xóa</a>
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

