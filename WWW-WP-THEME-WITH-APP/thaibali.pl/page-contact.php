<?php
/*Template Name: Kontakt*/
?>


<?php get_header(); ?>
<?php get_template_part('custom_template_parts/content', 'headerContent'); ?>
<?php get_template_part('custom_template_parts/content', 'sectionGenerator'); ?>

<div class="container contactInformation">
    <div class="row">
        <div class="col-xs-12 col-sm-3">

            <?php if ( get_field('column1') ) : ?>
            <?php echo get_field('column1'); ?>
            <?php endif; ?>


        </div>


        <div class="col-xs-12 col-sm-4">
            <?php if ( get_field('column2') ) : ?>
            <?php echo get_field('column2'); ?>
            <?php endif; ?>

        </div>

        <div class="col-xs-12 col-sm-3">
            <?php if ( get_field('column3') ) : ?>
            <?php echo get_field('column3'); ?>
            <?php endif; ?>

        </div>
        <div class="col-xs-12 col-sm-2 special-column">
            <h4 class="line">Social media</h4>
            <div class="socialMediaBox">
                <a href="<?php echo get_field('facebook_link', 98); ?>">
                    <img class="social_media_widget-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/fb.svg"
                        alt="Facebook">
                </a>





                <a href="<?php echo get_field('instagram_link', 98); ?>">
                    <img class="social_media_widget-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/ig.svg"
                        alt="Instagram">
                </a>


                <a href="<?php echo get_field('tripadvisor_link', 98); ?>">
                    <img class="social_media_widget-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/ta.svg"
                        alt="Trip Advisor">
                </a></div>
        </div>

        <div class="col-md-12 line line--full">
        </div>

    </div>
</div>

<div class="container contactForm-Mapcontainer">
    <div class="row">
        <div class="col-xs-12 col-sm-6 contactFormContainer">
            <h3><?php echo __('[:pl]Formularz kontaktowy[:en]Contact form'); ?></h3>
            <?php echo do_shortcode( '[contact-form-7 id="198" title="Formularz 1"]' ) ;?>
        </div>

        <div class="col-xs-12 col-sm-6 contactMapFoto">
            <h3><?php echo __('[:pl]Nasza lokalizacja[:en]Our location'); ?></h3>

            <a class="mapLink" target="blank" href="<?php echo get_field('mapGoogleUrl'); ?>">
                <img src="<?php echo get_field('mapImg'); ?>" alt="Mapa dojazdu">
            </a>

        </div>

    </div>
</div>

<?php get_footer();