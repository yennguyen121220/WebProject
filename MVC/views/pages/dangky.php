<div class="main__form-wrap" align="center">
    <h1 class="main__form-heading">FORM ĐĂNG KÝ</h1>
    <div class="main_form-container">
        <form action="./DangKy/XuLyDangKy" method="POST">
            <h2 class="form-heading">Đăng ký tài khoản</h2>
            <div class="input__group">
                <input type="text" name="fullname" placeholder="Họ và tên" required>
            </div>
            <div class="input__group">
                <input type="text" name="address" placeholder="Địa chỉ" required>
            </div>
            <div class="input__group">
                <input type="tel" name="telNumber" placeholder="Số điện thoại" required>
            </div>
            <div class="input__group">
                <input type="text" name="username" id="username" placeholder="Tên đăng nhập" autocomplete="off" required>
                <div id="messageUsername"></div>
            </div>
            <div class="input__group">
                <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <div class="input__group input__group--margin-bottom-less">
                <input type="password" name="retype_password" placeholder="Nhập lại mật khẩu" required>
            </div>
            <div class="input_show-password-check-container">
                <input type="checkbox" name="showPass" id="">
                <span>Hiển thị mật khẩu</span>
            </div>
            <div class="input__group input__group--flex">
                <input type="checkbox" name="check" id="check">
                <span>
                    Tôi đồng ý với các <a href="">Điều khoản sử dụng</a> & <a href="">Chính sách bảo mật</a>
                </span>
            </div>
            <div class="input__group-submit-btn">
                <input type="submit" value="Đăng Ký" name="register" >
            </div>
            <div class="form__for-new-user">
                <span>Đã có tài khoản? </span>
                <a href="./DangNhap" class="form__for-new-user-link">Đăng nhập</a>
            </div>
        </form>
        <!-- <h1>
            <?php
                if(isset($_POST["register"])&&$_POST["register"]=="Đăng Ký"){
                    
                    echo "Đăng ký thành công";
                    
                }
            ?>
        </h1> -->
    </div>
</div>


