<?php
require("config.php");
if(!empty($_SESSION['myuse'])){
  $username = $_SESSION['myuse'];
  $maximum_salary = 650 ;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport" />
    <title>فانتازي دوري العياشي | الإنتقالات</title>
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
        <?php require "main_nav.php"; 
              $sql4 = "SELECT * FROM user where User_Name = '$username' ";
              $query4 = mysql_query($sql4);
              $row4 = mysql_fetch_assoc($query4);
              $transfer = $row4["Transfer"];
              if ($transfer == 1) {
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
            <div class="sixteen wide centered column">
              <marquee direction="left" loop="1000" onmouseover="stop();"  onmouseout="start();">
                <div class="ui cards">
                <?php 
                  $sql100 = "SELECT * FROM players";
                  $query100 = mysql_query($sql100);
                  while ($row100 = mysql_fetch_assoc($query100)) {
                 ?>
                  <div class="card">
                    <div class="image">
                      <img src="../img/UUU.png" style="height: 150px;">
                    </div>
                    <div class="content">
                      <table align="center">
                        <tr>
                          <td width="50%">
                            <a class="ui medium black header"><?php echo $row100["Player_Name"]; ?></a>
                          </td>
                          <td width="50%" align="center">
                            <a class="ui medium black header"><?php echo $row100["Team"]; ?></a>
                          </td>
                        </tr>
                        <tr>
                          <td width="50%">
                            <a class="header">الأهداف</a>
                            <div class="meta">
                              <span class="date"><?php echo $row100["goals"]; ?></span>
                            </div>
                          </td>
                          <td width="50%" align="center">
                            <a class="header">النقاط الكلية</a>
                            <div class="meta">
                              <span class="date"><?php echo $row100["Total_points"]; ?></span>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="extra content">
                      <a>
                        <i class="money bill alternate outline icon"></i>
                        <?php echo $row100["Salary"]; ?> : السعر
                      </a>
                    </div>
                  </div>
              <?php } ?>
                </div>
              </marquee>
            </div>
          </div>
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
                    $sql13 = "SELECT * FROM players where Player_Name = '$p1' ";
                    $query13 = mysql_query($sql13);
                    $row13 = mysql_fetch_assoc($query13);
                    $ts1 = $row13["Salary"];
                    $sql14 = "SELECT * FROM players where Player_Name = '$p2' ";
                    $query14 = mysql_query($sql14);
                    $row14 = mysql_fetch_assoc($query14);
                    $ts2 = $row14["Salary"];
                    $sql15 = "SELECT * FROM players where Player_Name = '$p3' ";
                    $query15 = mysql_query($sql15);
                    $row15 = mysql_fetch_assoc($query15);
                    $ts3 = $row15["Salary"];
                    $sql16 = "SELECT * FROM players where Player_Name = '$p4' ";
                    $query16 = mysql_query($sql16);
                    $row16 = mysql_fetch_assoc($query16);
                    $ts4 = $row16["Salary"];
                    $sql17 = "SELECT * FROM players where Player_Name = '$p5' ";
                    $query17 = mysql_query($sql17);
                    $row17 = mysql_fetch_assoc($query17);
                    $ts5 = $row17["Salary"];
                    $sql18 = "SELECT * FROM players where Player_Name = '$p6' ";
                    $query18 = mysql_query($sql18);
                    $row18 = mysql_fetch_assoc($query18);
                    $ts6 = $row18["Salary"];
                    $sql19 = "SELECT * FROM players where Player_Name = '$p7' ";
                    $query19 = mysql_query($sql19);
                    $row19 = mysql_fetch_assoc($query19);
                    $ts7 = $row19["Salary"];
                    $sql20 = "SELECT * FROM players where Player_Name = '$p8' ";
                    $query20 = mysql_query($sql20);
                    $row20 = mysql_fetch_assoc($query20);
                    $ts8 = $row20["Salary"];
                    $sql21 = "SELECT * FROM players where Player_Name = '$p9' ";
                    $query21 = mysql_query($sql21);
                    $row21 = mysql_fetch_assoc($query21);
                    $ts9 = $row21["Salary"];
                    $total_salary = $ts1 + $ts2 + $ts3 + $ts4 + $ts5 + $ts6 + $ts7 + $ts8 + $ts9 ;
                if ($p1 == $p2 || $p1 == $p3 || $p1 == $p4 || $p1 == $p5 || $p1 == $p6 || $p1 == $p7 || $p1 == $p8 || $p1 == $p9 || $p2 == $p1 || $p2 == $p3 || $p2 == $p4 || $p2 == $p5 || $p2 == $p6 || $p2 == $p7 || $p2 == $p8 || $p2 == $p9 || $p3 == $p1 || $p3 == $p2 || $p3 == $p4 || $p3 == $p5 || $p3 == $p6 || $p3 == $p7 || $p3 == $p8 || $p3 == $p9 || $p4 == $p1 || $p4 == $p2 || $p4 == $p3 || $p4 == $p5 || $p4 == $p6 || $p4 == $p7 || $p4 == $p8 || $p4 == $p9 || $p5 == $p1 || $p5 == $p2 || $p5 == $p3 || $p5 == $p4 || $p5 == $p6 || $p5 == $p7 || $p5 == $p8 || $p5 == $p9 || $p6 == $p1 || $p6 == $p2 || $p6 == $p3 || $p6 == $p4 || $p6 == $p5 || $p6 == $p7 || $p6 == $p8 || $p6 == $p9 || $p7 == $p1 || $p7 == $p2 || $p7 == $p3 || $p7 == $p4 || $p7 == $p5 || $p7 == $p6 || $p7 == $p8 || $p7 == $p9 || $p8 == $p1 || $p8 == $p2 || $p8 == $p3 || $p8 == $p4 || $p8 == $p5 || $p8 == $p6 || $p8 == $p7 || $p8 == $p9 || $p9 == $p1 || $p9 == $p2 || $p9 == $p3 || $p9 == $p4 || $p9 == $p5 || $p9 == $p6 || $p9 == $p7 || $p9 == $p8) {
                  echo "
                  <div class='ui red message'>
                    يوجد تكرار في اللاعببين
                  </div>";
                }
                    else
                      if ($total_salary > $maximum_salary) {
                        echo "
                      <div class='ui red message'>
                        تجاوزت الرصيد المسموح به
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
                  الرصيد المسموح به 650
                </div>
                <div class="ui horizontal divider">
                  التشكيلة الأساسية
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player1" ng-model="player1" >
                    <option value="<?php echo $row['P1'] ; ?>"><?php echo $row['P1'] ; ?></option>
                    <?php 
                      $play1 = $row['P1'] ;
                      $sql5 = "SELECT * FROM players where Player_Name != '$play1' ";
                      $query1 = mysql_query($sql5);
                      while($row1 = mysql_fetch_assoc($query1)){
                    ?>
                    <option value="<?php echo $row1['Player_Name'] ; ?>"><?php echo $row1['Player_Name'] ; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player2" ng-model="player2">
                    <option value="<?php echo $row['P2'] ; ?>"><?php echo $row['P2'] ; ?></option>
                    <?php 
                      $play2 = $row['P2'] ;
                      $sql6 = "SELECT * FROM players where Player_Name != '$play2' ";
                      $query6 = mysql_query($sql6);
                      while($row6 = mysql_fetch_assoc($query6)){
                    ?>
                    <option value="<?php echo $row6['Player_Name'] ; ?>"><?php echo $row6['Player_Name'] ; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player3" ng-model="player3">
                    <option value="<?php echo $row['P3'] ; ?>"><?php echo $row['P3'] ; ?></option>
                    <?php 
                      $play3 = $row['P3'] ;
                      $sql7 = "SELECT * FROM players where Player_Name != '$play3' ";
                      $query7 = mysql_query($sql7);
                      while($row7 = mysql_fetch_assoc($query7)){
                    ?>
                    <option value="<?php echo $row7['Player_Name'] ; ?>"><?php echo $row7['Player_Name'] ; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player4" ng-model="player4">
                    <option value="<?php echo $row['P4'] ; ?>"><?php echo $row['P4'] ; ?></option>
                    <?php 
                      $play4 = $row['P4'] ;
                      $sql8 = "SELECT * FROM players where Player_Name != '$play4' ";
                      $query8 = mysql_query($sql8);
                      while($row8 = mysql_fetch_assoc($query8)){
                    ?>
                    <option value="<?php echo $row8['Player_Name'] ; ?>"><?php echo $row8['Player_Name'] ; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player5" ng-model="player5">
                    <option value="<?php echo $row['P5'] ; ?>"><?php echo $row['P5'] ; ?></option>
                    <?php 
                      $play5 = $row['P5'] ;
                      $sql9 = "SELECT * FROM players where Player_Name != '$play5' ";
                      $query9 = mysql_query($sql9);
                      while($row9 = mysql_fetch_assoc($query9)){
                    ?>
                    <option value="<?php echo $row9['Player_Name'] ; ?>"><?php echo $row9['Player_Name'] ; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player6" ng-model="player6">
                    <option value="<?php echo $row['P6'] ; ?>"><?php echo $row['P6'] ; ?></option>
                    <?php 
                      $play6 = $row['P6'] ;
                      $sql10 = "SELECT * FROM players where Player_Name != '$play6' ";
                      $query10 = mysql_query($sql10);
                      while($row10 = mysql_fetch_assoc($query10)){
                    ?>
                    <option value="<?php echo $row10['Player_Name'] ; ?>"><?php echo $row10['Player_Name'] ; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="ui horizontal divider">
                  الإحتياط
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player7" ng-model="player7">
                    <option value="<?php echo $row['P7'] ; ?>"><?php echo $row['P7'] ; ?></option>
                    <?php 
                      $play7 = $row['P7'] ;
                      $sql11 = "SELECT * FROM players where Player_Name != '$play7' ";
                      $query11 = mysql_query($sql11);
                      while($row11 = mysql_fetch_assoc($query11)){
                    ?>
                    <option value="<?php echo $row11['Player_Name'] ; ?>"><?php echo $row11['Player_Name'] ; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player8" ng-model="player8">
                    <option value="<?php echo $row['P8'] ; ?>"><?php echo $row['P8'] ; ?></option>
                    <?php 
                      $play8 = $row['P8'] ;
                      $sql12 = "SELECT * FROM players where Player_Name != '$play8' ";
                      $query12 = mysql_query($sql12);
                      while($row12 = mysql_fetch_assoc($query12)){
                    ?>
                    <option value="<?php echo $row12['Player_Name'] ; ?>"><?php echo $row12['Player_Name'] ; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="field">
                  <select class="ui dropdown" name="player9" ng-model="player9">
                    <option value="<?php echo $row['P9'] ; ?>"><?php echo $row['P9'] ; ?></option>
                    <?php 
                      $play9 = $row['P9'] ;
                      $sql133 = "SELECT * FROM players where Player_Name != '$play9' ";
                      $query133 = mysql_query($sql133);
                      while($row133 = mysql_fetch_assoc($query133)){
                    ?>
                    <option value="<?php echo $row133['Player_Name'] ; ?>"><?php echo $row133['Player_Name'] ; ?></option>
                    <?php } ?>
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
              الإنتقالات متوقفة
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