<?php
    header('Content-Type: text/html; charset=utf-8');

    $connect = mysqli_connect("localhost", "root", "2014133054", "member");

    if(mysqli_connect_errno()){
        echo "Connection Error...오류".mysqli_connect_errno();
    }
?>
