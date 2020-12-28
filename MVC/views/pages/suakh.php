<div class="main__form-wrap" align="center">
    <div class="main_form-container">
        <form action="./SuaKH" method="POST">
            <h2 class="form-heading">Sửa mật khẩu</h2>

            <div class="input__group">
                <input type="text" name="username" placeholder="Tên tài khoản">
            </div>
            <div class="input__group">
                <input type="text" name="fullname" placeholder="Họ và tên" readonly>
            </div>
            <div class="input__group">
                <input type="password" name="oldpassword" placeholder="Mật khẩu cũ" required>
                <p class="confirm-old-message"></p>
            </div>
            <div class="input__group">
                <input type="password" name="newpassword" placeholder="Mật khẩu mới" required>
            </div>
            <div class="input__group">
                <input type="password" name="confirmpassword" placeholder="Xác nhận mật khẩu" required>
                <p class="confirm-message"></p>
            </div>
        
            <div class="input__group-submit-btn">
                <input type="submit" value="Sửa mật khẩu" name="UpdatePassword" >
            </div>
            
        </form>
        <h1>
            <?php
                if (isset($data['Kq']))
                {
                    echo $data['Kq'];
                }
            ?>
        </h1>
    </div>
</div>

<script>
    var confirmInput=document.querySelector('input[name="confirmpassword"]');
    var confirmOldInput=document.querySelector('input[name="oldpassword"]');
    confirmInput.oninput=function(e) {
        var password=document.querySelector('input[name="newpassword"]').value;
        var confirmPassword=e.target.value;
        if (confirmPassword===password)
        {
            document.querySelector('p.confirm-message').innerText="Xác thực đúng";
            document.querySelector('input[name="UpdatePassword"]').setAttribute("type", "submit");
        }
        else 
        {
            document.querySelector('p.confirm-message').innerText="Xác thực sai";
            document.querySelector('input[name="UpdatePassword"]').setAttribute("type", "button");
        }
        document.querySelector('p.confirm-message').style.display="block";
    }
    // var url=window.location.href;
    // if(url=="http://localhost/DoAn/SuaKH/XuLySua")
    // {
    //     setTimeout(function() {
    //         window.location="http://localhost/DoAn/SuaKH";
    //     }, 20);
    // }

</script>