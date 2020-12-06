<?php
    class ThemSP extends Controller{
        // function SayHi(){
        //     $sp =$this->model("TuiModel");
        //     echo $sp->GetTui();
        // }
        public $SanPhamModel;
        function __construct(){

            $this->SanPhamModel=$this->model("SanPhamModel");
            $this->view("masterLayout2",[
                "Page" =>"themsp"
            ]);
        }
        function XuLyThem(){
            //1. get data khach hang nhap
            if(isset($_POST["register"])){
                $loai=$_POST["loaisp"];
                $tensp=$_POST["tensp"];
                $gia=$_POST["gia"];
                $hinhanh=$_POST["hinhanh"];
                $mota=$_POST["mota"];
            }

            //2. insert data bang user
            $kq=$this->SanPhamModel->Insert($loai,$tensp, $gia,$hinhanh,$mota);
           
            //3. hien thi thon bao successed/failed
            $this->view("masterLayout2",[
                "Page" =>"themsp",
                "result" =>$kq
            ]);
            
        }
    } 
?>