<?php $row = mysqli_fetch_assoc($data['users']);
 ?>
<main class="profile">
      <div class="container">
        <!-- Search bar -->
        <div class="profile-container">
          <div class="search-bar d-none d-md-flex">
            <input
              type="text"
              name=""
              placeholder="Search for item"
              id=""
              class="search-bar__input"
            />
            <button class="search-bar__submit">
              <img
                src="<?php echo ASSETS; ?>icons/seach.svg"
                alt=""
                class="search-bar__icon icon"
              />
            </button>
          </div>
        </div>
        <div class="profile-container">
          <div class="row gy-md-3">
            <div class="col-3 col-xl-4 col-lg-5 col-md-12">
              <aside class="profile__sidebar">
                <!-- User -->
                <div class="profile-user">
                 <div class="profile-user__avatar js-toggle" toggle-target="#delete-confirm">
                    <img
                      src="<?php echo ASSETS; ?>img/avatar/<?php if($row['avatar']){
                        echo $row['avatar'];
                      }
                      else{
                        echo "avatarUnset.png";
                      } ?>"
                      alt=""
                      class="profile-user__avatar-img"
                    />
                    <img src="<?php echo ASSETS ?>icons/square.svg" alt="" class="profile-active__img">
                 </div>
                  <h1 class="profile-user__name"><?php echo $row['fullname'] ?></h1>
                  <p class="profile-user__desc">Registered: <?php echo substr($row['created_at'],0,10);  ?></p>
                </div>
                <!-- Menu 1 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">Manage Account</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a
                        href="<?php echo ROOT; ?>Home/EditPersonalInfo"
                        class="profile-menu__link"
                      >
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/profile.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Personal info
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/local.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Addresses
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/letter.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Communications & privacy
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Menu 2 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">My items</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/dowloand.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Reorder
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/heart.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Lists
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/gifl.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Registries
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Menu 3 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">Subscriptions & plans</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/protect.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Protection plans
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Menu 4 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">Customer Service</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/help.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Help
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                          <img
                            src="<?php echo ASSETS; ?>icons/use.svg"
                            alt=""
                            class="icon"
                          />
                        </span>
                        Terms of Use
                      </a>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
            <div class="col-9 col-xl-8 col-lg-7 col-md-12">
              <div class="cart-info">
                <div class="row gy-3">
                  <!-- My Wallet -->
                  <div class="col-12">
                    <h2 class="cart-info__heading">My Wallet</h2>
                    <p class="cart-info__desc profile__desc">Payment methods</p>
                    <div
                      class="row gy-md-2 row-cols-3 row-cols-xl-2 row-cols-lg-1"
                    >
                      <!-- payment card 1 -->
                      <?php if (isset($row['cardnumber']) && !empty($row['cardnumber'])) { ?>
                          <div class="col">
                            <article class="payment-card" style="--bg-color: #1e2e69">
                              <img src="<?php echo ASSETS; ?>img/card/plane-bg.svg" alt="" class="payment-card__img" />
                              <div class="payment-card__top">
                                <img src="<?php echo ASSETS; ?>img/card/plane.svg" alt="" />
                                <span class="payment-card__type">FeatherCard</span>
                              </div>
                              <div class="payment-card__number">
                                <?php echo htmlspecialchars($row['cardnumber']); ?>
                              </div>
                              <div class="payment-card__bottom">
                                <div>
                                  <p class="payment-card__label">Card Holder</p>
                                  <p class="payment-card__value">
                                    <?php echo htmlspecialchars($row['lastname']); ?>
                                    <?php echo htmlspecialchars($row['firstname']); ?>
                                  </p>
                                </div>
                                <div class="payment-card__expired">
                                  <p class="payment-card__label">Expired</p>
                                  <p class="payment-card__value">
                                    <?php
                                    $date = $row['expirationdate'];
                                    $dateParts = explode("-", $date);
                                    if (count($dateParts) === 3) {
                                      list($year, $month, $day) = $dateParts;
                                      $formattedDate = $day . "/" . $month;
                                      echo htmlspecialchars($formattedDate);
                                    } else {
                                      echo "Invalid date";
                                    }
                                    ?>
                              </p>
                            </div>
                            <div class="payment-card__circle"></div>
                          </div>
                        </article>
                      </div>
                      <?php } ?>
                      <div class="col">
                        <a href="<?php echo ROOT; ?>Home/AddNewCard" class="new-card">
                          <img
                            src="<?php echo ASSETS; ?>icons/plus.svg"
                            alt=""
                            class="new-card__icon icon"
                          />
                          <p class="new-card__text">Add New Card</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!--Account info  -->
                  <div class="col-12">
                    <h2 class="cart-info__heading">Account info</h2>
                    <p class="cart-info__desc profile__desc">
                      Addresses, contact information and password
                    </p>
                    <div class="row gy-md-2 row-cols-2 row-cols-lg-1">
                      <!-- Account info 1 -->
                      <div class="col">
                        <a href="<?php echo ROOT; ?>Home/EditPersonalInfo">
                          <article class="account-info">
                            <div class="account-info__icon">
                              <img
                                src="<?php echo ASSETS; ?>icons/message.svg"
                                alt=""
                                class="icon"
                              />
                            </div>
                            <div>
                              <h3 class="account-info__title">Email Address</h3>
                              <p class="account-info__desc"><?php echo $row['email'] ?>
                              </p>
                            </div>
                          </article>
                        </a>
                      </div>
                      <!-- Account info 2 -->
                      <div class="col">
                        <a href="<?php echo ROOT; ?>Home/EditPersonalInfo">
                          <article class="account-info">
                            <div class="account-info__icon">
                              <img
                                src="<?php echo ASSETS; ?>icons/calling.svg"
                                alt=""
                                class="icon"
                              />
                            </div>
                            <div>
                              <h3 class="account-info__title">Phone number</h3>
                              <p class="account-info__desc">
                                <?php echo $row['phone_number'] ?>
                              </p>
                            </div>
                          </article>
                        </a>
                      </div>
                      <!-- Account info 3 -->
                      <div class="col">
                        <a href="<?php echo ROOT; ?>Home/EditPersonalInfo">
                          <article class="account-info">
                            <div class="account-info__icon">
                              <img
                                src="<?php echo ASSETS; ?>icons/local.svg"
                                alt=""
                                class="icon"
                              />
                            </div>
                            <div>
                              <h3 class="account-info__title">
                                Add an address
                              </h3>
                              <p class="account-info__desc">
                                <?php echo $row['address'] ?>
                              </p>
                            </div>
                          </article>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!--  Lists-->
                  <div class="col-12">
                    <h2 class="cart-info__heading">Lists</h2>
                   <div class="cart-info__list-card">
                   </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="delete-confirm" class="modal modal--small hide">
      <div class="modal__content">
        <div class="modal_-text">Bạn có muốn xóa avatar</div>
        <div class="modal__bottom">
          <button
            class="btn btn--small btn--outline modal__btn js-toggle"
            toggle-target="#delete-confirm"
          >
            Cancel
          </button>
          <button
            class="btn btn--danger btn--small btn--primary modal__btn btn--no-margin js-toggle"
            toggle-target="#delete-confirm"
          >
            Delete
          </button>
        </div>
      </div>
      <div
        class="modal__overlay js-toggle"
        toggle-target="#delete-confirm"
      ></div>
    </div>
