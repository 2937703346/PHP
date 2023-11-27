<?php
    class sport
    {
        public $name;
        public $age;
        public function __construct($n,$a)
        {
            $this->name=$n;
            $this->age=$a;
        }
        function showme()
        {
            echo "这个不会被显示";
        }
    }
    class se_class extends sport
    {
        public $w;
        public function __construct($n, $a,$w)
        {
            $this->name=$n;
            $this->age=$a;
            $this->w=$w;
        }

        function showme()
        {
            echo "这条信息会被显示出来";
        }
    }


?>