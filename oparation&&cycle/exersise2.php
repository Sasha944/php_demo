<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>	
      div{
      	margin-bottom: 15px;	
      }
      p{
      	margin: 3px;
      }
	</style>
</head>
<body>
	<form action="" method="post">
		<div class="firstinput">
			<label for="">Введіть перше число</label>
			 <div class="firstinput-text"><input type="text" name="a"></div>
		</div>
		<div class="secondtinput">
			<label for="">Введіть друге число</label>
			 <div class="secondinput-text"><input type="text" name="b"></div>
		</div>
		<input type="submit" value="Відправити">
	</form>
	<?php 
      $a = $_POST["a"];
      $b = $_POST["b"];
      $i = $a;
      for ($i;$i+$b<74;$i++){
      	$summ = $i + $b;
      	$sub = $i - $b;
      	$multi = $i * $b;
      	$division = $i / $b;

       echo "<div><p> Сумма чисел:".$summ."</p>";
       echo "<p> Різниця чисел: ".$sub."</p>";
       echo "<p> Добуток чисел: ".$multi."</p>";
       echo "<p> Ділення чисел: ".$division."</php></div>";
      }
	 ?>
</body>
</html>