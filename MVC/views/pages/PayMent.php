<?php $row = mysqli_fetch_assoc($data['users']);
 ?>
<main class="checkout-page">
      <div class="container">
        <!-- Search bar -->
        <div class="checkout-container">
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
        <!-- Breadcrumbs -->
        <div class="checkout-container">
          <ul class="breadcrumbs checkout-page__breadcrumbs">
            <li>
              <a href="<?php echo ROOT; ?>Home/" class="breadcrumbs__link"
                >Home
                <img src="<?php echo ASSETS; ?>icons/arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="<?php echo ROOT; ?>Home/CheckOut" class="breadcrumbs__link"
                >Checkout
                <img src="<?php echo ASSETS; ?>icons/arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="#!" class="breadcrumbs__link breadcrumbs__link--current"
                >Payment method
              </a>
            </li>
          </ul>
        </div>
        <!-- Checkout content -->
        <div class="checkout-container">
          <div class="row gy-xl-3">
            <div class="col-8 col-xl-8 col-lg-12">
              <div class="cart-info">
                <div class="cart-info__top">
                  <h2 class="cart-info__heading cart-info__heading--lv2">
                    1. Shipping, arrives between Mon, May 16—Tue, May 24
                  </h2>
                </div>
                <!-- Payment item 1 -->
                <article class="payment-item">
                  <div class="payment-item__info">
                    <h3 class="payment-item__title"><?php echo $row['fullname'] ?></h3>
                    <p class="payment-item__desc">
                      <?php echo $row["address"] ?>
                    </p>
                  </div>
                </article>
              </div>
              <div class="cart-info">
                <h2 class="cart-info__heading cart-info__heading--lv2">
                  2. Shipping method
                </h2>
                <div class="cart-info__separate"></div>
                <h3 class="cart-info__sub-heading">
                  Availeble Shipping method
                </h3>
                <!-- Payment item 3 -->
                <label>
                  <article class="payment-item payment-item--pointer">
                    <img
                      src="<?php echo ASSETS; ?>img/payment/delivery-1.png"
                      alt=""
                      class="payment-item__thumb"
                    />
                    <div class="payment-item__content">
                      <div class="payment-item__info">
                        <h3 class="payment-item__title">Fedex Delivery</h3>
                        <p class="payment-item__desc payment-item__desc--low">
                          Delivery: 2-3 days work
                        </p>
                      </div>
                    </div>
                  </article>
                </label>
              </div>
              <div class="cart-info">
                <h2 class="cart-info__heading cart-info__heading--lv2">
                  3. Items details
                </h2>
                <div class="cart-info__separate"></div>
                <h3 class="cart-info__sub-heading">
                  Your items details
                </h3>
                <div class="cart-info__list cart-info__list-card">
                </div>
              </div>
            </div>
            <div class="col-4 col-xl-4 col-lg-12">
              <div class="cart-info">
                <h2 class="cart-info__heading cart-info__heading--lv2">
                  Payment Details
                </h2>
                <p class="cart-info__desc">
                  Complete your purchase item by providing your payment details
                  order.
                </p>
                <form action="" class="form cart-info__form">
                  <div class="form__group">
                    <label for="email" class="form__label form__label--medium"
                      >Email Address</label
                    >
                    <div class="form__text-input">
                      <input
                        type="email"
                        placeholder="Email"
                        name="email"
                        id="email"
                        class="form__input"
                        value="<?php echo $row["email"] ?>"
                        required
                      />
                      <img
                        src="<?php echo ASSETS; ?>icons/form__error.svg"
                        alt=""
                        class="form__input-icon-error"
                      />
                    </div>
                    <p class="form__error">Email is not in correct format</p>
                  </div>
                  <div class="form__group">
                    <label
                      for="Fullname"
                      class="form__label form__label--medium"
                      >FullName</label
                    >
                    <div class="form__text-input">
                      <input
                        type="text"
                        placeholder="Fullname"
                        name="Fullname"
                        id="Fullname"
                        class="form__input"
                        value="<?php echo $row["fullname"] ?>"
                        required
                      />
                      <img
                        src="<?php echo ASSETS; ?>icons/form__error.svg"
                        alt=""
                        class="form__input-icon-error"
                      />
                    </div>
                    <p class="form__error">Email is not in correct format</p>
                  </div>
                  <div class="form__group">
                    <label
                      for="Address"
                      class="form__label form__label--medium"
                      >Address
                    </label>
                    <div class="form__text-input">
                      <input
                        type="text"
                        placeholder="Address"
                        name="Address"
                        id="Address"
                        class="form__input"
                        value="<?php echo $row["address"] ?>"
                        required
                      />
                      <img
                        src="<?php echo ASSETS; ?>icons/form__error.svg"
                        alt=""
                        class="form__input-icon-error"
                      />
                    </div>
                    <p class="form__error">Email is not in correct format</p>
                  </div>
                  <div class="form__group">
                    <label
                      for="PhoneNumber"
                      class="form__label form__label--medium"
                      >PhoneNumber
                    </label>
                    <div class="form__text-input">
                      <input
                        type="tel"
                        placeholder="PhoneNumber"
                        name="PhoneNumber"
                        id="PhoneNumber"
                        class="form__input"
                        value="<?php echo $row["phone_number"] ?>"
                        required
                      />
                      <img
                        src="<?php echo ASSETS; ?>icons/form__error.svg"
                        alt=""
                        class="form__input-icon-error"
                      />
                    </div>
                    <p class="form__error">Email is not in correct format</p>
                  </div>
                  <div class="cart-info__sub-list">
                  </div>
                  <button
                    class="cart-info__next-btn cart-info__next-btn--Pay btn btn--primary btn--rounded"
                  >
                    Pay
                  </button>
                </form>
              </div>
              <div class="cart-info">
                <a href="#!">
                  <article class="gift-item">
                    <div class="gift-item__icon-wrap">
                      <img
                        src="<?php echo ASSETS; ?>icons/gift.svg"
                        alt=""
                        class="gift-item__icon"
                      />
                    </div>
                    <div class="gift-item__content">
                      <h3 class="gift-item__title">
                        Send this order as a gift.
                      </h3>
                      <p class="gift-item__desc">
                        Available items will be shipped to your gift recipient.
                      </p>
                    </div>
                  </article>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
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
    