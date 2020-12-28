<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/Doan/Webproject-master2/public/css/Shop_cart_view.css">
    <title>Giỏ hàng</title>
</head>
<body>

    <div class="container" style="background-color: #99FF33">
        <?php if(!empty($error)) { ?>
            <div id="notify-msg">
                <?=$error?>. <a href="javascript:history.back()">Quay lại</a>  
            </div>
        <?php } elseif(!empty($success)){ ?>
            <div id="notify-msg">
                <?=$success?>. <a href="./trangchu/index.php">Tiếp tục mua hàng</a>  
            </div>
        <?php } else { ?>
            <h1>Giỏ hàng</h1>
            <form action="Shop_cart.php?action=submit" id="cart-form" method="POST">
                    <table>
                        <tr>
                            <th class="product-number">STT</th> 
                            <th class="product-name">Tên sản phẩm</th>
                            <th class="product-img">Hình ảnh</th>
                            <th class="product-price">Đơn giá</th>
                            <th class="product-quantity">Số lượng</th>
                            <th class="total-money">Thành tiền</th>
                            <th class="product-delete">Xoá</th>
                        </tr>
                        <?php
                        if(!empty($products)){
                            $total=0; //khai báo tổng tiền
                            $num = 0; //bien dem 
                            while($row = mysqli_fetch_array($products)) { ?> 
                            <tr> 
                                <td class="product-number"><?=$num++;?></td>
                                <td class="product-name"><?=$row['tensp']?></td>
                                <td class="product-img"><img src="http://localhost:8080/Doan/Webproject-master2/public/images/<?=$row['hinhanh']?>" > </td>
                                <td class="product-price"><?=number_format($row['gia'],0,",",".")?></td>
                                <td class="product-quantity"><input type="text" value="<?=$_SESSION["Shop_cart"][$row['masp']]?>" name="quantity[<?=$row['masp']?>]"></td>
                                <td class="total-money"><?=number_format($row['gia'] * $_SESSION["Shop_cart"][$row['masp']],0,",",".")?></td>
                                <td class="product-delete"><a href="Shop_cart.php?action=delete&id=<?=$row['masp']?>">Xoá</a></td>
                            </tr>
                            <?php 
                            $total += $row['gia'] * $_SESSION["Shop_cart"][$row['masp']];
                            //$num++; 
                            } 
                            ?>
                            <tr id="row-total"> 
                                <td class="product-number">&nbsp;</td>
                                <td class="product-name">Tổng tiền</td>
                                <td class="product-img">&nbsp;</td>
                                <td class="product-price">&nbsp;</td>
                                <td class="product-quantity">&nbsp;</td>
                                <td class="total-money"><?=number_format($total,0,",",".")?></td>
                                <td class="product-delete">Xoá</td>
                            </tr>
                        <?php } ?>
                    </table>
                    <div id="form-button">
                        <input type="submit" name="update_click" value="Cập nhật">
                    </div>
                    <hr>
                    <div><label>Người nhận</label><input type="text" value="" name="name"></div>
                    <div><label>Điện thoại</label><input type="text" value="" name="phone"></div>
                    <div><label>Địa chỉ</label><input type="text" value="" name="address"></div>
                    <div><label>Ghi chú</label><textarea name="note" id="" cols="50" rows="7"></textarea></div>
                    <input type="submit" name="order_click" value="Đặt hàng">
            </form>
        <?php } ?>      
    </div>
</body>