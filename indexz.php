<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Poor People Magazine</title>
		<meta name="description" content="" />
		<meta name="author" content="TrongLoi" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
		<!-- Css -->
		<link href="css/bootstrap-v3.0.css" type="text/css" rel="stylesheet" media="print,screen" />
        <link href="css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/jquery.dataTables.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/jquery.qtip.css" type="text/css" rel="stylesheet" media="print,screen" />
        <link href="css/header.css" type="text/css" rel="stylesheet" media="print,screen" />
        <link href="css/body.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/footer.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/style.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/hugo.css" type="text/css" rel="stylesheet" media="print,screen" />
		<link href="css/dsDaugia.css" type="text/css" rel="stylesheet" media="print,screen" />
		
		<!-- Javascript -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/holder.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="js/jquery.qtip.js" type="text/javascript"></script>
        <script src="js/login.js" type="text/javascript"></script>
        
        <!-- Start WOWSlider.com HEAD section -->
			<link rel="stylesheet" type="text/css" href="engine1/style.css" />
			<link rel="stylesheet" type="text/css" href="engine1/style-custom.css" />
			<script type="text/javascript" src="engine1/jquery.js"></script>
		<!-- End WOWSlider.com HEAD section -->
		
	</head>

	<body  onload="time()">
		<div id="head">
			<?php
				session_start();
				include 'Controller.php';
				include 'tintuc-head.php';
			?>
		</div>
		<header>
			<?php
				include 'tintuc-header.php';
			?>
		</header>
		<p></p>
		<div class="body container">
			<!------------ Slider ------------->
			<div class="slider" style="height: 550px; padding: 20px; border: 1px solid #CCC">
				<?php
					include 'tintuc-slider.php';
				?>
			</div>
			<p></p>
			
			
			
			<!-------------------------------------------------- PHAN NOI DUNG -------------------------------------------->
			<div class="content">
	        	<div class="container">
		            <div class="row">
		                <div class="col-lg-9">
				            <!------------ Nav Tabs -------------->
		                	<ul class="nav nav-pills" style="border: 1px solid #CCC">
						    	<li class="active"><a href="#dsbaiHCKK" data-toggle="tab">Những hoàn cảnh khó khăn</a></li>
						    	<li><a href="#dsbaiUser" data-toggle="tab">Tâm sự bạn đọc</a></li>
						    	<li><a href="#dsTCTT" data-toggle="tab">Tổ chức từ thiện</a></li>
						    	<li><a href="#dsDaugiasp" data-toggle="tab">Danh sách sản phẩm đấu giá</a></li>
							</ul>    
		                    <div class="tab-content">
		                    	<!------------ DS bài viết vê những hoàn cảnh khó khăn -------------->
		                    	<?php
		                    		include 'tintuc-dsbaivietHCKK.php';
		                    	?>
			        			
			        			<!------------ DS bài viêt do người dùng viết -------------->
			        			<?php
		                    		include 'tintuc-dsbaivietUser.php';
		                    	?>
			        			
			        			<!------------ DS về những tổ chức từ thiện-------------->
			        			<?php
		                    		include 'tintuc-dsTCTT.php';
		                    	?>
		                    	
		                    	<!------------ DS về những tổ chức từ thiện-------------->
			        			<?php
		                    		include 'tintuc-dsNhaTT.php';
		                    	?>
			        			
			        			<!------------ DS Đấu giá -------------->
					        	<?php
					        		include 'tintuc-dsDaugiasp.php';
					        	?>
			        			
			        			<!------------ Trang cá nhân -------------->
					        	<?php
					        		//include 'tintuc-accsetting.php';
					        	?>
			        			</div>
		           			</div><!--END PHAN NOI DUNG -->
	        	
			        	<!-------------------------------------------------- PHAN SLIDEBAR ----------------------------------------->
		                <div class="col-lg-3">
							<?php
					        	include 'tintuc-sliderbar.php';
					        ?>
		          		</div><!--END PHAN SLIDEBAR -->
					</div>
				
				
				</div><!--END PHAN CONTAINER-->
			</div><!--END PHAN CONTENT-->
		</div>
		
		<footer>
			<?php
				include 'tintuc-footer.php';
			?>
		</footer>
	</body>
</html>
