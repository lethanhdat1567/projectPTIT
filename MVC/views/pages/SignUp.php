   <main class="auth">
      <!-- Auth intro -->
      <div class="auth__intro">
        <a href="./" class="logo auth__intro-logo d-none d-md-flex">
          <img src="<?= $icon_path ?>logo.svg" alt="" class="logo__img" />
          <h1 class="logo__title">grocemart</h1>
        </a>
        <img
          src="<?= $img_path ?>auth/auth-1.svg"
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
          <img src="<?= $img_path ?>auth/slide-auth.svg" alt="" />
        </button>
      </div>
      <!-- Auth content -->
      <div id="auth-content" class="auth__content hide">
        <div class="auth__content-inner">
          <!-- logo -->
          <a href="" class="logo">
            <img src="<?= $icon_path ?>logo.svg" alt="" class="logo__img" />
            <h1 class="logo__title">grocemart</h1>
          </a>
          <h1 class="auth__heading">Sign Up</h1>
          <p class="auth__desc">
            Let’s create your account and Shop like a pro and save money.
          </p>
          <form action="http://localhost/projectPTIT/User/DangKyUser" class="form auth__form" method="POST">
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
                  src="<?= $icon_path ?>form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
                <img
                  src="<?= $icon_path ?>message.svg"
                  alt=""
                  class="form__input-icon"
                />
              </div>
              <p class="form__error">Email is not in correct format</p>
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
                  src="<?= $icon_path ?>form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
                <img
                  src="<?= $icon_path ?>lock.svg"
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
                  src="<?= $icon_path ?>form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
                <img
                  src="<?= $icon_path ?>lock.svg"
                  alt=""
                  class="form__input-icon"
                />
              </div>
              <p class="form__error">
              <?php echo !empty($data["Error"]) ? '<h6 style="color:red;">' . $data["Error"] . '</h6>'  : "Password must be at  least 6 characters" ?>
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
                  src="<?= $icon_path ?>google.svg"
                  alt=""
                  class="btn__icon icon"
                />
                Sign in with Google
              </button>
            </div>
          </form>
          <p class="auth__text">
            You have account yet?
            <a href="http://localhost/projectPTIT/User/SignIn" class="auth__link auth__text-link"
              >Sign In</a
            >
          </p>
        </div>
      </div>
    </main>

