<?php

function comfortable_living_conditions() {
  ob_start();
?>

  <section class="comfortable_living_conditions block">
    <div class="comfortable_living_conditions__inner block__inner">
      <h2 class="comfortable_living_conditions__title block__text30"><span class="block__text-blue">Комфортные условия</span> проживания</h2>
      <div class="comfortable_living_conditions__advantages">
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/bed-single.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">Функциональные кровати</p>
        </div>
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/Tilda_Icons_20med_hospital.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">Оборудование для инвалидов</p>
        </div>
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/Group-78.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">Wi-Fi и телевидение</p>
        </div>
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/Vector.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">Транспортировка до места</p>
        </div>
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/Group-75-1.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">Лечебная физкультура и массаж</p>
        </div>
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/camera.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">Видеонаблюдение и кнопки вызова</p>
        </div>
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/Group-76.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">5-ти разовое питание</p>
        </div>
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/Group-77.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">Разнообразный досуг</p>
        </div>
        <div class="comfortable_living_conditions__advantage">
          <img loading="lazy" class="comfortable_living_conditions__advantage-icon" src="/wp-content/uploads/2022/03/Tilda_Icons_7cafe_24hours.svg" alt="advantage">
          <p class="comfortable_living_conditions__advantage-title">Регулярный осмотр</p>
        </div>
      </div>
    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('comfortable_living_conditions', 'comfortable_living_conditions');

?>