
<div class='name'>
</div>
<div class="main__form-wrap" align="center">
    <h1 class="main__form-heading">Chi tiết sản phẩm</h1>
    <div class="main_form-container">
    <?php
        while($row=mysqli_fetch_array($data["CT"]))
		{
            
            $_SESSION["masp"]=$row["masp"];
            echo '<div class="data_left">';
            echo   ' <img src="http://localhost/DoAn/public/images/'.$row["hinhanh"].'" alt="hinh ảnh">';
            echo '</div>';

            echo '<div class="data_right">';
            echo '<table class="dataSP">';
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
            echo        '<th><h1>Giá sản phẩm</h1></th>';
            echo        '<td><h3>'.$row["gia"].' đ</h3></td>';
            echo   ' </tr>';
            echo    '<tr>';
            echo        '<th><h1>Mô tả</h1></th>';
            echo        '<td><h3>'.$row["mota"].'</h3></td>';
            echo    '</tr>';
            echo '</table>';
            echo    '<div class="data_right-numberSP"> 
                        <label> Số lượng: </label>
                        <input type="number" value="1" min="1" class="input-soluongsp">
                    </div>';
            echo    '<div class="input__group-submit-btn">';
            echo        '<table class="tbl">';
            echo            '<tr>';
            echo                '<td>';
            echo                    '<button class="btn__buy-product"> Đặt mua </button>';
            echo                '</td>';
    echo                        '<td>';
    echo                            '<button class="btn__addToCart"> Thêm Vào Giỏ Hàng </button>';
    echo                       ' </td>';
    
                            if (isset($_SESSION["quyen"]) && ((int)$_SESSION["quyen"]) == 1)
                            {
    echo                            '<td>';
    echo                                '<div class="updateSP"> <a class="cn" href="http://localhost/DoAn/SuaSP">Sửa</a> </div>';
    echo                           ' </td>';
    echo                           ' <td>';
    echo                               '<input type="submit" value="Xóa" class="btn btn-default"/>';
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

<style>
    .tbl button {
        width: 94%;
        border: none;
        background-color: #7fab21;
        border-radius: 15px;
        color: #FFF;
        font-size: 1.35rem;
        padding: 8px 12px;
        cursor: pointer;
        margin: 0 10px;
        outline: none;
    }

    .tbl button:hover {
        background-color: #648717;
    }
</style>

<script src="http://localhost/DoAn/jquery-3.5.1.min.js"></script>
<script src="http://localhost/DoAn/public/js/chitietsp.js"></script>

