<?php
require '../Connect.php';
if (!isset($_REQUEST['spTranID'])||!isset($_REQUEST['userTranID'])) {
	header('Location: ../index-admin.php');
} else {
	$spID = $_REQUEST['spTranID'];
	$userID = $_REQUEST['userTranID'];
	$queryDeleteSp = "Delete from daugia where sp_id = $spID and user_id=$userID";
	$resultDeleteSp = mysql_query($queryDeleteSp);
	mysql_close($my_connect);
	header('Location: ../index-admin.php?changePage=8');
}
?>