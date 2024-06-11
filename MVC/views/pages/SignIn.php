    <main class="auth">
      <!-- Auth intro -->
      <div class="auth__intro d-md-none">
        <img
          src="<?php echo ASSETS; ?>img/auth/auth-1.svg"
          alt=""
          class="auth__intro-img"
        />
        <p class="auth__intro-text">
          The best of luxury brand values, high quality products, and innovative
          services
        </p>
      </div>
      <!-- Auth content -->
      <div class="auth__content">
        <div class="auth__content-inner">
          <!-- logo -->
          <a href="<?php echo ROOT; ?>All/Main" class="logo">
            <img src="<?php echo ASSETS; ?>icons/logo.svg" alt="" class="logo__img" />
            <h2 class="logo__title">CoffeShop</h2>
          </a>
          <h1 class="auth__heading">Hello Again!</h1>
          <p class="auth__desc">
          Chào mừng bạn quay lại đăng nhập. Với tư cách là khách hàng cũ, bạn có quyền truy cập vào tất cả thông tin đã lưu trước đó của mình.
          </p>
          <form action="<?php echo ROOT; ?>User/GetUser" class="form auth__form" method="POST">
            <div class="form__group">
              <div class="form__text-input">
                <input
                  type="email"
                  placeholder="Tên đăng nhập"
                  name="email"
                  id=""                  
                  value="<?php 
                  if (isset($_SESSION['email'])) {
                    echo $_SESSION['email'];
                }
                ?>"
                  class="form__input"
                  required
                  autofocus
                />
                <img
                  src="<?php echo ASSETS; ?>icons/form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
                <img
                  src="<?php echo ASSETS; ?>icons/user.svg"
                  alt=""
                  class="form__input-icon"
                />
              </div>
              <p class="form__error">Email định dạng chưa chính xác!</p>
            </div>
            <div class="form__group">
              <div class="form__text-input">
                <input
                  type="password"
                  placeholder="Password"
                  name="password"
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
              <p class="form__error">Mật khẩu gồm ít nhất 6 kí tự</p>
            </div>
            <span class="form__login--error <?php echo ($data['Error']) ? 'show' : ''; ?>"><?php echo $data['Error'] ?></span>
            <div class="form__group form__group--inline">
              <label class="form__checkbox">
                <input
                  type="checkbox"
                  name=""
                  id=""
                  class="form__checkbox-input d-none"
                />
                <span class="form__checkbox-label">Làm tài khoản mặt định</span>
              </label>
              <a
                href="<?php echo ROOT; ?>User/GetPagesForgetPass"
                class="auth__link form__pull-right"
                >Forgot Password</a
              >
            </div>
            <div class="form__group auth__btn-group">
              <button class="btn btn--primary auth__btn form__submit-btn" name="btnLogin">
                Đăng nhập
              </button>
            </div>
          </form>
          <p class="auth__text">
            Chưa có tài khoản ?
            <a href="<?php echo ROOT; ?>User/SignUp" class="auth__link auth__text-link"
              >Đăng kí</a
            >
          </p>
        </div>
      </div>
    </main>
