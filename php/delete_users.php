<?php 
  require 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
  $username = $_GET['username'];
  $sql = "DELETE FROM user WHERE User_Name = '$username' ";
  mysql_query($sql);
  $sql2 = "DELETE FROM ranks WHERE User_Name = '$username' ";
  mysql_query($sql2);
  $sql3 = "DELETE FROM combination WHERE User_Name = '$username' ";
  mysql_query($sql3);
  print "<meta http-equiv='refresh' content='0;url=users.php'>";
?>
</body>
</html>