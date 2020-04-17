<?php
/*Template Name: raportItem*/
?>
<?php
session_start();
$_SESSION['raportPrice'] = get_field('price');
$_SESSION['raportName'] = get_the_title();
?>


<?php get_header(); ?>

<div class="standard_tamplate_container fw-700">


    <div class="standard_tamplate_content_container container">

        <?php get_template_part('template_parts/content', 'header'); ?>



        <div class="raportInfoBox mt-1 row">
            <div class="col-md-3">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="col-md-9 raportInfoBox__contentColumn">
                <div class="raportInfoBox__header">
                    <div class="raportInfoBox__title ">
                        <?php echo get_field('tag_title'); ?>
                    </div>

                    <div class="raportInfoBox__price">
                        <?php if (get_field('price')): ?>
                        Cena: <h4>
                            <?php echo get_field('price'); ?>
                            zł

                        </h4>
                        <?php endif; ?>
                        <?php if (get_field('old_price')): ?>
                        <h6>
                            <?php echo get_field('old_price'); ?>
                            zł
                        </h6>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (get_field('add_info_raport')): ?>
                <?php echo get_field('add_info_raport'); ?>
                <?php endif; ?>


            </div>
        </div>

        <!-- content -->
        <div class="row">
            <div class="col-md-12 standard_tamplate_content">
                <div class="center-box">
                    <h4 class="line line-center">Co dostaniesz?</h4>
                    <?php get_template_part(
                      'template_parts/content',
                      'main'
                    ); ?>
                </div>
            </div>
        </div>

        <div class="row mt-2">

            <div class="col-md-4">
                <?php if (get_field('add_info_raport_column1')): ?>
                <?php echo get_field('add_info_raport_column1'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if (get_field('add_info_raport_column2')): ?>
                <?php echo get_field('add_info_raport_column2'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if (get_field('add_info_raport_column3')): ?>
                <?php echo get_field('add_info_raport_column3'); ?>
                <?php endif; ?>
            </div>

        </div>


        <!-- CTA section -->
        <div class="double-button-box mt-2 ">
            <div>
                <a target="blank" href="<?php echo get_permalink(
                  1178
                ); ?>" class="button btn-small btn-v11 "><span>Pokaż
                        FAQ</span></a>
            </div>
            <div> <a href="<?php echo get_permalink(1106); ?>"
                    class="button btn-v6 btn-icon btn-icon-right btn-icon-check1">
                    <span>Przejdź do zamówienia</span></a>
            </div>
            <div></div>
        </div>

    </div>
</div>
</div>


<?php get_footer(); ?>