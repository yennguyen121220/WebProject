<?php
class Ajax extends Controller{
    
    public $TaiKhoanModel;

    public function __construct(){
        $this->TaiKhoanModel=$this->model("TaiKhoanModel");
    }

    public function checkUsername(){
        $username=$_POST["username"];
        echo $this->TaiKhoanModel->checkUsername($username);
    } 
}
?>