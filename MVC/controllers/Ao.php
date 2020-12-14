<?php
class Ao extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"ao",
            "Ao" =>$sp->GetAo(),
            "AoGT"=>$sp->AoGT()
        ]);
    }
} 
?>