<div class="main__form-wrap" align="center">
    <div class="main_form-container">
        <form action="./SuaSP/XuLySua" method="POST">
            <h2 class="form-heading">Sửa sản phẩm của cửa hàng</h2>
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
                <input type="textarea"  name="mota" placeholder="Nhập mô tả sản phẩm">
                <!-- <textarea rows = "5" cols = "50" name = "mota" placeholder="Viết mô tả sản phẩm">Mo ta sp</textarea> -->
            </div>

            <div class="input__group" style="height: 100px;">
                <img src="" alt="hinhanh" width="100px" height="100px">
            </div>

            <div class="input__group input__group--image-edit-1">             
                <input type="text" class="btn-file-upload" name="tenhinhanh" placeholder="Link hình ảnh"/>
            </div>

            <p align="left" class="clickToChangeImage" style="font-size: 1.4rem; cursor: pointer">Click để sửa (không sửa) hình ảnh</p>

            <div class="input__group input__group--image-edit-2" style="height: 0">             
                <!-- <input type="file" class="btn-file-upload" name="hinhanh" value="hình ảnh"/> -->
            </div>

            <div class="input__group-submit-btn">
                <input type="submit" value="Sửa sản phẩm" name="UpdateSP" >
            </div>
        </form>
        <h1>
            <?php
                if (isset($data['Kq']))
                {
                    if ($data['Kq'])
                        echo "Sửa thành công";
                    else 
                        echo "Sửa thất bại";
                }
            ?>
        </h1>
    </div>
</div>

<script>
    var p=document.querySelector(".clickToChangeImage");
    var t=0;
    
    p.onclick=function(e) {
        if (t==0)
        {
            document.querySelector(".input__group--image-edit-2").innerHTML=`<input type="file" class="btn-file-upload" name="hinhanh" value="hình ảnh"/>`;
            document.querySelector(".input__group--image-edit-2").style.height="35px";
            
            // khi có input[name='hinhanh'] sẽ có sự kiện onchange
            var imgFile=document.querySelector("input[name='hinhanh']");
            imgFile.onchange=function(e) {
                document.querySelector("input[name='tenhinhanh']").value="./public/images/"+e.target.files[0].name;
            }
            t=1;
        }
        else if (t==1)
        {
            document.querySelector("input[name='hinhanh']").remove();
            document.querySelector(".input__group--image-edit-2").style.height="0";
            t=0;
            // nhấn tắt thay đổi n sẽ lấy link ban đầu
            document.querySelector("input[name='tenhinhanh']").value=document.querySelector(".input__group img").getAttribute("src");
        }
    }

    var url=window.location.href;
    if(url=="http://localhost/DoAn/SuaSP/XuLySua")
    {
        setTimeout(function() {
            window.location="http://localhost/DoAn/SuaSP";
        }, 20);
    }
</script>