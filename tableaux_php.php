<?php



// **********************LES TABLEAUX*****************************




//Il existe 2 façon d'afficher un meme tableaux es 2 maniere vont etre identique a vous de choisir selon le cas echeant ce que vous voulez utiliser les 2 maniere les voila :

$prenom = array('Pierre, Paul, Jacque');

// ou bien

$prenom[0] = 'Pierre';
$prenom[1] = 'Paul' ;
$prenom[2] = 'Jacque';





// Les tableaux associatif

//imaginon que nous souhaiton rajouter l'age a nos prenom

$age = array(
  'Pierre' => 24,
  'Paul' => 18,
  'Jacque' => 10
);

// nous avons associer une cles a une valeur

// La 2eme façon est

$age['Pierre'] = 24;
$age['Paul'] = 18;
$age['Jacque'] = 10;

// Maintenant nous allons afficher un prenom et son age nous allons nous servir de la premiere methode pour faire cela


$prenom = array('Pierre, Paul, Jacque');


$age = array(
  'Pierre' => 24,
  'Paul' => 18,
  'Jacque' => 10
);

echo $prenom[0].'<br>'; // va afficher Pierre
echo $age['Pierre']. '<br>'
// Affichera

//Pierre
//24

// Maintenant nous allon faire une boucle pour afficher tout les noms

$prenom = array('Pierre, Paul, Jacque');

for($x = 0; $x <= 2; $x++){
  echo $prenom[$x]. '<br>';
}

//va afficher
//Pierre
//Paul
//Jacque


foreach // est une boucle specialemen crée pour les tableaux, va lire un tableaux ligne par ligne et stocker la valeur de chaque ligne dans une variable temporaire que l'on choisira

foreach ($prenom as $items) {
  echo $items. '<br>';
}
// Affichera
//Pierre
//Paul
//Jacque



// Une boucle for ne peut pas fonctionner pour un tableau associatif car la boucle for ne prend en compte que les valeur quand a foreach il va prendre les cle ainsi que les valeur voyon un exemple :


$age = array(
  'Pierre' => 24,
  'Paul' => 18,
  'Jacque' => 10
);

foreach ($age as $cle => $valeur) {
  echo 'l age de '.$cle. ' est '.$valeur. '.<br>';

}

// Affichera
//l age de Pierre est 24.
//l age de Paul est 18.
//l age de Jacque est 10.


//nous allon Maintenant voir les tableaux mulidimensionnelle





$prenom = array(
  array('Pierre', 30, 'foot'),
  array('Paul', 20, 'film'),
  array('Jacque', 15, 'jeux'),
);
echo $prenom[0][0]. ' a ' .$prenom[0][1]. ' son hobbie est ' .$prenom[0][2]. '<br>';
echo $prenom[1][0]. ' a ' .$prenom[1][1]. ' son hobbie est ' .$prenom[1][2]. '<br>';
echo $prenom[2]0[]. ' a ' .$prenom[2][1]. ' son hobbie est ' .$prenom[2][2]. '<br>';


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
    echo '<li>'.$soldat[$joueur][$nom]. '<br>';
  }
}






// **********************LES FONCTION RELATIVE AUX TABLEAUX*****************************








array_keys() //retourne les clé d'un tableaux dans un nouveau tableau

array_values() //retourne les valeurs d'un tableaux dans un nouveau tableau

