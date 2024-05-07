<?php
    // Lấy dữ liệu trên form: $_GET
    $taiKhoan = $_GET["txtTaiKhoan"];
    $matKhau = $_GET["txtMatKhau"];

    echo "<h1> Welcome to, $taiKhoan; mật khẩu của bạn: $matKhau";
?>

<?php
    // Lấy dữ liệu trên form: $_REQUEST
    $taiKhoan = $_REQUEST["txtTaiKhoan"];
    $matKhau = $_REQUEST["txtMatKhau"];

    echo "<hr/> _REQUEST: Welcome to, $taiKhoan; mật khẩu của bạn: $matKhau";
?>
