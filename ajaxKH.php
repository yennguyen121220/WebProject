<?php
    $conn=new mysqli('localhost', 'root', '', 'dbwebproject');
    if (!$conn)
    {
        die("Lỗi");
    }
    // xử lý khi dùng "loai"
    if (isset($_GET['username']))
    {
        $username=$_GET['username'];
        $qr="SELECT hoten,sdt FROM taikhoan WHERE tendangnhap='$username'";
        $result=$conn->query($qr);
        $arr1=[];
        $row=$result->fetch_assoc();
        $arr_obj=array(
            "hoten"=> $row['hoten'],
            "sdt"=>$row['sdt']
        );
        array_push($arr1, $arr_obj);
        die(json_encode($arr1));
    }
?>