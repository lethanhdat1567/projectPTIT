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
              <a
                href="<?php echo ROOT; ?>Home/Shipping"
                class="breadcrumbs__link breadcrumbs__link"
                >Shipping
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
                  <a class="cart-info__edit-btn" href="<?php echo ROOT; ?>Home/Shipping">
                    <img class="icon" src="<?php echo ASSETS; ?>icons/edit.svg" alt="" />
                    Edit
                  </a>
                </div>
                <!-- Payment item 1 -->
                <article class="payment-item">
                  <div class="payment-item__info">
                    <h3 class="payment-item__title">Imran Khan</h3>
                    <p class="payment-item__desc">
                      Museum of Rajas, Sylhet Sadar, Sylhet 3100.
                    </p>
                  </div>
                </article>
                <!-- Payment item 2 -->
                <article class="payment-item">
                  <div class="payment-item__info">
                    <h3 class="payment-item__title">Items details</h3>
                    <p class="payment-item__desc">2 items</p>
                  </div>
                  <a href="<?php echo ROOT; ?>Home/Shipping" class="payment-item__detail"
                    >View details</a
                  >
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
                      <span class="cart-info__checkbox payment-item__checkbox">
                        <input
                          checked
                          type="radio"
                          name="delivery-method"
                          class="cart-info__checkbox-input payment-item__checkbox-input"
                        />
                        <span class="payment-item__cost">Free</span>
                      </span>
                    </div>
                  </article>
                </label>
                <!-- Payment item 4 -->
                <label>
                  <article class="payment-item payment-item--pointer">
                    <img
                      src="<?php echo ASSETS; ?>img/payment/delivery-2.png"
                      alt=""
                      class="payment-item__thumb"
                    />
                    <div class="payment-item__content">
                      <div class="payment-item__info">
                        <h3 class="payment-item__title">DHL Delivery</h3>
                        <p class="payment-item__desc payment-item__desc--low">
                          Delivery: 2-3 days work
                        </p>
                      </div>
                      <span class="cart-info__checkbox payment-item__checkbox">
                        <input
                          type="radio"
                          class="cart-info__checkbox-input payment-item__checkbox-input"
                          name="delivery-method"
                        />
                        <span class="payment-item__cost">$12.00</span>
                      </span>
                    </div>
                  </article>
                </label>
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
                      for="Cart-holder"
                      class="form__label form__label--medium"
                      >Card Holder</label
                    >
                    <div class="form__text-input">
                      <input
                        type="text"
                        placeholder="Card Holder"
                        name="Cart-holder"
                        id="Cart-holder"
                        class="form__input"
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
                      for="Card-details"
                      class="form__label form__label--medium"
                      >Card Details
                    </label>
                    <div class="form__text-input">
                      <input
                        type="text"
                        placeholder="Card Details"
                        name="Card-details"
                        id="Card-details"
                        class="form__input"
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
                  <div class="form__row cart-info__form-row">
                    <div class="form__group">
                      <div class="form__text-input">
                        <input
                          type="text"
                          placeholder="MM/YY"
                          name="card-expire"
                          id="card-expire"
                          class="form__input"
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
                      <div class="form__text-input">
                        <input
                          type="text"
                          placeholder="CVC"
                          name="card-cvc"
                          id="card-cvc"
                          class="form__input"
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
                  </div>
                </form>
                <div class="cart-info__row">
                  <span
                    >Subtotal
                    <span class="cart-info__sub-label">(items)</span></span
                  >
                  <span>3</span>
                </div>
                <div class="cart-info__row">
                  <span
                    >Price
                    <span class="cart-info__sub-label">(Total)</span></span
                  >
                  <span>$191.65</span>
                </div>
                <div class="cart-info__row">
                  <span>Shipping</span>
                  <span>$10.00</span>
                </div>
                <div class="cart-info__separate"></div>
                <div class="cart-info__row">
                  <span>Estimated Total</span>
                  <span>$201.65</span>
                </div>
                <a
                  href="#!"
                  class="cart-info__next-btn btn btn--primary btn--rounded"
                >
                  Pay $465.98
                </a>
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
    <!-- Modal: add new shopping address -->
    <div id="add-new-address" class="modal hide" style="--content-width: 650px">
      <div class="modal__content">
        <form action="" class="form">
          <h2 class="modal__heading">Add new shipping address</h2>
          <div class="modal__body">
            <div class="form__row">
              <div class="form__group">
                <label for="name" class="form__label form__label--small"
                  >Name</label
                >
                <div class="form__text-input form__text-input--small">
                  <input
                    type="text"
                    placeholder="Name"
                    name="name"
                    id="name"
                    class="form__input"
                    required
                    minlength="2"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/form__error.svg"
                    alt=""
                    class="form__input-icon-error"
                  />
                </div>
                <p class="form__error">Name must at least 2 characters</p>
              </div>
              <div class="form__group">
                <label for="phone" class="form__label form__label--small"
                  >Phone</label
                >
                <div class="form__text-input form__text-input--small">
                  <input
                    type="tel"
                    placeholder="Phone"
                    name="phone"
                    id="phone"
                    class="form__input"
                    required
                    minlength="10"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/form__error.svg"
                    alt=""
                    class="form__input-icon-error"
                  />
                </div>
                <p class="form__error">Phone must at least 11 characters</p>
              </div>
            </div>
            <div class="form__group">
              <label for="address" class="form__label form__label--small"
                >Address</label
              >
              <div class="form__text-area">
                <textarea
                  placeholder="Address (Area and street)"
                  name="address"
                  id="address"
                  class="form__text-area-input"
                  required
                ></textarea>
                <img
                  src="<?php echo ASSETS; ?>icons/form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
              </div>
              <p class="form__error">Phone must at least 11 characters</p>
            </div>
            <div class="form__group">
              <label for="city" class="form__label form__label--small"
                >City/District/Town</label
              >
              <div class="form__text-input form__text-input--small">
                <input
                  id="city"
                  type="text"
                  placeholder="City/District/Town"
                  name=""
                  class="form__input js-toggle"
                  toggle-target="#city-dialog"
                  required
                />
                <img
                  src="<?php echo ASSETS; ?>icons/form__error.svg"
                  alt=""
                  class="form__input-icon-error"
                />
                <!-- Select dialog -->
                <div id="city-dialog" class="form__select-dialog hide">
                  <h2 class="form__dialog-heading d-none d-sm-block">
                    City/District/Town
                  </h2>
                  <button
                    class="form__close-dialog d-none d-sm-block js-toggle"
                    toggle-target="#city-dialog"
                  >
                    &times;
                  </button>
                  <div class="form__search">
                    <input
                      type="text"
                      placeholder="search"
                      class="form__search-input"
                    />
                    <img
                      src="<?php echo ASSETS; ?>icons/seach.svg"
                      alt=""
                      class="form__search-icon icon"
                    />
                  </div>
                  <ul class="form__options-list">
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option form__option--current">
                      Ho Chi Minh
                    </li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                    <li class="form__option">Ha Noi</li>
                    <li class="form__option">Ho Chi Minh</li>
                    <li class="form__option">Da Nang</li>
                  </ul>
                </div>
              </div>
              <p class="form__error">Phone must at least 11 characters</p>
            </div>
            <div class="form__group form__group--inline">
              <label class="form__checkbox">
                <input
                  type="checkbox"
                  name=""
                  id=""
                  class="form__checkbox-input d-none"
                />
                <span class="form__checkbox-label">Set as default address</span>
              </label>
            </div>
          </div>
        </form>
        <div class="modal__bottom">
          <button
            class="btn btn--small btn--text modal__btn js-toggle"
            toggle-target="#add-new-address"
          >
            Cancel
          </button>
          <button
            class="btn btn--small btn--primary modal__btn btn--no-margin js-toggle"
            toggle-target="#add-new-address"
          >
            Create
          </button>
        </div>
      </div>
      <div class="modal__overlay"></div>
    </div>