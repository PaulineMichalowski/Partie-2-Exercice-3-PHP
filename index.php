<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 3</title>
</head>
<body>
  <?php
  $age = 23;
  $genre = 'femme';
  if($age >= 18 && $genre == 'femme') {
    echo 'Vous êtes une femme et vous êtes majeure !';
  }
  elseif($age <= 18 && $genre == 'femme') {
    echo 'Vous êtes une femme et vous êtes mineure !';
  }
  elseif($age >= 18 && $genre == 'homme') {
    echo 'Vous êtes un homme et vous êtes majeur !';
  }
  elseif($age <= 18 && $genre == 'homme') {
    echo 'Vous êtes un homme et vous êtes mineur !';
  }
  ?>
</body>
</html>
