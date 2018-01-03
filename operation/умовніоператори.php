<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
     $minute = 0;
     if(($minute >= 0)&&($minute < 16)){
     	echo "Це число входить в першу четверть";
     }
      else if (($minute >= 15)&&($minute < 31)) {
     	echo "Це число входить в другу четверть";
     }
     //  else if(($minute >= 31)&&($minute < 46)){
     // 	echo "Це число входить в третю четверть";
     // }
      else if(($minute >= 41)&&($minute<60)){
     	echo "Це число входить в четверту четверть";
     }
	 ?>
</body>
</html>