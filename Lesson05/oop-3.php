<?php
    class Point{
        // Thuộc tính
        private $x;
        private $y;
        // Hàm khởi tạo - constructor
        // function __construct()
        // {
        //     $this->x=100;
        //     $this->y=200;
        // }
        // function __construct($x,$y)
        // {
        //     $this->x=$x;
        //     $this->y=$y;
        // }
        function __construct($x=100,$y=200)
        {
            $this->x=$x;
            $this->y=$y;
        }
        // Phương thức
        function display(){
            echo "<h2> ($this->x , $this->y) ";
        }
        
        // hàm hủy
        function __destruct(){
            $this->x=NULL;
            $this->y=NULL;
        }
    }
    //Tạo đối tượng
    $p = new Point(100,300);
    $p->display();

    $p = new Point();
    $p->display();