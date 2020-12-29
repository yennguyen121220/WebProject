<?php
class Home extends Controller{
    // function SayHi($masp){
    //     // $sp =$this->model("TuiModel");
    //     // echo $sp->GetTui();
    //     echo $masp;
    //     echo "Yenzt";
    // }
    function __construct(){
        
        if(isset($_SESSION["timkiem"])){
            //unset($_SESSION["idsp"]);
            unset($_SESSION["timkiem"]);
        }
        
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"home",
            "GioiThieu"=>$sp->GioiThieu()
        ]);
    }
} 
?>