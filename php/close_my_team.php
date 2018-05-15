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
  $my_team = 0;
  $sql = "UPDATE user set my_team = '$my_team' ";
  mysql_query($sql);
  print "<meta http-equiv='refresh' content='0;url=users.php'>";
?>
</body>
</html>