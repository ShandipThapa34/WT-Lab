<?php
echo "The first 20 even numbers are:";
echo "</br>";
for($i=1; $i<=20; $i++)
{
	if($i%2 == 0)
	{
		echo "$i";
		echo "</br>";
	}
}
?>