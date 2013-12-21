
<?php 
	include 'Connect.php';
	////Nếu là user thì gán $isUser = true
	if (isset($_SESSION['user'])){	
	
	$sql = "SELECT * FROM sanpham, daugia WHERE sanpham.sp_id = daugia.sp_id AND sanpham.sp_status = '1' AND daugia.user_id = '".$_SESSION['user']."'";
	$rs = mysql_query($sql);
	while ($rw = mysql_fetch_array($rs, MYSQL_ASSOC)) {
		$results[] = $rw;
	}
	
	
?>

<!-------------- Sp đang được đấu giá -------------->
<div class="panel panel-primary">
  <div class="panel-heading">Sản phẩm đang đấu giá</div>
  <div class="panel-body">
    <?php
    	if(isset($results)){
    		foreach ($results as $rs) {
				echo '<div style="border: 1px solid #CCC">';
				echo '<h4 align="center">'.$rs['sp_name'].'</h4>';
				echo '<p align="center"><i class="text-danger" >Đang đấu giá</i></p';
				echo '<img src="'.$rs['sp_img'].'" style="width: 100px"/>';
				echo '<p align="center">Giá gốc: '.$rs['sp_price_goc'].' VND</p>';
				echo '<p align="center" class="text-success">Đấu giá: '.$rs['sp_price_now'].' VND</p>';
				echo '<p align="center"><button>Sửa giá</button></p>';
				echo '<p></p>';
			}
    	}
    ?>
  </div>
</div>

<?php
}
?>

