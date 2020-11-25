
<?php
class Vay extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function Vay(){
        $sp=$this->model("VayModel");
        $this->view("masterlayout",[
            "Page" =>"vay",
            "Vay" =>$sp->GetVay(),
            "VayGT" =>$sp->VayGT()
        ]);
    }
} 
?>