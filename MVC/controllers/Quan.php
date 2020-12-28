
<?php
class Quan extends Controller{
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"quan",
            "Quan" =>$sp->GetQuan(),
            "QuanGT" =>$sp->QuanGT()
        ]);
    }
} 
?>