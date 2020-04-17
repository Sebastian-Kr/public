<div class="row">
    <div class="col-md-12 mb-1">


        <div class="standard_template_header">
            <?php if ( get_field('return_to_home') ) : ?>
            <a href="<?php echo home_url();?>"
                class="button btn-small btn-v7 btn-icon btn-icon-left btn-icon-arrow2"><span>Powrót</span></a>
            <?php endif; ?>



            <?php if ( get_field('main_header') ) : ?>
            <h2> <?php echo get_field('main_header'); ?></h2>
            <?php endif; ?>
        </div>



    </div>
</div>