

<?php
	include 'Connect.php';
	if(isset($_GET['newsID'])){
		$tintuc_id = $_GET['newsID'];
		$query = "SELECT * FROM tintuc WHERE tintuc_id = '$tintuc_id'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
			$results[] = $row;
		}
		mysql_free_result($result);
	}

	if(isset($results)){
		foreach ($results as $rs) {
			    echo '<div id="tintuc-review" class="tab-pane fade in thumbnail">';
			    echo '<div>';
				echo '<img src="img/bk_date.png" data-src="holder.js/70x35" style="position: relative; top:5px; left: -14px; width: 70px; height: 35px">';
				echo '<a href="index.php">Trang chủ</a>'
				//Facebook Share button -->
				?>
				<div class="pull-right" style="width: 300px">
					<a href="#" 
					  onclick="
					    window.open(
					      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://localhost/CITC-DVL/index.php?newsID=<?php echo $rs['tintuc_id']; ?>'), 
					      'facebook-share-dialog', 
					      'width=626,height=436'); 
					    return false;">
					    <img class="pull-right" src="images/share-buttons.png" title="Chia bài lên facebook" style="width: 100px; height: 30px"/>
					</a>
				</div>
				<div class="clearfix"></div>
				<?php
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
				echo '<p>'.bbcode_to_html($rs['tintuc_content']).'</p>';
				echo '</div>';
				echo '<div class="clearfix"></div>';
				echo '<p></p>';
?>
				</br>
				</br>
				<h4>Các bài viết liên quan:</h4>
				<ul class="list-unstyled">
					<li>
						<a href="">Firefox Addon cho phát triển web</a>
					</li>
					<li>
						<a href="">Tôi nghĩ việc ở Vinagame</a>
					</li>
					<li>
						<a href="">Tự động chuyển trang – Auto Redirect cho website</a>
					</li>
				</ul>
				</br>
				<div class="clearfix"></div>
				</br>
				<!------- Viết Bình luận -------->
				<h4>Viết bình luận:</h4>
				<!--Facebook comment -->
				<div class="fb-comments" data-href="http://localhost/CITC-DVL/index.php?newsID=<?php echo $rs['tintuc_id']; ?>" data-colorscheme="light" data-numposts="10" data-width="760px"></div>
			
		
		


<?php
			}
		}
?>