<?php
	require "config/config.php";
	require "functions/functions.php";
	$nameerror=$snameerror=$adderror=$emailerror="";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		$c=0;
		if(empty($_POST['name']))
		{
			$c++;
			$nameerror="Please enter name";
		}
		else if (!empty($_POST['name']))
		{
			$name=test($_POST['name']);
			$len=strlen($name);
			if($len>=6)
			{
				if (!preg_match("/^[a-zA-Z\d ]*$/",$name))
				{
					$c++;
       				$nameerror = "Only numbers,letters and white space allowed"; 
     			}
     		}
     		else
     		{
     			$c++;
     			$nameerror = "Minimum 6 characters are required";
     		}
		}
		if(empty($_POST['sname']))
		{
			$c++;
			$snameerror="Please enter shop name";
		}
		else if (!empty($_POST['sname']))
		{
			$sname=test($_POST['sname']);
			$len=strlen($sname);
			if($len>=6)
			{
				if (!preg_match("/[a-zA-Z\d ]/",$sname))
				{
					$c++;
       				$snameerror = "Only numbers,letters and white space allowed"; 
     			}
     		}
     		else
     		{
     			$c++;
     			$snameerror = "Minimum 6 characters are required";
     		}
		}
		if(empty($_POST['add']))
		{
			$c++;
			$adderror="Please enter address";
		}
		else if (!empty($_POST['add']))
		{
			$add=test($_POST['add']);
			if (!preg_match("/[a-zA-Z\d\W ]/",$add))
			{
				$c++;
       			$adderror = "Only numbers,letters and some special characers allowed"; 
     		}
		}
		if(empty($_POST['email']))
		{
			$c++;
			$emailerror="Please enter email address";
		}
		else if (!empty($_POST['email']))
		{
			$email=test($_POST['email']);
			if (!preg_match("/[a-zA-Z\d ]+@[a-z]+\.[a-z]+/",$email))
			{
				$c++;
       			$emailerror = "Only numbers,letters and white space allowed"; 
     		}
		}
		if($c==0)
	{
		$sql="INSERT INTO form (name,shopname,address,email) VALUES ('{$name}','{$sname}','{$add}','{$email}')";
		$query=mysqli_query($conn, $sql);
	}
	}
?>