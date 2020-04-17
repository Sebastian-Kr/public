<?php 
$raportID = get_query_var('raportID');
?>


<?php if ( get_field('is_recomended', $raportID) ) : ?>
<div class="recomended_bar">POLECANE</div>
<?php endif; ?>

<div class="header-cell cell--no-border-desktop">
    <img src="<?php echo get_the_post_thumbnail_url($raportID); ?>" alt="">
    <h5 class="header-cell__title"> <?php echo get_field('tag_title', $raportID);?></h5>
    <p>
        <?php if ( get_field('raport_tagline', $raportID) ) : ?>
        <?php echo get_field('raport_tagline', $raportID); ?>
        <?php endif; ?>
    </p>
</div>