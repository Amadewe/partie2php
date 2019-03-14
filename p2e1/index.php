<?php
// Créer une variable age et l'initialiser avec une valeur.
$age = 17;
// Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1 partie 2 php</title>
</head>
<body>
  <p><?= $age ?> ans</p>
  <?php if ( $age >= 18){ ?>
    <p>vous êtes majeur</p>
  <?php } else { ?>
    <p>Vous êtes mineur</p>
  <?php } ?>
</body>
</html>
