<?php
//require('connect.php');

define('DBINFO', 'mysql:host=localhost;dbname=dharura');
define('DBUSER', "root");
define('DBPASS', "");

 //$conn= mysqli_connect($host,$username,$pass,$db);
function fetchAll($query){
	$con = new PDO(DBINFO,DBUSER,DBPASS);
	$stmt=$con->query($query);
	return $stmt->fetchAll();

function performQuery(){
	$con = new PDO(DBINFO,DBUSER,DBPASS);
	$stmt=$con->prepare($query);
	if($stmt->execute()){
		return true;
	}
	else{
		return true;  
	}


}

}


?>