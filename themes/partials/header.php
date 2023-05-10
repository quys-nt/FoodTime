<!doctype html>
<html lang="en">

<head>
  <title>FoodTime</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="<?= BASE_URL ?>/assets/imgs/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/vendor/css/slick-theme.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <header class="c-header">
    <div class="container">
      <div class="c-header__inner">
        <a href="/FoodTime">
          <img src="../../FoodTime/assets/imgs/logo-01.svg" alt="logo foodtime">
        </a>
        <div class="c-header__text">
          <ul class="c-header__nav d-none d-lg-flex me-5">
            <li class="c-header__item"><a href="#" class="c-header__link">Home</a></li>
            <li class="c-header__item"><a href="#" class="c-header__link">Blog</a></li>
            <li class="c-header__item"><a href="#" class="c-header__link">About us</a></li>
          </ul>
          <div class="c-header__list ms-5">
            <a href="#" class="c-btn__primary">Login</a>
            <a href="#" class="ms-3 c-btn__primary c-btn__round">
              <img src="../../FoodTime/assets/imgs/icon-cart.svg" alt="icon cart">
              <div class="c-btn__round--text rounded-circle">2</div>
            </a>
            <a href="#" class="ms-3 d-lg-none c-btn__menu">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="c-header__sp js-menu__sp">
      <div class="c-btn__cancel js-menu__close"></div>
      <ul class="c-header__sp--nav">
        <li class="c-header__sp--item"><a href="#" class="c-header__sp--link">Home</a></li>
        <li class="c-header__sp--item"><a href="#" class="c-header__sp--link">Blog</a></li>
        <li class="c-header__sp--item"><a href="#" class="c-header__sp--link">About us</a></li>
      </ul>
    </div>
  </header>