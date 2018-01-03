<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
      $conference=$_POST["conference"];
      $name=$_POST["name"];
      $number=$_POST["number"];
      $email=$_POST["email"];
      $education=$_POST["education"];
      $age=$_POST["age"];
      $date= date('H:i,jS F Y');

      switch($conference){
      	case "a":
      	 echo "<p>Це наукова  конференція</p>";
      	 break;
      	case "b":
      	 echo "<p>Це освітня  конференція</p>";
      	 break;
      	case "c":
      	 echo "<p>Це спортивна конференція</p>";
      	 break;
      }
      echo "<p>Ваше імя та прізвище - ".$name."</p>";
      echo "<p>email - ".$email."</p>";
      echo "Дата подання заявки - ".$date;



	 ?>
</body>
</html>