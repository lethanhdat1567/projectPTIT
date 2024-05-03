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
                src="<?= $icon_path ?>seach.svg"
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
                    src="<?= $img_path ?>z4888248915574_b3c4f7538cab253aae1f1560aa4672a3 (1).jpg"
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
                      <a
                        href="http://localhost/projectPTIT/Home/EditPersonalInfo"
                        class="profile-menu__link"
                      >
                        <span class="profile-menu__icon">
                          <img
                            src="<?= $icon_path ?>profile.svg"
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
                            src="<?= $icon_path ?>local.svg"
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
                            src="<?= $icon_path ?>letter.svg"
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
                            src="<?= $icon_path ?>dowloand.svg"
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
                            src="<?= $icon_path ?>heart.svg"
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
                            src="<?= $icon_path ?>gifl.svg"
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
                            src="<?= $icon_path ?>protect.svg"
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
                            src="<?= $icon_path ?>help.svg"
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
                            src="<?= $icon_path ?>use.svg"
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
                      <a href="http://localhost/projectPTIT/Home/Profile">
                        <img
                          src="<?= $icon_path ?>arrow-left.svg"
                          alt=""
                          class="icon cart-info__back-arrow"
                        />
                      </a>
                      Add credit or debit card
                    </h2>
                    <form action="profile.html" class="form form-card">
                      <!-- Form row 1 -->
                      <div class="form__row">
                        <!-- First name -->
                        <div class="form__group">
                          <label
                            for="firstname"
                            class="form__label form-card__label"
                          >
                            Fisrt Name
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="First Name"
                              name=""
                              id="firstname"
                              class="form__input"
                              required
                              autofocus
                            />
                          </div>
                          <p class="form__error">
                            Please enter your first name!
                          </p>
                        </div>
                        <!-- Last Name -->
                        <div class="form__group">
                          <label
                            for="lastname"
                            class="form__label form-card__label"
                          >
                            Last Name
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="Last Name"
                              name=""
                              id="lastname"
                              class="form__input"
                              required
                            />
                          </div>
                          <p class="form__error">
                            Please enter your last name!
                          </p>
                        </div>
                      </div>
                      <!-- Form row 2 -->
                      <div class="form__row">
                        <!-- First name -->
                        <div class="form__group">
                          <label
                            for="card-number"
                            class="form__label form-card__label"
                          >
                            Card Number
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="Card Number"
                              name=""
                              id="card-number"
                              class="form__input"
                              required
                            />
                          </div>
                          <p class="form__error">
                            Please enter your card number!
                          </p>
                        </div>
                        <!-- Last Name -->
                        <div class="form__group">
                          <label
                            for="expiration-date"
                            class="form__label form-card__label"
                          >
                            Expiration Date
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="MM/YY"
                              name=""
                              id="expiration-date"
                              class="form__input"
                              required
                            />
                          </div>
                          <p class="form__error">
                            Please enter your expiration date!
                          </p>
                        </div>
                      </div>
                      <!-- Form row 3 -->
                      <div class="form__row">
                        <!-- First name -->
                        <div class="form__group">
                          <label for="cvv" class="form__label form-card__label">
                            CVV
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="123"
                              name=""
                              id="cvv"
                              class="form__input"
                              required
                            />
                          </div>
                          <p class="form__error">Please enter your CVV!</p>
                        </div>
                        <!-- Last Name -->
                        <div class="form__group">
                          <label
                            for="phone-number"
                            class="form__label form-card__label"
                          >
                            Phone Number
                          </label>
                          <div class="form__text-input">
                            <input
                              type="text"
                              placeholder="Phone Number"
                              name=""
                              id="phone-number"
                              class="form__input"
                              required
                            />
                          </div>
                          <p class="form__error">
                            Please enter your phone number!
                          </p>
                        </div>
                      </div>
                      <div class="form__group">
                        <label
                          for="set-default-card"
                          class="form__label form-card__label"
                          >Card Preferences</label
                        >
                        <label class="form__checkbox">
                          <input
                            type="checkbox"
                            name=""
                            id="set-default-card"
                            checked
                            class="form__checkbox-input d-none"
                          />
                          <span class="form__checkbox-label"
                            >Set as default card</span
                          >
                        </label>
                      </div>
                      <div class="form-card__bottom">
                        <a href="http://localhost/projectPTIT/Home/Profile" class="btn btn--text">Cancel</a>
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