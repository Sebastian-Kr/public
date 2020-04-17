<?php session_start(); ?>
<?php /*Template Name: testAppResume*/?>

<?php get_header(); ?>





<div class="standard_tamplate_container">
<div class="standard_tamplate_content_container container">
<?php get_template_part('template_parts/content', 'header') ;?>
<div class="row">
<?php get_template_part('template_parts/content', 'main') ;?>


<div class="col-md-12 standard_tamplate_content testAppResumeContainer">





<form id="reservation_form" name="reservation_form" onsubmit="return validateForm()" class="" action="<?php echo get_permalink(1061) ?>" method="post">
<input placeholder="Adres e-mail" id="mailField" type="text" name="mail">
<p class="mail_error error hidden"></p>  
<input type="checkbox" id="agree"  name="agree" />
<label>Potwierdzam, że zapoznałem(am) się z treścią
<a target="blank" href="<?php echo home_url() ?>/regulamin/">
Regulaminu</a> i akceptuję jego warunki.</label>
<p class="agree_error error hidden"></p>
<input class="fornButtonSubmin" id="submit" type="submit" value="Wyślij wynik">



</form>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>

