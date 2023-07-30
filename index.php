<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yutnaya-tema
 */

get_header();
 

// фикс пагинации скрывающий пустые страницы в файле functions.php
$args = array(
    'category'    => 10,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'post',
    'posts_per_page' => '15',
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
);

$pagination_args = array(
    'show_all'     => false, // показаны все страницы участвующие в пагинации
    'end_size'     => 2,     // количество страниц на концах
    'mid_size'     => 1,     // количество страниц вокруг текущей
    'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
//    'prev_text'    => __('« Previous'),
//    'next_text'    => __('Next »'),
    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
//    'screen_reader_text' => __( 'Posts navigation' ),
    'class'        => 'pagination', // CSS класс, добавлено в 5.5.0.
);
?>

<section class="useful_information block">
  <div class="useful_information__inner block__inner">

    <h1 class="useful_information__title useful_information__title_blog block__text30"><span class="block__text-blue">Блог</h1>




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
      <div class="pagination">
          <?php the_posts_pagination( $pagination_args ); ?>
      </div>

  </div>
</section>

<?php

//wp_reset_postdata();
wp_reset_query();
get_footer();

?>
