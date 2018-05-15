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
    <title>فانتازي دوري العياشي | القوانين</title>
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
	  	$('.ui.accordion')
  		.accordion()
 		;
	});
	

</script>
<style >
.transition.hidden{
color:#2C8A31;	
}
</style>

<style>
.body{font-family:"ARezvan";}
</style>

  </head>
<meta charset="utf-8">
<title>Untitled Document</title>


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
      </div>
      <div class="ui vertical stripe segment">
	  	<div class="ui container" >
        
            <div class="ui styled fluid accordion" align="center" style="background-color:#AEE495" >
             <div class="title">
                <i class="dropdown icon"></i>
                الاعبين من كل فريق ؟
              </div>
              <div class="content">
                <p class="transition hidden" style="color:#154418;">بإمكانك اختيار ثلاثة لاعبين بحد أقصى من كل الفرق في الدوري</p>
              </div>
              <div class="title">
                <i class="dropdown icon"></i>
                كيف تختار الاعبين ؟ 
              </div>
              <div class="content">
                <p class="transition hidden" style="color:#154418;"> اختر تشكيلة تتظمن تسعة  لاعبين <br>  اثنان منهم حراس مرمى و سبعة لاعبين   </p>
              </div>
             
             <div class="title">
                <i class="dropdown icon"></i>
                إختيار الكابتن والكابتن الإحتياطي ؟ 
              </div>
              <div class="content">
                <p class="transition hidden" style="color:#154418;"> إختر كابتن الفريق و الكابتن الاحتياطي من تشكيلتك الأساسية <br> نقاط الكابتن يتم مضاعفتها في كل مبارة ,في حالة عدم لعب الكابتن لأي دقيقة في المبارة يتم مضاعفة نقاط الكابتن اللإحتياطي  <br> في حالة عدم مشاركة كلاهما لأي دقيقة لا يتم مضاعفة نقاط أي لاعب   </p>
              </div>
              <div class="title">
                <i class="dropdown icon"></i>
                النقاط ؟ 
              </div>
              <div class="content">
                <p class="transition hidden" style="color:#154418;"> سيتم منح لاعبيك النقاط بناء علا ادائهم في مباريات الدوري
                <br>
                اللعب لمباراة كاملة تضيف نقطة واحدة
                <br>
                احراز هدف يضيف ستة نقاط
                <br>
                احراز حارس المرمى هدف يضيف ثمانية نقاط
                <br>
                صناعة الهدف يضيف اربعة نقاط
                <br>
                شباك نضيفه للحارس تضيف خمسة نقاط
                <br>
                ضربة جزاء يتم صدها تضيف خمسة نقاط
                <br>
                ضربة جزاء يتم اضاعتها تخصم ثلاث نقاط
                <br>
                كل هدف يتلقاه الحارس يخصم نقطة واحدة
                <br>
                كل هدف عكسي يخصم ثلاث نقاط
                <br>
                كرت اصفر يخصم نقطتين
                <br>
                كرت احمر يخصم ثلاث نقاط
                
                 </p>
              </div>
              <div class="title">
                <i class="dropdown icon"></i>
                الميزانية ؟
              </div>
              <div class="content">
                <p class="transition hidden" style="color:#154418;"> 
                إجمالي ثمن التشكيلة يجب ألا يتجاوز 650 ألف
                </p>
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