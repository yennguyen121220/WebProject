<?php
    unset ($_SESSION["username"]);
    unset ($_SESSION["role"]);
    header('Location: http://localhost/DoAn/DangNhap'); 
    exit();
?>