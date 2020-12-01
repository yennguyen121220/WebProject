<?php
class DangKy extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function DangKy(){
        $spg=$this->model("TaiKhoanModel");
        $this->view("masterLayout2",[
            "Page" =>"dangky"
        ]);
    }
} 
?>