<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    		border:none;
    	}
    	body
    	{
    		background-image: linear-gradient(to right, #cc2b5e , #753a88)
    	}
    </style>
</head>
<body>

	<div class="container">
		<br><br>
		<div class="row">
			<div class="col-md-12">
		<div class="cards c">
			<div class="card-group">
				<div class="card " >
					<img src="image/login.webp" class="img-fluid" >
					<a href="login.php" class="text-center" style="color: grey;">I am already registered</a>
					<br>
				</div>


				<div class="card ">
					<div class="card-body m-auto" style="width: 90%">
						<form method="post" class="form-group">
							<h1><b>User Registration</b></h1>
							<br>
							<div class="form-control">
								<i class="fa fa-user"></i>
								<input type="text" name="name" placeholder="Your Name" class="input-feild" required style="text-transform: capitalize;">
							</div>

							<div class="form-control">
								<i class="fas fa-envelope"></i>
								<input type="text" name="email" placeholder="Your Email" class="input-feild" required>
							</div>

							<div class="form-control">
								<i class="fas fa-lock"></i>
								<input type="password" name="password" placeholder="Your Password" class="input-feild" required>
							</div>

							<div class="form-control">
								<i class="fas fa-mobile-alt i"></i>
								<input type="text" name="mob_num" placeholder="Your Mobile Number" class="input-feild" required>
							</div>

							<input type="submit" name="submit" value="submit" class="btn btn-primary">

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

if(isset($_POST['submit']))
{
	$a = $_POST['name'];
	$b = $_POST['email'];
	$c = $_POST['password'];
	$d = $_POST['mob_num'];

	$data = "INSERT into form(name,email,password,mob_num)VALUES('$a','$b','$c','$d')";
	$result = mysqli_query($con,$data);

	if($result)
	{
		header('location:login.php');
	}
}

?>