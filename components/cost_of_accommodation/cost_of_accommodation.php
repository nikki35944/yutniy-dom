<?php

function cost_of_accommodation() {
  ob_start();
?>

  <section class="cost_of_accommodation block" id="cost_of_accommodation">
    <div class="cost_of_accommodation__inner block__inner">
      <h2 class="cost_of_accommodation__title block__text30"><span class="block__text-blue">Стоимость размещения</span> для пожилых людей</h2>
      <p class="cost_of_accommodation__subtitle block__text20">Скидки 5% и 10% для ветеранов труда и ВОВ</p>
      <div class="cost_of_accommodation__content">
        <img loading="lazy" src="/wp-content/uploads/2022/04/prestarelie-1.png" alt="old-people" class="cost_of_accommodation__image">
        <div class="cost_of_accommodation__content-text">
          <ul class="cost_of_accommodation__tab-content">
            <!-- Динамический контент -->
          </ul>
          <p class="cost_of_accommodation__under-tab-text">Дополнительные услуги, вызов специалистов узкого профиля обговарвиваются отдельно</p>
        </div>

      </div>
      <div class="cost_of_accommodation__tabs">
        <div class="cost_of_accommodation__tab _active" data-tariff="basoviy">
          <p class="cost_of_accommodation__tab-title">Тариф «Базовый»</p>
          <p class="cost_of_accommodation__tab-subtitle">Для самостоятельных пожилых людей</p>
          <p class="cost_of_accommodation__tab-price">От 960 руб/сутки </p>
        </div>
        <div class="cost_of_accommodation__tab" data-tariff="palliativ">
          <p class="cost_of_accommodation__tab-title">Тариф «Паллиатив»</p>
          <p class="cost_of_accommodation__tab-subtitle">Специальные условия для лежачих людей</p>
          <p class="cost_of_accommodation__tab-price">От 1150 руб/сутки  </p>
        </div>
        <div class="cost_of_accommodation__tab" data-tariff="lgotniy">
          <p class="cost_of_accommodation__tab-title">Тариф «Льготный»</p>
          <p class="cost_of_accommodation__tab-subtitle">Специальные условия для льготных категорий граждан</p>
          <p class="cost_of_accommodation__tab-price">От 750 руб/сутки </p>
        </div>
      </div>
    </div>
    <script src="<?php echo get_template_directory_uri() . '/components/cost_of_accommodation/cost_of_accommodation.js' ?>"></script>
  </section>
<?php

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('cost_of_accommodation', 'cost_of_accommodation');

?>