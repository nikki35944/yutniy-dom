<?php

function pansion_navbar() {
  ob_start();
?>

  <section class="pansion_navbar block">
    <div class="pansion_navbar__inner block__inner">
      <ul class="pansion_navbar__list">
        <li class="pansion_navbar__list-item"><a href="#pansion_about">Описание</a></li>
        <li class="pansion_navbar__list-item"><a href="#pansion_facilities">Удобства</a></li>
        <li class="pansion_navbar__list-item"><a href="#cost_of_accommodation">Цены</a></li>
        <li class="pansion_navbar__list-item"><a href="#pansion_location">Расположение</a></li>
        <li class="pansion_navbar__list-item"><a href="#food_at_the_pansion">Питание</a></li>
        <li class="pansion_navbar__list-item"><a href="#schedule_of_our_guests">Распорядок дня</a></li>
        <li class="pansion_navbar__list-item"><a href="#we_are_trusted">Отзывы</a></li>
      </ul>
    </div>
  </section>

<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('pansion_navbar', 'pansion_navbar');

?>