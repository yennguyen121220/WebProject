<?php
        if (isset($_SESSION['itemSolds']))
        {
                $arr=$_SESSION['itemSolds'];
                unset($_SESSION['itemSolds']);
                unset($_SESSION['soluong']);
                for ($i=0;$i<count($arr);$i++)
                {
                        if (isset($_SESSION['items']))
                        {
                                $ktTrung=FALSE;
                                for ($j=0;$j<count($_SESSION['items']);$j++) 
                                {
                                        if ($arr[$i+1]["masp"] == $_SESSION['items'][$j]["masp"])
                                        {
                                                $_SESSION['items'][$j]["soluong"]+=$arr[$i+1]["soluong"];
                                                $ktTrung=TRUE;
                                                break;
                                        }
                                }
                                if ($ktTrung==FALSE)
                                        $_SESSION['items'][count($_SESSION['items'])]=$arr[$i+1];
                        }
                        else 
                        {       
                                $_SESSION['items'][$i]=$arr[$i+1];
                        }
                }
        }
?>

<table id="cart" class="table table-hover table-condensed"> 
        <thead> 
                <tr> 
                        <th style="width:60%">Tên sản phẩm</th> 
                        <th style="width:10%">Giá</th> 
                        <th style="width:10%">Số lượng</th> 
                        <th style="width:20%"> </th> 
                </tr> 
        </thead> 
        <tbody>
                <?php
                        // $tongtien=0;
                        if (isset($_SESSION['items']))
                        {
                                $arr=$_SESSION['items'];
                                for ($i=0;$i<count($arr);$i++)
                                {
                                        echo "<tr> 
                                                <td data-th='Product'> 
                                                        <div class='row'> 
                                                                <div class='col-sm-2 hidden-xs'>
                                                                        <a href='http://localhost/DoAn/ChiTietSP/ChiTiet/{$arr[$i]["masp"]}'><img src=".$arr[$i]["linkImg"]." alt='Sản phẩm 1' class='img-responsive' width='100'></a>
                                                                </div> 

                                                                <div class='col-sm-10'> 
                                                                        <h4 class='nomargin item'> 
                                                                                <a href='http://localhost/DoAn/ChiTietSP/ChiTiet/{$arr[$i]["masp"]}' class='item__link'>".$arr[$i]["tensp"]."</a>
                                                                        </h4> 
                                                                </div> 
                                                        </div> 
                                                </td> 
                                                <td data-th='Price'><span class='priceSP'>".$arr[$i]["gia"]."</span> đ</td> 
                                                <td data-th='Quantity'><input class='form-control text-center numberSP' value='".$arr[$i]["soluong"]."' min='1' type='number'>
                                                </td> 
                                                <td class='actions'>
                                                        <button class='btn btn-danger btn-sm' id='index{$i}'> Xóa </button>
                                                </td> 
                                        </tr>";

                                        // $tongtien += (int)$arr[$i]["gia"] * (int)$arr[$i]["soluong"];
                                }  
                        }

                        // $_SESSION["tongtien"] = $tongtien;
                ?>
        </tbody>
        <tfoot> 
                <tr class="visible-xs"> 
                        <!-- <td class="text-center"><strong>Tổng 200.000 đ</strong> -->
                        </td> 
                </tr> 
                <tr> 
                        <td>
                                <a href="http://localhost/DoAn/Home" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                        </td> 
                        <td colspan="2" class="hidden-xs"> </td> 
                        <td>
                                <button class="payment"> Thanh toán <i class="fa fa-angle-right"></i> </button>
                        </td> 
                </tr> 
        </tfoot> 
</table>

<style>
        a.item__link {
                color: #666;
        }

        a.item__link:hover {
                color: #000;
                text-decoration: none;
        }

        .payment {
                width: 100%;
                display: block;
                color: #fff;
                background-color: #5cb85c;
                border-color: #4cae4c;
                border-radius: 4px;
                padding: 8px 0;
                border: none;
                
        }

        .payment:hover {
                background-color: #449d44;
                border-color: #398439;
        }
</style>

<script src="http://localhost/DoAn/public/js/giohang.js"></script>