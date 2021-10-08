<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../vendor/autoload.php";


use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger('test');
$log->pushHandler(new StreamHandler('log/your.log', Logger::WARNING));


$log->warning('Warning');
$log->error('Error');


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>MyPracticeShop</title>
</head>
<body>
<div class="main-wrapper">
  <header class="header">
    <ul class="sign-up-list">
      <li><a href="sign-up.php">Register</a></li>
      <li><a href="sign-up.php">Sign In</a></li>
    </ul>
    <div class="basket">
      <a href="basket.php"><img src="img/basket.svg" alt="Basket"></a>
    </div>
  </header>
  <section>
    <div class="main-section">
      <div class="header-logo">
        <h1><a href="#"><img src="img/logo.png" alt="avenu-logo"></a></h1>
      </div>
      <img class="man-logo" src="img/photo.png" alt="man-img">
      <div class="nav-menu">
        <ul class="top-menu">
          <li><a href="" class="submenu-link">Products</a></li>
          <li><a href="">Info</a></li>
          <li><a href="">Contacts</a></li>
          <li><a href="">Map</a></li>
        </ul>
      </div>
    </div>
  </section>
  <footer>
    <div class="footer-img">
      <p><img src="img/ave-logo.png" alt="avenu-logo"></p>
    </div>
    <div class="footer-strip">
      <p class="left-footer-text">© 2021 Avenue Fashion™</p>
      <p class="right-footer-text">Dev by Yevhenii Oksom</p>
    </div>
  </footer>
</div>
</body>
</html>



