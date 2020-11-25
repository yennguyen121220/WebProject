
<?php
class Quan extends Controller{
    function Quan(){
        $sp=$this->model("QuanModel");
        $this->view("masterlayout",[
            "Page" =>"quan",
            "Quan" =>$sp->GetQuan(),
            "QuanGT" =>$sp->QuanGT()
        ]);
    }
} 
?>