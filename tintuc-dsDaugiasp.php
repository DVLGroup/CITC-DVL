<?php
	$isUser = false;
    if(array_key_exists('user', $_SESSION)){
		$isUser = true;
	}
	
	
?>
<div id="show">
</div>
<!------------ DS Nhà tài trợ -------------->
<div id="dsDaugiasp" class="tab-pane fade">
	<ul class="list-unstyled">
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
				<p><i class="text-danger">Còn 2 ngày 2h:30:33</i></p>
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