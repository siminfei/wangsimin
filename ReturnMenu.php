<?php
header("Content-type:text/html;charset=utf8");
// class Menu
// {
//     public function index()
//     {
//         $db   = new PDO("mysql:host=127.0.0.1;dbname=lifei;charset=utf8", "root", "root");
//         $data = $db->query("select * from menu_name")->fetchAll(PDO::FETCH_ASSOC);
//         $res  = $this->getMenu($data);
//         echo '<pre>';
//         var_dump($res);die;
//     }
//     //递归
//     public function getMenu($data, $level = 0, $parent_id = 0)
//     {
//         $arr = array();
//         foreach ($data as $key => $v) {
//             if ($v['parent_id'] == $parent_id) {
//                 $arr['level']       = $level;
//                 $arr[$key]          = $v;
//                 $arr[$key]['child'] = $this->getMenu($data, $level + 1, $v['menu_id']);
//             }
//         }
//         return $arr;
//     }
// }
// $menu = new Menu();
// $menu->index();

$str = "Have you ever gone shopping and";

function mathone($str){
    $len = strlen($str);
    $arr = [];
    for($i=0;$i<$len;$i++){
        if(isset($arr[$str[$i]])){
            $arr[$str[$i]]++;
        }else{
            $arr[$str[$i]]=1;
        }
        if($arr[$str[$i]] >= 3){
            return $str[$i];
        }
    }
    return $arr;
}
echo  mathone($str);


?>