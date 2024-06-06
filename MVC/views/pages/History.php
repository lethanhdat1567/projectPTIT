<?php
// Kiểm tra xem $data["OrderHistory"] có dữ liệu không
if (!empty($data["OrderHistory"])) {
    // Fetch all rows from $data["OrderHistory"]
    $orderHistoryRows = [];
    while ($row = mysqli_fetch_assoc($data["OrderHistory"])) {
        $orderHistoryRows[] = $row;
    }
}
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
                src="<?php echo ASSETS ?>icons/seach.svg"
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
              <a href="<?php echo ROOT ?>" class="breadcrumbs__link"
                >Home
                <img src="<?php echo ASSETS ?>icons/arrow-right.svg" alt="" />
              </a>
            </li>
            <li>
              <a href="#!" class="breadcrumbs__link breadcrumbs__link--current"
                >Lịch sử mua hàng
              </a>
            </li>
          </ul>
        </div>
        <!-- Checkout content -->
        <div class="checkout-container">
          <div class="row gy-xl-3">
            <div class="col-12">
              <div class="cart-info">
                <h1 class="cart-info__heading">Lịch sử mua hàng</h1>
                <p class="cart-desc cart-desc--history">Đơn hàng đã mua: </p>
                <div class="cart-info__list">
                <?php while ($order = mysqli_fetch_assoc($data["Orders"])) { ?>
                    <div class="cart-item--wrap">
                        <p class="cart-desc cart-Day--history">Ngày Đặt hàng: <?php echo date("d-m-Y", strtotime($order["order_date"])); ?></p>
                        <div class="cart-item--history_wrapper">
                            <?php
                            // Filter order history rows for the current order
                            $orderHistoryRowsFiltered = array_filter($orderHistoryRows, function($orderHistoryRow) use ($order) {
                                return $orderHistoryRow['orders_id'] == $order['id'];
                            });

                            foreach ($orderHistoryRowsFiltered as $orderHistoryRow) { ?>
                                <article class="cart-item cart-item--history">
                                    <a href="<?php echo ROOT ?>Home/ProductDetail/<?php echo $orderHistoryRow["id"]; ?>">
                                        <img src="<?php echo ASSETS ?>img/products/<?php echo $orderHistoryRow["thumbnail"]; ?>" alt="" class="cart-item__thumb" />
                                    </a>
                                    <div class="cart-item__content">
                                        <div class="cart-item__content-left">
                                            <h3 class="cart-item__title"><?php echo $orderHistoryRow["product_name"]; ?></h3>
                                            <p class="cart-item__price-wrap"><?php echo $orderHistoryRow["order_detail_price"]; ?> | <span class="cart-item__status">In Stock</span></p>
                                            <div class="cart-item__ctrl-wrap">
                                                <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                    <div class="cart-item__input">Lazzada</div>
                                                    <div class="cart-item__input">Số lượng: <?php echo $orderHistoryRow["order_detail_quantity"]; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item__content-right">
                                            <p class="cart-item__total-price"><?php echo $orderHistoryRow["order_detail_price"]; ?></p>
                                            <button class="cart-item__checkout-btn btn btn--primary btn--rounded">Xem chi tiết</button>
                                        </div>
                                    </div>
                                </article>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
                <div class="cart-info__bottom">
                  <div class="cart-info__row cart-info__row-md--block">
                    <div class="cart-info__continue">
                      <a href="<?php echo ROOT ?>" class="cart-info__continue-link">
                        <img
                          class="cart-info__continue-icon icon"
                          src="<?php echo ASSETS ?>icons/arrow-down-2.svg"
                          alt=""
                        />
                        Continue Shopping
                      </a>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>