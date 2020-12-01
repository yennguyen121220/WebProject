<?php
class Home extends Controller{
    function SayHi(){
        // $sp =$this->model("TuiModel");
        // echo $sp->GetTui();
        echo "Yenzt";
    }
    function TrangChu(){
        $spg=$this->model("GiayModel");
        $spt=$this->model("TuiModel");
        $spa=$this->model("AoModel");
        $spcv=$this->model("ChanVayModel");
        $spq=$this->model("QuanModel");
        $spv=$this->model("VayModel");
        $spy=$this->model("YemModel");
        $this->view("masterLayout",[
            "Page" =>"home",
            "GiayGT" =>$spg->GiayGT(),
            "TuiGT"=>$spt->TuiGT(),
            "AoGT"=>$spa->AoGT(),
            "ChanVayGT"=>$spcv->ChanVayGT(),
            "QuanGT"=>$spq->QuanGT(),
            "VayGT"=>$spv->VayGT(),
            "YemGT"=>$spy->YemGT()
        ]);
    }
} 
?>