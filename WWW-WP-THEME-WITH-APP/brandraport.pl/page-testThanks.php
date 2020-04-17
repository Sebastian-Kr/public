<?php session_start(); ?>
<?php
/*Template Name: testThanks*/
?>


<?php
$mailUser = $_POST['mail'];
$summaryTestArray = json_decode(stripslashes($_POST['summaryTestArray'])); // MAIL FOR ADMIN
ob_start();
include 'mail_templates/testSummaryAdmin.php';
$admin_messageHTML = ob_get_clean();
ob_end_clean(); // echo $admin_messageHTML;
$admin_to = 'test@brandraport.pl';
$admin_subject = 'Brand raport -- podsumowanie testu';
$admin_headers = array(
  'Content-Type: text/html; charset=UTF-8',
  'From: BrandRaport <test@brandraport.pl>'
);
$admin_sendStatus = wp_mail(
  $admin_to,
  $admin_subject,
  $admin_messageHTML,
  $admin_headers
); // echo 'Status wysyłania: '.$admin_sendStatus; // if ($admin_sendStatus == true) { echo 'Wiadomość wysłana'; } // else { echo 'Błąd wysyłania wiadomości'; } // MAIL FOR USER
ob_start();
include 'mail_templates/testSummaryUser.php';
$user_messageHTML = ob_get_clean(); // ob_end_clean(); // echo $user_messageHTML;
$user_to = $mailUser;
$user_subject = 'Brand raport -- podsumowanie testu';
$user_headers = array(
  'Content-Type: text/html; charset=UTF-8',
  'From: BrandRaport <test@brandraport.pl>'
);
$user_sendStatus = wp_mail(
  $user_to,
  $user_subject,
  $user_messageHTML,
  $user_headers
);
?>





<?php get_header(); ?>


<div class="standard_tamplate_container">



    <div class="standard_tamplate_content_container container">

        <?php get_template_part('template_parts/content', 'header'); ?>
        <?php get_template_part('template_parts/content', 'main'); ?>



        <div class="row">
            <div class="col-md-12 ">

                <div class="standard_tamplate_content">
                    <section class="verticalRaportContainer">




                        <?php
                        set_query_var('raportID', 1087);
                        set_query_var('templateRaport', 'vertical');
                        get_template_part(
                          'template_parts/content',
                          'raportInfo'
                        );
                        ?>

                        <?php
                        set_query_var('raportID', 1090);
                        set_query_var('templateRaport', 'vertical');
                        get_template_part(
                          'template_parts/content',
                          'raportInfo'
                        );
                        ?>

                    </section>

                    <a href="<?php echo home_url(); ?>"
                        class="button btn-small btn-v7 btn-icon btn-icon-left btn-icon-arrow2">
                        <span>Strona główna</span></a>
                </div>

            </div>
        </div>


    </div>
</div>
<?php get_footer(); ?>