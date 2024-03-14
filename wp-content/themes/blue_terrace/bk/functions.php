<?php
  add_theme_support('post-thumbnails');
  add_image_size( 'square', 500, 500, true );
  add_image_size( 'antore-thumbnail', 340, 222, true );
  add_image_size( 'single-thumbnail', 780, 511, true );

  function same_date() {
    global $previousday;
    $previousday = '';
  }
  add_action( 'the_post', 'same_date' );
?>
