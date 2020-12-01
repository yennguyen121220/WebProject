
<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class YemModel extends DB{
    public function GetYem(){
        $qr="SELECT * FROM sanpham WHERE loai='5'";
        return mysqli_query($this->con,$qr);
    }
    public function YemGT(){
        $qr="SELECT * FROM sanpham WHERE loai='5' AND masp BETWEEN 110 and 111";
        return mysqli_query($this->con,$qr);
    }
}
?>