<div class="standard_tamplate_content mb-2">
    <?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    if (get_the_content()){
      the_content();
    } // end is content statment
  } // end while
} // end if
?>
</div>