<div class="container">
  <div class="top-bar">
    <!-- navbar more -->
    <button class="icon top-bar__more d-none d-lg-block js-toggle" toggle-target="#navbar">
      <img src="<?php echo ASSETS; ?>icons/more.svg" alt="" class="top-bar__more-icon">
    </button>
    <!-- logo -->
    <a href="<?php echo ROOT; ?>Home/Main" class="logo top-bar__logo">
      <img src="<?php echo ASSETS; ?>icons/logo.svg" alt="" class="logo__img top-bar__logo-img  " />
      <h1 class="logo__title top-bar__logo-title">grocemart</h1>
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
      <a href="<?php echo ROOT;?>Admin/Main" class="btn btn--text d-md-none">
      Trang chủ
      </a>
      <a href="<?php echo ROOT; ?>Admin/QLSP" class="btn btn--text d-md-none">
      Trang quản trị
      </a>
      <a href="<?php echo ROOT; ?>User/SignUp" class="top-act__sign-up btn btn--danger">
        Đăng xuất
      </a>
      </div>
    </div>
  </div>
  
</div>