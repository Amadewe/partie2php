<?php
$age = 102;
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
  <?php
  if ($age >= 18){
    echo 'Tu es majeur';
  } else {
    echo 'Tu n\'es pas majeur';
  }
  ?>
</body>
</html>
