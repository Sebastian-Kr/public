<?php 
$raportID = get_query_var('raportID');
?>


<div class="footer-cell">
    <h4>
        <span>

            <?php if ( get_field('old_price', $raportID) ) : ?>
            <?php echo get_field('old_price', $raportID); ?>
            zł
            <?php endif; ?>

        </span>

        <?php if ( get_field('price', $raportID) ) : ?>
        <?php echo get_field('price', $raportID); ?>
        zł
        <?php endif; ?>


    </h4>




    <?php 
 if ($raportID == 1087) {
     $classList = ' btn-v2 ';
 }

 elseif ($raportID == 1090) {
     $classList =  ' btn-v9 ';
 }

 elseif ($raportID == 1093) {
     $classList =  ' btn-v6 ';
 }

 

?>

    <a href="<?php echo get_permalink($raportID);?>" class="button btn-small  <?php echo $classList;?> ">
        <span>Wybieram</span></a>

</div>