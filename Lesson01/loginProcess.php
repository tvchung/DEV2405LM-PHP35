<?php
    // Lấy dữ liệu trên form: $_POST
    $taiKhoan = $_POST["txtTaiKhoan"];
    $matKhau = $_POST["txtMatKhau"];

    echo "<h1> Welcome to, $taiKhoan; mật khẩu của bạn: $matKhau";
?>

<?php
    // Lấy dữ liệu trên form: $_REQUEST
    $taiKhoan = $_REQUEST["txtTaiKhoan"];
    $matKhau = $_REQUEST["txtMatKhau"];

    echo "<hr/> _REQUEST: Welcome to, $taiKhoan; mật khẩu của bạn: $matKhau";
?>
