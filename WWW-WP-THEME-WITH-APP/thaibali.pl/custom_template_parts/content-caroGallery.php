<div class="carousel-multiple-items slider_section6">





    <?php if ( have_rows('carousel_gallery_loop') ) : ?>

    <?php 
       $counter=0;
       while( have_rows('carousel_gallery_loop') ) : the_row(); ?>

    <?php 
$imgID = get_sub_field('carousel_gallery_loop_item');
$srcset = wp_get_attachment_image_srcset( $imgID, array( 400, 200 ) );
$imgFullUrl = wp_get_attachment_url( $imgID, 'full' );
?>
    <div class="item_box_container" data-imgFullUrl="<?php echo $imgFullUrl;?>" data-id="<?php echo $counter; ?>">


        <div class="item_box box">
            <img class="slider_item lazy_loader_gallery" src="<?php header_image($imgID); ?>"
                srcset="<?php echo esc_attr( $srcset ); ?>">

        </div>
    </div>


    <?php $counter++; ?>
    <?php endwhile; ?>

    <?php endif; ?>

</div>