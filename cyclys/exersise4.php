<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div{
	display: inline-block;
    padding: 5px;
    border: 1px solid grey;
    font-size: 0;
		}
		div span{
			display: inline-block;
    font-size: 21px;
    padding: 2px;
    border: 1px solid;
    margin-right: 3px;
    margin-bottom: 3px;
		}
		div span.summ{
			    padding: 0;
    width: 23px;
    height: 27px;
    vertical-align: top;
    padding-top: 2px;
    padding-left: 3px;
		}
	</style>
</head>
<body>
	<div>
		<?php 
         for($i=0;$i<10;$i++){
         	$num = $i * 7;
         	echo "<p>"." <span>".$i." </span><span>*</span>
         	<span>7</span><span>=</span><span class='summ'>".$num." </span></p>";
       }
		 ?>
	</div>
</body>
</html>