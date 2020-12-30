<?php
    class GioHangModel extends DB{


        public function findById($productId){
            $qr="SELECT * FROM sanpham WHERE masp='$productId'";
            return mysqli_query($this->con,$qr);
        }
        public function ThemHoaDon($makh, $tien, $diachi, $sdt, $hoten){
            $qr="INSERT INTO hoadon (makh, tien, diachi, sdt, hoten) 
            VALUES ('$makh', $tien, '$diachi', '$sdt', '$hoten');";
            $this->con->query($qr);
            // $result = false;
            // if(mysqli_query($this->con,$qr))
            // {
            //     $result=true;
            // }
            // return json_encode($result);
        }
        public function GetMaxMahd(){
            $qr="SELECT MAX(mahd) FROM hoadon";
            $kq=$this->con->query($qr);
            return $kq->fetch_row()[0];
        }


        public function ThemCTHD($mahd, $masp, $soluong, $thanhtien){
            
            $qr="INSERT INTO cthd (mahd, masp, soluong, thanhtien) 
            VALUES ('$mahd', $masp, '$soluong', '$thanhtien');";
            $this->con->query($qr);
        }
    }
?>