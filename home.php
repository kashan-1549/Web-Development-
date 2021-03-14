<?php

session_start();

?>

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
  background-color: red;
  color: white;
}
/* Style the header */
.header {
  background-color: #02355e;
  padding: 20px;
  height: 65px;
  text-align: center;
  color: white;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #02355e;
  text-align: left;
  padding: 15px;
}

/* Style the topnav links */
.topnav a {
  text-align: center;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

a{
	color: black !important;
	margin-top: -72px !important;
	margin: 10px;
	position: absolute;
	left: 1565px;
}
/* Style the footer */
.footer {
  color: white;
  background-color: #02355e;
  padding: 10px;
  text-align: center;
}
.avatar {
  vertical-align: left;
  position: absolute;
  left: 10px;
  width: 70px;
  height: 70px;
  border-radius: 50%;
}
body{ font: 14px sans-serif; text-align: ; }

div.transbox {
  position: absolute;
  left: 1300px;
  top: 10px;
  border-radius: 30px;
  width: 380px;
  height: 30px;
  background-color: #38607a;
  border: 2px solid #38607a;
  opacity: 0.7;
}

div.transbox p {
  margin: 2%;
  font-weight: bold;
  color: white;
}


div.picbox {
  position: absolute;
  left: 1293px;
  top: 40px;
  border-radius: 30px;
  width: 250px;
  height: 90px;
  background-color: transparent;
  border: 1px solid transparent;
  opacity: 0.9;
  
}

div.picbox p {
  position: absolute;
  left: 55px;
  margin: 14%;
  font-size: 15.5px;
  font-weight: bold;
  color: white;
}


div.headbox {
  margin: auto;
  position: absolute;
  left: 545px;
  top: 30px;
  border-radius: 30px;
  width: 600px;
  height: 100px;
  background-color: transparent;
  border: 1px solid transparent;
  opacity: 0.9;
  
}

div.headbox p {
  position: absolute;
  left: 55px;
  margin: 14%;
  font-weight: bold;
  color: white;
}


.logo-box {
  position: absolute;
  left: 5px;
  top: 5px;
  height: 120px;
  width: 200px;
  border: 1px solid black;
  background-image: url("paper.gif");
  
  color: black;
}

</style>
<title>Homepage</title>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="form.css">

</head>

<body>
<div class="topnav">

</div>

<div class="header">
<div class="logo-box">

</div>
<div class="picbox">
<img src="images/kashan2.jpg" alt="Avatar" class="avatar" />
<p class="dropbtn" style="cursor:pointer">Hi, <b><strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong></b></p>
</div>

<div class="headbox">
<h4 style="margin: 30px; margin-top:-10px; font-size: 30px;"><center>Welcome to the Dashboard</center></h4>
<p style="margin-top:-50px; text-align: middle; margin: -5px;"><center>Student E-Info Portal</center></p>
</div>
<div class="transbox"><p style="text-align:middle; vertical-align:middle; align:left;"><b>You've Logged In At</b> <?php echo  date("l") ." ". date("Y-m-d") ." ". date("h:i:sa");?></p></div>

</div>

<span class="container">
<a class="float-right" href="logout.php"><b>LOGOUT</b></a>
<h3 style="color:white; text-align:center; padding: 50px;"></h3>
</span>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- FOOTER -->
<div class="footer">
  <p>Developed by Kashan Qazi</p>
</div>

</body>


</html>