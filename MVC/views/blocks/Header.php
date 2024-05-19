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

      <a href="<?php echo ROOT; ?>Home/CheckOut" class="nav-btn d-none d-md-flex">
        <img src="<?php echo ASSETS; ?>icons/buy.svg" alt="" class="nav-btn__icon icon">
        <span class="nav-btn__title">Cart</span>
        <span class="nav-btn__qtn">3</span>
      </a>
      <a href="#!" class="nav-btn d-none d-md-flex">
        <img src="<?php echo ASSETS; ?>icons/heart.svg" alt="" class="nav-btn__icon icon">
        <span class="nav-btn__title">Card</span>
        <span class="nav-btn__qtn">3</span>
      </a>

      <ul class="navbar__list js-dropdown-list">
        <li class="navbar__item">
          <a class="navbar__link" href="#!">Departments
            <img src="<?php echo ASSETS; ?>icons/arrow-down.svg" class="icon navbar__arrow" alt="" />
          </a>
          <div class="dropdown js-dropdown">
            <div class="dropdown__inner">
              <div class="top-menu">
                <div class="top-menu__main">
                  <div class="menu-column">
                    <div class="menu-column__icon d-lg-none">
                      <img src="<?php echo ASSETS; ?>img/category/cate1-1.svg" alt="" class="menu-column__icon-1">
                      <img src="<?php echo ASSETS; ?>img/category/care1-2.svg" alt="" class="menu-column__icon-2">
                    </div>
                    <div class="menu-column__content">
                      <h2 class="menu-column__heading d-lg-none">All Departments</h2>
                      <ul class="menu-column__list js-menu-list">
                        <li class="menu-column__item">
                          <a href="#!" class="menu-column__link">
                            Savings & Featured Shops
                          </a>
                          <div class="sub-menu">
                            <!-- Sub-menu column 1 -->
                            <div class="sub-menu__column">
                              <!-- menu column 1.1 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate2-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate2-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">TV & Video</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Shop all TVs
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">TVs by Size
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Smart TVs
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Roku TVs
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Streaming
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        TV Mounts & Accessories
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        DVD & Blu-Ray Players
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <!-- menu column 1.2 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate3-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate3-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">Wearable Technology</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Galaxy Watch
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Apple Watch
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Fitness Trackers
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Virtual Reality
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Headphones
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!-- Sub-menu column 2 -->
                            <div class="sub-menu__column">
                              <!-- menu column 2.1 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate4-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate4-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">Computers</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Shop All Computers
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Laptops
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        PC Gaming
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Monitors
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Chromebook
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Printers & Ink
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Shop all TVs
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Computer Accessories
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Desktops
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Tax Software
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Computer Software
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        PC Finder
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!-- Sub-menu column 3 -->
                            <div class="sub-menu__column">
                              <!-- menu column 3.1 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate5-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate5-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">Savings</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Tech Savings
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Overstock Savings
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Tech Rollbacks
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <!-- menu column 3.2 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate6-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate6-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">Cell Phones</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Wireless Deals
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">5G Phones
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Prepaid Phones & Plans
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Refurbished Phones
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">iPhone Accessories
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Cases & Screen Protectors
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Walmart Protection Plan
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Unlocked Phones
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="menu-column__item">
                          <a href="#!" class="menu-column__link">Electronics
                          </a>
                          <div class="sub-menu">
                            <!-- Sub-menu column 1 -->
                            <div class="sub-menu__column">
                              <!-- menu column 1.1 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate2-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate2-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">TV & Video</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Shop all TVs
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">TVs by Size
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Smart TVs
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Roku TVs
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Streaming
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        TV Mounts & Accessories
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        DVD & Blu-Ray Players
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <!-- menu column 1.2 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate3-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate3-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">Wearable Technology</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Galaxy Watch
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Apple Watch
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Fitness Trackers
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Virtual Reality
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Headphones
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!-- Sub-menu column 2 -->
                            <div class="sub-menu__column">
                              <!-- menu column 2.1 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate4-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate4-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">Computers</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Shop All Computers
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Laptops
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        PC Gaming
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Monitors
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Chromebook
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Printers & Ink
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Shop all TVs
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Computer Accessories
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Desktops
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Tax Software
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Computer Software
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        PC Finder
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!-- Sub-menu column 3 -->
                            <div class="sub-menu__column">
                              <!-- menu column 3.1 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate5-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate5-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">Savings</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Tech Savings
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">Overstock Savings
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Tech Rollbacks
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <!-- menu column 3.2 -->
                              <div class="menu-column">
                                <div class="menu-column__icon">
                                  <img src="<?php echo ASSETS; ?>img/category/cate6-1.svg" alt=""
                                    class="menu-column__icon-1">
                                  <img src="<?php echo ASSETS; ?>img/category/cate6-2.svg" alt=""
                                    class="menu-column__icon-2">
                                </div>
                                <div class="menu-column__content">
                                  <h2 class="menu-column__heading">Cell Phones</h2>
                                  <ul class="menu-column__list">
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Wireless Deals
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">5G Phones
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Prepaid Phones & Plans
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Refurbished Phones
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">iPhone Accessories
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Cases & Screen Protectors
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Walmart Protection Plan
                                      </a>
                                    </li>
                                    <li class="menu-column__item">
                                      <a href="#!" class="menu-column__link">
                                        Unlocked Phones
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="menu-column__item">
                          <a href="#!" class="menu-column__link">
                            Clothing, Shoes & Accessories
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="navbar__item">
          <a class="navbar__link" href="#!">Grocery
            <img src="<?php echo ASSETS; ?>icons/arrow-down.svg" class="icon navbar__arrow" alt="" />
          </a>
          <div class="dropdown js-dropdown">
            <div class="dropdown__inner">
              <div class="top-menu">
                <div class="sub-menu sub-menu--not-main">
                  <!-- Sub-menu column 1 -->
                  <div class="sub-menu__column">
                    <!-- menu column 1.1 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate2-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate2-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">TV & Video</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Shop all TVs
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">TVs by Size
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Smart TVs
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Roku TVs
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Streaming
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              TV Mounts & Accessories
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              DVD & Blu-Ray Players
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- menu column 1.2 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate3-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate3-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Wearable Technology</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Galaxy Watch
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Apple Watch
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Fitness Trackers
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Virtual Reality
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Headphones
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Sub-menu column 2 -->
                  <div class="sub-menu__column">
                    <!-- menu column 2.1 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate4-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate4-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Computers</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Shop All Computers
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Laptops
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              PC Gaming
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Monitors
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Chromebook
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Printers & Ink
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Shop all TVs
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Computer Accessories
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Desktops
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tax Software
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Computer Software
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              PC Finder
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Sub-menu column 3 -->
                  <div class="sub-menu__column">
                    <!-- menu column 3.1 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate5-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate5-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Savings</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tech Savings
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Overstock Savings
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tech Rollbacks
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- menu column 3.2 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate6-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate6-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Cell Phones</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Wireless Deals
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">5G Phones
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Prepaid Phones & Plans
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Refurbished Phones
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">iPhone Accessories
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Cases & Screen Protectors
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Walmart Protection Plan
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Unlocked Phones
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Sub-menu column 4 -->
                  <div class="sub-menu__column">
                    <!-- menu column 3.1 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate5-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate5-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Savings</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tech Savings
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Overstock Savings
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tech Rollbacks
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- menu column 3.2 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate6-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate6-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Cell Phones</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Wireless Deals
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">5G Phones
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Prepaid Phones & Plans
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Refurbished Phones
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">iPhone Accessories
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Cases & Screen Protectors
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Walmart Protection Plan
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Unlocked Phones
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="navbar__item">
          <a class="navbar__link" href="#!">Beauty
            <img src="<?php echo ASSETS; ?>icons/arrow-down.svg" class="icon navbar__arrow" alt="" />
          </a>
          <div class="dropdown js-dropdown">
            <div class="dropdown__inner">
              <div class="top-menu">
                <div class="sub-menu sub-menu--not-main">
                  <!-- Sub-menu column 1 -->
                  <div class="sub-menu__column">
                    <!-- menu column 1.1 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate2-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate2-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">TV & Video</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Shop all TVs
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">TVs by Size
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Smart TVs
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Roku TVs
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Streaming
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              TV Mounts & Accessories
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              DVD & Blu-Ray Players
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- menu column 1.2 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate3-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate3-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Wearable Technology</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Galaxy Watch
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Apple Watch
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Fitness Trackers
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Virtual Reality
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Headphones
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Sub-menu column 2 -->
                  <div class="sub-menu__column">
                    <!-- menu column 2.1 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate4-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate4-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Computers</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Shop All Computers
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Laptops
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              PC Gaming
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Monitors
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Chromebook
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Printers & Ink
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Shop all TVs
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Computer Accessories
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Desktops
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tax Software
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Computer Software
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              PC Finder
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Sub-menu column 3 -->
                  <div class="sub-menu__column">
                    <!-- menu column 3.1 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate5-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate5-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Savings</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tech Savings
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Overstock Savings
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tech Rollbacks
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- menu column 3.2 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate6-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate6-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Cell Phones</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Wireless Deals
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">5G Phones
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Prepaid Phones & Plans
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Refurbished Phones
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">iPhone Accessories
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Cases & Screen Protectors
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Walmart Protection Plan
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Unlocked Phones
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Sub-menu column 4 -->
                  <div class="sub-menu__column">
                    <!-- menu column 3.1 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate5-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate5-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Savings</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tech Savings
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">Overstock Savings
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Tech Rollbacks
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- menu column 3.2 -->
                    <div class="menu-column">
                      <div class="menu-column__icon">
                        <img src="<?php echo ASSETS; ?>img/category/cate6-1.svg" alt="" class="menu-column__icon-1">
                        <img src="<?php echo ASSETS; ?>img/category/cate6-2.svg" alt="" class="menu-column__icon-2">
                      </div>
                      <div class="menu-column__content">
                        <h2 class="menu-column__heading">Cell Phones</h2>
                        <ul class="menu-column__list">
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Wireless Deals
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">5G Phones
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Prepaid Phones & Plans
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Refurbished Phones
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">iPhone Accessories
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Cases & Screen Protectors
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Walmart Protection Plan
                            </a>
                          </li>
                          <li class="menu-column__item">
                            <a href="#!" class="menu-column__link">
                              Unlocked Phones
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <div class="navbar__overplay js-toggle" toggle-target="#navbar">
    </div>
    <!-- Actions -->
    <div class="top-act">
      <div class="top-act__group d-md-none top-act__group--single">
        <button class="top-act__btn">
          <img src="<?php echo ASSETS; ?>icons/seach.svg" alt="" class="icon top-act__icon" />
        </button>
      </div>
      <div class="top-act__group d-md-none">
        <div class="top-act__btn-wrap">
          <button class="top-act__btn">
            <img src="<?php echo ASSETS; ?>icons/heart.svg" alt="" class="icon top-act__icon" />
            <span class="top-act__title">03</span>
          </button>
          <div class="act-dropdown">
            <div class="act-dropdown__inner">
              <img src="<?php echo ASSETS; ?>icons/arrow-up.png" alt="" class="act-dropdown__arrow">
              <div class="act-dropdown__top">
                <h2 class="act-dropdown__title">You have 3 item(s)</h2>
                <a href="<?php echo ROOT; ?>Home/Favourite" class="act-dropdown__view-all">See All</a>
              </div>
              <div class="row row-cols-3 gx-2 act-dropdown__list">
                <!-- Cart preview item 1 -->
                <div class="col">
                  <article class="cart-preview-item">
                    <div class="cart-preview-item__img-wrap">
                      <img src="<?php echo ASSETS; ?>img/products/item1.png" alt="" class="cart-preview-item__thumb">
                    </div>
                    <h3 class="cart-preview-item__title">Lavazza Coffee Blends </h3>
                    <p class="cart-preview-item__price">$329.00</p>
                  </article>
                </div>
                <!-- Cart preview item 2 -->
                <div class="col">
                  <article class="cart-preview-item">
                    <div class="cart-preview-item__img-wrap">
                      <img src="<?php echo ASSETS; ?>img/products/item2.png" alt="" class="cart-preview-item__thumb">
                    </div>
                    <h3 class="cart-preview-item__title">Coffee Beans Espresso</h3>
                    <p class="cart-preview-item__price">$39.99</p>
                  </article>
                </div>
                <!-- Cart preview item 3 -->
                <div class="col">
                  <article class="cart-preview-item">
                    <div class="cart-preview-item__img-wrap">
                      <img src="<?php echo ASSETS; ?>img/products/item3.png" alt="" class="cart-preview-item__thumb">
                    </div>
                    <h3 class="cart-preview-item__title">Qualità Oro Mountain</h3>
                    <p class="cart-preview-item__price">$47.00</p>
                  </article>
                </div>
              </div>
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
            <span class="top-act__title">$65.42</span>
          </button>
          <!-- Dropdown  -->
          <div class="act-dropdown">
            <div class="act-dropdown__inner">
              <img src="<?php echo ASSETS; ?>icons/arrow-up.png" alt="" class="act-dropdown__arrow">
              <div class="act-dropdown__top">
                <h2 class="act-dropdown__title">You have 3 item(s)</h2>
                <a href="<?php echo ROOT; ?>Home/CheckOut" class="act-dropdown__view-all">See All</a>
              </div>
              <div class="row row-cols-3 gx-2 act-dropdown__list">
                <!-- Cart preview item 1 -->
                <div class="col">
                  <article class="cart-preview-item">
                    <div class="cart-preview-item__img-wrap">
                      <img src="<?php echo ASSETS; ?>img/products/item1.png" alt="" class="cart-preview-item__thumb">
                    </div>
                    <h3 class="cart-preview-item__title">Lavazza Coffee Blends </h3>
                    <p class="cart-preview-item__price">$329.00</p>
                  </article>
                </div>
                <!-- Cart preview item 2 -->
                <div class="col">
                  <article class="cart-preview-item">
                    <div class="cart-preview-item__img-wrap">
                      <img src="<?php echo ASSETS; ?>img/products/item2.png" alt="" class="cart-preview-item__thumb">
                    </div>
                    <h3 class="cart-preview-item__title">Coffee Beans Espresso</h3>
                    <p class="cart-preview-item__price">$39.99</p>
                  </article>
                </div>
                <!-- Cart preview item 3 -->
                <div class="col">
                  <article class="cart-preview-item">
                    <div class="cart-preview-item__img-wrap">
                      <img src="<?php echo ASSETS; ?>img/products/item3.png" alt="" class="cart-preview-item__thumb">
                    </div>
                    <h3 class="cart-preview-item__title">Qualità Oro Mountain</h3>
                    <p class="cart-preview-item__price">$47.00</p>
                  </article>
                </div>
              </div>
              <div class="act-dropdown__bottom">
                <div class="act-dropdown__row">
                  <span class="act-dropdown__label">Subtotal</span>
                  <span class="act-dropdown__value">$415.99</span>
                </div>
                <div class="act-dropdown__row">
                  <span class="act-dropdown__label">Texes</span>
                  <span class="act-dropdown__value">Free</span>
                </div>
                <div class="act-dropdown__row">
                  <span class="act-dropdown__label">Shipping</span>
                  <span class="act-dropdown__value">$10.00</span>
                </div>
                <div class="act-dropdown__row act-dropdown__row--bold">
                  <span class="act-dropdown__label">Total Price</span>
                  <span class="act-dropdown__value">$425.99</span>
                </div>
              </div>
              <div class="act-dropdown__checkout">
                <a href="<?php echo ROOT; ?>Home/CheckOut"
                  class="btn btn--primary btn--rounded act-dropdown__checkout-btn">Check Out All</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="top-act__user">
        <img src="<?php echo ASSETS; ?>img/avatar/<?php if(isset($_SESSION['avatar'])){
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
              <img src="<?php echo ASSETS; ?>img/avatar/<?php if(isset($_SESSION['avatar'])){
                echo $_SESSION['avatar'];
              }
              else{
                echo "avatarUnset.png";
              } ?>" alt=""
                class="user-menu__avatar">
              <div>
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
                    echo 'Guest';
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
                  Favourite list</a>
              </li>
              <li class="user-menu__separate">
                <a href="#!" class="user-menu__link" id="switch-theme-btn">
                  <span>Dark mode</span>
                  <img src="<?php echo ASSETS; ?>icons/sun-dark.svg" alt="" class="icon user-menu__icon">
                </a>
              </li>
              <li>
                <a href="#!" class="user-menu__link">
                  Setting
                </a>
              </li>
              <li class="user-menu__separate">
                <a href="<?php echo ROOT; ?>User/SignIn" class="user-menu__link">
                  Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>