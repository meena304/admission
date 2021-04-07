<?php
include "session.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
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
      body
      {
        height: 100vh;
        /*width: 100vh;*/
        background-image:url(image/bg1.webp);
        background-size: cover;
        background-repeat: none
      }

      .nav-link
      {
        color: white;
        font-size: 18px;
        margin-right: 7px;
        font-weight: bold;
        letter-spacing: .2px
      }
      h1
      {
        font-size: 53px; text-transform: uppercase;font-family: 'Archivo Black', sans-serif;
      }
      h5
      {
        font-size: 25px;font-weight: bold;font-family:sans-serif;
      }
      span 
      {
        color:#ffeb3b
      }
      .mr
      {
        margin-right: 10px
      }
      .card
      {
        outline: none;
        border:none;
      }
</style>
</head>
<body>

	<nav class="navbar navbar-expand-md fixed-top" style="background-color:#0000009c;">
    <!-- Brand -->
    <a class="navbar-brand" href="" style="color: white; margin-left: 5px">
      <i class="fa fa-user"  style="margin-right: 5px;"></i><?php echo $_SESSION['a'] ?>
    </a>

    <button class="navbar-toggler" style="color: white" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="admission.php?id=<?php echo $_SESSION['id'] ?>">Admission Form</a>
        </li>
      
        <li class="nav-item">
          <a class=" btn btn-primary" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

<br><br><br><br>