<?php
    include 'Connect.php';
	//////// Tâm sự của bạn đọc Item ////////////
			
			
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
			$query = "SELECT * FROM tintuc WHERE tintuc_cataloge_id = 2 LIMIT $limit ";
			$result = mysql_query($query);
			
			
			//TOTAL PAGE = tong so record/so hien thi tren 1 trang
			$total_element = mysql_numrows($result);	//Tong so record
			$total_page = ceil($total_element/$limit_per_page);	
			
			
			//Luu ket qua vao mang co dinh va giai phong result
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$resultsbvU[] = $row;
			}
			mysql_free_result($result);
?>



<!------------ DS bài viết tâm sự những hoàn cảnh khó khăn do người dùng viết ------->
<div id="dsbaiUser" class="tab-pane fade">
	<?php
		if(isset($resultsbvU)){
			foreach (array_slice($resultsbvU, $start, $limit_per_page) as $rs) {
				echo '<div class="thumbnail">';
				echo '<div>';
				echo '<img src="img/bk_date.png" data-src="holder.js/70x35" style="position: relative; top:5px; left: -14px; width: 70px; height: 35px">';
				echo '<p class="pull-right">10 <i class="glyphicon glyphicon-comment"></i></p>';
				echo '</div>';
				echo '<div class="" style="padding:0 20px">';
				echo '<a href=""><h3>'.$rs['tintuc_title'].'</h3></a>';
				
				$query = "SELECT user_name FROM user WHERE user_id = ".$rs['user_id']."";
				$result = mysql_query($query);
				$user_name = null;
				while ($rw = mysql_fetch_array($result, MYSQL_ASSOC)) {
					$user_name = $rw['user_name'];
				}
				$status = null;
				if($rs['tintuc_status'] == "Đã Ủng Hộ"){
					$status = '<i class="pull-right text-success">Đã được hỗ trợ</i>';
				}else{
					$status = '<i class="pull-right text-danger">Chưa được hỗ trợ</i>';
				}
				
				echo '<p><i class="glyphicon glyphicon-pencil"></i> Bài viết bởi <a href="">'.$user_name.'</a>. Ngày đăng: '.$rs['tintuc_postdate'].' '.$status.'</p>';
				echo '<p>'.$rs['tintuc_content'].'</p>';
				echo '<a href="index.php?newsID='.$rs['tintuc_id'].'" class="btn btn-sm btn-primary pull-right">Đọc tiếp...</a>';
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