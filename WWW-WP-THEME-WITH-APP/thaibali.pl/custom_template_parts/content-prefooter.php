<?php 
if(get_query_var('pagename')!=='order-received') {

    if (get_field('module_moreMassage')) {
        get_template_part('custom_template_parts/module', 'moreMassage');
    }

    if (get_field('module_giveVoucher')) {
        get_template_part('custom_template_parts/module', 'vouchers');
    }

    if (get_field('module_SEO')) {
        get_template_part('custom_template_parts/module', 'seo');
    }

}
;?>


<section class="gradient1 newsletterModule">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <?php if ( get_field('newsletter_content', 94) ) : ?>
                <?php echo get_field('newsletter_content', 94); ?>
                <?php endif; ?>

            </div>
            <div class="col-xs-12 col-md-1"></div>
            <div class="col-xs-12 col-md-5">
                <form action="">
                    <div class="formRow">
                        <input type="text" placeholder="Twój adres e-mail" />
                        <input class="button btn--gradient" type="submit" value="Zapisz mnie" />
                    </div>
                    <label for="check">
                        <input type="checkbox" name="" id="check" />
                        <span class="fz14">
                            <?php echo __('[:pl]Oświadczam, że zapoznałem/am się i akceptuję z Politykę prywatności.[:en]I declare that I have read and accept the Policy
                             privacy.'); ?>
                        </span>
                    </label>
                </form>
            </div>
        </div>
    </div>
</section>


<div class="social_media_widget">
    <a href="<?php echo get_field('facebook_link', 98); ?>" class="social_media_widget-item">
        <img class="social_media_widget-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/fb.svg"
            alt="Facebook">
        <span>Facebook</span>
    </a>

    <a href="<?php echo get_field('instagram_link', 98); ?>" class="social_media_widget-item">
        <img class="social_media_widget-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/ig.svg"
            alt="Instagram">
        <span>Instagram</span>
    </a>


    <a href="<?php echo get_field('tripadvisor_link', 98); ?>" class="social_media_widget-item">
        <img class="social_media_widget-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/ta.svg"
            alt="Trip Advisor">
        <span>Trip Advisor</span>
    </a>


</div>