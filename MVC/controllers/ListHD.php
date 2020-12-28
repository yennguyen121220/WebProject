<?php
    class ListHD extends Controller{
        public $HoaDonModel;
        function __construct(){
            $this->HoaDonModel=$this->model("HoaDonModel");
            // $this->view("masterLayout2", [
            //     "Page"=>"listhd",
            //     "listHoaDon"=>$this->HoaDonModel->getAllList_HoaDon()
            // ]);
        }

        function danhsach(){
            $this->view("masterLayout2", [
                "Page"=>"listhd",
                "listHoaDon"=>$this->HoaDonModel->getAllList_HoaDon()
            ]);
        }

        function cthd($id) {
            $this->view("masterLayout2", [
                "Page"=>"listhd",
                "listHoaDon"=>$this->HoaDonModel->getAllList_HoaDon(),
                "chitiet"=>$this->HoaDonModel->getCTHD($id)
            ]);
        }
    }
?>