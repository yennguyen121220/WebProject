
<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class TuiModel extends DB{
    public function GetTui(){
        $qr="SELECT * FROM sanpham WHERE loai='1'";
        return mysqli_query($this->con,$qr);
    }
    public function TuiGT(){
        $qr="SELECT * FROM sanpham WHERE loai='1' AND masp BETWEEN 1 and 2";
        return mysqli_query($this->con,$qr);
    }
}
?>