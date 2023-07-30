<?php
/**
 * Template Name: О нас
 */
get_header();
?>


    <div class="page-title"><h1><?php the_title(); ?></h1></div>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

<?php
echo do_shortcode("[pansions_for_elders tag='h3' title='<span class=\"block__text-blue\">Пансионаты для пожилых</span> в Москве и Подмосковье']");
echo do_shortcode('[form_with_advantages]');
echo do_shortcode('[address_map block]');
?>

<?php
get_footer();