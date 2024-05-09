<div class="container">
      <div class="cart-info__admin">
        <div class="row gy-3">
          <!-- My Wallet -->
          <div class="col-12">
            <h2 class="cart-info__heading">
              <a href="http://localhost/projectPTIT/Admin/QLSP">
                <img
                  src="<?= $icon_path ?>arrow-left.svg"
                  alt=""
                  class="icon cart-info__back-arrow"
                />
              </a>
              Thêm sản phẩm
            </h2>
            <form
              action="http://localhost/projectPTIT/Admin/Product"
              method="post"
              class="form form-card"
              enctype="multipart/form-data";
            >
              <!-- Form row 1 -->
              <div class="form__row">
                <!-- Tên sản phẩm -->
                <div class="form__group">
                  <label for="product" class="form__label form-card__label">
                    Tên sản phẩm
                  </label>
                  <div class="form__text-input">
                    <input
                      type="text"
                      placeholder="Tên sản phẩm..."
                      name="ProductName"
                      id="product"
                      class="form__input"
                      required
                      autofocus
                    />
                  </div>
                </div>
                <!-- Giá sản phẩm -->
                <div class="form__group">
                  <label for="price" class="form__label form-card__label">
                    Giá sản phẩm
                  </label>
                  <div class="form__text-input">
                    <input
                      type="text"
                      placeholder="Giá sản phẩm"
                      name="ProductPrice"
                      id="price"
                      class="form__input"
                      required
                    />
                  </div>
                </div>
              </div>
              <!-- Form row 2 -->
              <div class="form__row-admin">
                <!-- Mô tả -->
                <div class="form__group">
                  <label for="desc" class="form__label form-card__label">
                    Mô tả sản phẩm
                  </label>
                  <div class="">
                    <textarea rows="4" cols="50" name="ProductDesc" id="desc" class="form__text-area"></textarea>
                  </div>
                </div>
                <!-- Img -->
                <div class="form__group">
                  <label for="password" class="form__label form-card__label">
                    Ảnh sản phẩm
                  </label>
                  <div class="form__text-input">
                    <input type="file" name="thumbnail" id="img" class="form__input" />
                  </div>
                </div>
              </div>
              <div class="form-card__bottom">
                <a
                  href="http://localhost/projectPTIT/Admin/QLSP"
                  class="btn btn--text"
                  >Cancel</a
                >
                <button name="btnAdd" class="btn btn--primary btn--rounded">Save card</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
          $target_dir ="<?= $img_path ?>products/";
    ?>