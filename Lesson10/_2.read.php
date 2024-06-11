
<h1>ĐỌC DỮ LIỆU TỪ BẢNG</h1>
<?php 
    // 1 .Kết nối
    $conn = new mysqli("localhost:3308","root","","Day10Db");
    // 2. Tạo truy vấn từ bảng
    $sql = "Select * from tbl_User where 1=1 ";
    // 3. Thực thi câu lệnh truy vấn => Trả về 1 tập kết quả
    $result = $conn->query($sql);
    print_r($result);

    echo "<h2> Thêm dữ liệu </h2>";
    /*
    $sql_insert = "INSERT INTO tbl_province(pro_name, Status) VALUES(N'Tp Hà nội',1)";
    if($conn->query($sql_insert)){
        echo "<p>Thêm mới thành công";
    }else{
        echo "<p>Lỗi thêm mới:".$conn->connect_error;
    }
    */
    $sql = "Select * from tbl_province where 1=1 ";
    $result = $conn->query($sql);
    print_r($result);

    // Đọc từng dòng trong tập kết quả
    while ($row = $result->fetch_array()){
        echo "<p> " . $row['pro_name'];
    }