<?php

require_once "statistique.php";
define("EXO",2);

$myTab = [2, 10, 10 ,10,13,55];

/*
echo 'Tableau trier par ordre croissant:' . '<br>';
trierCroissante($myTab);
*/
if(EXO===1){

    echo 'la moyenne est de saleires est de :'. moyenne($myTab) .' /20 '.'<br>'; 
}
else if(EXO===2){
    echo 'la media est de :'. media($myTab) .'<br>'; 
}
else if (EXO===3){
    echo ' le plus petit est : '. pluspetit($myTab);

}
    
    
    



?>