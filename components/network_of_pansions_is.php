<?php

function network_of_pansions_is() {
  ob_start();
?>

  <section class="network_of_pansions_is block">
    <div class="network_of_pansions_is__inner block__inner">
      <h2 class="network_of_pansions_is__title block__text30">Сеть пансионатов <span class="block__text-blue">УЮТНЫЙ ДОМ</span> это</h2>
      <ul class="network_of_pansions_is__list">

        <li class="network_of_pansions_is__list-item">
          <p class="network_of_pansions_is__list-item-title">Разнообразный досуг</p>
          <ul class="network_of_pansions_is__list-item-sublist">
            <li>Ежедневные легкие прогулки</li>
            <li>Совместные празднования дней рождений и праздников</li>
            <li>Мастер-классы, направленные на развитие физической и умственной активности</li>
            <li>Выступления артистов и музыкантов</li>
          </ul>
        </li>

        <li class="network_of_pansions_is__list-item">
          <p class="network_of_pansions_is__list-item-title">Питание</p>
          <ul class="network_of_pansions_is__list-item-sublist">
            <li>5-ти разовое питание, разработанное диетологами</li>
            <li>Свежие фрукты и овощи ежедневно</li>
            <li>Особое меню для людей с диабетом/сложностями ЖКТ</li>
            <li>Контроль качества и свежести продуктов</li>
          </ul>
        </li>

        <li class="network_of_pansions_is__list-item">
          <p class="network_of_pansions_is__list-item-title">Психологическая поддержка</p>
          <ul class="network_of_pansions_is__list-item-sublist">
            <li>Пробуждаем желание заниматься своим здоровьем</li>
            <li>Развитие мелкой моторики</li>
            <li>Ежедневное измерение артериального давления, температуры и сахара в крови</li>
          </ul>
        </li>

        <li class="network_of_pansions_is__list-item">
          <p class="network_of_pansions_is__list-item-title">Условия проживания</p>
          <ul class="network_of_pansions_is__list-item-sublist">
            <li>Просторные уютные комнаты с телевизорами</li>
            <li>Уютная территория и домашняя атмосфера</li>
            <li>Функциональные кровати, противолежневые матрасы, прикроватные столики</li>
            <li>Большая гостиная с библиотекой</li>
          </ul>
        </li>

        <li class="network_of_pansions_is__list-item">
          <p class="network_of_pansions_is__list-item-title">Лояльность и уют</p>
          <ul class="network_of_pansions_is__list-item-sublist">
            <li>Рассрочка платежей для наших постояльцев</li>
            <li>Транспортировка на специализированном транспорте</li>
            <li>Неограниченная возможность связи с близкими</li>
            <li>Дома находятся в природоохранной зоне Подмосковья</li>
          </ul>
        </li>

        <li class="network_of_pansions_is__list-item">
          <p class="network_of_pansions_is__list-item-title">Уход и забота</p>
          <ul class="network_of_pansions_is__list-item-sublist">
            <li>Квалифицированный и доброжелательный персонал</li>
            <li>Идеальная чистота в помещениях</li>
            <li>Особый уход за лежачими людьми</li>
            <li>Помощь в гигиенических процедурах</li>
          </ul>
        </li>

      </ul>
    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('network_of_pansions_is', 'network_of_pansions_is');

?>