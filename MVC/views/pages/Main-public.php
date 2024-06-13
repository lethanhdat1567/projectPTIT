<div class="container home">
      <div class="home__container">
        <!-- slideshow -->
        <div class="slideshow">
          <div class="slideshow__inner">
            <div class="slideshow__item">
              <a href="#!" class="slideshow__link">
                <picture>
                  <source
                    media="(max-width: 991.98px)"
                    srcset="<?php echo ASSETS; ?>img/slideshow/item1-md.png"
                  />
                  <img
                    src="<?php echo ASSETS; ?>img/slideshow/item1.png"
                    alt=""
                    class="slideshow__img"
                  />
                </picture>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Browse Categories -->
      <section class="home__container">
        <div class="home__row">
          <h2 class="home__heading">Duyệt danh mục</h2>
        </div>
        <div class="home__cate row row-cols-3 row-cols-md-1">
          <!-- category item 1 -->
          <a href="#!">
            <article class="col">
              <div class="cate-item">
                <img
                  src="<?php echo ASSETS; ?>img/category-item/item1.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">0-200 nghìn VNd</h3>
                  <div class="cate-item__desc">
                    Sản phẩm cà phê gói chất lượng loại nhỏ
                  </div>
                </div>
              </div>
            </article>
          </a>
          <!-- category item 2 -->
          <a href="#!">
            <article class="col">
              <div class="cate-item">
                <img
                  src="<?php echo ASSETS; ?>img/category-item/item2.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">200 - 500 nghìn VND</h3>
                  <div class="cate-item__desc">
                    New sumatra mandeling coffe blend
                  </div>
                </div>
              </div>
            </article>
          </a>
          <!-- category item 3 -->
          <a href="#!">
            <article class="col">
              <div class="cate-item">
                <img
                  src="<?php echo ASSETS; ?>img/category-item/item3.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">500 nghìn VND trở đi</h3>
                  <div class="cate-item__desc">
                    New sumatra mandeling coffe blend
                  </div>
                </div>
              </div>
            </article>
          </a>
        </div>
      </section>
      <!-- Browse Products -->
      <section class="home__container">
        <div class="home__row">
          <div class="home__heading">Total LavAzza 1320</div>
          <div class="filter-wrap">
            <button class="filter-btn js-toggle" toggle-target="#home-filter">
              Filter
              <img
                src="<?php echo ASSETS; ?>icons/filter.svg"
                alt=""
                class="filter-btn__icon icon"
              />
            </button>
            <div class="filter hide" id="home-filter">
              <img
                src="<?php echo ASSETS; ?>icons/arrow-up.png"
                alt=""
                class="filter__arrow"
              />
              <h3 class="filter__heading">Filter</h3>
              <form action="" class="filter__form form">
                <div class="filter__row filter__content">
                  <!-- Filter 1 -->
                  <div class="filter__col">
                    <label class="form__label">Price</label>
                    <div class="filter__form-group">
                      <div
                        class="filter__form-slider"
                        style="--min-value: 10%; --max-value: 60%"
                      ></div>
                    </div>
                    <div class="filter__form-group filter__form-group--inline">
                      <div>
                        <label class="form__label form__label--small"
                          >Minimum:</label
                        >
                        <div
                          class="filter__form-text-input filter__form-text-input--small"
                        >
                          <input
                            type="text"
                            class="filter__form-input"
                            value="$30.00"
                          />
                        </div>
                      </div>
                      <div>
                        <label class="form__label form__label--small"
                          >Maximum:
                        </label>
                        <div
                          class="filter__form-text-input filter__form-text-input--small"
                        >
                          <input
                            type="text"
                            class="filter__form-input"
                            value="$100.00"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="filter__separate"></div>

                  <!-- Filter 2 -->
                  <div class="filter__col">
                    <label class="form__label">Size/Weight</label>
                    <div class="filter__form-group">
                      <div class="form__select-wrap">
                        <div class="form__select" style="--width: 158px">
                          500g
                          <img
                            src="<?php echo ASSETS; ?>icons/select-arrow.svg"
                            alt=""
                            class="form__select-arrow icon"
                          />
                        </div>
                        <div class="form__select">
                          Gram
                          <img
                            src="<?php echo ASSETS; ?>icons/select-arrow.svg"
                            alt=""
                            class="form__select-arrow icon"
                          />
                        </div>
                      </div>
                      <div class="filter__form-group">
                        <div class="form__tags">
                          <button class="form__tag">Small</button>
                          <button class="form__tag">Medium</button>
                          <button class="form__tag">Large</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="filter__separate"></div>

                  <!-- Filter 3 -->
                  <div class="filter__col">
                    <label class="form__label">Price</label>
                    <div class="filter__form-group">
                      <div class="filter__form-text-input">
                        <input
                          type="text"
                          placeholder="Search brand name"
                          class="filter__form-input"
                        />
                        <img
                          src="<?php echo ASSETS; ?>icons/seach.svg"
                          alt=""
                          class="filter__form-input-icon icon"
                        />
                      </div>
                    </div>
                    <div class="filter__form-group">
                      <div class="form__tags">
                        <button class="form__tag">Lavazza</button>
                        <button class="form__tag">Nescafe</button>
                        <button class="form__tag">Starbucks</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="filter__row filter__footer">
                  <button
                    class="btn btn--text filter__cancel js-toggle"
                    toggle-target="#home-filter"
                  >
                    Cancel
                  </button>
                  <button
                    class="btn btn--primary filter__submit js-toggle"
                    toggle-target="#home-filter"
                  >
                    Show Result
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row row-cols-5 row-cols-lg-2 row-cols-sm-1 g-3 public-products">
          <!-- Product item 1 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item1.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn like-btn--liked product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">100.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 2 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item2.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">100.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 3 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item3.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn like-btn--liked product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">200.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 4 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item4.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">100.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 5 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item4.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">100.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 6 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item4.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">400.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 7 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item4.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">100.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 8 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item4.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">100.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 9 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item4.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">800.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <!-- Product item 10 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="./product-detail.html">
                  <img
                    src="<?php echo ASSETS; ?>img/products/item4.png"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn product-card__like-btn">
                  <img
                    src="<?php echo ASSETS; ?>icons/heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?php echo ASSETS; ?>icons/heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="./product-detail.html">
                  Coffee Beans - Espresso Arabica and Robusta Beans
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">100.000 đ</span>
                <img
                  src="<?php echo ASSETS; ?>icons/star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
        </div>
      </section>
    </div>