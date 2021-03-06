<?php
require("config.php");
if(!empty($_SESSION['admin'])){
  $team1 = $_GET["team1"];
  $team2 = $_GET["team2"];
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport" />
    <title>فانتازي دوري العياشي | المباريات</title>
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
          $('.special.cards .image').dimmer({
            on: 'hover'
          });
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
              <?php 
                if (isset($_POST["submit"])) 
                {
                  $t1=mysql_real_escape_string($_POST["tm1"]);
                  $t2=mysql_real_escape_string($_POST["tm2"]);
                  $match_score = "".$t1." - ".$t2."";
                  $sql3="UPDATE `matchs` set score = '$match_score' where team1 = '$team1' AND  team2 = '$team2'";
                  mysql_query($sql3);
                  print "<meta http-equiv='refresh' content='0;url=matchs.php'>";
                }
               ?>
                      <?php 
                        $sql = "SELECT * FROM matchs where team1 = '$team1' AND  team2 = '$team2' ";
                        $result = mysql_query($sql);
                        $row = mysql_fetch_assoc($result);
                       ?>
              <form class="ui form" name="set_match_score" action="#" method="post" novalidate>
                <div class="fields">
                  <div class="field">
                    <div class="ui massive label">
                      <?php echo $row["team2"]; ?>
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui huge header" style="padding-top: 10px;">
                      VS
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui massive label">
                      <?php echo $row["team1"]; ?>
                    </div>
                  </div>
                </div>
                <div class="fields">
                  <div class="field">
                    <div class="ui massive label">
                      <input required type="number" ng-model="tm2" name="tm2">
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui huge header" style="padding-top: 10px;">
                      -
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui massive label">
                      <input required type="number" ng-model="tm1" name="tm1">
                    </div>
                  </div>
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="ui inverted fluid blue button" value="تأكيد" style="transition: 1.5s;">
                  </div>
              </form>
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