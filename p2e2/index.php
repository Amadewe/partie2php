<?php
// On déclare une variable isEasy de type booléan et on l'initialise avec une valeur.
// le type booléan doit comprendre la valeur false ou true.
// On ne met pas de quote car il ne s'agit pas d'une chaine de caractères.
$isEasy = false;
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
  <p> Ma version : </p>
  <!-- on COMPARE si la variable est égale à false ou à true du coup on met deux == -->
  <!-- on pourrait utiliser le === pour comparer strictement (comparer le type et la valeur)
  pour un calcul par exemple il ne faut pas confondre  0 et 1 avec true et false du coup on va mettre === -->
  <?php if ($isEasy == true){ ?>
    <!-- Afficher C'est facile!! si c'est vrai. -->
    <p>C'est facile</p>
  <?php } else{ ?>
    <!-- Dans le cas contraire afficher C'est difficile !!!. -->
    <p>C'est difficile !!!</p>
  <?php } ?>
  <!-- Bonus : L'écrire de deux manières différentes. -->
  <p> Ma version Bonus : </p>
  <!-- Switch n'est pas utile pour deux cas -->
  <!-- switch sert pour les conditions comme if mais le code est moins "lourd" quand il y a plusieurs possibilités de cas -->
  <!-- on indique sur quelle variable on travaille: -->
  <?php switch($isEasy)  {
    // dans le cas où c'est facile
    case true :
    ?>
    <p>C'est facile</p>
    <?php
    break;
    case false :
    ?>
    <p>C'est difficile !!!</p>
    <?php
    break;
  } ?>

  <!-- CORRECTION BONUS -->
  <p>Correction Bonus : </p>
  <!-- sans les égals ça ne marche que pour les booléans -->
  <?php if ($isEasy) { ?>
  <p>C'est facile</p>
<?php } else{ ?>
  <p>C'est difficile !!!</p>
<?php } ?>
</body>
</html>
