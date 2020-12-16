<?php
class DangNhap extends Controller
{
    function __construct(){
        $this->TaiKhoanModel=$this->model("TaiKhoanModel");
        $this->view("masterLayout2",[
            "Page" =>"dangnhap"
        ]);
    }

    function XuLyDangNhap(){
        //1. get data khach hang nhap

        if(isset($_POST["login"])){
            $username=$_POST["username"];
            $password=$_POST["password"];

            $_SESSION['test']=$_POST["username"];

            $kq=$this->TaiKhoanModel->Login($username, $password);

            while($res=mysqli_fetch_array($kq))
            {
                $_SESSION["username"]=$res["tendangnhap"];
                $_SESSION["role"]=$res["role"];
            }
            
            
        }
        
        if(isset($_SESSION["role"]))
        {
            echo '<script type="text/javascript">
           window.location = "http://localhost/DoAn/Home"
            </script>';
        }
        else{
            echo '<script type="text/javascript">
           window.location = "http://localhost/DoAn/DangNhap"
            </script>';
        }
    }
} 
?>