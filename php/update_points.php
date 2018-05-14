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
  $gwr = $_GET['gwr']; 
  $username = $_GET['username'];
  $rd = $_GET['rd'];
  $gwp = $_GET['gwp'];
  $tp = $_GET['tp'];
  $new_tp = $gwp + $tp;
  $sql = "UPDATE ranks set Game_Week_Ranks = '$gwr' , Point_Game_Week = '$gwp' , Total_Points = '$new_tp' , Register_Date = '$rd' WHERE User_Name = '$username' ";
  mysql_query($sql);
  print "<meta http-equiv='refresh' content='0;url=users.php'>";
?>
</body>
</html>