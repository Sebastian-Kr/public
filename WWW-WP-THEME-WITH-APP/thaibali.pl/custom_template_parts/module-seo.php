<section class="gradient2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="line">

                    <?php if (get_field('module_SEO_title')): ?>
                    <?php echo get_field('module_SEO_title'); ?>
                    <?php endif; ?>


                </h3>
                <div id="hide-show-panel" class="">

                    <?php if (get_field('module_SEO_excerpt')): ?>
                    <?php echo get_field('module_SEO_excerpt'); ?>
                    <?php endif; ?>


                    <div class="prgrm-hide-show-panel">
                        <div class="prgrm-hide-show-panel__hide-box">

                            <?php if (get_field('module_SEO_content')): ?>
                            <?php echo get_field('module_SEO_content'); ?>
                            <?php endif; ?>


                        </div>
                        <h5 class="prgrm-hide-show-panel__triger"><?php echo __('[:pl]Czytaj więcej[:en]Read more'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>