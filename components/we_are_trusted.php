<?php

function we_are_trusted() {
  ob_start();
?>

  <section class="we_are_trusted block" id="we_are_trusted">
    <div class="we_are_trusted__inner block__inner">
      <h2 class="we_are_trusted__title block__text30"><span class="block__text-blue">Нам</span> доверяют</h2>
      <div class="we_are_trusted__images-container owl-carousel">

        <?php
          foreach (get_field('we_are_trusted') as $photo => $value) {
            if($value) {
              ?>
              <a data-fslightbox="we_are_trusted__image" href="<?php echo $value?>"><img loading="lazy" class="we_are_trusted__image" src="<?php echo $value?>" alt="feedback"></a>
              <?php
            }
          }
        ?>

      </div>
      <a href="/otzyvy/" class="we_are_trusted__link">Посмотреть все отзывы</a>
    </div>

    <script>
      $(".we_are_trusted__images-container").owlCarousel({
        items: 4,
        responsive: {
          0: { items: 2, },
          500: { items: 3, },
          900: { items: 4 }
        },
        margin: 15,
        loop: true,
        nav: true,
      });

    </script>
  </section>
<?php

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('we_are_trusted', 'we_are_trusted');

?>