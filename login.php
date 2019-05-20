

<?php

$host ="localHost";
$username="root";
$pass="";
$db="dharura";

 $conn= mysqli_connect($host,$username,$pass,$db);


include 'connect.php';

session_start();
if(isset($_SESSION['username'])){
	
	}
	else{
		if(isset($_POST['username']) && isset($_POST['passward'])){
	$username =$_POST['username'];
	$passward=$_POST['passward'];

	$sql ="select * from admin where username ='".$username."' AND passward ='".$passward."' limit 1 " ;

	$results=mysqli_query($conn,$sql);

	if(mysqli_num_rows($results)==true){
	header("location:dashboard.php");
		exit();
		
	}
	else{
		echo "logg in failed";
	}



}
	
}






 	




?>

<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">

	.logoutmessage{

	width:50%: 
	height:30px;
	margin-top:10px;
	border:5px auto;
	color:1px solid #1552f2;
	background:center;
	text-align:10px;
	</style>

}
</head>
<body>
	<?php
	if(isset($_SESSION['message'])){
		echo "<div id="logoutmessage">".$_SESSION['error']."</div>";
		unset($_SESSION['message']);
		

	}


	?>


	<div  class="loginbox">
		<img src="drawables/avatar.jpeg" class="avatar">
		<h1>LogIn</h1>
		<form method="POST" action="#">
			<input type="text" name="username" placeholder="UserName"><br> 
			<input type="Password" name="passward" placeholder="Password"><br><br><br>
			<input type="submit" name="" value="LogIn" id="logibtn" width="100%" ><br>
			<a href="">forgot passward</a><br>
			<a href="">Sign Up</a>

		</form>


	</div>

</body>
</html>