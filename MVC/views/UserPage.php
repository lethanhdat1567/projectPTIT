
<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
    const ASSETS = "<?php echo ASSETS; ?>";
    const ROOT = "<?php echo ROOT; ?>";
  </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ASSETS; ?>favicon/" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="<?php echo ASSETS; ?>favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16" 
      href="<?php echo ASSETS; ?>favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="<?php echo ASSETS; ?>favicon/site.webmanifest" />
    <link
      rel="mask-icon"
      href="<?php echo ASSETS; ?>favicon/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="stylesheet" href="<?php echo ASSETS; ?>fonts/stylesheet.css" />
    <!-- styles -->
<!-- Trong mã HTML của view của bạn -->
    <!-- <link rel="stylesheet"  href="./public/css/main.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>css/main.css">
    <script src="<?php echo ASSETS; ?>js/script.js" type="module"></script>
    <script src="<?php echo ASSETS; ?>js/localStorage.js" type="module"></script>
    <title>Coffe Shop</title>
  </head>
<body>
    <div id="Content"><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/projectPTIT/' . 'MVC/views/pages/'.$data['Pages'].'.php' ?></div>
</body>
</html>