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
</head>
<body style="background: #BDBDBD;">
	<div class="container-fluid">
		<div class="row d-flex justify-content-center" style="margin-top: 35px;">
			<div class="col-5">
				<div class="container" style="background: white; border-radius: 5px; padding-bottom: 25px;">
					<div style="padding: 25px;">
						<div class="row d-flex justify-content-center">
							<div class="col-md-6 text-center">
								<h1>Edit Profile</h1>
							</div>
						</div>
						<br>
						<form actipn="">
							<div class="form-group row">
								<div class="col">
									<input type="text" class="form-control" name="fname" placeholder="First Name">
								</div>
								<div class="col">
									<input type="text" class="form-control" name="lname" placeholder="Last Name">
								</div>
							</div>
							<div class="form-group">
						        <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
							</div>
							<div class="form-group row">
								<div class="col">
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>
								<div class="col">
									<input type="password" class="form-control" name="password" placeholder="Retype Password">
								</div>
							</div>
							<div class="form-group">
						        <input type="date" class="form-control" name="bdate" placeholder="(dd/mm/yyyy)">
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" name="pnumber" placeholder="0877-787-8939">
							</div>
							<br>
							<div class="form-group">
								<div class="row" style="margin-left: 5px;">
									<label for="ppicture" style="color: black;">Upload Profile Picture</label>
								</div>
								<input type="file" name="picture" id="" required>
							</div>
							<br>
							<div class="row d-flex justify-content-center">
								<div class="col-md-4 text-center">
									<input type="submit" class="btn btnYes btn-block" style="border-radius: 30px;" name="update" value="Update" >
								</div>
							</div>
							<br>
						</form>
						<div class="row d-flex justify-content-center">
							<div class="col-md-4 text-center">
								<a href="MyAccount.php"><button class="btn btnBack btn-block" style="padding: 5px;">CANCEL</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>