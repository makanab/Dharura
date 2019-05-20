<?php


$pdo =new PDO("mysql:host=localhost;dbname=dharura;" ,'root','');
if($pdo){
	echo "connected";
}
else{
	echo "faild";
}

?>
