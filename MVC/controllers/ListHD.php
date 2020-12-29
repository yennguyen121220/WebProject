<?php
    class ListHD extends Controller{
        public $HoaDonModel;
        function __construct(){
            $this->HoaDonModel=$this->model("HoaDonModel");
            // $this->view("masterLayout2", [
            //     "Page"=>"listhd",
            //     "listHoaDon"=>$this->HoaDonModel->getAllList_HoaDon()
            // ]);
            // echo "yenzt nhat qua dat";
        }


        //admin
        function danhsach(){
            if(isset($_SESSION["quyen"])&&$_SESSION["quyen"]==1){
                $this->view("masterLayout2", [
                    "Page"=>"listhd",
                    "listHoaDon"=>$this->HoaDonModel->getAllList_HoaDon()
                ]);
            }
            else{
                header("Location: http://localhost/DoAn/Home");
            }
        }


        function cthd($id) {
            if(isset($_SESSION["quyen"])&&$_SESSION["quyen"]==1){
                $this->view("masterLayout2", [
                    "Page"=>"listhd",
                    "listHoaDon"=>$this->HoaDonModel->getAllList_HoaDon(),
                    "chitiet"=>$this->HoaDonModel->getCTHD($id)
                ]);
            }
            else{
                header("Location: http://localhost/DoAn/Home");
            }
        }

        //khachhang
        function hoadonkh(){
            $this->view("masterLayout2", [
                "Page"=>"listhdkh",
                "listHoaDon"=>$this->HoaDonModel->hoadonkh()
            ]);
        }

        function cthdkh($id) {
            $this->view("masterLayout2", [
                "Page"=>"listhdkh",
                "listHoaDon"=>$this->HoaDonModel->hoadonkh(),
                "chitiet"=>$this->HoaDonModel->getCTHD($id)
            ]);
        }
    }
?>