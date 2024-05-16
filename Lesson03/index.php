<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php 
            include("views/header.php")
        ?>
    </header>
    <nav>
        <?php 
            include("views/navBar.php")
        ?>
    </nav>
    <section id="sideBar">
        <?php 
            include("views/asideBar.php")
        ?>
    </section>
    <section id="main">
        <div class="container my-3">
            <div class="row">
                <div class="col-md-2">
                    <!-- navLeft -->
                    <?php 
                        include("views/navLeft.php")
                    ?>
                    <!-- ./navLeft -->
                </div>
                <div class="col-md-10">
                    <!-- content  -->
                    <?php 
                        include("views/content.php")
                    ?>
                    <!-- ./content  -->
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php 
            include("views/footer.php")
        ?>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>