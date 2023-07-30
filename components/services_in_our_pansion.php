<?php

function services_in_our_pansion() {
  ob_start();
?>

  <section class="services_in_our_pansion block">
    <div class="services_in_our_pansion__inner block__inner">
      <h2 class="services_in_our_pansion__title block__text30"><span class="block__text-blue">Услуги</span> для пожилых в нашем пансионате</h2>
      <p class="services_in_our_pansion__subtitle">Мы разрабатываем программу пребывания в пансионате индивидуально для каждого постояльца. В зависимости от диагноза и пожеланий мы подбираем программу ухода и реабилитации</p>
      <ul class="services_in_our_pansion__list">
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/chastnyy-dom-dlya-odinokikh-prestarelykh/">Уход за пожилыми одинокими людьми</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/organizatsiya-obsluzhivaniya-grazhdan-s-priznakami-dementsii/">Болезнь Альцгеймера (деменция)</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/ukhod-za-pozhilymi-lyudmi-posle-operativnogo-vmeshatelstva/">Оперативное вмешательство</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/ukhod-za-pozhilymi-lyudmi-posle-pereloma-bedra/">Перелом шейки бедра</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/organizatsiya-ukhoda-za-ludmi-starshe-80-let/">Старше 80 лет</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/organizatsiya-ukhoda-za-invalidami-1-2-i-3-grupp/">Инвалидость 1,2,3 групп</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/kak-popast-v-pansionat-dlya-pozhilykh-lyudey-za-pensiyu/">Оформление за пенсию</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/dom-prestarelykh-dlya-veteranov-truda/">Ветераны труда</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/organizatsiya-ukhoda-za-lezhachimi-pozhilymi-lyudmi/">Лежачие пожилые</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/organizatsiya-kruglosutochnogo-ukhoda-za-pozhilymi-grazhdanami/">Круглосуточный уход</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/posle-insulta/">После инсульта</a></li>
        <li class="services_in_our_pansion__list-item"><a href="/uslugi/parkinson/">Болезнь Паркинсона</a></li>
      </ul>
    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('services_in_our_pansion', 'services_in_our_pansion');

?>