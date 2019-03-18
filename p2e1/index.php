<?php
// Créer une variable age et on l'initialise avec une valeur.
// on ne met pas de quote car c'est un nombre.
$age = 170;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1 partie 2 php</title>
</head>
<body>
  <p>Créer une variable age et l'initialiser avec une valeur.</p>
  <p>Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
  <!-- j'affiche dans l'html l'âge initialisé dans ma variable -->
  <p><?= $age ?> ans</p>
  <p>Ma version : </p>
  <!-- Si la variable âge est supérieur ou égale à 18, afficher Vous êtes majeur. -->
  <?php if ( $age >= 18){ ?>
    <p>vous êtes majeur</p>
    <!-- Sinon dans tous les autres cas, afficher Vous êtes mineur. -->
  <?php } else{ ?>
    <p>Vous êtes mineur</p>
  <?php } ?>

  <!-- VERSION CORRECTION -->
  <p> Correction : </p>
  <p>
    <?php
    if ( $age >= 18){
      echo 'vous êtes majeur';
    } else{
      echo 'Vous êtes mineur';
    }
    ?>
  </p>

  <!-- VERSION SANS ERREUR -->
  <p>Version sans erreur : </p>
  <?php if ($age < 18){ ?>
    <p>Tu es mineur</p>
  <?php } else if ($age >= 18 AND $age <= 112){ ?>
    <p>Tu es majeur</p>
  <?php } else{ ?>
    <p>Soit tu es un surhomme est donc tu as plus de 112 ans soit tu as renseigné autre chose que ton âge </p>
  <?php } ?>
</body>
</html>
