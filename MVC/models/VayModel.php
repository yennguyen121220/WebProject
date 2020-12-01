<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class VayModel extends DB{
    public function GetVay(){
        $qr="SELECT * FROM sanpham WHERE loai='7'";
        return mysqli_query($this->con,$qr);
    }
    public function VayGT(){
        $qr="SELECT * FROM sanpham WHERE loai='7' AND masp BETWEEN 150 and 151";
        return mysqli_query($this->con,$qr);
    }
}
?>