<?php
//    class TestConst
//    {
//        const BOOKNAME="PHP编程";
//        public $ojbname;
//        function a(){
//
//        }
//    }
//    $a = new TestConst();
//    echo TestConst::BOOKNAME;

//构造函数
//    class ojb
//    {
//        public $age;
//        public $w;
//        public $name;
//        public function __construct($name,$age,$w)
//        {
//            $this->name=$name;
//            $this->age=$age;
//            $this->w=$w;
//
//        }
//    }
//    $o = new ojb("郑瑞",20,70);
//    echo $o->name;

    //析构函数
    class ojb
    {
        public $age;
        public $w;
        public $name;

        public function __destruct()
        {
            echo "解析构造函数";
        }
    }

?>