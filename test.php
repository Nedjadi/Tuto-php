<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Test pour tuto php</title>
</head>

<body>

  
  <?php
  $couleur1 = array("a" => "bleu", "b" => "jaune", "c" => "gris");
  $couleur2 = array("a" => "rouge", "b" => "vert");

  array_splice($couleur1, 1, 1, $couleur2);
  print_r($couleur1);

  $prenom = array("julien", "bertrand", "pierre");

  sort($prenom);
  print_r($prenom);

  $agenom = array("julien" => 24, "seb" => 12, "beber" => 35);

  arsort($agenom);
  print_r($agenom);



  $age = array(
  'Pierre' => 24,
  'Paul' => 18,
  'Jacque' => 10
  );

  foreach ($age as $cle => $valeur) {
    echo 'l age de '.$cle. ' est '.$valeur. '.<br>';

  }


  $prenom = array(
  array('Pierre', 30, 'foot'),
  array('Paul', 20, 'film'),
  array('Jacque', 15, 'jeux')
  );

  echo $prenom[0][0]. ' a ' .$prenom[0][1]. ' ans son hobbie est ' .$prenom[0][2]. '<br>';
  echo $prenom[1][0]. ' a ' .$prenom[1][1]. ' ans son hobbie est ' .$prenom[1][2]. '<br>';
  echo $prenom[2][0]. ' a ' .$prenom[2][1]. ' ans son hobbie est ' .$prenom[2][2]. '<br>';


  $soldat = array(
  array('jojo', 32 , 'Poing de feu'),
  array('juju', 23 , 'Pied du dragon'),
  array('jaja', 25 , 'Lance de glace')
  );

  for($joueur = 0 ;$joueur < 3; $joueur++){
    $joueur_no = $joueur+1;

    echo 'joueur numero '.$joueur_no. '<br>';

    echo '<ul>';

      for ($nom = 0; $nom < 3; $nom++){
        echo '<li>'.$soldat[$joueur][$nom]. '</li>';

      }
      echo '</ul>';
    }



    ?>
  </body>
  </html>
