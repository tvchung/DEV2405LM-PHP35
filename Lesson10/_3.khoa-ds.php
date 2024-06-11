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
        $sql = "select * from khoa where 1=1 ";
        //3. Thực thi câu lệnh truy vấn
        $result = $conn->query($sql);
        //4. Đọc từng dòng trong tập kết quả và hiển thị (phần tbody)
    ?>
    <header class="container">
        <h1 class="text-center my-3">DANH SÁCH KHOA</h1>
    </header>
    <section class="container">
        <a href="_3.khoa-add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã khoa</th>
                    <th>Tên khoa</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $num = 0;
                    while($row = $result->fetch_array()):
                        $num++;
                ?>
                <tr>
                    <td><?php echo $num; ?></td>
                    <td><?php echo $row["MaKH"]; ?></td>
                    <td><?php echo $row["TenKH"]; ?></td>
                    <td class="text-center">
                        <a href="_3.khoa-edit.php?makh=<?php echo $row['MaKH'];?>" class="btn btn-success">
                            Edit
                        </a>  
                        <a href="_3.khoa-ds.php?makh=<?php echo $row['MaKH'];?>" class="btn btn-danger" 
                            onclick="return confirm('Bạn có muốn xóa khoa này không?')"
                        >
                            Delete
                        </a>
                    </td>
                </tr>
                <?php 
                    endwhile;
                ?>
            </tbody>
        </table>
        <a href="_3.khoa-add.php" class="btn btn-primary">Thêm mới</a>
    </section>


    <!-- Thực hiện chức năng xóa -->
     <?php
        if(isset($_GET['makh'])){
            $makh = $_GET['makh'];
            //2. Tạo truy vấn xóa
            $sql = "DELETE FROM KHOA WHERE MaKH = '$makh'";
            try {
                $conn->query($sql);
                // header("Location:_3.khoa-ds.php");
                echo "<script> location.href='_3.khoa-ds.php'; </script>";
            } catch (Exception $ex) {
               echo "<h3> Lỗi khi xóa " . $ex->getMessage();
               echo "<script> alert('Lỗi khi xóa dữ liệu khoa'); </script>";
            }
        }
     ?>
</body>
</html>