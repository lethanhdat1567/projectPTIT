<div class="user-mana">
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
            <th class="admin-product__table-heading">Thao tác</th>
          </tr>
          <?php
          while ($row = mysqli_fetch_assoc($data["users"])) {
            ?>
            <tr class="admin-product__table-wrap">
              <td class="admin-product__table-items"><?php echo $row['fullname'] ?></td>
              <td class="admin-product__table-items"><?php echo $row['email'] ?></td>
              <td class="admin-product__table-items"><?php echo $row["phone_number"] ?></td>
              <td class="admin-product__table-items"><?php echo $row['address'] ?></td>
              <td class="admin-product__table-items"><?php echo $row['created_at'] ?></td>
              <td class="admin-product__table-items">
                <form id="updateRoleForm_<?php echo $row['id']; ?>" class="update-role-form" method="post"
                  action="<?php echo ROOT; ?>Admin/UpdateUserRole">
                  <input type="hidden" name="userId" value="<?php echo $row['id']; ?>">
                  <select name="role_id" class="role-select" data-user-id="<?php echo $row['id']; ?>">
                    <option value="0" <?php echo $row['role_id'] == 0 ? 'selected' : ''; ?>>User</option>
                    <option value="1" <?php echo $row['role_id'] == 1 ? 'selected' : ''; ?>>Admin</option>
                  </select>
                </form>

              </td>
              <td class="admin-product__table-items">
                <div class="admin-product__wrap-btn">
                 

                  
                  <a href="<?php echo ROOT; ?>Admin/DeleteUser/<?php echo $row['id']; ?>">
                    <button class="btn btn--danger" type="button">Xóa</button>
                  </a>
                </div>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var forms = document.querySelectorAll(".update-role-form");

        forms.forEach(function(form) {
            form.addEventListener("change", function(event) {
                var userId = this.querySelector(".role-select").getAttribute("data-user-id");
                var roleId = this.querySelector(".role-select").value;

                var data = {
                    userId: userId,
                    role_id: roleId
                };

                // Sử dụng AJAX để gửi dữ liệu
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "<?php echo ROOT; ?>Admin/UpdateUserRole", true);
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                
                                console.log("Update successful");
                                window.location.href = "<?php echo ROOT; ?>Admin/QLND";
                            } else {
                                
                                console.error("Update failed");
                            }
                        } else {
                            
                            console.error("Request failed");
                        }
                    }
                };
                xhr.send(JSON.stringify(data));
            });
        });
    });
</script>
