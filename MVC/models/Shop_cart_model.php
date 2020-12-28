<?php
    class Shop_cart_model extends DB{
        public function create_cart()
        {
            if(!isset($_SESSION["Shop_cart"])){ //neu rong thi tao cho no 1 mang rong
                $_SESSION["Shop_cart"] = array(); //tao mang rong de them san pham vao gio
            }
            if(!empty($_SESSION["Shop_cart"])){
                $jquerydb="SELECT * FROM `sanpham` WHERE `masp` IN (".implode(",", array_keys($_SESSION["Shop_cart"])).")";
                $products = mysqli_query($this->con, $jquerydb);
            }
        }
        
        public function update_cart($add=false)
        {
                foreach($_POST['quantity'] as $id => $quantity){ //khai bao 2 bien lay id la masp va quantity la so luong
                    if($quantity==0){ //số lượng bằng 0 thì sẽ xóa luôn
                        unset($_SESSION["Shop_cart"][$id]);
                    }else{
                            if($add){ //$add=true thì nó sẽ cộng lên
                                //if(isset($_SESSION["Shop_cart"][$id])){
                                    $_SESSION["Shop_cart"][$id] += $quantity;
                                // }else{
                                //     $_SESSION["Shop_cart"][$id] = $quantity;
                                //}
                        }   else{
                             $_SESSION["Shop_cart"][$id] = $quantity;
                        }
                    }
                }
        }
        public function get_add()
        {
            if(isset($_POST['register']))
            {
                update_cart(true);
            }
        }
        public function get_delete()
        {
            if(isset($_GET['action']) && $_GET['action']=='delete')
            {
                if(isset($_GET['id'])) //cách lấy mã sp
                {
                    unset($_SESSION["Shop_cart"][$_GET['id']]);
                }
            }
        }
        public function get_sb_update()
        {
            if(isset($_GET['action']) && $_GET['action']=='submit')
            {
                if(isset($_POST['update click']))
                {
                    update_cart();
                }
            }
        }
        public function get_sb_order()
        {
            if(isset($_GET['action']) && $_GET['action']=='submit')
            {
                if(isset($_POST['order click']))
                {
                    if(empty($_POST['name'])){
                        $error = "Bạn chưa nhập tên người nhận";
                    }elseif(empty($_POST['phone'])){
                        $error = "Bạn chưa nhập số điện thoại";
                    }elseif(empty($_POST['address'])){
                        $error = "Bạn chưa nhập địa chỉ người nhận";
                    }elseif(empty($_POST['quantity'])){
                        $error = "Bạn chưa mua sản phẩm nào";
                    }
                            if($error == false && !empty($_POST['quantity'])){ //$error=false tức là các ô đã nhập đầy đủ
                            $products = mysqli_query($this->con,"SELECT * FROM `sanpham` WHERE `masp` IN(".implode(",", array_keys($_POST['quantity'])).")");
                            $total2 = 0;
                            $orderProduct = array(); //tạo mảng mới
                            while($row = mysqli_fetch_array($products)){
                                $orderProduct[] = $row;
                                $total2 += $row['gia'] * $_POST['quantity'][$row['masp']];
                            }
                            $insertorder = mysqli_query($this->con, "INSERT INTO `khachhang` (`makh`, `tenkh`, `sdt`, `diachi`, `ghichu`, `tongtien`) VALUES (NULL, '".$_POST['name']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['note']."', '".$total2."')");
                            $IDorder = $this->con->insert_id;
                            $insert_String = "";
                            //var_dump($orderProduct);exit;
                            foreach($orderProduct as $key => $product){
                                $insert_String .= "(NULL, '".$IDorder."', '".$product['masp']."', '".$_POST['quantity'][$product['masp']]."', '".$product['gia']."')";
                                if($key != count($orderProduct)-1){
                                    $insert_String .= ",";
                                }
                            }
                            $insertorder = mysqli_query($this->con, "INSERT INTO `chitiethd` (`macthd`, `kh_id`, `sp_id`, `soluong`, `gia`) VALUES".$insert_String.";");
                            $success = "Đặt hàng thành công";
                    }
                }
        }
    }
}
?>