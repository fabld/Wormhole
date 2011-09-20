<?php 
$dbname = 'databasename';
$server = 'localhost';
$user = 'username';
$pass = 'password';

$conn =	mysql_connect($server, $user, $pass);
mysql_select_db($dbname,$conn);
?>