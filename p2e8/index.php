<?php
$isOk = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8 partie 2 php</title>
</head>
<body>
  <p>Traduire ce code avec des if et des else :</p>
  <p>< ? php</p>
  <p>echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';</p>
  <p>?></p>
  <!-- même exo que le 7 mais on voit que nous n'avons pas besoin de mettre == true -->
<?php if ($isOk){ ?>
  <p>C'est ok !!'</p>
<?php } else { ?>
  <p>Ce n'est pas bon !!!</p>
<?php } ?>
</body>
</html>
