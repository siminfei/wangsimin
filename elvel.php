<?php 
	$str = 'student. a am I';
	function ReverseSentence($str)
	{
		$arr = explode(" ",$str);
		$array = array_reverse($arr);
		$strrev = implode(' ',$array);
		return $strrev;
	}
	var_dump(ReverseSentence($str)) ;
?>