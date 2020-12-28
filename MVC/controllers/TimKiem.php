<?php
class TimKiem extends Controller{
    // function SayHi(){
    //     // $sp =$this->model("TuiModel");
    //     // echo $sp->GetTui();
    //     echo "Yenzt";
    // }
    public function __construct(){
        if(isset($_POST["search_name"])==""){
            $this->view("masterlayout",[
                "Page" =>"search"
            ]);
        }
        else{
            $sp=$this->model("SanPhamModel");
            $search_name=$_POST["search_name"];
            $_SESSION["timkiem"]=$search_name;
            $this->view("masterlayout",[
                "Page" =>"search",
                "Tim"=>$sp->search($search_name)
            ]);
        }
        
    }
    
} 
?>