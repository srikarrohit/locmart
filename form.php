<?php
	require "config/config.php";
	require "functions/functions.php";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		$name=test($_POST['name']);
		$sname=test($_POST['sname']);
		$add=test($_POST['add']);
		$email=test($_POST['email']);
		$sql="INSERT INTO form (name,shopname,address,email) VALUES ('{$name}','{$sname}','{$add}','{$email}')";
		$query=mysqli_query($conn, $sql);
		if($query)
		{
			$success="Submitted successfully";
		}
	}
?>