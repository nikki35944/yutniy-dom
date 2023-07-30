<?php

function food_at_the_pansion() {
  ob_start();
?>

  <section class="food_at_the_pansion block" id="food_at_the_pansion">
    <div class="food_at_the_pansion__inner block__inner">
      <h2 class="food_at_the_pansion__title block__text30"><span class="block__text-blue">Питание в пансионатах</span> «Уютный Дом»</h2>
      <div class="food_at_the_pansion__tabs-container">
        <button data-day="monday" class="food_at_the_pansion__tab">Понедельник</button>
        <button data-day="tuesday" class="food_at_the_pansion__tab">Вторник</button>
        <button data-day="wednesday" class="food_at_the_pansion__tab">Среда</button>
        <button data-day="thursday" class="food_at_the_pansion__tab">Четверг</button>
        <button data-day="friday" class="food_at_the_pansion__tab">Пятница</button>
        <button data-day="saturday" class="food_at_the_pansion__tab">Суббота</button>
        <button data-day="sunday" class="food_at_the_pansion__tab">Воскресенье</button>
      </div>
      <div class="food_at_the_pansion__tabs-content-container">
        <div data-daypart="morning" class="food_at_the_pansion__tab-content"></div>
        <div data-daypart="day" class="food_at_the_pansion__tab-content"></div>
        <div data-daypart="evening" class="food_at_the_pansion__tab-content"></div>
      </div>
    </div>

    <script src="<?php echo get_template_directory_uri() . '/components/food_at_the_pansion/food_at_the_pansion.js' ?>"></script>
  </section>
<?php

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('food_at_the_pansion', 'food_at_the_pansion');

?>