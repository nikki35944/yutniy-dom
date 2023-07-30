<?php

function how_to_get_to_pansions() {
  ob_start();

  $args = array(
    'post_type' => 'nashi-doma',
    'post_status' => 'publish',
    'posts_per_page' => 1000,
    'orderby' => 'date',
    'order' => 'ASC',
  );

?>

  <section class="how_to_get_to_pansions block">
    <div class="how_to_get_to_pansions__inner block__inner">

      <h1 class="how_to_get_to_pansions__title block__h1"><?php the_title(); ?></h1>
      <p class="how_to_get_to_pansions__text">С нами можно связаться по тел: <a href="tel:+74952011521">8 (495) 201-15-21</a>, мобильный - <a href="tel:+79036125057">8 (903) 612-50-57</a></p>
      <p class="how_to_get_to_pansions__text">Нам можно написать на почту: <a href="mailto:U-tro@yandex.ru">U-tro@yandex.ru</a></p>

      <?php
        $query = new WP_Query( $args );
        while ( $query->have_posts() ) :
          $query->the_post();
      ?>

        <div class="how_to_get_to_pansions__pansion">
          <h2 class="how_to_get_to_pansions__pansion-title block__text30"><?php the_title(); ?></h2>
          <p class="how_to_get_to_pansions__subtitle">Адрес: <?php the_field('address'); ?></p>
          <div class="how_to_get_to_pansions__map-container"><?php the_field('map'); ?></div>
          <div class="how_to_get_to_pansions__text-container"><?php the_field('route'); ?></div>
        </div>

      <?php endwhile; ?>

    </div>
  </section>

<?php

  wp_reset_postdata();
  wp_reset_query();

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('how_to_get_to_pansions', 'how_to_get_to_pansions');

?>