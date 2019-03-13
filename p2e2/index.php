<?php
// Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
$isEasy = true;
$isEasyBonus = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 partie 2 php</title>
</head>
<body>
  <?php
  if ($isEasy == false){
    // Afficher C'est facile!! si c'est vrai.
    echo 'C\'est facile';
  } else {
    //  Dans le cas contraire afficher C'est difficile !!!.
    echo 'C\'est difficile !!!';
  }
  // Bonus : L'écrire de deux manières différentes.
  // on indique sur quelle variable on travaille:
  switch($isEasyBonus)  {
    // dans le cas où c'est facile
    case true :
      echo 'C\'est facile Bonus';
    break;
    case false :
      echo 'C\'est difficile Bonus!!!';
    break;
  }
  ?>
</body>
</html>
