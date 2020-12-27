<?php
    class SuaKH extends Controller{
        public $TaiKhoanModel;
        function __construct(){
            $this->TaiKhoanModel=$this->model("TaiKhoanModel");
            $this->view("masterLayout2", [
                "Page"=> "suakh"
            ]);
        }

        function XuLySua(){
            // lấy data mk đã update mà admin/kh nhập
            if (isset($_POST["UpdatePassword"])) {
                $username=$_POST['username'];
                $password=$_POST['newpassword'];
            }

            // update mk admin/kh nhập
            $kq=$this->TaiKhoanModel->Update($username, $password);
            
            // hiển thị lên đã update thành công hay chưa
            $this->view("masterLayout2", [
                "Page"=>"suakh",
                "Kq"=>$kq
            ]);
          
        }
    }
?>