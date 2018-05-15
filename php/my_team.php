<?php
require("config.php");
if(!empty($_SESSION['myuse'])){
              $username = $_SESSION['myuse'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport" />
    <title>فانتازي دوري العياشي | التشكيلة</title>
    <link href="../css/default.css" rel="stylesheet" type="text/css" />
    <link href="../css/pandoc-code-highlight.css" rel="stylesheet" type="text/css" />
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
  </head>
  <body ng-app="">
    <!--Fixed Nav Menu-->
      <?php require "fixed_nav.php"; ?>
    <!--Sidebar Menu-->
      <?php require "sidebar.php"; ?>
    <!--Page Contents-->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment" style="background-image: url('../img/bg.png'); background-repeat: no-repeat; background-size: cover;">
        <!--Main Nav Menu-->
        <?php require "main_nav.php"; ?>
        <?php 
              $sql5 = "SELECT * FROM user where User_Name = '$username' ";
              $query5 = mysql_query($sql5);
              $row5 = mysql_fetch_assoc($query5);
              $my_teams = $row5["my_team"];
              if ($my_teams == 1) {
        ?>
        <div class="ui text container">
          <h1 class="ui inverted header">
          </h1>
        </div>
      </div>
      <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
          <?php 
            $sql3 = "SELECT * FROM combination where User_Name = '$username' ";
            $query3 = mysql_query($sql3);
            $numrows=mysql_num_rows($query3);
           if   ($numrows == 1)
            {
          ?>
          <div class="row">
            <div class="six wide left floated column">
              <div class="row">
                <div class="sixteen wide centered column" style="background-image: url('../img/pitch.png'); background-size: cover;
                background-repeat: no-repeat;">
                      <table align="center" width="80%">
                        <tr>
                          <td colspan="3" align="center">
                            <img class="ui tiny image" src="../img/player.png">
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center">
                            <div class="extra content" style="background-color: #618e49; width: 30%; text-align: center;">{{player1}}</div>
                          </td>
                        </tr>
                        <tr>
                          <td align="right" width="35%">
                            <img class="ui tiny image" src="../img/player.png">
                          </td>
                          <td align="center" width="30%" style="white-spaces:pre;"> </td>
                          <td align="left" width="35%">
                            <img class="ui tiny image" src="../img/player.png">
                          </td>
                        </tr>
                        <tr>
                          <td align="right" width="35%">
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;">{{player2}}</div>
                          </td>
                          <td align="center" width="30%"> </td>
                          <td align="left" width="35%">
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;">{{player3}}</div>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" width="35%">
                            <img class="ui tiny image" src="../img/player.png">
                          </td>
                          <td align="center" width="30%">
                            <img class="ui tiny image" src="../img/player.png">
                          </td>
                          <td align="right" width="35%">
                            <img class="ui tiny image" src="../img/player.png">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" width="35%">
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;">{{player4}}</div>
                          </td>
                          <td align="center" width="30%">
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;">{{player5}}</div>
                          </td>
                          <td align="right" width="35%">
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;">{{player6}}</div>
                          </td>
                        </tr>
                      </table>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="ui banner test ad" data-text=" " style="background-color: #618e49;">
                  <div class="ui container">
                    <div class="ui ordered horizontal list" style="color: white;">
                      <div class="item">
                        <img class="ui avatar image" src="../img/pic.png">
                        <div class="content">
                          <div class="header">{{player7}}</div>
                        </div>
                      </div>
                      <div class="item">
                        <img class="ui avatar image" src="../img/pic.png">
                        <div class="content">
                          <div class="header">{{player8}}</div>
                        </div>
                      </div>
                      <div class="item">
                        <img class="ui avatar image" src="../img/pic.png">
                        <div class="content">
                          <div class="header">{{player9}}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php 
              $sql = "SELECT * FROM combination where User_Name = '$username' ";
              $query = mysql_query($sql);
              $row = mysql_fetch_assoc($query);
            ?>
            <form class="ui form" action="#" method="post" name="formation_form" ng-init="player1 = '<?php echo $row['P1'] ; ?>';
            player2 = '<?php echo $row['P2'] ; ?>';
            player3 = '<?php echo $row['P3'] ; ?>';
            player4 = '<?php echo $row['P4'] ; ?>';
            player5 = '<?php echo $row['P5'] ; ?>';
            player6 = '<?php echo $row['P6'] ; ?>';
            player7 = '<?php echo $row['P7'] ; ?>';
            player8 = '<?php echo $row['P8'] ; ?>';
            player9 = '<?php echo $row['P9'] ; ?>' ">
              <div class="eight wide column">
                
            <?php 
              if (isset($_POST["submit"]))
              {
                $p1 = mysql_real_escape_string($_POST["player1"]) ;
                $p2 = mysql_real_escape_string($_POST["player2"]) ;
                $p3 = mysql_real_escape_string($_POST["player3"]) ;
                $p4 = mysql_real_escape_string($_POST["player4"]) ;
                $p5 = mysql_real_escape_string($_POST["player5"]) ;
                $p6 = mysql_real_escape_string($_POST["player6"]) ;
                $p7 = mysql_real_escape_string($_POST["player7"]) ;
                $p8 = mysql_real_escape_string($_POST["player8"]) ;
                $p9 = mysql_real_escape_string($_POST["player9"]) ;
                if ($p1 == $p2 || $p1 == $p3 || $p1 == $p4 || $p1 == $p5 || $p1 == $p6 || $p1 == $p7 || $p1 == $p8 || $p1 == $p9 || $p2 == $p1 || $p2 == $p3 || $p2 == $p4 || $p2 == $p5 || $p2 == $p6 || $p2 == $p7 || $p2 == $p8 || $p2 == $p9 || $p3 == $p1 || $p3 == $p2 || $p3 == $p4 || $p3 == $p5 || $p3 == $p6 || $p3 == $p7 || $p3 == $p8 || $p3 == $p9 || $p4 == $p1 || $p4 == $p2 || $p4 == $p3 || $p4 == $p5 || $p4 == $p6 || $p4 == $p7 || $p4 == $p8 || $p4 == $p9 || $p5 == $p1 || $p5 == $p2 || $p5 == $p3 || $p5 == $p4 || $p5 == $p6 || $p5 == $p7 || $p5 == $p8 || $p5 == $p9 || $p6 == $p1 || $p6 == $p2 || $p6 == $p3 || $p6 == $p4 || $p6 == $p5 || $p6 == $p7 || $p6 == $p8 || $p6 == $p9 || $p7 == $p1 || $p7 == $p2 || $p7 == $p3 || $p7 == $p4 || $p7 == $p5 || $p7 == $p6 || $p7 == $p8 || $p7 == $p9 || $p8 == $p1 || $p8 == $p2 || $p8 == $p3 || $p8 == $p4 || $p8 == $p5 || $p8 == $p6 || $p8 == $p7 || $p8 == $p9 || $p9 == $p1 || $p9 == $p2 || $p9 == $p3 || $p9 == $p4 || $p9 == $p5 || $p9 == $p6 || $p9 == $p7 || $p9 == $p8) {
                  echo "
                  <div class='ui red message'>
                    يوجد تكرار في اللاعببين
                  </div>";
                }
                else
                {
                  $sql2 = "UPDATE combination set P1 = '$p1' , P2 = '$p2', P3 = '$p3', P4 = '$p4', P5 = '$p5', P6 = '$p6', P7 = '$p7', P8 = '$p8', P9 = '$p9' where User_Name = '$username' ";
                  mysql_query($sql2);
                  print "<meta http-equiv='refresh' content='0;url=my_team.php'>";
                }
              } 
            ?>
                <div class="ui horizontal divider">
                  الرجاء التأكد من كافة المراكز لعدم التكرار قبل الحفظ
                </div>
                <div class="ui horizontal divider">
                  التشكيلة الأساسية
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player1" ng-model="player1" >
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player2" ng-model="player2">
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player3" ng-model="player3">
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player4" ng-model="player4">
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player5" ng-model="player5">
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player6" ng-model="player6">
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                  </select>
                </div>
                <div class="ui horizontal divider">
                  الإحتياط
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player7" ng-model="player7">
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player8" ng-model="player8">
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player9" ng-model="player9">
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                  </select>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="center aligned column">
                  <input class="ui inverted huge blue submit button" name="submit" type="submit" style="transition: 1.5s;" value="حفظ التشكيلة" />
                </div>
              </div>
            </form>
            <?php 
            }
            else
            {
              echo "
              <div class='ui header'>لم تقم بإختيار اللاعبين بعد</div>
              <a href='select_players.php' class='ui inverted huge blue submit button' style='transition: 1.5s;'>إختار اللاعبين</a>
              ";
            } 
            ?>
      </div>
      <?php 
            }
         else
         {
          echo "
          <div class='ui container'>
            <div class='ui red message'>
              لا يمكنك تغيير التشكيلة حاليا
            </div>
          </div>";
         }
       ?>
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