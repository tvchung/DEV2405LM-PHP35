<?php
    // Kế thừa
    // Lớp cơ sở (Lớp cha - Base class)
    class Car{
        // Thuộc tính
        public $mileage; 
        public $color;
        protected $make; 
        //Phương thức
        function accelerate(){
            echo "<h3> Car is accelerating....";
        }

        public function display(){
            echo "<h3> display lớp Car.";
        }
    }

    // Lớp con - Lớp kế thừa - Deriver class
    class LuxuryCar extends Car{
        // Thuộc tính
        public $perks;

        // Ghi đè phương thức
        public function display(){
            echo "<h3> display lớp Luxury.";
        }
    }

    //  Sử dụng
    $lxy = new LuxuryCar();
    $lxy->accelerate(); // Sử dụng phương thức của lớp cha
    $lxy->display();
    $c = new Car();
    $c->display();