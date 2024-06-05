
<main class="product-mana">
<div class="container">
      <div class="admin-product__wrap">
        <div class="admin-menu">
          <h2 class="admin-menu__heading">Admin Menu</h2>
          <div class="admin-menu__wrap">
            <ul class="admin-menu__list">
              <li class="admin-menu__items">
                <a href="<?php echo ROOT; ?>Admin/Main" class="admin-menu__link">Home</a>
              </li>
              <li class="admin-menu__items">
                <a href="<?php echo ROOT; ?>Admin/QLSP" class="admin-menu__link">Product Management</a>
              </li>
              <li class="admin-menu__items">
                <a href="<?php echo ROOT; ?>Admin/QLND" class="admin-menu__link">User Management</a>
              </li>
              <li class="admin-menu__items">
              <a href="<?php echo ROOT; ?>Admin/Chart" class="admin-menu__link">Thống kê</a>
            </li>
            </ul>
          </div>
        </div>
        <div class="admin-products">
          <div class="admin-product__header">
            <h2 class="admin-product__heading">Danh sách sản phẩm</h2>
          </div>
          <a href="<?php echo ROOT; ?>Admin/AddProduct">
          <button class="btn btn--primary admin-product__btn">
            Thêm sản phẩm
          </button>
          </a>
          <table class="admin-product__table">
            <tr class="admin-product__table-wrap">
              <th class="admin-product__table-heading">Ảnh</th>
              <th class="admin-product__table-heading">Tên sản phẩm</th>
              <th class="admin-product__table-heading">Ngày cập nhật</th>
              <th class="admin-product__table-heading">Giá</th>
              <th class="admin-product__table-heading">Giảm giá</th>
              <th class="admin-product__table-heading">Mô tả</th>
              <th class="admin-product__table-heading">Thao tác</th>
            </tr>
            <!-- Render code tai day -->
            <?php while($row = mysqli_fetch_assoc($data["products"])){ ?>
            <tr class="admin-product__table-wrap">
              <td class="admin-product__table-items">
                <img
                  class="table-items__img"
                  src="<?php echo ASSETS; ?>img/products/<?php echo $row['thumbnail'] ?>"
                  alt=""
                />
              </td>
              <td class="admin-product__table-items"><?php echo $row['name'] ?></td>
              <td class="admin-product__table-items"><?php echo$row['updated_at'] ?></td>
              <td class="admin-product__table-items"><?php $price = $row['price'];
                $formattedPrice = number_format($price, 0, ',', '.');
                echo $formattedPrice; ?></td>
              <td class="admin-product__table-items"><?php echo $row['discount'] ?>%</td>
              <td class="admin-product__table-items"><p class="admin-product__table-items-desc"><?php echo $row['description'] ?></p></td>
              <td class="admin-product__table-items">
                <div class="admin-product__wrap-btn">
                <a href="<?php echo ROOT; ?>Admin/UpdateProduct/<?php echo $row['id'] ?>">
                  <button class="btn btn--info">
                    Sửa
                  </button>
                </a>
                <a href="<?php echo ROOT; ?>Admin/DeleteProduct/<?php echo $row['id'] ?>">
                  <button class="btn btn--danger" name="btnadminxoa" method="post">
                      Xóa
                    </button>
                  </a>
                  <a href="<?php echo ROOT; ?>Admin/AddImg/<?php echo $row['id'] ?>">
                  <button class="btn" style="background-color: green; color: #fff">
                    Thêm ảnh 
                  </button>
                </a>
                </div>
              </td>
              <!-- dung viec render -->
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
</main>
