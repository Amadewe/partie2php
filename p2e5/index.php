<?php
$gender = 'cheval';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5 partie 2 php</title>
</head>
<body>
  <p> Traduire ce code avec des if et des else :</p>
  <p>< ? php</p>
  <p>echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';</p>
  <p>? > </p>
  <p>La valeur de la variable est : <?= $gender ?>
    <?php if ($gender != 'Homme'){ ?>
      <p>C'est une développeuse !!!</p>
    <?php } else { ?>
      <p>C'est un développeur !!!</p>
    <?php } ?>

    <!-- VERSION SANS ERREUR -->
    <?php if ($gender == 'Femme'){ ?>
      <p>C'est une développeuse !!!</p>
    <?php } else if ($gender == 'Homme'){ ?>
      <p>C'est un développeur !!!</p>
    <?php } else { ?>
      <p>Merci de renseigner un genre correct</p>
    <?php } ?>
  </body>
  </html>
