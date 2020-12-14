
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
			while($row=mysqli_fetch_array($data["TuiGT"]))
			{
				echo "List.innerHTML+=`";
				echo "<ul><li>";
				echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Túi' /> ";
				echo "<div id='thongtin'> <span>"	;		
				echo "<label>".$row["tensp"]."<br><em>thời trang thu đông</em></label>";
				echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
				echo "<form class='chonmua'>";
				echo "<input type='button' value='Thêm vào giỏ'>";
				echo "</form></span></div></li></ul>";
				echo "`;";
			}
		?>
	</script>
</div> 
<div class="sanpham">
    <script>
		var List=document.querySelector('.sanpham');
        <?php
			while($row=mysqli_fetch_array($data["GiayGT"]))
			{
				echo "List.innerHTML+=`";
				echo "<ul><li>";
				echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Giày' /> ";
				echo "<div id='thongtin'> <span>"	;		
				echo "<label>".$row["tensp"]."<br><em>thời trang thu đông</em></label>";
				echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
				echo "<form class='chonmua'>";
				echo "<input type='button' value='Thêm vào giỏ'>";
				echo "</form></span></div></li></ul>";
				echo "`;";
			}
		?>
	</script>
</div> 
<div class="sanpham">
    <script>
		var List=document.querySelector('.sanpham');
        <?php
			while($row=mysqli_fetch_array($data["AoGT"]))
			{
				echo "List.innerHTML+=`";
				echo "<ul><li>";
				echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Áo' /> ";
				echo "<div id='thongtin'> <span>"	;		
				echo "<label>".$row["tensp"]."<br><em>thời trang thu đông</em></label>";
				echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
				echo "<form class='chonmua'>";
				echo "<input type='button' value='Thêm vào giỏ'>";
				echo "</form></span></div></li></ul>";
				echo "`;";
			}
		?>
	</script>
</div> 
<div class="sanpham">
    <script>
		var List=document.querySelector('.sanpham');
        <?php
			while($row=mysqli_fetch_array($data["ChanVayGT"]))
			{
				echo "List.innerHTML+=`";
				echo "<ul><li>";
				echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Chân váy' /> ";
				echo "<div id='thongtin'> <span>"	;		
				echo "<label>".$row["tensp"]."<br><em>thời trang thu đông</em></label>";
				echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
				echo "<form class='chonmua'>";
				echo "<input type='button' value='Thêm vào giỏ'>";
				echo "</form></span></div></li></ul>";
				echo "`;";
			}
		?>
	</script>
</div> 
<div class="sanpham">
    <script>
		var List=document.querySelector('.sanpham');
        <?php
			while($row=mysqli_fetch_array($data["QuanGT"]))
			{
				echo "List.innerHTML+=`";
				echo "<ul><li>";
				echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Quần' /> ";
				echo "<div id='thongtin'> <span>"	;		
				echo "<label>".$row["tensp"]."<br><em>thời trang thu đông</em></label>";
				echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
				echo "<form class='chonmua'>";
				echo "<input type='button' value='Thêm vào giỏ'>";
				echo "</form></span></div></li></ul>";
				echo "`;";
			}
		?>
	</script>
</div> 
<div class="sanpham">
    <script>
		var List=document.querySelector('.sanpham');
        <?php
			while($row=mysqli_fetch_array($data["VayGT"]))
			{
				echo "List.innerHTML+=`";
				echo "<ul><li>";
				echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Váy' /> ";
				echo "<div id='thongtin'> <span>"	;		
				echo "<label>".$row["tensp"]."<br><em>thời trang thu đông</em></label>";
				echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
				echo "<form class='chonmua'>";
				echo "<input type='button' value='Thêm vào giỏ'>";
				echo "</form></span></div></li></ul>";
				echo "`;";
			}
		?>
	</script>
</div> 
<div class="sanpham">
    <script>
		var List=document.querySelector('.sanpham');
        <?php
			while($row=mysqli_fetch_array($data["YemGT"]))
			{
				echo "List.innerHTML+=`";
				echo "<ul><li>";
				echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Yếm' /> ";
				echo "<div id='thongtin'> <span>"	;		
				echo "<label>".$row["tensp"]."<br><em>thời trang thu đông</em></label>";
				echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
				echo "<form class='chonmua'>";
				echo "<input type='button' value='Thêm vào giỏ'>";
				echo "</form></span></div></li></ul>";
				echo "`;";
			}
		?>
	</script>
</div> 
<div class="name">
	<a href ="./Tui"><h3>Xem thêm</h3></a>
</div>