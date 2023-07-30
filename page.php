<?php get_header(); ?>



<?php  if ( !is_page(623) && !is_page(9) && !is_page(1104) && !is_page(1099) && !is_page(1153) && !is_page(1055)) {
   $title = '<div class="page-title"><h1>' . get_the_title() .'</h1></div>';
}  ?>
<section class="page-container">
    <?php if ( isset($title) ) echo $title ?>

</section>


<?php the_content(); ?>



<?php get_footer(); ?>