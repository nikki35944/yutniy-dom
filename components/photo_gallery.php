<?php

function photo_gallery() {
  ob_start();
?>

  <section class="photo_gallery block">
    <div class="photo_gallery__inner block__inner">
      <h2 class="photo_gallery__title block__text30"><span class="block__text-blue">Фото</span> пансионата</h2>
      <div class="photo_gallery__images-container">

        <?php
          foreach (get_field('photo_gallery') as $photo => $value) {
            if($value) {
              ?>
              <a data-fslightbox="photo_gallery__image" href="<?php echo $value?>"><img loading="lazy" class="photo_gallery__image" src="<?php echo $value?>" alt="pansionat-day"></a>
              <?php
            }
          }
        ?>

      </div>
    </div>
  </section>

<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('photo_gallery', 'photo_gallery');

?>