<?php
    class Thanhtoan extends Controller {
        public $ThanhtoanModel;
        function __construct() {
            $kh=$this->model("TaiKhoanModel");
            $tendangnhap=$_SESSION["username"];
            $this->ThanhtoanModel=$this->model("GioHangModel");
            $this->view("masterLayout", [
                "Page"=>"thanhtoan",
                "KH"=>$kh->GetKH($tendangnhap)
            ]);
        }
    }
?>