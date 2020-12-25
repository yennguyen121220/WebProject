
<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class TaiKhoanModel extends DB{


    //them tai khoan
    public function Insert($username, $password,$name,$address,$phoneNum,$role){

        $qr="INSERT INTO taikhoan VALUES('$username','$name','$password','$phoneNum','$address','$role')";
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

    //sua tai khoan
    function Update($username, $password){
        $qr="UPDATE taikhoan SET matkhau='$password' WHERE tendangnhap='$username'";
        $result = $this->con->query($qr);
        return $result;
    }


    //xoa tai khoan
    public function Delete($username){
        // xóa ràng buộc khóa ngoại
        $delete_FK="ALTER TABLE hoadon DROP CONSTRAINT fk_makh";
        $this->con->query($delete_FK);

        // insert vào bảng taikhoan_xoa
        $query="INSERT INTO taikhoan_xoa(makh) VALUES ('$username')";
        $this->con->query($query);

        // xóa khách hàng
        $qr="DELETE FROM taikhoan WHERE tendangnhap='$username'";
        $result = $this->con->query($qr);

        // tạo lại ràng buộc
        $create_FK="ALTER TABLE hoadon ADD CONSTRAINT fk_makh FOREIGN KEY (makh) REFERENCES taikhoan(tendangnhap) ON DELETE CASCADE ON UPDATE CASCADE";
        $this->con->query($create_FK);

        return $result;
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