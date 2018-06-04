<?php
  // Register Nav Walker class_alias
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

  // Theme support
  function ds_theme_setup(){
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

    // Post formats
    add_theme_support('post-formats', array('image', 'gallery', 'aside'));

    // Add Featured Image support
    add_theme_support('post-thumbnails');
    add_image_size('banner-image', 500, auto, true);
  }

  // Add custom background support
    add_theme_support( 'custom-background' );

    $defaults = array(
  	'default-color'          => '',
  	'default-image'          => '',
  	'default-repeat'         => 'no-repeat',
  	'default-position-x'     => 'center',
          'default-position-y'     => 'center',
          'default-size'           => 'auto',
  	'default-attachment'     => 'scroll',
  	'wp-head-callback'       => '_custom_background_cb',
  	'admin-head-callback'    => '',
  	'admin-preview-callback' => ''
  );
  add_theme_support( 'custom-background', $defaults );

  add_theme_support( 'custom-header' );


  add_action('after_setup_theme', 'ds_theme_setup');


  //Excerpt Length Control
  function set_excerpt_length(){
    return 45;
  }

  add_filter('excerpt_length', 'set_excerpt_length');

  // Widget Locations
  function ds_init_widgets($id){
    register_sidebar(array(
      'name' => 'Sidebar 1',
      'id'   => 'sidebar1',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));


    register_sidebar(array(
      'name' => 'Sidebar 2',
      'id'   => 'sidebar2',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name' => 'Sidebar 3',
      'id'   => 'sidebar3',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));

    register_sidebar(array(
      'name' => 'Sharing Sidebar 1',
      'id'   => 'sharing-sidebar1',
      'before_widget' => '<div class="sidebar-module">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));
  }

  add_action('widgets_init', 'ds_init_widgets');

  // Customizer File
  require get_template_directory(). '/inc/customizer.php';
