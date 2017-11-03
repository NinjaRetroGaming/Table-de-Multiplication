<?php
foreach($_POST['choix'] as $variables)
	for ($i=0; $i < 9 ; $i++)
{
echo ($i."*".$variables."=".$i*$variables."</br>");
}
?>