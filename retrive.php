<?php

include("connect.php");
$sql_qry="select* from employee_data";
$results =mysqli_query($conn,$sql_qry);
while ($value=mysqli_fetch_array($results)) {
	echo $value['name'];
	echo $value['sname'];
}

?>