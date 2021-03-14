<?php
include('db_connection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Student Portal</title>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="form.css">
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
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
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
<!-- Kashi Bhai Action Form Empty Hoga Bcz Hum Php ki code login.php me hi likh rahe hai apne form.php diya ta -->
<!-- or ye enctype diya hai wo b hata dena enctype hum image insert update k liye dete hai -->
<div class="body-content">
  <div class="module">
    <h1>Login</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <input type="text" placeholder="Username or Email" name="username" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="submit" value="LOGIN" name="login" class="btn btn-block btn-primary" /><br/>
	  <p>Don't have an account? <a style="color:#0865fc;" href="form.php"><b>Sign up now</b></a>.</p>
    </form>
  </div>
</div>

<!-- FOOTER -->

<div class="footer">
  <p>Developed by Kashan Qazi</p>
</div>
</body>
</html>


<?php
session_start();

// my connection
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "accounts";


// $conn = mysqli_connect($server,$username,$password,$dbname);

// if($conn){
    
//     echo"";
// }
// else{
//     echo "";
// }



if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
//ye neche wali line dalni ti bcz tum register md5 se hii kar rahe ho 
$password = md5($password); 

$s = "select * from users where username = '$username' && password = '$password'";
$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  $_SESSION['username'] = $username;
	header('location:home.php');
}else{
	header('location:login.php');
}
}
?>