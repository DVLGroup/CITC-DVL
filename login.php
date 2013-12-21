<?php

	include 'Connect.php';
	
   if(isset($_POST['login'])){
   		sleep(1);
		//Lấy uemail, upass và biến đếm kết quả
		$uemail = $_POST['uemail'];
		$upass = $_POST['upass'];
		$hash_pass = sha1($upass);
		$dem = 0;
		$userID = '';
		//Tạo câu lệnh query
		$query_login = "SELECT * FROM user WHERE user_email ='$uemail' AND user_password = '$hash_pass'";
		//Thực hiện câu lệnh 
		$rs = mysql_query($query_login, $my_connect);
		//Lấy kết quả sau khi thực hiện
		while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) {
			$dem += 1;
			$userID = $row['user_id'];	
		}
		//Kiểm tra xem có 1 kết quả trả về hay không?
		////Nếu có thì xuất ra login success
		////Nếu không có thì xuất ra login error
		if($dem == 1){
			sleep(1);
			session_start();
			$_SESSION['user'] = $uemail;
			$_SESSION['userID'] = $userID;
			echo "success";
		}
		else {
			echo "login error";
		}
	}

	if(isset($_GET['logout'])){
		sleep(1);
		session_start();
		session_destroy();
		echo "success";
	}
