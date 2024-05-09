
<main class="product-mana">
<div class="container">
      <div class="admin-product__wrap">
        <div class="admin-menu">
          <h2 class="admin-menu__heading">Admin Menu</h2>
          <div class="admin-menu__wrap">
            <ul class="admin-menu__list">
              <li class="admin-menu__items">
                <a href="#!" class="admin-menu__link">Home</a>
              </li>
              <li class="admin-menu__items">
                <a href="#!" class="admin-menu__link">Product Management</a>
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
          <button class="btn btn--primary admin-product__btn">
            Thêm sản phẩm
          </button>
          <table class="admin-product__table">
            <tr class="admin-product__table-wrap">
              <th class="admin-product__table-heading">Ảnh</th>
              <th class="admin-product__table-heading">Tên sản phẩm</th>
              <th class="admin-product__table-heading">Ngày cập nhật</th>
              <th class="admin-product__table-heading">Ngày tạo</th>
              <th class="admin-product__table-heading">Thao tác</th>
            </tr>
            <tr class="admin-product__table-wrap">
              <td class="admin-product__table-items">
                <img
                  class="table-items__img"
                  src="<?= $img_path ?>products/item1.png"
                  alt=""
                />
              </td>
              <td class="admin-product__table-items">CAFFE SIU NGON</td>
              <td class="admin-product__table-items">17/2/2005</td>
              <td class="admin-product__table-items">13/2/2005</td>
              <td class="admin-product__table-items">
                <div class="admin-product__wrap-btn">
                  <button class="btn btn--primary"><a href="http://localhost/projectPTIT/Admin/AddProduct">Thêm</a></button>
                  <button class="btn btn--primary"><a href="#!">Sửa</a></button>
                  <button class="btn btn--danger"><a href="#!">Xóa</a></button>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
</main>
