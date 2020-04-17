<div class="main-menu-desktop">

    <div class="container">
        <div class="row">
            <nav>
                <div>
                    <a href="<?php echo get_permalink(2); ?>"><?php echo __('[:pl]Nasza oferta[:en]Our offer'); ?></a>
                    <a href="<?php echo get_permalink(64); ?>"><?php echo __('[:pl]Aktualności[:en]News'); ?></a>
                    <a
                        href="<?php echo get_permalink(66); ?>"><?php echo __('[:pl]Prezenty online[:en]Online gifts'); ?></a>
                </div>

                <a class="menu-logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="">
                </a>

                <div>
                    <a href="<?php echo get_permalink(72); ?>"><?php echo __('[:pl]Kontakt[:en]Contact'); ?></a>
                    <a href=""
                        class="button btn--special btn--special_light "><?php echo __('[:pl]Zarezerwuj wizytę[:en]Booking'); ?></a>


                    <div id="multilang_box">
                        <div id="lang_active_box">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lang-icon.svg" alt="">
                            <span>PL</span>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lang-down.svg" alt="">
                        </div>

                        <div id="lang_options_box">
                            <?php if ( function_exists ( 'wpm_language_switcher' ) ) {wpm_language_switcher ();} ?>
                        </div>
                    </div>


                </div>
            </nav>
        </div>
    </div>

</div>



<!-- ////////////////////////////////////////////// -->

<div class="main-menu-mobile">

    <div class="menu-bar">
        <div class="menu-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="">
        </div>

        <div class="menu-box">
            <div class="menu-button">
                <p>MENU</p>
                <div id="nav-icon2">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="multilang_box">
                <div id="lang_active_box">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/pl.svg" alt="">
                    <span>PL</span>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lang-down.svg" alt="">
                </div>

                <div id="lang_options_box">
                    <?php if ( function_exists ( 'wpm_language_switcher' ) ) {wpm_language_switcher ();} ?>
                </div>
            </div>
        </div>


    </div>


    <!-- ////////////////////////////////////////////// -->
    <div class="menu-blackdrop"></div>
    <div class="menu-dropdown-box">

        <div class="add-info-item-title">Menu</div>
        <nav>
            <a href="<?php echo get_permalink(2); ?>"><?php echo __('[:pl]Nasza oferta[:en]Our offer'); ?></a>
            <a href="<?php echo get_permalink(64); ?>"><?php echo __('[:pl]Aktualności[:en]News'); ?></a>
            <a href="<?php echo get_permalink(66); ?>"><?php echo __('[:pl]Prezenty online[:en]Online gifts'); ?></a>
            <a href="<?php echo get_permalink(72); ?>"><?php echo __('[:pl]Kontakt[:en]Contact'); ?></a>
            <a href=""><?php echo __('[:pl]Zarezerwuj wizytę[:en]Booking'); ?></a>
        </nav>


        <div class="add-info-box">

            <div class="add-info-item-box add-info-hide-first">
                <div class="add-info-item-title"><?php echo __('[:pl]Kontakt[:en]Contact'); ?></div>
                <a class="add-info-item icon icon_phone" href="tel:+123414771">+12 341 47 71</a>
            </div>

            <div class="add-info-item-box">
                <div class="add-info-item-title">Social media</div>
                <a class="add-info-item icon icon_facebook" href="<?php the_field(
                  'facebook_link', 98); ?>" target="blank">
                    <!-- <img class="social_media_widget-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/fb.svg"
                        alt="Facebook"> -->
                    facebook.com/thaibali</a>
            </div>


        </div>


    </div>
</div>