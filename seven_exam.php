<?php 
	function Num($num){
		//$num%2的余数是否为0
		while($num % 2 == 0){
			$num = $num / 2;
		}
		//$num%3的余数是否为0
		while($num % 3 == 0){
			$num = $num / 3;
		}
		//$num%5的余数是否为0
		while($num % 5 == 0){
			$num = $num / 5;
		}
		//判断商是否为1
		if($num == 1){
			//是丑数
			return 1;
		}else{
			return 0;
		}
	}
	$num1 = 26;
	$num2 = 12;
	$num3 =  Num($num1);
	$num4 =  Num($num2);
	if($num3 == 1){
		echo $num1.'这个数是丑数';echo '<br>';
	}else{
		echo $num1.'这个数不是丑数';echo '<br>';
	}
	if($num4 == 1){
		echo $num2.'这个数是丑数';
	}else{
		echo $num2.'这个数不是丑数';
	}
	
?>