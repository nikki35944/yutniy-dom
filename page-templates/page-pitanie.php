<?php
/**
 * Template Name: Питание
 */
get_header();
?>

<div class="page-title"><h1><?php the_title() ?></h1></div>
<?php echo do_shortcode('[food_at_the_pansion]'); ?>

<div class="page-content">
    <?php the_content();  ?>
</div>


<?php echo do_shortcode('[sign_up_for_a_tour]'); ?>
<?php echo do_shortcode('[address_map block]'); ?>


<?php
get_footer();