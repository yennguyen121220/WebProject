<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class ChanVayModel extends DB{
    public function GetChanVay(){
        $qr="SELECT * FROM sanpham WHERE loai='6'";
        return mysqli_query($this->con,$qr);
    }
    public function ChanVayGT(){
        $qr="SELECT * FROM sanpham WHERE loai='6' AND masp BETWEEN 125 and 126";
        return mysqli_query($this->con,$qr);
    }
}
?>