$(document).ready(function() {
    // đặt mua
    $(".btn__buy-product").click(function(e) {
        var price=e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.dataSP tbody tr:nth-child(4) td').innerText;
        price=+price.slice(0, price.length-2);

        var objSP={
            linkImg: e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.data_left img').getAttribute('src'),
            tensp: e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.dataSP tbody tr:first-child td').innerText,
            gia: price,
            soluong: +e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.data_right-numberSP .input-soluongsp').value,
            masp: e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.dataSP tbody tr:nth-child(2) td').innerText
        };

        $.get("http://localhost/DoAn/ajaxGH.php", {
            item: objSP
        }, function(data) {
            if (data=="Add done")
                window.location="http://localhost/DoAn/giohang";
            if (data=="nouser")
                window.location="http://localhost/DoAn/DangNhap";
        });
    })

    // thêm vào giỏ hàng
    $(".btn__addToCart").click(function(e) {
        var price=e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.dataSP tbody tr:nth-child(4) td').innerText;
        price=+price.slice(0, price.length-2);

        var objSP={
            linkImg: e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.data_left img').getAttribute('src'),
            tensp: e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.dataSP tbody tr:first-child td').innerText,
            gia: price,
            soluong: +e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.data_right-numberSP .input-soluongsp').value,
            masp: e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.dataSP tbody tr:nth-child(2) td').innerText
        };

        $.get("http://localhost/DoAn/ajaxGH.php", {
            item: objSP
        }, function(data) {
            if (data=="Add done")
                alert("Đã thêm vào giỏ hàng :))");
            if (data=="nouser")
                window.location="http://localhost/DoAn/DangNhap";
        });
    })
})