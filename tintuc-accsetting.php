
<?php
	include 'Connect.php';
	if(isset($_SESSION['user'])){
		$query = "SELECT * FROM user WHERE user_id = ".$_SESSION['userID']." ";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
	
?>


<div  class="modal fade" id="account-setting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center">HỒ SƠ CÁ NHÂN</h3>
      </div>
      <div class="modal-body">
				<div class="">
					<h4>Thông tin thành viên/Tổ chức</h4>
					<table class="table table-bordered table-striped">
						<tr class="active">
							<td colspan="2">
							<div class="">
								<div class="col-lg-8">
									<img class="thumbnail pull-left" src="" data-src="holder.js/450x150" />
								</div>

								<div class="col-lg-4 pull-left">
									Tài khoản: <b><?php echo $row['user_name']; ?></b></br>
									Số lần quyên góp: 9 </br>
									Tổng số tiền quyên góp: 100.000.000 VND </br>
								</div>
							</div></td>
						</tr>
						<tr>
							<th class="col-lg-3"> Họ tên/Tên công ty </th>
							<td class="col-lg-9"> <?php echo $row['user_name']; ?> </td>
						</tr>
						<tr>
							<th> Ngày tháng năm sinh </th>
							<td> 12/07/1992 </td>
						</tr>
						<tr>
							<th> Địa chỉ </th>
							<td> <?php echo $row['user_address']; ?></td>
						</tr>
						<tr>
							<th> Số điện thoại </th>
							<td> <?php echo $row['user_sdt']; ?> </td>
						</tr>
						<tr>
							<th> Facebook </th>
							<td> Trọng Lợi </td>
						</tr>
						<tr>
							<th> Email </th>
							<td> <?php echo $row['user_email']; ?> </td>
						</tr>
						<tr>
							<th> Lần truy cập trước </th>
							<td> Thứ 7, ngày 30/7/2013 19:30 </td>
						</tr>
					</table>
					
					<div class="user-description">
						<h4>Giới thiệu về bản thân/Tổ chức:</h4>
						<?php echo bbcode_to_html($row['user_description']); ?>
						
					</div>
				</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary">Lưu thay đổi</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php

}
?>