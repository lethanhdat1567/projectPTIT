
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
                    srcset="<?= $img_path ?>slideshow/item1-md.png"
                  />
                  <img
                    src="<?= $img_path ?>slideshow/item1.png"
                    alt=""
                    class="slideshow__img"
                  />
                </picture>
              </a>
            </div>
            <div class="slideshow__page">
              <span class="slideshow__num">1</span>
              <span class="slideshow__slider"></span>
              <span class="slideshow__num">5</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Browse Categories -->
      <section class="home__container">
        <div class="home__row">
          <h2 class="home__heading">Browse Categories</h2>
        </div>
        <div class="home__cate row row-cols-3 row-cols-md-1">
          <!-- category item 1 -->
          <a href="#!">
            <article class="col">
              <div class="cate-item">
                <img
                  src="<?= $img_path ?>category-item/item1.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">$24 - $150</h3>
                  <div class="cate-item__desc">
                    New sumatra mandeling coffe blend
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
                  src="<?= $img_path ?>category-item/item2.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">$37 - $160</h3>
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
                  src="<?= $img_path ?>category-item/item3.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">$32 - $160</h3>
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
                src="<?= $icon_path ?>filter.svg"
                alt=""
                class="filter-btn__icon icon"
              />
            </button>
            <div class="filter hide" id="home-filter">
              <img
                src="<?= $icon_path ?>arrow-up.png"
                alt=""
                class="filter__arrow"
              />
              <h3 class="filter__heading">Filter</h3>
              <form action="" class="filter__form">
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
                            src="<?= $icon_path ?>select-arrow.svg"
                            alt=""
                            class="form__select-arrow icon"
                          />
                        </div>
                        <div class="form__select">
                          Gram
                          <img
                            src="<?= $icon_path ?>select-arrow.svg"
                            alt=""
                            class="form__select-arrow icon"
                          />
                        </div>
                      </div>
                      <div class="filter__form-group">
                        <div class="form__tabs">
                          <button class="form__tab">Small</button>
                          <button class="form__tab">Medium</button>
                          <button class="form__tab">Large</button>
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
                          src="<?= $icon_path ?>seach.svg"
                          alt=""
                          class="filter__form-input-icon icon"
                        />
                      </div>
                    </div>
                    <div class="filter__form-group">
                      <div class="form__tabs">
                        <button class="form__tab">Lavazza</button>
                        <button class="form__tab">Nescafe</button>
                        <button class="form__tab">Starbucks</button>
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
        <div class="row row-cols-5 row-cols-lg-2 row-cols-sm-1 g-3">
        <?php while($row = mysqli_fetch_assoc($data["product"])){ ?>
          <!-- Product item 1 -->
          <div class="col">
            <article class="product-card">
              <div class="product-card__img-wrap">
                <a href="http://localhost/projectPTIT/Home/ProductDetail/<?php echo $row['id'] ?>">
                  <img
                    src="<?= $img_path ?>products/<?php echo $row['thumbnail'] ?>"
                    alt=""
                    class="product-card__thumb"
                  />
                </a>
                <button class="like-btn like-btn--liked product-card__like-btn">
                  <img
                    src="<?= $icon_path ?>heart.svg"
                    alt=""
                    class="like-btn__icon icon"
                  />
                  <img
                    src="<?= $icon_path ?>heart-red.svg"
                    alt=""
                    class="like-btn__icon--liked"
                  />
                </button>
              </div>
              <h3 class="product-card__title">
                <a href="http://localhost/projectPTIT/Home/ProductDetail/<?php echo $row['id'] ?>">
                 <?php echo $row['name'] ?>
                </a>
              </h3>
              <p class="product-card__brand">Lavazza</p>
              <div class="product-card__row">
                <span class="product-card__price">VND<?php echo $row['price'] ?></span>
                <img
                  src="<?= $icon_path ?>star.svg"
                  alt=""
                  class="product-card__star"
                />
                <span class="product-card__score">4.3</span>
              </div>
            </article>
          </div>
          <?php } ?>
        </div>
      </section>
    </div>