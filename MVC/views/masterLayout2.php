<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["Page"] ?> - Jolie Clothing</title>
    <!-------- nhúng icon ----------->
	<link rel="stylesheet" type="text/css" href="http://localhost/DoAn/public/css/fontawesome-free-5.14.0/css/all.min.css">
	<?php
        echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/".$data["Page"].".css'>";
    ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<?php
		if ($data["Page"]=="suakh" || $data["Page"]=="xoakh")
		{?>
			<script src="./public/js/ajaxKH.js"></script>
		<?php }
	?>
	<?php
		if ($data["Page"]=="suasp" || $data["Page"]=="xoasp")
		{?>
			<script src="./public/js/ajaxJS.js"></script>
		<?php }
	?>
	<?php
		if($data["Page"]=="dangnhap")
			echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/dangnhap.css' />";
		else
		{
			if($data["Page"]=="giohang"){
				echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/dangky.css' />";
				echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/giohang.css' />";
				echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>";
				echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>";
				echo "<script src='js/jquery-1.11.1.min.js'></script>";
			}
			if($data["Page"]=="listhd"){
				echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/listhd.css' />";
			}
			else{
				echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/dangky.css' />";
			}
		}
		
	?> 
</head>
<body>
    <div class="container">
        <header>
            <div id="menu_top"><!--mo menutop-->
                <div id="logo">
                    <a href="http://localhost/DoAn/Home"><img src="http://localhost/DoAn/public/images/logohome1.png" alt="LogoJolie" /></a>
                </div>
                <div id="top_left">
					<form method="POST" action="http://localhost/DoAn/TimKiem">
						<div id="find">
							<input type="text" id="search_name" name="search_name" placeholder="Nhập sản phẩm cần tìm" />
							<a id="btnFind" name="timkiem">Tìm kiếm</a>
						</div>
					</form>
                    <div id="qoute">
                        <h2>Yêu bản thân, may mắn tự nhiên tới</h2> 
                    </div>
                </div>
                <div id="top_right">
                    <div id="right_top">
                        <div id="right">
                            <ul>
                                <li><a href="http://localhost/DoAn/DangKy" title="Đăng ký">Đăng ký</a></li>
                                <?php
								if(isset($_SESSION["quyen"]))
									{
										echo "<li><a href='http://localhost/DoAn/Unset' title='Đăng xuất'>Đăng xuất</a></li>";
									}
                            	else{
									echo "<li><a href='http://localhost/DoAn/DangNhap' title='Đăng Nhập'>Đăng nhập</a></li>";
								}
							?>
                            </ul>
                        </div>
                        <div id="left">
                            <h3><a href="http://localhost/DoAn/GioHang">Giỏ hàng</a></h3>
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
	
	<script src="./public/js/main.js"></script>

</body>
</html>