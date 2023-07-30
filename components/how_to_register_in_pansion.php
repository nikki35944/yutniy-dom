<?php

function how_to_register_in_pansion() {
  ob_start();
?>

  <section class="how_to_register_in_pansion block">
    <div class="how_to_register_in_pansion__inner block__inner">
      <h2 class="how_to_register_in_pansion__title block__text30"><span class="block__text-blue">Как оформить близкого</span> в пансионат</h2>
      <p class="how_to_register_in_pansion__subtitle block__text-blue block__text20">Бесплатный выезд на дом для консультации и заключения договора</p>
      <ul class="how_to_register_in_pansion__list">
        <li class="how_to_register_in_pansion__list-item">
          <p class="how_to_register_in_pansion__list-item-number block__text-blue">1</p>
          <p class="how_to_register_in_pansion__list-item-title block__text24">Заявка на размещение</p>
          <p class="how_to_register_in_pansion__list-item-text">Свяжитесь с нами по телефону или сайт и наши специалисты подберут для вас достойный вариант</p>
        </li>
        <li class="how_to_register_in_pansion__list-item">
          <p class="how_to_register_in_pansion__list-item-number block__text-blue">2</p>
          <p class="how_to_register_in_pansion__list-item-title block__text24">Экскурския по пансионату</p>
          <p class="how_to_register_in_pansion__list-item-text">Знакомство с администрацией и персоналом, осмотр условий и территории. Ответы на вопросы</p>
        </li>
        <li class="how_to_register_in_pansion__list-item">
          <p class="how_to_register_in_pansion__list-item-number block__text-blue">3</p>
          <p class="how_to_register_in_pansion__list-item-title block__text24">Транспортировка в пансионат</p>
          <p class="how_to_register_in_pansion__list-item-text">Подвисание договора, оплата. Перевозка на специализированом транспорте от кровати до кровати</p>
        </li>
        <li class="how_to_register_in_pansion__list-item">
          <p class="how_to_register_in_pansion__list-item-number block__text-blue">4</p>
          <p class="how_to_register_in_pansion__list-item-title block__text24">Размещение</p>
          <p class="how_to_register_in_pansion__list-item-text">Поможем адаптироваться к новым условиям</p>
        </li>
      </ul>
    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('how_to_register_in_pansion', 'how_to_register_in_pansion');

?>