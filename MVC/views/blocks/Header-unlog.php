<?php require_once('./MVC/core/Config.php') ?>
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
                                        <a href="#!" class="menu-column__link"
                                        >TVs by Size
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
                                        <a href="#!" class="menu-column__link"
                                        >Streaming
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
                                      <a href="#!" class="menu-column__link"
                                      >Apple Watch
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
                                      <a href="#!" class="menu-column__link"
                                      >Headphones
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
                                        <a href="#!" class="menu-column__link"
                                        >Laptops
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
                                        <a href="#!" class="menu-column__link"
                                        >Chromebook
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
                                        <a href="#!" class="menu-column__link"
                                        >Computer Accessories
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
                                        <a href="#!" class="menu-column__link"
                                        >Overstock Savings
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
                                      <a href="#!" class="menu-column__link"
                                      >5G Phones
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
                                      <a href="#!" class="menu-column__link"
                                      >iPhone Accessories
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
                            <a href="#!" class="menu-column__link"
                            >Electronics
                          </a>
                          <div class="sub-menu">
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
                                      <a href="#!" class="menu-column__link"
                                      >TVs by Size
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
                                      <a href="#!" class="menu-column__link"
                                      >Streaming
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
                                    <a href="#!" class="menu-column__link"
                                    >Apple Watch
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
                                    <a href="#!" class="menu-column__link"
                                    >Headphones
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
                                      <a href="#!" class="menu-column__link"
                                      >Laptops
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
                                      <a href="#!" class="menu-column__link"
                                      >Chromebook
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
                                      <a href="#!" class="menu-column__link"
                                      >Computer Accessories
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
                                      <a href="#!" class="menu-column__link"
                                      >Overstock Savings
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
                                    <a href="#!" class="menu-column__link"
                                    >5G Phones
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
                                    <a href="#!" class="menu-column__link"
                                    >iPhone Accessories
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
                            <a href="#!" class="menu-column__link"
                            >TVs by Size
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
                            <a href="#!" class="menu-column__link"
                            >Streaming
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
                          <a href="#!" class="menu-column__link"
                          >Apple Watch
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
                          <a href="#!" class="menu-column__link"
                          >Headphones
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
                            <a href="#!" class="menu-column__link"
                            >Laptops
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
                            <a href="#!" class="menu-column__link"
                            >Chromebook
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
                            <a href="#!" class="menu-column__link"
                            >Computer Accessories
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
                            <a href="#!" class="menu-column__link"
                            >Overstock Savings
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
                          <a href="#!" class="menu-column__link"
                          >5G Phones
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
                          <a href="#!" class="menu-column__link"
                          >iPhone Accessories
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
                            <a href="#!" class="menu-column__link"
                            >Overstock Savings
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
                          <a href="#!" class="menu-column__link"
                          >5G Phones
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
                          <a href="#!" class="menu-column__link"
                          >iPhone Accessories
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
                            <a href="#!" class="menu-column__link"
                            >TVs by Size
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
                            <a href="#!" class="menu-column__link"
                            >Streaming
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
                          <a href="#!" class="menu-column__link"
                          >Apple Watch
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
                          <a href="#!" class="menu-column__link"
                          >Headphones
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
                            <a href="#!" class="menu-column__link"
                            >Laptops
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
                            <a href="#!" class="menu-column__link"
                            >Chromebook
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
                            <a href="#!" class="menu-column__link"
                            >Computer Accessories
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
                            <a href="#!" class="menu-column__link"
                            >Overstock Savings
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
                          <a href="#!" class="menu-column__link"
                          >5G Phones
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
                          <a href="#!" class="menu-column__link"
                          >iPhone Accessories
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
                            <a href="#!" class="menu-column__link"
                            >Overstock Savings
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
                          <a href="#!" class="menu-column__link"
                          >5G Phones
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
                          <a href="#!" class="menu-column__link"
                          >iPhone Accessories
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
    <div class="top-act ">
      <a href="<?php ROOT; ?>User/SignIn" class="btn btn--text d-md-none">
        Login
      </a>
      <a href="<?php ROOT; ?>User/SignUp" class="top-act__sign-up btn btn--primary">
        Sign up
      </a>
      </div>
    </div>
  </div>
  
</div>