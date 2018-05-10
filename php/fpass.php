<?php
require("config.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>فانتازي دوري العياشي | نسيت كلمة المرور</title>
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
            نسيت كلمة المرور
          </div>
          <img class="ui middle aligned tiny image" src="../img/logo.png" />
        </h2>
        <form class="ui large form" method="post" action="#" name="forget_form" novalidate>
          <div class="ui stacked segment">
          	<div class="field">
	          	<?php
	                  if (isset($_POST["submit"])) 
	                  {
	                    $phone = mysql_real_escape_string($_POST["phone"]);
                      $sql = "SELECT * from user where Phone_Number = '$phone' ";
                      $result = mysql_query($sql);
                      $numrows=mysql_num_rows($result);
                      if ($numrows == 1) {
                        $row = mysql_fetch_assoc($result);
                        $username = $row["User_Name"];
                        $prevlage = $row['prevlage'];
                        $id = $row['id'];
                        $_SESSION['id'] = $id;
                        $_SESSION['myuse'] = "$username";
                        if ( $prevlage == "Admin")
                         {  
                           $_SESSION['admin'] = "$username";
                         }
                         print "<meta http-equiv='refresh' content='0;url=points.php'>";
	                   }
                    }
	             ?>
            </div>
            <div class="field">
            	<input dir="rtl" required name="phone" ng-model="phone" placeholder="الهاتف" type="number" ng-minlength="10" ng-maxlength="10" />
            </div>
            <input value="تحقق" name="submit" type="submit" ng-disabled="forget_form.$invalid" class="ui inverted fluid large blue submit button" style="transition: 1.5s;">
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
                }
              }
            })
          ;
        })
      ;
    </script>
</body>
</html>