<?php
require("config.php");
if(!empty($_SESSION['admin'])){
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport" />
    <title>فانتازي دوري العياشي | اللاعبين</title>
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
<body>
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
            <div class="sixteen wide column">
                <form class="ui form" action="#" method="post">  
                  <div class="two fields">
                    <div class="field">
                      <label>أسم اللعب</label>
                      <input name="Player_Name" placeholder="أسم اللعب" type="text">
                    </div>
                    <div class="field">
                      <label> السعر </label>
                      <select class="ui dropdown" name="Salary">
                        <option value="100">100</option>
                        <option value="80">80</option>
                        <option value="60">60</option>
                        <option value="40">40</option>  
                      </select>
                    </div>
                  </div>
                  <div class="field">
                    <label>الفريق</label>
                    <select name="Team" class="ui dropdown " >
						        <?php 
                         $sql = "SELECT * FROM teams";
                         $query = mysql_query($sql);
                         while($row = mysql_fetch_assoc($query)){			  
                    ?>
                    	   <option value="<?php echo $row["team_name"]; ?>"><?php echo $row["team_name"]; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <br><br><br><br><br>
                  <div class="field">
                    <input type="submit" name="submit" class="ui inverted blue fluid button " value="إضافة">
                  </div>
                </div>
            </form>  
             <?php
          	    if(isset($_POST["submit"]))
              		{
              			$update_date = date("y-m-d");
              			$goals = 0;
              			$asesst = 0;
              			$miss_pelanty = 0;
              			$clean_sheet = 0;
              			$pelanty_save = 0;
              			$goal_conceded = 0;
              			$own_goal = 0;
              			$full_match = 0;
              			$Game_Week_Points = 0 ;
              			$Total_points = 0 ;
              			$gk_score = 0 ;
              			$Team=$_POST['Team'];
              			$Salary=$_POST['Salary'];
              			$Player_Name=$_POST['Player_Name'];
              		
              			$sql2="INSERT INTO players (`id`, `Player_Name`, `Game_Week_Points`, `Total_points`, `Team`, `Salary`, `update_date`, `goals`, `asesst`, `miss_pelanty`, `clean_sheet`, `gk_score`, `pelanty_save`, `goal_conceded`, `own_goal`, `full_match`) VALUES (NULL, '$Player_Name', '$Game_Week_Points', '$Total_points', '$Team', '$Salary', '$update_date', '$goals', '$asesst', '$miss_pelanty', '$clean_sheet', '$gk_score', '$pelanty_save', '$goal_conceded', '$own_goal', '$full_match')";
              			
              			mysql_query($sql2);
              			 print "<meta http-equiv='refresh' content='0;url=players.php'>";	
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