<div class="main__form-wrap" align="center">
    <div class="main_form-container">
        <form action="./XoaKH/XuLyXoa" method="POST">
            <h2 class="form-heading">Xóa khách hàng</h2>
            
            <div class="input__group">
                <select name="usernameKH" id="usernameKH">
                    <option selected value="" disabled>Chọn username khách hàng cần xóa</option>
                    <?php
                        $conn=new mysqli('localhost', 'root', '', 'dbwebproject');
                        if (!$conn)
                        {
                            die("Connect failed: ".mysqli_connect_error());
                        }
                        $qr="SELECT tendangnhap, `role` FROM taikhoan";
                        $res=$conn->query($qr);
                        while($rows=$res->fetch_assoc())
                        {
                            if ($rows['role']==0)
                                echo "<option value='{$rows['tendangnhap']}'>{$rows['tendangnhap']}</option>";
                            if ($rows['role']==1)
                            {
                                echo "<option value='{$rows['tendangnhap']}'>{$rows['tendangnhap']} (ADMIN)</option>";
                            } 
                        }
                    ?>
                </select>
            </div>
            <div class="input__group">
                <input type="text" name="fullname" placeholder="Họ và tên" readonly>
            </div>
            <div class="input__group">
                <input type="text" name="phoneNumber" placeholder="Số điện thoại" readonly>
            </div>
        
            <div class="input__group-submit-btn">
                <input type="submit" value="Xóa khách hàng" name="DeleteKH" >
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
    var url=window.location.href;
    if(url=="http://localhost/DoAn/XoaKH/XuLyXoa")
    {
        setTimeout(function() {
            window.location="http://localhost/DoAn/XoaKH";
        }, 20);
    }
</script>