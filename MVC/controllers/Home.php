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
            "GioiThieu"=>$sp->GioiThieu()
        ]);
    }
} 
?>