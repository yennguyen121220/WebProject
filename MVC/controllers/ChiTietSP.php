<?php
    class ChiTietSP extends Controller{
        function ChiTiet($masp){

            $sp=$this->model("SanPhamModel");
            $_SESSION["idsp"] = $masp;
            // echo $_SESSION["masp"];
            $this->view("masterlayout2",[
                "Page" =>"chitiet",
                "CT"=>$sp->ChiTietSP($masp)
            ]);
            
            
        }
        
    }
?>