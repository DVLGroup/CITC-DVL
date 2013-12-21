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
			$query = "SELECT user_id FROM user ORDER BY user_id DESC LIMIT 1";
			$result = mysql_query($query);
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
			session_start();
			$_SESSION['user'] = $fbemail;
			$_SESSION['userID'] = $row['user_id'];
			echo 'emailExists';
			return;
		}else{
			$hpass = sha1('123456');
			$query_signup = "INSERT INTO user (user_email, user_password, user_level_id) VALUES('$fbemail','$hpass','1')";
			mysql_query($query_signup, $my_connect);
			$query = "SELECT user_id FROM user ORDER BY user_id DESC LIMIT 1";
			$result = mysql_query($query);
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
			session_start();
			$_SESSION['user'] = $fbemail;
			$_SESSION['userID'] = $row['user_id'];
			echo 'signup success';
			return;
		}
    }
