<?php
function my_styles(){
  wp_enqueue_style('css-of-parent-theme', get_template_directory_uri() . '/styles.css');
}
add_action('wp_enqueue_scripts', 'my_styles');


 ?>
