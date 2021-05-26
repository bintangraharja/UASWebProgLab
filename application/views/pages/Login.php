<!DOCTYPE html>
<html>
<head>
	<title>Hotel UAS IF430 - XXX</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body style="background: #DBDBDB;">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-5 align-self-center">
				<p>If you already have an account, please</p>
				<a href="Login.php"><h3>LOGIN</h3></a>
				<h2 class="text-center">/</h2>
				<p>If you are a new member here, please</p>
				<a href="Register.php"><h3 class="text-right">REGISTER</h3></a>
				<a href="HomePage.php"><button type="submit" class="btn btnBack"><i class="fas fa-angle-double-left"></i> Back</button></a>
			</div>
			<div class="col-7">
				<div class="container" style="background: white; border-radius: 5px;">
					<div style="padding: 25px;">
							<form actipn="">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
						        	<span class="input-group-text fas fa-envelope"></span>
						        </div>
						        <input type="email" class="form-control" name="email" id="inlineFormInputGroup" placeholder="example@gmail.com">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
						        	<span class="input-group-text fas fa-lock"></span>
						        </div>
						        <input type="password" class="form-control" name="password" placeholder="********">
							</div>
							<div class="form-group row">
								<div class="">
						        	<!-- insert captcha -->
						        </div>
							</div>
							<div class="row d-flex justify-content-center">
								<div class="col-md-4 text-center">
									<input type="submit" class="btn btnYes btn-block" style="border-radius: 30px;" name="signIn" value="Sign In" >
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>