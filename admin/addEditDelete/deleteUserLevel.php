<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require '../Connect.php';
if (!isset($_REQUEST['userLvlTranID'])) {
	header('Location: ../index-admin.php');
} else {
	$userLvlId = $_REQUEST['userLvlTranID'];
	echo($userLvlId);
	$queryDeleteUser = "Delete from user_level where user_level_id = $userLvlId";
	$resultDeleteUser = mysql_query($queryDeleteUser);
	mysql_close($link);
	header('Location: ../index-admin.php?changePage=2');
}
?>