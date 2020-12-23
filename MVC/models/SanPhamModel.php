<?php
//nhiem vu la tra ve data ma khach hang yeu call_user_func
class SanPhamModel extends DB{

    //tui  1
    public function GetTui(){
        $qr="SELECT * FROM sanpham WHERE loai='1'";
        return mysqli_query($this->con,$qr);
    }
    public function TuiGT(){
        $qr="SELECT * FROM sanpham WHERE loai='1' AND masp BETWEEN 1 and 2";
        return mysqli_query($this->con,$qr);
    }


    //giay, dep 2
    public function GetGiay(){
        $qr="SELECT * FROM sanpham WHERE loai='2'";
        return mysqli_query($this->con,$qr);
    }
    public function GiayGT(){
        $qr="SELECT * FROM sanpham WHERE loai='2' AND masp BETWEEN 30 and 31";
        return mysqli_query($this->con,$qr);
    }

    //ao 3
    public function GetAo(){
        $qr="SELECT * FROM sanpham WHERE loai='3'";
        return mysqli_query($this->con,$qr);
        
    }
    public function AoGT(){
        $qr="SELECT * FROM sanpham WHERE loai='3' AND masp BETWEEN 30 and 31";
        return mysqli_query($this->con,$qr);
    }

    //quan 4
    public function GetQuan(){
        $qr="SELECT * FROM sanpham WHERE loai='4'";
        return mysqli_query($this->con,$qr);
        
    }
    public function QuanGT(){
        $qr="SELECT * FROM sanpham WHERE loai='4' AND masp BETWEEN 80 and 81";
        return mysqli_query($this->con,$qr);
    }


    //yem 5
    public function GetYem(){
        $qr="SELECT * FROM sanpham WHERE loai='5'";
        return mysqli_query($this->con,$qr);
    }
    public function YemGT(){
        $qr="SELECT * FROM sanpham WHERE loai='5' AND masp BETWEEN 110 and 111";
        return mysqli_query($this->con,$qr);
    }


    //Chan vay 6
    public function GetChanVay(){
        $qr="SELECT * FROM sanpham WHERE loai='6'";
        return mysqli_query($this->con,$qr);
    }
    public function ChanVayGT(){
        $qr="SELECT * FROM sanpham WHERE loai='6' AND masp BETWEEN 125 and 126";
        return mysqli_query($this->con,$qr); 
    }

    
    //vay 7
    public function GetVay(){
        $qr="SELECT * FROM sanpham WHERE loai='7'";
        return mysqli_query($this->con,$qr);
    }
    public function VayGT(){
        $qr="SELECT * FROM sanpham WHERE loai='7' AND masp BETWEEN 150 and 151";
        return mysqli_query($this->con,$qr);
    }



    //them sp
    // public function Insert($loai,)
    public function Insert($loai,$tensp, $gia,$hinhanh,$mota){
        $qr="INSERT INTO sanpham (loai,tensp,gia,hinhanh,mota) VALUES
        ($loai,'$tensp',$gia,'$hinhanh','$mota')";
        $result = false;
        if(mysqli_query($this->con,$qr))
        {
            $result=true;
        }
        return json_encode($result);
    }

    // sua sp
    public function Update($masp, $loai, $tensp, $gia, $hinhanh, $mota){
        $qr="UPDATE sanpham SET loai='$loai', tensp='$tensp', gia='$gia', hinhanh='$hinhanh', mota='$mota' WHERE masp='$masp'";
        $kq=$this->con->query($qr);
        return $kq;
    }

    // xoa sp
    public function Delete($masp){
        // xóa ràng buộc khóa ngoại
        $delete_FK="ALTER TABLE cthd DROP CONSTRAINT fk_masp";
        $this->con->query($delete_FK);

        //lấy các thông số sp cần xóa
        $query="SELECT masp, loai, tensp, gia, hinhanh, mota FROM sanpham WHERE masp='$masp'";
        $result=$this->con->query($query);
        $row=$result->fetch_row();

        // insert vào bảng sp Xóa
        $query="INSERT INTO sanpham_xoa (masp, loai, tensp, gia, hinhanh, mota) VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]','$row[5]')";
        $this->con->query($query);

        // thực hiện xóa sp
        $qr="DELETE FROM sanpham WHERE masp='$masp'";
        $kq=$this->con->query($qr);

        // tạo lại ràng buộc khóa ngoại
        $create_FK="ALTER TABLE cthd ADD CONSTRAINT fk_masp FOREIGN KEY (masp) REFERENCES sanpham(masp) ON DELETE CASCADE ON UPDATE CASCADE";
        $this->con->query($create_FK);
        
        return $kq;
    }
}
?>