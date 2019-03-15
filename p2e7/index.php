<?php
$isOk = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7 partie 2 php</title>
</head>
<body>
  <p>Traduire ce code avec des if et des else :</p>
  <p>< ? php</p>
  <p>echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';</p>
  <p>?></p>
<?php if ($isOk == false){ ?>
  <p>Ce n'est pas bon !!!</p>
<?php } else { ?>
  <p>C'est ok !!</p>
<?php } ?>
</body>
</html>
