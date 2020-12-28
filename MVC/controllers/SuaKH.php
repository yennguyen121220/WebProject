<?php
    class SuaKH extends Controller{
        public $TaiKhoanModel;
        function __construct(){
            $this->TaiKhoanModel=$this->model("TaiKhoanModel");

            $tendangnhap=$_SESSION["username"];
            // check password cũ đã nhập đúng hay chưa
            // nếu chưa sẽ ra thông báo sai mk cũ, nếu đúng sẽ update thành công
            if (isset($_POST["UpdatePassword"])) {
                $username=$_POST['username'];
                $password=$_POST['newpassword'];
                $oldPassword=$_POST['oldpassword'];


                $checkOldPassword=$this->TaiKhoanModel->Login($username, $oldPassword)->num_rows;
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
                    "Kq"=>$kq,
                    "GetKH"=>$this->TaiKhoanModel->GetKH($tendangnhap)
                ]);
            }
            // trang hiển thị ban đầu chưa nhấn submit
            else 
            {

                
            
                $this->view("masterLayout2", [
                    "Page"=> "suakh",
                    "GetKH"=>$this->TaiKhoanModel->GetKH($tendangnhap)
                    // "GetKH" =>$->GetKH($tendangnhap)
                ]);
            }
        }

    }
?>