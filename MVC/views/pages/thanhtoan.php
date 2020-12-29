
 <section class="order-form my-4 mx-4">
    <div class="container pt-4">

      <div class="row">
        <div class="col-12">
          <h1>Thanh toán giỏ hàng</h1>
          <span>chi tiết giỏ hàng</span>
          <hr class="mt-1">
        </div>
        <div class="col-12">
        <?php
        while($row=mysqli_fetch_array($data["KH"]))
		        {
        ?>
          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Họ tên</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" value="<?php echo $row["hoten"] ?>"  >
            </div>
          </div>


          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Địa chỉ</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" value="<?php echo $row["diachi"] ?>" >
            </div>
          </div>

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Số điện thoại</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" value="<?php echo $row["sdt"] ?>">
            </div>
          </div>
        <?php } ?>
          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Tổng tiền thanh toán</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" value="<?php echo $_SESSION["tongtien"]; ?>">
            </div>
          </div>

          
          <div class="row mt-3 mx-4">
            <div class="col-12">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="validation" id="validation" value="1">
                <label for="validation" class="form-check-label">I know what I need to know</label>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-12">
              <button type="button" id="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>