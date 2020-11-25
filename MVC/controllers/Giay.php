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
class Giay extends Controller{
    // function SayHi(){
    //     $sp =$this->model("TuiModel");
    //     echo $sp->GetTui();
    // }
    function Giay(){
        $sp=$this->model("GiayModel");
        $this->view("masterlayout",[
            "Page" =>"giay",
            "Giay" =>$sp->GetGiay(),
            "GiayGT"=>$sp->GiayGT()
        ]);
    }
} 
?>