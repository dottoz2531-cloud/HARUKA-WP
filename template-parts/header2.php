<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="" />
    <title>Haruka kawaii shop</title>
    <meta name="description" content="Haruka kawaii shop"/>
    <head prefix="og:https://ogp.me/ns#">
    <meta property=”og:site_name” content="Haruka kawaii shop" />
    <meta property="og:title" content="Haruka kawaii shop"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://haruka-kawaii.dozzot.com/" />
    <meta property="og:image" content="<?php echo get_template_directory_uri()?>/img/og-img.png" />
    <meta property="og:description" content="Welcome to Haruka kawaii shop" />

    <link rel="icon" href="<?php echo get_template_directory_uri()?>/img/haruka-icon.PNG" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <?php wp_head(); ?>
  </head>

  <body>
    
    <header id="header" class="header">
      <div class="header__inner inner">
        <h1 class="header__logo">
          <a href="/"
            ><img src="<?php echo get_template_directory_uri()?>/img/shoplogo.png" alt="Haruka kawaii shop"
          /></a>
        </h1>
        <div class="header__items">
          <button
            id="js-drawer-button"
            type="button"
            class="header__icon drawer-icon"
          >
            <span class="drawer-icon__bar"></span>
            <span class="drawer-icon__bar"></span>
            <span class="drawer-icon__bar"></span>
          </button>
        </div>

        <nav id="js-drawer-content" class="header__nav">
          <div class="drawer__items">
            <ul class="header__sns-items">
              <li class="header__sus-item">
                <a
                  href="https://www.instagram.com/haruka.kawaiishop?igsh=cmt4ZGUydWNrODZh"
                  class="header__sns-link"
                  ><img class="is-instagram" src="<?php echo get_template_directory_uri()?>/img/instagram.PNG" alt=""
                /></a>
              </li>
              <li class="header__sus-item">
                <a href="https://lin.ee/i8XduPG" class="header__sns-link"
                  ><img class="is-line" src="<?php echo get_template_directory_uri()?>/img/line.PNG" alt=""
                /></a>
              </li>
            </ul>
            <ul class="header__lists">
              <li class="header__list">
                <a href="<?php echo home_url('/');?>#concept" class="header__link js-nav-link">CONCEPT</a>
              </li>
              <li class="header__list">
                <a href="<?php echo home_url('/');?>#gallery" class="header__link">GALLERY</a>
              </li>
              <li class="header__list">
                <a href="<?php echo home_url('/');?>#contact" class="header__link">CONTACT & ORDER</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>