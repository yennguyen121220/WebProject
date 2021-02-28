<?php
    if (isset($_SESSION["itemSolds"]))
        unset($_SESSION['itemSolds']);
    if (isset($_SESSION["soluong"]))
        unset($_SESSION['soluong']);
    unset($_SESSION["items"]);
    unset($_SESSION["username"]);
    unset($_SESSION["quyen"]);
    header("Location: ./DangNhap");
?>