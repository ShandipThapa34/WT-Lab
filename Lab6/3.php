<?php
$Students = array(
    "Shandip" => 3, 
    "Jeeban" => 5, 
    "Lokendra" => 6,
    "Anil" => 8, 
    "Prena" => 1, 
    "Sheela" => 4,
); 
foreach($Students as $name => $roll)
{
	echo "Name = $name </br> Roll no = $roll";
	echo "<br>";
}
?>