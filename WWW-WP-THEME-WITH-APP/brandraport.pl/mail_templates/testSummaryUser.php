<?php 
$maxValue = 0;
$maxValue = 'Brak wyniku';
$mainArchetypeName = 'Brak wyniku';
$mainArchetypeIcon = 'Brak wyniku';
$mainArchetypeText = 'Brak wyniku';

foreach ($summaryTestArray as $archetype) {

if ($archetype->archetypeTotalValue > $maxValue) {
  $maxValue = $archetype->archetypeTotalValue;
  $maiArchetypeName = $archetype->archetypeName;
}
}

?>


<?php 

$pageId = 1210; // localhost
$pageId = 1213; // production

if ( have_rows('archetypes_loop', $pageId) ) : ?>
<?php while( have_rows('archetypes_loop', $pageId) ) : the_row(); 

{

if (get_sub_field('archetype_id', $pageId) == $maiArchetypeName)
{
  $mainArchetypeName = get_sub_field('archetype_id', $pageId);
  $mainArchetypeIcon = get_sub_field('archetype_icon', $pageId);
  $mainArchetypeText = get_sub_field('archetype_text', $pageId);
}


}

?>

<?php endwhile; ?>

<?php endif; ?>








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

<body style="background-color: #081557; text-decoration: none; text-decoration: none;">
    <!-- START -->
    <div
        style="background-color: #081557; margin: 0 auto; text-align: center; width: 600px; color: #fff; font-size: 15px; line-height: 24px; ">
        <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/header-test-client.png"
            alt="Dziękujemy za poświęcenie czasu na wypełnienie testu. Poniżej znajduje się archetyp główny Twojej marki. Pobierz grafikę, aby zobaczyć całą treść wiadomości" />

        <div style="text-align: center; font-family: Muli, Tahoma, Geneva, sans-serif; font-weight: 500;">
            <img style="margin: 0 auto" src="<?php echo $mainArchetypeIcon;?>"
                alt="ARCHETYP GŁÓWNY. Pobierz grafikę, aby zobaczyć całą treść wiadomości" />
            <h2 style="font-weight: 900; margin: 10px; 	font-size: 32px;">
                <?php echo $mainArchetypeName ;?>
            </h2>
            <img style="margin: 15px auto"
                src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/detal.png"
                alt="BrandRaport" />

            <p style="width: 500px; margin: 0 auto">
                <?php echo $mainArchetypeText ;?>
            </p>
            <a style="margin: 50px auto; cursor: pointer; text-decoration: none; color: #fff !important; display: block"
                target="blank" href="https://brandraport.pl/#plany">
                <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/cta.png"
                    alt="Chcesz wiedzieć więcej? >> Zobacz palny" />
            </a>

            <p
                style="color: #63698A; width: 500px; margin: 0 auto; font-size: 12px; line-height: 17px; font-weight: 300;">
                Niniejsza wiadomość została wygenerowana automatycznie. Prosimy na nią
                nie odpowiadać. W przypadku pytań lub wątpliwości prosimy o kontakt za
                pomocą formularza kontaktowego na naszej stronie internetowej.
            </p>

            <img style="margin: 50px auto;"
                src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/logo-footer.png"
                alt="Brand Raport - Pobierz grafikę, aby zobaczyć całą treść wiadomości" />
        </div>
    </div>
    <!-- FINISH -->
</body>

</html>