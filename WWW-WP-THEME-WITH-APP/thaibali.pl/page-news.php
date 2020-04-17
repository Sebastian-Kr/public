<?php
/*Template Name: Aktualności*/
?>


<?php get_header(); ?>
<?php get_template_part('custom_template_parts/content', 'headerContent'); ?>

<section class="newsList">
    <div class="container">

        <?php
    global $paged;
$curpage = $paged ? $paged : 1;
$args = array(
    // 'post_type' => 'testimonials',
    'orderby' => 'post_date',
    'posts_per_page' => 5,
    'paged' => $paged
);
$query = new WP_Query($args);
if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
?>
        <div id="post-<?php the_ID(); ?>" class="quote">
            <?php get_template_part('custom_template_parts/content', 'postTile'); ?>
        </div>

        <?php endwhile;
    echo '
    <div class="wp_pagination">
        <a class="previous page button" href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'"><span class="arrow"></span><span>Poprzednia strona</span></a>';
        echo '<div class="wp_post_numbers">';
        for($i=1;$i<=$query->max_num_pages;$i++)
            echo '<a class="'.($i == $curpage ? 'active ' : '').'page button" href="'.get_pagenum_link($i).'">'.$i.'</a>';

            echo '</div>';
        echo '
        <a class="next page button" href="'.get_pagenum_link(($curpage+1 <= $query->max_num_pages ? $curpage+1 : $query->max_num_pages)).'"><span>Następna strona </span><span class="arrow"></span></a>
    </div>
    ';
    wp_reset_postdata();
endif;
?>



    </div>
</section>
<?php get_footer();