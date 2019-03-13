<?php
// Créer une variable age et l'initialiser avec une valeur.
$age = '17 ans';
if ( $age >= 18){
  echo 'Vous êtes majeur car vous avez :';
} else {
  echo 'Vous êtes mineur car vous avez :';
}
// Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 partie 2 php</title>
  </head>
  <body>
    <p><?= $age?></p>
  </body>
</html>
