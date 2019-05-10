<?php
//定义字符串
$arr = "Have you ever gone shopping and";
//定义函数
function get($arr)
{
    //定义一个空数组
    $data = [];
    //获取字符串长度
    $length = strlen($arr);
    //循环查找
    for ($i = 0; $i < $length; $i++) {	//判断字符是否定义
    	if(isset($data[$arr[$i]])){
    		$data[$arr[$i]]++;//字符位置++
    	}else{
    		$data[$arr[$i]]=1; //字符位置从头开始查
    	}
    	if($data[$arr[$i]] >= 3){
    		return $arr[$i]; //返回字符位置
    	}
    }
    return $data;//返回数据显示的字符
}
//调用函数并输出
echo get($arr);