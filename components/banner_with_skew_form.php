<?php

function banner_with_skew_form() {
  ob_start();
?>

  <section class="banner_with_skew_form block">
    <div class="banner_with_skew_form__inner block__inner">
      <h2 class="banner_with_skew_form__title block__text30">Размещение в пансионате от 960 рублей в сутки</h2>

      <?php echo do_shortcode('[contact-form-7 id="189"]'); ?>

    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('banner_with_skew_form', 'banner_with_skew_form');

?>