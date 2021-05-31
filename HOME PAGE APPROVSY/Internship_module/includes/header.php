<!DOCTYPE html>
<?php include 'core/init.php';?>

<?php
  function getIp() {
    //Get IP Address
      $ip = $_SERVER['REMOTE_ADDR'];   
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
          $ip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }  
      return $ip;
  }
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>APPROVSY-INTERNSHIP PORTAL</title>
  <link href="../assets/images/check.png" rel="icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">  
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> 
</head>

<body style="background-image: url(../assets/images/bg-2.png); height:100%; background-repeat: no-repeat;background-size: cover;">
  <header>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg  self" style="background-color: #6206A8;">
      <a class="navbar-brand" href="../index.php" style="font-size:30px;font-weight:bold; color:white;" style="background-color: #6206A8;">&ltAPPROVSY&gt</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <!-- <a class="nav-link " href="index.php" style="font-size:19px;"><b>Home</b></a> -->
          </li>
          <?php 
              if(!isset($_SESSION['email'])){
                echo "
                <li class='nav-item'><a href='myaccount.php' class='nav-link' style='border-radius: 10em; font-size:19px; color:white;'><b>Student</b></a></li>
                <li class='nav-item'><a href='employer/myaccount.php' class='nav-link' style='border-radius: 10em; font-size:19px;color:white;'><b>Faculty</b></a></li>
                ";
              }
              else{
                echo "<li class='nav-item'><a href='myaccount.php' class='nav-link' style='border-radius: 10em;font-size:19px; color:white;'><b>My Account</b></a></li>";
                echo "<li class='nav-item'><a href='logout.php' class='nav-link' style='border-radius: 10em;font-size:19px;color:white;'><b>Logout</b></a></li>";
              }
            ?>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          
          <li class="nav-item">
          <a class="nav-link " href="index.php" style="font-size:20px;font-weight:400;color:white;">Internship Portal</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li> -->
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->
  </header>