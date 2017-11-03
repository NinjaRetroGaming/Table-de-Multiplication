<?php
echo($_POST["resultat"]);
$resultat = $_POST["resultat"];

if ($resultat == 56)
{
echo ( "WINNER!");
}
else
{
echo ("GAME OVER");
}

?>