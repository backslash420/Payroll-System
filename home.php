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
if (isset($_POST['logout']))
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<style>
	.header{
		height: 60px;
		width: 100%;
		background-color:#1A355B;
		float: left;
		position:fixed;
		z-index: 999;
		overflow-x: hidden;
	}
	.header h3{
			font-family: system-ui;
		}
	.logo{
		margin-top: 10px;
	}
	.logo h3{
		color: white;
		font-family:monospace;
	}
	.logo h3 a{
		text-decoration: none;
		color: white;
	}
	.menu ul{
		list-style: none;
	}
	.menu ul li{
		float: left;
		padding-left: 30px;
		padding-top: 16px;
	}
	.menu ul li a{
		text-decoration: none;
		color: white;
	}
	.btn{
		margin-top: 1px;
	}
		.content{
		/*height: auto;
		width: auto;*/
		
	}
	.nav{
		height: 511px;
	/* width: 17%;*/
		background-color:#000033;
		/*position: fixed;*/
		float: left;
		margin-top: 13px;
	}
	.main{
		height:400px;
		width: 82%;
		
		float: right;
		margin-left: 217px;
		
	}
		
		
		.list{
		height: 50px;
	width: 169%;
	background:#000033;
	list-style: none;
	border-bottom: 2px solid #1A355B;
	margin-left: -39px;
	padding-left: 41px;
		}
		ul li{
			padding-top: 11px;
		}
		/*.list:hover{
			background: white;
		}*/
		.list li a:hover{
			color: black
		}
	</style>
	<body>
		<div class="container-fluid header">
			<div class="row">
				<div class="col-sm-2 logo">
					<h3><a href="">ABC Compny</a></h3>
				</div>
				<div class="col-sm-5"></div>
				<div class="col-sm-4 menu">
					<ul>
						<li><a href="" style="font-family: system-ui">Home</a></li>
						<li><a href="" style="font-family: system-ui">Services</a></li>
						<li><a href="" style="font-family: system-ui">Contact</a></li>
						<li><a href="" style="font-family: system-ui">About</a></li>
						
					</ul>
				</div>
				<form action="" method="post">
					<div class="col-sm-1 btn">
						<button class="btn btn-primary" name="logout">Logout</button>
					</div>
				</form>
			</div>
		</div><br><br>
		<div class="content">
			<div class="nav" style="width: 16%; background: #1A355B;height: 100%; position: fixed;">
				<ul >
					<li class="list"><a href="home.php?&&page=welcome" style="text-decoration: none;font-size: 20px; color: white;font-family:system-ui;" >Home</a></li>
					<li class="list"><a href="home.php?&&page=add_employee" style="text-decoration: none;font-size: 20px; color: white;font-family:system-ui;">Add Employe</a></li>
					<li class="list"><a href="home.php?&&page=add_sallary" style="text-decoration: none;font-size: 20px; color:white;font-family:system-ui;">Add Sallary</a></li>
					<li class="list"><a href="home.php?&&page=view_employee" style="text-decoration: none;font-size: 20px; color:white;font-family:system-ui;">View Employee</a></li>
					<li class="list"><a href="home.php?&&page=sallary_report" style="text-decoration: none;font-size: 20px; color:white;font-family:system-ui;">Sallary Report</a></li>
				</ul>
			</div>
			<div class="main" style="width: 84%;background-color:white;">
				<?php
				switch ($_GET['page']) {
				case 'welcome':
				include "welcome.php";
				break;
				case 'add_employee':
				include "add_employee.php";
				break;
				case 'add_sallary':
					include "add_sallary.php";
					break;
				case 'view_employee':
					include "view_employee.php";
					break;
				case 'sallary_report':
					include "sallary_report.php";
					break;
				case 'prfl':
					include "prfl.php";
					break;
				
				default:
				include "welcome.php";
				break;
				}
				?>
			</div>
		</div>
	</div>
	
</body>
</html>