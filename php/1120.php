<?php
    $data = array(
        array("post_id"=>1,"title"=>"如何学好","replay_num"=>582),
        array('post_id'=>2,"title"=>"PHP数组常用函数汇总","replay_num"=>182),
        array('post_id'=>3,"title"=>"PHP字符串常用函数汇总","replay_num"=>982),
    );
    function sortbykey($a = array(),$key ="",$asc = true){
        $result = array();
        foreach ($a as $k => $v)
        {
            $b[$k] = $v ["replay_num"];
        }
        $asc ? asort ($b):arsort($b);
        foreach ($b as $k1=>$v1){
            $result[$k1]=$a[$k1];
        }
        return $result;
    }
    sortbykey($data,$key="",$asc = true);

?>