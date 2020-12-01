<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class AoModel extends DB{
    public function GetAo(){
        $qr="SELECT * FROM sanpham WHERE loai='3'";
        return mysqli_query($this->con,$qr);
    }
    public function AoGT(){
        $qr="SELECT * FROM sanpham WHERE loai='3' AND masp BETWEEN 30 and 31";
        return mysqli_query($this->con,$qr);
    }
}
?>