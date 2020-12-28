<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $data["Page"] ?> - Jolie Clothing</title>
<link href="http://localhost/DoAn/public/css/product.css" type="text/css" rel="stylesheet" />
<link href="http://localhost/DoAn/public/css/fontawesome-free-5.14.0/css/all.min.css" type="text/css" rel="stylesheet" />

</head>

<body>
	<div id="content">
        <div id="menu_top"><!--mo menutop-->
            <div id="logo">
                <a href="http://localhost/DoAn/Home"><img src="http://localhost/DoAn/public/images/logohome1.PNG" alt="LogoJolie" /></a>
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
            <div id="danhmuc">
                <nav class="nav-main">
                    <ul>
                        <li><a href="./Tui" title="Túi">Túi</a></li>
                        <li><a href="./Giay" title="Giày, dép">Giày, dép</a></li>
                        <li><a href="./Ao" title="Áo">Áo</a></li>
                        <li><a href="./Quan" title="Quần">Quần</a></li>
                        <li><a href="./Yem" title="Yếm">Yếm</a></li>
                        <li><a href="./ChanVay" title="Chân váy">Chân váy</a></li>
                        <li><a href="./Vay" title="Váy">Váy</a></li>                
                    </ul>
                </nav>
            </div>
            <div id="duongdan">
                <nav class="dd">
                    <ul>
                        <li><a href="./Home" title="Trang chủ">Home</a></li>
                        <li><a href="#"><?php if($data["Page"]!=="home"){echo $data["Page"]; }?></a></li>
                    </ul>
                </nav>
        	</div>
        </div> <!--dong menutop-->
        
        
        <div id="main"><!--mo main--->
        
        	<div id="menu_left">
        		<div class="main_menu">
                    <h3>Danh mục sản phẩm</h3>
                    <ul>
                        <li><a href="./Tui" title="Túi">Túi</a></li>
                        <li><a href="./Giay" title="Giày, dép">Giày, dép</a></li>
                        <li><a href="./Ao" title="Áo">Áo</a></li>
                        <li><a href="./Quan" title="Quần">Quần</a></li>
                        <li><a href="./Yem" title="Yếm">Yếm</a></li>
                        <li><a href="./ChanVay" title="Chân váy">Chân váy</a></li>
						<li><a href="./Vay" title="Váy">Váy</a></li>
						<li><a>Quản lý</a>
							<ul class="submenu">
								<li><a href="./ThemSP">Thêm sản phẩm</a></li>
							</ul>
						</li>                
                    </ul>
                </div>
            </div>
            
            <div id="hotdeals">
				<?php
					require_once "./MVC/views/pages/".$data["Page"].".php";
				?>
            </div><!--dong sanpham-->
        </div><!--dong -main-->
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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
	<script src="./public/js/main.js"></script>
	
</body>
</html>
