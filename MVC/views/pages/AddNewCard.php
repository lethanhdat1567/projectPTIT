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
                  src="<?php echo ASSETS; ?>img/avatar/<?php if($row['avatar']){
                      echo $row['avatar'];
                    }
                    else{
                      echo "avatarUnset.png";
                    } ?>"
                    class="profile-user__avatar"
                  />
                  <h1 class="profile-user__name">
                  <?php  echo $row['fullname'] ?>
                  </h1>
                  <p class="profile-user__desc">
                    <?php
                    $created_at_date = new DateTime($row["created_at"]);
                    $_SESSION["created_at"] = $created_at_date->format('Y-m-d');
                    if (isset($_SESSION["created_at"])) {
                     echo "Registered: ";
                     echo htmlspecialchars($_SESSION["created_at"]);
                   }
                    ?>
                  </p>
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
                      Add credit or debit card
                    </h2>
                    <form action="<?php echo ROOT; ?>User/UpCreditCard" class="form form-card" method="post">
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
                              name="firstname"
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
                              name="lastname"
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
                              name="cardnumber"
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
                              placeholder="YY-MM-DD"
                              name="expirationdate"
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
                        <a href="<?php echo ROOT; ?>Home/Profile" class="btn btn--text">Cancel</a>
                        <button name="btnsaveCredit" class="btn btn--primary btn--rounded" >
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