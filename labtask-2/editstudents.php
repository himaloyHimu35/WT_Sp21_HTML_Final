<?php 
include "connection.php";

// create Operations
	if (isset($_POST['submit'])) {
		// get variables from the form
		$name = $_POST['name'];
		$id = $_POST['id'];
		$dob = $_POST['dob'];
		$credit = $_POST['credit'];
		$cgpa = $_POST['cgpa'];
		$dept_id = $_POST['dept_id'];

		//write sql query

		$sql = "INSERT INTO `student`(`name`, `id`, `dob`, `credit`, `cgpa`,'dept_id') VALUES ('$name','$id','$dob','$credit','$cgpa','$dept_id')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}


// End of create opeartions
?>



<?php 
include "connection.php";

// Update  Operations
	if (isset($_POST['submit'])) {
		// get variables from the form
		$name = $_POST['name'];
		$id = $_POST['id'];
		$dob = $_POST['dob'];
		$credit = $_POST['credit'];
		$cgpa = $_POST['cgpa'];
		$dept_id = $_POST['dept_id'];

		//write sql query

		$sql = "UPDATE `student` SET `name`='$name',`id`='$id',`dob`='$dob',`credit`='$credit',`cgpa`='$cgpa' ,`dept_id`='$dept_id'  WHERE `id`='$user_id'";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Update  successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}


// End of create opeartions
?>








<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<table>
		<tr>
			<th>Name</th>
			<th>Id</th>
			<th>DOB</th>
			<th>Credit</th>
			<th>Cgpa</th>
			<th>Department Id</th>

		</tr>

		<?php 
		$conn = mysqli_connect("localhost","root","","labtask2");

		if ($conn-> connect_error)
		{
			die ("Connection failed: ". $conn-> connect_error);
		}

		$sql= " SELECT name,id,dob,credit,cgpa,dept_id from student ";
		$result = $conn-> query ($sql);

		if ($result-> num_rows > 0)
		{

			while ($row= $result-> fetch_assoc())
			{
				echo "<tr> <td> ". $row ["name"]. "</td><td>".$row["id"]."</td><td>".$row["dob"]."</td><td>".$row["credit"]."</td><td>".$row["cgpa"]."</td><td>".$row["dept_id"]."</td> </tr>";
			}
			echo "</table>";
		}


		$conn-> close();
		 ?>
		




	</table>







	<div class="add-student-form">

		<form method="POST" action="process.php">

			<input type="text" name="name" placeholder="Enter Your Name " required> <br>
			<input type="text" name="id" placeholder="Enter Your ID " required> <br>
			<input type="date" name="dob" placeholder="Enter Your Birth Date" required> <br>
			<input type="text" name="credit" placeholder="Enter Your completed Credit " required> <br>
			<input type="text" name="cgpa" placeholder="Enter Your CGPA " required> <br>
			<input type="text" name="dept_id" placeholder="Enter Your Department ID " required> <br>
			<div class="btn">
			<input type="submit" name="save" value="Submit">
			</div>

			



		</form>
		

