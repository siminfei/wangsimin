<?php 
	$array = [2,4,3,6,3,2,5,5];
	function FindNumsAppearOnce($array){
		$arr = array_count_values($array);
		// var_dump($arr);die;
		$name = [];
		foreach ($arr as $k => $v) {
			if($v == 1){
				$name[] = $k;
			}
		}
		return $name;
	}
	print_r(FindNumsAppearOnce($array));
?>