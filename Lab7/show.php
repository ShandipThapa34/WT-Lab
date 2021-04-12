<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style type="text/css">
		.container
		{
			text-align: center;
			margin:auto;
			width: 70%;						
		}
		table,th,td,tr
		{
			width: 50%;
			border-collapse: collapse;
			border:solid 2px;
			text-align : center;
			margin: auto;
		}
		.label
		{
			width:16%;
		}
	</style>
</head>
<body>
	<div class="container">
	<table>
		<th colspan="3">
			Personal Information
		</th>
		<tr >
			<td class="label" rowspan="2">Name</td>
		
			<td class="sub_label">First Name</td>
			<td class="sub_label">Last Name</td>
		</tr>
		<tr >
			<td>
				<?=$_POST["fname"]?>
			</td>
			<td>
				<?=$_POST["lname"]?>
			</td>
		</tr>
		<tr>
			<td class="label">Date Of Birth</td>
			<td colspan="2">
				<?=$_POST["date"]?>
			</td>
		</tr>
		<tr>
			<td class="label">Gender</td>
			<td colspan="2">
				<?=$_POST["gender"]?>
			</td>
		</tr>
	</table>
	<table>
		<th colspan="2">Account Information</th>
		<tr>
			<td class="label">Email Address</td>
			<td>
				<?=$_POST["email"]?>				
			</td>
		</tr>
		<tr>
			<td class="label">Security Question</td>
			<td>
				<?=$_POST["question"]?>
			</td>
		</tr>
		<tr>
			<td class="label">Security Answer</td>
			<td>
				<?=$_POST["answer"]?>
			</td>
		</tr>
	</table>
	<table>
		<th colspan="2">
			Contact Information
		</th>
		<tr>
			<td class="label">Address</td>
			<td>
				<?=$_POST["address"]?>				
			</td>
		</tr>
		<tr>
			<td class="label">City</td>
			<td>
				<?=$_POST["city"]?>
			</td>
		</tr>
		<tr>
			<td class="label">State</td>
			<td>
				<?=$_POST["state"]?>
			</td>
		</tr>
		<tr>
			<td class="label">Zip-Code</td>
			<td>
				<?=$_POST["zip_code"]?>
			</td>
		</tr>
		<tr>
			<td class="label">Phone</td>
			<td>
				<?=$_POST["phone"]?>
			</td>
		</tr>
		<tr>
			<td class="label">Type</td>
			<td>
				<?=$_POST["select_phone"]?>
			</td>
		</tr>
	</table>
	</div>
</body>
</html>