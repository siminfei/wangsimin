<?php 
	//以下是非递归调用	
	//常量定义
	$num = 3;
	//数组定义
	$arr = [1,2,3,4,5,6,7,8,9];
	function Find($num,$arr){
		for ($i=0; $i < count($arr) ; $i++) { 
			if($num == $arr[$i]){
				// var_dump($num);die;
				$num = $num-1;
				echo '这是递归出在数组中的位置是: '.$num;
				break;
			}
		}
	}
	Find($num,$arr);

	//以下是递归调用
	//常量定义
	$num = 3;
	//数组定义
	$arr = [1,2,3,4,5,6,7,8,9];
	function Get($num,$arr){
		$i=0;
		if($num != $arr[$i]){
			// echo '1';die;
			$i++;
			if($i<=$arr){
				Get($num,$arr);
			}
		}else{
			$num = $num-1;
			echo '这是递归出在数组中的位置是: '.$num;
		}
	}
	Get($num,$arr);
?>