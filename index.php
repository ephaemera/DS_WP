<?php get_header(); ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="entry-header">
                <div class="row justify-content-sm-center">
                    <div class="col-sm col-md-9">
                        <!-- https://stackoverflow.com/questions/9058949/wordpress-loop-that-shows-first-post-only -->
                        <?php $my_query = new WP_Query('showposts=1'); ?>
                            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <?php the_category(); ?>
                                    <h1>
              <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
              </a>
            </h1>
                                    <?php the_excerpt(); ?>
                                        <p><a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="fas fa-angle-right"></i></a></p>
                                        <?php endwhile; ?>
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
                <p>Previous Stories</p>
            </div>
        </div>

        <div class="container">

            <?php if(have_posts()) : ?>
                <!-- http://www.wpbeginner.com/wp-themes/how-to-exclude-latest-post-from-the-wordpress-post-loop/ -->
                <?php query_posts('posts_per_page=4&offset=1'); ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content'); ?>

                            <?php endwhile; ?>

                                <!--  <hr> -->
                                <div class="row justify-content-center paginate">

                                    <?php echo paginate_links(); ?>

                                </div>
                                <!--  <hr> -->

                                <?php else : ?>
                                    <p>
                                        <?php __('No Posts Found'); ?>
                                    </p>
                                    <?php endif; ?>



        </div>
        <!-- container -->

        <!--  <hr> -->

        <?php get_footer(); ?>
