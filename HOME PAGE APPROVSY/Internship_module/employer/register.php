<?php 
  session_start();
  require_once '../core/init.php';
  include('includes/header.php');
?>

<div class="container-fluid p-2 d-flex justify-content-center" >
	<div class="card" style="border-radius: 19px; width:40rem; height:40rem; ">
		<div class="card-header" style="background-color: #ffffff; border-radius: 19px 19px 0px 0px; background-color: #222; border-radius: 19px 19px 0px 0px; ">
			<h3 class="h3-responsive p-2 text-center text-white" style="margin-top:15px; font-family: 'Quicksand', sans-serif;font-size:30px; font-weight:bold ;"><b>Faculty Registration Form<b></h3>
		</div>
		<div class="card-body">
			<div class="container-fluid">
				<form class="p-3 grey-text" method="post" action="register.php">
					<div class="row">					
						<div class="col-md-6">
							<div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
				              <input type="text" id="nameOfCompany" class="form-control form-control-sm" name="nameOfCompany">
				              <label for="nameOfCompany">Faculty Name</label>
				            </div>
				            <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
				              <input type="text" id="aboutCompany" class="form-control form-control-sm" name="aboutCompany">
				              <label for="aboutCompany">Faculty Department</label>
				            </div>
				            <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
				              <input type="email" id="email" class="form-control form-control-sm" name="email">
				              <label for="email">Email</label>
				            </div>
				            <div class="md-form form-sm"> <i class="fas fa-lock prefix"></i>
				              <input type="password" id="password" class="form-control form-control-sm" name="password">
				              <label for="password">Password</label>
				            </div>
				            <div class="md-form form-sm"> <i class="fas fa-map prefix"></i>
				              <input type="text" id="address1" class="form-control form-control-sm" name="address1">
				              <label for="address1">Address1</label>
				            </div>
							<div class="md-form form-sm"> <i class="fas fa-map-marker-alt prefix"></i>
				              <input type="text" id="address2" class="form-control form-control-sm" name="address2">
				              <label for="address2">Address2</label>
				            </div>
						</div>
						<div class="col-md-6">
				            <div class="md-form form-sm"> <i class="fas fa-map-marker-alt prefix"></i>
				              <input type="text" id="city" class="form-control form-control-sm" name="city">
				              <label for="city">City</label>
				            </div>
				            <div class="md-form form-sm"> <i class="fas fa-map-marker-alt prefix"></i>
				              <input type="text" id="state" class="form-control form-control-sm" name="state">
				              <label for="state">State</label>
				            </div>
				            <div class="md-form form-sm"> <i class="fas fa-map-marker-alt prefix"></i>
				              <input type="text" id="zipcode" class="form-control form-control-sm" name="zipcode">
				              <label for="zipcode">Zipcode</label>
				            </div>
				            <div class="md-form form-sm"> <i class="fas fa-phone prefix"></i>
				              <input type="text" id="phone" class="form-control form-control-sm" name="phone">
				              <label for="phone">Phone</label>
				            </div>
				            <div class="md-form form-sm"> <i class="fas fa-map-marker-alt prefix"></i>
				              <input type="text" id="country" class="form-control form-control-sm" name="country" value="India">
				              <label for="country">Country</label>
				            </div>
						</div>
						<div class="text-center mt-4">
			              	<button class="btn btn-default" type="submit" name="submit" style="background: none;
    border: none;
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    font-size: 14px;
    margin-bottom:15px;
    padding: 15px 25px;
    border-radius: 10px;
    background: linear-gradient(45deg, #d5135a, #f05924);
    box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.35);
    color: #fff;">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
			            </div>					
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
	if(isset($_POST['submit'])){
		$ip = getIp();
		$nameOfCompany = sanitize($_POST['nameOfCompany']);
		$aboutCompany = sanitize($_POST['aboutCompany']);
		$email = sanitize($_POST['email']);
		$password = sanitize($_POST['password']);
		$address1 = sanitize($_POST['address1']);
		$address2 = sanitize($_POST['address2']);
		$city = sanitize($_POST['city']);
		$state = sanitize($_POST['state']);
		$zipcode = sanitize($_POST['zipcode']);
		$phone = sanitize($_POST['phone']);
		$country = sanitize($_POST['country']);

		$insertEmp = "INSERT INTO employer (ip,nameOfCompany,aboutCompany,email,password,address1,address2,city,state,zipcode,phone,country) VALUES ('$ip','$nameOfCompany','$aboutCompany','$email','$password','$address1','$address2','$city','$state','$zipcode','$phone','$country')";
		$db->query($insertEmp);

		
		if($db){
			$_SESSION['email'] = $email;
			echo "<script>alert('Account has been created successfully')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}else{
			$_SESSION['email'] = $email;

			echo "<script>alert('Account has been created successfully')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
?>

<?php include 'includes/footer.php';?>