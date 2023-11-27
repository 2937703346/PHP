<?php
    class Goods
    {
        public $ids = array(1,2,3,4,5,6,7,8,9,10);
        function checkid($id){
            if(in_array($id,$this->ids)){
                echo "货物存在！";
            }
            else{
                echo "货物不存在！";
            }
        }
    }
    $g = new Goods();
    $g->checkid(rand(1,10));

?>