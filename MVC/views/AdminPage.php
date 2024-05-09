<?php
$css_path = getenv('CSS_PATH');
$script_path = getenv('SCRIPT_PATH');
$favicon_path = getenv('FAVICON_PATH');
$img_path = getenv('IMG_PATH');
$icon_path = getenv('ICON_PATH');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $favicon_path ?>" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="<?= $favicon_path ?>favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16" 
      href="<?= $favicon_path ?>favicon-16x16.png"
    />
    <link rel="manifest" href="<?= $favicon_path ?>site.webmanifest" />
    <link
      rel="mask-icon"
      href="<?= $favicon_path ?>safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="stylesheet" href="./assets/fonts/stylesheet.css" />
    <!-- styles -->
<!-- Trong mã HTML của view của bạn -->
    <!-- <link rel="stylesheet"  href="./public/css/main.css"> -->
    <!-- <link rel="stylesheet" href="<?= $css_path ?>main.css"> -->
    <link rel="stylesheet" type="text/css"  href="<?= $css_path ?>style.php">
    <script src="<?= $script_path ?>script.js"></script>
    <title>Grocery Mart</title>
  </head>
<body>
    <header id="Header" class="header"><?php require_once './MVC/views/blocks/HeaderAdmin.php' ?></header>
    <div id="Content"><?php require_once './MVC/views/pages/'.$data['Pages'].'.php' ?></div>
    <footer id="Footer" class="footer"><?php require_once './MVC/views/blocks/Footer.php' ?></footer>
</body>
</html>