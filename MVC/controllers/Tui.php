<!-- <?php
    class News{
        function SayHi(){
            echo "News - SayHi";
        }
        function ABC($ho,$ten){
            echo $ho.' - '.$ten;
        }
        function XuLy($ten){//can phai co params
            echo $ten ;
        }
    }
?> -->
<?php
class Tui extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function __construct(){
        $sp=$this->model("SanPhamModel");
        $this->view("masterlayout",[
            "Page" =>"tui",
            "Tui" =>$sp->GetTui(),
            "TuiGT" =>$sp->TuiGT()
        ]);
    }
} 
?>