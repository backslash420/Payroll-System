<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="payroll";
$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);
error_reporting(0);
?>
<?php
if (isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	if (!empty($email) && !empty($pass))
	{
		$qury_data="SELECT * FROM `admin_login` WHERE `email`='$email' && `password`='$pass'";
		$query_result=$conn->query($qury_data);
		$all_data_fetch=$query_result->fetch_array();
		if ($email=$all_data_fetch[0] && $pass=$all_data_fetch[1])
		{
			header('location:home.php');
		}
	}
	else{
echo "<script>alert('Fillup field')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sign In</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<style>
		body{
			background: #F1F1F1;
		}
		.form{
			background: white;
			height: 350px;
	margin-top: 11%;
		}
		.form1{
			margin-top: 50px;
		}
		.form1 h3{
			text-align: center;
			font-family: system-ui;
			font-weight: bold;
		}
	</style>
	<body>
		<form action="" method="post">
			<div class="container form">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6 form1">
						<h3>Login Your Account</h3><br>
						<input type="text" name="email" placeholder="Enter Email" class="form-control"><br>
						<input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
						<button type="submit" class="btn btn-primary" name="submit" style="width: 100%;">Login</button>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
		</form>
	</body>
</html>