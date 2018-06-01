<?php
  function ds_customize_register($wp_customize){

    $wp_customize->add_section();
  }

  add_action('customize_register', 'wpb_customize_register');
