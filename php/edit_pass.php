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
<title>فانتازي دوري العياشي | تعديل كلمة المرور</title>
<link rel="shortcut icon" href="../img/logo.png">
<link rel="stylesheet" type="text/css" href="../css/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.css" />
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
            تعديل
          </div>
          <img class="ui middle aligned tiny image" src="../img/logo.png" />
        </h2>
        <form action="#" class="ui large form" name="login_form" method="post" novalidate>
          <div class="ui stacked segment">
          	<div class="field">
            	<?php
					$id = $_GET['id'];
				  if( isset ( $_POST["submit"] ) )
					{
					 $password =mysql_real_escape_string($_POST['password']);
					 $sql = "UPDATE user set Password='$password' where id = '$id' ";
					 mysql_query($sql);
					 echo "
					 <div class='ui success message'>
					 <i><b>تم التعديل/b></i>
					 </div>";
					 print "<meta http-equiv='refresh' content='0;url=my_status.php'>";
						 
					}	
				?>
            </div>
           
            <div class="field">
            <?php 
				$sql2 = "SELECT * FROM user where id = '$id' ";	
				$query = mysql_query($sql2);
				$row = mysql_fetch_assoc($query);
			?>
            	<input required dir="rtl" name="password"  placeholder="كلمة المرور" type="text"
                 value="<?php echo $row["Password"]; ?>" />
            </div>
            <input type="submit" name="submit" value="دخول" ng-disabled="login_form.$invalid" class="ui inverted fluid large blue submit button" style="transition: 1.5s;">
          </div>
          <div class="ui error message"></div>
        </form>
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
<?php
     }
   else
     print "<meta http-equiv='refresh' content='0;url=login.php'>";
  ?>