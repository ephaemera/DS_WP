<?php get_header(); ?>

  <div class="jumbotron jumbotron-fluid featured">
    <div class="container">
      <div class="entry-header">
        <div class="row justify-content-sm-center">
          <div class="col-sm col-md-9">
            <a href="#" class="category-label text-center">Being Geniuses Together</a>
            <h1><a href="single2.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, enim.</a></h1>
            <p><a href="single2.html" class="read-more">Read More &raquo;</a></p>
          </div>
        </div>
      </div>
      <!-- entry-header -->
    </div>
  </div>
  <!-- jumbotron -->



  <div class="page">

    <div class="container latest">
      <div class="row justify-content-center">
        <p>Latest Stories</p>
      </div>
    </div>

    <div class="container">

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content'); ?>

    <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>



    </div>
    <!-- container -->

    <hr>

    <?php get_footer(); ?>
