<?php
add_theme_support( 'post-thumbnails' );


function my_get_archives_link($html){
  return preg_replace ( '/<\/a>/', '年</a>', $html );
}
add_filter('get_archives_link','my_get_archives_link');

?>
