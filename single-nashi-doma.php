<?php
/*
Template Name: Пансионаты шаблон
*/

  get_header();

  echo do_shortcode("[breadcrumbs]");

  ?>
  <h1 class="block block__inner block__text30" style="font-weight:400; text-align:center;"><?php echo the_field('title'); ?></h1>
  <?php

  the_content();

  echo do_shortcode("[food_at_the_pansion]");
  echo do_shortcode("[sign_up_for_a_tour]");
  echo do_shortcode("[schedule_of_our_guests]");
  echo do_shortcode("[we_are_trusted]");
  echo do_shortcode("[pansions_for_elders tag='h2' title='Наши пансионаты']");
  echo do_shortcode("[photo_gallery]");
  echo do_shortcode("[useful_information]");
  echo do_shortcode("[sign_up_for_a_tour]");
  echo do_shortcode("[address_map]");
  
  get_footer(); 
?>