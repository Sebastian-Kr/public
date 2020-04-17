<div class="raportTableContainer raportTable--mobile">


    <div class="column column-raport column--R-basic prgrm-hide-show-panel">
        <?php 
    set_query_var('mobileTable', true);
     set_query_var('raportID', 1087);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <?php if ( get_field('raport1_basic', 1358) ) : ?>
        <?php echo get_field('raport1_basic', 1358); ?>
        <?php endif; ?>


        <div class="footer-cell">
            <h4>

                <?php if ( get_field('old_price', 1087) ) : ?>
                <span><?php echo get_field('old_price', 1087); ?> zł</span>
                <?php endif; ?>

                <?php if ( get_field('price', 1087) ) : ?>
                <?php echo get_field('price', 1087); ?> zł
                <?php endif; ?>

            </h4>

            <div class="buttons">
                <div class="prgrm-hide-show-panel__triger btn-v2 button">
                    <span>Rozwiń zawartość</span>
                </div>
                <a href="<?php echo get_permalink(1087);?>" class="button  btn-v1 ">
                    <span>Wybierz pakiet</span>
                </a>
            </div>
        </div>






    </div>
    <!-- end BASIC RAPORT column -->


    <div class="column column-raport column--R-professional prgrm-hide-show-panel">

        <?php 
     set_query_var('raportID', 1090);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <?php if ( get_field('raport_pro', 1358) ) : ?>
        <?php echo get_field('raport_pro', 1358); ?>
        <?php endif; ?>


        <div class="footer-cell">

            <h4>

                <?php if ( get_field('old_price', 1090) ) : ?>
                <span><?php echo get_field('old_price', 1090); ?> zł</span>
                <?php endif; ?>

                <?php if ( get_field('price', 1090) ) : ?>
                <?php echo get_field('price', 1090); ?> zł
                <?php endif; ?>

            </h4>

            <div class="buttons">


                <div class="prgrm-hide-show-panel__triger btn-v2 btn-v2b button">
                    <span>Rozwiń zawartość</span>
                </div>

                <a href="<?php echo get_permalink(1090);?>" class="button  btn-v5b">
                    <span>Wybierz pakiet</span>
                </a>
            </div>
        </div>

    </div>
    <!-- end PROFFESIONAL RAPORT column -->


    <div class="column column-raport column--R-deluxe prgrm-hide-show-panel">

        <?php 
     set_query_var('raportID', 1093);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <?php if ( get_field('raport_deluxe', 1358) ) : ?>
        <?php echo get_field('raport_deluxe', 1358 ); ?>
        <?php endif; ?>


        <div class="footer-cell">

            <h4>

                <?php if ( get_field('old_price', 1093) ) : ?>
                <span><?php echo get_field('old_price', 1093); ?> zł</span>
                <?php endif; ?>

                <?php if ( get_field('price', 1093) ) : ?>
                <?php echo get_field('price', 1093); ?> zł
                <?php endif; ?>

            </h4>


            <div class="buttons">
                <div class="prgrm-hide-show-panel__triger btn-v2 btn-v2c button">
                    <span>Rozwiń zawartość</span>
                </div>
                <a href="<?php echo get_permalink(1093);?>" class="button  btn-v6">
                    <span>Wybierz pakiet</span>
                </a>
            </div>
        </div>



    </div>
    <!-- end DELUXE RAPORT column -->


</div>