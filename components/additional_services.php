<?php

function additional_services() {
  ob_start();
?>

  <section class="additional_services block">
    <div class="additional_services__inner block__inner">
      <h2 class="additional_services__title block__text30">Дополнительные услуги</h2>
      <ul class="additional_services__list">
        <?php
          foreach (get_field('additional_services') as $service => $value) {
            if($value) {
              ?>
              <li class="additional_services__list-item"><?php echo $value ?></li>
              <?php
            }
          }
        ?>
      </ul>
    </div>
  </section>

<?php

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('additional_services', 'additional_services');

?>