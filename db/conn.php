<?php
include "parser-php-version.php";
$host = "localhost";
$user = "root";
$pass = "";

$db = "wns_db";
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysql_connect($host, $user, $pass);
$database = mysql_select_db($db);
?>