<?php
    class ChiTietSP extends Controller{
        function ChiTiet($masp){
            
            $sp=$this->model("SanPhamModel");
            $this->view("masterlayout2",[
                "Page" =>"chitiet",
                "CT"=>$sp->ChiTietSP($masp)
            ]);
            
        }
        
    }
?>