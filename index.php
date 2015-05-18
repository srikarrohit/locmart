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
	<form method='POST' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<span>Name:</span><input type='text' name='name' placeholder='Name'><span><?php echo $nameerror;?></span><br>
			<span>ShopName:</span><input type='text' name='sname' placeholder='Shop Name'><span><?php echo $snameerror;?></span><br>
			<span>Address:</span><input type='text' name='add' placeholder='Address'><span><?php echo $adderror;?></span><br>
			<span>Email:</span><input type='text' name='email' placeholder='Email'><span><?php echo $emailerror;?></span><br>
			<input type='submit' name='submit' value='Submit'>
	</form>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/index.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
