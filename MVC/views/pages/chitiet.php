
<div class='name'>
</div>
<div class="main__form-wrap" align="center">
    <h1 class="main__form-heading">Chi tiết sản phẩm</h1>
    <div class="main_form-container">
    <?php
        while($row=mysqli_fetch_array($data["CT"]))
		{

            echo '<div class="data_left">';
            echo   ' <img src="http://localhost/DoAn/public/images/'.$row["hinhanh"].'" alt="hinh ảnh">';
            echo '</div>';

            echo '<div class="data_right">';
            echo '<table>';
            echo   ' <tr>';
            echo        '<th><h1>Tên sản phẩm</h1></th>';
            echo        '<td><h3>'.$row["tensp"].'</h3></td>';
            echo    '</tr>';
            echo    '<tr>';
            echo        '<th><h1>Mã sản phẩm</h1></th>';
            echo       ' <td><h3>'.$row["masp"].'</span></h3>';
            
            echo    ' </tr>';
            echo    '<tr>';
            echo        '<th><h1>Mã loại sản phẩm</h1></th>';
            echo        '<td><h3>'.$row["loai"].'</h3></td>';
            echo   ' </tr>';
            echo    '<tr>';
            echo        '<th><h1>Mô tả</h1></th>';
            echo        '<td><h3>'.$row["mota"].'</h3></td>';
            echo    '</tr>';
            echo '</table>';
            echo    '<div class="input__group-submit-btn">';


            echo        '<table class="tbl">';
            echo            '<tr>';
            echo                '<td>';
            echo                    '<a class="cn" href="#">Đặt mua</a>';
            echo                '</td>';
            echo                '<td>';
    echo                           ' <a href="http://localhost/DoAn/Home">Về trang chủ</a>';
    echo                       '</td>';
    echo                        '<td>';
    echo                            '<a class="cn" href="http://localhost/DoAn/GioHang">Giỏ Hàng</a>';
    echo                       ' </td>';
    
                            if (isset($_SESSION["quyen"]) && ((int)$_SESSION["quyen"]) == 1)
                            {
    echo                            '<td>';
    echo                                '<a class="cn" href="http://localhost/DoAn/SuaSP">Sửa</a>';
    echo                           ' </td>';
    echo                           ' <td>';
    echo                               ' <input type="submit" value="Xóa" class="btn btn-default" />';
    echo                            '</td>';
                                }
    echo                    '</tr>';
    echo                '</table>';
            echo        "</div>";
            echo '</div>';
        }
    ?>
    </div>
</div>