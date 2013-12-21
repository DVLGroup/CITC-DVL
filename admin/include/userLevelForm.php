			<?php
			$queryLU = "select * from user_level order by user_level_id asc";
			$resultSLU = mysql_query($queryLU);
			?>
			<h1 class="text-danger">Bảng Dữ Liệu Nhóm Người Dùng</h1>
				<div class="btn-group">
					<a href="index-admin.php?changePage=6" class="btn btn-info">Thêm Mới</a>
				</div>
				<div class="btn-group">
					<a href="index-admin.php?changePage=2" class="btn btn-default">Làm Tươi Trang</a>
				</div>
				<div class="btn-group">
					<input placeholder="Tìm Kiếm..." type="search" name="search" class="form-control" value="" id="id_search" />
				</div>
			<div class="table-responsive">
						<table id="tableNine" class="table table-striped table-hover table-responsive">
							<thead>
								<tr>
									<th class="lead">STT</th>
									<th class="lead">ID Nhóm User</th>
									<th class="lead">Tên Nhóm User</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tbody>							
								<?php 
								$i = 1;
								if($resultSLU){
								
								while($row = mysql_fetch_array($resultSLU)){
								?>
								<tr>
									<td><?php echo($i++); ?></td>
									<td><?php echo($row['0']); ?></td>
									<td><?php echo($row['1']); ?></td>
									<td>
										&nbsp;
										<a href="addEditDelete/deleteOneUserLevel.php?userLvlId=<?php echo($row['0']); ?>&userLvlName=<?php echo($row['1']); ?>">Xóa</a>
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