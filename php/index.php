<?php
require("config.php");
if(!empty($_SESSION['myuse'])){
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>فانتازي دوري العياشي</title>

<link rel="stylesheet" type="text/css" href="../css/semantic.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/semantic.min.js"></script>
<script>
	$(document).ready(function(){
      $('#').fadeIn(1500);
      $('select.dropdown').dropdown();
	});
</script>
</head>

<body ng-app="">

</body>
</html>
<?php
     }
   else
     print "<meta http-equiv='refresh' content='0;url=../login.php'>";
  ?>