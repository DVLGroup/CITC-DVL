<?php
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