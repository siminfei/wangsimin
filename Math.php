<?php 
	header("Content-type:text/html;charset=utf8");


	//斐波那契数列
	function cls($n){
		if($n == 1){
			return 1;
		}else if($n ==2){
			return 2;
		}else{
			//如 n=10时 返回的(10-1)+(10-2)
			return cls($n-1)+cls($n-2);
		}
	}
	echo cls(7);
?>