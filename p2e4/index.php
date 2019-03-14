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
  <!-- on indique sur quelle variable on travaille  -->
  <!-- switch sert pour les conditions comme if mais le code est moins "lourd" quand il y a plusieurs possibilités de cas -->
  <?php
  switch ($magnitude)
  {
    case 1: // dans le cas où $magnitude vaut 1
    ?>
    <p>Micro-séisme impossible à ressentir. </p>
    <?php
    // L'instruction "break" demande à PHP de sortir du switch. Dès que PHP tombe sur break, il sort des accolades et donc il ne lit pas les case qui suivent.
    break;
    case 2: // dans le cas où $magnitude vaut 2
    ?>
    <p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>
    <?php
    break;
    case 3: // dans le cas où $magnitude vaut 3
    ?>
    <p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>
    <?php
    break;
    case 4: // etc. etc.
    ?>
    <p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>
    <?php
    break;
    case 5:
    ?>
    <p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>
    <?php
    break;
    case 6:
    ?>
    <p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p>
    <?php
    break;
    case 7:
    ?>
    <p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>
    <?php
    break;
    case 8:
    ?>
    <p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>
    <?php
    break;
    case 9:
    ?>
    <p>Séisme capable de tout détruire sur une très vaste zone.</p>
    <?php
    break;
    default:
    ?>
    <p>L'échelle de Richter va de 1 à 9, merci de rentrer une valeur compris dans l\échelle.</p>
    <?php
  }
  ?>

</body>
</html>
