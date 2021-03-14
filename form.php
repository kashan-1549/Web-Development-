<?php 
// db connection include kiya hai bcz mujhe yaha databse ki zaroorat hai :D
include('db_connection.php');
session_start();
$_SESSION['message'] = '';
// Database ka Variable $conn hai db_connection page me jo variable banaya hai wo ab har jaga use hoga
// ye connection remove krdena mene coment ki hai 
// $mysqli = new mysqli('localhost', 'root', '', 'accounts');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	// Two passwords are eqaul to each other
	if ($_POST['password'] == $_POST['confirmpassword']){
		$username = $conn->real_escape_string($_POST['username']);
		$email = $conn->real_escape_string($_POST['email']);
		$password = md5($_POST['password']);  //md5 is a hash password security
		
		
		$_SESSION['username'] = 'username';
		
		$sql = "INSERT INTO users (username,email,password)"
			   . "VALUES ('$username','$email','$password')";
			   
		// if the query is successful, redirect to the welcome.php page!

		if ($conn->query($sql) === true){
			$_SESSION['message'] = "Registration is Successful! Added $username to the database!";
			header("location: welcome.php");
		}
		else{
			$_SESSION['message'] = "User could not be added to the database!";
		} 
	}
	else{
		$_SESSION['message'] = "Passwords Did Not Matched!";
	}
}

?>

<html>
<head>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<title>Student Portal</title>

<style>
/* Style the header */
.header {
  background-color: #02355e;
  padding: 20px;
  text-align: center;
  color: white;
}

/* Style the footer */
.footer {
  color: white;
  background-color: #02355e;
  padding: 10px;
  text-align: center;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  border: 2px solid green;
  background-color: #0c1833;
  
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
</head>
<body>

<!--Header-->

<div class="header">
  <h3 style="margin: 10px; font-size: 36px;"><center><big><b>STEP</b></big> V3.0</center></h3>
  <p>Student E-Info Portal</p>
</div>

<!--Drop Down Menu-->

<div class="navbar">
  <a href="form.php">Home</a>
  <a href="contact.php">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">About 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">About University</a>
      <a href="#">About Programs</a>
      <a href="about.php">About Us</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="form.php">Register</a>
      <a href="login.php">Login</a>
    </div>
  </div>
</div>

<!--Original Body-->

<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?php $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" /><br/>
	  <p>Already have an account? <a style="color:#0865fc;" href="login.php"><b>Login Here</b></a>.</p>
    </form>
  </div>
</div>

<!-- FOOTER -->

<div class="footer">
  <p>Developed by Kashan Qazi</p>
</div>
</body>
</html>