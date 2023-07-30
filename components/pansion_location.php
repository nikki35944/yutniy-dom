<?php

function pansion_location() {
  ob_start();
?>

  <section class="pansion_location block" id="pansion_location">
    <div class="pansion_location__inner block__inner">
      <h2 class="pansion_location__title block__text30">Расположение</h2>
      <p class="pansion_location__subtitle">Адрес: <?php the_field('address'); ?></p>

      <div class="pansion_location__divider">
        <div class="pansion_location__map-container">
          <?php the_field('map'); ?>
        </div>
        <div class="pansion_location__text-container">
          <?php the_field('route'); ?>
        </div>
      </div>

      <button class="pansion_location__readmore">Подробнее как проехать</button>

    </div>

    <script>
      // Раскрытие адреса проезда по клику на кнопку
      (()=>{
        const btn = document.querySelector('.pansion_location__readmore');
        const textContainer = document.querySelector('.pansion_location__text-container');

        btn.addEventListener('click', () => {
          textContainer.style.maxHeight = `${textContainer.scrollHeight}px`;
          textContainer.style.overflow = 'visible';
          textContainer.classList.add('_active');

          btn.style.display = 'none';
        });
      })();
    </script>
  </section>

<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('pansion_location', 'pansion_location');

?>