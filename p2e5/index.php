<?php
$gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5 partie 2 php</title>
</head>
<body>
  <!-- Traduire ce code avec des if et des else :
  < ? php
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
  ? > -->
  <?php
  if ($gender == 'Femme'){
    echo 'C\'est une développeuse !!!';
  } else if ($gender == 'Homme'){
    echo 'C\'est un développeur !!!';
  } else {
    echo 'Merci de renseigner un genre correct';
  }
  ?>
</body>
</html>
