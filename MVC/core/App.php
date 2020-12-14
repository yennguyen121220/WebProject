<?php
    class App{
        //http://localhost/live/Home/SayHi/1/2/3
        protected $controller="Home";
        protected $action="__construct";
        protected $params=[];

        function __construct(){
            //Array ([0]=>Home [1]=>SayHi [2]=> 1 [3]=>2 [4]=>3)
            $arr=$this->UrlProcess();
            // print_r($arr);
            //xu li controller
            if (isset($arr[0]))
            {
                if(file_exists("./MVC/controllers/".$arr[0].".php")){
                    $this->controller=$arr[0];
                    unset($arr[0]);
                }
            }
            
            require_once "./MVC/controllers/".$this->controller.".php";
            $this->controller=new $this->controller;
            //xu li action
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1]))
                {
                    //no hieu duoc controller vi ow tren minh da goi controller de xu li r
                    $this->action=$arr[1];
                }
                
                unset($arr[1]);
            }
            
            //xu ly params
            $this->params=$arr?array_values($arr):[];
            
            call_user_func_array([$this->controller,$this->action],$this->params);
        }
        function UrlProcess(){
            if(isset($_GET['url']))
            {
                //loai bo khoang cach va cac ki tu dac biet + tach chuoi bang dau '/'
                return explode("/",filter_var(trim($_GET['url'],'/')));
            }
        }
    }
?>