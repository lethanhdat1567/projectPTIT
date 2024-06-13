<?php
// $array = [];
// while ($row = mysqli_fetch_array($data["getChart"])) {
//     $array[] = $row['TotalUser'];
//     $array[] = $row['TotalOrder'];
// }
//  echo implode(', ', $array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart", "bar"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            <?php 
                $totalRevenue = 0;
                while($row = mysqli_fetch_assoc($data["getChart"])): 
                    $totalRevenue = $row['SumTotalMoney']; // Lưu tổng doanh thu vào biến
                ?>
                    ['Số người dùng đã đăng ký', <?php echo $row['TotalUser']; ?>],
                    ['Số đơn hàng được đặt', <?php echo $row['TotalOrder']; ?>]
                <?php endwhile; ?>
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                <?php foreach($data["getChart"] as $row): ?>
                    ['Số người dùng đã đăng ký', <?php echo $row['TotalUser']; ?>],
                    ['Số đơn hàng được đặt', <?php echo $row['TotalOrder']; ?>]
                <?php endforeach; ?>
            ]);
            // Vẽ biểu đồ tròn 3D
            var options = {
                title: 'Thống kê người dùng và đơn hàng',
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);

            // Vẽ biểu đồ cột
            var optionsColumn = {
                title: 'Thống kê người dùng và đơn hàng (Cột)',
                hAxis: {
                    title: 'Thống kê',
                    minValue: 0
                },
                vAxis: {
                    title: 'Số lượng'
                }
            };
            var columnChart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
            columnChart.draw(data, optionsColumn);
            document.querySelector('.admin-product__total').innerText = 'Tổng doanh thu: ' + new Intl.NumberFormat().format(<?php echo $totalRevenue; ?>) ;
        }
    </script>
</head>
<body>
    <div class="user-mana">
        <div class="container">
            <div class="admin-product__wrap">
                <div class="admin-menu">
                    <h2 class="admin-menu__heading">Admin Menu</h2>
                    <div class="admin-menu__wrap">
                    <ul class="admin-menu__list">
                <li class="admin-menu__items">
                  <a
                    href="<?php echo ROOT; ?>Admin/Main"
                    class="admin-menu__link"
                    >Trang chủ</a
                  >
                </li>
                <li class="admin-menu__items">
                  <a
                    href="<?php echo ROOT; ?>Admin/QLSP"
                    class="admin-menu__link"
                    >Trang quản lí sản phẩm</a
                  >
                </li>
                <li class="admin-menu__items">
                  <a
                    href="<?php echo ROOT; ?>Admin/QLND"
                    class="admin-menu__link"
                    >Trang quản lí người dùng</a
                  >
                </li>
                <li class="admin-menu__items">
                  <a
                    href="<?php echo ROOT; ?>Admin/QLDH"
                    class="admin-menu__link"
                    >Trang quản lí đơn hàng</a
                  >
                </li>
                <li class="admin-menu__items">
                  <a
                    href="<?php echo ROOT; ?>Admin/Chart"
                    class="admin-menu__link"
                    >Thống kê</a
                  >
                </li>
              </ul>
                    </div>
                </div>
                <div class="admin-products">
                    <div class="admin-product__header">
                        <h2 class="admin-product__heading">Thống kê</h2>
                    </div>
                    <div class="admin-product__total">Tổng danh thu: <?php while($row = mysqli_fetch_assoc($data["getChart"])): ?>
                            <p>Tổng doanh thu: <?php echo number_format($row['SumTotalMoney'], 0, ',', '.'); ?> VND</p>
                        <?php endwhile; ?> VND</p></div>
                    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                    <div id="columnchart" style="width: 900px; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
