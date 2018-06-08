<?php get_header(); ?>

    <div class="//jumbotron //jumbotron-fluid archive">
        <div class="container">
            <div class="entry-header">
                <div class="row justify-content-sm-center">
                    <div class="col-sm col-md-9">
                        <?php if(have_posts()) :

            ?>

                            <h1>Search results for: <?php the_search_query(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="page">

        <div class="container">

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
