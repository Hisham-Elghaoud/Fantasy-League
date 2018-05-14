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
  $ntr = $_GET['ntr']; 
  $username = $_GET['username'];
  $sql = "UPDATE ranks set Total_Ranks = '$ntr' WHERE User_Name = '$username' ";
  mysql_query($sql);
  print "<meta http-equiv='refresh' content='0;url=all_ranks.php'>";
?>
</body>
</html>