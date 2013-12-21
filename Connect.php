<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dbwebphim";

$my_connect = mysql_connect($host, $username, $password);
// Check connection
if (!$my_connect) {
	echo "Failed to connect to MySQL: " . mysql_error();
}
mysql_select_db($dbname, $my_connect);

mysql_query("SET character_set_client=utf8", $my_connect);
mysql_query("SET character_set_connection=utf8", $my_connect);
mysql_query("SET character_set_results=utf8", $my_connect);
