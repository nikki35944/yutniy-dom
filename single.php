<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yutnaya-tema
 */

get_header();
echo do_shortcode("[breadcrumbs]");
?>

<section class="blog block">
  <div class="blog__inner block__inner">
    <h1 class="block__h1" ><?php the_title(); ?></h1>
    <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" class="blog__preview" alt="preview">
    <?php the_content(); ?>
  </div>
</section>

<?php
  $args = array(
    'posts_per_page' => 3,
    'category'    => 10,
    'orderby'     => 'rand',
    'order'       => 'DESC',
    'post_type'   => 'post',
    'post__not_in'  => array(get_the_ID()),
  );
?>
<section class="useful_information block">
  <div class="useful_information__inner block__inner">

    <h2 class="block__h1" style="margin-bottom:1rem"><span class="block__text-blue">Похожие записи</h2>

    <div class="useful_information__cards-container useful_information__cards-container_blog">
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
?>


<?php get_footer(); ?>