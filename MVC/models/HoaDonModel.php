<?php
    class HoaDonModel extends DB{

        public function getAllList_HoaDon(){
            $qr="SELECT hd.mahd, makh, COUNT(masp) AS 'Số sp đã mua', tien FROM hoadon hd, cthd ct WHERE hd.mahd=ct.mahd GROUP BY ct.mahd";
            $result=$this->con->query($qr);
            $arr1=[];
            while($rows=$result->fetch_assoc())
            {
                $arrObj= array(
                    "mahd"=>$rows["mahd"],
                    "makh"=>$rows["makh"],
                    "Số sp đã mua"=>$rows["Số sp đã mua"],
                    "tien"=>$rows["tien"]
                );
                array_push($arr1, $arrObj);
            }
            return $arr1;
        }

        public function getCTHD($id) {
            // query 1 lấy thông tin hóa đơn
            $qr1="SELECT DISTINCT hd.mahd, makh, hoten, diachi, sdt, tien FROM hoadon hd, cthd ct WHERE hd.mahd=ct.mahd AND hd.mahd={$id}";
            $result1=$this->con->query($qr1);
            $row1=$result1->fetch_assoc();

            // query 2 lấy danh sách các sp đã mua của 1 hóa đơn
            $qr2="SELECT tensp, gia, soluong, thanhtien FROM cthd ct, sanpham sp WHERE ct.masp=sp.masp AND ct.mahd={$id}";
            $result2=$this->con->query($qr2);
            $arr2=[];
            while($row2=$result2->fetch_assoc())
            {
                $arrSP=array(
                    "tensp"=>$row2["tensp"],
                    "gia"=>$row2["gia"],
                    "soluong"=>$row2["soluong"],
                    "thanhtien"=>$row2["thanhtien"]
                );
                array_push($arr2, $arrSP);
            }

            $arr=array(
                "mahd"=>$row1["mahd"],
                "makh"=>$row1["makh"],
                "hoten"=>$row1["hoten"],
                "diachi"=>$row1["diachi"],
                "sdt"=>$row1["sdt"],
                "arraySP"=>$arr2,
                "tien"=>$row1["tien"]
            );
            
            return $arr;
        }
    }
?>