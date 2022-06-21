<?php
$name = readline("Quel est votre prénom ? ");
$mdp = readline("Quel est votre mot de passe ? ");
FonctionRecursive(strlen($name),4,10);
FonctionRecursive(strlen($mdp),7);
// variable pour plus tard
// $Padawone $jedi $Kratos $Gollum $Legolas $Gandalf $Pégase $Phéonix 
// $Sonic $Mario

// Lancez ce code et inspirez vous-en pour réaliser l'exercice demandé !
FonctionRecursive(3,18);

function FonctionRecursive($_nbr,$_limit)
{
    echo($_nbr."\n");
    if ($_nbr<$_limit)
    {
        $_nbr++;
        FonctionRecursive($_nbr,$_limit);
    }
    else
    {
        echo ("J'ai fini");
    }
}
// <?php 
// function BoucleUs()
// {
//     $_username = readline("Introduisez votre nom d'utilisateur") ;
//     if (strlen($_username)<4)
//     {
//         echo "Erreur, veuillez choisir un nom d'utilisateur avec au moins 4 caractères" ;
//         BoucleUs();
//     }
//     else if (strlen($_username)>10)
//     {
//         echo "Erreur, veuillez choisir un nom d'utilisateur avec un nombre de maximum 10 caractères" ;
//         BoucleUs();
//     }
//     else
//     {
//         echo "donnée enregistré" ;
//     }
// }
// function BouclePa()
// {
//     $_password = readline("Introduisez votre mot de passe") ;
//     if (strlen($_password)<7)
//     {
//         echo "Erreur, veuillez choisire un mot de passe avec au moins 7 caractères" ;
//         BouclePa();
//     }
//     else
//     {
//         echo "donnée enregistré" ;
//     }
// }
// BoucleUs();
// BouclePa();
?>