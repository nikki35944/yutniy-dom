<?php

function pansion_about() {
  ob_start();
?>

  <section class="pansion_about block" id="pansion_about">
    <div class="pansion_about__inner block__inner">
      <h2 class="pansion_about__title block__title block__text-blue">О доме</h2>
      <?php the_field('about') ?>
    </div>
  </section>

<?php

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('pansion_about', 'pansion_about');

?>