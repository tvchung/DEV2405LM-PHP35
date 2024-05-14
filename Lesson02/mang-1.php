<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng Trong PHP</title>
</head>
<body>
    <h1>Mảng Trong PHP</h1>
    <?php 
        $arr = array("Xin","Chào","Bạn");
        echo "<p> $arr[0]";
        echo "<p> $arr[1]";
        echo "<p> $arr[2]";
        echo "<hr/>";
        $arr = array(5=>"Xin","Chào","Bạn");
        echo "<p> $arr[5]";
        echo "<p> $arr[6]";
        echo "<p> $arr[7]";
        echo "<hr/>";
        $arr = array("Xin","Chào","Bạn");
        echo "<p> $arr[0]";
        // echo "<p> " . $arr[];
        // echo "<p> " .$arr[];
        echo "<hr/>";
        $names[0] = "Trịnh";
        $names[1] = "Văn";
        $names[2] = "Chung";
        echo "<h3> Xin chào:$names[0] $names[1] $names[2] </h3>";
        echo "<hr/>";
        $countries = array("us"=>"United State",
                            "uk"=>"United Kingdom",
                            "vn"=>"Viet Nam",
                            "cn"=>"China" ); 
        print_r($countries);
        echo "<hr/>";
        echo "<h2> Mảng nhiều chiều </h2>";

        $products = array(
                            array("100","Iphone",1200),
                            array("101","Samsung",1000),
                            array("102","LG",200),
                            array("103","ABC",1500),
                        );
        echo "<p>". $products[0][0]; // 100
        echo "<p> Danh sách </p>";
        for($row = 0 ; $row < 4; $row++){
            for($col = 0; $col<3; $col++){
                echo $products[$row][$col] . "  ";
            }
            echo "<p>";
        }
        echo "<hr/>";
        echo "<p> Số phần tử: ". count($products);
        echo "<p> ". is_array($products); // true

        $arr = array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
        echo "<p> " . $arr["d"]; // lỗi
        if(array_key_exists("d",$arr)){
            echo "<p> " . $arr["d"];
        }else{
            echo "<p> Khong tồn tại key là 'd'";
        }

        // hàm array_keys
        $arr = array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
        foreach(array_keys($arr) as $key){
            echo "<p> ". $key;
        }
        echo "<hr/>";
        print_r(array_keys($arr));
        
    ?>
</body>
</html>