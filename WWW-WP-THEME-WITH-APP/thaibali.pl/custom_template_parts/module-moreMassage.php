<section class="moreMassageModule">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2> <?php echo get_field('moreMassageModule-title', 100); ?></h2>
                <p><?php echo get_field('moreMassageModule-desc', 100);?></p>

                <a href="" class=" button btn--special"><?php echo __('[:pl]Pokaż więcej[:en]Show more'); ?></a>
            </div>


            <div class="col-md-8">
                <div class="moreMassageModule-tilesBox">
                    <?php
                    $idMassage = get_field('moreMassageModule-massage1', 100);
                    set_query_var('massageId', $idMassage[0]); 
                    get_template_part('custom_template_parts/module', 'MassageTile'); 
                    ?>


                    <?php 
                            $idMassage = get_field('moreMassageModule-massage2', 100);
                            set_query_var('massageId', $idMassage[0]); 
                    get_template_part('custom_template_parts/module', 'MassageTile'); ?>


                    <?php 
                            $idMassage = get_field('moreMassageModule-massage3', 100);
                            set_query_var('massageId', $idMassage[0]); 
                    get_template_part('custom_template_parts/module', 'MassageTile'); ?>


                </div>
            </div>



        </div>
    </div>

</section>