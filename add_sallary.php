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
	$join_date=$_POST['join_date'];
	$casual_hour=$_POST['casual_hour'];
	$description=$_POST['description'];
	$basic=$_POST['basic'];
	$special_allowaance=$_POST['special_allowaance'];
	$house_rent=$_POST['house_rent'];
	$medical_allowance=$_POST['medical_allowance'];
	$gross_pay=$_POST['gross_pay'];
	$deduction=$_POST['deduction'];
	$net_pay=0;
	$total=$net_pay+$basic+$house_rent+$medical_allowance+$gross_pay+$deduction;
	if (!empty($name) && !empty($id) && !empty($join_date) && !empty($casual_hour) && !empty($description) && !empty($basic) && !empty($special_allowaance) && !empty($house_rent) && !empty($medical_allowance) && !empty($gross_pay) && !empty($deduction))
	{
		$sallary_insert="INSERT INTO `add_sallary`(`id`,`name`,`date_of_join`, `casual_hour`, `description`, `basic`, `special_allowance`, `houserent`, `medical_allowance`, `gross_pay`, `deduction`, `Total_pay`) VALUES ('$id','$name','$join_date','$casual_hour','$description','$basic','$special_allowaance','$house_rent','$medical_allowance','$gross_pay','$deduction','$total')";
		$query_result=$conn->query($sallary_insert);
		if ($query_result==true)
		{
			if ($conn->affected_rows>0)
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
		<title>Add Sallary</title>
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
							<h4>Add Sallary</h4>
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
							<label for="">Employee ID:</label>
							<input type="number" class="form-control" name="id"><br>
							<label for="">Employee Name:</label>
							<input type="text" class="form-control" name="name"><br>
							<label for="">Date Of Joining:</label>
							<input type="text" class="form-control" name="join_date"><br>
							<label for="">Casual Hour:</label>
							<input type="text" class="form-control" name="casual_hour"><br>
							<label for="">Job Description:</label>
							<textarea name="description"rows="4" cols="57"></textarea><br>
							<label for="">Basic Pay:</label>
							<input type="text" class="form-control" name="basic"><br>
							
							
						</div>
						<div class="col-md-6">
							<label for="">Special Allowance:</label>
							<input type="text" class="form-control" name="special_allowaance"><br>
							<label for="">House Rent:</label>
							<input type="text" class="form-control" name="house_rent"><br>
							<label for="">Medical Allaowance:</label>
							<input type="text" class="form-control" name="medical_allowance"><br>
							<label for="">Gross Pay:</label>
							<input type="text" class="form-control" name="gross_pay"><br>
							<label for="">Deductions:</label>
							<input type="text" class="form-control" name="deduction"><br>
							<!-- <label for="">Net Pay:</label> -->
							<!-- <input type="text" class="form-control" name="net_pay"><br> -->
							<button class="btn btn-primary" name="submit" style="width:100%;">Add Data</button>
							
							
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>