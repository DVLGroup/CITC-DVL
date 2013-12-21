<?php
	include 'Connect.php';
    if(isset($_GET['fbemail'])){
    	sleep(1);
    	$fbemail = $_GET['fbemail'];
		//Nếu mà email fb trùng với email trong user thì lấy email đó đăng nhập luôn
		//Còn không có email trong user trùng với email fb thì tự tạo 1 user mới pass mặc định là 123456 luôn
		$query_checkemail = "SELECT user_email FROM user WHERE user_email = '$fbemail'";
		mysql_query($query_checkemail, $my_connect);
		
		if(mysql_affected_rows() == 1){
			session_start();
			$_SESSION['user'] = $fbemail;
			$_SESSION['uemail'] = $fbemail;
			echo 'emailExists';
			return;
		}else{
			$hpass = sha1('123456');
			$query_signup = "INSERT INTO user (user_email, user_password, user_level_id) VALUES('$fbemail','$hpass','1')";
			mysql_query($query_signup, $my_connect);
			session_start();
			$_SESSION['user'] = $fbemail;
			$_SESSION['uemail'] = $fbemail;
			echo 'signup success';
			return;
		}
    }
