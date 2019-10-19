<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="payroll";
$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);
?>
<?php
if (isset($_POST['submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$school=$_POST['school_name'];
	$birth_date=$_POST['birth'];
	$nmbr=$_POST['nmbr'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$qualification=$_POST['qualification'];
	$experience=$_POST['experience'];
	$publication=$_POST['publications'];
	$quality=$_POST['quality'];
	$comments=$_POST['comments'];
	if (!empty($id) && !empty($name) && !empty($designation) && !empty($school) && !empty($birth_date) && !empty($nmbr) && !empty($email) && !empty($address) && !empty($qualification)  && !empty($experience)  && !empty($publication) && !empty($quality)  &&  !empty($comments))
	{
		$add_employee="INSERT INTO `add_employee`(`Id:`, `name:`, `designation:`, `school_name:`, `birth_date`, `number`, `email`, `address`, `edu_qualification`, `job_experience`, `publications`, `outstanding_quality`, `comment`) VALUES ('$id','$name','$designation','$school','$birth_date','$nmbr','$email','$address','$qualification','$experience','$publication','$quality','$comments')";
		$resul_query=$conn->query($add_employee);
		if ($resul_query==true)
		{
			if ($conn->affected_rows >0)
			{
echo "<script>alert('Data inserted succesfully')</script>";
}
else
{
echo "<script>alert('Data Not inserted succesfully')</script>";
}
}
else
{
echo "<script>alert('query error')</script>";
}
}
else
{
echo "<script>alert('Fillup all feild')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Add Employee</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<style>
		.main_head{
			hight:70px;
			width: 100%;
			position: fixed;
			z-index: 999;
			overflow-x: hidden;
			background-color: #000033;
			
		}
		.main_head h2{
			text-align: center;
			margin-top: 10px;
			color: white;
			font-weight: bold;
			font-family: monospace;
			font-size: 29px;
			
		}
		.main_head a{
			text-decoration: none;
			color: white;
		}
		.heading{
			margin-top:20px;
		}
		.heading1{
			border-bottom: 3px solid #F76900;
		}
		.heading1 h4{
			color: #000033;
			font-weight:bold;
			font-family: monospace;
			font-size: 25px;
		}
		.form{
			position: relative;
		}
	</style>
	<body>
		<div class="container"></div><br>
		<div class="container">
			<div class="heading">
				<div class="row">
					<div class="col-md-3">
						<div class="heading1">
							<h4>Add Employee</h4>
						</div>
						
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-5"></div>
				</div>
			</div>
		</div><br>
		<div class="container">
			<form action="" method="post">
				<div class="form">
					<div class="row">
						<div class="col-md-6">
							<label for="">Employee Id:</label>
							<input type="number" class="form-control" name="id"><br>
							<label for="">Employee Name:</label>
							<input type="text" class="form-control" name="name"><br>
							<label for="">Employee Designation:</label>
							<input type="text" class="form-control" name="designation"><br>
							<label for="">School Name:</label>
							<input type="text" class="form-control" name="school_name"><br>
							<label for="">Date Of Birth:</label>
							<input type="text" class="form-control" name="birth"><br>
							<label for="">Telephone Number:</label>
							<input type="number" class="form-control" name="nmbr"><br>
							<label for="">Email:</label>
							<input type="text" class="form-control" name="email"><br>
							
						</div>
						<div class="col-md-6">
							<label for="">Address:</label>
							<input type="text"  class="form-control" name="address" ><br>
							<label for="">Educational Qualification:</label><br>
							<textarea name="qualification"rows="4" cols="57"></textarea><br>
							<label for="">Job Experience:</label><br>
							<input type="text" class="form-control" name="experience"><br>
							<label for="">Publications:</label>
							<input type="text" class="form-control" name="publications">
							<label for="">Outstanding Quality:</label>
							<input type="text" class="form-control" name="quality"><br>
							<label for="">Comments:</label>
							<input type="text" class="form-control" name="comments"><br>
							
							<button class="btn btn-primary" name="submit" style="width:100%;">Add Data</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>