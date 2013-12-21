
<?php 
	include 'Connect.php';
	////Nếu là user thì gán $isUser = true
	if (isset($_SESSION['user'])){	
	
	$sql = "SELECT * FROM sanpham, daugia WHERE sanpham.sp_id = daugia.sp_id AND sanpham.sp_status = '1' AND daugia.user_id = '".$_SESSION['userID']."'";
	$rw = mysql_query($sql);
	$i=0;
	while ($rs = mysql_fetch_array($rw, MYSQL_ASSOC)) {
		++$i;
	?>

<!-------------- Sp đang được đấu giá -------------->
<div class="panel panel-primary">
  <div class="panel-heading">Sản phẩm đang đấu giá</div>
  <div class="panel-body">
  	<?php
    echo '<div style="border: 1px solid #CCC">';
				echo '<h4 align="center">'.$rs['sp_name'].'</h4>';
				echo '<p align="center"><i class="text-danger" >Đang đấu giá</i></p';
				echo '<img src="'.$rs['sp_image'].'" style="width: 100px; height: 100px"/>';
				echo '<p align="center">Giá gốc: '.$rs['sp_price_goc'].' VND</p>';
				echo '<p align="center" class="text-success">Đấu giá: '.$rs['sp_price_now'].' VND</p>';
				echo '<p align="center"><button>Đấu giá khác</button></p>';
				echo '<p></p>';
				echo '</div>';
				?>
  </div>
</div>

<?php
}
	mysql_free_result($rw);
	}
?>

