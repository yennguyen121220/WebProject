<?php
class Yem extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function Yem(){
        $sp=$this->model("YemModel");
        $this->view("masterlayout",[
            "Page" =>"yem",
            "Yem" =>$sp->GetYem(),
            "YemGT" =>$sp->YemGT()
        ]);
    }
} 
?>