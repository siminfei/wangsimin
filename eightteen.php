<?php 
	function NumberOf1($n){
		//decbin 二进制转十进制
		$num = decbin($n);
		
		//substr_count 统计字符串中1的个数
		$str = substr_count($num, '1');
		// var_dump($str);
		return $str;
	}
	$n = 10;
	echo NumberOf1($n);
?>