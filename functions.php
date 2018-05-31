<?php
  // Register Nav Walker class_alias
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

  // Theme support
  function ds_theme_setup(){
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

  add_action('after_setup_theme', 'ds_theme_setup');


  //Excerpt Lenght Control
  function set_excerpt_length(){
    return 45;
  }

  add_filter('excerpt_length', 'set_excerpt_length');
