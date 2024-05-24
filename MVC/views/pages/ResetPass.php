<main class="auth">
    <!-- Auth intro -->
    <div class="auth__intro d-md-none">
        <img src="<?php echo ASSETS; ?>img/auth/auth-1.svg" alt="" class="auth__intro-img" />
        <p class="auth__intro-text">
            The best of luxury brand values, high quality products, and innovative services
        </p>
    </div>
    <!-- Auth content -->
    <div class="auth__content">
        <div class="auth__content-inner">
            <!-- logo -->
            <a href="<?php echo ROOT; ?>All/Main" class="logo">
                <img src="<?php echo ASSETS; ?>icons/logo.svg" alt="" class="logo__img" />
                <h2 class="logo__title">grocemart</h2>
            </a>
            <h1 class="auth__heading">Change Password</h1>
            <form action="<?php echo ROOT; ?>User/UpdatePassWord" class="form auth__form" method="post">
            <div class="form__group">
              <div class="form__text-input">
                <input
                  type="password"
                  placeholder="Nhập mật khẩu mới"
                  name="newpassword"
                  id=""
                  class="form__input"
                  required
                  minlength="6"
                />
                <img
                  src="<?php echo ASSETS; ?>icons/form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
                <img
                  src="<?php echo ASSETS; ?>icons/lock.svg"
                  alt=""
                  class="form__input-icon"
                />
              </div>
              <p class="form__error">Password must be at least 6 characters</p>
            </div>
            <div class="form__group">
              <div class="form__text-input">
                <input
                  type="password"
                  placeholder="Xác nhận mật khẩu    "
                  name="confirmpassword"
                  id=""
                  class="form__input"
                  required
                  minlength="6"
                />
                <img
                  src="<?php echo ASSETS; ?>icons/form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
                <img
                  src="<?php echo ASSETS; ?>icons/lock.svg"
                  alt=""
                  class="form__input-icon"
                />
              </div>
              <?php
                        // Kiểm tra nếu có thông báo lỗi fail
                        if (!empty($data["errorfail"])) {
                            // Hiển thị thông báo lỗi fail
                            echo '<p style="margin-top: 10px; color: red;">' . $data["errorfail"] . '</p>';
                        } else if (!empty($data["errorsuccess"])) {
                            // Hiển thị thông báo thành công success
                            echo '<p style="margin-top: 10px; color: green;">' . $data["errorsuccess"] . '</p>';
                        }
                    ?>
            </div>
                <div class="form__group auth__btn-group">
                    <button class="btn btn--primary auth__btn form__submit-btn" type="submit" name="submit">
                    Send Reset Link
                    </button>
                </div>
            </form>
            <p class="auth__text">
            You have account yet?  <a href="<?php echo ROOT; ?>User/SignUp" class="auth__link auth__text-link">SignUp</a>
            </p>
            <p class="auth__text">
            You have account yet? <a href="<?php echo ROOT; ?>User/SignIn" class="auth__link auth__text-link">SignIn</a>
            </p>
        </div>
    </div>
</main>
