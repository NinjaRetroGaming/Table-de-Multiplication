<?php
$tables = $_post["tables"];
function numero($facteurs) { /* prototype = (fonction + nom + paramètre)*/
    $i=0;
    while($i <= 9) {
    $i = $i+1;
    /* Différentes manières
    $n++;
    $n *+= 1;
    */
    echo ($i."*".$facteurs."=".$i*$facteurs."</br>");
}
}
numero($tables);
?>