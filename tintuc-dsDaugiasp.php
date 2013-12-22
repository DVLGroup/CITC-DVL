<?php
	include 'Connect.php';
	$isUser = false;
    if(array_key_exists('user', $_SESSION)){
		$isUser = true;
	}
	
	$query = "SELECT * FROM sanpham ";
	$result = mysql_query($query);
	
	while ($rw = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$results[] = $rw;
	}
	mysql_free_result($result);
	
?>
<div id="show">
</div>
<!------------ DS Sản phẩm đấu giá-------------->
<div id="dsDaugiasp" class="tab-pane fade">
	<ul class="list-unstyled">
		<?php
			if(isset($results)){
				
				foreach ($results as $rs) {
					$query_chkstatus = "SELECT sanpham.sp_id, daugia.user_id FROM sanpham, daugia WHERE sanpham.sp_id = daugia.sp_id AND sanpham.sp_id = '".$rs['sp_id']."' ";
					$result = mysql_query($query_chkstatus);
					$status = $rs['sp_status'];
					$output = null;
					while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
						$resultsp[] = $row;
					}
					 
					if(isset($resultsp)){
						if($status){
							$output = '<div class="info">';
							$output .='<b style="color:red; font-size: 17px" >'.$rs['sp_name'].'</b>';
							$output .='<p><i style="color:red;">Còn '.strtotime( - $rs['sp_time']).' </i></p>';
							$output .='</div>';
							if(isset($_SESSION['userID'])){
								$user_id = $_SESSION['userID'];
								$query = "SELECT sp_price_now FROM user, daugia WHERE user.user_id = daugia.user_id AND daugia.sp_id = '".$rs['sp_id']."' AND user.user_id = '$user_id' ";
								//echo $query;
								$resultd = mysql_query($query);
								if(mysql_affected_rows() > 0){
									$row = mysql_fetch_assoc($resultd);
									$output .='<p style="margin-top: 10px;">Đã đặt: '.$row['sp_price_now'].' VNĐ</p>';
									$output .='<p align="center"><button class="btn btn-xs btn-danger">Sửa</button></p>';
								}
								else{
									$output .='<p style="margin-top: 10px;"><input class="form-textbox" type="text" placeholder="Nhập giá muốn đấu" style="width: 80%"/> VNĐ</p>';
									$output .='<p align="center"><button class="btn btn-xs btn-danger">Đồng ý</button></p>';
								}
							}
							
						}
						else if(!$status){
							$query_ubest = "SELECT user_name FROM user, daugia WHERE user.user_id= daugia.user_id AND daugia.sp_id= '".$rs['sp_id']."' ORDER BY daugia.sp_price_now DESC LIMIT 1";
							$result = mysql_query($query_ubest);
							$rw_ub = mysql_fetch_assoc($result);
							
							$output = '<div class="info">';
							$output .='<b style="color: #fff; font-size: 17px">'.$rs['sp_name'].'</b>';
							$output .='<p><i class="text-success">Đấu giá xong</i></p>';
							$output .='</div>';
							$output .='<p style="margin-top: 10px;">Người chiến thắng: <b>'.$rw_ub['user_name'].'</b></p>';
						}
					}
					echo '<li >';
					echo	'<img src="'.$rs['sp_image'].'" style="width: 200px; height: 200px;"/>';
					echo $output;
					echo '</li>';
				}
			}
		
		?>
		<li >
			<img data-src="holder.js/200x200"/>
			<div class="info">
				<b>Tên sản phẩm</b>
				<p><i class="text-success">Đấu giá xong</i></p>
			</div>
			<p style="margin-top: 10px;">Người chiến thắng: <b>Trọng Lợi</b></p>
		</li>
		<li >
			<img data-src="holder.js/200x200"/>
			<div class="info">
				<b class="text-danger" >Tên sản phẩm</b>
				<p><i class="countdown text-danger">2:30:33</i></p>
			</div>
			<p style="margin-top: 10px;"><input class="form-textbox" type="text" placeholder="Nhập giá muốn đấu" style="width: 80%"/> VNĐ</p>
			<p align="center"><button class="btn btn-xs btn-danger">Đồng ý</button></p>
			
		</li>
		<li >
			<img data-src="holder.js/200x200"/>
			<div class="info">
				<b class="text-danger" >Tên sản phẩm</b>
				<p><i class="text-danger">Còn <?php  ?></i></p>
			</div>
			<p style="margin-top: 10px;">Đã đặt: 12000 VNĐ</p>
			<p align="center"><button class="btn btn-xs btn-danger">Sửa</button></p>
			
		</li>
		<li >
			<img data-src="holder.js/200x200"/>
			<div class="info">
				<b>Tên sản phẩm</b>
				<p><i>status</i></p>
			</div>
			<p style="margin-top: 10px;"><input class="form-textbox" type="text" placeholder="Nhập giá muốn đấu" style="width: 80%"/> VNĐ</p>
			<p align="center"><button class="btn btn-xs btn-danger">Đồng ý</button></p>
			
		</li>
	</ul>
</div>
