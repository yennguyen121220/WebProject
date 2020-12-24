<?php
    class HoaDonModel extends DB{

        public function getAllList_HoaDon(){
            // lấy list makh đã xóa trong bảng taikhoan_xoa
            $query="SELECT makh FROM taikhoan_xoa";
            $resultIDkh=$this->con->query($query);
            $arrIDKH=[];
            while($rowIDKHs=$resultIDkh->fetch_row())
            {
                array_push($arrIDKH, $rowIDKHs[0]);
            }

            // lấy tất cả trong hoadon và đánh dấu nếu khách hàng đã xóa
            $qr="SELECT hd.mahd, makh, COUNT(masp) AS 'Số sp đã mua', tien FROM hoadon hd, cthd ct WHERE hd.mahd=ct.mahd GROUP BY ct.mahd";
            $result=$this->con->query($qr);
            $arr1=[];
            while($rows=$result->fetch_assoc())
            {
                // nếu tồn tại trong bảng kh đã xóa
                if (in_array($rows["makh"], $arrIDKH))
                {
                    $arrObj= array(
                        "isDelete"=>"(Đã xóa)",
                        "mahd"=>$rows["mahd"],
                        "makh"=>$rows["makh"],
                        "Số sp đã mua"=>$rows["Số sp đã mua"],
                        "tien"=>$rows["tien"]
                    );
                }
                else 
                {
                    $arrObj= array(
                        "isDelete"=>"",
                        "mahd"=>$rows["mahd"],
                        "makh"=>$rows["makh"],
                        "Số sp đã mua"=>$rows["Số sp đã mua"],
                        "tien"=>$rows["tien"]
                    );
                }
                
                array_push($arr1, $arrObj);
            }
            return $arr1;
        }

        public function getCTHD($id) {
            // query 1: lấy thông tin hóa đơn
            $qr1="SELECT DISTINCT hd.mahd, makh, hoten, diachi, sdt, tien FROM hoadon hd, cthd ct WHERE hd.mahd=ct.mahd AND hd.mahd={$id}";
            $result1=$this->con->query($qr1);
            $row1=$result1->fetch_assoc();

            // lấy tất cả masp trong 1 mã hd
            $qrCount="SELECT masp FROM cthd WHERE mahd='$id'";
            $resultCount=$this->con->query($qrCount);
            $arrMasp=[]; // tạo 1 array chứa các masp của 1 mahd để thực hiện kiểm tra vs bảng sp_xoa
            while($rowCount=$resultCount->fetch_row())
            {
                array_push($arrMasp, $rowCount[0]);
            }
            // lấy số lượng masp cua 1 mahd
            $soSP=$resultCount->num_rows;

            // query 2: lấy danh sách các sp đã mua của 1 hóa đơn
            // thông tin 2 bảng cthd và sanpham
            $qr2="SELECT ct.masp, tensp, gia, soluong, thanhtien FROM cthd ct, sanpham sp WHERE ct.masp=sp.masp AND ct.mahd={$id}";
            $result2=$this->con->query($qr2);
            $arr2=[];
            while($row2=$result2->fetch_row())
            {
                $arrSP=array(
                    "isDeleted"=>"",
                    "tensp"=>$row2[1],
                    "gia"=>$row2[2],
                    "soluong"=>$row2[3],
                    "thanhtien"=>$row2[4]
                );
                array_push($arr2, $arrSP);
            }

            // kiểm tra nếu sp đã nằm trong bảng sp xóa
            if ($soSP>$result2->num_rows)
            {
                $qrIdSpXoa="SELECT masp FROM sanpham_xoa";
                $resultID=$this->con->query($qrIdSpXoa);
                while($rowIDs=$resultID->fetch_row())
                {
                    // kiểm tra tồn tại
                    if (in_array($rowIDs[0], $arrMasp))
                    {
                        // lấy thông tin 2 bảng cthd và sanpham_xoa
                        $qrSPXoa="SELECT spXoa.tensp, spXoa.gia, ct.soluong, ct.thanhtien FROM cthd ct, sanpham_xoa spXoa WHERE ct.masp={$rowIDs[0]} AND spXoa.masp={$rowIDs[0]}";
                        $resultSpXoa=$this->con->query($qrSPXoa);
                        $rowSPXoa=$resultSpXoa->fetch_row();
                        $arrSP=array(
                            "isDeleted"=>"(Đã xóa)",
                            "tensp"=>$rowSPXoa[0],
                            "gia"=>$rowSPXoa[1],
                            "soluong"=>$rowSPXoa[2],
                            "thanhtien"=>$rowSPXoa[3]
                        );
                        array_push($arr2, $arrSP);
                    }
                }
            }

            $arr=array(
                "mahd"=>$row1["mahd"],
                "makh"=>$row1["makh"],
                "hoten"=>$row1["hoten"],
                "diachi"=>$row1["diachi"],
                "sdt"=>$row1["sdt"],
                "arraySP"=>$arr2,
                "tien"=>$row1["tien"],
            );
            
            return $arr;
        }
    }
?>