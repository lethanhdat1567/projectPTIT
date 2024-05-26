   <main class="auth">
      <!-- Auth intro -->
      <div class="auth__intro">
        <a href="<?php echo ROOT; ?>All/Main" class="logo auth__intro-logo d-none d-md-flex">
          <img src="<?php echo ASSETS; ?>icons/logo.svg" alt="" class="logo__img" />
          <h1 class="logo__title">grocemart</h1>
        </a>
        <img
          src="<?php echo ASSETS; ?>img/auth/auth-1.svg"
          alt=""
          class="auth__intro-img"
        />
        <p class="auth__intro-text">
          The best of luxury brand values, high quality products, and innovative
          services
        </p>
        <button
          class="auth__intro-next d-none d-md-flex js-toggle"
          toggle-target="#auth-content"
        >
          <img src="<?php echo ASSETS; ?>img/auth/slide-auth.svg" alt="" />
        </button>
      </div>
      <!-- Auth content -->
      <div id="auth-content" class="auth__content hide">
        <div class="auth__content-inner">
          <!-- logo -->
          <a href="<?php echo ROOT; ?>All/Main" class="logo">
            <img src="<?php echo ASSETS; ?>icons/logo.svg" alt="" class="logo__img" />
            <h1 class="logo__title">grocemart</h1>
          </a>
          <h1 class="auth__heading">Sign Up</h1>
          <p class="auth__desc">
            Let’s create your account and Shop like a pro and save money.
          </p>
          <form action="<?php echo ROOT; ?>User/DangKyUser" class="form auth__form" method="POST">
          <div class="form__group">
              <div class="form__text-input">
                <input
                  type="text"
                  placeholder="Nhập tên người dùng"
                  name="username"
                  id=""
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
                  src="<?php echo ASSETS; ?>icons/message.svg"
                  alt=""
                  class="form__input-icon"
                />
              </div>
              <p class="form__error"><?php echo !empty($data["Errorname"]) ? '<p style="margin-top: 10px;
  color: red;">' . $data["Errorname"] . '</p>'  : "" ?>
              </p>
              <p class="form__error">Email is not in correct format</p>
            </div>
            <div class="form__group">
              <div class="form__text-input">
                <input
                  type="email"
                  placeholder="Email"
                  name="email"
                  id=""
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
                  src="<?php echo ASSETS; ?>icons/message.svg"
                  alt=""
                  class="form__input-icon"
                />
              </div>
              <p class="form__error"><?php echo !empty($data["Erroremail"]) ? '<p style="margin-top: 10px;
  color: red;">' . $data["Erroremail"] . '</p>'  : "Email is not in correct format" ?>
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
              <p class="form__error">Password must be at least 6 characters</p>
            </div>
            <div class="form__group">
              <div class="form__text-input">
                <input
                  type="password"
                  placeholder="Confirm password"
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
              <p class="form__error"><?php echo !empty($data["Error"]) ? '<p style="margin-top: 10px;
  color: red;">' . $data["Error"] . '</p>'  : "Password must be at  least 6 characters" ?>
              </p>
            </div>
            <div class="form__group form__group--inline">
              <label class="form__checkbox">
                <input
                  type="checkbox"
                  name=""
                  id=""
                  class="form__checkbox-input d-none"
                />
                <span class="form__checkbox-label">Set as default card</span>
              </label>
            </div>
            <div class="form__group auth__btn-group">
              <button class="btn btn--primary auth__btn form__submit-btn" name="btnRegister">
                Sign up
              </button>
              <button class="btn btb--outline auth__btn btn--no-margin">
                <img
                  src="<?php echo ASSETS; ?>icons/google.svg"
                  alt=""
                  class="btn__icon icon"
                />
                Sign in with Google
              </button>
            </div>
          </form>
          <p class="auth__text">
            You have account yet?
            <a href="<?php echo ROOT; ?>User/SignIn" class="auth__link auth__text-link"
              >Sign In</a
            >
          </p>
        </div>
      </div>
    </main>

