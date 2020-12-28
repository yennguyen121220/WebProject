<?php
class Ajax extends Controller{
    
    public $TaiKhoanModel;
    public $spModel;
    public function __construct(){
        $this->TaiKhoanModel=$this->model("TaiKhoanModel");
        $this->spModel=$this->model("SanPhamModel");
    }

    public function checkUsername(){
        $username=$_POST["username"];
        echo $this->TaiKhoanModel->checkUsername($username);
    } 

}

?>