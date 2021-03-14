<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="form.css">
<style>
a:link, a:visited {
  background-color: white;
  color: black !important;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
}
a:hover, a:active {
  background-color: green;
  color: white !important;
}
a{
	color: black !important;
	margin-top: -200px !important;
	border: 2px solid green;
	padding: 10px;
	margin: 20px;
}
</style>
</head>
</html>
<?php 

//db connection ka page mene include kiya hai yaha b
include('db_connection.php');
session_start();
// yaha condition lagai hai agr user login hai to is page me allow hoga agr login nahi hai to allow nahi hoga
if(isset($_SESSION['username'])==NULL){
    //haven't log in
    echo "You haven't log in";
}else{
    //Logged in
	echo "Successfully log in!";
	
	?>

	<div class="container">
	<a class="float-right" href="logout.php"><b>LOGIN</b></a>	
	</div>
	<div class="body content">
		<div class="welcome">
			<div class="alert alert-success"><?php /* $_SESSION['message'] */ ?></div>
			<center><h1>Successfully Registered<h1></center> <span class="user"><?php /* $_SESSION['username'] */ ?></span>
			
			<?php 
			// ye neche wali line coment ki hai is ki zarorat nahi hata dena
			// $mysqli = new mysqli('localhost', 'root', '', 'accounts');
			$sql = 'SELECT username FROM users';
			$result = $conn->query($sql); //$result = $mysqli_result object
			
			?>
			
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div id="registered">
				<span> Registered Users </span>
				<?php 
				while($row = $result->fetch_assoc()){
					echo "<div class='userlist'><span>$row[username]</span></div>";
				} 
				
				?>
			</div>
		</div>
			</div>
	<?php
}
?>

