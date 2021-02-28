<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $data["Page"] ?> - Jolie Clothing</title>
<?php
	if ($data["Page"]=="thanhtoan")
	{
		echo "<link href='http://localhost/DoAn/public/css/giohang.css' type='text/css' rel='stylesheet' />";
		echo "<link href='http://localhost/DoAn/public/css/product.css' type='text/css' rel='stylesheet' />";
		echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
		echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
		echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>";
		echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>";
	}
	else 
	{
		echo "<link href='http://localhost/DoAn/public/css/product.css' type='text/css' rel='stylesheet' />";
	}
	
?>


<link href="http://localhost/DoAn/public/css/fontawesome-free-5.14.0/css/all.min.css" type="text/css" rel="stylesheet" />

<script src="./jquery-3.5.1.min.js"></script>

</head>

<body>

	<div id="content">
        <div id="menu_top"><!--mo menutop-->
            <div id="logo">
                <a href="http://localhost/DoAn/Home"><img src="http://localhost/DoAn/public/images/logohome1.PNG" alt="LogoJolie" /></a>
            </div>
            <div id="top_left">
                <form method="POST" action="http://localhost/DoAn/TimKiem">
					<div id="find">
						<input type="text" id="search_name" name="search_name" placeholder="<?php if(isset($_SESSION["timkiem"])){ echo $_SESSION["timkiem"]; } else{ echo "Nhập sản phẩm cần tìm"; } ?>" />
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
                        <h3><a href="http://localhost/DoAn/giohang">Giỏ hàng</a></h3>
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
						<?php
							if(isset($_SESSION["username"])){
								echo '<li><a>Chào '.$_SESSION["username"].' (^-^)</a></li>';
							}
						?>
                    </ul>
                </nav>
        	</div>
        </div> <!--dong menutop-->
        
        
        <div id="main"><!--mo main--->
        
        	<div id="menu_left">
        		<div class="main_menu">
                    <h3>Danh mục sản phẩm</h3>
                    <ul class="main_menu-list">
                        <li class="main_menu-list-item">
							<a href="./Tui" title="Túi">
								<img src="https://img.icons8.com/bubbles/35/000000/bag-front-view.png" class="icon_product"/>
								<span class="product_label">Túi</span>
							</a>
						</li>
                        <li class="main_menu-list-item">
							<a href="./Giay" title="Giày, dép">
								<img src="https://img.icons8.com/cotton/35/000000/women-shoes.png" class="icon_product"/>
								<span class="product_label">Giày, dép</span>
							</a>
						</li>
                        <li class="main_menu-list-item">
							<a href="./Ao" title="Áo">
								<img src="https://img.icons8.com/clouds/38/000000/t-shirt.png" class="icon_product"/>
								<span class="product_label">Áo</span>
							</a>
						</li>
                        <li class="main_menu-list-item">
							<a href="./Quan" title="Quần">
								<img src="https://img.icons8.com/color/32/000000/long-shorts.png" class="icon_product"/>
								<span class="product_label">Quần</span>
							</a>
						</li>
                        <li class="main_menu-list-item">
							<a href="./Yem" title="Yếm">
								<img src="https://img.icons8.com/dusk/35/000000/standing-woman.png" class="icon_product"/>
								<span class="product_label">Yếm</span>
							</a>
						</li>
                        <li class="main_menu-list-item">
							<a href="./ChanVay" title="Chân váy">
								<img src="https://img.icons8.com/doodle/35/000000/skirt.png" class="icon_product"/>
								<span class="product_label">Chân váy</span>
							</a>
						</li>
						<li class="main_menu-list-item">
							<a href="./Vay" title="Váy">
								<img src="https://img.icons8.com/officel/30/000000/dress-back-view.png" class="icon_product"/>	
								<span class="product_label">Váy</span>
							</a>
						</li>
						<?php
							
							if( isset($_SESSION["quyen"])){
								echo "<li class='main_menu-list-item main_menu-list-item--user'>
										<a>
											<img src='https://img.icons8.com/officel/30/000000/change-user-male.png' class='icon_product'/>
											<span class='product_label'> Cài đặt tài khoản </span>
 										</a>";
								echo "<ul class='submenu'>";
								echo "";
								echo "<li class='main_menu-list-item'><a href='./SuaKH'>Sửa tài khoản</a></li>";
								if($_SESSION["quyen"]==0){
									echo "<li class='main_menu-list-item'><a href='http://localhost/DoAn/Listhd/hoadonkh'>Hóa đơn mua hàng</a></li>";
								}
								echo "</ul>";
								echo "</li> ";
							}
							if( isset($_SESSION["quyen"]) && $_SESSION["quyen"]==1 ){
								echo "<li class='main_menu-list-item main_menu-list-item--user'>
										<a>
											<img src='https://img.icons8.com/cotton/32/000000/management.png' class='icon_product'/>
											<span class='product_label'> Quản lý </span>
										</a>";
								echo "<ul class='submenu'>";
								echo "";
								echo "<li class='main_menu-list-item'><a href='./ThemSP'>Thêm sản phẩm</a></li>";
								echo "<li class='main_menu-list-item'><a href='./XoaSP'>Xóa sản phẩm</a></li>";
								echo "<li class='main_menu-list-item'><a href='./SuaSP'>Cập nhật sản phẩm</a></li>";
								echo "<li class='main_menu-list-item'><a href='./XoaKH'>Xóa khách hàng</a></li>";
								echo "<li class='main_menu-list-item'><a href='http://localhost/Doan/ListHD/danhsach'>Danh sách hóa đơn</a></li>";
								echo "</ul>";
								echo "</li> ";
							}
						?>
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
	<script src="./public/js/ajaxJS.js"></script>

</body>
</html>
