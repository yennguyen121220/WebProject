<?php
class Home extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function TrangChu(){
        $spg=$this->model("GiayModel");
        $spt=$this->model("TuiModel");
        $this->view("masterlayout",[
            "Page" =>"home",
            "GiayGT" =>$spg->GiayGT(),
            "TuiGT"=>$spt->TuiGT()
        ]);
    }
} 
?>