<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
        //1. Kết nối máy chủ và chon csdl
        $conn = new mysqli("localhost:3306","root","","qlsinhvien");
        //2. Tạo truy vấn dữ liệu từ bảng khoa
        $sql = "select * from sinhvien where 1=1 ";
        //3. Thực thi câu lệnh truy vấn
        $result = $conn->query($sql);
        //4. Đọc từng dòng trong tập kết quả và hiển thị (phần tbody)
    ?>
    <header class="container">
        <h1 class="text-center my-3">DANH SÁCH KHOA</h1>
    </header>
    <section class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // Kiểm tra xem có dữ liệu
                    if($result->num_rows>0):
                        $num = 0;
                        while($row = $result->fetch_array()):
                            $num++;
                ?>
                            <tr>
                                <td><?php echo $num; ?></td>
                                <td><?php echo $row["MaSV"]; ?></td>
                                <td><?php echo $row["HoSV"]. ' ' . $row["TenSV"]; ?></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-success">Edit</a>  
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                <?php 
                        endwhile;
                    endif;
                    if($result->num_rows<=0):
                ?>
                        <tr>
                            <td colspan="4"> Chưa có dữ liệu</td>
                        </tr>
                <?php 
                    endif;
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>