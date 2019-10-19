<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="payroll";
$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>View Employee</title>
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
	</style>
	<body>
		<div class="container"></div><br><br>
		<div class="container">
			<div class="heading">
				<div class="row">
					<div class="col-md-3">
						<div class="heading1">
							<h4>All Employee Data</h4>
						</div>
						
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-5">
						<nav class="navbar navbar-light bg-#2C363C;">
							<form class="form-inline" method="post">
								<input class="form-control mr-sm-3" type="search" placeholder="Search ID" name="id" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
							</form>
						</nav>
					</div>
				</div>
			</div>
		</div><br>
		<table class="table table-hover" style="text-align: center;" >
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Designation</th>
					<th scope="col">School</th>
					<th scope="col">Birth Date</th>
					<th scope="col">Telephone</th>
					<!--  <th scope="col">Email</th> -->
					<th scope="col">Address</th>
					<!--  <th scope="col">Educational Qua:</th> -->
					<th scope="col">Experience</th>
					<!-- <th scope="col">Publication</th>
					<th scope="col">OQ</th> -->
					<th scope="col">Comments</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<?php
				$query="SELECT * FROM `add_employee`";
				$result_query=$conn->query($query);
				while ($fetch_result=$result_query->fetch_array())
					{
			?>
			<tbody>
				
				<tr>
					<th scope="row" style="padding-top: 29px;"><?php print $fetch_result[0]?></th>
					<td style="padding-top: 29px;"><?php print $fetch_result[1]?></td>
					<td style="padding-top: 29px;"><?php print $fetch_result[2]?></td>
					<td style="padding-top: 29px;"><?php print $fetch_result[3]?></td>
					<td style="padding-top: 29px;"><?php print $fetch_result[4]?></td>
					<td style="padding-top: 29px;"><?php print $fetch_result[5]?></td>
					
					<td style="padding-top: 29px;"><?php print $fetch_result[7]?></td>
					
					<td style="padding-top: 29px;"><?php print $fetch_result[9]?></td>
					
					<td style="padding-top: 29px;"><?php print $fetch_result[12]?></td>
					<td style="padding-top: 29px;">
						<a href="home.php?&&page=prfl&&id=<?php print $fetch_result[0]?>"><button class="btn btn-primary" action="prfl.php" value="<?php print $fetch_result[0]?>">Details</button></a>
					</td>
				</tr>
				
				
			</tbody>
			<?php
			}
			?>
		</table>
	</body>
</html>