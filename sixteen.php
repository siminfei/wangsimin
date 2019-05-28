<?php 
	$num = 7;
	$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
	function Six($num,$array){
		foreach ($array as $key => $value) {
			$arr = in_array($num,$value);
			if ($arr) {
				return false;
			}
			else{
				return true;
			}
		}
	}
	var_dump(Six($num,$array));
?>