<?php
class Yem extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"yem",
            "Yem" =>$sp->GetYem(),
            "YemGT" =>$sp->YemGT()
        ]);
    }
} 
?>