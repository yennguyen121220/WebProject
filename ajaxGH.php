<?php
    session_start();
    if(isset($_SESSION["username"])){
        
        if (isset($_GET['item'])) 
        {
            if (isset($_SESSION['soluong']))
                $_SESSION['soluong']++;
            else
                $_SESSION['soluong']=1;
            $_SESSION['itemSolds'][$_SESSION['soluong']]=$_GET['item'];
            echo "Add done";
        }
        
        if (isset($_GET["indexSP"]))
        {
            $spIndex=$_GET["indexSP"];
            array_splice($_SESSION['items'], $spIndex, 1);
        }

        if (isset($_GET["indexSL"]))
        {
            $_SESSION['items'][$_GET["indexSL"]]["soluong"]=$_GET["valueSL"];
        }

        if (isset($_GET["totalMoney"]))
        {
            $_SESSION["tongtien"]=$_GET["totalMoney"];
            echo "Payment Done";
        }
    }
    else{
        echo "nouser";
    }
?>