<div class="row listItem">

    <div class="col-sm-5 col-lg-4 imageItemBox">
        <a class="imageItem" href="<?php the_permalink(); ?>"
            style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')"></a>
    </div>

    <div class="col-sm-7 col-lg-8 contentItemBox">
        <span class="dateItem"><?php echo get_the_date(); ?></span>
        <h2 class=" line"><a class="titleItem" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php echo the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button btn--light">Czytaj więcej</a>
    </div>

</div>