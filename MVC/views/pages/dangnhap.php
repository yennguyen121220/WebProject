<div class="main__form" align="center">
    <h1 class="main__heading-form">FORM ĐĂNG NHẬP</h1>
    <div class="main__form-container">
        <form action="./DangNhap/XuLyDangNhap" method="post">
            <h2 class="form-heading">LOGIN</h2>
            <div class="input__group">
                <input type="text" placeholder="Tên đăng nhập" name="username" autocomplete="off" required>
                <div class="input-icon-container">
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>
            <div class="input__group">
                <input type="password" name="password" placeholder="Mật khẩu" required>
                <div class="icon-contianer">
                    <div class="input__icon-show-hide-password-container">
                        <i class="far fa-eye icon-hide"></i>
                        <i class="far fa-eye-slash icon-show"></i>
                    </div>
                    <div class="input-icon-container">
                        <i class="fas fa-lock input-icon"></i>
                    </div>
                </div>

            </div>
            <div class="form__info">
                <div class="remeber">
                    <input type="checkbox" name="check" id="check">
                    <span>Remember me</span>
                </div>

                <div class="forgot-password">
                    <a href="" class="forgot-password-link">Quên mật khẩu?</a>
                </div>
            </div>

            <div class="input__login-btn">
                <input type="submit" value="Đăng Nhập" name="login">
            </div>

            <div class="login__with-btn-other">
                <span>Hoặc đăng nhập bằng:</span>
                <div class="login-btn-icon-container">
                    <i class="fab fa-facebook icon-btn icon-facebook"></i>
                    <i class="fab fa-twitter icon-btn icon-twitter"></i>
                    <i class="fab fa-google icon-btn icon-google"></i>
                </div>
            </div>

            <div class="form__for-new-user">
                <span>Chưa có tài khoản? </span>
                <a href="./DangKy" class="form__for-new-user-link">Đăng ký</a>
            </div>
        </form>
        <h1>
            <?php
                if(isset($_POST["login"])&&$_POST["login"]=="Đăng Nhập"){
                    //kiem tra da co du lieu data['tentaikhoan']!=='' ->thanh cong

                   
                }
            ?>
        </h1>
    </div>
    
</div>