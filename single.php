<?php get_header(); ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="entry-header">
      <div class="row justify-content-sm-center">
        <div class="col-sm col-md-9">
          <?php the_category(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_excerpt(); ?>
          <p class="meta">
            <?php the_time('F j, Y'); ?> by <?php the_author_meta('nickname', 1); ?> in <?php the_tags( '', ', ', '' ); ?> :: <?php comments_number(); ?>
            
          </p>
        </div>
      </div>
    </div>
    <!-- entry-header -->
  </div>
</div>
<!-- jumbotron -->


<div class="page-single">
  <div class="container single">

    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content', 'single'); ?>

  <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
  <?php endif; ?>

  </div>
  <!-- container -->

  <hr>


    <div class="container-fluid">
    <?php get_footer(); ?>
