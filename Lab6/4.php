<?php 
//string function
$str = "My name is Shandip.";
$str = strtoupper($str);
$rev = "Hello world!";
$rev = strrev($rev);
echo "$str";
echo "</br>";
echo "$rev";
echo "</br>";
echo "</br>";

//array function
$names = array("Shandip", "Lokendra", "Jeeban", "Anil");
echo "Names are:$names[0], $names[1], $names[2] and $names[3]";
echo "</br>";
$laptops = array("Asus", "Dell", "Acer", "Lenove");
$laptops = count($laptops);
echo "Number of elements in array is $laptops.";
?>