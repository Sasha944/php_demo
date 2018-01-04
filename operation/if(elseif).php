<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
     $minute = 46;
     $a = 2;
     $num = 3;
     $result;
     if(($minute >= 0)&&($minute < 16)){
          echo "<p>Це число входить в першу четверть</p>";
     }
      else if (($minute >= 16)&&($minute < 31)) {
          echo "<p>Це число входить в другу четверть</p>";
     }
      else if(($minute >= 31)&&($minute < 46)){
       echo "<p>Це число входить в третю четверть</p>";
     }
      else if(($minute >= 46)&&($minute<60)){
          echo "<p>Це число входить в четверту четверть</p>";
     }
     if($a>0 && $a<5){
        echo "<p>Вірно</p>";
     }
     else {
        echo "<p>Невірно</p>";
     }
      
     switch($num){
          case 1 :
          $result = "Зима";
          break;
          case 2 :
          $result = "Весна";
          break;
          case 3 :
          $result = "Літо";
          break;
          case 4 :
          $result = "Осінь";
          break;
     }
     echo $result." <br/>";

      ?>
     

     

</body>
</html>