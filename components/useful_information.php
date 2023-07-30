<?php

function useful_information() {
ob_start();

	$args = array(
		'posts_per_page' => 3,
		'category'    => 10,
		'orderby'     => 'date',
		'order'       => 'DESC',
		'post_type'   => 'post',
  );

  ?>

	<section class="useful_information block">
    <div class="useful_information__inner block__inner">

      <h2 class="useful_information__title block__text30"><span class="block__text-blue">Полезная</span> информация</h2>

      <div class="useful_information__cards-container">
        <?php
        $query = new WP_Query( $args );
        while ( $query->have_posts() ) {
          $query->the_post();
        ?>

          <div class="useful_information__card">
            <img loading="lazy" class="useful_information__card-image" src="<?php the_post_thumbnail_url(); ?>" alt="preview">
            <p class="useful_information__card-title"><?php the_title(); ?></p>
            <a href="<?php the_permalink() ?>" class="useful_information__card-readmore">Подробнее</a>
          </div>

        <?php } ?>
      </div>

    </div>
	</section>

	<?php

	wp_reset_postdata();
	wp_reset_query();

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('useful_information', 'useful_information' );