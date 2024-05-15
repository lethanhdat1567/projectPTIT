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
              <a href="http://localhost/projectPTIT/Home/" class="breadcrumbs__link"
                >Home
                <img src="<?php echo ASSETS; ?>icons/arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="#!" class="breadcrumbs__link breadcrumbs__link--current"
                >Checkout
              </a>
            </li>
          </ul>
        </div>
        <!-- Checkout content -->
        <div class="checkout-container">
          <div class="row gy-xl-3">
            <div class="col-8 col-xl-12">
              <div class="cart-info">
                <div class="cart-info__list">
                  <!-- Cart item 1 -->
                  <article class="cart-item">
                    <a href="http://localhost/projectPTIT/Home/ProductDetail">
                      <img
                        src="<?php echo ASSETS; ?>img/products/item1.png"
                        alt=""
                        class="cart-item__thumb"
                      />
                    </a>
                    <div class="cart-item__content">
                      <div class="cart-item__content-left">
                        <h3 class="cart-item__title">
                          Coffee Beans - Espresso Arabica and Robusta Beans
                        </h3>
                        <p class="cart-item__price-wrap">
                          $47.00 |
                          <span class="cart-item__status">In Stock</span>
                        </p>
                        <div class="cart-item__ctrl cart-item__ctrl--md-block">
                          <div class="cart-item__input">
                            LavAzza
                            <img
                              class="icon"
                              src="<?php echo ASSETS; ?>icons/arrow-down-2.svg"
                              alt=""
                            />
                          </div>
                          <div class="cart-item__input">
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?php echo ASSETS; ?>icons/minus.svg"
                                alt=""
                              />
                            </button>
                            <span>1</span>
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?php echo ASSETS; ?>icons/plus.svg"
                                alt=""
                              />
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="cart-item__content-right">
                        <p class="cart-item__total-price">47.00$</p>
                        <div class="cart-item__ctrl">
                          <button class="cart-item__ctrl-btn">
                            <img src="<?php echo ASSETS; ?>icons/heart-2.svg" alt="" />
                            Save
                          </button>
                          <button
                            class="cart-item__ctrl-btn js-toggle"
                            toggle-target="#delete-confirm"
                          >
                            <img src="<?php echo ASSETS; ?>icons/trash.svg" alt="" />
                            Delete
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Cart item 2 -->
                  <article class="cart-item">
                    <a href="http://localhost/projectPTIT/Home/ProductDetail">
                      <img
                        src="<?php echo ASSETS; ?>img/products/item2.png"
                        alt=""
                        class="cart-item__thumb"
                      />
                    </a>
                    <div class="cart-item__content">
                      <div class="cart-item__content-left">
                        <h3 class="cart-item__title">
                          Lavazza Coffee Blends - Try the Italian Espresso
                        </h3>
                        <p class="cart-item__price-wrap">
                          $53.00 |
                          <span class="cart-item__status">In Stock</span>
                        </p>
                        <div class="cart-item__ctrl cart-item__ctrl--md-block">
                          <div class="cart-item__input">
                            LavAzza
                            <img
                              class="icon"
                              src="<?php echo ASSETS; ?>icons/arrow-down-2.svg"
                              alt=""
                            />
                          </div>
                          <div class="cart-item__input">
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?php echo ASSETS; ?>icons/minus.svg"
                                alt=""
                              />
                            </button>
                            <span>2</span>
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?php echo ASSETS; ?>icons/plus.svg"
                                alt=""
                              />
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="cart-item__content-right">
                        <p class="cart-item__total-price">$106.00</p>
                        <div class="cart-item__ctrl">
                          <button class="cart-item__ctrl-btn">
                            <img src="<?php echo ASSETS; ?>icons/heart-2.svg" alt="" />
                            Save
                          </button>
                          <button
                            class="cart-item__ctrl-btn js-toggle"
                            toggle-target="#delete-confirm"
                          >
                            <img src="<?php echo ASSETS; ?>icons/trash.svg" alt="" />
                            Delete
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Cart item 3 -->
                  <article class="cart-item">
                    <a href="http://localhost/projectPTIT/Home/ProductDetail">
                      <img
                        src="<?php echo ASSETS; ?>img/products/item3.png"
                        alt=""
                        class="cart-item__thumb"
                      />
                    </a>
                    <div class="cart-item__content">
                      <div class="cart-item__content-left">
                        <h3 class="cart-item__title">
                          Qualità Oro Mountain Grown - Espresso Coffee Beans
                        </h3>
                        <p class="cart-item__price-wrap">
                          $38.65 |
                          <span class="cart-item__status">In Stock</span>
                        </p>
                        <div class="cart-item__ctrl cart-item__ctrl--md-block">
                          <div class="cart-item__input">
                            LavAzza
                            <img
                              class="icon"
                              src="<?php echo ASSETS; ?>icons/arrow-down-2.svg"
                              alt=""
                            />
                          </div>
                          <div class="cart-item__input">
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?php echo ASSETS; ?>icons/minus.svg"
                                alt=""
                              />
                            </button>
                            <span>1</span>
                            <button class="cart-item__input-btn">
                              <img
                                class="icon"
                                src="<?php echo ASSETS; ?>icons/plus.svg"
                                alt=""
                              />
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="cart-item__content-right">
                        <p class="cart-item__total-price">$38.65</p>
                        <div class="cart-item__ctrl">
                          <button class="cart-item__ctrl-btn">
                            <img src="<?php echo ASSETS; ?>icons/heart-2.svg" alt="" />
                            Save
                          </button>
                          <button
                            class="cart-item__ctrl-btn js-toggle"
                            toggle-target="#delete-confirm"
                          >
                            <img src="<?php echo ASSETS; ?>icons/trash.svg" alt="" />
                            Delete
                          </button>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="cart-info__bottom d-md-none">
                  <div class="row">
                    <div class="col-8 col-xxl-7">
                      <div class="cart-info__continue">
                        <a href="http://localhost/projectPTIT/Home/" class="cart-info__continue-link">
                          <img
                            class="cart-info__continue-icon icon"
                            src="<?php echo ASSETS; ?>icons/arrow-down-2.svg"
                            alt=""
                          />
                          Continue Shopping
                        </a>
                      </div>
                    </div>
                    <div class="col-4 col-xxl-5">
                      <div class="cart-info__row">
                        <span>Subtotal:</span>
                        <span>$191.65</span>
                      </div>
                      <div class="cart-info__row">
                        <span>Shipping:</span>
                        <span>$10.00</span>
                      </div>
                      <div class="cart-info__separate"></div>
                      <div class="cart-info__row cart-info__row--bold">
                        <span>Total:</span>
                        <span>$201.65</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4 col-xl-12">
              <div class="cart-info">
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
                  href="http://localhost/projectPTIT/Home/Shipping"
                  class="cart-info__next-btn btn btn--primary btn--rounded"
                >
                  Continue to checkout
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