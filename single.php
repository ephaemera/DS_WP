<?php get_header(); ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="entry-header">
      <div class="row justify-content-sm-center">
        <div class="col-sm col-md-9">
          <a href="#" class="category-label text-center">Being Geniuses Together</a>
          <h1><?php the_title(); ?></h1>
          <p class="meta">
            <?php the_time('F j, Y g:i a'); ?>
            by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
          </a>
          </p>
        </div>
      </div>
    </div>
    <!-- entry-header -->
  </div>
</div>
<!-- jumbotron -->


<div class="page-single">
  <div class="container">

    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>

    <article class="entry">
      <div class="row justify-content-sm-center">
        <div class="col-sm col-md-9">
          <?php the_content(); ?>
          <?php comments_template(); ?>
          <div class="row post-nav">
            <div class="col-sm nav-prev"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, nisi.</a></div>
            <div class="col-sm text-right nav-next"><a href="">Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet </a></div>
          </div>
        </div>

      </div>
      <!-- row -->

    </article>
  <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
  <?php endif; ?>

  </div>
  <!-- container -->

  <hr>


    <div class="container-fluid">
    <?php get_footer(); ?>
