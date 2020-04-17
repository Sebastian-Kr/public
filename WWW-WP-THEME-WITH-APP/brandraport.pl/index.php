<?php get_header(); ?>

<div class="standard_tamplate_container">

    <div class="standard_tamplate_content_container container">

        <?php get_template_part('template_parts/content', 'header'); ?>

        <div class="row">




            <div class="col-md-12 full_template_container">

                <?php get_template_part('template_parts/content', 'main'); ?>


                <?php if (is_page(1075)): ?>
                <div class="center-box mt-1">
                    <a href="<?php echo get_permalink(
                      1025
                    ); ?>" class="button btn-v6 btn-icon btn-icon-right btn-icon-check1">
                        <span>Rozpocznij test</span></a>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>