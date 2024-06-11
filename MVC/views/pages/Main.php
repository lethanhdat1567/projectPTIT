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
            <article class="col category-item-1 category-item">
              <div class="cate-item">
                <img
                  src="<?php echo ASSETS; ?>img/category-item/item1.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">0 - 200 nghìn VND</h3>
                  <div class="cate-item__desc">
                    Sản phẩm cà phê gói chất lượng loại nhỏ
                  </div>
                </div>
              </div>
            </article>
          <!-- category item 2 -->
            <article class="col category-item-2 category-item">
              <div class="cate-item">
                <img
                  src="<?php echo ASSETS; ?>img/category-item/item2.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">200 - 500 nghìn VND</h3>
                  <div class="cate-item__desc">
                  Sản phẩm cà phê gói chất lượng loại vừa
                  </div>
                </div>
              </div>
            </article>
          <!-- category item 3 -->
            <article class="col category-item-3 category-item">
              <div class="cate-item">
                <img
                  src="<?php echo ASSETS; ?>img/category-item/item3.png"
                  alt=""
                  class="cate-item__thumb"
                />
                <div class="cate-item__info">
                  <h3 class="cate-item__title">500 nghìn VND trở đi </h3>
                  <div class="cate-item__desc">
                  Sản phẩm cà phê gói chất lượng loại lớn
                  </div>
                </div>
              </div>
            </article>
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
              <form action="" class="filter__form">
                <div class="filter__row filter__content">
                  <!-- Filter 1 -->
                  <div class="filter__col">
                    <label class="form__label">Giá</label>
                    <!-- slider -->
                    <div class="filter__form-group filter__form-group-slider">
                      <!-- progress -->
                      <div
                        class="filter__form-slider">
                      </div>
                    </div>
                    <!-- CHỈNH LẠI GIÁ TIỀN Ở ĐÂY -->
                    <div class="filter__form-group-wrapper">
                      <input type="range" class="range-min" min="0" max ="2000000" value="500000" step="50000">
                      <input type="range" class="range-max" min="0" max="2000000" value="1500000" step="50000">
                    </div>
                    <div class="filter__form-group filter__form-group--inline">
                      <div>
                        <label class="form__label form__label--small"
                          >Tối thiểu:</label
                        >
                        <div
                          class="filter__form-text-input filter__form-text-input--small"
                        >
                        <!-- CHỈNH LẠI GIÁ TIỀN Ở ĐÂY -->
                          <input
                            type="text"
                            class="filter__form-input price-input price-input__min"
                            value="500000"
                          />
                        </div>
                      </div>
                      <div>
                        <label class="form__label form__label--small"
                          >Tối đa:
                        </label>
                        <div
                          class="filter__form-text-input filter__form-text-input--small"
                        >
                        <!-- CHỈNH LẠI GIÁ TIỀN Ở ĐÂY -->
                          <input
                            type="text"
                            class="filter__form-input price-input price-input__max"
                            value="1500000"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="filter__separate"></div>

                  <!-- Filter 3 -->
                  <div class="filter__col">
                    <label class="form__label">Tên sản phẩm</label>
                    <div class="filter__form-group">
                      <div class="filter__form-text-input">
                        <input
                          type="text"
                          placeholder="Tìm kiếm tên sản phẩm..."
                          class="filter__form-input filter__form-input-branch"
                        />
                        <img
                          src="<?php echo ASSETS; ?>icons/seach.svg"
                          alt=""
                          class="filter__form-input-icon icon"
                        />
                      </div>
                    </div>
                    <div class="filter__form-group">
                      <div class="form__tabs">
                        <span class="form__tab">Lavazza</span>
                        <span class="form__tab">Nescafe</span>
                        <span class="form__tab">Starbucks</span>
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
                    class="btn btn--primary filter__submit"
                  >
                    Hiện kết quả
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row row-cols-5 row-cols-lg-2 row-cols-sm-1 g-3 render-product"></div>
        <div class="pagination-wrap">
          <img src="<?php echo ASSETS ?>icons/minus-pagi.svg" alt="" class="pagination-minus pagination-arrows">
          <ul id="pagination"></ul>
          <img src="<?php echo ASSETS ?>icons/plus-pagi.svg" alt=""  class="pagination-plus pagination-arrows">
        </div>
      </section>
    </div>
