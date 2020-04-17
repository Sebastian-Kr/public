<?php
/*Template Name: Prezenty online*/
?>


<?php get_header(); ?>
<?php get_template_part('custom_template_parts/content', 'headerContent'); ?>

<section>

    <div class="container productsCategoryContainer">
        <div class="row">

            <?php
        $args = array(
          'post_type' => 'product',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'ASC',
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
          $loop->the_post(); 



if( has_term( 19, 'product_cat' ) ) {
  get_template_part('custom_template_parts/module', 'cuponTile'); 
}




        endwhile;
        wp_reset_postdata();
        ?>

        </div>
    </div>
</section>

<section>
    <div class="container ">
        <div class="row">
            <div class="col-xs-12">
                <div class="center-box">
                    <h2 class="h1">
                        <?php echo get_field('title_2'); ?>
                    </h2>
                    <div class="standard_tamplate_content mb-2">
                        <?php echo get_field('content_2'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>

    <div class="container productsCategoryContainer">
        <div class="row">

            <?php
        $args = array(
          'post_type' => 'product',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'ASC',
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
          $loop->the_post(); 



if( has_term( 20, 'product_cat' ) ) {
  get_template_part('custom_template_parts/module', 'cuponTile'); 
}




        endwhile;
        wp_reset_postdata();
        ?>

        </div>
    </div>
</section>


<?php get_footer();