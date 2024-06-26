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
              Thêm sản phẩm
            </h2>
            <form
              action="<?php echo ROOT; ?>Admin/Product"
              method="post"
              class="form form-card"
              enctype="multipart/form-data"
            >
            <?php $row = mysqli_fetch_assoc($data['product']);?>
            <input type="text" hidden name="id" value="<?php echo $row['id'] ?>">
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
                      value="<?php echo $row['name'] ?>"
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
                      value="<?php echo $row['price'] ?>"
                      required
                    />
                  </div>
                </div>
                <!-- Giam gia -->
                <div class="form__group">
                  <label for="price" class="form__label form-card__label">
                    Giảm giá
                  </label>
                  <div class="form__text-input">
                    <input
                      type="text"
                      placeholder="Giảm giá..."
                      name="ProductDiscount"
                      id="discount"
                      class="form__input"
                      value="<?php echo $row['discount'] ?>"
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
                    <textarea rows="4" cols="50" name="ProductDesc" id="desc" class="form__text-area"><?php echo $row['description'] ?></textarea>
                  </div>
                </div>
                <!-- Img -->
                <div class="form__group">
                  <label for="password" class="form__label form-card__label">
                    Ảnh chính của sản phẩm
                  </label>
                  <div class="form__text-input">
                    <input type="file" name="thumbnail" id="img" class="form__input" />
                  </div>
                </div>
                <div class="form__group">
                  <?php 
                  // Fetch all rows as an array of arrays
                  $arrGalery = [];
                  while ($gar = mysqli_fetch_assoc($data["galery"])) {
                      $arrGalery[] = $gar;
                  }
                  ?>
                  <p class="form__imgs-desc">Ảnh phụ của sản phẩm</p>
                  <a href="<?php echo ROOT; ?>Admin/AddImg/<?php echo $row['id']; ?>" class="form__imgs-Btn btn btn--primary <?php echo (count($arrGalery) < 3) ? 'show' : ''; ?>">Thêm ảnh</a>
                  <div class="form__imgs-wrapper">
                      <?php foreach ($arrGalery as $galery) { ?>
                          <div class="form__imgs-wrap">
                            <img src="<?php echo ASSETS ?>img/products/<?php echo $galery['thumbnail']; ?>" alt="" class="form__imgs-galery">
                            <a href="<?php echo ROOT ?>Admin/DeleteGalery/<?php echo $galery['id'] ?>" class="btn btn--danger form__imgs-BtnDelete">Xóa</a>
                          </div>
                      <?php } ?>
                  </div>
              </div>
              <div class="form-card__bottom">
                <a
                  href="<?php echo ROOT; ?>Admin/QLSP"
                  class="btn btn--text"
                  >Cancel</a
                >
                <button name="btnUpdate" class="btn btn--primary btn--rounded">Save card</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
          $target_dir ="<?php echo ASSETS; ?>img/products/";
    ?>