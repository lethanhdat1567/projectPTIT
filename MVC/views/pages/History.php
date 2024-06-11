<?php
// Kiểm tra xem $data["OrderHistory"] có dữ liệu không
if (!empty($data["OrderHistory"])) {
    // Fetch all rows from $data["OrderHistory"]
    $orderHistoryRows = [];
    while ($row = mysqli_fetch_assoc($data["OrderHistory"])) {
        $orderHistoryRows[] = $row;
    }
}

// Kiểm tra xem $data["Orders"] có dữ liệu không
if (!empty($data["Orders"])) {
    // Lưu trữ các đơn hàng vào một mảng
    $orders = [];
    while ($order = mysqli_fetch_assoc($data["Orders"])) {
        $orders[] = $order;
    }
    // Đảo ngược thứ tự của mảng đơn hàng
    $reversedOrders = array_reverse($orders);
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
                        <div class="cart-info__list cart-info__list-history">
                            <?php foreach ($reversedOrders as $order) {?>
                                <div class="cart-item--wrap">
                                    <div class="his__info-wrap">
                                        <div class="his__desc">
                                            <p class="cart-desc cart-desc__total">Tổng tiền: <span class="cart-desc__price"><?php echo number_format($order["total_money"], 0, '.', '.')?>
                                            VND</span></p>
                                            <p class="cart-desc cart-Day--history">Ngày Đặt hàng: <?php echo date("d-m-Y", strtotime($order["order_date"])); ?></p>
                                            <?php
                                            $productCount = 0;
                                            foreach ($orderHistoryRows as $orderHistoryRow) {
                                                if ($orderHistoryRow['orders_id'] == $order['id']) {
                                                    $productCount += $orderHistoryRow["order_detail_quantity"];
                                                }
                                            }
                                            ?>
                                            <p class="cart-desc">Số lượng: <?php echo $productCount; ?></p>
                                        </div>
                                        <div class="his__status">
                                            <img src="<?php echo ASSETS ?>img/payment/truck.png" alt="" class="his__status-img">
                                            <p class="his__status-desc">Giao hàng thành công</p>
                                        </div>
                                    </div>
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
                                                        <p class="cart-item__price-wrap"> 100 | <span class="cart-item__status">Còn hàng</span></p>
                                                        <div class="cart-item__ctrl-wrap">
                                                            <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                                <div class="cart-item__input">Lazzada</div>
                                                                <div class="cart-item__input">Số lượng: <?php echo $orderHistoryRow["order_detail_quantity"]; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cart-item__content-right">
                                                        <p class="cart-item__total-price"><?php echo number_format($orderHistoryRow["order_detail_price"], 0, '.', '.') ?> VND</p>
                                                        <a href="<?php echo ROOT ?>Home/ProductDetail/<?php echo $orderHistoryRow["order_detail_prodId"]?>" class="cart-item__checkout-btn btn btn--primary btn--rounded">Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } ?>
                                        <div class="arrow-more"><img src="<?php echo ASSETS ?>icons/arrow-down.svg" alt=""></div>
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
                                            src="<?php echo ASSETS ?>icons/arrow-down.svg"
                                            alt=""
                                        />
                                        Trở về trang chủ
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
