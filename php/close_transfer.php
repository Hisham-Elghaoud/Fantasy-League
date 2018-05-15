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
  $transfer = 0;
  $sql = "UPDATE user set Transfer = '$transfer' ";
  mysql_query($sql);
  print "<meta http-equiv='refresh' content='0;url=users.php'>";
?>
</body>
</html>