<?php get_header(); ?>

<div claass="scroll-point" id="start"></div>

<section class="dark-section main-header">

    <div class="bg-zoom-box"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/mountain.jpg')"></div>

    <div class="content_header container my-4 my-md-5">
        <div class="main-content animate  row ">

            <div class="col-md-12" data-aos="fade-right">
                <?php get_template_part('template_parts/content', 'main'); ?>

                <a href="#plany" class=" scroll-button button btn-v1">
                    <span>Wybierz plan dla siebie</span>

                </a>

            </div>

        </div>

    </div>

    <div class="container for_whom pb-5">
        <div class="scroll-point" id="dla_kogo"></div>
        <div class="row">
            <div class=" animate userEditor col-12 box_center" data-aos-delay="600" data-aos="fade-up">
                <!-- <div class=" animate userEditor col-12 box_center" data-aos-delay="600" data-aos="fade-up" data-aos-anchor=".for_whom_people"> -->
                <!-- <div class=" animate userEditor col-12 box_center"> -->
                <?php the_field('section_for_whom'); ?>
            </div>
        </div>

        <div class="row animate for_whom_loop">


            <div class="col-md-4">

                <?php $counter = 1; ?>
                <?php if (have_rows('section_for_whom_loop')): ?>
                <?php
                $animationTag = 'data-aos="fade-left"';

                $delay = 200;
                ?>
                <?php while (have_rows('section_for_whom_loop')):

                  the_row();
                  if ($counter == 4) {
                      echo '</div><div class="col-md-4"></div><div class="col-md-4">';
                      $animationTag = 'data-aos="fade-right"';
                    }
                 
                  ?>

                <div class="for_whom_item mt-3" data-aos-delay="<?php echo $delay; ?>"
                    data-aos-anchor=".for_whom_people" <?php echo $animationTag; ?>>
                    <span class="c1-text">0 <?php echo $counter; ?></span>
                    <h6><?php the_sub_field(
                      'section_for_whom_loop_header'
                    ); ?></h6>
                    <p><?php the_sub_field(
                      'section_for_whom_loop_content'
                    ); ?></p>
                </div>

                <?php
   $delay += 300;
   $counter++;
                ?>


                <?php
                endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
        <div class="for_whom_people" data-aos="fade-up" data-aos-delay="300">
            <img src=" <?php echo get_template_directory_uri(); ?>/img/dlakogo.png" alt="">
        </div>
    </div>
</section>




<section id="dont_worry" class="menuSection">

    <div class="container">
        <div class="row">
            <div class="col-md-12 center-box mb-3 userEditor">
                <?php the_field('section_dont_worry_content'); ?>

            </div>
        </div>
        <div class="row vertical_center_row">
            <div class="col-md-5 dont_worry_sticker" data-aos="fade-right" data-aos-delay="200">
                <img src="  <?php the_field(
                  'section_dont_worry_foto'
                ); ?>" alt="">
            </div>
            <div class="col-md-7" data-aos="fade-left" data-aos-delay="200">
                <?php the_field('section_dont_worry_content2'); ?>


            </div>
        </div>
    </div>
</section>






<section id="archetypes" class="menuSection dark-section ">
    <div class="container">
        <div class="row">
            <div id="hide-show-panel" class="col-md-7">
                <?php the_field('section_archetypes_content'); ?>





                <!-- <p class="c1-text show-more fw-700 mt-2">Czytaj więcej -></p> -->


                <div class="prgrm-hide-show-panel">
                    <div class="prgrm-hide-show-panel__hide-box">
                        <?php the_field('section_archetypes_content_more'); ?>

                    </div>
                    <p class="prgrm-hide-show-panel__triger c1-text mt-2 fw-700">Czytaj więcej</p>
                </div>


            </div>
            <div class="col-md-5">

                <div>
                    <img src="  <?php the_field(
                      'section_archetypes_content_foto'
                    ); ?>" alt="">

                </div>
            </div>
        </div>
    </div>
</section>




