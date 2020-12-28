<?php
class Home extends Controller{
    // function SayHi($masp){
    //     // $sp =$this->model("TuiModel");
    //     // echo $sp->GetTui();
    //     echo $masp;
    //     echo "Yenzt";
    // }
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"home",
            "GioiThieu"=>$sp->GioiThieu()
        ]);
        if(isset($_SESSION["masp"])){
            unset($_SESSION["masp"]);

        }
    }
} 
?>