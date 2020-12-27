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
                            $('.input__group img').attr("src", "./public/images/"+data[0]["hinhanh"]);
                        }
                    })
                })
            }
        })
    })
})