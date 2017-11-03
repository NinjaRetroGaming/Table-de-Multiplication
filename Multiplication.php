<?php
function numero($valeurs) { /* prototype = (fonction + nom + paramètre)*/
    $i=0;
    while($i <= 9) {
    $i = $i+1;
    /* Différentes manières
    $i++;
    $i *+= 1;
    */
    echo ($i."*".$valeurs."=".$i*$valeurs."</br>");
}
}
numero($_POST["tables"]);
?>