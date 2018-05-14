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
    <title>فانتازي دوري العياشي | النقاط</title>
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
        <div class="ui middle aligned stackable grid container">
          <?php 
            $sql33 = "SELECT * FROM combination where User_Name = '$username' ";
            $query33 = mysql_query($sql33);
            $numrows=mysql_num_rows($query33);
           if   ($numrows == 1)
            {
          ?>
          <div class="row">
            <div class="six wide left floated column">
              <div class="row">
                <div class="sixteen wide centered column" style="background-image: url('../img/pitch.png'); background-size: cover;
                background-repeat: no-repeat;">
                <?php 
                  $sql4 = "SELECT * FROM combination where User_Name = '$username' ";
                  $query4 = mysql_query($sql4);
                  $row4 = mysql_fetch_assoc($query4);
                ?>
                      <table align="center" width="80%">
                        <tr>
                          <td colspan="3" align="center">
                            <img class="ui tiny image" src="../img/player.png">
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center">
                            <div class="extra content" style="background-color: #618e49; width: 30%; text-align: center;"><?php echo $row4['P1'] ; ?></div>
                            <div class="extra content" style="background-color: green; width: 30%; text-align: center;">
                               <?php 
                                $player1 = $row4['P1'] ;
                                $sql5 = "SELECT * FROM players where Player_Name = '$player1' ";
                                $query5 = mysql_query($sql5);
                                $row5 = mysql_fetch_assoc($query5);
                                $player1_Game_Week_Points = $row5["Game_Week_Points"] ; 
                                echo $player1_Game_Week_Points; 
                               ?>
                            </div>
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
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;"><?php echo $row4['P2'] ; ?></div>
                            <div class="extra content" style="background-color: green; width: 80%; text-align: center;">
                              <?php 
                                $player2 = $row4['P2'] ;
                                $sql6 = "SELECT * FROM players where Player_Name = '$player2' ";
                                $query6 = mysql_query($sql6);
                                $row6 = mysql_fetch_assoc($query6);
                                $player2_Game_Week_Points = $row6["Game_Week_Points"] ; 
                                echo $player2_Game_Week_Points; 
                               ?>
                            </div>
                          </td>
                          <td align="center" width="30%"> </td>
                          <td align="left" width="35%">
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;"><?php echo $row4['P3'] ; ?></div>
                            <div class="extra content" style="background-color: green; width: 80%; text-align: center;">
                              <?php 
                                $player3 = $row4['P3'] ;
                                $sql7 = "SELECT * FROM players where Player_Name = '$player3' ";
                                $query7 = mysql_query($sql7);
                                $row7 = mysql_fetch_assoc($query7);
                                $player3_Game_Week_Points = $row7["Game_Week_Points"] ; 
                                echo $player3_Game_Week_Points; 
                               ?>
                            </div>
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
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;"><?php echo $row4['P4'] ; ?></div>
                            <div class="extra content" style="background-color: green; width: 80%; text-align: center;">
                              <?php 
                                $player4 = $row4['P4'] ;
                                $sql8 = "SELECT * FROM players where Player_Name = '$player4' ";
                                $query8 = mysql_query($sql8);
                                $row8 = mysql_fetch_assoc($query8);
                                $player4_Game_Week_Points = $row8["Game_Week_Points"] ; 
                                echo $player4_Game_Week_Points; 
                               ?>
                            </div>
                          </td>
                          <td align="center" width="30%">
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;"><?php echo $row4['P5'] ; ?></div>
                            <div class="extra content" style="background-color: green; width: 80%; text-align: center;">
                              <?php 
                                $player5 = $row4['P5'] ;
                                $sql9 = "SELECT * FROM players where Player_Name = '$player5' ";
                                $query9 = mysql_query($sql9);
                                $row9 = mysql_fetch_assoc($query9);
                                $player5_Game_Week_Points = $row9["Game_Week_Points"] ; 
                                echo $player5_Game_Week_Points; 
                               ?>
                            </div>
                          </td>
                          <td align="right" width="35%">
                            <div class="extra content" style="background-color: #618e49; width: 80%; text-align: center;"><?php echo $row4['P6'] ; ?></div>
                            <div class="extra content" style="background-color: green; width: 80%; text-align: center;">
                              <?php 
                                $player6 = $row4['P6'] ;
                                $sql10 = "SELECT * FROM players where Player_Name = '$player6' ";
                                $query10 = mysql_query($sql10);
                                $row10 = mysql_fetch_assoc($query10);
                                $player6_Game_Week_Points = $row10["Game_Week_Points"] ; 
                                echo $player6_Game_Week_Points; 
                               ?>
                            </div>
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
                          <div class="header"><?php echo $row4['P7'] ; ?></div>
                          <?php 
                           $player7 = $row4['P7'] ;
                           $sql11 = "SELECT * FROM players where Player_Name = '$player7' ";
                           $query11 = mysql_query($sql11);
                           $row11 = mysql_fetch_assoc($query11);
                           $player7_Game_Week_Points = $row11["Game_Week_Points"] ; 
                           echo $player7_Game_Week_Points; 
                          ?>
                        </div>
                      </div>
                      <div class="item">
                        <img class="ui avatar image" src="../img/pic.png">
                        <div class="content">
                          <div class="header"><?php echo $row4['P8'] ; ?></div>
                          <?php 
                           $player8 = $row4['P8'] ;
                           $sql12 = "SELECT * FROM players where Player_Name = '$player8' ";
                           $query12 = mysql_query($sql12);
                           $row12 = mysql_fetch_assoc($query12);
                           $player8_Game_Week_Points = $row12["Game_Week_Points"] ; 
                           echo $player8_Game_Week_Points; 
                          ?>
                        </div>
                      </div>
                      <div class="item">
                        <img class="ui avatar image" src="../img/pic.png">
                        <div class="content">
                          <div class="header"><?php echo $row4['P9'] ; ?></div>
                          <?php 
                           $player9 = $row4['P9'] ;
                           $sql13 = "SELECT * FROM players where Player_Name = '$player9' ";
                           $query13 = mysql_query($sql13);
                           $row13 = mysql_fetch_assoc($query13);
                           $player9_Game_Week_Points = $row13["Game_Week_Points"] ; 
                           echo $player9_Game_Week_Points; 
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="eight wide column">
              <table class="ui celled structured table" dir="rtl">
                <thead>
                  <tr>
                    <th rowspan="2" style="color:red; text-align: right;"><span style="font-size:40px;">نقاطك : 
                      <?php 
                      $gwp= $player1_Game_Week_Points + $player2_Game_Week_Points + $player3_Game_Week_Points + $player4_Game_Week_Points + $player5_Game_Week_Points + $player6_Game_Week_Points;
                      echo $gwp;
                      $sql400 = "UPDATE ranks set Point_Game_Week = '$gwp' where User_Name = '$username' ";
                      mysql_query($sql400);
                     ?></span>
                   </th>
                    <th rowspan="2" align="right" style="text-align: right;">أعلى نقاط : <?php 
                    $sql66 = "SELECT * FROM ranks";
                    $query66 = mysql_query($sql66);
                    $high_point = 0;
                    while ($row66 = mysql_fetch_assoc($query66)) 
                    {
                      $point = $row66["Point_Game_Week"];
                      if ($point > $high_point) 
                        {
                          $high_point = $point;
                        }  
                    }
                    echo $high_point;
                     ?></th>
                    <th rowspan="2" align="right" style="text-align: right;">معدل النقاط : <?php 
                    $sql77 = "SELECT * FROM user";
                    $query77 = mysql_query($sql77);
                    $all_users = mysql_num_rows($query77);

                    $sql88 = "SELECT * FROM ranks";
                    $query88 = mysql_query($sql88);
                    $tottal_points = 0;
                    while ($row88 = mysql_fetch_assoc($query88)) 
                    {
                      $tottal_points = $tottal_points + $row88["Point_Game_Week"];
                    }

                    echo $tottal_points / $all_users;
                     ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="3" style="text-align: center; font-size:40px;">ترتيب الجولة : <br><br> 
                      <?php 
                        $sql77 = "SELECT * FROM ranks where User_Name = '$username' ";
                        $query77 = mysql_query($sql77);
                        $row77 = mysql_fetch_assoc($query77);
                        echo $row77["Game_Week_Ranks"];
                      ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="center aligned column">
              <a class="ui inverted huge blue submit button" href="ranks.php" style="transition: 1.5s;">الترتيب الكلي للجولة</a>
            </div>
          </div>
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