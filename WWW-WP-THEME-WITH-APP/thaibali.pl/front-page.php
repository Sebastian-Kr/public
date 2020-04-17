<?php get_header(); ?>


<section class="homePageHeader">

    <div class="homePageHeader-frame">
        <div class="decor decor-top-left"></div>
        <div class="decor decor-top-right"></div>
        <div class="decor decor-bottom-right"></div>
        <div class="decor decor-bottom-left"></div>

    </div>

    <div class="homePageHeader-content">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/new/deco1.svg" alt="">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/thai_bali_garden-min.png" alt="">
        <?php get_template_part('custom_template_parts/content', 'main'); ?>
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/new/deco2.svg" alt="">
    </div>

    <div class="homePageHeader-contactBox">
        <div class="container">
            <div class="row ">
                <div class="homePageHeader-contactInfo">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon_map.svg" alt="">
                    <div>

                        <?php if ( get_field('contact_col1') ) : ?>
                        <?php echo get_field('contact_col1'); ?>
                        <?php endif; ?>

                    </div>
                </div>


                <div class="homePageHeader-contactInfo">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon-time.svg" alt="">
                    <div>
                        <?php if ( get_field('contact_col2') ) : ?>
                        <?php echo get_field('contact_col2'); ?>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="homePageHeader-contactInfo">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon-phone.svg" alt="">
                    <div>
                        <?php if ( get_field('contact_col3') ) : ?>
                        <?php echo get_field('contact_col3'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="frontPage_bgs_area before-title-text-box text-offer">
    <?php get_template_part('custom_template_parts/module', 'moreMassage'); ?>
</div>

<div class="frontPage_bgs_area2">
    <div class="decor-foto decor-foto-1"></div>
    <div class="decor-foto decor-foto-2"></div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col center-box">
                    <?php echo get_field('roadText1'); ?>
                </div>
            </div>
        </div>

        <div class="container clientRoad">
            <div class="row">
                <div class="col-md-5">
                    <div class="first-header before-title-text-box text-garden">
                        <?php echo get_field('roadText2'); ?></div>

                    <div class="clientRoad-fotobox"
                        style="background-image: url('  <?php echo get_field('roadImg2'); ?>')">
                        <div class="clientRoad-fotoboxHeader">
                            <?php echo get_field('roadText4'); ?>
                        </div>
                    </div>

                    <?php echo get_field('roadText6'); ?>

                    <div class="clientRoad-fotobox"
                        style="background-image: url('  <?php echo get_field('roadImg4'); ?>')">
                        <div class="clientRoad-fotoboxHeader">
                            <?php echo get_field('roadText8'); ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">

                    <div class="clientRoad-fotobox first-fotobox"
                        style="background-image: url('  <?php echo get_field('roadImg1'); ?>')">
                        <div class="clientRoad-fotoboxHeader"> <?php echo get_field('roadText3'); ?></div>
                    </div>

                    <?php echo get_field('roadText5'); ?>

                    <div class="clientRoad-fotobox clientRoad-fotobox--filmbox prgrmFilmbox-triggerContent"
                        film_url="<?php echo get_field('road_movie')?>"
                        style="background-image: url('<?php echo get_field('roadImg3'); ?>')">
                        <div class="clientRoad-fotoboxHeader"> <?php echo get_field('roadText7'); ?></div>
                        <h5 class="clientRoad-playIcon"><?php echo __('[:pl]Zobacz film[:en]Watch movie'); ?></h5>
                    </div>

                    <div class="light_box_film">
                        <div class="full_glass"></div>
                        <div class="close_button"></div>
                        <video class="content_video" autoplay controls>
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <div class="before-title-text-box text-team">

                        <?php echo get_field('roadText9'); ?>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="decor-foto decor-foto-3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 center-box before-title-text-box text-see text-center">
                    <h2><?php echo get_field('carousel_gallery_title'); ?></h2>
                    <p><?php echo get_field('carousel_gallery_desc'); ?></p>
                </div>
            </div>
        </div>

        <div class="caroGallery_container">
            <?php get_template_part('custom_template_parts/content', 'caroGallery'); ?>
        </div>
    </section>


</div>

<section>

    <div class="container cta-frontpage-section">
        <div class="row">
            <div class="col-md-12 before-title-text-box text-feel text-center center-box">
                <?php if ( get_field('content-cta') ) : ?>
                <?php echo get_field('content-cta'); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php get_footer();?>