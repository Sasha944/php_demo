<?php 
 for($i=1;$i<=9;$i++){
 	echo "<div>";
 	for($a=1;$a<=9;$a++){
 		$summ =  $i*$a;
 		echo "<span>".$i."</span>"."<span>*</span><span>".$a.
 		"</span><span>=</span><span class='summ'>".$summ." </span><br/>";
 	}
 	echo "</div>";
 }
 ?>
 <style>
 	div{
	display: inline-block;
    padding: 5px;
    border: 1px solid grey;
    font-size: 0;
    margin-left: 10px;
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