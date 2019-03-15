<?php
// Créer une variable age et l'initialiser avec une valeur.
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
  <p><?= $age ?> ans</p>
  <!-- Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. -->
  <?php if ( $age >= 18){ ?>
    <p>vous êtes majeur</p>
    <!-- Dans le cas contraire, afficher Vous êtes mineur. -->
  <?php } else { ?>
    <p>Vous êtes mineur</p>
  <?php } ?>


  <!-- VERSION SANS ERREUR -->
  <?php if ($age < 18){ ?>
    <p>Tu es mineur</p>
  <?php } else if ($age >= 18 AND $age <= 112){ ?>
    <p>Tu es majeur</p>
  <?php } else { ?>
    <p>Soit tu es un surhomme est donc tu as plus de 112 ans soit tu as renseigné autre chose que ton âge </p>
  <?php } ?>
</body>
</html>
