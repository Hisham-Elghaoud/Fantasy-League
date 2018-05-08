<?php
require("config.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>فانتازي دوري العياشي | تسجيل الدخول</title>
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
          <div class="content">
            تسجيل الدخول
          </div>
          <img class="image" src="../img/logo.png" />
        </h2>
        <form action="#" class="ui large form" name="login_form" method="post" novalidate>
          <div class="ui stacked segment">
          	<div class="field">
            	<?php
				  if( isset ( $_POST["submit"] ) )
					{
					 $username = mysql_real_escape_string($_POST['username']);
					 $password =mysql_real_escape_string($_POST['password']);
					 $sql = "SELECT * FROM user where User_Name='$username' AND Password='$password' ";
					 $result = mysql_query($sql);
					 $numrows=mysql_num_rows($result);
					 if   ($numrows == 1)
					  {   
						$_SESSION['myuse'] = "$username"; 	
						$row = mysql_fetch_assoc($result);
						$prevlage = $row['prevlage'];
						$id = $row['id'];
						$_SESSION['id'] = $id;
						if ( $prevlage == "Admin")
						 {	
						   $_SESSION['admin'] = "$username";
						 }
						print "<meta http-equiv='refresh' content='0;url=my_status.php'>";         
					   }
						else	
						 {	
							echo "<div class='ui warning message'>
											
									<i><b>خطأ في الإدخال</b></i>
													
								   </div>";
						 }
					}	
				?>
            </div>
            <div class="field">
            	<input required dir="rtl" name="username" ng-model="username" placeholder="إسم المستخدم" type="text" />
            </div>
            <div class="field">
            	<input required dir="rtl" name="password" ng-model="password" placeholder="كلمة المرور" type="password" />
            </div>
            <input type="submit" name="submit" value="دخول" ng-disabled="login_form.$invalid" class="ui inverted fluid large blue submit button" style="transition: 1.5s;">
          </div>
          <div class="ui error message"></div>
        </form>
        <div class="ui message">
          ليس لديك حساب ؟<a href="register.php"> تسجيل</a>
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
                  identifier  : 'username',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'الرجاء إدخال اسم المستخدم'
                    }
                  ]
                },
                password: {
                  identifier  : 'password',
                  rules: [
                    {
                      type   : 'empty',
                      prompt : 'الرجاء ادخال كلمة مرور'
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