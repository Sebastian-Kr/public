<?php 
// echo $mail ;
// print_r($summaryTestArray);



$htmlString = '';
$counter = 0;
foreach ($summaryTestArray as $archetype) {
// echo $archetype;

$name = $archetype->archetypeName;
$totalValue = $archetype->archetypeTotalValue;


// $htmlString .= '<h6>'.$name.'<span> '.$totalValue.' ptk.</span></h6>';


    $counter++;
    if($counter%2 == 0 ) { $rowStyle = 'color:#17E9A7'; } 
    else { $rowStyle = ''; }
    
    $htmlString .= '<tr style="'.$rowStyle.'"> <td width="50%">'.$name.'</td> <td style="text-align:right" width="50%">'.$totalValue.'</td> </tr>';
           
  
  }
// echo $htmlString;


// ==============================================================
// HTML TEMPLATE
// ==============================================================

;?>

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
    <!-- START -->

<body style="background-color: #081557; text-decoration: none;">
    <div
        style="background-color: #081557; margin: 0 auto; text-align: center; width: 600px; color: #fff; font-size: 15px; line-height: 24px; ">
        <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/header-test-company.png"
            alt="Ktoś wykonał test na naszej stronie. Poniżej znajdują się wszystkie informacje na jego temat. Pobierz grafikę, aby zobaczyć całą treść wiadomości" />
        <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/label-information.png"
            alt="INFORMACJE" />

        <table style="margin: 15px auto; color: #fff; font-family: Muli, Tahoma, Geneva, sans-serif; font-weight: 500;"
            width="500px" class="client-information">
            <tr style="color:#17E9A7" class="greenText">
                <td width="50%">Adres e-mail:</td>
                <td style="text-align:right" width="50%"><?php echo $mailUser ;?></td>
            </tr>
            <tr>
                <td width="50%">Data:</td>
                <td style="text-align:right" width="50%">
                    <?php echo date("d.m.Y, H:m") ;?>
                </td>
            </tr>
        </table>

        <img src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/label-summary-test.png"
            alt="WYNIKI TESTU" />

        <table
            style="margin: 0 auto; color: #fff; text-align: left; font-family: Muli, Tahoma, Geneva, sans-serif; font-weight: 500;"
            width="500px" class="testResults">

            <?php // Archetypes table generate 
            echo $htmlString ; ?>




        </table>

        <div style="text-align: center;">
            <img style="margin: 50px auto;"
                src="https://brandraport.pl/wp-content/themes/prgrm-theme/mail_templates/mailing-img/logo-footer.png"
                alt="Brand Raport - Pobierz grafikę, aby zobaczyć całą treść wiadomości" />
        </div>
    </div>
    <!-- FINISH -->
</body>

</html>