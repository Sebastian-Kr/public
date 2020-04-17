<div class="sectionGenerator container">


    <?php if ( have_rows( 'section_loop' ) ) : ?>
    <?php while ( have_rows('section_loop' ) ) : the_row(); ?>
    <?php if ( get_row_layout() == 'foto_text_section' ) : ?>
    <div class="row sectionGenerator-item">
        <div class="col-xs-12 col-md-7 sectionGenerator-column">
            <?php the_sub_field( 'text' ); ?></div>
        <div class="col-xs-12 col-md-5 sectionGenerator-column">
            <img src="<?php the_sub_field( 'foto_url' ); ?>" alt="">
        </div>
    </div>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'text_foto_section' ) : ?>
    <div class="row sectionGenerator-item">
        <div class="col-xs-12 col-md-5 sectionGenerator-column">
            <img src="<?php the_sub_field( 'foto_url' ); ?>" alt="">
        </div>
        <div class="col-xs-12 col-md-7 sectionGenerator-column">
            <?php the_sub_field( 'text' ); ?></div>
    </div>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'text_section' ) : ?>
    <div class="row sectionGenerator-item">
        <div class="col-xs-12 col-md-12 sectionGenerator-column"><?php the_sub_field( 'text' ); ?></div>
    </div>
    <?php endif; ?>


    <?php endwhile; ?>
    <?php endif; ?>



</div>