<?php
  function ds_customize_register($wp_customize){
    // Jumbotron Section
    $wp_customize->add_section('jumbotron', array(
      'title' => __('Jumbotron', 'dstheme'),
      'desription' => sprintf(__('Options for jumbotron', 'dstheme')),
      'priority' => 130
    ));

    $wp_customize->add_setting('jumbotron_image', array(
      'default' => get_bloginfo('template_directory'). '/img/jumbotron.jpg', 
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jumbotron_image', array(
      'label' => __('Jumbotron Image', 'dstheme'),
      'section' => 'jumbotron',
      'settings' => 'jumbotron_image',
      'priority' => 1
    )));
  }

  add_action('customize_register', 'ds_customize_register');
