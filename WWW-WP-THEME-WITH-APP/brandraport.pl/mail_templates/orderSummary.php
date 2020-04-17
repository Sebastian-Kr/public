<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>

    <style>
    @import url("https://fonts.googleapis.com/css?family=Muli:700&display=swap&subset=latin-ext");
    </style>
</head>

<body style="background-color: #081557">
    <!-- START -->
    <div
        style="background-color: #081557; margin: 0 auto; text-align: center; width: 600px; color: #fff; font-size: 15px!important; line-height: 24px; ">
        <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/header-order.png"
            alt="System odnotował rozpoczęcie zamówienia. Poniżej znadują się wszystkie informacje na jego temat. Pobierz grafikę, aby zobaczyć całą treść wiadomości" />

        <!-- ZAMÓWIENIE I PŁATNOŚĆ  -->
        <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/label-order-payment.png"
            alt="ZAMÓWIENIA I PŁATNOŚĆ" />

        <table
            style="margin: 15px auto; color: #fff; text-align:center; font-family: Muli, Tahoma, Geneva, sans-serif; font-weight: 500;"
            width="500px" class="client-information">
            <tr style="text-align: left; color:#17E9A7" class="greenText">
                <td width="50%">Wybrany pakiet:</td>
                <td style="text-align:right" width="50%"><?php echo $raportName ;?></td>
            </tr>

            <tr style="text-align: left; ">
                <td width="50%">Data zamówienia:</td>
                <td style="text-align:right" width="50%"><?php echo date('d.m.Y, H:m') ;?></td>
            </tr>

            <tr style="text-align: left; color:#17E9A7" class="greenText">
                <td width="50%">Kwota płatności:</td>
                <td style="text-align:right" width="50%"><?php echo $raportPrice ;?> PLN</td>
            </tr>
        </table>

        <!-- DANE KONTAKTOWE  -->
        <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/label-contact.png"
            alt="ZAMÓWIENIA I PŁATNOŚĆ" />

        <table
            style="margin: 15px auto; color: #fff; text-align: left; font-family: Muli, Tahoma, Geneva, sans-serif; font-weight: 500;"
            width="500px" class="client-information">
            <tr>
                <td width="50%">Imię:</td>
                <td style="text-align:right" width="50%"><?php echo $order_firstname ;?></td>
            </tr>
            <tr style="color:#17E9A7" class="greenText">
                <td width="50%">Nazwisko:</td>
                <td style="text-align:right" width="50%"><?php echo $order_lastname ;?></td>
            </tr>

            <tr>
                <td width="50%">Adres e-mail:</td>
                <td style="text-align:right; color: #fff !important" width="50%">
                    <?php echo $order_email ;?>
                </td>
            </tr>
            <tr style="color:#17E9A7" class="greenText">
                <td width="50%">Numer telefonu:</td>
                <td style="text-align:right" width="50%"><?php echo $order_phone ;?></td>
            </tr>
        </table>

        <!-- DANE DO FAKUTRY  -->
        <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/label-invoice.png"
            alt="ZAMÓWIENIA I PŁATNOŚĆ" />

        <table style="margin: 15px auto; color: #fff; font-family: Muli, Tahoma, Geneva, sans-serif; font-weight: 500;"
            width="500px" class="client-information">
            <tr>
                <td width="50%">Nazwa firmy:</td>
                <td style="text-align:right" width="50%"><?php echo $order_companyName ;?></td>
            </tr>

            <tr style="color:#17E9A7" class="greenText">
                <td width="50%">NIP:</td>
                <td style="text-align:right" width="50%"><?php echo $order_nip ;?></td>
            </tr>
            <tr>
                <td width="50%">Ulica:</td>
                <td style="text-align:right" width="50%"><?php echo $order_street.' '.$order_homeNumber ;?></td>
            </tr>

            <tr style="color:#17E9A7" class="greenText">
                <td width="50%">Kod pocztowy</td>
                <td style="text-align:right" width="50%"><?php echo $order_postCode ;?></td>
            </tr>

            <tr>
                <td width="50%">Miejscowość:</td>
                <td style="text-align:right" width="50%"><?php echo $order_city ;?></td>
            </tr>

            <tr style="color:#17E9A7" class="greenText">
                <td width="50%">Dodatkowe uwagi:</td>
                <td style="text-align:right" width="50%"><?php echo $order_moreinfo ;?></td>
            </tr>
        </table>

        <!-- STOPKA  -->
        <div
            style="text-align: center; width: 500px; margin: 0 auto; margin-top: 50px; font-size: 15px; font-weight: 500; font-family: Muli, Tahoma, Geneva, sans-serif;">
            <p>
                Po zarejestrowaniu wpłaty dalszą realizację zamówienia potwierdzimy
                wiadomością e-mail.
            </p>

            <div
                style="background-color: #0E3D6C; border-radius: 5px; text-align: center; margin: 40px auto; padding: 30px; font-family: Muli, Tahoma, Geneva, sans-serif;">
                <h6 style="color: #17E9A7; font-size: 10px; letter-spacing: 2px; margin: 0">
                    NUMER RACHUNKU BANKOWEGO
                </h6>
                09 1140 2004 0000 3702 7262 7476
                <h6 style="color: #17E9A7; font-size: 10px; letter-spacing: 2px; margin: 0; margin-top:15px">
                    TYTUŁ PRZELEWU
                </h6>
                Opłata za Brand Raport
                <h6 style="color: #17E9A7; font-size: 10px; letter-spacing: 2px; margin: 0; margin-top:15px">
                    ODBIORCA
                </h6>
                Filip Kuźniarz Wizualni, ul. Kremerowska 12/8, Kraków
            </div>

            <p>
                W razie potrzeby skontaktuj się z nami za pośrednictwem formularza
                kontaktkowego znajdującego się na naszej stronie internetowej.
            </p>

            <p
                style="color: #63698A; width: 500px; margin: 30px auto; font-size: 12px; line-height: 17px; font-weight: 300;">
                Niniejsza wiadomość została wygenerowana automatycznie. Prosimy na nią
                nie odpowiadać. W przypadku pytań lub wątpliwości prosimy o kontakt za
                pomocą formularza kontaktowego na naszej stronie internetowej.
            </p>

            <img style="margin: 50px auto; margin-top: 0px"
                src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/logo-footer.png"
                alt="Brand Raport - Pobierz grafikę, aby zobaczyć całą treść wiadomości" />
        </div>
    </div>
    <!-- FINISH -->
</body>

</html>