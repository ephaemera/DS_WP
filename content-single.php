<article class="entry">
  <div class="row justify-content-sm-center">
    <div class="col-sm col-md-9">
      <?php the_content(); ?>
      <p class="meta">
        <?php the_time('F j, Y'); ?> by <?php the_author_meta('nickname', 1); ?> in <?php the_tags( '', ', ', '' ); ?> :: <?php comments_number(); ?>
      </p>
      <?php comments_template(); ?>
    </div>
  </div>
</article>
