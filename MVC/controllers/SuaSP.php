<?php
    class SuaSp extends Controller{
        public $SanPhamModel;
        function __construct(){
            $this->SanPhamModel=$this->model("SanPhamModel");
            $this->view("masterLayout2", [
                "Page"=> "suasp"
            ]);
        }

        function XuLySua(){
            // lấy data sp đã update mà admin nhập
            if (isset($_POST["UpdateSP"])) {
                $masp=$_POST["masp"];
                $loai=$_POST["loai"];
                $tensp=$_POST["tensp"];
                $gia=$_POST["gia"];
                $hinhanh=$_POST["tenhinhanh"];
                $arrLink=explode("/",$hinhanh);
                $hinhanh=$arrLink[count($arrLink)-1];
                $mota=$_POST["mota"];
            }

            // update sp admin nhập
            $kq=$this->SanPhamModel->Update($masp, $loai, $tensp, $gia, $hinhanh, $mota);

            // hiển thị lên đã update thành công hay chưa
            $this->view("masterLayout2", [
                "Page"=>"suasp",
                "Kq"=>$kq
            ]);
        }
    }
?>