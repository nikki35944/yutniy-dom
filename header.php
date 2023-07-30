<!DOCTYPE html>
<html lang="ru-RU">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>



</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="header block">
    <div class="header__inner block__inner">

      <section class="header__upper-side">
        <a href="/"><img loading="lazy" src="/wp-content/uploads/2022/03/image-2.png" alt="logotype" class="header__logo"></a>
        <div class="header__data-container header__data-container_phones">
          <a href="tel:+74952011521"><img loading="lazy" src="/wp-content/uploads/2022/03/Group-64.svg" alt="phones" class="header__data-icon"></a>
          <div class="header__data-text-container">
            <a href="tel:+74952011521" class="header__data-link">8 (495) 201-15-21</a>
            <a href="tel:+79036125057" class="header__data-link">8 (903) 612-50-57</a>
          </div>
        </div>
        <div class="header__data-container header__data-container_address">
          <a href="/kontakty/"><img loading="lazy" src="/wp-content/uploads/2022/03/Group-63.svg" alt="phones" class="header__data-icon"></a>
          <a href="/kontakty/" class="header__data-link">Адреса пансионатов</a>
        </div>
        <button class="header__callback-button" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</button>
        <button class="header__burger"></button>
      </section>

      <!-- Меню -->
      <?php wp_nav_menu( array(
        'container' => 'ul',
        'menu_class' => 'header__nav'
      )) ?>

    </div>
  </header>