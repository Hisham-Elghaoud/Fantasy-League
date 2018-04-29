<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbdatebasename="fantasy";
$db=mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbdatebasename,$db);

?>
