
<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class QuanModel extends DB{
    public function GetQuan(){
        $qr="SELECT * FROM sanpham WHERE loai='4'";
        return mysqli_query($this->con,$qr);
    }
    public function QuanGT(){
        $qr="SELECT * FROM sanpham WHERE loai='4' AND masp BETWEEN 80 and 81";
        return mysqli_query($this->con,$qr);
    }
}
?>