<div class="container">
  <div class="top-bar top-bar__mobile">
    <div class="red-alert"></div>
    <!-- navbar more -->
    <button class="icon top-bar__more d-none d-lg-block js-toggle" toggle-target="#navbar">
      <img src="<?php echo ASSETS; ?>icons/more.svg" alt="" class="top-bar__more-icon top-bar__more-icon-nav">
    </button>
    <!-- logo -->
    <a href="<?php echo ROOT; ?>Home/Main" class="logo top-bar__logo">
      <img src="<?php echo ASSETS; ?>icons/logo.svg" alt="" class="logo__img top-bar__logo-img  " />
      <h1 class="logo__title top-bar__logo-title">CoffeShop</h1>
    </a>
    <!-- Navbar -->
    <nav id="navbar" class="navbar hide">
    <button class="navbar__close-btn js-toggle icon" toggle-target="#navbar">
        <img src="<?php echo ASSETS ?>icons/arrow-left.svg" alt="">
      </button>
    <!-- Search -->
    <div class="top-act__btn-wrap-mobile">
      <button class="top-act__btn top-act__btn-search">
        <img src="<?php echo ASSETS ?>icons/seach.svg" alt="" class="icon top-act__icon" />
      </button>
      <div class="search-dropdown-mobile">
        <input
          type="text"
          class="search-dropdown-mobile__input"
          placeholder="Nhập sản phẩm ..."
        />
      </div>
      <div class="search-dropdown-mobile__close">
        <img
          src="<?php echo ASSETS ?>/icons/closeSearch.svg"
          alt=""
          class="search-dropdown-mobile__close-icon"
        />
      </div>
    </div>
    <div class="search-dropdown-inner-mobile"></div>
    <!-- Link -->
    <div class="nav-btn-wrapper">
    </div>
    </nav>
    <div class="navbar__overplay js-toggle" toggle-target="#navbar">
    </div>
    <!-- Actions -->
    <div class="top-act">
      <div class="top-act__group d-md-none top-act__group--single">
        <div class="top-act__btn-wrap">
          <button class="top-act__btn top-act__btn-search">
            <img src="<?php echo ASSETS; ?>icons/seach.svg" alt="" class="icon top-act__icon" />
          </button>
          <div class="search-dropdown">
          <img src="<?php echo ASSETS; ?>icons/arrow-up.png" alt=""
              class="act-dropdown__arrow top-act__dropdown-arrow search__dropdown-arrow">
            <div class="search-dropdown__inner">
              <div class="search">
                <div class="search__close-img-wrap">
                  <img src="<?php echo ASSETS ?>icons/close.svg" alt="" class="search__close-img">
                </div>
                <input class="search__input" autocomplete="off" type="text" name="q" placeholder="Nhập từ khóa tìm kiếm...">
                <div class="search__product-list"></div>
                <button class="search__btn btn btn--primary" type="submit">Tìm kiếm</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="top-act__group d-md-none">
        <div class="top-act__btn-wrap">
          <button class="top-act__btn">
            <img src="<?php echo ASSETS; ?>icons/heart.svg" alt="" class="icon top-act__icon" />
            <span class="top-act__title top-act__title-favor"></span>
          </button>
          <div class="act-dropdown">
            <div class="act-dropdown__inner act-dropdown__inner-favor">
              <div class="act-dropdown__separate"></div>
              <div class="act-dropdown__checkout">
                <a href="<?php echo ROOT; ?>Home/CheckOut"
                  class="btn btn--primary btn--rounded act-dropdown__checkout-btn">Check Out All</a>
              </div>
            </div>
          </div>
        </div>
        <div class="top-act__separate"></div>
        <div class="top-act__btn-wrap">
          <button class="top-act__btn">
            <img src="<?php echo ASSETS; ?>icons/buy.svg" alt="" class="icon top-act__icon" />
            <span class="top-act__title top-act__title-card"></span>
          </button>
          <!-- Dropdown  -->
          <div class="act-dropdown">
            <div class="act-dropdown__inner act-dropdown__inner-card">
            </div>
          </div>
        </div>
        <div class="act-dropdown__alert-card">
          <div class="act-dropdown__inner act-dropdown__inner-alert">
          <img src="http://datlethanh.id.vn/projectPTIT/assets/icons/arrow-up.png" alt="" class="act-dropdown__arrow top-act__btn-wrap__dropdown-arrow top-act__btn-wrap__dropdown-arrow--alert">
          <div class="act-dropdown__inner-alert-wrap">
            <img src="<?php echo ASSETS ?>img/auth/check.png" class="alert-img__check" alt="">
              Bạn đã thêm vào giỏ hàng một sản phẩm
          </div>
            <img src="<?php echo ASSETS ?>icons/close.svg" class="alert-img alert-card__close" alt="">
          </div>
        </div>
      </div>
      <div class="top-act__user">
        <img src="<?php echo ASSETS; ?>img/avatar/<?php if(isset($_SESSION['avatar']) && $_SESSION['avatar'] != ''){
                echo $_SESSION['avatar'];
              }
              else{
                echo "avatarUnset.png";
              } ?>" alt="" class="top-act__avatar">
        <!-- Dropdown  -->
        <div class="act-dropdown top-act__dropdown">
          <div class="act-dropdown__inner user-menu">
            <img src="<?php echo ASSETS; ?>icons/arrow-up.png" alt=""
              class="act-dropdown__arrow top-act__dropdown-arrow">
            <div class="user-menu__top">
              <img src="<?php echo ASSETS; ?>img/avatar/<?php if(isset($_SESSION['avatar'])&& $_SESSION['avatar'] != ''){
                echo $_SESSION['avatar'];
              }
              else{
                echo "avatarUnset.png";
              } ?>" alt=""
                class="user-menu__avatar">
              <div class="header__email">
                <p class="user-menu__name"><?php
                if (isset($_SESSION["fullname"])) {
                  echo ($_SESSION["fullname"]);
                } else {
                  echo 'Guest';
                }
                ?></p>
                <p class="user-menu__username">
                  <?php
                  if (isset($_SESSION["phone_number"])) {
                    echo ($_SESSION["phone_number"]);
                  } else {
                    echo 'Chưa có số điện thoại';
                  }
                  ?>
                </p>
              </div>
            </div>
            <ul class="user-menu__list">
              <li>
                <a href="<?php echo ROOT; ?>Home/Profile" class="user-menu__link">
                  Profile</a>
              </li>
              <li>
                <a href="<?php echo ROOT; ?>Home/Favourite" class="user-menu__link">
                  Sản phẩm yêu thích</a>
              </li>
              <li>
                <a href="<?php echo ROOT; ?>Home/History" class="user-menu__link">
                  Lịch sử mua hàng</a>
              </li>
              <li class="user-menu__separate">
                <a href="#!" class="user-menu__link" id="switch-theme-btn">
                  <span>Dark mode</span>
                  <img src="<?php echo ASSETS; ?>icons/sun-dark.svg" alt="" class="icon user-menu__icon">
                </a>
              </li>
              <form method="post" action="<?php echo ROOT; ?>User/LogoutUser" class="user-menu__separate">
                <button href="<?php echo ROOT; ?>User/SignIn" name="logoutBtn" class="user-menu__link user-menu__link-btn js-toggle"  toggle-target="#Logout">
                  Đăng xuất</button>
              </form>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="Logout" class="modal modal--small hide  modal__logout">
      <div class="modal__content modal__content-logout">
      <div class="modal__warning-wrap">
        <img src="<?php echo ASSETS ?>icons/warning.svg" alt="" class="modal__warning-img">
          <p class="modal__warning-text">Cảnh báo !!</p>
        </div>
        <p class="modal_-text">Sau khi đăng xuất, tất cả dữ liệu trước đó sẽ mất</p>
        <div class="modal__bottom">
          <button
            class="btn btn--small btn--outline modal__btn js-toggle"
            toggle-target="#Logout"
          >
            Cancel
          </button>
          <button
            class="btn btn--danger btn--small btn--primary modal__btn btn--no-margin btn-logout"
            name="LogOut"
          >
            Đăng xuất
          </button>
        </div>
      </div>
      <div
        class="modal__overlay js-toggle"
        toggle-target="#Logout"
      ></div>
    </div>
<script>
  const ASSETS = "<?php echo ASSETS; ?>";
  const ROOT = "<?php echo ROOT; ?>";
</script>
<script>
  let products = JSON.parse(localStorage.getItem("product"));

</script>