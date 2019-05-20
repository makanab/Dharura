<<?php 

include('nfcon.php');


 ?>
 <!DOCTYPE html>
 <html>
 <head>

 	<title></title>
 </head>
 <body>

 	<?php
 	if(isset($_POST['submit'])){
 		$title=$_POST['title'];
 		$q1= "INSERT into posts(title) values('$title')";
 		$q2= "INSERT into notification(title,read_n) values('$title','1')";
 		$pdo->query($q1);
 		$pdo->query($q2);
 		echo "posted";
 		


 	} 


 	 ?>
 	<form  action=""  method="POST" style="text-align: center;">
 		<textarea name= "title">
 			
 		</textarea>
 		<input type="submit" name="submit" value="POST">
 		

 	</form>
 
 </body>
 </html>