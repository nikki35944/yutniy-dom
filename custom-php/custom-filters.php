<?php

// Сменить классы у nav-menu в header
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 4);
function special_nav_class($classes, $item, $args){
  if($args->menu_class == 'header__nav') {
    $classes[5] = 'header__nav-item';
    return $classes;
  }

  if($args->menu_class == 'footer__column-nav') {
    $classes[5] = 'header__column-nav-item';
    return $classes;
  }
}


// Добавляет SVG в список разрешенных для загрузки файлов
// В .svg файле ВНАЧАЛЕ должна быть строчка < ? xml version="1.0" encoding="utf-8" ? > (стрелки и вопросительный без пробелов)
add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}