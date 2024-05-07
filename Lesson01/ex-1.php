<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu về PHP</title>
</head>
<body>
    <?php
        // mã nguồn php 
        echo "<h1> Giới thiệu về PHP </h1>";
        echo "<h2> Biến , Hằng , Kiểu dữ liệu, ... </h2>";

        // Khai báo biến
        $name = "Trịnh Văn Chung";
        $age = 45;

        print_r($name);
        print_r("<br/>");
        print_r($age);

        // Hằng
        define("PI",3.1415132);
        echo "<p> Hằng PI:". PI;


        $a = "Hello";
        $b = "$a world"; //tương đương 	$b="Hello world"
        $c = '$a world'; //$c='$a world' (không thay đổi)

        print_r("<p>".$a);
        print_r("<p>".$b);
        print_r("<p>".$c);

        echo "<hr/>";
        $st="P";
        $st[1]="H";
        $st[2]="P";
        echo $st;
    ?>
</body>
</html>