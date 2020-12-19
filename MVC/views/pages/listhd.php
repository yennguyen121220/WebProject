<div class="main__wrapper">
    <div class="main__container-listhd">
        <div class="main__header">
            <h2 class="main__heading">DANH SÁCH HÓA ĐƠN</h2>
        </div>

        <div class="main__totalHD">
            <p class="main__totalHD-para">Tổng số hóa đơn:
                <?php
                    echo count($data["listHoaDon"]);
                ?>
            </p>
        </div>

        <div class="main__table">
            <table border="1px">
                <tr>
                    <th>STT</th>
                    <th>Mã hóa đơn</th>
                    <th>Mã khách hàng</th>
                    <th>Số sản phẩm đã mua</th>
                    <th>Tổng tiền</th>
                    <th>Thêm</th>
                </tr>
                <?php
                    $str="";
                    $arr1=$data["listHoaDon"];
                    for ($i=0;$i<count($arr1);$i++)
                    {
                        $index=$i+1;
                        $row="
                            <tr>
                                <td>{$index}</td>
                                <td>{$arr1[$i]["mahd"]}</td>
                                <td>{$arr1[$i]["makh"]}</td>
                                <td>{$arr1[$i]["Số sp đã mua"]}</td>
                                <td>{$arr1[$i]["tien"]} đ</td>
                                <td>
                                    <a href='http://localhost/DoAn/listhd/cthd/{$arr1[$i]["mahd"]}'>Xem chi tiết</a>
                                </td>
                            </tr>
                        ";
                        $str.=$row;
                    }
                    echo $str;
                ?>
            </table>
        </div>
    </div>
    
    <div class="main__container-cthd-wrapper">
        <div class="main__container-cthd">
            <div class="main__cthd-header">
                <h2 class="main__cthd-heading">CHI TIẾT HÓA ĐƠN</h2>
            </div>

            <div class="main__cthd-table-box"> 
                <?php
                    if (isset($data["chitiet"]))
                    {
                        $arrObj=$data["chitiet"];
                        $str="<table class='main__cthd-table'>";
                        $str.="
                            <tr>
                                <th>Mã hóa đơn</th>
                                <td>{$arrObj["mahd"]}</td>
                            </tr>
                            <tr>
                                <th>Mã khách hàng</th>
                                <td>{$arrObj["makh"]}</td>
                            </tr>
                            <tr>
                                <th>Tên người nhận</th>
                                <td>{$arrObj["hoten"]}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ nhận hàng</th>
                                <td>{$arrObj["diachi"]}</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại</th>
                                <td>{$arrObj["sdt"]}</td>
                            </tr>
                            <tr>
                                <td colspan='2'>
                                    <table border='1px' class='main__cthd-table-listsp'>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Tiền</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>
                        ";
                        for ($i=0;$i<count($arrObj["arraySP"]);$i++)
                        {
                            $stt=$i+1;
                            $str.="
                                <tr>
                                    <td>{$stt}</td>
                                    <td>{$arrObj["arraySP"][$i]["tensp"]}</td>
                                    <td>{$arrObj["arraySP"][$i]["gia"]}</td>
                                    <td>{$arrObj["arraySP"][$i]["soluong"]}</td>
                                    <td>{$arrObj["arraySP"][$i]["thanhtien"]}</td>
                                </tr>
                            ";
                        }
                        $str.="
                                        </table>
                                    </td>
                                </tr>
                                <tr class='totalMoney__row'>
                                    <th style='text-align: center;'>Tổng tiền</th>
                                    <td style='font-weight: bold;'>{$arrObj["tien"]}</td>
                                </tr>
                            </table>
                        ";
                        echo $str;
                    }
                ?>
                <!-- <table class="main__cthd-table">
                    <tr>
                        <th>Mã hóa đơn</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Mã khách hàng</th>
                        <td>antran</td>
                    </tr>
                    <tr>
                        <th>Tên người nhận</th>
                        <td>Nguyễn Văn Thanh</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ nhận hàng</th>
                        <td>Quận 1, TP HCM</td>
                    </tr>
                    <tr>
                        <th>Số điện thoại</th>
                        <td>0387728892</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table border="1px" class="main__cthd-table-listsp">
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Tiền</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Túi đeo chéo</td>
                                    <td>150000</td>
                                    <td>2</td>
                                    <td>300000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Túi đeo chéo</td>
                                    <td>140000</td>
                                    <td>1</td>
                                    <td>140000</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="totalMoney__row">
                        <th style="text-align: center;">Tổng tiền</th>
                        <td style="font-weight: bold;">440000</td>
                    </tr>
                </table> -->
            </div>
        </div>
    </div>
</div>

<script>
    // nếu ở trang danh sách thì k hiển thị CTHD
    var url=window.location.href;
    if (url=="http://localhost/DoAn/listhd/danhsach")
    {
        document.querySelector(".main__wrapper").style.display="block";
        document.querySelector(".main__table").align="center";
        document.querySelector(".main__container-cthd-wrapper").remove();
    }
</script>