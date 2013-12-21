<?php
require 'connect_db.php';
session_start();
// echo($_SESSION["adminPass"].$_GET["oldPassword"]);
if($_SESSION["adminPass"] != sha1($_GET["oldPassword"]))
{
	header('Location: configPage.php?checkConfig=1');
}
else {
	$queryConfig = "update user set user_password = '".sha1($_GET["newPassword"])."' where user_id = ".$_SESSION["adminID"]." ";
	$resultConfig = mysql_query($queryConfig);
	$_SESSION["adminPass"] = $_GET["newPassword"];
	mysql_close($link);
	header('Location: index-admin.php?changePage=1');
}
?>