<?php
class GioHang extends Controller{
    // function SayHi($masp){
    //     // $sp =$this->model("TuiModel");
    //     // echo $sp->GetTui();
    //     echo $masp;
    //     echo "Yenzt";
    // }
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout2",[
            "Page" =>"giohang"
        ]);
    }
} 
?>