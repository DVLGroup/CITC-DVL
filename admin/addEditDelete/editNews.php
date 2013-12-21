<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require '../Connect.php';

if (!isset($_REQUEST['tintucID'])||!isset($_REQUEST['tieuDe']) || !isset($_REQUEST['tacGia']) || !isset($_REQUEST['noiDung']) || !isset($_REQUEST['keyword'])|| !isset($_REQUEST['trangThai'])|| !isset($_REQUEST['theLoai'])) {
	echo($_REQUEST['tintucID']);
	echo($_REQUEST['tieuDe']);
	echo($_REQUEST['tacGia']);
	echo($_REQUEST['noiDung']);
	echo($_REQUEST['keyword']);
	echo($_REQUEST['TrangThai']);
	echo($_REQUEST['theLoai']);
	header('Location: ../index-admin.php');
} else {
	
	$queryEditUser = "update tintuc set tintuc_title = '" . $_REQUEST['tieuDe'] . "',tintuc_content = '" . $_REQUEST['noiDung'] . "',
	tintuc_keyword = '" . $_REQUEST['keyword'] . "',tintuc_status = '" . $_REQUEST['trangThai'] . "',tintuc_cataloge_id = '" . $_REQUEST['theLoai'] . "'where tintuc_id = " . $_REQUEST['tintucID'];
	$resultEditUser = mysql_query($queryEditUser);
	mysql_close($my_connect);
	header('Location: ../index-admin.php?changePage=3');
}
?>