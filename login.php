<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

    <style>
    	.c
    	{
    		border:none;
    		outline: none;
    		 width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    	}

    	input
    	{
    		border:none;
    		outline: none;
    		width: 90%;
    	}

    	.form-control
    	{
    		border:none;
    		outline: none;
    		margin-bottom: 40px;
    		border-radius: 0px;
    		border-bottom: 2px solid grey;

    	}
    	.card
    	{
    		outline: none;
    		border: none;
    	}
    	body
    	{
    		background-image: linear-gradient(to right, #cc2b5e , #753a88)
    	}
    </style>
</head>
<body >

	<div class="container">
		<br><br>
		<div class="row">
			<div class="col-md-12">
		<div class="cards c">
			<div class="card-group">
				<div class="card " >
					<img src="image/login.webp" class="img-fluid" >
					<a href="user_registration.php" class="text-center" style="color: grey;">Create an account</a>
					<br>
				</div>

				<div class="card ">
					<div class="card-body m-auto" style="width: 90%">
						<form method="post" class="form-group">

							<h1><b>User Login</b></h1>
							<br>

							<div class="form-control">
								<i class="fa fa-user"  ></i>
								<input type="text" name="name" placeholder="Your Name" class="input-feild" required>
							</div>				

							<div class="form-control">
								<i class="fas fa-lock"></i>
								<input type="password" name="password" placeholder="Your Password" class="input-feild" required>
							</div><br>

							

							<input type="submit" name="login" value="login" class="btn btn-primary">

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    </div>
    </div>

</body>
</html>

<?php
include "dbcon.php";

if (isset($_POST['login'])) 
{
	$a = $_POST['name'];
	$b = $_POST['password'];


	$data = "SELECT * FROM form WHERE name = '$a' and password = '$b'";
	$result = mysqli_query($con,$data);

	$total = mysqli_num_rows($result);

	if($total==1)
	{
		$c = mysqli_fetch_array($result);
		$id = $c['id'];
		$_SESSION['id'] = $id;
		$_SESSION['a'] = $a;
		
		header('location:dashboard.php');
	} 
}

?>