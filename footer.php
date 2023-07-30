
<footer class="footer block">
  <div class="footer__inner block__inner">

    <div class="footer__menu-columns">
      <div class="footer__column">
        <p class="footer__column-title">Уход</p>
        <?php wp_nav_menu( array(
            'menu' => 'Футер - Уход',
            'container' => 'ul',
            'menu_class' => 'footer__column-nav'
        )) ?>
      </div>

      <div class="footer__column">
        <p class="footer__column-title">Услуги</p>
        <?php wp_nav_menu( array(
            'menu' => 'Футер - Услуги',
            'container' => 'ul',
            'menu_class' => 'footer__column-nav'
        )) ?>
      </div>

      <div class="footer__column">
        <p class="footer__column-title">О нас</p>
        <?php wp_nav_menu( array(
            'menu' => 'Футер - О нас',
            'container' => 'ul',
            'menu_class' => 'footer__column-nav'
        )) ?>
      </div>

      <div class="footer__column">
        <p class="footer__column-title">Пансионаты</p>
        <?php wp_nav_menu( array(
            'menu' => 'Футер - Пансионаты',
            'container' => 'ul',
            'menu_class' => 'footer__column-nav'
        )) ?>
      </div>
    </div>

    <div class="footer__right-column">
      <a href="/"><img loading="lazy" class="footer__column-logo" src="/wp-content/uploads/2022/03/image-15-1.png" alt="logotype"></a>
      <a class="footer__column-phone block__text24" href="tel:+74952011521">8 (495) 201-15-21</a>
      <a class="footer__column-phone block__text24" href="tel:+79036125057">8 (903) 612-50-57</a>
    </div>

    <div class="footer__copyright-container">
      <p class="footer__copyright-text">© 2022. Все права защищены. <a href="/politika-konfidentsialnosti/">Политика конфиденциальности</a></p>
    </div>

  </div>
</footer>

<div class="side-links">
    <button class="side-links__link side-links__link-animation" data-bs-toggle="modal" data-bs-target="#callbackModal">Заказать обратный звонок</button>
    <a class="side-links__link side-links__link-animation" href="/dokumenty-dlya-oformleniya/">Перечень документов для оформления</a>
    <a class="side-links__link side-links__link-animation" href="/transfer-do-doma-pozhilykh/">Трансфер до дома пожилых</a>
</div>

<!-- Callback Modal-->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="modal__heading">Заказать звонок</div>
                <?php  echo do_shortcode('[contact-form-7 id="1208" title="Обратный звонок"]'); ?>
            </div>
        </div>
    </div>
</div>

<!-- Get Transportation Modal-->
<div class="modal fade" id="getTransportationModal" tabindex="-1" aria-labelledby="getTransportationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="modal__heading">Заказать транспортировку в пансионат</div>
                <?php  echo do_shortcode('[contact-form-7 id="1275" title="Заказать транспортировку в пансионат"]'); ?>
            </div>
        </div>
    </div>
</div>



<?php wp_footer(); ?>


<script>
  // Так как библиотека FSlightbox добавляется в футер, а все всплывающие окна уже объявлены
  // Происходит инициализация начала работы библиотеки
  refreshFsLightbox();
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(26380665, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img loading="lazy" src="https://mc.yandex.ru/watch/26380665" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SDQWP4JQJ7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-SDQWP4JQJ7');
</script>
</body>
</html>
