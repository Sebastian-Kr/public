<?php
/*Template Name: FAQ*/
?>

<?php get_header(); ?>

<div class="standard_tamplate_container">


    <div class="standard_tamplate_content_container container">

        <?php get_template_part('template_parts/content', 'header'); ?>

        <div class="row text-center">




            <div class="col-md-12 full_template_container">

                <?php get_template_part('template_parts/content', 'main'); ?>



            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php if (have_rows('faq_questions_loop')): ?>
                <?php $counter = 0; ?>
                <?php while (have_rows('faq_questions_loop')):
                  the_row(); ?>
                <?php
                $counter++;
                if ($counter < 10) {
                  $counterText = '0' . $counter;
                }
                ?>
                <h6 class="fw-700 mt-1 mb-1 c1-text"><?php echo $counterText; ?></h6>
                <h6 class="fw-900 mb-1"> <?php the_sub_field('faq_question'); ?>
                </h6>
                <p> <?php the_sub_field('faq_answer'); ?>
                </p>
                <?php
                endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>