<?php
class MyWidget extends WP_Widget {
  function __construct() {
    parent::__construct(
      'my_widget',
      'My Widget',
      array(
        'description' => 'This widget shows a random number'
      )
    );
  }


  public function widget($args, $instance) {
    extract($args);

    echo $before_widget;
    // echo "<h2 class=\"widget-title\"> <php echo $instance['title'] </h2>";
    echo $instance['title'].'<br>';
    echo rand(0, 1000);
    echo $after_widget;

  }

  public function form($instance) { ?>
    <p>
      <label for="<?php echo $this->get_field_name('title'); ?>">Name Widget</label>
    <input  type="text"
            name="<?php echo $this->get_field_name('title'); ?>"
            id="<?php echo $this->get_field_id('title'); ?>"
            />
    </p>
  <?php }
}
