<?php 
/*
Template Name: Contact
*/
?>


<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>

<?php get_template_part( 'content', 'title' );?>

<div class="container ext">



	<div class="row fixrow2 contactrow">
		<div class="scroll-block col-md-6 b-block">
		
			
				<?php the_field('content1'); ?>
				

			
		</div>
		<div class="col-md-6 r-block">
	
			
				<?php the_field('content2'); ?>
				
			
			
		</div>
		
	</div>
	

</div>



<div id="map" style="height:518px"></div>



<?php get_footer(); ?>


