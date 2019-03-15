<?php
// Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
$isEasy = true;
// idem pour le bonus
$isEasyBonus = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 partie 2 php</title>
</head>
<body>
  <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.</p>
  <p>Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.</p>
  <p>Bonus : L'écrire de deux manières différentes.</p>
  <?php if ($isEasy == false){ ?>
    <!-- Afficher C'est facile!! si c'est vrai. -->
    <p>C'est facile</p>
  <?php } else { ?>
    <!-- Dans le cas contraire afficher C'est difficile !!!. -->
    <p>C'est difficile !!!</p>
  <?php } ?>
  <!-- Bonus : L'écrire de deux manières différentes. -->
  <!-- switch sert pour les conditions comme if mais le code est moins "lourd" quand il y a plusieurs possibilités de cas -->
  <!-- on indique sur quelle variable on travaille: -->
  <?php switch($isEasyBonus)  {
    // dans le cas où c'est facile
    case true :
    ?>
    <p>C'est facile Bonus</p>
    <?php
    break;
    case false :
    ?>
    <p>C'est difficile Bonus!!!</p>
    <?php
    break;
  } ?>
</body>
</html>
