<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$studentid = $_POST['studentid'];
	$fname = $_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];	
	$contact=$_POST['contact'];	
	
	// checking empty fields
	if(empty($studentid) || empty($fname) || empty($lname) || empty($gender)  || empty($birthdate) || empty($address) || empty($contact)) {	
			
		if(empty($studentid)) {
			echo "<font color='red'>Student Id field is empty.</font><br/>";
		}
		
		if(empty($fname)) {
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Last Name field is empty.</font><br/>";
		}	
		
		if(empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}

		if(empty($birthdate)) {
			echo "<font color='red'>Birthdate field is empty.</font><br/>";
		}

		if(empty($address)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}

		if(empty($contact)) {
			echo "<font color='red'>Contact field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$sql = "UPDATE tbl_student SET studentid=:studentid, fname=:fname, lname=:lname, birtdate=:birthdate, gender=:gender, address=:address, contact=:contact WHERE studentid=:studentid";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':studentid', $studentid);
		$query->bindparam(':fname', $fname);
		$query->bindparam(':lname', $lname);
		$query->bindparam(':gender', $gender);
		$query->bindparam(':birthdate', $birthdate);
		$query->bindparam(':address', $address);
		$query->bindparam(':contact', $contact);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$studentid = $_GET['studentid'];

//selecting data associated with this particular id
$sql = "SELECT * FROM tbl_student WHERE studentid=:studentid";
$query = $dbConn->prepare($sql);
$query->execute(array(':studentid' => $studentid, ':fname' => $fname, ':lname' => $lname, ':gender' => $gender, ':birthdate' => $birthdate, ':address' => $address, ':contact' => $contact, ));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$studentid = $row['studentid'];
	$fname = $row['fname'];
	$lname = $row['lname'];
	$gender = $row['gender'];
	$birthdate = $row['birthdate'];
	$address = $row['address'];
	$contact = $row['contact'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Student Id</td>
				<td><input type="text" name="studentid" value="<?php echo $studentid;?>"></td>
			</tr>
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
			</tr>
			<tr>
			<td>Birthdate</td>
				<td><input type="text" name="birthdate" value="<?php echo $birthdate;?>"></td>
			</tr>
			<tr>
			<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address;?>"></td>
			</tr>
			<tr>
			<td>Contact</td>
				<td><input type="text" name="contact" value="<?php echo $contact;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="studentid" value=<?php echo $_GET[`studentid`];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

	<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$classcode = $_POST['classcode'];
	$studentid=$_POST['studentid'];
	$subjectcode=$_POST['subjectcode'];
	$time=$_POST['time'];	
	$teacher=$_POST['teacher'];	
	
	// checking empty fields
	if(empty($id) || empty($classcode) || empty($studentid) || empty($subjectcode) || empty($time) || empty($teacher)) {	
			
		if(empty($id)) {
			echo "<font color='red'>Id field is empty.</font><br/>";
		}
		
		if(empty($classcode)) {
			echo "<font color='red'>Class Code field is empty.</font><br/>";
		}
		
		if(empty($studentid)) {
			echo "<font color='red'>Student Id field is empty.</font><br/>";
		}	
		
		if(empty($subjectcode)) {
			echo "<font color='red'>Subject Code field is empty.</font><br/>";
		}

		if(empty($time)) {
			echo "<font color='red'>Time field is empty.</font><br/>";
		}

		if(empty($teacher)) {
			echo "<font color='red'>Teacher field is empty.</font><br/>";
		}

	} else {	
		//updating the table
		$sql = "UPDATE tbl_class SET id=:id, classcode=:classcode, studentid=:studentid, subjectcode=:subjectcode, time=:time, teacher=:teacher, WHERE id=:id";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id', $tid);
		$query->bindparam(':classcode', $classcode);
		$query->bindparam(':studentid', $studentid);
		$query->bindparam(':subjectcode', $subjectcode);
		$query->bindparam(':time', $time);
		$query->bindparam(':teacher', $teacher);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM tbl_class WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$id = $row['id'];
	$classcode = $row['classcode'];
	$studentid = $row['studentid'];
	$subjectcode = $row['subjectcode'];
	$time = $row['time'];
	$teacher = $row['teacher'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Id</td>
				<td><input type="text" name="id" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td>Class code</td>
				<td><input type="text" name="classcode" value="<?php echo $classcode;?>"></td>
			</tr>
			<tr> 
				<td>Student Id</td>
				<td><input type="text" name="studentid" value="<?php echo $studentid;?>"></td>
			</tr>
			<tr>
			<td>Subject Code</td>
				<td><input type="text" name="subjectcode" value="<?php echo $subjectcode;?>"></td>
			</tr>
			<tr>
			<td>Time</td>
				<td><input type="text" name="time" value="<?php echo $time;?>"></td>
			</tr>
			<tr>
			<td>Teacher</td>
				<td><input type="text" name="teacher" value="<?php echo teacher;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET[`id`];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
