
<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome | Login</title>

	<link rel="stylesheet" type="text/css" href="css/employee_login.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
	<div class="container">

		<div class="header-area">
				<div class="logo1">
				<img src="img/logo.jpg" alt="Blood donation" />
				<p>A Community of Voluntary Blood Donors of Bangladesh</p>

				</div>
				<div class="logo2">
					<img src="img/savelife.png" alt="Save Life" />

				</div>

		</div>
		<nav class="menu-bar">
		<ul>
			<li><a href="../index.php">Home</a></li>
      <li><a href="../ask-for-blood.php">ask for blood</a></li>
      <li><a href="../Donation.php"> donate blood</a></li>
      <li><a href="../avaibility.php">availibility</a></li>
      <li><a href="login.php">login</a>
			<ul>
			<li><a href="../login.php">user login</a>
			<li><a href="login.php">admin login</a>
			<li><a href="../volunteer/login.php">volunteer login</a>
			
			</ul>
	  </li>
	  <li><a href="../signup.php">signup</a></li>


		</ul>
		</nav>
		<!-- form area -->
		<div class="form-container">
		<img src="img/man.png" alt="man" />
		<form class="login-form" action="login.inc.php" method="POST">
			         <input type="text" name="uid" placeholder="Username/e-mail" >
					<input type="password" name="pass" placeholder="password" >
					<button type="submit" name="submit">Login</button>




		</form>
		</div>
	</div>
		<footer class="footer-area">
					<p>&copy; Copyright All Rights Reserved</p>

		</footer>

</body>
</html>
