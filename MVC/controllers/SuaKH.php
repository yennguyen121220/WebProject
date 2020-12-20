<?php
    class SuaKH extends Controller{
        public $TaiKhoanModel;
        function __construct(){
            $this->TaiKhoanModel=$this->model("TaiKhoanModel");
            
            // check password cũ đã nhập đúng hay chưa
            // nếu chưa sẽ ra thông báo sai mk cũ, nếu đúng sẽ update thành công
            if (isset($_POST["UpdatePassword"])) {
                $username=$_POST['username'];
                $password=$_POST['newpassword'];
                $oldPassword=$_POST['oldpassword'];

                $checkOldPassword=$this->TaiKhoanModel->Login($username, $oldPassword);
                if ($checkOldPassword==1)
                {
                    // update mk admin/kh nhập
                    $this->TaiKhoanModel->Update($username, $password);
                    $kq="Sửa thành công";
                }
                else
                {
                    $kq="Nhập mật khẩu cũ không đúng";
                }
                
                // hiển thị lên đã update thành công hay chưa
                $this->view("masterLayout2", [
                    "Page"=>"suakh",
                    "Kq"=>$kq
                ]);
            }
            // trang hiển thị ban đầu chưa nhấn submit
            else 
            {
                $this->view("masterLayout2", [
                    "Page"=> "suakh"
                ]);
            }
        }

        // function XuLySua(){
        //     // lấy data mk đã update mà admin/kh nhập
        //     if (isset($_POST["UpdatePassword"])) {
        //         $username=$_POST['username'];
        //         $password=$_POST['newpassword'];
        //     }

        //     // update mk admin/kh nhập
        //     $kq=$this->TaiKhoanModel->Update($username, $password);
            
        //     // hiển thị lên đã update thành công hay chưa
        //     $this->view("masterLayout2", [
        //         "Page"=>"suakh",
        //         "Kq"=>$kq
        //     ]);
          
        // }
    }
?>