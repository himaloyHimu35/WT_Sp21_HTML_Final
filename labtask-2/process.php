<?php 
	
	require_once ('connection.php');

	if (isset($_POST['save']))
	{
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$dob = mysqli_real_escape_string($con,$_POST['dob']);
		$credit = mysqli_real_escape_string($con,$_POST['credit']);
		$cgpa = mysqli_real_escape_string($con,$_POST['cgpa']);
		$dept_id= mysqli_real_escape_string($con,$_POST['dept_id']);

		

		if (empty($name) || empty($id) || empty($dob) || empty($credit) || empty($cgpa) || empty($dept_id) )
		{
			echo "Fill Those empty Blanks";
		}
		else
		{
			$sql= "INSERT INTO `student`(name, id, dob,credit, cgpa, dept_id) VALUES ('$name','$id','$dob','$credit','$cgpa','$dept_id')";
			$result = mysqli_query($con,$sql);

			if ($result)
			{
				echo "Save sucesfully into database";
			}
			else
			{
				echo "There is a problem";
			}
		}
	}


 ?>