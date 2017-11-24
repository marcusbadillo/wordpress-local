<?php

// pull in parent styles and child themes sytles
function my_theme_enqueue_styles() {
    $parent_style = 'twentyseventeen-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



// adding my widget
require_once 'mywidget.php';
add_action('widgets_init', function() {
  register_widget('MyWidget');
});


// customizing the wordpress customizer
add_action('customize_register', function($wpcm) {
  // created two diff setting options
  $wpcm->add_setting('bgcolor', array(
    'default' => 'white'
  ));
  $wpcm->add_setting('textcolor', array(
    'default' => 'black'
  ));

  // add controls
  $wpcm->add_control('bgcolor-control', array(
    'label' => 'Background Color',
    'section' => 'colors',
    'settings' => 'bgcolor'
  ));

  $wpcm->add_control('textcolor-control', array(
    'label' => 'Text Color',
    'section' => 'colors',
    'settings' => 'textcolor'
  ));

});

add_action('wp_head', function() { ?>

  <style type="text/css">
    body {
      background-color: <?php echo get_theme_mod('bgcolor'); ?>;
      color: <?php echo get_theme_mod('textcolor'); ?>;
    }
  </style>

<?php });
