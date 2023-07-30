<?php

function sign_up_for_a_tour() {
  ob_start();
?>

  <section class="sign_up_for_a_tour block">
    <div class="sign_up_for_a_tour__inner block__inner">
      <p class="sign_up_for_a_tour__title block__text24"><span class="block__text-blue">Запишитесь</span> на экскурсию <a class="block__text-blue" href="tel:+74952011521">8&nbsp;(495)&nbsp;201-15-21</a></p>
      <?php echo do_shortcode('[contact-form-7 id="190"]'); ?>
    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('sign_up_for_a_tour', 'sign_up_for_a_tour');

?>