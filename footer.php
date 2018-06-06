<footer>

    <!--  <hr> -->

    <div class="container footer-sidebar">
        <div class="row justify-content-sm-center">
            <div class="col-sm col-md-4 left-widget">
                <?php if(is_active_sidebar('sidebar1')): ?>
                    <?php dynamic_sidebar('sidebar1'); ?>
                        <?php endif; ?>
            </div>
            <div class="col-sm col-md-4 center-widget">
                <?php if(is_active_sidebar('sidebar2')): ?>
                    <?php dynamic_sidebar('sidebar2'); ?>
                        <?php endif; ?>
            </div>
            <div class="col-sm col-md-4 right-widget">
                <?php if(is_active_sidebar('sidebar3')): ?>
                    <?php dynamic_sidebar('sidebar3'); ?>
                        <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- <hr> -->
    <p class="top text-center smooth-scroll"><a href="#top"><i class="fas fa-angle-double-up"></i></a></p>
    <div class="container-fluid sharing">
        <div class="row justify-content-sm-center">
            <div class="col-sm col-md-4 text-center">
                <?php if(is_active_sidebar('sharing-sidebar1')): ?>
                    <?php dynamic_sidebar('sharing-sidebar1'); ?>
                        <?php endif; ?>
            </div>
        </div>
    </div>
    <p class="copyright text-center">Site and content &copy;
        <?php echo Date('Y'); ?> -
            <?php bloginfo('name'); ?> , Ephaemera Creative and Vision by Pixels. All Rights Reserved.</p>


</footer>
<?php wp_footer(); ?>

    </div>

    <!-- page -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script> -->

    <script>
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
   </script>
    </body>

    </html>
