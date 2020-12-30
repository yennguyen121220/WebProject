<?php
    session_start();
    if(isset($_SESSION["username"])){
        
        $numberItems=$_GET['countCart'];
        $_SESSION['itemSolds'][$numberItems]=$_GET['item'];
    }
    else{
        // header("Location: ./DangNhap");
        echo "nouser";
    }

    // $_SESSION['soluong']+=1;
?>