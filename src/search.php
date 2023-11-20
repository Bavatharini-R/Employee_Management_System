<?php

session_start();
if(!$_SESSION['name'])
{
header("location:index.php");
}

error_reporting(0);
include 'conn.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

<style>
body{
	background-image:linear-gradient(rgba(71,71,71,0.7),rgba(71,71,71,0.7)),url("img/search.jpg");

  	
	background-size: cover;
  	background-position: center;
  	
	height: 100vh;
}


</style>


</head>
<body>

<br>


<div>
<h2 class="text-white"><center><font size="10">Employee Management System</font></center></h2>

</div><br>
<div class="col-lg-6 m-auto">
	
	<form method="post">
		<br><div>
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Search Employee Details By ID</h1>
			</div><br>
			
			<div class="container">
		<div class="col-lg-12"><br>
		<div class="input-group mb-3">
				<input type="text" name="id" class="form-control" placeholder="id" 
			title="this field accepts only numbers">
	  <div class="input-group-append">
		<button class="btn btn-success" name="done">Search</button></div>
	  </div>
	</div>
		
		<a href="display.php"><input type="button" name="" value="Back to records" class="btn btn-primary col-lg-12"></a>
			<br>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-white">
				<th><h5>ID</h5></th>
				<th><h5>Name</h5></th>
				<th><h5>Age</h5></th>
				<th><h5>Date of Birth</h5></th>
				<th><h5>Salary</h5></th>
				<th><h5>Department</h5></th>
			</tr>

			
			<?php
if(isset($_POST['done']))
{
$search = $_POST['id'];
$q="select * from employee where id=$search";

$query = mysqli_query($conn,$q);

if ($res = mysqli_fetch_array($query)) {
?>

			<tr class="text-white">
				<th><?php echo $res['id'] ?></th>
				<th><?php echo $res['name'] ?></th>
				<th><?php echo $res['age'] ?></th>
				<th><?php echo $res['date_of_birth'] ?></th>
				<th><?php echo $res['salary'] ?></th>
				<th><?php echo $res['department'] ?></th>
				</tr>
<?php }

}
?>

		</table>
	</div>
</div>

</body>
</html>