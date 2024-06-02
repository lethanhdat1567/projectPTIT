<div class="container">
      <div class="cart-info__admin">
        <div class="row gy-3">
          <!-- My Wallet -->
          <div class="col-12">
            <h2 class="cart-info__heading">
              <a href="<?php echo ROOT; ?>Admin/QLSP">
                <img
                  src="<?php echo ASSETS; ?>icons/arrow-left.svg"
                  alt=""
                  class="icon cart-info__back-arrow"
                />
              </a>
              Thêm ảnh
            </h2>
            <form
              action="<?php echo ROOT; ?>Admin/galeryImgs"
              method="post"
              class="form form-card"
              enctype="multipart/form-data">
            
            <?php $row = mysqli_fetch_assoc($data['product']);?>
            <input type="text" hidden name="id" value="<?php echo $row['id'] ?>">
              <!-- Form row 1 -->
              <div class="form__row">
              <div class="form__group">
                  <label for="password" class="form__label form-card__label">
                    Ảnh sản phẩm
                  </label>
                  <div class="form__text-input">
                    <input type="file" name="thumbnail[]" id="img" class="form__input" multiple/>
                  </div>
                </div>
              </div>
              <div class="form-card__bottom">
                <a
                  href="<?php echo ROOT; ?>Admin/QLSP"
                  class="btn btn--text"
                  >Cancel</a
                >
                <button name="btnAddImgs" class="btn btn--primary btn--rounded">Lưu hình ảnh</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
          $target_dir ="<?php echo ASSETS; ?>img/products/";
    ?>