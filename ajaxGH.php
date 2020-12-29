<?php
    session_start();
    $numberItems=$_GET['countCart'];
    $_SESSION['itemSolds'][$numberItems]=$_GET['item'];
    $_SESSION['soluong']+=1;
?>