<article class="entry">
  <div class="row justify-content-sm-center">
    <div class="col-sm col-md-9 single-content">
      <?php the_content(); ?>
      <div class="row post-nav">
          <div class="col-sm nav-prev">
              <?php previous_post_link('%link'); ?> <!-- https://wordpress.stackexchange.com/questions/152830/remove-arrows-from-previous-and-next-link -->
          </div>
          <div class="col-sm nav-next">
              <?php next_post_link('%link'); ?> <!-- https://digwp.com/2009/08/wordpress-page-navigation/ -->
          </div>
      </div>
      <?php comments_template(); ?>
    </div>
  </div>
</article>
