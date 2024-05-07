<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý dữ liệu trên form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section id="zone1" class="container border mt-3 p-3">
        <h1>Xử lý dữ liệu trên form</h1>
        <form action="ex-4-process.php" method="get">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tài khoản</span>
                <input type="text" class="form-control" placeholder="Nhập tài khoản..."
                    name="txtTaiKhoan"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Mật khẩu</span>
                <input type="password" class="form-control" placeholder="Nhập mật khẩu...."
                    name="txtMatKhau"
                    aria-label="password" aria-describedby="basic-addon2">
            </div>
            <button class="btn btn-primary">Đăng nhập</button>
        </form>
    </section>
</body>
</html>