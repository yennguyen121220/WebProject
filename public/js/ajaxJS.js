// xử lý ajax hiển thị sp cần sửa và xóa 
$(document).ready(function() {
    // ajax chọn loại sp
    $("#loai").change(function(e) {
        $.ajax({
            url: "./ajaxSP.php",
            type: "get",
            dataType: "json",
            data: {
                loai: e.target.value
            },
            success: function(data) {
                var str="";
                for (var i=0;i<data.length;i++)
                {
                    str+=`<option value=${data[i]["masp"]}>${data[i]["tensp"]}</option>`;
                }
                $("#ten").html(str);
                $('input[name="masp"]').val(data[0]["masp"]);
                $('input[name="loai"]').val(data[0]["loai"]);
                $('input[name="tensp"]').val(data[0]["tensp"]);
                $('input[name="gia"]').val(data[0]["gia"]);
                $('input[name="mota"]').val(data[0]["mota"]);
                $('input[name="tenhinhanh"]').val("./public/images/"+data[0]["hinhanh"]);
                $('.input__group img').attr("src", "./public/images/"+data[0]["hinhanh"]);
                
                // ajax chọn tên sp
                $("#ten").change(function(e) {
                    $.ajax({
                        url: "./ajaxSP.php",
                        type: "get",
                        dataType: "json",
                        data: {
                            masp: e.target.value
                        },
                        success: function(data) {
                            $('input[name="masp"]').val(data[0]["masp"]);
                            $('input[name="loai"]').val(data[0]["loai"]);
                            $('input[name="tensp"]').val(data[0]["tensp"]);
                            $('input[name="gia"]').val(data[0]["gia"]);
                            $('input[name="mota"]').val(data[0]["mota"]);
                            $('input[name="tenhinhanh"]').val("./public/images/"+data[0]["hinhanh"]);
                            $('.input__group img').attr("src", "./public/images/"+data[0]["hinhanh"]);
                        }
                    })
                })
            }
        })
    })

    // ajax chọn username
    $("#usernameKH").change(function(e) {
        $.ajax({
            url: "./ajaxKH.php",
            type: "get",
            dataType: "json",
            data: {
                username: e.target.value
            },
            success: function(data) {
                $('input[name="fullname"]').val(data[0]["hoten"]);
                $('input[name="phoneNumber"]').val(data[0]["sdt"]);
            }
        })
    })

    // ajax chọn đặt mua hàng
    var btnBuys=$(".btn-chonmua").toArray();
    var countCart=0;
    for (var i=0;i<btnBuys.length;i++)
    {
        $(btnBuys[i]).click(function(e) {
            e.target.setAttribute("disabled", "true");
            countCart++;
            var objSP={
                'linkImg': e.target.parentNode.parentNode.querySelector("img").getAttribute("src"),
                'tensp':  e.target.parentNode.querySelector("label span").innerText,
                'gia': +e.target.parentNode.querySelector("span#gia").innerText
            };

            $.get("./ajaxGH.php", {
                item: objSP,
                countCart: countCart
            }, function(data) {
                // xử lý session k xử lý data
            })
        })
    }
})