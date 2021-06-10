<!DOCTYPE html>
<?php include 'includes/functions.php';?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>APPROVSY-admin</title>
  <link href="../../assets/images/check.png" rel="icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <link href="../css/style_bg.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.css" rel="stylesheet">  
  
</head>

<body style="background-image: url(../../assets/images/bg-2.png); height:100%; background-repeat: no-repeat;background-size: cover;">
  <header>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark " style="background-color: #6206A8;">
      <a class="navbar-brand" href="index.php"  style="font-size:30px;font-weight:bold" >Admin Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="font-size:19px;" ><b>Applications</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="internship.php" style="font-size:19px;" ><b>Internships<b></a>
          </li>
          <?php 
            if(!isset($_SESSION['email'])){
              
            }
            else{
              echo "<li class='nav-item'><a href='logout.php' class='nav-link' style='border-radius: 10em; font-size:19px ;'>Logout</a></li>";
            }
          ?>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <!-- <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
              <i class="fab fa-twitter"></i>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->
  </header>