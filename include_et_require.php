<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>include_et_require</title>
</head>
<body>
  <?php

  include // va inclure un fichier dans la page, meme si le fichier n'est pas trouver le scrip va se poursuivre.

  //require // va ausi inclure un fichier dans la page mais... si celui ci n 'est pas trouver le fichier etant REQUIS le script va cesser de fonctionner et rien ne s affichera 

// Nous allons inclure un fichier nommé "fichier_requis.php" ce fichier contiendra cela : <p>ce texte va s'afficher normalement</p>


  include "fichier_requis.php";

  echo "ce message s'affiche";


// Si tout ce passe bien votre fichier devra ecrire :

//ce texte va s'afficher normalement

//puis :

//"ce message s'affiche

  ?>

</body>
</html>
