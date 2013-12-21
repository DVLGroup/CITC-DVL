<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require '../Connect.php';

if (!isset($_REQUEST['userIDEdit']) || !isset($_REQUEST['userLevelEdit']) || !isset($_REQUEST['passwordEdit']) || !isset($_REQUEST['dChiEdit'])|| !isset($_REQUEST['sdtEdit'])) {
	header('Location: ../index-admin.php');
} else {
	echo($_REQUEST['userIDEdit']);
	//echo($_REQUEST['emailEdit']);
	echo($_REQUEST['userLevelEdit']);
	echo($_REQUEST['passwordEdit']);
	$queryEditUser = "update user set user_password = '" . $_REQUEST['passwordEdit'] . "',user_level_id = '" . $_REQUEST['userLevelEdit'] . "',
	user_address = '" . $_REQUEST['dChiEdit'] . "',user_sdt = '" . $_REQUEST['sdtEdit'] . "',user_description = '" . $_REQUEST['moTaEdit'] . "'where user_id = " . $_REQUEST['userIDEdit'];
	$resultEditUser = mysql_query($queryEditUser);
	mysql_close($link);
	header('Location: ../index-admin.php?changePage=1');
}
?>