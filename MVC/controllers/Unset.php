<?php
    unset($_SESSION["username"]);
    unset($_SESSION["quyen"]);
    header("Location: ./DangNhap");
?>