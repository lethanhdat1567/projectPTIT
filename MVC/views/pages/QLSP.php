
<main class="product-mana">
<div class="container">
      <div class="admin-product__wrap">
        <div class="admin-menu">
          <h2 class="admin-menu__heading">Admin Menu</h2>
          <div class="admin-menu__wrap">
            <ul class="admin-menu__list">
              <li class="admin-menu__items">
                <a href="http://localhost/projectPTIT/Home/Main" class="admin-menu__link">Home</a>
              </li>
              <li class="admin-menu__items">
                <a href="http://localhost/projectPTIT/Admin/QLSP" class="admin-menu__link">Product Management</a>
              </li>
              <li class="admin-menu__items">
                <a href="#!" class="admin-menu__link">User Management</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="admin-products">
          <div class="admin-product__header">
            <h2 class="admin-product__heading">Danh sách sản phẩm</h2>
          </div>
          <a href="http://localhost/projectPTIT/Admin/AddProduct">
          <button class="btn btn--primary admin-product__btn">
            Thêm sản phẩm
          </button>
          </a>
          <table class="admin-product__table">
            <tr class="admin-product__table-wrap">
              <th class="admin-product__table-heading">Ảnh</th>
              <th class="admin-product__table-heading">Tên sản phẩm</th>
              <th class="admin-product__table-heading">Ngày cập nhật</th>
              <th class="admin-product__table-heading">Ngày tạo</th>
              <th class="admin-product__table-heading">Mô tả</th>
              <th class="admin-product__table-heading">Thao tác</th>
            </tr>
            <!-- Render code tai day -->
            <?php while($row = mysqli_fetch_assoc($data["products"])){ ?>
            <tr class="admin-product__table-wrap">
              <td class="admin-product__table-items">
                <img
                  class="table-items__img"
                  src="<?= $img_path ?>products/<?php echo $row['thumbnail'] ?>"
                  alt=""
                />
              </td>
              <td class="admin-product__table-items"><?php echo $row['name'] ?></td>
              <td class="admin-product__table-items"><?php echo$row['updated_at'] ?></td>
              <td class="admin-product__table-items"><?php echo $row['created_at'] ?></td>
              <td class="admin-product__table-items"><p class="admin-product__table-items-desc"><?php echo $row['description'] ?></p></td>
              <td class="admin-product__table-items">
                <div class="admin-product__wrap-btn">
                <a href="http://localhost/projectPTIT/Admin/UpdateProduct/<?php echo $row['id'] ?>">
                  <button class="btn btn--info">
                    Sửa
                  </button>
                </a>
                <a href="http://localhost/projectPTIT/Admin/DeleteProduct/<?php echo $row['id'] ?>">
                  <button class="btn btn--danger">
                      Xóa
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
