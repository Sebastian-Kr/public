<?php get_header(); ?>
<?php get_template_part('custom_template_parts/content', 'headerContent'); ?>
<?php get_template_part('custom_template_parts/content', 'sectionGenerator'); ?>

<section class="massageInfoDetalis">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 center-box">
                <div class="massageTile" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/massage-border-big.svg" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 ">
                <h3 class="line">Efekty masażu</h3>

                <?php get_template_part('custom_template_parts/module', 'MassageSepecification'); ?>



                <h3 class="line">Opis masażu</h3>

                <?php if ( get_field('massage_description') ) : ?>
                <?php echo get_field('massage_description'); ?>
                <?php endif; ?>

                <?php 
                $productID = get_field('woocemmerce_link');
                $product = wc_get_product( $productID[0] );
                // echo $product;
                // echo $product->get_regular_price();
                $product->get_sale_price();
                $product->get_price();
                
                ;?>

                <div class="massageVariantTable">
                    <div class="massageVariantTable-row">
                        <h3 class="line">Wersje masażu</h3>
                        <h4>Czas</h4>
                        <h4>Cena</h4>
                    </div>

                    <div class="line line--full massageVariantTable-row">
                        <?php if ( get_field('massage_var1') ) : ?>
                        <?php echo get_field('massage_var1'); ?>
                        <?php endif; ?>

                    </div>


                    <div class=" massageVariantTable-row">
                        <?php if ( get_field('massage_var2') ) : ?>
                        <?php echo get_field('massage_var2'); ?>
                        <?php endif; ?>

                    </div>

                    <div class=" massageVariantTable-CTArow">
                        <div><a class="button btn--special"
                                href="<?php the_field('reservation_link');?>"><?php echo __('[:pl]Zarezerwuj[:en]Book'); ?></a>
                        </div>
                        <p>lub</p>
                        <div>
                            <a class="button btn--special"
                                href="<?php echo get_permalink($productID[0]);?>"><?php echo __('[:pl]Podaruj[:en]Give'); ?></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();