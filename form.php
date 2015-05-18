<html>
	<body>
		<form method="POST" action="">
			<span>Name</span><input type="text" name="name" placeholder="Name">
			<span>ShopName</span><input type="text" name="sname" placeholder="Shop Name">
			<span>Address</span><input type="text" name="add" placeholder="Address">
			<span>Email</span><input type="text" name="email" placeholder="Email">
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>
<?php
	require "config/config.php";
	require "functions/functions.php";
	$name=test($_POST['name']);
  $sname=test($_POST['sname']);
  $add=test($_POST['add']);
  $email=test($_POST['email']);
	if(isset($_POST['submit']) && !empty($name) && !empty($sname) && !empty($add) && !empty($email))
	{
		$sql="INSERT INTO form (name,shopname,address,email) VALUES ('{$name}','{$sname}','{$add}','{$email}')";
	}
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
