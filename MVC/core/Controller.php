<?php
class Controller{
    public function model($model){//goi model ra xu li

        // dang ra se kiem tra truoc khi return phai kiem tra duong
        // dan xem co ton tai khong, nhung trong truong hop nay 
        // vi muon no bao loi khong tim thay file nen k kiem tra
        require_once "./MVC/models/".$model.".php";
        return new $model;
    }
    public function view($view,$data=[]){
        require_once "./MVC/views/".$view.".php";

    }
}
?>