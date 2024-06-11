<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #ccc;">
<?php
    // Xác định khi nào người đùng nhấn submit (Ghi lại - btnSave)
    // $error = ""; // Biến quản lý lỗi nếu có
    if(isset($_POST["btnSave"])){
        //1. Kết nối
        $conn = new mysqli("localhost:3306","root","","qlsinhvien");
        //2. Lấy dữ liệu trên form
        $MaKH = $_POST["MaKH"];
        $TenKH = $_POST["TenKH"];
        //3. Tạo truy vấn thêm
        $sql = "INSERT INTO KHOA(MaKH,TenKH) VALUES('$MaKH','$TenKH')";
        // die($sql);
        //4. Thực thi truy vấn thêm
        /*
        if($conn->query($sql)){
            header("Location:_3.khoa-đs.php");
        }else{
            $error="Lỗi thêm mới; ".$conn->connect_error;
        }
        */
        try {
            $conn->query($sql);
            header("Location:_3.khoa-ds.php");
        } catch (Exception $ex) {
            $error="Lỗi thêm mới; ".$ex->getMessage();
        }
    }

?>
    <header class="container">
        <h1 class="text-center my-3">THÊM MỚI KHOA</h1>
    </header>
    <section class="container bg-white">
        <form action="" method="post" class="p-5">
            <div class="input-group mb-3">
                <span class="input-group-text" id="MaKH">Mã khoa</span>
                <input type="text" class="form-control" placeholder="MaKH" 
                        name="MaKH" value="<?php echo isset($MaKH)?$MaKH:""; ?>"
                        aria-label="MaKH" aria-describedby="MaKH">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="TenKH">Tên khoa</span>
                <input type="text" class="form-control" placeholder="TenKH" 
                        name="TenKH" value="<?php echo isset($TenKH)?$TenKH:""; ?>"
                        aria-label="TenKH" aria-describedby="TenKH">
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-primary px-2 m-2" name="btnSave">Ghi lại</button>
                <a href="_3.khoa-ds.php" class="btn btn-secondary px-2 m-2">Quay lại</a>
            </div>
            <!-- xủ lý thông báo lỗi nếu có  -->
            <?php 
                if(isset(($error))):
            ?>
                <span class="alert alert-danger">
                    <?php  echo  $error; ?>
                </span>
            <?php
                endif;
            ?>
        </form>
    </section>
</body>
</html>