<?php

/*set your website title*/

define('WEBSITE_TITLE', "My Website");

/*protocal type http or https*/
define('PROTOCAL', 'http');

/*root and asset paths*/
// $serverName = 'localhost';
$path = str_replace("\\", "/", PROTOCAL . "://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

$rootWithoutCore = str_replace("app/core", "public", $path);

// Tìm và loại bỏ bất kỳ phần "MVC/core" nào
$rootWithoutMVC = str_replace("MVC/core/", "", $rootWithoutCore);
$assetsWithoutMVC = str_replace("MVC/core", "assets", $rootWithoutCore);

define('ROOT', $rootWithoutMVC);
define('ASSETS', $assetsWithoutMVC);

/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG', true);

if (DEBUG) {
    ini_set("display_errors", 1);
} else {
    ini_set("display_errors", 0);
}