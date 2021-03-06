<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- Bootstrap CSS -->
    <!-- <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->
    <title>
        <?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') :  wp_title(); ?>
    </title>
    <?php wp_head(); ?>

    <style>

    .jumbotron {
      background: url(<?php echo get_theme_mod('jumbotron_image', get_bloginfo('template_url').'/img/jumbotron.jpg'); ?>);
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-position: center center;
    }

    </style>
</head>

<body <?php body_class(); ?>>
  <a id="top"></a>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">dS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            		wp_nav_menu( array(
            			'theme_location'    => 'primary',
            			'depth'             => 2,
            			'container'         => 'div',
            			'container_class'   => 'collapse navbar-collapse',
            			'container_id'      => 'navbarsExample01',
            			'menu_class'        => 'navbar-nav mr-auto',
            			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            			'walker'            => new WP_Bootstrap_Navwalker(),
            		) );
            		?>
                <!-- collapse navbar-collapse -->
        </div>
        <!-- container -->
    </nav>
