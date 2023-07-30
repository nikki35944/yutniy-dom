<?php

function address_map() {
  ob_start();
?>

  <section class="address_map block">
    <!-- Карта из Яндекс.КонструкторКарт -->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A95fed0f0f6d9b3d0fe2c22563e4707024147f22eedd09085959743483b80c41e&amp;width=100%25&amp;height=510&amp;lang=ru_RU&amp;scroll=false"></script>
    <div class="address_map__text-container">
      <p class="address_map__title block__text-blue block__text24">Наши адреса:</p>
      <ul class="address_map__list">
        <li class="address_map__list-item">Московская область, <span class="block__text-blue">Химки, мкр Фирсановка</span>, ул Матросова владение 20</li>
        <li class="address_map__list-item">Московская область, Дмитровский р-он, <span class="block__text-blue">Посёлок Икша</span>, Ул. Дубрава д. 41</li>
        <li class="address_map__list-item">Московская область, <span class="block__text-blue">Химки</span>, мкр Левобережный, ст "Восход-1", 3-я линия,дом 92</li>
      </ul>
    </div>
  </section>
<?php

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('address_map', 'address_map');

?>