<section id="our_solution" class="menuSection">
    <div class="scroll-point" id="nasze_rozwiązania"></div>

    <div class="scroll-point" id="oferta"></div>
    <div class="container">
        <div class="row">
            <div class=" animate col-12 box_center userEditor">

                <?php the_field('section_our_solution_header'); ?>
            </div>
        </div>
    </div>

    <div class="container animate our_solutions_loop">
        <?php if (have_rows('section_our_solutions_loop')): ?>
        <?php $counter = 0; ?>
        <?php while (have_rows('section_our_solutions_loop')):
          the_row(); ?>
        <?php
        $counter++;
        $animationTag2 = 'data-aos="fade-left"';
        if ($counter % 2) {
          $animationTag2 = 'data-aos="fade-right"';
        }
        ?>
        <div class="row">
            <div class="col-md-5 col-lg-6 our_solutions_loop_icon">
                <img data-aos="zoom-in" src="<?php the_sub_field(
                  'section_our_solutions_loop_icon'
                ); ?>">
            </div>
            <div <?php echo $animationTag2; ?> data-aos-delay="300" class="col-md-7 col-lg-6">
                <span class="c1-text">0 <?php echo $counter; ?></span>
                <h3 class="line line-gray"><?php the_sub_field(
                  'section_our_solutions_loop_header'
                ); ?></h3>
                <p><?php the_sub_field(
                  'section_our_solutions_loop_content'
                ); ?></p>
            </div>
        </div>
        <?php
        endwhile; ?>
        <?php endif; ?>
    </div>
    </div>
</section>



<section id="where_start" class="gradientBackgroundAnimation dark-section menuSection">
    <div class="scroll-point" id="test"></div>
    <div class="container center-box">
        <div class="row">
            <div data-aos="fade-up" class="col-md-12 userEditor">
                <?php the_field('section_where_start'); ?>

                <a href="<?php echo get_permalink(
                  1075
                ); ?>" class="mt-2 button btn-v5 ">
                    <span>Rozwiąż bezpłatny test</span>
                </a>
            </div>
        </div>
    </div>
</section>



<section id="choose_plan" class="menuSection">
    <div class="scroll-point" id="plany"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 center-box">
                <h2 class="c1-text mb-3"> <?php the_field(
                  'section_choose_plan_header'
                ); ?></h2>
            </div>

            <div class="col-md-12 d-block d-lg-none">
                <?php get_template_part(
                  'template_parts/content',
                  'raportTable-mobile'
                ); ?>
            </div>

            <div class="col-md-12 d-none d-lg-block">
                <?php get_template_part(
                  'template_parts/content',
                  'raportTable'
                ); ?>
            </div>


        </div>
    </div>
</section>


<section id="implementation" class="dark-section menuSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center-box userEditor">
                <?php the_field('section_implementation_header'); ?>
            </div>
        </div>

        <?php get_template_part('template_parts/content', 'implementation'); ?>

        <div class="row">
            <div class="col-md-12 center-box">
                <a href="#kontakt" class="button btn-v2">
                    <span>Skontaktuj się z nami</span>
                </a>
            </div>
        </div>
    </div>
</section>





<section class="what-for dark-section gradientBackgroundAnimation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-2">
                <?php the_field('section_what-for_header'); ?>
            </div>

        </div>

        <div class="row">



            <?php if (have_rows('section_what-for_loop')): ?>
            <?php while (have_rows('section_what-for_loop')):
              the_row(); ?>

            <div data-aos="fade-up" class="col-md-4">
                <div class="what-for__item"><span>
                        <?php echo get_sub_field(
                          'section_reference_loop_content'
                        ); ?>

                    </span>
                </div>
            </div>

            <?php
            endwhile; ?>
            <?php endif; ?>



        </div>
    </div>
</section>


<section id="reference" class="menuSection">
    <div class="scroll-point" id="oferta"></div>
    <div class="container">
        <div class="row">
            <div class=" animate col-12 box_center">

                <?php the_field('section_reference_header'); ?>
            </div>
        </div>

        <div class="row animate">
            <div data-aos="fade-left" class="col-md-12">

                <div class="slick-contianer">

                    <?php if (have_rows('section_reference_loop')): ?>
                    <?php while (have_rows('section_reference_loop')):
                      the_row(); ?>

                    <div class="slick_item">
                        <div class="slick_item_content">
                            <?php the_sub_field(
                              'section_reference_loop_content'
                            ); ?>
                        </div>
                        <div class="slick_item_author"> <?php the_sub_field(
                          'section_reference_loop_author'
                        ); ?>
                        </div>
                    </div>

                    <?php
                    endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>


</section>





<section id="contakt-sec" class="menuSection contakt-sec dark-section">
    <div class="scroll-point" id="kontakt"></div>
    <div class="userEditor">
        <?php the_field('section_contact_header'); ?>
    </div>


    <div class="container  ">
        <div class="row">

            <div data-aos="fade-right" class="contactForm">
                <?php echo do_shortcode(
                  '[contact-form-7 id="307" title="Formularz 1"]'
                ); ?>
            </div>

        </div>
    </div>

</section>

<?php get_footer(); ?>