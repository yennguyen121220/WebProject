<div class="main__form-wrap" align="center">
    <div class="main_form-container">
        <form action="./ThemSP/XuLyThem" method="POST">
            <h2 class="form-heading">Thêm sản phẩm vào cửa hàng</h2>
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
                <input type="text" name="tensp" placeholder="Tên sản phẩm" required>
            </div>
            <div class="input__group">
                <input type="text" name="gia" placeholder="Giá sản phẩm" required>
            </div>
            <div class="input__group">
                <input type="textarea"  name="mota" placeholder="Nhập mô tả sản phẩm">
                <!-- <textarea rows = "5" cols = "50" name = "mota" placeholder="Viết mô tả sản phẩm">Mo ta sp</textarea> -->
            </div>
            <div class="input__group">
               
                <input type="file" class="btn-file-upload" name="hinhanh" value="hình ảnh" required/>

            </div>
            
            <div class="input__group-submit-btn">
                <input type="submit" value="Thêm sản phẩm" name="register" >
            </div>
        </form>
        <h1>
            <?php
                // if(isset($_POST["register"])&&$_POST["register"]=="Thêm sản phẩm"){
                //     echo "Thêm thành công";
                // }
                if (isset($data["Kq"]))
                {
                    if ($data["Kq"])
                        echo "Thêm thành công";
                    else 
                        echo "Thêm thất bại";
                }
                    
            ?>
        </h1>
    </div>
</div>


