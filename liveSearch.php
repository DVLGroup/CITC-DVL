<?php
    include 'Connect.php';
	
	if(isset($_GET['liveSearch'])){
		$tu_khoa = $_GET['txt-search'];
		
		$html_result = '<li>';
		$html_result .=	'<a href="LINK">';
		$html_result .=	'<div class="media">';
		//$html_result .=	'<img class="media-object result-liveSearch-img pull-left" data-src="js/holder.js/64x64" src="THUMBNAIL" alt="">';
		$html_result .=	'<div class="media-body">';
		$html_result .=	'<h5 class="media-heading">TITLE</h5>';
		$html_result .=	'</div>';
		$html_result .=	'</div>';
		$html_result .=	'</a>';
		$html_result .=	'</li>';
		//
		$cataloge = 'CATALOGE';
		$link = 'LINK';
		$thumbnail = 'THUMBNAIL';
		$title = 'TITLE';
		
		//Câu truy vấn lấy danh sách kết quả ****
		$query = 'SELECT tintuc_id, tintuc_title FROM tintuc WHERE tintuc_title LIKE "%'.$tu_khoa.'%" ';
		$result = mysql_query($query);
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$results[] = $row;
		}
		
		if(isset($results)){
			//***** Edit **********
			echo '<p class="result-liveSearch-heading">Tin tức</p>';
			foreach ($results as $rs) {
				//Thay thế html_result ****************
				$output = str_replace($cataloge, "Tin tức", $html_result);
				$output = str_replace($link, 'index.php?newsID='.$rs['tintuc_id'], $output);
				$output = str_replace($thumbnail, null, $output);
				$output = str_replace($title, $rs['tintuc_title'], $output);
				echo $output;
			}
		}else{
			echo "Không có kết quả phù hợp!";
		}
		
	}
