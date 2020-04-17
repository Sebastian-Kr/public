<?php 
$massageId = get_query_var('massageId');
if ($massageId == get_the_ID()) {
$alternativeMassage = get_field('moreMassageModule-massage4', 100);
$massageId = $alternativeMassage[0];
}
;?>

<div class="specialMassageTile" style="background-image: url('<?php echo get_the_post_thumbnail_url($massageId);?>')">
    <img class="specialMassageTile-border"
        src="<?php echo get_stylesheet_directory_uri($massageId);?>/img/massage-border-small.svg" alt="">
    <a href="<?php echo get_permalink($massageId);?>" class="specialMassageTile-tileHoverBox">
        <h4><?php echo get_the_title($massageId) ;?></h4>
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/massage-deco.svg" alt="">

        <div class="specialMassageTile-specification">
            <span class="specification-title"><?php echo __('[:pl]Terapeutyczny[:en]Therapeutic'); ?></span>
            <?php prgrm_generate_progressBar(get_field('therapeutic_effect', $massageId), $massageId);?>
            <span class="specification-title"><?php echo __('[:pl]Relaksacyjny[:en]Relaxing'); ?></span>
            <?php prgrm_generate_progressBar(get_field('relaxing_effect', $massageId), $massageId);?>
        </div>

        <p class="specialMassageTile-cta"><?php echo __('[:pl]Zobacz[:en]View'); ?></p>
    </a>
</div>