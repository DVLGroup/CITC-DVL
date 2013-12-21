<?php
    include 'Connect.php';
	//////// Tổ chức quyên góp từ thiện Item ////////////
			
			
			//****
			$limit = 100;			//Gioi han **
			$limit_per_page = 5; 	//Gioi han hien thi tren 1 trang **
			
			//Lay number PAGE hien thi
			///Neu ko co para PAGE thi set mac dinh la page = 1 va START la 0
			if(isset($_REQUEST['page']) && $_REQUEST['page'] > 1){
				$page = $_REQUEST['page'];
				$start = ($page - 1) * $limit_per_page;
			}else{
				$page = 1; 
				$start = 0;
			} 
			//Trang hien tai
			$self = $_SERVER['PHP_SELF'] . '?';	
			
			//Query select *****
			$query = "SELECT * FROM user WHERE user_level_id = 4 LIMIT $limit ";
			$result = mysql_query($query);
			
			
			//TOTAL PAGE = tong so record/so hien thi tren 1 trang
			$total_element = mysql_numrows($result);	//Tong so record
			$total_page = ceil($total_element/$limit_per_page);	
			
			
			//Luu ket qua vao mang co dinh va giai phong result
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$resultsTCTT[] = $row;
			}
			mysql_free_result($result);
?>

<!------------ DS tổ chức từ thiện -------------->
<div id="dsTCTT" class="tab-pane fade">
	<?php
		
				
		if(isset($resultsTCTT)){
			foreach (array_slice($resultsTCTT, $start, $limit_per_page) as $rs) {
				echo '<div class="thumbnail">';
				echo '<div>';
				echo '<img src="img/bk_date.png" data-src="holder.js/70x35" style="position: relative; top:5px; left: -14px; width: 70px; height: 35px">';
				echo '<p class="pull-right">10 <i class="glyphicon glyphicon-comment"></i></p>';
				echo '</div>';
				echo '<div class="" style="padding:0 20px">';
				echo '<a href="index.php?chitietUserID='.$rs['user_id'].'"><h3>'.$rs['user_name'].'</h3></a>';
				echo '<p>'.$rs['user_address'].'</p>';
				echo '<p><img src="'.$rs['user_avatar'].'" /></p>';
				echo '<p>'.$rs['user_description'].'</p>';
				echo '<a href="index.php?chitietUserID='.$rs['user_id'].'" class="btn btn-sm btn-primary pull-right">Đọc tiếp...</a>';
				echo '</div>';
				echo '<div class="clearfix"></div>';
				echo '</div>';
				echo '<p></p>';
			}
		}
	
		Pagination($page, $total_page, $self);
		mysql_close($my_connect);
	?>
</div>