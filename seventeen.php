<?php 
	
	$arr_A=[1,3,6,9];
	$arr_B=[2,4,5,8,20];
	function Combine($arr_A, $arr_B){
		$bind = [];
		$array = [];
		foreach ($arr_A as $key => $v) {
			$bind[] = $v;
		}
		foreach ($arr_B as $key => $v) {
			$bind[] = $v;
		}
		// print_r($bind);
		sort($bind);
		for ($i=0; $i < count($bind) ; $i++) { 
			for ($j=0; $j <= $i ; $j++) { 
				if($bind[$j]<=$bind[$j+1]){
					$array[] = $bind[$i++];
					// break;
				}
				if($bind[$j]<=$bind[$j+1]){
					$array[] = $bind[$i];
					break;
				}
			}
		}
		
		return $bind;
	}
	print_r(Combine($arr_A, $arr_B));
?>