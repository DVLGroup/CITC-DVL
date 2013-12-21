
<?php
	include 'Connect.php';
	//////// NhungHoanCanhKhoKhan Item ////////////
	//Van chua toi uu vi da luu phan tu vao mang nhung lai tai lai trang khi nhay trang
			//Phuong phap: ap dung ajax vao khi nhay trang
			
			
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
			$query = "SELECT * FROM tintuc WHERE tintuc_cataloge_id = 1 LIMIT $limit ";
			$result = mysql_query($query);
			
			
			//TOTAL PAGE = tong so record/so hien thi tren 1 trang
			$total_element = mysql_numrows($result);	//Tong so record
			$total_page = ceil($total_element/$limit_per_page);	
			
			
			//Luu ket qua vao mang co dinh va giai phong result
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$resultsHCKK[] = $row;
			}
			mysql_free_result($result);
			mysql_close($my_connect);
			
			
			//Ham Phan trang
			function Pagination($page, $total_page, $self){
				if($total_page == 1){}else{
					echo '<div align="center">';
					echo '<ul class="pagination">';
					//Nut den Trang truoc
					if($page == 1){
						echo '<li class="disabled"><a href="#">&laquo;</a></li>';
					}
					else {
						echo '<li><a href="'.$self.'&page='.($page - 1).'">&laquo;</a></li>';
					}
					
					//Phan number page		
					for($i = 1; $i <= $total_page; $i++){
						if($i == $page){
							echo '<li class="active"><a href="'.$self.'&page='.$i.'">'.$i.'</a></li>';
						}
						else {
							echo '<li><a href="'.$self.'&page='.$i.'">'.$i.'</a></li>';
						}
					}
					
					//Nut den Trang sau		
					if($page == $total_page){
						echo '<li class="disabled"><a href="#">&raquo;</a></li>';
					}
					else {
						echo '<li><a href="'.$self.'&page='.($page + 1).'">&raquo;</a></li>';
					}
					echo '</ul>';
					echo '</div>';
				}
			}// Ket thuc ham phan trang
?>




<!------------ ViNguoiNgheo Item -------------->
<div id="dsbaiHCKK" class="tab-pane fade in active">
	<?php
		if(isset($resultsHCKK)){
			foreach ($resultsHCKK as $rs) {
				echo '<div class="thumbnail">';
				echo '<div>';
				echo '<img src="img/bk_date.png" data-src="holder.js/70x35" style="position: relative; top:5px; left: -14px; width: 70px; height: 35px">';
				echo '<p class="pull-right">10 <i class="glyphicon glyphicon-comment"></i></p>';
				echo '</div>';
				echo '<div class="" style="padding:0 20px">';
				echo '<a href=""><h3>'.$rs['tintuc_title'].'</h3></a>';
				
				$query = "SELECT user_name FROM user WHERE user_id = '".$rs['user_id']."'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_assoc($result)) {
					$user_name = $row['user_name'];
				}
				echo '<p><i class="glyphicon glyphicon-pencil"></i> Bài viết bởi <a href="">'.$user_name.'</a>. Ngày đăng: '.$rs['tintuc_postdate'].' <i class="pull-right">'.$rs['tintuc_status'].'</i></p>';
				echo '<p>'.$rs['tintuc_content'].'</p>';
				echo '<a href="index.php?newsID='.$rs['tintuc_id'].'" class="btn btn-sm btn-primary pull-right">Đọc tiếp...</a>';
				echo '</div>';
				echo '<div class="clearfix"></div>';
				echo '</div>';
				echo '<p></p>';
			}
		}
	
	
	?>
	<div class="thumbnail">
		<div>
			<img src="img/bk_date.png" data-src="holder.js/70x35" style="position: relative; top:5px; left: -14px; width: 70px; height: 35px">
			<p class="pull-right">
				10 <i class="glyphicon glyphicon-comment"></i>
			</p>
		</div>
		<div class="" style="padding:0 20px">
			<a href=""><h3>Leap Motion, Chromecast, Google Glass và sân chơi mới cho developer</h3></a>
			<p>
				<i class="glyphicon glyphicon-pencil"></i> Bài viết bởi <a href="">admin</a>. Ngày đăng: <i class="pull-right">Status</i>

			</p>
			<p><img class="text-center" src="" data-src="holder.js/600x300" />
			</p>
			<p>
				Vừa mới nhận được con Leap Motion, có chút cảm hứng nên viết bài này, chia sẻ với các bạn một chút góc nhìn về công nghệ của tương lai và hướng đi mới của các lập trình viên.
			</p>
			<p>
				Leap Motion là một trong 3 thiết bị đang được quan tâm trên cộng đồng công nghệ thế giới. Trong bài viết này, mình sẽ giới thiệu với các bạn về 3 thiết bị mà mình nghĩ có thể gây được sức hút cho cả người dùng và giới developer; đó là Leap Motion, Google Chromecast và Google Glass.
			</p>
			<a href="" class="btn btn-sm btn-primary pull-right">read more...</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<p></p>
	<div class="thumbnail">
		<div>
			<img src="img/bk_date.png" data-src="holder.js/70x35" style="position: relative; top:5px; left: -14px; width: 70px; height: 35px">
			<p class="pull-right">
				10 <i class="glyphicon glyphicon-comment"></i>
			</p>
		</div>
		<div class="" style="padding:0 20px">
			<a href=""><h3>Leap Motion, Chromecast, Google Glass và sân chơi mới cho developer</h3></a>
			<p>
				<i class="glyphicon glyphicon-pencil"></i> Đăng trong danh mục <a href="">Technology</a> bởi admin

			</p>
			<p><img class="text-center" src="" data-src="holder.js/600x300" />
			</p>
			<p>
				Vừa mới nhận được con Leap Motion, có chút cảm hứng nên viết bài này, chia sẻ với các bạn một chút góc nhìn về công nghệ của tương lai và hướng đi mới của các lập trình viên.
			</p>
			<p>
				Leap Motion là một trong 3 thiết bị đang được quan tâm trên cộng đồng công nghệ thế giới. Trong bài viết này, mình sẽ giới thiệu với các bạn về 3 thiết bị mà mình nghĩ có thể gây được sức hút cho cả người dùng và giới developer; đó là Leap Motion, Google Chromecast và Google Glass.
			</p>
			<a href="" class="btn btn-sm btn-primary pull-right">read more...</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>