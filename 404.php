<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yutnaya-tema
 */

get_header();
?>

<section class="block">
  <div class="block__inner">
    <h1 class="block__h1">Страница не найдена</h1>
    <p style="text-align:center; margin: 1rem 0;">Страница была удалена или адрес введен неправильно. Вы можете воспользоваться навигацией в шапке страницы.</p>
    <?php echo do_shortcode( "[pansions_for_elders tag='h2' title='<span class=`block__text-blue`>Пансионаты для пожилых</span> в Москве и Подмосковье']" ); ?>
  </div>
</section>

<?php get_footer(); ?>