<?php
	require 'form.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">
<link rel="shortcut icon" href="img/flashfetch.ico">
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
<div class="second container-fluid">
	<img class="img page2 img-responsive" src="img/page2.jpg">
	<div class="img2">
		<img class="img-responsive img" id="img21" src="img/page2_1.png"><!--col-md-2 col-md-offset-9 col-sm-2 col-sm-offset-9 col-lg-2 col-lg-offset-9-->
	</div>
</div>
<div class="third container-fluid col-md-12">
	<div class="wrap">
		<div class="wrap1">
			<div class="business">
			<h1>For Business Purposes</h1>
		</div>
	<form name="locmart" method="post" onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<div class="wrap2">
	<table>
	<tr>
		<td><input type='text' name='name' class="box" placeholder='Name' onKeyup="emptysuccess()" id="name"></td>
	</tr>
	<tr>
		<td><div id="name_error"></div></td>
	</tr>
	<tr>
		<td><input type='text' name='sname' class="box" placeholder='Shop Name' onKeyup="emptysuccess()" id="sname"></td>
	</tr>
	<tr>
		<td><div id="sname_error"></div></td>
	</tr>
	<tr>
		<td ><input type='text' name='add' class="box" maxlength="50" onKeyup="updatelength('add','add_error')" onKeyup="emptysuccess()" placeholder='Address' id="add"></td>
	</tr>
	<tr>
		<td><div id="add_error"></div></td>
	</tr>
	<tr>
		<td><input type='text' name='email' class="box" placeholder='Email' onKeyup="emptysuccess()" id="email"></td>
	</tr>
	<tr>
		<td><div id="email_error"></div></td>
	</tr>
	<tr>
	<td><div class="button"><input type='submit' name='submit' value='SUBMIT' class='btn' onclick="emptysuccess()"></div></td>
	</tr>
</table>
</div>
</form>
</div>
</div>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/index.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
