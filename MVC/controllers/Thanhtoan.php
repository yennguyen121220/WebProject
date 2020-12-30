<?php
    class Thanhtoan extends Controller {
        public $ThanhtoanModel;


        function __construct() {

            $this->ThanhtoanModel=$this->model("GioHangModel");
            
            $kh=$this->model("TaiKhoanModel");
            $tendangnhap=$_SESSION["username"];
            $this->view("masterLayout", [
                "Page"=>"thanhtoan",
                "KH"=>$kh->GetKH($tendangnhap)
            ]);
        }
        function DatHang(){
            if(isset($_POST["dathang"])){
                $makh=$_SESSION["username"];
                $hoten=$_POST["hoten"];
                $diachi=$_POST["diachi"];
                $sdt=$_POST["sdt"];
                $tien=$_SESSION["tongtien"];


                //Them hoa don vao database
                $kq=$this->ThanhtoanModel->ThemHoaDon($makh, $tien, $diachi, $sdt, $hoten);

                //lay mahd vua nhap
                $mahd=$this->ThanhtoanModel->GetMaxMahd();
                
                $arr=$_SESSION['items'];
                for ($i=0;$i<count($arr);$i++)
                {
                    $thanhtien=$arr[$i]["gia"];
                    $masp=$arr[$i]["masp"];
                    $soluong = $arr[$i]["soluong"];


                    //them cthd vao database
                    $kq=$this->ThanhtoanModel->ThemCTHD($mahd,$masp, $soluong, $thanhtien);

                }
                unset($_SESSION["items"]);
                header("Location: http://localhost/DoAn/Home");
            }

            
        }
    }
?>