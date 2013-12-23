<?php
require '../Connect.php';
if (!isset($_REQUEST['tintucCatalogeTranID'])) {
	header('Location: ../index-admin.php');
} else {
	$tintucCatalogeID = $_REQUEST['tintucCatalogeTranID'];

	$queryDeleteC = "Delete from tintuc_cataloge where tintuc_cataloge_id = $tintucCatalogeID";
	$resultDeleteC = mysql_query($queryDeleteC);
	mysql_close($my_connect);
	header('Location: ../index-admin.php?changePage=4');
}
?>