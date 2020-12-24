
<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class TaiKhoanModel extends DB{

    public function Insert($username, $password,$name,$address,$phoneNum){
        $qr="INSERT INTO taikhoan VALUES('$username','$name','$password','$phoneNum','$address','0')";
        $result = false;
        if(mysqli_query($this->con,$qr))
        {
            $result=true;
        }
        return json_encode($result);
    }

    public function Update($username, $password){
        $qr="UPDATE taikhoan SET matkhau='$password' WHERE tendangnhap='$username'";
        $result = $this->con->query($qr);
        return $result;
    }

    public function Delete($username){
        $qr="DELETE FROM taikhoan WHERE tendangnhap='$username'";
        $result = $this->con->query($qr);
        return $result;
    }

    public function Login($username, $password){
        // $this->con->query('SELECT * FROM taikhoan WHERE tentaikhoan=:username ');
        // $this->con->bind(':username',$username);
        // $row =$this->con->single();
        $qr="SELECT * FROM taikhoan WHERE tendangnhap='$username' AND matkhau='$password'";
        $result=$this->con->query($qr);
        return $result->num_rows;
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

    // public function Login($username, $password){
    //     $qr="SELECT * FROM taikhoan WHERE tendangnhap='$username' AND matkhau='$password'";
    //     $rows=mysqli_query($this->con,$qr);
    //     // $KQ=FALSE;
    //     if(mysqli_num_rows($rows)>0)
    //         $kq=true;
    //     else{
    //        $kq=false;
    //     }
    //     return json_encode($kq);
    // }
    
}
?>