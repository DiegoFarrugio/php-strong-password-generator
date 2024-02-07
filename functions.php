<?php 

function getRandomPass($elem){
    $passwordCharacters = 'abcdEFGH1234!?543efghjxfcgvh';
    $string = '';

    for($i = 0; $i < $elem; $i++){
        $index = rand(0, strlen($passwordCharacters) -1 );
        $string.= $passwordCharacters[$index];
    }

    return $string;
}
?>