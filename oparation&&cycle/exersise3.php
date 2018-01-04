<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<link rel="stylesheet" href="../bootstrap/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>
<body>
<form action="" method="post" class="container">
	<label for="" class="forNumber">Введіть будь ласка додатнє число</label>
    <div class="number"><input type="text" name="number" class="form-control"></div>
    <div class="buttonnInput"><input type="submit" value="Відправити" class="btn btn-primary"></div>
</form>
	<?php 	
    if(!empty($_POST["number"])){
        $number =  $_POST["number"];
     $numm = (int) $number;
     $result = 0;
     for($i=0;$i<$numm;$i++){
        $result = $result + $i;
     
     }
       echo $result;
   }
     ?>
    
     
</body>
</html>