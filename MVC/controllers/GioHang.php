<?php
class GioHang extends Controller{

    // public function __construct(){
    //     $items=$this->model('GioHangModel');
    //      $this->view("masterlayout2",[
    //         "Page" =>"giohang",
    //         'items'=>$items
    //     ]);
    // }

    public function __construct(){
        if(isset($_SESSION["username"])){
            $this->view("masterlayout2",[
                "Page" =>"giohang"
            ]);
        }
        else{
            header("Location: http://localhost/DoAn/DangNhap");
        }
    }

    // protected $productModel;
    // public function __construct(){
    //     $this->model("GioHangModel");
    //     $this->productModel=new GioHangModel;
    //     // $giohang =$_SESSION['cartname'];
    // }
    // public function index(){
    //     echo __METHOD__;
    //     // $this->view("masterlayout2",[
    //     //     "Page" =>"giohang",
    //     //     // "Tui" =>$sp->GetTui()
    //     // ]);
    // }
    // public function store(){
    //     // $masp=$_GET["masp"] ?? null;
    //     // $product =$this->GioHangModel->TimSP($masp);
    //     // $row=mysqli_fetch_array($product)
    //     // $_SESSION["giohang"][$masp]=$row;
    //     // // echo $row["masp"];
    //     //     echo '<pre>';
    //     //     print_r($_SESSION["giohang"]);
    //     //     echo '</pre>';

    //     $productId=$_GET['masp']??null;
    //     $product =$this->productModel->findById($productId);

    //     if(empty($_SESSION['cart']) || !array_key_exists($productId,$_SESSION['cart'])){
    //         // $product['qty']=1;
    //         $_SESSION['cart'][$productId]=$product;
    //     }
    //     else{
    //         // $product['qty']=$_SESSION['cart'][$productId]['qty']+1;
    //         $_SESSION['cart'][$productId]=$product;
    //     }
    //     echo '<pre>';
    //     print_r($_SESSION['cart']);
    // }
} 
?>