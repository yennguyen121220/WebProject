<?php
class Home extends Controller{
    // function SayHi(){
    //     // $sp =$this->model("TuiModel");
    //     // echo $sp->GetTui();
    //     echo "Yenzt";
    // }
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"home",
            "GiayGT" =>$sp->GiayGT(),
            "TuiGT"=>$sp->TuiGT(),
            "AoGT"=>$sp->AoGT(),
            "ChanVayGT"=>$sp->ChanVayGT(),
            "QuanGT"=>$sp->QuanGT(),
            "VayGT"=>$sp->VayGT(),
            "YemGT"=>$sp->YemGT()
        ]);
    }
} 
?>