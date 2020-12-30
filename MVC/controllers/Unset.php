<?php
    unset($_SESSION["username"]);
    unset($_SESSION["quyen"]);
    unset($_SESSION["items"]);
    header("Location: ./DangNhap");
?>