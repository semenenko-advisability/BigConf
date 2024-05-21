<!DOCTYPE html>
<html lang="en" class="page">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="theme-color" content="#111111" />
    <title>Big Conference</title>
    <?php wp_head(); ?>
    <link
      rel="preload"
      href="/wp-content/themes/Big-Conference/fonts/D-DINCondensed-Bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/wp-content/themes/Big-Conference/fonts/Montserrat-Regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/wp-content/themes/Big-Conference/fonts/Montserrat-Medium.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/wp-content/themes/Big-Conference/fonts/RFDewiExpanded-Regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/wp-content/themes/Big-Conference/fonts/RFDewiExpanded-Semibold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/wp-content/themes/Big-Conference/fonts/RFDewiExpanded-Bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/wp-content/themes/Big-Conference/fonts/RFDewiExpanded-Ultrabold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
  </head>

  <body class="page__body">
    <div class="site-container">
      <header class="header fixed-block">
        <div class="container header__container">
          <a href="" class="logo header__logo"
            ><img
              src="/wp-content/themes/Big-Conference/img/logo.svg"
              alt="Big Conference logo"
              class="logo__image"
          /></a>
          <nav class="nav header__nav" title="Header Navigation" data-menu>
            <ul class="list-reset nav__list">
              <li class="nav__item">
                <a href="#numbers" class="nav__link" data-menu-item data-scroll
                  ><?php echo asl()->translate('about');?></a
                >
              </li>
              <li class="nav__item">
                <a href="#tickets" class="nav__link" data-menu-item data-scroll
                  ><?php echo asl()->translate('tickets');?></a
                >
              </li>
              <li class="nav__item">
                <a href="#contacts" class="nav__link" data-menu-item data-scroll
                  ><?php echo asl()->translate('contacts');?></a
                >
              </li>
              <a
                href="#tickets"
                class="btn accent-btn header__btn"
                data-menu-item
                ><?php echo asl()->translate('book');?></a
              >
              <a href="https://t.me/bigconfsupport" class="btn header__btn" data-menu-item
                ><?php echo asl()->translate('sponsor');?></a
              >
            </ul>
          </nav>

          <?php wp_nav_menu( [
              'theme_location'  => 'language-menu',
              'container'       => 'div',
              'container_class' => 'language-nav',
              'menu_class'      => 'list-reset language-nav__list',
              'items_wrap'      => '<a href="" class="language-nav__icon"></a><ul class="%2$s">%3$s</ul>'
          ] ); ?>

          <div class="btn-wrapper header__btn-wrapper">
            <a href="#tickets" class="btn accent-btn header__btn" data-menu-item
              ><?php echo asl()->translate('book');?></a
            >
            <a href="#contacts" class="btn header__btn" data-menu-item
              ><?php echo asl()->translate('sponsor');?></a
            >
          </div>
          <button
            class="btn-reset burger"
            aria-label="Open menu"
            aria-expanded="false"
            data-burger
          >
            <span class="burger__line"></span>
          </button>
        </div>
      </header>
