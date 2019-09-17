<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//select -selects all columns and fields
$result = $dbConn->query("SELECT * FROM `tbl_student` ORDER BY studentid DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Student Id</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		<td>Birthdate</td>
		<td>Address</td>	
		<td>Contact</td>
		
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['studentid']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td>".$row['birthdate']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['contact']."</td>";
		echo "<td>".$row[''];	
		echo "<td><a href=\"edit.php?studentid=$row[studentid]\">Edit</a> | <a href=\"delete.php?studentid=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>

	<?php
	echo "<br>";
	echo "<br>";
	echo "<br>";
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//select -selects all columns and fields
$result = $dbConn->query("SELECT * FROM `tbl_class` ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Id</td>
		<td>Class Code</td>
		<td>Student Id</td>
		<td>Subject Code</td>
		<td>Time</td>
		<td>Teacher</td>	
		
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row[`classcode`]."</td>";
		echo "<td>".$row['studentid']."</td>";
		echo "<td>".$row['subjectcode']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['teacher']."</td>";
		echo "<td>".$row[''];	
		echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
