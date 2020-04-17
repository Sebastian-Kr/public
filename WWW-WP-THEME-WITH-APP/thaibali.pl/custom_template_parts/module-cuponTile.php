<?php $_product = wc_get_product( get_the_ID());?>

<div class="col-md-4 col-sm-6 col-xs-12 center-box">

    <a href="<?php echo get_permalink();?>" class="productTile">
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
        <h3><?php the_title() ;?></h3>
        <p <?php if($_product->get_sale_price()) {echo 'class="sale_product"';}?>>
            <?php echo __('[:pl]Cena:[:en]Price:'); ?>
            <?php 
    
    echo '<span>'.$_product->get_regular_price().'</span>';
    echo $_product->get_sale_price();
    echo ' zł'
    
    ?>
        </p>
    </a>

</div>