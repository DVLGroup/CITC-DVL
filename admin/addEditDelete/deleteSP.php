<?php
require '../Connect.php';
if (!isset($_REQUEST['spTranID'])) {
	header('Location: ../index-admin.php');
} else {
	$spID = $_REQUEST['spTranID'];

	$queryDeleteSp = "Delete from sanpham where sp_id = $spID";
	$resultDeleteSp = mysql_query($queryDeleteSp);
	mysql_close($my_connect);
	header('Location: ../index-admin.php?changePage=8');
}
?>