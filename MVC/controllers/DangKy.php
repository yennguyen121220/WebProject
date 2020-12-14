<?php
    class DangKy extends Controller{
        // function SayHi(){
        //     $sp =$this->model("TuiModel");
        //     echo $sp->GetTui();
        // }
        public $TaiKhoanModel;
        function __construct(){

            $this->TaiKhoanModel=$this->model("TaiKhoanModel");
            $this->view("masterLayout2",[
                "Page" =>"dangky"
            ]);
        }
        function XuLyDangKy(){
            //1. get data khach hang nhap
            if(isset($_POST["register"])){
                $name=$_POST["fullname"];
                $address=$_POST["address"];
                $phoneNum=$_POST["telNumber"];
                $username=$_POST["username"];
                $password=$_POST["password"];
            }

            //2. insert data bang user
            $kq=$this->TaiKhoanModel->Insert($username, $password,$name,$address,$phoneNum);
           
            //3. hien thi thon bao successed/failed
            $this->view("masterLayout2",[
                "Page" =>"dangky",
                "result" =>$kq
            ]);
        }
        
    } 
?>