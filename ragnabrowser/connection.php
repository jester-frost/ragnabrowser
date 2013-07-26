<?php 

$host = "localhost";
$database = "ragnarok";
$user = "root";
$pass = "vertrigo";
$connection = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($database) or die (mysql_error());

?>