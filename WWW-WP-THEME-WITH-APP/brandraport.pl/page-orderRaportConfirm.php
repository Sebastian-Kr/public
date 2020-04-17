<?php session_start(); ?>
<?php
/*Template Name: orderRaprtConfirm*/
?>

<?php
$order_firstname = $_POST['firstname'];
$order_lastname = $_POST['lastname'];
$order_email = $_POST['email'];
$order_phone = $_POST['phone'];
$order_companyName = $_POST['companyName'];
$order_nip = $_POST['nip'];
$order_street = $_POST['street'];
$order_homeNumber = $_POST['homeNumber'];
$order_postCode = $_POST['postCode'];
$order_city = $_POST['city'];
$order_moreinfo = $_POST['moreinfo'];
$_SESSION['firstname'] = $order_firstname;
$_SESSION['lastname'] = $order_lastname;
$_SESSION['email'] = $order_email;
$raportName = '';
$raportPrice = 0;
if (isset($_SESSION['raportPrice'])) {
  $raportPrice = $_SESSION['raportPrice'];
}
if (isset($_SESSION['raportName'])) {
  $raportName = $_SESSION['raportName'];
} // ????
set_query_var('raportPrice', $raportPrice);
set_query_var('raportName', $raportName);
ob_start();
include 'mail_templates/orderSummary.php';
$order_messageHTML = ob_get_clean();
ob_end_clean(); // echo $order_messageHTML;
$mail_to = $order_email;
$mail_subject = 'Brand raport -- zamówienie';
$mail_headers = array(
  'Content-Type: text/html; charset=UTF-8',
  'From: BrandRaport <test@brandraport.pl>'
);
$mail_sendStatus = wp_mail(
  $mail_to,
  $mail_subject,
  $order_messageHTML,
  $mail_headers
); // echo 'Status wysyłania: '.$mail_sendStatus;
$mail_admin = 'test@brandraport.pl';
$mail_sendStatus = wp_mail(
  $mail_admin,
  $mail_subject,
  $order_messageHTML,
  $mail_headers
);

// echo 'Status wysyłania: '.$mail_sendStatus;
?>
<?php get_header(); ?>

<div class="standard_tamplate_container">



    <div class="standard_tamplate_content_container container ">


        <?php
// echo '<h5>POST:</H5>';
// print_r($_POST);
// echo '<h5>SESION:</H5>';
// print_r($_SESSION);
?>


        <?php // ORDER CONFIRM
// ORDER CONFIRM

        if (is_page(1111)) {
        if (isset($_SESSION['raportPrice'])) {
        get_template_part('template_parts/order/content', 'confirmOrderOK');
        } else {
        get_template_part(
        'template_parts/order/content',
        'confirmOrderERROR'
        );
        }
        } // PAYMENT CONFIRM
        if (is_page(1186)) {
        if (
        isset($_SESSION['raportPrice']) &&
        isset($_GET['status']) &&
        $_GET['status'] === "OK"
        ) {
        get_template_part(
        'template_parts/order/content',
        'confirmPaymentOK'
        );
        } else {
        get_template_part(
        'template_parts/order/content',
        'confirmOrderERROR'
        );
        }
        }
        ?>



        <div class="gradientBackgroundAnimation dark-section text-center mt-2 mb-3 pt-2 pb-2">
            <div class="row ">
                <div class="col-md-12">

                    <h2>Masz pytania?</h2>
                    <p>Skontaktuj się z nami!</p>
                    <a target="blank" href="<?php echo get_permalink(
                      1178
                    ); ?>" class="mt-2 button btn-v5 ">
                        <span>Pokaż FAQ</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 center-box">
                <h2>To jeszcze nie wszystko!</h2>
                <p>Jeśli chciałbyś byśmy pomogli Ci jeszcze szerszym zakresie niż wymieniony w planach powyżej, napisz
                    do nas.
                    Poza audytami marek przeprowadzamy również wdrożenia.</p>
            </div>
        </div>



        <?php get_template_part('template_parts/content', 'implementation'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="center_box">
                    <a href="<?php echo home_url(); ?>/#kontakt" class="button btn-v6">
                        <span>Skontaktuj się z nami</span></a>


                </div>
            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>