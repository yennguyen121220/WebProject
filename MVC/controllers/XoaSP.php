<?php
    class XoaSP extends Controller{
        public $SanPhamModel;
        function __construct(){
            $this->SanPhamModel=$this->model("SanPhamModel");
            $this->view("masterLayout2", [
                "Page"=> "xoasp"
            ]);
        }

        function XuLyXoa(){
            // lấy data sp đã update mà admin nhập
            if (isset($_POST["DeleteSP"])) {
                $masp=$_POST["masp"];
            }

            // delete sp admin nhập
            $kq=$this->SanPhamModel->Delete($masp);

            // hiển thị lên đã delete thành công hay chưa
            $this->view("masterLayout2", [
                "Page"=>"xoasp",
                "Kq"=>$kq
            ]);
        }
    }
?>