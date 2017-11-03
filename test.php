<?php
/*pour déclarer une variable pour faire apparaître le fichier choisi*/
$tables = $_POST["tables"];
/* Ma fonction*/
function Multiplier($facteur){
/*Ma variable :*/
$nb = 0;
/*tant que*/
while ($nb < 11){
echo ($facteur."x".$nb."=".$facteur*$nb."</br>");
/*répétition boucle*/
$nb++;
}
}

Multiplier($tables);
?>