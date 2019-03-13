<?php
$isOk = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8 partie 2 php</title>
</head>
<body>
  <!-- Traduire ce code avec des if et des else :
  < ? php
  echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
  ?>
-->
<?php
if ($isOk != false){
  echo 'Ce n\'est pas bon !!!';
} else {
  echo 'C\'est ok !!';
}
?>
</body>
</html>
