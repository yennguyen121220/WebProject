<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["Page"] ?> - Jolie Clothing</title>
    <!-------- nhúng icon ----------->
	<link rel="stylesheet" type="text/css" href="http://localhost/DoAn/public/css/fontawesome-free-5.14.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<!-- dành cho đăng ký và đăng nhập -->
	<?php
        echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/".$data["Page"].".css'>";
	?>
	<?php
		if($data["Page"]=="themsp" || $data["Page"]=="suasp" || $data["Page"]=="xoasp" || $data["Page"]=="suakh" || $data["Page"]=="xoakh")
			echo "<link rel='stylesheet' href='http://localhost/DoAn/public/css/dangky.css'>";
	?>

	<?php
		if ($data["Page"]=="suasp" || $data["Page"]=="xoasp" || $data["Page"]=="xoakh")
		{?>
			<script src="./public/js/ajaxJS.js"></script>
		<?php }
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
                                <li><a href="http://localhost/DoAn/DangKy" title="Đăng ký">Đăng ký</a></li>
                                <!-- <li><a href="http://localhost/DoAn/DangNhap" title="Đăng nhập">Đăng nhập</a></li> -->
								
                                <li>
									<?php if(isset($_SESSION['user_id'])) : ?>
										<a href="http://localhost/DoAn/DangNhap">Dangxuat</a>
									<?php else : ?>
										<a href="http://localhost/DoAn/DangNhap">DangNhap</a>
									<?php endif; ?>
								</li>
								<!-- <li><a>Dang xuat</a></li> -->
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
		var check_showPassword=document.querySelector('input[name="showPass"]');
        var icon_hide=document.querySelector(".icon-hide");
        var icon_show=document.querySelector(".icon-show");
        var password=document.querySelector('input[name="password"]');
		var retype_password=document.querySelector('input[name="retype_password"]');
		if (icon_hide!=null && icon_show!=null)
		{
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
		}
		
		if (check_showPassword!=null)
		{
			check_showPassword.onchange=function(e) {
				if (e.target.checked)
				{
					password.setAttribute('type','text');
					retype_password.setAttribute('type','text');
				}
				else
				{
					password.setAttribute('type','password');
					retype_password.setAttribute('type','password');
				}
			}   
		}
		
	</script>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="./public/js/main.js"></script>
	<?php if(isset($data["result"])) {?>
		<script>
			swal({
				title:"Good job!",
				text:"welcome you!",
				icon: "success",
				button: "Aww tiss!",
			});
		</script>
	<?php } ?>
</body>
</html>