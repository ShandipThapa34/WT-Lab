<?php
echo "using ksort()";
echo "</br>";
$student = array("Prem"=>"3", "Binod"=>"7", "Jason"=>"4");
ksort($student);
foreach($student as $name => $rollNo) {
  echo "Name=" . $name . ", Roll no = " . $rollNo;
  echo "</br>";
}
echo "</br>";

echo "using asort()";
echo "</br>";
asort($student);
foreach($student as $name => $rollNo) {
  echo "Name=" . $name . ", Roll no = " . $rollNo;
  echo "</br>";
}
echo "</br>";

echo "using sort()";
echo "</br>";
$numbers = array(4,8,3,1);
sort($numbers);
$arrlength = count($numbers);
for($i=0; $i<$arrlength; $i++)
{
	echo "$numbers[$i]";
	echo "</br>";
}
echo "</br>";

echo "using rsort()";
echo "</br>";
$numbers = array(4,8,3,1);
rsort($numbers);
$arrlength = count($numbers);
for($i=0; $i<$arrlength; $i++)
{
	echo "$numbers[$i]";
	echo "</br>";
}
?>