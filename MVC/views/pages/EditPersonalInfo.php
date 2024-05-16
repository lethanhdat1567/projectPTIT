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
            <div class="col-3 col-xl-4 d-lg-none">
              <aside class="profile__sidebar">
                <!-- User -->
                <div class="profile-user">
                  <img
                    src="<?php echo ASSETS; ?>img/z4888248915574_b3c4f7538cab253aae1f1560aa4672a3 (1).jpg"
                    alt=""
                    class="profile-user__avatar"
                  />
                  <h1 class="profile-user__name">Imran Khan</h1>
                  <p class="profile-user__desc">Registered: 17th May 2022</p>
                </div>
                <!-- Menu 1 -->
                <div class="profile-menu">
                  <h3 class="profile-menu__title">Manage Account</h3>
                  <ul class="profile-menu__list">
                    <li>
                      <a href="#!" class="profile-menu__link">
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
            <div class="col-9 col-xl-8 col-lg-12">
              <div class="cart-info">
                <div class="row gy-3">
                  <!-- My Wallet -->
                  <div class="col-12">
                    <h2 class="cart-info__heading">
                      <a href="<?php echo ROOT; ?>Home/Profile">
                        <img
                          src="<?php echo ASSETS; ?>icons/arrow-left.svg"
                          alt=""
                          class="icon cart-info__back-arrow"
                        />
                      </a>
                      Personal Info
                    </h2>
                    <form action="<?php echo ROOT; ?>Home/Profile" class="form form-card">
                      <!-- Form row 1 -->
                      <div class="form__row">
                        <!-- First name -->
                        <div class="form__group">
                          <label
                            for="fullname"
                            class="form__label form-card__label"
                          >
                            Full Name
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="Full Name"
                              name=""
                              id="fullname"
                              class="form__input"
                              value="<?php echo $row['fullname'] ?>"
                              required
                              autofocus
                            />
                          </div>
                          <p class="form__error">Please enter your fullname!</p>
                        </div>
                        <!-- Last Name -->
                        <div class="form__group">
                          <label
                            for="email-address"
                            class="form__label form-card__label"
                          >
                            Email
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="Email Address"
                              name=""
                              id="lastname"
                              class="form__input"
                              value="<?php echo $row['email'] ?>"
                              required
                            />
                          </div>
                          <p class="form__error">
                            Please enter your email address!
                          </p>
                        </div>
                      </div>
                      <!-- Form row 2 -->
                      <div class="form__row">
                        <!-- First name -->
                        <div class="form__group">
                          <label
                            for="phone-number"
                            class="form__label form-card__label"
                          >
                            Phone Number
                          </label>
                          <div class="form__text-input">
                            <input
                              type="tel"
                              placeholder="Phone Number"
                              name=""
                              id="phone-number"
                              class="form__input"
                              value="<?php echo $row['phone_number'] ?>"
                              required
                            />
                          </div>
                          <p class="form__error">
                            Please enter your phone number!
                          </p>
                        </div>
                        <!-- Last Name -->
                        <div class="form__group">
                          <label
                            for="password"
                            class="form__label form-card__label"
                          >
                            Address
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="Password"
                              name=""
                              id="password"
                              class="form__input"
                              value="<?php echo $row['address'] ?>"
                              required
                            />
                          </div>
                          <p class="form__error">
                            Please enter your password date!
                          </p>
                        </div>
                      </div>
                      <!-- Form row 3 -->
                      <div class="form__row">
                        <!-- First name -->
                        <div class="form__group">
                          <label
                            for="phone-number"
                            class="form__label form-card__label"
                          >
                            Avatar
                          </label>
                          <div class="form__text-input">
                            <input
                              type="file"
                              name=""
                              id="avatar"
                              class="form__input"
                            />
                          </div>
                          <p class="form__error">
                            Please enter your phone number!
                          </p>
                        </div>
                      </div>
                      <div class="form-card__bottom">
                        <a href="<?php echo ROOT; ?>Home/Profile" class="btn btn--text">Cancel</a>
                        <button class="btn btn--primary btn--rounded">
                          Save card
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Modal: Confirm remove shopping cart item -->
    <div id="delete-confirm" class="modal modal--small hide">
      <div class="modal__content">
        <div class="modal_-text">Do you want to remove this product?</div>
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