<?php
    // Định nghĩa lớp, 
    class Point{
        // các thuộc tính
        public $x;
        public $y;
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
    // gán giá trị
    $p->setX(100);
    $p->setY(200);

    // lấy giá trị
    echo "<p> x=" . $p->getX();
    echo "<p> y=" . $p->getY();

    // Gọi thực hiện phương thức của đối tượng
    $p->display();