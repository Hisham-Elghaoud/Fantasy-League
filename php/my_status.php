<?php
require("config.php");
if(!empty($_SESSION['myuse'])){
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport" />
    <title>فانتازي دوري العياشي | البيانات الشخصية</title>
    <link href="../css/default.css" rel="stylesheet" type="text/css" />
    <link href="../css/pandoc-code-highlight.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../img/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/semantic.min.js"></script>
  </head>
  <body>
    <!--Fixed Nav Menu-->
      <?php require "fixed_nav.php"; ?>
    <!--Sidebar Menu-->
      <?php require "sidebar.php"; ?>
    <!--Page Contents-->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment" style="background-image: url('../img/bg.png'); background-repeat: no-repeat; background-size: cover;">
        <!--Main Nav Menu-->
        <?php require "main_nav.php"; ?>
        <div class="ui text container">
          <h1 class="ui inverted header">
          </h1>
        </div>
      </div>
      <div class="ui vertical stripe segment">
      	<?php
    			$id= $_SESSION['id'];
    			$sql= "SELECT * FROM user where id='$id' ";
    			$query= mysql_query($sql);
    			$row= mysql_fetch_assoc($query);
  			?>  
        <div class="ui middle aligned stackable grid container">
          <div class="row">
            <div class="six wide right floated column">
                <img class="ui small circular image" src=" <?php echo $row["img_src"] ; ?> " />
                <form action="upload_manager.php" method="post" enctype="multipart/form-data">          
                   <input type="file" name="upFile" ><br>
                   <input type="submit" name="submit" value="تحميل">
                </form> 
            </div>
            <div class="eight wide column">
              <table class="ui selectable inverted table" style="cursor:pointer">
                <tbody >
                   <tr align="center">
                      <td align="center"><?php echo $row["First_Name"]." ".$row["Last_Name"] ; ?></td>
     			            <td align="center">  الأسم  </td>
                   </tr>
                   <tr align="center">
                      <td ><?php echo $row["Phone_Number"] ; ?></td>
                      <td align="center">  رقم الهاتف  </td>
                  </tr>
                  <tr align="center">
                      <td align="center"><?php echo $row["Email"] ; ?></td>
                      <td align="center">   البريد الإلكتروني  </td>
                  </tr>
                  <tr align="center">
                      <td align="center"><?php echo $row["User_Name"] ; ?></td>
                      <td align="center">  أسم المستخدم  </td>
                  </tr>
                  <tr align="center">
                      <td align="center"><?php echo $row["Register_Date"] ; ?></td>
                      <td align="center">  تاريخ التسجيل   </td>
                  </tr>
                  <tr align="center">
                      <td align="center"><?php echo $row["Favorite_Team"] ; ?></td>
                      <td align="center">  الفريق المفضل   </td>
                  </tr>
                  <?php
                    $username= $_SESSION['myuse'];
                    $sql2= "SELECT * FROM ranks where User_Name='$username' ";
                    $query2= mysql_query($sql2);
                    $row2= mysql_fetch_assoc($query2);
                  ?>
                  <tr align="center">
                      <td align="center"><?php echo $row2["Total_Points"] ; ?></td>
                      <td align="center">  النقاط الإجمالية   </td>
                  </tr>
                  <tr align="center">
                      <td align="center"><?php echo $row2["Total_Ranks"] ; ?></td>
                      <td align="center">  الترتيب الكلي   </td>
                  </tr>  
                </tbody>
              </table>            
            </div>
        </div>
          <p></p>
          <div class="row">
            <div class="center aligned column">
              <a class="ui inverted huge blue submit button" style="transition: 1.5s;"
              href="edit_pass.php?id=<?php echo $id ?>">  تعديل كلمة المرور  </a>
            </div>
          </div>
        </div>
      </div>
      <!--footer Contents-->
      <?php require "footer.php"; ?>
    </div>
    <style type="text/css">
     .color{
      color: black;
     }
      .hidden.menu {
        display: none;
      }
      
      .masthead.segment {
        min-height: 600px;
        padding: 1em 0em;
      }
      .masthead .logo.item img {
        margin-right: 1em;
      }
      .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
      }
      .masthead h1.ui.header {
        margin-top: 2em;
        margin-bottom: 0em;
        font-size: 4em;
        font-weight: normal;
      }
      .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
      }
      
      .ui.vertical.stripe {
        padding: 8em 0em;
      }
      .ui.vertical.stripe h3 {
        font-size: 2em;
      }
      .ui.vertical.stripe .button + h3,
      .ui.vertical.stripe p + h3 {
        margin-top: 3em;
      }
      .ui.vertical.stripe .floated.image {
        clear: both;
      }
      .ui.vertical.stripe p {
        font-size: 1.33em;
      }
      .ui.vertical.stripe .horizontal.divider {
        margin: 3em 0em;
      }
      
      .quote.stripe.segment {
        padding: 0em;
      }
      .quote.stripe.segment .grid .column {
        padding-top: 5em;
        padding-bottom: 5em;
      }
      
      .footer.segment {
        padding: 5em 0em;
      }
      
      .secondary.pointing.menu .toc.item {
        display: none;
      }
      
      @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
          display: none !important;
        }
        .secondary.pointing.menu .item,
        .secondary.pointing.menu .menu {
          display: none;
        }
        .secondary.pointing.menu .toc.item {
          display: block;
        }
        .masthead.segment {
          min-height: 350px;
        }
        .masthead h1.ui.header {
          font-size: 2em;
          margin-top: 1.5em;
        }
        .masthead h2 {
          margin-top: 0.5em;
          font-size: 1.5em;
        }
      }
    </style>
    <script>
      $(document)
        .ready(function() {
          // fix menu when passed
          $('.masthead')
            .visibility({
              once: false,
              onBottomPassed: function() {
                $('.fixed.menu').transition('fade in');
              },
              onBottomPassedReverse: function() {
                $('.fixed.menu').transition('fade out');
              }
            })
          ;
      
          // create sidebar and attach to menu open
          $('.ui.sidebar')
            .sidebar('attach events', '.toc.item')
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