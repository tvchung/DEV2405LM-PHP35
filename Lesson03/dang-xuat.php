<?php
    session_start();

    session_destroy(); 
    header("Location:session-result.php");
?>
