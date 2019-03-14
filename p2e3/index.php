<?php
$age = 170;
$gender = 'homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3 partie 2 php</title>
</head>
<body>
  <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
  <ul>
    <li>Homme</li>
    <li>Femme</li>
  </ul>
  <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
  <ul>
    <li>Vous êtes un homme et vous êtes majeur</li>
    <li>Vous êtes un homme et vous êtes mineur</li>
    <li>Vous êtes une femme et vous êtes majeur</li>
    <li>Vous êtes une femme et vous êtes mineur</li>
  </ul>
  <p>Gérer tous les cas.</p>
  <p>l'âge initialisé dans la variable est : <?= $age;  ?> ans</p>
  <p>le genre initialisé dans la variable est : <?= $gender; ?></p>
  <?php if($gender == 'femme' && $age <= '18'){ ?>
    <p>Vous êtes une femme et vous êtes mineur</p>
  <?php } elseif ($gender == 'femme' && $age > '18'){ ?>
    <p>Vous êtes une femme et vous êtes majeur</p>
  <?php } elseif ($gender == 'homme' && $age <= '18'){ ?>
    <p>Vous êtes un homme et vous êtes mineur</p>
  <?php } elseif ($gender == 'homme' && $age > '18'){ ?>
    <p>Vous êtes un homme et vous êtes majeur'</p>
  <?php  } else { ?>
    <p>Il y a une erreur sur le genre ou sur l'âge </p>
  <?php } ?>
</body>
</html>
