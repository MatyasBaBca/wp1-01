<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Základní informace</h1>
    <?php

    $firstname = "Matyáš"; // data type is string
    $lastname = "Babiák";
    $age = 17; // data type is integer
    $elementarySchool = "Základní škola Libice nad Cidlinou";
    $highschool = "Soukromá střední škola podnikatelská v Kolíně";
    $class = "1.C";
    $address = "Rimavské Soboty 905";
    $FavoriteFood = "Tousty";
    $FavoriteNumber = "10";
    ?>
    <p> Křestní jméno: <?php echo $firstname; ?></p>
    <p> Příjmení: <?php echo $lastname; ?></p>
    <p> Věk: <?php echo $age; ?></p>
    <p> Základní škola: <?php echo $elementarySchool; ?></p>
    <p>  Střední škola: <?php echo $highschool; ?></p>
    <p> Třída: <?php echo $class; ?></p>
    <p> Adresa: <?php echo $address ?></p>
    <p> Oblíbené jídlo: <?php echo $FavoriteFood ?></p>
    <p> Oblíbené číslo: <?php echo $FavoriteNumber ?></p>
    <?php ?>
  </body>
</html>
