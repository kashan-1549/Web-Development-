<?php
// Database Connectivity (Ye Database Connectivity hai Is Ko Har Jaga Use Krna 
// Hai To include Krlo Jese Mene Login Page Me Kiya Hai Jaha Jaha Mujhe Database Ki
// Zarorat Huwi Hai Mene Include Kiya Hai Teekh Hai Bhai.........)

$server			=		 "localhost";
$username 		= 		 "root";
$password 		=		     "";
$dbname 		=		 "accounts";
$conn 			= 		 mysqli_connect($server,$username,$password,$dbname);

// ye simple error hai hai for example db me masla hoga to ye error ayega
if(!$conn){
	die('DB Connection Problem'.mysql_error());
}

?>