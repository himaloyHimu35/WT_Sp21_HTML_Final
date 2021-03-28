
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

</body>
</html>