<?php
    $conn=new mysqli('localhost', 'root', '', 'dbwebproject');
    if (!$conn)
    {
        die("Lỗi");
    }
    // xử lý khi dùng "loai"
    if (isset($_GET['loai']))
    {
        $loai=$_GET['loai'];
        $qr="SELECT * FROM sanpham WHERE loai='$loai'";
        $result=$conn->query($qr);
        $arr=[];
        while($row=$result->fetch_assoc())
        {
            $arr_obj=array(
                "masp"=> $row["masp"],
                "loai"=>$row["loai"],
                "tensp"=>$row["tensp"],
                "gia"=>$row["gia"],
                "hinhanh"=>$row["hinhanh"],
                "mota"=>$row["mota"]
            );
            array_push($arr, $arr_obj);
        }
        die(json_encode($arr));
    }
    // xử lý khi dùng "masp"
    if (isset($_GET['masp']))
    {
        $masp=$_GET['masp'];
        $qr="SELECT * FROM sanpham WHERE masp='$masp'";
        $result=$conn->query($qr);
        $arr1=[];
        $row=$result->fetch_assoc();
        $arr_obj=array(
            "masp"=> $row["masp"],
            "loai"=>$row["loai"],
            "tensp"=>$row["tensp"],
            "gia"=>$row["gia"],
            "hinhanh"=>$row["hinhanh"],
            "mota"=>$row["mota"]
        );
        array_push($arr1, $arr_obj);
        die(json_encode($arr1));
    }
?>