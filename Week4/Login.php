<!doctype html>
<html lang="en">
  <head>
  	<title>Login PMB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="dist_Login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(dist_Login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="index.php" method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input name="username" type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<input type="submit" name="SignIn" class="form-control btn btn-primary submit px-3">
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="dist_Login/js/jquery.min.js"></script>
  <script src="dist_Login/js/popper.js"></script>
  <script src="dist_Login/js/bootstrap.min.js"></script>
  <script src="dist_Login/js/main.js"></script>

	</body>
</html>

<?php
session_start(); //Mulai Session

// Cek data User
if(isset($_POST["SignIn"])){
	$name = $_POST["username"];
	$password = $_POST["password"];
	// Ambil data User
	// Logik Jika User name is true redirect ke Halaman Lain
		if ($name === "Andhika" && $password === "123"){
			$_SESSION["username"] = $username;
			header("location: Home.php");
			exit();
		}else{
			header("location: index.php");
			exit();
		};
};
?>