<?php
class Ao extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function Ao(){
        $sp=$this->model("AoModel");
        $this->view("masterlayout",[
            "Page" =>"ao",
            "Ao" =>$sp->GetAo(),
            "AoGT"=>$sp->AoGT()
        ]);
    }
} 
?>