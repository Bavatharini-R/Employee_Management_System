<?php
session_start();
if(!$_SESSION['name'])
{
header("location:index.php");
}

include 'conn.php';

if(isset($_POST['done']))
{
	$name  = ucfirst($_POST['user']);
	$age = $_POST['age'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
	$date = "$day-$month-$year";
	$salary = $_POST['salary'];
	$department = ucfirst($_POST['department']);
	$dob = date("Y-m-d",strtotime($date));
	$date_of_birth = $dob;

	$q="INSERT INTO `employee`( `name`, `age`, `date_of_birth`, `salary`, `department`) VALUES ('$name','$age', '$date_of_birth','$salary','$department')";

$query = mysqli_query($conn,$q);

}
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
	background-image:linear-gradient(rgba(71,71,71,0.7),rgba(71,71,71,0.7)),url("img/add.jpeg");

  	
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
				<h1 class="text-white text-center">Insert Employee Details</h1>
			</div><br>


			<label>Name</label>
			<input type="text" name="user" class="form-control" required><br>

			<label>age</label>
			<input type="text" name="age" class="form-control" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

		<label>date of Birth</label>
            <div class="row">
			<div class="col-md-3"><input type="text" name="day" class="form-control" placeholder="date" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>-

			<div class="col-md-3"><input type="text" name="month" class="form-control" placeholder="month" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>-

			<div class="col-md-3"><input type="text" name="year" class="form-control" placeholder="year" required pattern="[0-9]{4,4}"
        title="this field accepts only numbers  and 4 characters"></div><br>
            </div>

			<label>salary</label>
			<input type="text" name="salary" class="form-control" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

			<label>department</label>
			<input type="text" name="department" class="form-control" required><br>

          <div  class="row m-auto">
			<div class="col-md-5"><button class="btn btn-success col-lg-12" name="done">Add</button>
			</div>
			<div class="col-md-5"><a href="display.php"><input type="button" name="" value="Back to records" class="btn btn-danger col-lg-12"></a></div>
			</div>
		   </div>
	</form>
</div>
</script>
</body>
</html>