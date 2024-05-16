<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm include() trong php</title>
</head>
<body>
    <h1>Hàm include() trong php</h1>
    <?php 
        include("views/wrong.php"); 

        echo "<h2> Welcome to, include in PHP </h2>";

        include("views/ok.php");
    ?>
</body>
</html>