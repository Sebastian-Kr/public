</div>




<?php get_template_part('custom_template_parts/content', 'prefooter'); ?>


<div class="backdrop"></div>

<div class="lighbox_container">
    <div class="backdrop2"></div>

    <div id="prgrm_lightbox" class="prgrm_lightbox">
        <div class="LigthboxContent"><img src="" alt=""></div>
        <div class="close"></div>
        <div class="lightbox-arrow lightbox_cont_prev">
            <div class="lightbox_prev"></div>
        </div>
        <div class="lightbox-arrow lightbox_cont_next">
            <div class="lightbox_next"></div>
        </div>
        <div id="loader"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/loader.svg" alt=""></div>
    </div>
</div>
<!-- end content DIV  -->
<div class="prgrm-footer-starter"></div>

<footer class="prgrm-footer">



    <div class="container">
        <div class="row prgrm-footer__columnBox">


            <div class="prgrm-footer__column ">
                <?php if ( get_field('column1_content', 97) ) : ?>
                <?php echo get_field('column1_content', 97); ?>
                <?php endif; ?>


            </div>


            <div class="prgrm-footer__column">
                <?php if ( get_field('column2_content', 97) ) : ?>
                <?php echo get_field('column2_content', 97); ?>
                <?php endif; ?>

            </div>


            <div class="prgrm-footer__column prgrm-footer__column--center">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="">
                </a>
            </div>



            <div class="prgrm-footer__column ">
                <?php if ( get_field('column4_content', 97) ) : ?>
                <?php echo get_field('column4_content', 97); ?>
                <?php endif; ?>
            </div>


            <div class="prgrm-footer__column ">
                <?php if ( get_field('column5_content', 97) ) : ?>
                <?php echo get_field('column5_content', 97); ?>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <div class="container ">
        <!-- <div class="hr-full"></div> -->
        <div class=" row copyright">
            <div class="copyright-box col-md-7">


                <p><?php echo date("Y"); ?> © </p>
                <a href="https://thaibali.pl">
                    <h2>Thai Bali Garden</h2>
                </a>
                <p> All rights reserved. </p>
                <div class="copyright3__author">
                    Design by&nbsp;<a target="blank" href="https://wizualni.pl/">
                        <h2>Wizualni.pl</h2>
                    </a>
                </div>
                <span class="copyright3__spacer">|</span>
                <div class="copyright3__author">Developed by&nbsp;<a target="blank" href="https://progremo.pl/">
                        <h2>Progremo.pl</h2>
                    </a></div>


            </div>
            <div class="copyright-box copyright-box--right col-md-5">
                <a
                    href="<?php echo get_permalink(3)?>"><?php echo __('[:pl]Polityka prywatności[:en]Privacy policy'); ?></a>
                <span class="copyright3__spacer">|</span>
                <a
                    href="<?php echo get_permalink(124)?>"><?php echo __('[:pl]Polityka cookies[:en]Cookies policy'); ?></a>
            </div>
        </div>
    </div>

</footer>


<?php do_action('storefront_before_footer'); ?>
<?php do_action('storefront_after_footer'); ?>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
</body>

</html>