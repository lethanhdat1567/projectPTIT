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
                <h2 class="logo__title">CoffeShop</h2>
            </a>
            <h1 class="auth__heading">Enter Auth Code</h1>
            <form action="<?php echo ROOT; ?>User/GetOTP" class="form auth__form" method="post">
                <div class="form__group">
                    <div class="form__text-input">
                        <input type="text" name="text" id="" class="form__input" placeholder = "Nhập mã xác nhận"/>
                        <img
                            src="<?php echo ASSETS; ?>icons/form__error.svg"
                            alt=""
                            class="form__input-icon-error"
                        />
                    </div>
                    <p class="form__error"><?php echo !empty($data["error"]) ? '<p style="margin-top: 10px; color: red;">' . $data["error"] . '</p>'  : " " ?> </p>
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
