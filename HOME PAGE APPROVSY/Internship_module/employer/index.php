<?php
	session_start();
	require_once '../core/init.php';
	include('includes/header.php');
?>

<?php 
	if(!isset($_SESSION['email'])){
      echo "<script>window.open('login.php','_self')</script>";
    }else{
?>
<div class="wrapper">
	<main>
		<h1 style="text-align:center; margin-left:520px; ; margin-top:50px; color:white;"> Home page for Faculty </h1>
	</main>
</div>
<?php
	include 'includes/footer.php';
?>

<?php } ?>

