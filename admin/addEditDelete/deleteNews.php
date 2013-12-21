<?php
require '../Connect.php';
if (!isset($_REQUEST['tintucTranID'])) {
	header('Location: ../index-admin.php');
} else {
	$tintucID = $_REQUEST['userTranID'];
	
	$queryDeleteUser = "Delete from tintuc where tintuc_id = $tintucID";
	$resultDeleteUser = mysql_query($queryDeleteUser);
	mysql_close($link);
	header('Location: ../index-admin.php?changePage=3');
}
?>