<?php
/*
Template Name: Услуги шаблон
*/

get_header();
echo do_shortcode("[breadcrumbs]");
?>
  
  <section class="uslugi block">
    <div class="uslugi__inner block__inner">
      <h1 class="block__h1"><?php echo the_title(); ?></h1>
      <?php the_field('text1'); ?>
    </div>
  </section>

  <?php
  echo do_shortcode("[cost_of_accommodation]");
  echo do_shortcode("[form_with_advantages]");
  ?>

  <?php if( get_field('text2') ) : ?>
    <section class="uslugi block">
      <div class="uslugi__inner block__inner"><?php the_field('text2'); ?></div>
    </section>
  <?php endif; ?>

  <?php
  echo do_shortcode("[how_to_register_in_pansion]");
  echo do_shortcode("[pansions_for_elders tag='h2' title='Наши пансионаты']");
  echo do_shortcode("[sign_up_for_a_tour]");
  echo do_shortcode("[address_map]");
  
  get_footer(); 
?>