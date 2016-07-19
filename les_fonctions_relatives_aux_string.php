
<?php

    strpos() // va etre utiliser pour rechercher un caractere specifique dans une chaine de caractere.

    explode() //va casser une chaine de caractere pour la transformer en tableaux exemple

      $ch2tb = 'Bonjour a tous';
    print_r(explode(" ",$ch2tb)); //va renvoyer 3 tableaux un contenant bonjour un contenant a etc...
    //il ne faut pas oublier que le separateur est un espace qui va fonctionner sur la variable ch2tb

    str_split()// Casse une chaine de caractere dans un nombre souhaiter et/ou donner exemple:

    print_r(str_split('Bonjour', 3)); // Va renvoyer la string Bonjour en 4 tableaux separer comme suit

    //Array([0] => Bo, [1] => nj, [2] => ou, [3] => r);
?>
