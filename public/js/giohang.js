$(document).ready(function() {

    // điều chỉnh số lượng sp
    var slInput=$('input[type="number"]').toArray();
    for (var i=0;i<slInput.length;i++) 
    {
        $(slInput[i]).change(function(e) {
            console.log();
            $.get("./ajaxGH.php", {
                indexSL: +e.target.parentNode.parentNode.querySelector('.actions button').id.slice(5),
                valueSL: +e.target.value
            }, function(data) {
                if (data=="nouser")
                    window.location="http://localhost/DoAn/DangNhap";
            })
        })
    }

    // xóa sp trong giỏ hàng
    var btnDels=$(".actions button").toArray();
    for (var i=0;i<btnDels.length;i++) 
    {    
            $(btnDels[i]).click(function(e) {
                e.target.parentNode.parentNode.remove();
                $.get("./ajaxGH.php", {
                    indexSP: +e.target.id.slice(5)
                }, function(data) {
                    if (data=="nouser")
                        window.location="http://localhost/DoAn/DangNhap";
                })
            })
    }

    // thanh toán
    $('.payment').click(function(e) {
        var arrSL=$('.numberSP').toArray();
        var arrDonGia=$('.priceSP').toArray();
        var tongtien=0;
        for (var i=0;i<arrSL.length;i++) {
            tongtien+=arrSL[i].value*arrDonGia[i].innerText;
        }
        $.get("./ajaxGH.php", {
            totalMoney: tongtien
        }, function(data) {
            if (data=="Payment Done")
                window.location="http://localhost/DoAn/ThanhToan";
            if (data=="nouser")
                window.location="http://localhost/DoAn/DangNhap";
        })
    })

})
