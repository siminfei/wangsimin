<?php 
	function Add($num1, $num2){
		$arr = [$num1,$num2];
		$sum = array_sum($arr);
		return $sum;
	}
	$num1 = 10;
	$num2 = 50;
	echo Add($num1,$num2);
?>