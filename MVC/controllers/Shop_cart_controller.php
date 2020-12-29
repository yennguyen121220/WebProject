<?php
class Shop_cart_controller extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function __construct(){
        $sp=$this->model("Shop_cart_model");
        $this->view("masterlayout2",[
            "Page" =>"Shop_cart_view",
            "Shop_cart_controller" =>$sp->GetCart()
        ]);
        }
} 
?>