array_key_exists() //verifie si une clée existe, necessite 2 argument, la clé a rechercher et le tableau ou faire la recherche. Exemple:

  $voiture = array(
    "citroen" => "saxo"
    "peugeot" => "106"
    "renault" => "megane"
  );

  if (array_key_exists("peugeot", $voiture)){
    echo "la cle existe";
  }
  else {
    echo "la cle n'existe pas";
  }



  array_search() // cette fonction va rechercher une valeeur dans un tableaux et nous retourner la clé qui lui est associer necessite 2 argument, la valeur a rechercher et le tableau ou faire la recherche.

  echo array_search("106", $voiture);

  //va retourner peugeot


  in_array() // qui va rechercher une valeur dans un tableau et qui va renvoyer true ou false selon le cas.necessite 2 argument, la valeur a rechercher et le tableau ou faire la recherche.

  $prenom = array("ahmed", "mehdi", "jojo")

  if in_array("jojo", $prenom){
    echo "le prenom existe";
  }
  else{
    echo "le prenom n'existe pas";
  }



  count() // Retourne le nombre d'element d'un tableaux
  $sport = array("foot", "volley", "hand");

  echo count($sport); // va retourner 3

  array_count_values() // Va retourner les valeur identique d'un tableaux sous forme de tableau exemple:

    $compter = array("A", "perdu", "A" "why", "perdu");

    print_r(array_count_values($compter));
    //va retourner un ableau grace a "print_r" qui aura comme reponse array([A] => 2, [perdu] => 2, [why] => 1)

    array_diff_assoc() // Va comparer les CLE ET VALEUR de 2 tableau ou plus et va renvoyer les differences sous forme de tableaux exemple:

      $comparer = array("a" => "bleu", "b" => "rouge", "c" => "jaune");
      $comparant = array("a" => "bleu", "b" => "rouge");

      print_r(array($comparer, $comparant)); // va renvoyer sous forme de tableau array([c] => jaune)



      array_diff_key() // va comparer seulement les CLE DIFFERENTE de 2 ou plusieur tableaux



      array_diff() // va comparer seulement les VALEUR DIFFERENTE de 2 ou plusieur tableaux



      array_intersect_assoc() // Va renvoyer les CLE ET VALEUR SIMILAIRE des tableaux comparer



      array_intersect_key()// va comparer seulement les CLE SIMILAIRE de 2 ou plusieur tableaux



      array_intersect()// va comparer seulement les VALEUR SIMILAIRE de 2 ou plusieur tableaux



      array_fill() // va implementer un nombre de fois la valeur souhaiter grace au 3 argument renseigner exemple:



      print_r(array_fill(0, 5, "vert")); // va retourner un tableau contenant 5 fois la valeur vert

      // Array( [0] => vert [1] => vert [2] => vert [3] => vert [4] => vert)



      array_fill_keys() // Va remplir un ableau avec des valeur en specifian les clee voulu, il a besoin de 2 argument pour fonctionner le premier sera un tableaux qui va contenir les valeur qui seront utiliser comme cle et le deuxiemme va contenir les valeur a utiliser pour remplir le tableaux mais point d'explication inutile exemple :

        $cles = array("a", "b", "c", "d");
        $remplir = array_fill_keys($cles, "vert");
        print_r($remplir);
        //va retourner Array([a] => vert [b] => vert [c] => vert [d] => vert)






        array_push() // va rajouter autant de valeur souhaiter a la fin du tableaux exemple:

        $couleur = array("vert", "jaune");
        array_push($couleur, "gris", "noir");
        print_r($couleur);
        // va renvoyer Array([0] => vert [1] => jaune [2] => gris [3] => noir)





        array_pop() // va suprimer la derniere valeur d un tableau exemple :

        $couleur = array("vert", "jaune", "gris", "noir");
        array_pop($couleur);
        print_r($couleur);
        // va renvoyer Array([0] => vert [1] => jaune [2] => gris) noir aura disparu



        array_unshift() // va inserer des elemen en debut de tableau exemple :
          $couleur = array("vert", "jaune");
          array_unshift($couleur, "gris", "noir");
          print_r($couleur);
          // va renvoyer Array([0] => gris [1] => noir [2] => vert [3] => jaune)

          array_shift() // va suprimer le premier elemen e indiquer sur un echo quel est cet element exemple:

            $couleur = array("vert", "jaune");
            array_unshift($couleur, "gris", "noir");
            print_r($couleur);

            echo array_shift($couleur); // Va renvoyer gris
            print_r($couleur);
            // va renvoyer Array([0] => noir [1] => vert [2] => jaune)  gris a ete suprimer

            array_splice() // Va nous permetre de... "suprimer certain elemen d'un tableau a partir d'une certaine position e de les remplacer par d'autre element" pour fonctionner il faudra inserer 2 argument une variable et un argument numerique pour supprimer  les elemen d'un tableau a partir de ce nombre  et de deux variable et le nombre d'argument souhaiter pour inserer des valeur exemple:

            $couleur1 = array("a" => "bleu", "b" => "jaune", "c" => "gris");
            $couleur2 = array("a" => "rouge", "b" => "vert");

            array_splice($couleur1, 1);
            print_r($couleur1);
            //va retourner Array([a] => bleu) il a donc supprimer toute les valeur a partir de 1

            print_r(array_splice($couleur1, 1));
            // va renvoyer les element supprimer   Array([b] => jaune [c] => gris)

            // pour inserer des element dans un tableaux on procede comme suit le premier argument (la variable) le 2eme argument le nombre delimitant le debut de l'action de suppression, le 3eme argumen le nombre delimitan la fin de l'action de suppression et le 4eme la variable a inserer entre le debut e la fin de suppression des valeur exemple:

            $couleur1 = array("a" => "bleu", "b" => "jaune", "c" => "gris");
            $couleur2 = array("a" => "rouge", "b" => "vert");

            array_splice($couleur1, 1, 1, $couleur2);
            print_r($couleur1);

            // va retourner Array ( [a] => bleu [0] => rouge [1] => vert [c] => gris )


            array_merge() // va combiner plusieur tableau en un nouveau tableau. Cette fonction va prendre autant d'argument et de tableaux que vous desirer combiner entre eux.

            $alfa = array("a", "b");
            $beta = array("c", "d");

            $omega = array_merge($alfa, $beta);

            print_r($omega);

            // va retourner Array([0] => a [1] => b [2] => c [3] => d)

            array_combine() // va permetre d'associer des tableaux en les combinant, ainsi les valeur du premier tableaux vont devenir les cles des valeur du deuxieme tableaux exemple:

            $alfa = array("a", "b");
            $beta = array("c", "d");

            $omega = array_combine($alfa, $beta);

            print_r($omega);

            // va reourner Array([a] => c [b] => d)

            array_unique() // va suprimer les doublon d'un tableau attention cette fonction est sensible a la casse exemple :

            $prenom = array("lala", "lolo", "lala", "lili");
            print_r(array_unique($prenom));

            // va retourner Array([0] => lala [1] => lolo [3] => lili)  Le 2eme argument a disparu

            sort() // va nous permetre d'ordoner les valeur d'un tableau de la plus petite a la plus grande 1 > 2 , a > b
            rsort() // fait exactement la meme chose mais a l'inverse du plus grand au plus petit

            $prenom = array("julien", "bertrand", "pierre");

            sort($prenom);
            print_r($prenom);

            // va retourner Array([0] => bertrand [1] => julien [2] => pierre)



            ksort() // va nous permetre de classer un tableaux associatif dans un ordre croissant par rapport a ses cle
            krsort() // va nous permetre de classer un tableaux associatif dans un ordre decroissant par rapport a ses cle exemple :

              $agenom = array("julien" => 24, "seb" => 12, "beber" => 35);

              ksort($agenom);
              print_r($agenom);

              // va retourner Array ( [beber] => 35 [julien] => 24 [seb] => 12 )

              ksort($agenom);
              print_r($agenom);

              // va retourner Array ( [seb] => 12 [julien] => 24 [beber] => 35 )


              asort() // va nous permetre de classer un tableaux associatif dans un ordre croissant par rapport a ses valeur
              arsort() // va nous permetre de classer un tableaux associatif dans un ordre decroissant par rapport a ses valeur

              asort($agenom);
              print_r($agenom);

              // va retourner Array ( [seb] => 12 [julien] => 24 [beber] => 35 )

              arsort($agenom);
              print_r($agenom);

              // va retourner Array ( [beber] => 35 [julien] => 24 [seb] => 12 )
              ?>
