<section id="top_header_v1" class="shadow">

    <div class="bgheader" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div>
<div class="bgheader-gradient gradient fadeIn"></div>
  <?php if (get_field('img_mobile_header')): ?>
<div class="bgheader_mobile" style="background-image: url('<?php echo the_field('img_mobile_header')?>')">


</div>
  <?php endif; ?>



<div class="container caption">
<div class="row"><div class="col-lg-12">
  <h1 class="fadeInLeft">
    <?php echo get_the_title();?>

  </h1>
  <h5 class="dum"><?php echo the_field('progremo_subtitle_nk1') ?></h5>
</div></div>
</div>
</section>
