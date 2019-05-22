<?php 
	$str = [1,2,3,4,5,6];
	print_r(math($str));

	function math($array){
		$arr = [];
		$msg = [];
		foreach ($array as $key => $value) {
			if($value %2 == 1){
				$arr[] = $value;
			}elseif($value %2 == 0){
				$msg[] = $value;
			}
		}
		return json_encode(array_merge($arr,$msg));
	}
	echo "scp 文件名 @root:服务器地址 /路径";
?>