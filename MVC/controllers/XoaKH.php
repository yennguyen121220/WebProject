<?php
    class XoaKH extends Controller{
        public $TaiKhoanModel;
        function __construct(){
            $this->TaiKhoanModel=$this->model("TaiKhoanModel");
            $this->view("masterLayout2", [
                "Page"=> "xoakh"
            ]);
        }

        function XuLyXoa(){
            // lấy data mk đã update mà admin/kh nhập
            if (isset($_POST["DeleteKH"])) {
                $username=$_POST['usernameKH'];
            }

            // update mk admin/kh nhập
            $kq=$this->TaiKhoanModel->Delete($username);

            // hiển thị lên đã update thành công hay chưa
            $this->view("masterLayout2", [
                "Page"=>"xoakh",
                "Kq"=>$kq
            ]);
        }
    }
?>