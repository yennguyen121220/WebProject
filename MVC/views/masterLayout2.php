<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["Page"] ?> - Jolie Clothing</title>
    <!-------- nhúng icon ----------->
	<link rel="stylesheet" type="text/css" href="http://localhost/DoAn/public/css/fontawesome-free-5.14.0/css/all.min.css">
    <?php
        echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/".$data["Page"].".css'>";
    ?>
</head>
<body>
    <div class="container">
        <header>
            <div id="menu_top"><!--mo menutop-->
                <div id="logo">
                    <a href="./Home"><img src="http://localhost/DoAn/public/images/logohome1.png" alt="LogoJolie" /></a>
                </div>
                <div id="top_left">
                    <div id="find">
                        <input type="text" id="textFind" />
                        <input type="button" value="Tìm kiếm" id="btnFind" />
                    </div>
                    <div id="qoute">
                        <h2>Yêu bản thân, may mắn tự nhiên tới</h2> 
                    </div>
                </div>
                <div id="top_right">
                    <div id="right_top">
                        <div id="right">
                            <ul>
                                <li><a href="./DangKy" title="Đăng ký">Đăng ký</a></li>
                                <li><a href="./DangNhap" title="Đăng nhập">Đăng nhập</a></li>
                            </ul>
                        </div>
                        <div id="left">
                            <h3><a href="#">Giỏ hàng</a></h3>
                        </div>
                    </div>
                    <div id="right_bottom"><h2><a href="#">Contact us</a></h2></div>
                </div>
            </div> <!--dong menutop-->
        </header>

        <main>
            <?php
                require_once "./MVC/views/pages/".$data["Page"].".php";
            ?>
        </main>

        <footer>
            <div class="footer-wrap">
				<div class="footer-wrap-info">
					<div class="footer__shopInfo-aboutus">
						<h4 class="footer__shopInfo-aboutus-heading">Về chúng tôi</h4>
						<ul class="footer__shopInfo-link-list">
							<li class="footer__shopInfo-link-item">
								<a href="#" class="footer__shopInfo-link">Shop chúng tôi</a>
							</li>
							<li class="footer__shopInfo-link-item">
								<a href="#" class="footer__shopInfo-link">Báo cáo thường niên</a>
							</li>
							<li class="footer__shopInfo-link-item">
								<a href="#" class="footer__shopInfo-link">Cơ hội việc làm</a>
							</li>
							<li class="footer__shopInfo-link-item">
								<a href="#" class="footer__shopInfo-link">Chính sách cộng đồng</a>
							</li>
						</ul>
					</div>
	
					<div class="footer__contact-container">
						<h4 class="footer__shopInfo-aboutus-heading">Liên lạc với chúng tôi</h4>
						<p>Số điện thoại: <span>+84378233356</span></p>
						<p>Hoặc</p>
						<div class="footer__contact-icon-container">
							<div class="footer__contact-icon">
								<a href="#" class="footer__contact-icon-link">
									<i class="fab fa-facebook"></i>
								</a>								
							</div>
							<div class="footer__contact-icon">
								<a href="#" class="footer__contact-icon-link">
									<i class="fab fa-instagram"></i>
								</a>								
							</div>
							<div class="footer__contact-icon">
								<a href="#" class="footer__contact-icon-link">
									<i class="fab fa-twitter"></i>
								</a>								
							</div>
							<div class="footer__contact-icon">
								<a href="#" class="footer__contact-icon-link">
									<i class="fab fa-youtube"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="footer__address-container">
						<h4 class="footer__shopInfo-aboutus-heading">Địa chỉ của chúng tôi</h4>
						<p>
							Quận 1, Thành phố Hồ Chí Minh
						</p>
					</div>
				</div>

				<div class="footer-wrap-copyright">
					<p>
						Bản quyền © thuộc về Jolie Clothing Shop
					</p>

					<div class="footer-wrap-copyright-link-container">
						<a href="#" class="footer-wrap-copyright-link">Contact</a>
						<a href="" class="footer-wrap-copyright-link">Terms of Use</a>
						<a href="" class="footer-wrap-copyright-link">Privacy</a>
						<a href="" class="footer-wrap-copyright-link">Cookies</a>
					</div>
				</div>
			</div>
        </footer>
    </div>

    <script>
        var icon_hide=document.querySelector(".icon-hide");
        var icon_show=document.querySelector(".icon-show");
        var password=document.querySelector('input[name="password"]');
        icon_hide.onclick=function(e) {
            e.target.style.display="none";
            icon_show.style.display="block";
            password.setAttribute('type','text');
        }

        icon_show.onclick=function(e) {
            e.target.style.display="none";
            icon_hide.style.display="block";            
            password.setAttribute('type','password');
        }
    </script>
</body>
</html>