<?php
require("config.php");
if(!empty($_SESSION['admin'])){
  $dates = date("y-m-d");
  $team1 = $_GET["team1"];
  $team2 = $_GET["team2"];
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport" />
    <title>فانتازي دوري العياشي | تفاصيل المبارة</title>
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
      <?php require "admin_fixed_nav.php"; ?>
    <!--Sidebar Menu-->
      <?php require "admin_sidebar.php"; ?>
    <!--Page Contents-->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment" style="background-image: url('../img/bg.png'); background-repeat: no-repeat; background-size: cover;">
        <!--Main Nav Menu-->
        <?php require "admin_main_nav.php"; ?>
      </div>
      <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
          <div class="row">
            <div class="six wide centered column">
              <a href="set_match_score.php?team1=<?php echo $team1; ?>&team2=<?php echo $team2; ?>" class="ui inverted fluid blue button" style="transition: 1.5s;">إدخال نتيجة المبارة</a>
            </div>
          </div>
          <div class="row">
            <div class="sixteen wide column">
              <form action="#" method="post" name="player_rating" class="ui form" novalidate>
                <table class="ui selectable inverted table">
                  <thead>
                    <tr>
                      <th>إسم اللاعب</th>
                      <th>الأهداف</th>
                      <th>اسيست</th>
                      <th>إضاعة ركلة جزاء</th>
                      <th>كلين شيت</th>
                      <th>هدف من الحارس</th>
                      <th>تصدى لركلة جزاء</th>
                      <th>هدف تلقاه الحارس</th>
                      <th>هدف عكسي</th>
                      <th>كرت اصفر</th>
                      <th>كرت احمر</th>
                      <th>لعب مبارة كاملة</th>
                      <th class="right aligned">الإجراء</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <select name="player_name" class="ui dropdown">
                          <?php
                          $sql77 = "SELECT * FROM players 
                          where 
                          Team = '$team1' AND update_date != '$dates' 
                          OR 
                          Team = '$team2' AND update_date != '$dates' ";
                          $result77 = mysql_query($sql77);
                          while ($row77 = mysql_fetch_assoc($result77)) { 
                        ?>
                          <option value="<?php echo $row77["Player_Name"]; ?>"><?php echo $row77["Player_Name"]; ?></option>
                        <?php } ?>
                        </select>
                      </td>
                      <td><input type="number" name="goals" value="0"></td>
                      <td><input type="number" name="asesst" value="0"></td>
                      <td><input type="number" name="miss_pelanty" value="0"></td>
                      <td><input type="radio" name="clean_sheet" value="1"></td>
                      <td><input type="number" name="gk_score" value="0"></td>
                      <td><input type="number" name="pelanty_save" value="0"></td>
                      <td><input type="number" name="goal_conceded" value="0"></td>
                      <td><input type="number" name="own_goal" value="0"></td>
                      <td><input type="radio" name="cards" value="-2"></td>
                      <td><input type="radio" name="cards" value="-3"></td>
                      <td><input type="radio" name="full_match" value="1"></td>
                      <td class="right aligned">
                        <input type="submit" name="submit" class="ui inverted small blue button" value="تأكيد" style="transition: 1.5s;">
                      </td>
                    </tr>
                  </tbody>
                </table>
                <?php 
                  $cards_score = 0; 
                  $full_match = 0;
                ?>
              </form>
              <?php 
                if (isset($_POST["submit"])) 
                {
                  $player_name = $_POST["player_name"];
                  $goals = $_POST["goals"];
                  $asesst = $_POST["asesst"];
                  $miss_pelanty = $_POST["miss_pelanty"];
                  $clean_sheet = $_POST["clean_sheet"];
                  $gk_score = $_POST["gk_score"];
                  $pelanty_save = $_POST["pelanty_save"];
                  $goal_conceded = $_POST["goal_conceded"];
                  $own_goal = $_POST["own_goal"];

                  $goals_score = 6 * $goals;
                  $asesst_score = 4 * $asesst;
                  $miss_pelanty_score = -3 * $miss_pelanty;
                  $clean_sheet_score = 5 * $clean_sheet;
                  $gk_score_score = 8 * $gk_score;
                  $pelanty_save_score = 5 * $pelanty_save;
                  $goal_conceded_score = -1 * $goal_conceded;
                  $own_goal_score = -3 * $own_goal;
                  $cards_score = $_POST["cards"];
                  $full_match = $_POST["full_match"];
                  $gwp = $goals_score + $asesst_score + $miss_pelanty_score + $clean_sheet_score + $gk_score_score + $pelanty_save_score + $goal_conceded_score + $own_goal_score + $cards_score + $full_match;

                  $sql88 = "SELECT * FROM players where  Player_Name = '$player_name' ";
                  $result88 = mysql_query($sql88);
                  $row88 = mysql_fetch_assoc($result88);
                  $tp = $row88["Total_points"];
                  $tp_score = $tp + $gwp;
                  $tg = $row88["goals"] + $goals;
                  $ta = $row88["asesst"] + $asesst;
                  $tmp = $row88["miss_pelanty"] + $miss_pelanty;
                  $tch = $row88["clean_sheet"] + $clean_sheet;
                  $tgs = $row88["gk_score"] + $gk_score;
                  $tps = $row88["pelanty_save"] + $pelanty_save;
                  $tgc = $row88["goal_conceded"] + $goal_conceded;
                  $tog = $row88["own_goal"] + $own_goal;
                  $tfm = $row88["full_match"] + $full_match;

                  $sql = " UPDATE players set Game_Week_Points = '$gwp' , Total_points = '$tp_score' , update_date = '$dates', goals = '$tg', asesst = '$ta', miss_pelanty = '$tmp', clean_sheet = '$tch', gk_score = '$tgs', pelanty_save = '$tps', goal_conceded = '$tgc', own_goal = '$tog', full_match = '$tfm' where Player_Name = '$player_name' ";
                  $result = mysql_query($sql);
                  print "<meta http-equiv='refresh' content='0;url=match.php?team1=$team1&team2=$team2'>";
                }
               ?>
            </div>
          </div>
        </div>
      </div>
  <!--footer Contents-->
      <?php require "admin_footer.php"; ?>
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