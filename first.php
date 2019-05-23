<?php 
	//定义函数Sum_Solution 并传递一个实参
	function Sum_Solution($n){
		//生成从1到$n个数值
		$num = range(1,$n);
		//利用数组求和函数计算出值
		$str = array_sum($num);
		//输出值
		echo $str;
	}
	//形参值得定义
	$str = 5;
	//调用Sum_Solution函数
	Sum_Solution($str);
?>