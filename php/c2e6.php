<?php 
$phrase = readline("Tapez votre phrase") ;
$ex = substr($phrase, (strlen($phrase)-1)/2, 1) ;
$firstw = substr($phrase, 0,1) ;
$lastw = substr($phrase,-1) ;

function VoyelleConsonne($_par)
{
    if ($_par == "a" || $_par == "e" || $_par == "i" || $_par == "o" || $_par == "u" || $_par == "y")
    {
        echo " et c'est une voyelle" ;
    }
    else 
    {
        echo " et c'est une consonne" ;
    }
}

if (strlen($phrase)==0) 
{
    echo "Debile" ;
}
else if (strlen($phrase)%2==0) 
{
    echo "le premier caractère est ".$firstw ;
    VoyelleConsonne($firstw) ;
    echo " Le dernier caractère est ".$lastw ;
    VoyelleConsonne($lastw) ;
}
else
{
    echo "la lettre du millieu est ". $ex ;
VoyelleConsonne($ex) ;
}
?>