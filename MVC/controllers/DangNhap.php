<?php
class DangNhap extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    
    function DangNhap(){
        $spg=$this->model("TaiKhoanModel");
        $this->view("masterLayout2",[
            "Page" =>"dangnhap"
        ]);
    }
} 
?>