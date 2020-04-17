<?php
/*Template Name: Lista masażów*/
?>


<?php get_header(); ?>
<?php get_template_part('custom_template_parts/content', 'headerContent'); ?>

<section>

    <div class="container">
        <div class="row">

            <?php
        $args = array(
          'post_type' => 'massages',
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'ASC',
          'posts_per_page' => -1
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
          $loop->the_post(); ?>
            <div class=" col-xs-12 col-sm-4 col-md-3">

                <?php get_template_part('custom_template_parts/module', 'MassageTile'); ?>

            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>

        </div>
    </div>
</section>

<?php get_template_part('custom_template_parts/content', 'prefooter'); ?>
<?php get_footer();