<?php
require("config.php");
if(!empty($_SESSION['myuse'])){
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
      <?php require "fixed_nav.php"; ?>
    <!--Sidebar Menu-->
      <?php require "sidebar.php"; ?>
    <!--Page Contents-->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment" style="background-image: url('../img/bg.png'); background-repeat: no-repeat; background-size: cover;">
        <!--Main Nav Menu-->
        <?php require "main_nav.php"; ?>
      </div>
      <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
          <div class="row">
            <div class="six wide centered column">
              <a href="results.php" class="ui inverted fluid blue button" style="transition: 1.5s;">كافة النتائج</a>
            </div>
          </div>
          <div class="row">
            <div class="six wide centered column">
              <?php 
                $dates = "20".date("y-m-d");
                $sql4 = "SELECT * FROM matchs where match_date = '$dates' ";
                $result4 = mysql_query($sql4);
                $numrows = mysql_num_rows($result4);
                if ($numrows > 0) {
                  while ($row4 = mysql_fetch_assoc($result4)){
               ?>
               <div class="ui container">
                <div class="ui grid">
                   <div class="ui middle aligned stackable grid container">
                     <div class="row">
                      <div class="ten wide centered column">
                        <a href="match.php?team1=<?php echo $row4["team1"]; ?>&team2=<?php echo $row4["team2"]; ?>">
                            <div class="ui huge horizontal divided list">
                              <div class="item">
                                <div class="content">
                                  <div class="header"><?php echo $row4["team1"]; ?></div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="content">
                                  <?php 
                                    if ($row4["score"] == " ") {
                                   ?>
                                  <div class="header">VS</div>
                                  <?php 
                                    }
                                    else
                                    {
                                   ?>
                                   <div class="header"><?php echo $row4["score"]; ?></div>
                                   <?php } ?>
                                </div>
                              </div>
                              <div class="item">
                                <div class="content">
                                  <div class="header"><?php echo $row4["team2"]; ?></div>
                                </div>
                              </div>
                          </div>
                       </a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
               <?php 
                  }
                }
                else
                  echo "
                <div class='ui red message'>
                  لايوجد مباريات اليوم
                </div>
                ";
               ?>
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