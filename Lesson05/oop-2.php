<?php
    // Định nghĩa lớp, 
    class Point{
        // các thuộc tính
        public $x;
        private $y;
        // Behavior - Method
        function getX(){
            return $this->x;
        }
        function getY(){
            return $this->y;
        }
        function setX($px){
            $this->x=$px;
        }
        function setY($py){
            $this->y=$py;
        }
        // method
        function display(){
            echo "<h2> [ $this->x , $this->y ]";
        }
    }

    // tạo đối tượng từ lớp và sử dụng
    $p = new Point();
    $p->display();
    // gán giá trị
    $p->setX(100);
    $p->setY(200);

    // lấy giá trị
    echo "<p> x=" . $p->getX();
    echo "<p> y=" . $p->getY();

    // Gọi thực hiện phương thức của đối tượng
    $p->display();

    // Truy cập đến thuộc tính
    $p->x = 1000;
    echo "<p> x=". $p->x;
    $p->y = 2000; // lỗi: không thể truy cập vào biến private trong lớp từ lớp ngoài
    echo "<p> y=". $p->y; // lỗi