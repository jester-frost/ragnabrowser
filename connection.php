<?php 

$host = "127.0.0.1";
$database = "ragnarok";
$user = "root";
$pass = "vertrigo";
$connection = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($database) or die (mysql_error());

?>