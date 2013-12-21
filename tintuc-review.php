

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
			}
		}
?>
				     	</br>
				        		</br>
				        		<h4>Các bài viết liên quan:</h4>
				        		<ul class="list-unstyled">
				        			<li><a href="">Firefox Addon cho phát triển web</a></li>
				        			<li><a href="">Tôi nghĩ việc ở Vinagame</a></li>
				        			<li><a href="">Tự động chuyển trang – Auto Redirect cho website</a></li>
				        		</ul>
				        		</br>
				        		<!------- Bình luận -------->
				        		<h4>Bình luận:</h4>
				        		<div class="">
				        			
				        		</div>
				        		<div class="clearfix"></div>
				        		</br>
				        		<!------- Viết Bình luận -------->
				        		<h4>Viết bình luận:</h4>
				        		<div>
				        			<div class="pull-left">
					        			<img class="thumbnail" src="" alt="" data-src="holder.js/80x80" />
					        			<p><a href=""><b class="text-warning">trongloikt192</b></a></p>
				        			</div>
				        			<textarea class="form-control pull-right" style="width: 630px; height: 100px"></textarea>
				        			<div class="clearfix"></div>
				        			<div >
				        				<p style="margin-top: "><a href="" class="btn btn-xs btn-primary pull-right">Gửi bình luận</a></p>
				        			</div>
				        		</div>
			        		</div>
			        		
			        		<div class="clearfix"></div>
			        	</div>

   </div>
