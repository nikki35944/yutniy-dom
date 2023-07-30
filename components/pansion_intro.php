<?php

function pansion_intro() {
  ob_start();
?>

  <section class="pansion_intro block" id="pansion_intro">
    <div class="pansion_intro__inner block__inner">
      <div class="pansion_intro__left">
        <img loading="lazy" src="/wp-content/uploads/2022/04/food.svg" alt="pansion" class="pansion_intro__main-image">
        <div class="pansion_intro__images-container">

          <img loading="lazy" src="" alt="pansion" class="pansion_intro__mini-image">
          <img loading="lazy" src="" alt="pansion" class="pansion_intro__mini-image">
          <img loading="lazy" src="" alt="pansion" class="pansion_intro__mini-image">
          <img loading="lazy" src="" alt="pansion" class="pansion_intro__mini-image">
        </div>
      </div>

      <div class="pansion_intro__right">
        <p class="pansion_intro__address"><?php the_field('address') ?></p>
        <p class="pansion_intro__phones">
          <span>
            <a href="tel:+74952011521" class="pansion_intro__phone">8 (495) 201-15-21</a>
            <a href="tel:+79036125057" class="pansion_intro__phone">8 (903) 612-50-57</a>
          </span>
        </p>

        <?php 
          $image;
          for ($i=0; $i < 6; $i++):
            $advantage = get_field('advantages')[$i];
              $advantage_label = $advantage['label'];
              $adv_label_formatted = stristr($advantage_label, '/', true);
            if($advantage['value'] == 'bed') { $image = '/wp-content/uploads/2022/04/bed.svg'; }
            else if($advantage['value'] == 'food') { $image = '/wp-content/uploads/2022/04/food.svg'; }
            else if($advantage['value'] == 'fiz') { $image = '/wp-content/uploads/2022/04/fiz.svg'; }
            else if($advantage['value'] == 'wifi') { $image = '/wp-content/uploads/2022/04/wifi.svg'; }
            else if($advantage['value'] == 'play') { $image = '/wp-content/uploads/2022/04/play.svg'; }
            else if($advantage['value'] == 'watch') { $image = '/wp-content/uploads/2022/04/watch.svg'; }
            else if($advantage['value'] == 'secure') { $image = '/wp-content/uploads/2022/04/secure.svg'; }
            else if($advantage['value'] == 'health') { $image = '/wp-content/uploads/2022/04/health.svg'; }
            else { $image = ''; }
            
            if($image != '') { echo ('<img loading="lazy" src="' . $image . '" title="'. $adv_label_formatted .'" alt="advantages">'); }
          endfor;
        ?>

        <p class="pansion_intro__price"><?php the_field('price') ?></p>
        <p class="pansion_intro__text">Круглосуточный прием постояльцев</p>
        <button class="pansion_intro__button" data-bs-toggle="modal" data-bs-target="#getTransportationModal">Записаться на просмотр</button>
      </div>
    </div>
    <script src="<?php echo get_template_directory_uri() . '/components/pansion_intro/pansion_intro.js' ?>"></script>
  </section>

<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('pansion_intro', 'pansion_intro');

?>