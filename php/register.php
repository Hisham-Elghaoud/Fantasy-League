<?php
require("config.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>فانتازي دوري العياشي | التسجيل</title>
<link rel="shortcut icon" href="../img/logo.png">
<link rel="stylesheet" type="text/css" href="../css/semantic.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/semantic.min.js"></script>
<script>
	$(document).ready(function(){
      $('select.dropdown').dropdown();
	});
</script>
<style>
	body
	{
		background-image: url("../img/login-register.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
</head>

<body ng-app="">
	<div class="ui middle aligned center aligned grid">
      <div class="column">
      	
        <h2 class="ui teal image header">
          <img class="ui middle aligned tiny image" src="../img/dc_logo.png" />
          <div class="content">
            التسجيل
          </div>
          <img class="ui middle aligned tiny image" src="../img/logo.png" />
        </h2>
        <form class="ui large form" method="post" action="#" name="register_form" novalidate>
          <div class="ui stacked segment">
          	<div class="field">
	          	<?php
	                  if (isset($_POST["submit"])) 
	                  {
	                  	$f_name = mysql_real_escape_string($_POST["f_name"]);
	                  	$l_name = mysql_real_escape_string($_POST["l_name"]);
	                    $username = mysql_real_escape_string($_POST["username"]);
	                    $password = mysql_real_escape_string($_POST["password"]);
	                    $phone = mysql_real_escape_string($_POST["phone"]);
	                    $email = mysql_real_escape_string($_POST["email"]);
	                    $fav_team = mysql_real_escape_string($_POST["fav_team"]);
	                    $transfer = 0;
                      $my_team = 1;
                      $gwr = 0;
                      $tr = 0;
                      $pgw = 0;
                      $tp = 0;
	                    $prevlage = "User";
	                    $Register_Date = date("y-m-d");
	                    $Register_Time = date("H:i:s");
	                    $img_src = "../img/pic.png";
	                    $sql3 = "INSERT INTO `user` (`id`, `User_Name`, `Email`, `Password`, `Phone_Number`, `prevlage`, `Register_Date`, `Register_Time`, `Favorite_Team`, `First_Name`, `Last_Name`, `Transfer`, `img_src`, `my_team`) VALUES (NULL, '$username', '$email', '$password', '$phone', '$prevlage', '$Register_Date', '$Register_Time', '$fav_team', '$f_name', '$l_name', '$transfer' , '$img_src')";
	                    mysql_query($sql3);
                      $sql4 = "INSERT INTO `ranks` (`id`, `User_Name`, `Game_Week_Ranks`, `Total_Ranks`, `Point_Game_Week`, `Total_Points`, `Register_Date`) VALUES (NULL, '$username', '$gwr', '$tr', '$pgw' , '$tp', '$Register_Date', '$my_team')";
                      mysql_query($sql4);
	                    echo
	                    "
	                    <div class='ui green message'>
	                      تم التسجيل
	                    </div>
	                    ";
	                     print "<meta http-equiv='refresh' content='1;url=login.php'>";
	                   }
	             ?>
            </div>
          	<div class="field">
            	<input dir="rtl" required name="f_name" ng-model="f_name" placeholder="الإسم" type="text" />
            </div>
            <div class="field">
            	<input dir="rtl" required name="l_name" ng-model="l_name" placeholder="اللقب" type="text" />
            </div>
            <div class="field">
            	<input dir="rtl" required name="username" ng-model="username" placeholder="إسم المستخدم" type="text" />
            </div>
            <div class="field">
            	<input dir="rtl" required name="email" ng-model="email" placeholder="البريد الإلكتروني" type="email" />
            </div>
            <div class="field">
            	<input dir="rtl" required name="password" ng-model="password" placeholder="كلمة المرور" type="password" />
            </div>
            <div class="field">
            	<input dir="rtl" required name="phone" ng-model="phone" placeholder="الهاتف" type="number" ng-minlength="10" ng-maxlength="10" />
            </div>
            <div class="field">
            	<select name="fav_team" class="ui dropdown">
            		<option value="إختر فريقك المفضل">إختر فريقك المفضل</option>
            		<?php 
            			$sql4 = "SELECT * FROM teams";
            			$query4 = mysql_query($sql4);
            			while ($row = mysql_fetch_assoc($query4)) 
            			{
            		 ?>
            		<option value="<?php echo $row['team_name']; ?>"><?php echo $row['team_name']; ?></option>
            		<?php } ?>
            	</select>
            </div>
            <input value="تسجيل" name="submit" type="submit" ng-disabled="register_form.$invalid" class="ui inverted fluid large blue submit button" style="transition: 1.5s;">
          </div>
          <div class="ui error message"></div>
        </form>
        <div class="ui message">
          لديك حساب بالفعل ؟<a href="login.php"> تسجيل الدخول</a>
        </div>
      </div>
    </div>
    <style type="text/css">
      body {
        background-color: #DADADA;
      }
      body > .grid {
        height: 100%;
      }
      .image {
        margin-top: -100px;
      }
      .column {
        max-width: 450px;
      }
    </style>
    <script>
      $(document)
        .ready(function() {
          $('.ui.form')
            .form({
              fields: {
              	text: {
                  identifier  : 'f_name',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'الرجاء ادخال الإسم'
                    }
                  ]
                },
                text: {
                  identifier  : 'l_name',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'الرجاء ادخال اللقب'
                    }
                  ]
                },
                text: {
                  identifier  : 'username',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'الرجاء ادخال إسم المستخدم'
                    }
                  ]
                },
                email: {
                  identifier  : 'email',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'الرجاء ادخال بريد الكتروني'
                    },
                    {
                      type   : 'email',
                      prompt : 'الرجاء ادخال بريد الكتروني فعال'
                    }
                  ]
                },
                number: {
                  identifier  : 'phone',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'الرجاء ادخال رقم الهاتف'
                    },
                    {
                      type   : 'length[10]',
                      prompt : 'الرجاء ادخال رقم هاتف صالح'
                    }
                  ]
                },
                password: {
                  identifier  : 'password',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'الرجاء ادخال كلمة مرور'
                    },
                    {
                      type   : 'length[6]',
                      prompt : 'كلمة المرور يجب ان تتكون على الاقل من 6 رموز'
                    }
                  ]
                }
              }
            })
          ;
        })
      ;
    </script>
</body>
</html>