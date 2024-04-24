<?php
function palindrome($x) {
    // inverser la chaine de caractère 
    $mot_inverse = strrev($x);
    // si la chaine inversée est égale à la chaine de base true ceci est un palindrome
    if ($x != $mot_inverse) {
        echo "NOPE BROTHER, MISTAKE BROTHER !";
    } else {
        echo" GENIUS BROTHER !!!!"; // la chaione n'est pas un palindrome
}
     
}
$a = "rotator";
palindrome($a);
?>