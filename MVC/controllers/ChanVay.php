
<?php
class ChanVay extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"chanvay",
            "ChanVay" =>$sp->GetChanVay(),
            "ChanVayGT" =>$sp->ChanVayGT()
        ]);
    }
} 
?>