<?php

// Шорткод по добавлению пансионатов на главную
function pansions_for_elders($attrs) {
  $tag = $attrs['tag'];
  $title = $attrs['title']; 

  ob_start();

  $args = array(  
    'post_type' => 'nashi-doma',
    'post_status' => 'publish',
    'posts_per_page' => 1000, 
    'orderby' => 'date', 
    'order' => 'ASC', 
  );

  ?>

  <section class="pansions_for_elders block">
    <div class="pansions_for_elders__inner block__inner">
      <<?php echo $tag ?> class="pansions_for_elders__title block__text30"><?php echo $title ?></<?php echo $tag ?>>
      <div class="pansions_for_elders__pansions">
        
      <?php
        $query = new WP_Query( $args );
        while ( $query->have_posts() ) {
          $query->the_post();
          ?>

          <div class="pansions_for_elders__pansion">
              <a href="<?php the_permalink(); ?>">
                  <img loading="lazy" class="pansions_for_elders__pansion-preview" src="<?php the_field('preview'); ?>" alt="pansion-image">
                  <div class="pansions_for_elders__pansion-text-container">
                      <h4 class="pansions_for_elders__pansion-title"><?php the_title(); ?></h4>
                      <p class="pansions_for_elders__pansion-address"><?php the_field('address'); ?></p>

                      <div class="pansions_for_elders__pansion-advantages">
                          <?php
                          $image;
                          for ($i=0; $i < 6; $i++):
                              $advantage = get_field('advantages')[$i];

                              $advantage_label = $advantage['label'];
                              $adv_label_formatted = stristr($advantage_label, '/', true);
                              if($advantage['value'] == 'bed') { $image = '/wp-content/uploads/2022/04/bed.svg'; }
                              else if($advantage['value'] == 'food') { $image = '/wp-content/uploads/2022/04/food.svg'; }
                              else if($advantage['value'] == 'fiz') { $image = '/wp-content/uploads/2022/04/fiz.svg'; }
                              else if($advantage['value'] == 'wifi') { $image = '/wp-content/uploads/2022/04/wifi.svg'; }
                              else if($advantage['value'] == 'play') { $image = '/wp-content/uploads/2022/04/play.svg'; }
                              else if($advantage['value'] == 'watch') { $image = '/wp-content/uploads/2022/04/watch.svg'; }
                              else if($advantage['value'] == 'secure') { $image = '/wp-content/uploads/2022/04/secure.svg'; }
                              else if($advantage['value'] == 'health') { $image = '/wp-content/uploads/2022/04/health.svg'; }
                              else { $image = ''; }

                              if($image != '') { echo ('<img loading="lazy" src="' . $image . '" title="'. $adv_label_formatted .'" alt="advantages">'); }
                          endfor;
                          ?>

                      </div>

                      <div class="pansions_for_elders__pansion-bottom-block">
                          <p class="pansions_for_elders__pansion-price"><?php the_field('price'); ?></p>
                          <a class="pansions_for_elders__pansion-readmore" href="<?php the_permalink(); ?>">Подробнее</a>
                      </div>
                  </div>
              </a>

          </div>

      <?php } ?>

    </div>
  </section>

  <?php 

  wp_reset_postdata(); 
	wp_reset_query();

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('pansions_for_elders', 'pansions_for_elders');