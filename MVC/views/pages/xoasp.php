<div class="main__form-wrap" align="center">
    <div class="main_form-container">
        <form action="./XoaSP/XuLyXoa" method="POST">
            <h2 class="form-heading">Xóa sản phẩm của cửa hàng</h2>
            <div class="input__group">
                <select name="loaisp" id="loai" required>
                    <option  selected disabled value="">-----Vui lòng chọn loại sản phẩm-----</option>
                    <option value="1">Túi</option>
                    <option value="2">Giày, dép</option>
                    <option value="3">Áo</option>
                    <option value="4">Quần</option>
                    <option value="5">Yếm</option>
                    <option value="6">Chân váy</option>
                    <option value="7">Váy</option>
                </select>
            </div>

            <div class="input__group">
                <select name="loaisp" id="ten" required>
                    <option  selected disabled value="">-----Vui lòng chọn sản phẩm cần thay đổi-----</option>
                </select>
            </div>
            <div class="input__group">
                <input type="text" name="masp" placeholder="Mã sản phẩm" readonly>
            </div>
            <div class="input__group">
                <input type="text" name="loai" placeholder="Loại sản phẩm" readonly>
            </div>
            <div class="input__group">
                <input type="text" name="tensp" placeholder="Tên sản phẩm" required>
            </div>
            <div class="input__group">
                <input type="text" name="gia" placeholder="Giá sản phẩm" required>
            </div>
            <div class="input__group">
                <input type="text"  name="mota" placeholder="Nhập mô tả sản phẩm">
                <!-- <textarea rows = "5" cols = "50" name = "mota" placeholder="Viết mô tả sản phẩm">Mo ta sp</textarea> -->
            </div>
            <!-- <div class="input__group">
               
                <input type="text" class="btn-file-upload" name="hinhanh"/>

            </div> -->
            
            <div class="input__group" style="height: 100px;">
                <img src="" alt="hinhanh" width="100px" height="100px">
            </div>

            <div class="input__group-submit-btn">
                <input type="submit" value="Xóa sản phẩm" name="DeleteSP" >
            </div>
        </form>
        <h1>
            <?php
                if (isset($data["Kq"]))
                {
                    if ($data["Kq"])
                        echo "Xóa thành công";
                    else 
                        echo "Xóa thất bại";
                }
            ?>
        </h1>
    </div>
</div>

<script>
    var url=window.location.href;
    if(url=="http://localhost/DoAn/XoaSP/XuLyXoa")
    {
        setTimeout(function() {
            window.location="http://localhost/DoAn/XoaSP";
        }, 20);
    }
</script>