<?php

$host ="localHost";
$username="root";
$pass="";
$db="dharura";

 $conn= mysqli_connect($host,$username,$pass,$db);

$sql ="select *from issue";
$records =mysqli_query($conn,$sql);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		
 	</title>
 </head>
 <body>
 	<table width="500" cellpadding="1" cellspacing="1">
 		<tr>
 			<th>
 				issue
 			</th>
 		</tr>
 		<?php
 		while ($issue==mysqli_fetch_assoc($records)) {
 			echo "<tr>";
 			echo"<td>'".$issue['issue']."';

 				</td>";
 			echo "<tr>";
 		}


 		?>
 		


 	</table>
 
 </body>
 </html>