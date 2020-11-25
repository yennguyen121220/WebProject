
<?php
class ChanVay extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function ChanVay(){
        $sp=$this->model("ChanVayModel");
        $this->view("masterlayout",[
            "Page" =>"chanvay",
            "ChanVay" =>$sp->GetChanVay(),
            "ChanVayGT" =>$sp->ChanVayGT()
        ]);
    }
} 
?>