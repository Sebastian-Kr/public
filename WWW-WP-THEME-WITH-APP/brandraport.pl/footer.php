<footer class="prgrm-footer">

    <div class="container">
        <div class="row">
            <div class="logoBar col-sm-12">
                <a class="logoBar__item" href="<?php home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-2.svg" alt="">
                </a>

                <a class="logoBar__item logoBar__item-right" href="https://wizualni.pl/">
                    By:
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Wiz-logo.svg" alt="">
                </a>


            </div>
        </div>
    </div>


    <div class="container">
        <div class="row prgrm-footer__columnBox">


            <div class="prgrm-footer__column prgrm-footer__column--col1">
                <h6 class="prgrm-footer__column-header">Nawigacja</h6>
                <?php the_field('footer-col1', 906); ?>

            </div>


            <div class="prgrm-footer__column prgrm-footer__column--col2">
                <h6 class="prgrm-footer__column-header">Nasze plany</h6>
                <?php the_field('footer-col2', 906); ?>
            </div>


            <div class="prgrm-footer__column prgrm-footer__column--col3">
                <h6 class="prgrm-footer__column-header">Pomoc</h6>
                <?php the_field('footer-col3', 906); ?>
            </div>


            <div class="prgrm-footer__column prgrm-footer__column--col4">
                <h6 class="prgrm-footer__column-header">Doświadczenie w budowaniu marki</h6>
                <p><?php the_field('footer-col4', 906); ?></p>
            </div>

        </div>
    </div>

    <div class="container">
        <div class=" row">
            <div class="hr-full"></div>
            <div class="copyright3 col-lg-12">


                <p><?php echo date("Y"); ?> © </p>
                <a href="https://brandraport.pl">
                    <h2>BrandRaport.pl</h2>
                </a>
                <p> All rights reserved. </p>
                <div class="copyright3__author"> Design by&nbsp;<a target="blank" href="https://wizualni.pl/">
                        <h2>Wizualni.pl</h2>
                    </a>
                </div>
                <span class="copyright3__spacer">|</span>
                <div class="copyright3__author">Developed by&nbsp;<a target="blank" href="http://progremo.pl/">
                        <h2>Progremo.pl</h2>
                    </a></div>


            </div>
        </div>
    </div>







</footer>


<div class="cookies gradientBackgroundAnimation" style="display: block;">
    <div class="cookies__inner">
        <p>Ta strona używa ciasteczek (cookies), dzięki którym może działać lepiej. </p>
        <div class="cookies_disable button   btn-v9    myform__submit"><span>Rozumiem</span></div><a
            href="http://wszystkoociasteczkach.pl/" target="_blank">Dowiedz się więcej</a>
        <p></p>
        <div class="cookies__close cookies_disable"></div>
    </div>
</div>


<?php if (is_page(1025)): ?>

<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>

<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/ActiveQuestion.js">
</script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/Header.js"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/Header2.js"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/Navigation.js">
</script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/NextButton.js">
</script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/Answer.js"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/ListAnswers.js">
</script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/TestApp.js"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/SummaryTest.js">
</script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/App4.js"></script>
<script type="text/babel" src="<?php echo get_template_directory_uri(); ?>/brandRaportTestModule/index.js"></script>
<?php endif; ?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<?php wp_footer(); ?>

<div id="example" data-boolean="true"></div>
<script>


</script>

</body>

</html>