<?php 
$raportID = get_query_var('raportID');
$templateRaport = get_query_var('templateRaport');
?>


<div class="raportInfoBox raportInfoBox--<?php echo $templateRaport;?> ">
    <img src="<?php echo get_the_post_thumbnail_url($raportID); ?>" alt="">

    <div class="raportInfoBox__header">
        <div class="raportInfoBox__title ">
            <?php echo get_field('tag_title', $raportID);?>
        </div>
        <div class="hr-small"></div>
        <p>
            <?php if ( get_field('add_info_raport', $raportID) ) : ?>
            <?php echo get_field('add_info_raport', $raportID); ?>
            <?php endif; ?>

        </p>
        <div class="raportInfoBox__price">
            Cena: <h4>

                <?php if ( get_field('price', $raportID) ) : ?>
                <?php echo get_field('price', $raportID); ?>
                zł
                <?php endif; ?>

            </h4>
            <h6>
                <?php if ( get_field('old_price', $raportID) ) : ?>
                <?php echo get_field('old_price', $raportID); ?>
                zł
                <?php endif; ?>
            </h6>
        </div>



        <a href="<?php echo get_permalink($raportID);?>"
            class="btn-small button btn-v8 btn-icon btn-icon-right btn-icon-check3">
            <span>Zamów</span></a>


    </div>
</div>