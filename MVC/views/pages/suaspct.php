<div class="main__form-wrap" align="center">
    <div class="main_form-container">
        <form action="./SuaSP/XuLySua" method="POST">
            <h2 class="form-heading">Sửa sản phẩm của cửa hàng</h2>
            <?php
                while($row=mysqli_fetch_array($data["CT"])){ ?>
                <div class="input__group">
                    <input type="text" name="masp" value="<?php echo $row["masp"] ?>" readonly>
                </div>
                <div class="input__group">
                    <input type="text" name="loai" value="<?php echo $row["loai"] ?>" readonly>
                </div>
                <div class="input__group">
                    <input type="text" name="tensp" value="<?php echo $row["tensp"] ?>" required>
                </div>
                <div class="input__group">
                    <input type="text" name="gia" value="<?php echo $row["gia"] ?>" required>
                </div>
                <div class="input__group">
                    <input type="textarea"  name="mota" value="<?php echo $row["mota"] ?>">
                    <!-- <textarea rows = "5" cols = "50" name = "mota" placeholder="Viết mô tả sản phẩm">Mo ta sp</textarea> -->
                </div>
            <?php } ?>
            <!-- <div class="input__group">
               
                <input type="file" class="btn-file-upload" name="hinhanh" value="hình ảnh"/>

            </div> -->

            <div class="input__group" style="height: 100px;">
                <img src="" alt="hinhanh" width="100px" height="100px">
            </div>

            <p align="left" class="clickToChangeImage" style="font-size: 1.4rem; cursor: pointer">Click để sửa (không sửa) hình ảnh</p>

            <div class="input__group input__group--image-edit-1" style="display: none;">             
                <input type="text" class="btn-file-upload" name="tenhinhanh" placeholder="Link hình ảnh" readonly/>
            </div>

            <div class="input__group input__group--image-edit-2" style="display: none;">             
                <input type="file" class="btn-file-upload" name="hinhanh" value="hình ảnh"/>
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
        //document.querySelector(".input__group--image-edit").style.display="block";
        if (t==0)
        {
            document.querySelector(".input__group--image-edit-1").style.display="block";
            document.querySelector(".input__group--image-edit-2").style.display="block";
            t=1;
            document.querySelector("input[name='tenhinhanh']").value=document.querySelector(".input__group img").getAttribute("src");
        }
        else if (t==1)
        {
            document.querySelector(".input__group--image-edit-1").style.display="none";
            document.querySelector(".input__group--image-edit-2").style.display="none";
            t=0;
            document.querySelector("input[name='tenhinhanh']").value=document.querySelector(".input__group img").getAttribute("src");
        }
    }

    var imgFile=document.querySelector("input[name='hinhanh']");
    imgFile.onchange=function(e) {
        document.querySelector("input[name='tenhinhanh']").value="./public/images/"+e.target.files[0].name;
    }
</script>