<div class="raportTableContainer">



    <!-- legend column -->

    <div class="column column--legend">

        <?php if ( get_field('col1_legend', 1341) ) : ?>
        <?php echo get_field('col1_legend', 1341); ?>
        <?php endif; ?>

    </div>

    <!-- end legend column -->


    <div class="column column--tooltips">
        <div class="section-row"></div>

        <?php if ( get_field('col1_info', 1341) ) : ?>
        <?php echo get_field('col1_info', 1341); ?>
        <?php endif; ?>

    </div>
    <!-- end tooltips column -->


    <div class="column column-raport column--R-basic">
        <?php 
     set_query_var('raportID', 1087);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <?php if ( get_field('col2_basic', 1341) ) : ?>
        <?php echo get_field('col2_basic', 1341); ?>
        <?php endif; ?>


        <?php 
     get_template_part('template_parts/content', 'raportTable-footer') ;
     ?>
    </div>
    <!-- end BASIC RAPORT column -->


    <div class="column column-raport column--R-professional">

        <?php 
     set_query_var('raportID', 1090);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <?php if ( get_field('col3_pro', 1341) ) : ?>
        <?php echo get_field('col3_pro', 1341); ?>
        <?php endif; ?>


        <?php 
     get_template_part('template_parts/content', 'raportTable-footer') ;
     ?>
    </div>
    <!-- end PROFFESIONAL RAPORT column -->


    <div class="column column-raport column--R-deluxe">

        <?php 
     set_query_var('raportID', 1093);
     get_template_part('template_parts/content', 'raportTable-header') ;
     ?>

        <?php if ( get_field('col4_deluxe', 1341) ) : ?>
        <?php echo get_field('col4_deluxe', 1341); ?>
        <?php endif; ?>


        <?php 
     get_template_part('template_parts/content', 'raportTable-footer') ;
     ?>
    </div>
    <!-- end DELUXE RAPORT column -->


</div>