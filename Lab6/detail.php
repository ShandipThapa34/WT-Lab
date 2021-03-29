<?php
require_once("./Company.php");
require_once("./Employee.php");

$gces = new Company;
$gces->name = "Gandaki College Of Engineering And Science";
$gces->address = "Lamachaur";
array_push($gces->employees , new Employee("Shandip", "Pokhara"));
array_push($gces->employees , new Employee("Shyam", "Baglung"));
array_push($gces->employees , new Employee("Hari", "Syangja"));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<table border="1px">
		<tr>
			<th>Name</th>
			<th>Address</th>
		</tr>
		<tr>
			<?php
			foreach ($gces->employees as $employee)
			{
				?>
				<tr>
					<td><?=$employee->name?></td>
					<td><?=$employee->address?></td>
				</tr>
			<?php 
			} ?>
		</tr>
	</table>
</body>
</html>