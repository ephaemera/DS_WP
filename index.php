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

      <article class="entry-archive">
        <div class="row justify-content-sm-center">
          <div class="col-sm col-md-4">
            <div class="entry-header-title">
              <h2>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>

              </h2>
            </div>
          </div>
          <div class="col-sm col-md-6">
            <div class="entry-header-excerpt">
              <?php the_excerpt(); ?>
                <a href="single2.html" class="read-more-excerpt">Read More &raquo;</a></p>
            </div>
          </div>
        </div>
        <!-- row -->
      </article>

    <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>



      <div class="container latest archive">
        <div class="row justify-content-center">
          <p><a href="archive.html">Archives</a></p>
        </div>
      </div>


    </div>
    <!-- container -->

    <hr>

    <div class="container-fluid">
    <?php get_footer(); ?>
