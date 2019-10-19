<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="payroll";
$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);
?>
<?php
 // $act_value = $_GET['act_value'];
 if (isset($_GET['id']))
 {
  $uid=$_GET['id'];
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Employee Profile</title>
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
	.heading1{
		border-bottom: 3px solid #F76900;

	}
	.heading1 h4{
		color: #000033;
		font-weight:bold;
		font-family: monospace;
		font-size: 23px;
	}
	.name{
		border-bottom:2px solid black;
		text-align: center;
	}
</style>
<body>
	<div class="container"></div><br><br>
<div class="container">
	<div class="heading">
		<div class="row">
			<div class="col-md-3">
				<div class="heading1">
					<h4>Employee Profile</h4>
				</div>
				
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-5"></div>
		</div>
	</div>
</div><br>
<?php
  		$query="SELECT * FROM `add_employee`  WHERE `Id:`='$uid'";
  		$result_query=$conn->query($query);
  		while ($fetch_result=$result_query->fetch_array()) 
  		{
  		
  		
  	?>
<div class="container name">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">
			<h1><?php print $fetch_result[1]?></h1>
			<h4><?php print $fetch_result[2]?></h4>
			<h4><?php print $fetch_result[3]?></h4>
		</div>
		<div class="col-md-4"></div>
	</div>
</div><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<label>Employee Id:</label>
			<input type="number" class="form-control" value="<?php print $fetch_result[0]?>" readonly=""><br>
			<label>Date Of Birth:</label>
			<input type="text" class="form-control" value="<?php print $fetch_result[4]?>" readonly=""><br>
			<label>Number:</label>
			<input type="number" class="form-control" value="<?php print $fetch_result[5]?>" readonly=""><br>
			<label>Email:</label>
			<input type="text" class="form-control" value="<?php print $fetch_result[6]?>" readonly=""><br>
			<label>Address:</label>
			<input type="text" class="form-control" value="<?php print $fetch_result[7]?>" readonly=""><br>
			
		</div>
		<div class="col-md-6">
			<label>Education Qualification</label>
			<textarea name="description"rows="4" cols="57"  readonly=""><?php print $fetch_result[8]?></textarea>
			<label>Job Experience:</label>
			<input type="text" class="form-control" value="<?php print $fetch_result[9]?>" readonly="">
			<label>Comments:</label>
			<input type="text" class="form-control" value="<?php print $fetch_result[12]?>" readonly="">
			<?php
			}
			?>
			<?php
			$sallary_query="SELECT * FROM `add_sallary` WHERE `id`='$uid'";
  		    $result_query=$conn->query($sallary_query);
  		    while ($fetch_result=$result_query->fetch_array()) 
  		     {
			?>
			<label>Date Of Joining</label>
			<input type="text" class="form-control" value="<?php print $fetch_result[2]?>" readonly="">
			<label>Net Sallry</label>
			<input type="text" class="form-control" value="<?php print $fetch_result[11]?>" readonly="">
			<?php
			}
			?>
		</div>
	</div>


</div>
</body>