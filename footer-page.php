<footer>

    <p class="top text-center"><a href="#top"><i class="fas fa-chevron-circle-up"></i></a></p>
    <div class="container-fluid sharing">
        <div class="row justify-content-sm-center">
            <div class="col-sm col-md-4 text-center">
                <?php if(is_active_sidebar('sharing-sidebar1')): ?>
                    <?php dynamic_sidebar('sharing-sidebar1'); ?>
                        <?php endif; ?>
                        <div class=hd-search>
                          <?php get_search_form(); ?>
                        </div>
            </div>
        </div>
    </div>
    <p class="copyright text-center">Site and content &copy;
        <?php echo Date('Y'); ?> -
            <?php bloginfo('name'); ?> , Ephaemera Creative and Vision by Pixels. All Rights Reserved.</p>


</footer>


    </div>

    <!-- page -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <!-- <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script> -->

    <?php wp_footer(); ?>
    </body>

    </html>
