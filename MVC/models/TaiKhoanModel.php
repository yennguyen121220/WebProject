
<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class TaiKhoanModel extends DB{


    //them tai khoan
    public function Insert($username, $password,$name,$address,$phoneNum){
        $qr="INSERT INTO taikhoan VALUES('$username','$name','$password','$phoneNum','$address','0')";
        $result = false;
        if(mysqli_query($this->con,$qr))
        {
            $result=true;
        }
        return json_encode($result);
    }

    //dang nhap
    public function Login($username, $password){
        $qr="SELECT * FROM taikhoan WHERE tendangnhap='$username' AND matkhau='$password'";
        return mysqli_query($this->con,$qr);
    }
    
    //kiem tra username co bi trung hay khong
    public function checkUsername($username){
        $qr="SELECT tendangnhap FROM taikhoan WHERE tendangnhap='$username'";
        $rows=mysqli_query($this->con,$qr);
        $kq="that's a good username";//false
        if(mysqli_num_rows($rows)>0)
        {
            $kq="username already exist!!";//true
        }
        return json_encode($kq);
    }

}
?>