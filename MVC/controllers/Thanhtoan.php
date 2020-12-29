<?php
    class Thanhtoan extends Controller {
        public $ThanhtoanModel;
        function __construct() {
            $this->ThanhtoanModel=$this->model("GioHangModel");
            $this->view("masterLayout", [
                "Page"=>"thanhtoan"
            ]);
        }
    }
?>