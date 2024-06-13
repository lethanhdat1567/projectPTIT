<?php require_once('./MVC/core/Config.php') ?>
<div class="container">
  <div class="top-bar">
    <!-- navbar more -->
    <button class="icon top-bar__more d-none d-lg-block js-toggle" toggle-target="#navbar">
      <img src="<?php echo ASSETS; ?>icons/more.svg" alt="" class="top-bar__more-icon">
    </button>
    <!-- logo -->
    <a href="<?php echo ROOT; ?>All/Main" class="logo top-bar__logo">
      <img src="<?php echo ASSETS; ?>icons/logo.svg" alt="" class="logo__img top-bar__logo-img  " />
      <h1 class="logo__title top-bar__logo-title">CoffeShop</h1>
    </a>
    <!-- Navbar -->
    <nav id="navbar" class="navbar hide">
      <button class="navbar__close-btn js-toggle icon" toggle-target="#navbar">
        <img src="<?php echo ASSETS; ?>icons/arrow-left.svg" alt="">
      </button>
    </nav>
    <div class="navbar__overplay js-toggle" toggle-target="#navbar">
    </div>
    <!-- Actions -->
    <div class="top-act ">
      <a href="<?php echo ROOT; ?>User/SignIn" class="btn btn--text d-md-none">
        Đăng nhập
      </a>
      <a href="<?php echo ROOT; ?>User/SignUp" class="top-act__sign-up btn btn--primary">
        Đăng ký
      </a>
      </div>
    </div>
  </div>
  
</div>