
<div class='name'>
    <h3>Áo nữ</h3>
</div>
<div class="sanpham">
    <script>   
        var List=document.querySelector('.sanpham');
        
        <?php
        while($row=mysqli_fetch_array($data["Ao"]))
		{

            echo "List.innerHTML+=`";
            echo "<ul><li>";
            echo "<img src='http://localhost/DoAn/public/images/".$row["hinhanh"]."' alt='Áo nam nữ' /> ";
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

