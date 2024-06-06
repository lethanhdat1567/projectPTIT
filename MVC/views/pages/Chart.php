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
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                <?php foreach($data["getChart"] as $row): ?>
                    ['Số người dùng đã đăng ký', <?php echo $row['TotalUser']; ?>],
                    ['Số đơn hàng được đặt', <?php echo $row['TotalOrder']; ?>]
                <?php endforeach; ?>
            ]);

            var options = {
                title: 'Thống kê người dùng và đơn hàng',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
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
                                <a href="<?php echo ROOT; ?>Admin/Main" class="admin-menu__link">Home</a>
                            </li>
                            <li class="admin-menu__items">
                                <a href="<?php echo ROOT; ?>Admin/QLSP" class="admin-menu__link">Product Management</a>
                            </li>
                            <li class="admin-menu__items">
                                <a href="<?php echo ROOT; ?>Admin/QLND" class="admin-menu__link">User Management</a>
                            </li>
                            <li class="admin-menu__items">
                                <a href="<?php echo ROOT; ?>Admin/Chart" class="admin-menu__link">Thống kê</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="admin-products">
                    <div class="admin-product__header">
                        <h2 class="admin-product__heading">Thống kê</h2>
                    </div>
                    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>