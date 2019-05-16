<?php 
	print_r(calFn(1,13));
	function calFn($n,$m){
		$data = [];
		for($i=$n;$i<=$m;$i++){
			$data[] = substr_count($i,1);
		}
		echo "出现".array_sum($data)."次";
	}
?>