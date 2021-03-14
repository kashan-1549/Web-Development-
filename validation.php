<?php
// session_start();
//db connection ka page mene include kiya hai yaha b
include('db_connection.php');
// my connection
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



if(isset($_POST['btn_log'])){
$name = $_POST['user'];
$pass = $_POST['password']; 

$s = "select * from user_table where name = '$name' && password = '$pass'";
$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:home.php');
}else{
	header('location:login.php');
}
}
?>