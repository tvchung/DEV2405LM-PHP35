<h1>Kết nối máy chủ và lựa chọn csdl</h1>
<?php 
    // Kết nối tới csdl
    // Sử dụng hàm mysqli kết nối server và lựa chọn csdl
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli("localhost:3308","root","","Day10Db");
    if($conn->connect_errno){
        die("Kết nối không thành công". $conn->connect_error);
    }

    $conn->query("SET NAMES 'utf8' ");

    echo "<h2>Kết nối thành công </h2>";