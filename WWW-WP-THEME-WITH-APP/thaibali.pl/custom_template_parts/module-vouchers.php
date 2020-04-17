<?php if (get_field('image', 99)): ?>
<?php $imageURL = get_field('image', 99); ?>
<?php endif; ?>



<section class="gradient1">
    <div class="container">
        <div class="row gift_module">
            <div class="col-xs-12 col-md-6 before-title-text-box text-gifts">
                <?php if (get_field('content', 99)): ?>
                <?php echo get_field('content', 99); ?>
                <?php endif; ?>

                </p><a href="#" class="button btn--special"><?php echo __('[:pl]Kup teraz[:en]Buy now'); ?></a>
            </div>

            <div class="col-xs-12 col-md-6">
                <img class="giftImage" src="<?php echo $imageURL; ?>" alt="">
            </div>
        </div>
    </div>
</section>