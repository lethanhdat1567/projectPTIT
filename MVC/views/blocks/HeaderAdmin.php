<div class="container">
  <div class="top-bar">
    <!-- navbar more -->
    <button class="icon top-bar__more d-none d-lg-block js-toggle" toggle-target="#navbar">
      <img src="<?= $icon_path ?>more.svg" alt="" class="top-bar__more-icon">
    </button>
    <!-- logo -->
    <a href="./" class="logo top-bar__logo">
      <img src="<?= $icon_path ?>logo.svg" alt="" class="logo__img top-bar__logo-img  " />
      <h1 class="logo__title top-bar__logo-title">grocemart</h1>
    </a>
    <!-- Navbar -->
    <nav id="navbar" class="navbar hide">
      <button class="navbar__close-btn js-toggle icon" toggle-target="#navbar">
        <img src="<?= $icon_path ?>arrow-left.svg" alt="">
      </button>
    </nav>
    <div class="navbar__overplay js-toggle" toggle-target="#navbar">
    </div>
    <!-- Actions -->
    <div class="top-act ">
      <a href="./sign-in.html" class="btn btn--text d-md-none">
      Trang chủ
      </a>
      <a href="./sign-up.html" class="top-act__sign-up btn btn--text">
        Đăng xuất
      </a>
      </div>
    </div>
  </div>
  
</div>