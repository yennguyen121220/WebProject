<?php
    class GioHangModel extends DB{


        public function findById($productId){
            $qr="SELECT * FROM sanpham WHERE masp='$productId'";
            return mysqli_query($this->con,$qr);
        }
        public function ThemHoaDon($makh, $tien, $diachi, $sdt, $hoten){
            $qr="INSERT INTO hoadon (makh, tien, diachi, sdt, hoten) 
            VALUES ('$makh', $tien, '$diachi', '$sdt', '$hoten');";
            $result = false;
            if(mysqli_query($this->con,$qr))
            {
                $result=true;
            }
            return json_encode($result);
        }

        public function ThemCTHD($masp, $soluong, $thanhtien){
            $result = mysql_query("SELECT MAX(mahd) FROM hoadon");
            $row = mysql_fetch_row($result);
            $mahd = $row[0];
            $qr="INSERT INTO cthd (mahd, masp, soluong, thanhtien) 
            VALUES ('$mahd', $masp, '$soluong', '$thanhtien');";
            $kq = false;
            if(mysqli_query($this->con,$qr))
            {
                $kq=true;
            }
            return json_encode($kq);
        }
    }
?>