<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

try {
    if (!file_exists(__DIR__ . '/MVC/core/Config.php')) {
        throw new Exception('File Config.php không tồn tại');
    }

    if (!file_exists(__DIR__ . '/MVC/Bridge.php')) {
        throw new Exception('File Bridge.php không tồn tại');
    }

    require_once(__DIR__ . '/MVC/core/Config.php');
    require_once(__DIR__ . '/MVC/Bridge.php');

    $myApp = new App();
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
