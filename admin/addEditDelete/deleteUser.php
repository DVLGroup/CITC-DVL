<?php
require '../Connect.php';
if (!isset($_REQUEST['userTranID'])) {
	header('Location: ../index-admin.php');
} else {
	$userID = $_REQUEST['userTranID'];
	echo($userID);
	$queryDeleteUser = "Delete from user where user_id = $userID";
	$resultDeleteUser = mysql_query($queryDeleteUser);
	mysql_close($my_connect);
	header('Location: ../index-admin.php?changePage=1');
}
?>