<?php $row = mysqli_fetch_assoc($data['products']); 
      $json_data = json_encode($row);  
?>
<main class="product-page">
      <div class="container">
        <!-- Search bar -->
        <div class="product-container">
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
        <div class="product-container">
          <ul class="breadcrumbs">
            <li>
              <a href="#!" class="breadcrumbs__link"
                >Departments
                <img src="<?php echo ASSETS; ?>icons/arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="#!" class="breadcrumbs__link"
                >Coffee
                <img src="<?php echo ASSETS; ?>icons/arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="#!" class="breadcrumbs__link"
                >Coffee Beans
                <img src="<?php echo ASSETS; ?>icons/arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="#!" class="breadcrumbs__link breadcrumbs__link--current"
                >LavAzza
              </a>
            </li>
          </ul>
        </div>
        <!-- Product info -->
        <div class="product-container prod-info-content">
          <div class="row">
            <div class="col-5 col-xl-6 col-lg-12">
              <div class="prod-review">
                <div class="prod-review__list">
                  <div class="prod-review__item">
                    <img
                      src="<?php echo ASSETS; ?>img/products/<?php echo $row['thumbnail'] ?>"
                      alt=""
                      class="prod-review__img"
                    />
                  </div>
                  <div class="prod-review__item">
                    <img
                      src="<?php echo ASSETS; ?>img/products/item1.png"
                      alt=""
                      class="prod-review__img"
                    />
                  </div>
                  <div class="prod-review__item">
                    <img
                      src="<?php echo ASSETS; ?>img/products/item1.png"
                      alt=""
                      class="prod-review__img"
                    />
                  </div>
                  <div class="prod-review__item">
                    <img
                      src="<?php echo ASSETS; ?>img/products/item1.png"
                      alt=""
                      class="prod-review__img"
                    />
                  </div>
                </div>
                <div class="prod-review__thumb">
                  <?php while($imgs = mysqli_fetch_assoc($data['imgs'])){ ?>
                    <img
                    src="<?php echo ASSETS; ?>img/products/<?php echo $imgs['thumbnail'] ?>"
                    alt=""
                    class="prod-review__thumb-img"
                  />
                    <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-7 col-xl-6 col-lg-12">
              <form action="" class="form">
                <section class="prod-info">
                  <h1 class="prod-info__heading">
                    <?php echo $row['name'] ?>
                  </h1>
                  <div class="row">
                    <div class="col-5 col-xxl-6 col-xl-12">
                      <div class="prod-prop">
                        <img
                          src="<?php echo ASSETS; ?>icons/star.svg"
                          alt=""
                          class="prod-prop__icon"
                        />
                        <h4 class="prod-prop__title">(3.5) 1100 reviews</h4>
                      </div>
                      <label class="form__label prod-info__label"
                        >Size/Weight</label
                      >
                      <div class="filter__form-group">
                        <div class="form__select-wrap">
                          <div class="form__select" style="--width: 146px">
                            500g
                          </div>
                          <div class="form__select">
                            Gram
                          </div>
                        </div>
                        <div class="filter__form-group">
                        </div>
                      </div>
                    </div>
                    <div class="col-7 col-xxl-6 col-xl-12">
                      <div class="prod-props">
                        <div class="prod-prop">
                          <img
                            src="<?php echo ASSETS; ?>icons/document.svg"
                            alt=""
                            class="prod-prop__icon icon"
                          />
                          <h4 class="prod-prop__title">Compare</h4>
                        </div>
                        <div class="prod-prop">
                          <img
                            src="<?php echo ASSETS; ?>icons/buy.svg"
                            alt=""
                            class="prod-prop__icon icon"
                          />
                          <div>
                            <h4 class="prod-prop__title">Delivery</h4>
                            <p class="prod-prop__desc">From $6 for 1-3 days</p>
                          </div>
                        </div>
                        <div class="prod-prop">
                          <img
                            src="<?php echo ASSETS; ?>icons/bag.svg"
                            alt=""
                            class="prod-prop__icon icon"
                          />
                          <div>
                            <h4 class="prod-prop__title">Pickup</h4>
                            <p class="prod-prop__desc">Out of 2 store, today</p>
                          </div>
                        </div>
                        <div class="prod-info__card">
                          <div class="prop-info__row">
                            <span class="prod-info__price--discount <?php echo $row['discount'] ? "show" : "" ?> "><?php echo number_format($row['price'], 0, ',', '.'); ?>$</span>
                            <span class="prod-info__tax <?php echo $row['discount'] ? "show" : ""; ?>"><?php echo  $row['discount'] ?>%</span>
                          </div>
                          <p class="prod-info__total-price <?php echo $row['discount'] ? "prod-info__total-price--modify" : ""; ?>">$<?php $total = $row['price'] - ($row['price'] * $row['discount']) / 100;  echo number_format($total, 0, ',', '.'); ?></p>
                          <div class="prod-info__row">
                            <button
                              class="btn btn--primary prod-info__add-to-cart"
                            >
                              Add to card
                            </button>
                            <button
                              class="like-btn prod-info__like-btn"
                              fdprocessedid="1nyck"
                            >
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
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </form>
            </div>
          </div>
        </div>
        <!-- Product content -->
        <div class="product-container">
          <div class="prod-tad js-tabs">
            <ul class="prod-tad__list">
              <li class="prod-tad__item prod-tad__item--current">
                Description
              </li>
              <li class="prod-tad__item">Review (1100)</li>
              <li class="prod-tad__item">Similar</li>
            </ul>
            <div class="prod-tad__contents">
              <div class="prod-tad__content prod-tad__content--current">
                <div class="row">
                  <div class="col-8 col-xl-10 col-lg-12">
                  <div class="text-content prod-tab__text-content">
                  <?php
                        echo $row['description']
                  ?>
                  </div>
                  </div>
                </div>
              </div>
              <div class="prod-tad__content">
                <div class="prod-content">
                  <h2 class="prod-content__heading">
                    What our customer are saying
                  </h2>
                  <div class="row row-cols-3 gx-lg-2 row-cols-md-1 gy-md-3">
                    <!-- Review card 1 -->
                    <div class="col">
                      <div class="review-card">
                        <div class="review-card__content">
                          <img
                            src="<?php echo ASSETS; ?>img/avatar/avar-1.png"
                            alt=""
                            class="review-card__avatar"
                          />
                          <div class="review-card__info">
                            <h4 class="review-card__title">Jakir Hussen</h4>
                            <p class="review-card__desc">
                              Great product, I love this Coffee Beans
                            </p>
                          </div>
                        </div>
                        <div class="review-card__rating">
                          <div class="review-card__star-list">
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star-half.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star-blank.svg"
                              alt=""
                              class="review-card__star"
                            />
                          </div>
                          <span class="review-card__rating-title">
                            (3.5) Review
                          </span>
                        </div>
                      </div>
                    </div>
                    <!-- Review card 2 -->
                    <div class="col">
                      <div class="review-card">
                        <div class="review-card__content">
                          <img
                            src="<?php echo ASSETS; ?>img/avatar/avar-2.png"
                            alt=""
                            class="review-card__avatar"
                          />
                          <div class="review-card-info">
                            <h4 class="review-card__title">Jubed Ahmed</h4>
                            <p class="review-card__desc">
                              Awesome Coffee, I love this Coffee Beans
                            </p>
                          </div>
                        </div>
                        <div class="review-card__rating">
                          <div class="review-card__star-list">
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star-half.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star-blank.svg"
                              alt=""
                              class="review-card__star"
                            />
                          </div>
                          <span class="review-card__rating-title">
                            (3.5) Review
                          </span>
                        </div>
                      </div>
                    </div>
                    <!-- Review card 3 -->
                    <div class="col">
                      <div class="review-card">
                        <div class="review-card__content">
                          <img
                            src="<?php echo ASSETS; ?>img/avatar/avar-3.png"
                            alt=""
                            class="review-card__avatar"
                          />
                          <div class="review-card__info">
                            <h4 class="review-card__title">Delwar Hussain</h4>
                            <p class="review-card__desc">
                              Great product, I like this Coffee Beans
                            </p>
                          </div>
                        </div>
                        <div class="review-card__rating">
                          <div class="review-card__star-list">
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star-half.svg"
                              alt=""
                              class="review-card__star"
                            />
                            <img
                              src="<?php echo ASSETS; ?>icons/star-blank.svg"
                              alt=""
                              class="review-card__star"
                            />
                          </div>
                          <span class="review-card__rating-title">
                            (3.5) Review
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="prod-tad__content">
              <div class="prod-content">
                <h2 class="prod-content__heading">
                  Similar items you might like
                </h2>
                <div
                  class="row row-cols-6 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-3 render-product similar-product"
                >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- script -->
    <script>
     const AddToCard = document.querySelector('.prod-info__add-to-cart');
    const All = JSON.parse(localStorage.getItem('ALL'));
    const favorites = JSON.parse(localStorage.getItem("FAVOR"));
    const Btn = document.querySelector('.prod-info__like-btn');

    // Kiểm tra xem danh sách yêu thích không rỗng
if(favorites && favorites.length > 0) {
  const isFavor = favorites.some(item => item.id == <?php echo $row['id'] ?> && item.isFavor);
  if(isFavor) {
    console.log('123');
    Btn.classList.add("like-btn--liked");
  }
}

Btn.onclick = e => {
  e.preventDefault();
  All.forEach((item,index) => {
    if(item.id == <?php echo $row['id'] ?>) {
      const indexPro = index;
      if (Btn.classList.contains("like-btn--liked")) {
        Btn.classList.remove('like-btn--liked');
        dispatch("deleteFavor", indexPro);
      } else {
        Btn.classList.add('like-btn--liked');
        dispatch("addFavor", indexPro);
      }
    }
  });
}

      AddToCard.onclick = (e) => {
        e.preventDefault();
        const productName = <?php echo ($json_data); ?>;
        productName.isFavor = false;
        let cart = JSON.parse(localStorage.getItem('PRODUCT')) || [];
        let existingProductIndex = cart.findIndex(item => item.id === productName.id);
    if (existingProductIndex !== -1) {
      cart[existingProductIndex].quantity = (cart[existingProductIndex].quantity || 1) + 1;
    } else {
      productName.quantity = 1;
      cart.push(productName);
    }
        localStorage.setItem('PRODUCT', JSON.stringify(cart));
        let total = cart.reduce((acc, cur) => {
            return acc + (parseInt(cur.price, 10) * cur.quantity);
        }, 0)
        localStorage.setItem('total', total);
        localStorage.setItem('alert', true);
        window.location.href = "<?php echo ROOT; ?>Home/Main";
      }
    </script>