<?php
/**
 * Template name: Шаблон страницы "по ширине сайта"
 */
get_header();
?>


<div class="page-title"><h1><?php the_title(); ?></h1></div>

<div class="page-content">
    <?php the_content(); ?>
</div>


<?php
get_footer();