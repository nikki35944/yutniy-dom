<?php

function breadcrumbs() {

  // Достаем текущий урл
  $cur_url = $_SERVER['REQUEST_URI'];

  // Разбитие на части
  $urls = explode('/', $cur_url);
  array_pop($urls);
  array_shift($urls);

  $crumbs = array();
  $prev_url = '/';
  
  $crumbs[0]['text'] = 'Главная';
  $crumbs[0]['url'] = '/';
  
  for ($i=0; $i < count($urls); $i++) { 
    $value = $urls[$i];

    switch ($value) {

      case 'nashi-doma' : $crumbs[$i+1]['text'] = 'Наши дома';
        break;
      case 'dom-v-ximkax' : $crumbs[$i+1]['text'] = 'Пансионат в Химках';
        break;
      case 'dom-v-firsan' : $crumbs[$i+1]['text'] = 'Пансионат в Фирсановке';
        break;
      case 'dom-v-ikshe' : $crumbs[$i+1]['text'] = 'Пансионат в Икше';
        break;

      case 'uslugi' : $crumbs[$i+1]['text'] = 'Услуги';
        break;

      case 'blog' : $crumbs[$i+1]['text'] = 'Блог';
        break;
        
      default : $crumbs[$i+1]['text'] = get_the_title();
        break;
    }

    if ($i != count($urls) - 1) {
      $prev_url = $prev_url . $value . '/';
      $crumbs[$i+1]['url'] = $prev_url;
    } else {
      $crumbs[$i+1]['url'] = '';
    }
  }

  ob_start();
?>

  <section class="breadcrumbs block" id="breadcrumbs">
    <div class="breadcrumbs__inner block__inner">
    <?php if (!empty($crumbs)) { ?>
      <ul class="breadcrumbs__list">
        <?php foreach ($crumbs as $item) { ?>
          <?php if (isset($item)) { ?>

              <?php if (!empty($item['url'])) {
                        if ($item['url'] == '/uslugi/') { ?>
                            <li><a><?php echo $item['text'] ?></a></li>
                            <li>/</li>
                       <?php } else {?>
                            <li><a href="<?php echo $item['url'] ?>"><?php echo $item['text'] ?></a></li>
                            <li>/</li>
                       <?php }?>
              <?php } else { ?>
                <li><?php echo $item['text'] ?></li>
              <?php } ?>

          <?php } ?>
        <?php } ?>
      </ul>
    <?php } ?>

    </div>
  </section>

<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('breadcrumbs', 'breadcrumbs');

?>