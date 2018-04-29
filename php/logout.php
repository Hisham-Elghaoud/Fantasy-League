<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbdatebasename="noortajoraschool";
$db=mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbdatebasename,$db);

session_unset();
 if (isset($_SESSION["myuse"])) {
            unset($_SESSION["myuse"]);
        }
 if (isset($_SESSION["admin"])) {
            unset($_SESSION["admin"]);
        }

session_start();
$_SESSION = array();
session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>فانتازي دوري العياشي | تسجيل الخروج</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Refresh" content="1;url='../index.php' "/>


</head>

<body>



</body>
</html>