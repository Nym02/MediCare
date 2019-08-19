<?php
session_start();

if(!isset($_SESSION['a_id']))
{
	header("Location:login.php");
    exit;
}
include_once "dbh.inc.php";


?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <title>Signup</title>
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
    <nav class="navbar navbar-dark bg-dark  navbar-expand-md">

        <div class="container">
          <a class="navbar-brand active" href="admin-home.php">Home</a>
          <ul class="navbar-nav">

                <li class="nav-item"><a class="nav-link" href="user_view.php">View User</a></li>
                <li class="nav-item"><a class="nav-link" href="delete_user.php">Delete user</a></li>
                <li class="nav-item"><a class="nav-link" href="update.php">update User</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
          </ul>
      </div>
    </nav>
       <h2>	<center> Signup</center></h2>	
	   <form class="signup-form" action="signup.inc.php" method="POST">
			<input type="text" name="first_name" placeholder="Firstname">
			<input type="text" name="last_name" placeholder="Lastname">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="phone" placeholder="Phone No">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pass" placeholder="Password">
			<button type="submit" name="submit" > Sign up </button>
	   
	   </form>
	
  <footer class="footer-area">
        <p>&copy; Copyright All Rights Reserved</p>

  </footer>

</body>
</html>
