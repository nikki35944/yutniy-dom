<?php

function transportation_to_pansion() {
  ob_start();
?>

  <section class="transportation_to_pansion block">
    <div class="transportation_to_pansion__inner block__inner">
      <div class="transportation_to_pansion__divider">
        <img loading="lazy" src="/wp-content/uploads/2022/04/Mask-group.jpg" alt="car" class="transportation_to_pansion__image">
        <div class="transportation_to_pansion__text-container">
          <h2 class="transportation_to_pansion__title block__text30"><span class="block__text-blue">Транспортировка</span> в пансионат</h2>
<!--          <p class="transportation_to_pansion__subtitle block__text-blue">на специализированном автомобиле</p>-->
                      <p class="transportation_to_pansion__subtitle block__text-blue">возместим Ваши расходы на транспорт</p>
            <br>
<!--            <p class="transportation_to_pansion__text">Возместим Ваши расходы на транспорт</p>-->
<!--            <p class="transportation_to_pansion__text" style="margin-top: 5px">Выплата компенсации за транспортировку</p>-->
            <p class="transportation_to_pansion__text" style="margin-top: 5px">При полной единоразовой оплате  </p>
            <p class="transportation_to_pansion__text">проживания за месяц возместим 3000 рублей за </p>
                        <p class="transportation_to_pansion__text"> перевозку лежачих больных в пансионат.</p>
<!--            <p class="transportation_to_pansion__text">Из любой точки Москвы</p>-->
<!--          <p class="transportation_to_pansion__text">От кровати до кровати для лежачих больных</p>-->
<!--          <p class="transportation_to_pansion__text">На обследование в больницу и обратно в пансионат</p>-->
          <button class="transportation_to_pansion__button" data-bs-toggle="modal" data-bs-target="#getTransportationModal">3 000 руб. на перевозку</button>
          <div class="transportation_to_pansion__line"></div>
        </div>
      </div>
    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('transportation_to_pansion', 'transportation_to_pansion');

?>