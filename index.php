<?php
	require 'form.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">
<title>Locmart</title>
</head>
<body>
<div class="container-fluid fluid1">
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href='#'><img height="50" width="100" src="img/rsz_flash.png"></a>
    </div>
</nav>
</div>
<div class="first container-fluid">
		<img class="img page1 img-responsive" src="img/page1.jpg">
		<div class="img1">
			<img class="img img-responsive" id="img11" src="img/page1_1.png">
		</div>
</div>
<div class="second container fluid">
	<img class="secim1 img-responsive img" id="img21" src="img/list.png">
</div>
<div class="third container fluid">
	<form name="locmart" method="post" onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<table cellspacing="5">
	<tr>
		<td>Name:</td>
		<td><input type='text' name='name' placeholder='Name' onKeyup="emptysuccess()" id="name"></td>
		<td><div id="name_error"></div></td>
	</tr>
	<tr>
		<td>ShopName:</td>
		<td><input type='text' name='sname' placeholder='Shop Name' onKeyup="emptysuccess()" id="sname"></td>
		<td><div id="sname_error"></div></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td ><input type='text' name='add' maxlength="50" onKeyup="updatelength('add','add_error') emptysuccess()" placeholder='Address' id="add"></td>
		<td><div id="add_error"></div></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type='text' name='email' placeholder='Email' onKeyup="emptysuccess()" id="email"></td>
		<td><div id="email_error"></div></td>
	</tr>
	<tr>
	<td><input type='submit' name='submit' value='Submit' onclick="emptysuccess()"></td>
	</tr>
</form>
</div>
<div id="success"><?php echo $success; ?></div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/index.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
