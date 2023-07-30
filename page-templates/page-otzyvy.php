<?php
/**
 * Template Name: Отзывы
 */

get_header();
?>
    <h1 class="block block__inner block__text30" style="font-weight:400; text-align:center;"><?php echo the_title(); ?></h1>


    <div class="block__inner">
        <div class="reviews-top__carousel owl-carousel">

            <?php
            // проверяем есть ли в повторителе данные
            if( have_rows('tekstovye_otzyvy_imya-otzyv') ):

                while ( have_rows('tekstovye_otzyvy_imya-otzyv') ) : the_row();

                    // отображаем вложенные поля
                    ?>
                    <div class="review-carousel__item">
                        <p class="block__text-blue"><? the_sub_field('otzyv-imya'); ?></p>
                        <hr>
                        <p class="review-carousel__text"><? the_sub_field('otzyv-tekst'); ?></p>
                    </div>


                <?php
                endwhile;

            else :

                // вложенных полей не найдено

            endif;

            ?>

        </div>
    </div>


    <section class="fotogalereya block">
        <div class="fotogalereya__inner block__inner">
            <?php
            $i = 0;
            foreach (get_field('fotogalereya') as $photo => $value):
                ?>

                <?php if ($i >= 8) break; else { ?>
                <a data-fslightbox="gallery" href="<?php echo $value ?>"><img loading="lazy" src="<?php echo $value ?>" alt="gallery"></a>
            <?php } $i++;?>

            <?php endforeach; ?>
        </div>
        <div class="collapse-btn__container block__inner">
            <a class="btn-blue-pill" data-bs-toggle="collapse" href="#fotogalereya__inner__collapse" role="button" aria-expanded="false" aria-controls="fotogalereya__inner__collapse" id="btn-collapse">Показать еще</a>
        </div>

        <div class="fotogalereya__inner block__inner collapse" id="fotogalereya__inner__collapse">
            <?php
            $photos = get_field('fotogalereya');
            $started_from_eight_photo = array_slice($photos, 8);
            foreach ($started_from_eight_photo as $photo => $value):
                if ($value):
                    ?>
                    <a data-fslightbox="gallery" href="<?php echo $value ?>"><img loading="lazy" src="<?php echo $value ?>" alt="gallery"></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>


    <div class="block__inner">
        <script>
            $(".reviews-top__carousel").owlCarousel({
                items: 4,
                responsive: {
                    0: { items: 1, },
                    500: { items: 2, },
                    900: { items: 2 },
                    1200: { items: 3},
                },
                margin: 15,
                loop: true,
                nav: true,
            });

            $( "#btn-collapse" ).click(function() {
                if ( $( "#btn-collapse" ).hasClass( "collapsed" ) ) {
                    $('#btn-collapse').html('Показать еще');
                } else {
                    $('#btn-collapse').html('Скрыть');
                }
            });

        </script>
    </div>

<section class="page-content">
    <?php the_content(); ?>
</section>


<?php
echo do_shortcode("[how_to_register_in_pansion]");
echo do_shortcode("[pansions_for_elders tag='h2' title='Наши пансионаты']");
echo do_shortcode("[sign_up_for_a_tour]");
echo do_shortcode("[address_map]");

get_footer();
?>
