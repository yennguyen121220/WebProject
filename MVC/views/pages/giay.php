
<div class='name'>
    <h3>Giày, dép</h3>
</div>
<div class="sanpham">
    <script>   
        var List=document.querySelector('.sanpham');
        
        <?php
        while($row=mysqli_fetch_array($data["Giay"]))
		{

            echo "List.innerHTML+=`";
            echo "<ul><li>";
            echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Giày, dép' /> ";
			echo "<div id='thongtin'> <span>"	;		
			echo "<label>".$row["tensp"]."<br><em>thời trang thu đông</em></label>";
            echo "<p>Giá: <span id='gia'>".$row["gia"]."</span></p>";
			echo "<form class='chonmua'>";
            echo "<button class='btn-chonmua'>Đặt mua</button>";
            echo "<a href='http://localhost/DoAn/ChiTietSP/ChiTiet/".$row["masp"]."' class='chonmua'>Chi tiết</a>";
            echo "</form></span></div></li></ul>";
            echo "`;";
        }
        ?>
    </script>
</div>

