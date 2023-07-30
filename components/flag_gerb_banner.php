<?php

function flag_gerb_banner() {
  ob_start();
?>

  <section class="flag_gerb_banner block">
    <div class="flag_gerb_banner__inner block__inner">
      <img loading="lazy" src="/wp-content/uploads/2022/03/image-19.png" alt="banner" class="flag_gerb_banner__image">
    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('flag_gerb_banner', 'flag_gerb_banner');

?>