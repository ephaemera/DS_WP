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
