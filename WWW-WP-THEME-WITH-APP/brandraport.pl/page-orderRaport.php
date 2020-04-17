<?php
/*Template Name: orderRaprt*/
?>

<?php get_header(); ?>

<div class="standard_tamplate_container full_template_container">

    <div class="standard_tamplate_content_container container">
        <div class="row">
            <div class="col-md-12 standard_template_header mb-2">
                <?php if (get_field('return_to_home')): ?>
                <a href="<?php echo home_url(); ?>"
                    class="button btn-small btn-v7 btn-icon btn-icon-left btn-icon-arrow2"><span>Powrót</span></a>
                <?php endif; ?>



                <?php if (get_field('main_header')): ?>
                <h2> <?php echo get_field('main_header'); ?></h2>
                <?php endif; ?>
            </div>
            <div class="col-md-12 full_template_container ">
                <div class="standard_tamplate_content">
                    <div class="userEditor">
                        <?php get_template_part(
                          'template_parts/content',
                          'main'
                        ); ?>
                    </div>

                    <div class="formContainer">

                        <!-- <form class="orderRaportForm" name="reservation_form" action="<?php echo get_permalink(
                          1111
                        ); ?>"
                            method="post"> -->

                        <form class="orderRaportForm" name="reservation_form" onsubmit="return validateForm()" action="<?php echo get_permalink(
                          1111
                        ); ?>" method="post">

                            <h5 class="formHeader">1. Dane kontaktowe</h5>

                            <div class="formField">
                                <label>Imię:<span>*</span></label>

                                <input type="text" placeholder="np. Jan" name="firstname">
                            </div>

                            <div class="formField">
                                <label>Nazwisko:<span>*</span></label>
                                <input type="text" name="lastname" placeholder="np. Nowak">
                            </div>

                            <div class="formField">
                                <label>Adres e-mail:<span>*</span></label>
                                <input type="text" name="email" placeholder="np. kontakt@wizualni.pl">
                                <p class="email_error error hidden">Podaj właściwy adres e-mail</p>
                            </div>

                            <div class="formField">
                                <label>Numer telefonu:<span>*</span></label>
                                <input type="text" name="phone" placeholder="np. 329 329 239">
                            </div>

                            <h5 class="formHeader">2. Dane do faktury</h5>

                            <div class="formField">
                                <label>Nazwa firmy:<span>*</span></label>
                                <input type="text" name="companyName" placeholder="np. Wizualni">
                            </div>

                            <div class="formField">
                                <label>NIP:<span>*</span></label>
                                <input type="text" name="nip" placeholder="np. 818 128 21 13">
                            </div>



                            <div class="formField">
                                <label>Ulica:<span>*</span></label>
                                <input type="text" name="street" placeholder="np. Uliczna 4">
                            </div>

                            <div class="formField">
                                <label>Numer budynku:<span>*</span></label>
                                <input type="text" name="homeNumber" placeholder="np. 23b">
                            </div>

                            <div class="formField">
                                <label>Kod pocztowy:<span>*</span></label>
                                <input type="text" name="postCode" placeholder="31-100">
                            </div>

                            <div class="formField">
                                <label>Miejscowość:<span>*</span></label>
                                <input type="text" name="city" placeholder="np. Kraków">
                            </div>

                            <div class="formField">
                                <label>Dodatkowe uwagi (np. inny adres do wysyłki):</label>
                                <input type="texarea" name="moreinfo">
                            </div>



                            <h5 class="formHeader">3. Zgody i regulaminy</h5>

                            <div class="formCheckboxField">
                                <input type="checkbox" class="agreeRequired" name="agree1" />
                                <label><span>*</span>Potwierdzam, że zapoznałem(am) się z treścią
                                    <a target="blank" href="<?php echo home_url(); ?>/regulamin/">
                                        Regulaminu</a> i akceptuję jego warunki.</label>
                            </div>


                            <div class="formCheckboxField mt-n1">
                                <input type="checkbox" class="agreeRequired" name="agree2" />
                                <label><span>*</span>
                                    Wyrażam zgodę na przetwarzanie moich danych osobowych podanych w formularzu w celu
                                    realizacji zamówienia i serwisu
                                </label>
                            </div>


                            <div>

                                <p class="field_error error hidden">Nie wszystkie pola zostały wypełnione poprawnie</p>
                                <p class="agree_error error hidden">Nie wszystkie zgody zostały udzielone</p>

                            </div>

                            <div class="formSubmitField">
                                <input class="fornButtonSubmin" id="submit" type="submit" value="Złóż zamówienie">
                            </div>
                        </form>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>