<div class="user-mana">
<div class="container">
      <div class="admin-product__wrap">
        <div class="admin-menu">
          <h2 class="admin-menu__heading">Admin Menu</h2>
          <div class="admin-menu__wrap">
            <ul class="admin-menu__list">
              <li class="admin-menu__items">
                <a
                  href="http://localhost/projectPTIT/Home/Main"
                  class="admin-menu__link"
                  >Home</a
                >
              </li>
              <li class="admin-menu__items">
                <a
                  href="http://localhost/projectPTIT/Admin/QLSP"
                  class="admin-menu__link"
                  >Product Management</a
                >
              </li>
              <li class="admin-menu__items">
                <a href="http://localhost/projectPTIT/Admin/QLND" class="admin-menu__link">User Management</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="admin-products">
          <div class="admin-product__header">
            <h2 class="admin-product__heading">Danh sách người dùng</h2>
          </div>
          <table class="admin-product__table">
            <tr class="admin-product__table-wrap">
              <th class="admin-product__table-heading">Tên</th>
              <th class="admin-product__table-heading">Email</th>
              <th class="admin-product__table-heading">Phone</th>
              <th class="admin-product__table-heading">Địa chỉ</th>
              <th class="admin-product__table-heading">Ngày tạo</th>
              <th class="admin-product__table-heading">Role</th>
            </tr>
            <?php
              while($row = mysqli_fetch_assoc($data["users"])){
            ?>
            <tr class="admin-product__table-wrap">
              <td class="admin-product__table-items"><?php echo $row['fullname'] ?></td>
              <td class="admin-product__table-items">
              <?php echo $row['email'] ?>
              </td>
              <td class="admin-product__table-items"><?php echo $row["phone_number"] ?></td>
              <td class="admin-product__table-items">
              <?php echo $row['address'] ?>
              </td>
              <td class="admin-product__table-items"><?php echo $row['created_at'] ?></td>
              <td class="admin-product__table-items"><?php echo $row['role_id'] ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
</div>