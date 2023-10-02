<?php

//FUNCTION MOYENNE

function moyenne($tabArg){

    $moyenne = 0;
    $somme = 0;

    for($i = 0 ; $i< count($tabArg); $i++){

        $somme= $tabArg[$i] + $somme;

    }

  
   return $moyenne = $somme / count($tabArg);

}

//FUCNTION LE PLUS PETIT NUMBREUX

function pluspetit($tabArg){

    $nbpetit = $tabArg[0];
for($i=0 ; $i<count($tabArg); $i++){
   
    
    if($tabArg[$i] < $nbpetit){
        $nbpetit= $tabArg[$i];
      
      }
 
}


return $nbpetit;

}

// FUNCTION CROISSANTE TRIAGE

function trierCroissante($tabArg){

    $temporaire = 0;
    for($i=0 ; $i<count($tabArg); $i++){
   
        for($j = ($i+1); $j< count($tabArg); $j++){

            if($tabArg[$i] > $tabArg[$j]){
                $temporaire = $tabArg[$i];
                $tabArg[$i]=$tabArg[$j];
                $tabArg[$j]=$temporaire;
            }
        }
      
    }
    for($i=0 ; $i<count($tabArg); $i++){

        echo $tabArg[$i] . '  '  ;
    }

}


// FUNCTION MEDIA

function media(&$argTab){

    sort($argTab);

    $nb= count($argTab);

    for($i = 0 ;  $i<$nb; $i++){
        echo $argTab[$i] . ' ';
       }    
    
    if($nb%2==1){

           // echo 'impaire';

     
         $media= ($nb + 1) / 2;

    return ($argTab[$media-1]);
      


    }
    if($nb%2==0){
       // echo 'paire';

        $div = ($nb/2);
        $media = ($argTab[$div-1] + $argTab[$div])/2;

    return ($media);

   }


}

// FUNCITON TRIANGLE




?>

