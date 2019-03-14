<?php
$age = 220;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6 partie 2 php</title>
</head>
<body>
  <!-- Traduire ce code avec des if et des else :
  < ? php
  echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
  ?> -->
  <p>âge : <?= $age; ?> ans</p>
  <?php if ($age >= 18){ ?>
    <p>Tu es majeur</p>
  <?php } else { ?>
    <p>Tu n'es pas majeur</p>
  <?php } ?>

  <!-- VERSION SANS ERREUR -->
  <?php if ($age <= 18){ ?>
    <p>Tu es mineur</p>
  <?php } else if ($age <= 112){ ?>
    <p>Tu es majeur</p>
  <?php } else { ?>
    <p>Soit tu es un surhomme est donc tu as plus de 112 ans soit tu as renseigné autre chose que ton âge </p>
  <?php } ?>
</body>
</html>
