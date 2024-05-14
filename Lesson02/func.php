<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm trong PHP - Hàm người dùng định nghĩa</title>
</head>
<body>
    <h1>Hàm trong PHP - Hàm người dùng định nghĩa</h1>
    <?php 
        // Định nghĩa hàm
        function fnHi($param){
            echo "<h2> Welcome to, ".$param;
        }
        // Gọi thực hiện hàm
        fnHi("Chung Trịnh");
        // Hàm trả về giá trị
        function fnCalc($a, $b){
            $c = $a + $b;
            return $c;
        }
        // gọi thực hiện
        echo "<p> ".fnCalc(10,12);
        echo "<p> ".fnCalc(10,16);
        echo "<p> ".fnCalc(10,22);
        echo "<p> ".fnCalc(10,33);

        function fnCalculator($a, $b=100){
            $c = $a + $b;
            return $c;
        }
        echo "<p> ".fnCalculator(10,33);
        echo "<p> ".fnCalculator(33);
        echo "<hr/>";
        $age =30;
        function fnBirthday(){
            $age=22; // Biến cục bộ
            echo "<p> Chúc mừng $age";
        }
        fnBirthday();
        function fnBirthday1(){
            global $age; // sử dụng biến toàn cục 
            echo "<p> Chúc mừng $age";
        }
        fnBirthday1();
    ?>
</body>
</html>