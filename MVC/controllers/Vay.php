
<?php
class Vay extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"vay",
            "Vay" =>$sp->GetVay(),
            "VayGT" =>$sp->VayGT()
        ]);
    }
} 
?>