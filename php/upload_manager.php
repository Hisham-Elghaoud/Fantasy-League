<?php

require "config.php";

?>

<!DOCTYPE html>
<!--
upload_manager.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		
		    $filename = $_FILES["upFile"]["name"];
            $filetype = $_FILES["upFile"]["type"];
            $fileExtention = pathinfo($filename, PATHINFO_EXTENSION);
		
        if ($_FILES["upFile"]["error"] > 0) {
            echo "
			<div class='alert alert-danger'>
			<h1 align='center'>
			خطأ : نوع الصورة غير مدعوم
			 </h1>
			</div>
			 " ;
			 print "<meta http-equiv='refresh' content='1;url=my_status.php'>";
        } elseif  ($fileExtention != "jpg" && $fileExtention != "jpeg" 
                               && $fileExtention!= "png" && $fileExtention != "gif"){
								   
								    echo "
			<div class='alert alert-danger'>
			<h1 align='center'>
			خطأ : نوع الصورة غير مدعوم
			 </h1>
			</div>
			 " ;
			 
			 print "<meta http-equiv='refresh' content='1;url=my_status.php'>";
			 
								   }
							   
							   
							   else {
            
            move_uploaded_file($_FILES["upFile"]["tmp_name"], "../img/uploads/" . $_FILES["upFile"]["name"]);
			$imgsrc = "../img/uploads/" . $_FILES["upFile"]["name"];
			$id = $_SESSION['id'];
			$sql = "UPDATE user SET img_src='$imgsrc' WHERE id='$id' ";
			mysql_query($sql);
			
            echo "<div class='alert alert-success'>
			<h1 align='center'>
			تم تحميل الصورة بنجاح
			</h1>
			</div>";
			
			print "<meta http-equiv='refresh' content='1;url=my_status.php'>";
        }
        ?>
    </body>
</html>

