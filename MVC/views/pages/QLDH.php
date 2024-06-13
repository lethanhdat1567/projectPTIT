<?php
$orderHistoryRows = [];
while ($row = mysqli_fetch_assoc($data["getOrderAdmin"])) {
    $orderHistoryRows[] = $row;
}
?>
<div class="user-mana">
    <div class="container">
        <div class="admin-product__wrap">
            <div class="admin-menu">
                <h2 class="admin-menu__heading">Admin Menu</h2>
                <div class="admin-menu__wrap">
                    <ul class="admin-menu__list">
                        <li class="admin-menu__items">
                            <a href="<?php echo ROOT; ?>Admin/Main" class="admin-menu__link">Trang chủ</a>
                        </li>
                        <li class="admin-menu__items">
                            <a href="<?php echo ROOT; ?>Admin/QLSP" class="admin-menu__link">Trang quản lí sản phẩm</a>
                        </li>
                        <li class="admin-menu__items">
                            <a href="<?php echo ROOT; ?>Admin/QLND" class="admin-menu__link">Trang quản lí người dùng</a>
                        </li>
                        <li class="admin-menu__items">
                            <a href="<?php echo ROOT; ?>Admin/QLDH" class="admin-menu__link">Trang quản lí đơn hàng</a>
                        </li>
                        <li class="admin-menu__items">
                            <a href="<?php echo ROOT; ?>Admin/Chart" class="admin-menu__link">Thống kê</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="orders-admin">
                <h1 class="orders__title">Danh sách mua hàng</h1>
                <?php if (!empty($orderHistoryRows)): ?>
                    <?php 
                    $currentOrder = null;
                    $total = 0; // Khởi tạo biến $total
                    foreach ($orderHistoryRows as $row): 
                        if ($currentOrder !== $row['order_date']): 
                            if ($currentOrder !== null): ?>
                                </div>
                                </div>
                                <div class="orders__img-wrap">
                                    <img src="<?php echo ASSETS ?>icons/arrow-down.svg" alt="" class="orders__img" />
                                </div>
                            </div>
                            <?php 
                            endif; 
                            $currentOrder = $row['order_date'];
                            $total = 0;
                            foreach ($orderHistoryRows as $innerRow) {
                                if ($innerRow['order_date'] == $currentOrder) {
                                    $total += $innerRow['quantity'];
                                }
                            }
                            ?>
                            <div class="items-wrapper">
                                <div class="orders__wrapper">
                                    <div class="orders__heading">
                                        <div class="orders__heading-info">
                                            <h2 class="orders-info__user">Tên: <?php echo $row['fullname']; ?> (Số lượng: <?php echo $total; ?>)</h2>
                                            <p class="orders-info__phone"><span class="orders__heading-item">Ngày đặt hàng: </span><?php echo $row['order_date']; ?></p>
                                            <p class="orders-info__phone"><span class="orders__heading-item">Số điện thoại: </span><?php echo $row['phone_number']; ?></p>
                                            <p class="orders-info__address"><span class="orders__heading-item">Địa chỉ: </span><?php echo $row['address']; ?></p>
                                        </div>
                                        <p class="orders__heading-total"><?php echo number_format($row['order_total_money'], 0, ',', '.'); ?> đ</p>
                                    </div>
                                    <div class="orders__items-wrapper">
                                        <div class="order__items">
                        <?php endif; ?>
                            <div class="order__item">
                                <img src="<?php echo ASSETS ?>img/products/<?php echo $row['thumbnail']; ?>" alt="" class="order__item-img" />
                                    <div class="order__item-info">
                                        <h2 class="order__item-name"><?php echo $row['product_name']; ?></h2>
                                        <div class="order__item-quantity">Số lượng: <?php echo $row['quantity']; ?></div>
                                    </div>
                                <div class="order__item-total">
                                    <p class="order__total-price"><?php echo number_format($row['order_details_total_money'], 0, ',', '.'); ?> đ</p>
                                </div>
                            </div>
                    <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="orders__img-wrap">
                                    <img src="<?php echo ASSETS ?>icons/arrow-down.svg" alt="" class="orders__img" />
                                </div>
                            </div>
                <?php else: ?>
                    <p>Không có đơn hàng nào.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
