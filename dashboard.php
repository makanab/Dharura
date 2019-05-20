

<?php
include ('nfcon.php');



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="nav.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</head>
<body>



<?php

if(isset($_GET['notf'])){
	$myid=$_GET['notf'];
$pdo->query("UPDATE notification SET read_n='0' where $myid=id");
header("location:dashboard.php");

}

//pdo->query("UPDATE notification SET (read_n='0') WHERE id='$myid' ");
//header("location:dashboard.php");
//echo $myid;







	//$myid=$_GET['notf'];

	//$pdo->query(" UPDATE notification  SET read_n= '0' WHERE id = '$n_id' ");
	//

	//$pdo->query("UPDATE notification SET read_n=0 WHERE id='".$myid."'");
	



$data=$pdo->query("SELECT * from notification ");
$new_data=$pdo->query("SELECT * from notification  where read_n=1");

$count =$new_data->rowCount();

  ?>

<div id="sidebar">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">profile</a></li>
		<li>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Notification<?php if($count>0){
    	echo "(".$count.")";

    }  

    ?>

<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  	<?php 

  	foreach ($data as $value) {
  		?>
 
    <?php
    if($value['read_n']==1){

?>

<li class="alert-danger">  <a href="?notf=<?php echo $value['id']; ?>  " > <?php  echo $value['title']; ?></a></li>
<?php

}
else
{

?>
<li ><?php  echo $value['title']; ?> </li>

 <?php
}
}
 ?>

 </ul>
  	</li>
</div>
	</li>


	</ul>
	<div class="toggle_btn">
		<span></span>
		<span></span>
		<span></span>
		
	</div>
	

</div>
</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://ajax.gooogleapis/ajaxs/lib/jquery/3.3.1/jquery.min.js/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>