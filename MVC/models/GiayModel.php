
<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class GiayModel extends DB{
    public function GetGiay(){
        $qr="SELECT * FROM sanpham WHERE loai='2'";
        return mysqli_query($this->con,$qr);
    }
    public function GiayGT(){
        $qr="SELECT * FROM sanpham WHERE loai='2' AND masp BETWEEN 30 and 31";
        return mysqli_query($this->con,$qr);
    }
}
?>