<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ogani Template">
  <meta name="keywords" content="Ogani, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ogani | Template</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <?php wp_head() ?>
</head>

<body>
<!-- Page Preloader -->
<div id="preloader">
  <div class="loader"></div>
</div>

<!-- Hamburger Begin -->
<div class="hamburger__menu__overlay"></div>
<div class="hamburger__menu__wrapper">
  <div class="hamburger__menu__logo">
    <a href="#"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt=""></a>
  </div>
  <div class="hamburger__menu__cart">
    <ul>
      <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
      <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
    </ul>
    <div class="header__cart__price">item: <span>$150.00</span></div>
  </div>
  <div class="hamburger__menu__widget">
    <div class="header__top__right__language">
      <img src="<?php bloginfo('template_directory') ?>/img/language.png" alt="">
      <div>English</div>
      <span class="arrow_carrot-down"></span>
      <ul>
        <li><a href="#">Spanis</a></li>
        <li><a href="#">English</a></li>
      </ul>
    </div>
    <div class="header__top__right__auth">
      <a href="#"><i class="fa fa-user"></i> Login</a>
    </div>
  </div>
  <nav class="hamburger__menu__nav mobile-menu">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'top-menu',
        'container' => 'ul'
      )
    )
    ?>
  </nav>
  <div id="mobile-menu-wrap"></div>
  <div class="header__top__right__social">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-pinterest-p"></i></a>
  </div>
  <div class="hamburger__menu__contact">
    <ul>
      <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
      <li>Free Shipping for all Order of $99</li>
    </ul>
  </div>
</div>
<!-- Hamburger End -->

<!-- Header Section Begin -->
<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="header__top__left">
            <ul>
              <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
              <li>Free Shipping for all Order of $99</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="header__top__right">
            <div class="header__top__right__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-pinterest-p"></i></a>
            </div>
            <div class="header__top__right__language">
              <img src="<?php bloginfo('template_directory') ?>/img/language.png" alt="">
              <div>English</div>
              <span class="arrow_carrot-down"></span>
              <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
              </ul>
            </div>
            <div class="header__top__right__auth">
              <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="header__logo">
          <a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt=""></a>
        </div>
      </div>
      <div class="col-lg-6">
        <nav class="header__menu">
	        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'top-menu',
              'container' => 'ul'
            )
          )
	        ?>
        </nav>
      </div>
      <div class="col-lg-3">
        <div class="header__cart">
          <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
          </ul>
          <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
      </div>
    </div>
    <div class="hamburger__open">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</header>
<!-- Header Section End -->
