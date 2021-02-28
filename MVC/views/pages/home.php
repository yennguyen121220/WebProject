
<div id="container">
    <img src="http://localhost/DoAn/public/images/banner4.PNG">
    <img src="http://localhost/DoAn/public/images/banner1.png">
    <img src="http://localhost/DoAn/public/images/banner3.png">
    <img src="http://localhost/DoAn/public/images/banner2.PNG">
</div>
<div class="name">
	<h3>Sản phẩm nổi bật </h3>
</div>
<div class="sanpham">
    <script>
		var List=document.querySelector('.sanpham');
        <?php
			while($row=mysqli_fetch_array($data["GioiThieu"]))
			{
				echo "List.innerHTML+=`";
				echo "<ul><li>";
				echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Áo nam nữ' /> ";
				echo "<div id='thongtin'>"	;		
				echo "<label><span>".$row["tensp"]."</span><br><em>thời trang thu đông</em></label>";
				
				echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
				// echo "<form class='chonmua'>";
				// echo "<button class='btn-chonmua'>Đặt mua</button>";
				echo "<a href='http://localhost/DoAn/ChiTietSP/ChiTiet/".$row["masp"]."' class='chonmua'>Chi tiết</a>";
				// echo "</form></div></li></ul>";
				echo "<p style='display:none;'>".$row["masp"]."<p>";
				echo "</div></li></ul>";
				echo "`;";
			}
		?>
	</script>
	
	
</div> 
<div class="name">
	<a href ="./Tui"><h3>Xem thêm</h3></a>
</div>
