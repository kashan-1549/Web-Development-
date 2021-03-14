<html>
<head>
<style>
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
}
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
}
/* Style the header */
.header {
  background-color: #02355e;
  padding: 20px;
  text-align: center;
  color: white;
}
}
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
body{
	background: linear-gradient(rgba(0, 0, 50, 0.5),rgba(0, 0, 50, 0.5), url(image1.jpg));
	background-image: url("image1.jpg");
	background-size: cover;
	background-position: center;
	background-color: #f1f1f1;
}
a{
	color: black !important;
	margin-top: -200px !important;
}
h1 {
  display: block;
  font-size: 2em;
  margin-top: 0.67em;
  margin-bottom: 0.67em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}
</style>
<title>School Management System</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container">
<a class="float-right" href="logout.php"><b>BACK</b></a>	
</div>
</body>
</html>

<?php
session_start();
//db connection ka page mene include kiya hai yaha b
include('db_connection.php');

// $server = "localhost";
// $username = "root";
// $password ="";
// $dbname ="user_login";


// $conn = mysqli_connect($server,$username,$password,$dbname);

// if($conn){
    
//     echo"";
// }
// else{
//     echo "";
// }

if(isset($_POST['btn_reg'])){
$name = $_POST['user'];
$pass = $_POST['password']; 


$s = "select * from user_table where name = '$name'";
$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"<h1>Username Already Taken</h1>";
	
}else{
	$reg = "Insert into user_table (name, password) values ('$name', '$pass')";
	mysqli_query($conn, $reg);
	echo"<h1>Registration Successful</h1>";
	
}

}

?>