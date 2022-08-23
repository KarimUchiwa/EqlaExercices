<?php
//Variables
$nombreDeTourDeBoucleWhile = 10;
$nombreDeTourDeBoucleDoWhile = 10;

//Boucle while
while($nombreDeTourDeBoucleWhile <= 10)
{
    echo $nombreDeTourDeBoucle . "Je m'exécute dans un while";
    $nombreDeTourDeBoucleWhile++;
}

//Boucle do... while
do
{
    echo $nombreDeTourDeBoucleDoWhile . "Je m'exécute dans un do while";
    $nombreDeTourDeBoucleDoWhile++;
}
while($nombreDeTourDeBoucleDoWhile <= 10);

//Boucle for
for ($nombreDeTourDeBoucleFor = 1; $nombreDeTourDeBoucleFor <= 10; $nombreDeTourDeBoucleFor++) {
    echo $nombreDeTourDeBoucleFor . "Je m'exécute dans un for";
}

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




?>