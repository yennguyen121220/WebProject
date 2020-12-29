<?php
        if (isset($_SESSION['itemSolds']))
        {
                $arr=$_SESSION['itemSolds'];
                for ($i=0;$i<count($arr);$i++)
                {
                        if (isset($_SESSION['items']))
                        {
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
                        $tongtien=0;
                        if (isset($_SESSION['items']))
                        {
                                $arr=$_SESSION['items'];
                                for ($i=0;$i<count($arr);$i++)
                                {
                                        echo "<tr> 
                                                <td data-th='Product'> 
                                                        <div class='row'> 
                                                                <div class='col-sm-2 hidden-xs'><img src=".$arr[$i]["linkImg"]." alt='Sản phẩm 1' class='img-responsive' width='100'>
                                                                </div> 

                                                                <div class='col-sm-10'> 
                                                                        <h4 class='nomargin'>".$arr[$i]["tensp"]."</h4> 
                                                                </div> 
                                                        </div> 
                                                </td> 
                                                <td data-th='Price'><span class='priceSP'>".$arr[$i]["gia"]."</span> đ</td> 
                                                <td data-th='Quantity'><input class='form-control text-center numberSP' value='".$_SESSION['soluong']."' min='1' type='number'>
                                                </td> 
                                                <td class='actions'>
                                                        <button class='btn btn-info btn-sm'><i class='fa fa-edit'></i>
                                                        </button> 
                                                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i>
                                                        </button>
                                                </td> 
                                        </tr>";
                                        $tongtien +=$arr[$i]["gia"]*(int)$_SESSION['soluong'];
                                }
                                unset($_SESSION['itemSolds']);
                        }
                        $_SESSION["tongtien"] = $tongtien;
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
                                <a href="http://localhost/DoAn/Thanhtoan" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                        </td> 
                </tr> 
        </tfoot> 
</table>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

