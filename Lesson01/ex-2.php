<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toán tử trong PHP</title>
</head>
<body>
    <h1>Toán tử trong PHP</h1>
    <hr/>
    <h2>Toán tử số học: *, / , +, - , %</h2>
    <?php
        $a = 2;
        $b = 5;
        $c = $a * $b;
        echo "<p> $a * $b = $c";
        echo "<p>".$a."*".$b."=".$c;

        $c= $a / $b;
        echo "<p> $a / $b = $c";

        $c = $a+$b;
        echo "<p> $a + $b = $c";

        $c = $a-$b;
        echo "<p> $a - $b = $c";

        $c = $b%$a;
        echo "<p> $b % $a = $c";
    ?>
    <hr/>
    <h2>Toán tử tăng giàm: ++; --</h2>
    <?php
        $a = 2;
        $c = $a++;
        echo '<p> $c='.$c;
        echo '<p> $a='.$a; // a=3

        $c = ++$a;
        echo '<p>++$a';
        echo '<p> $c='.$c;
        echo '<p> $a='.$a;
    ?>
    <hr/>
    <h2>Toán tử so sánh: >; >=; <; <=; !=; ==; ===</h2>
    <?php
        // Toán tử so sánh
        $a = 2;
        $b = 5;

        $c = $a > $b; // false
        echo '<p> $c='.$c .' kiểu dữ liệu:'.gettype($c);

        $c = $a < $b; // true
        echo '<p> $c='.$c;

        $x=2.0;

        $c = $a == $x;
        echo '<p> ==  $c='.$c;

        $c = $a === $x;
        echo '<p> ===  $c='.$c;

        echo "<hr/> Toán tử điều kiện:";

        $c = $a > 12 ? '$a > 1': 'Sai';
        echo '<p> $c = '. $c;

        echo "<hr/> <h2> Toán tử gán: </h2>";

        $a=100;
        echo '<p> $a='.$a;

        $a *= 2; // $a = $a * 2; //$a= 200
        echo '<p> $a *=2 =>'.$a;

        

        echo "<hr/> <h2> Toán tử logic:  && ; || ; !</h2>";

        $a=100;
        $b=200;

        $c = ($a >=100) && ($b<100); // 0;
        echo '<p> $c= '.$c;
        $c = ($a >=100) || ($b<300); // 1;
        echo '<p> $c= '.$c;
        $c = ($a >=100) || ($b<100); // 1;
        echo '<p> $c= '.$c;
    ?>
</body>
</html>