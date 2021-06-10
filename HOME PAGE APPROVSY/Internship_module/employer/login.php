<?php 
	session_start();
	include 'includes/header.php';
	include '../core/init.php';
?>
<div class="wrapper">
<div id="about" class="view" style="height: 50%;background: url('../img/ban.JPG')no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding:">
	<div class="mask rgba-black-strong">
		<div class="container-fluid d-flex align-items-center justify-content-center h-100">
			<div class="row d-flex justify-content-center text-center">
				<div class="col-md-10">
				<a href=""><img src="../img/Logo.png" class="img-fluid" style="width: 400px;"></a>
				<hr class="hr-light">
				<h4 class="white-text my-4 h1-responsive" style="font-family: 'Cookie', cursive;">Admin Login</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container p-3 d-flex justify-content-center">
	<div class="card text-center " style="border-radius: 19px; width:40rem; height:26rem; ">
		<div class="card-header  text-white" style="background-color: #ffffff; border-radius: 19px 19px 0px 0px; background-color: #222; border-radius: 19px 19px 0px 0px; ">
			<h3 class="p-2 h3-responsive" style="margin-top:15px; font-family: 'Quicksand', sans-serif;font-size:30px; font-weight:bold ;"><b>Faculty Login!</b></h3>
		</div>
		<form action="" method="post">
			<div class="card-body" style="font-family: 'Quicksand', sans-serif; font-weight:bold ;">
				<div class="md-form form-sm">
					<input type="text" id="email" class="form-control form-control-sm" name="email" required>
					<label for="email">Email</label>
				</div>
				<div class="md-form form-sm">
					<input type="password" id="password" class="form-control form-control-sm" name="password" required>
					<label for="password">Password</label>
				</div>
				<div class="p-3">
					<div class="float-left">
						<p class="">Forgot your password? <a href="checkout.php?forgot_pass">Click here</a></p>
					</div>
					<div class="float-right">
						<p class="">Don't have an account? <a href="register.php">Register now</a></p>
					</div>
				</div>
			</div>			
			<div class="card-footer">
				<div class="float-center">
					<button type="submit" name="login" class="btn btn-black" style="background: none;
    border: none;
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    font-size: 14px;
    margin-bottom:15px;
    padding: 15px 25px;
    border-radius: 10px;
    background: linear-gradient(45deg, #d5135a, #f05924);
    box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.35);
    color: #fff;">Login</button>
				</div>
			</div>
		</form>
		<?php 
			if(isset($_POST['login'])){
				$email = $_POST['email'];
				$password = $_POST['password'];

				$sql = "SELECT * FROM employer WHERE password = '$password' AND email = '$email'";
				$runSql = $db->query($sql);
				$check_user = mysqli_num_rows($runSql);
				if($check_user == 0){
					echo "<script>alert('Your password or email is incorrect, please try again!')</script>";
					exit();
				}
				if($_SESSION['email'] = $email){
					echo "<script>alert('You logged in successfully!')</script>";
					echo "<script>window.open('index.php','_self')</script>";
				}
				// $ip = getIp();
				// $sel_cart = "SELECT * FROM cart WHERE ip_add = '$ip'";
				// $run_cart = $db->query($sel_cart);
				// $check_cart = mysqli_num_rows($run_cart);
				// if($check_customer > 0 AND $check_cart == 0){
				// 	$_SESSION['email'] = $email;
				// 	echo "<script>alert('You logged in successfully!')</script>";
				// 	echo "<script>window.open('myaccount.php','_self')</script>";
				// }else{
				// 	$_SESSION['email'] = $email;
				// 	echo "<script>alert('You logged in successfully!')</script>";
				// 	echo "<script>window.open('cart.php','_self')</script>";
				// }
			}
		?>
	</div>
</div>
</div>
<?php
	include 'includes/footer.php';
?>

