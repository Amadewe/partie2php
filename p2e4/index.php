<?php
// Créer une variable magnitude
$magnitude = 5;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4 partie 2 php</title>
  </head>
  <body>
    <p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.</p>
    <p>La valeur de magnitude est de :<?= $magnitude; ?></p>
    <p>Information sur le tremblement de terre: </p>
<?php
 // on indique sur quelle variable on travaille
switch ($magnitude)
{
    case 1: // dans le cas où $note vaut 1
        echo 'Micro-séisme impossible à ressentir.';
    break;

    case 2: // dans le cas où $note vaut 2
        echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
    break;

    case 3: // dans le cas où $note vaut 3
        echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
    break;

    case 4: // etc. etc.
        echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
    break;

    case 5:
        echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
    break;

    case 6:
        echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
    break;

    case 7:
        echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
    break;

    case 8:
        echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
    break;

    case 9:
        echo 'Séisme capable de tout détruire sur une très vaste zone.';
    break;
    default:
        echo 'L\'échelle de Richter va de 1 à 9, merci de rentrer une valeur compris dans l\échelle.';
}
?>

  </body>
</html>
