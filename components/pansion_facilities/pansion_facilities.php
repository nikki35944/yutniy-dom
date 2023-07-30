<?php

function pansion_facilities() {
  ob_start();
?>

  <section class="pansion_facilities block" id="pansion_facilities">
    <div class=" block__inner">
      <h2 class="pansion_facilities__title block__title">Удобства</h2>
      <ul class="pansion_facilities__list">

        <?php foreach( get_field('advantages') as $advantage ) { ?>

          <li class="pansion_facilities__list-item">
            <?php
              $image;
              if($advantage['value'] == 'bed') { $image = '/wp-content/uploads/2022/04/bed.svg'; }
              else if($advantage['value'] == 'food') { $image = '/wp-content/uploads/2022/04/food.svg'; }
              else if($advantage['value'] == 'fiz') { $image = '/wp-content/uploads/2022/04/fiz.svg'; }
              else if($advantage['value'] == 'wifi') { $image = '/wp-content/uploads/2022/04/wifi.svg'; }
              else if($advantage['value'] == 'play') { $image = '/wp-content/uploads/2022/04/play.svg'; }
              else if($advantage['value'] == 'watch') { $image = '/wp-content/uploads/2022/04/watch.svg'; }
              else if($advantage['value'] == 'secure') { $image = '/wp-content/uploads/2022/04/secure.svg'; }
              else if($advantage['value'] == 'health') { $image = '/wp-content/uploads/2022/04/health.svg'; }
            ?>
            <img loading="lazy" src="<?php echo $image ?>" alt="icon" title="<?= $advantage['label'] ?>" >
            <?php echo $advantage['label'] ?>
          </li>

        <?php } ?>

      </ul>
    </div>
    <script src="<?php echo get_template_directory_uri() . '/components/pansion_facilities/pansion_facilities.js' ?>"></script>
  </section>

<?php

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('pansion_facilities', 'pansion_facilities');

?>