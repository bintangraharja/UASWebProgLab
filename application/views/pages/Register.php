<!DOCTYPE html>
<html>
<head>
	<title>Hotel UAS IF430 - My Hotel</title>
	<?php
	echo $style;
	echo $script;
	?>
	
</head>
<body style="background: #DBDBDB;">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-5 align-self-center">
				<p>If you already have an account, please</p>
				<a href="<?php echo site_url('Login');?>"><h3>LOGIN</h3></a>
				<h2 class="text-center">/</h2>
				<p>If you are a new member here, please</p>
				<a href="<?php echo site_url('Register');?>"><h3 class="text-right">REGISTER</h3></a>
				<a href="<?php echo site_url('Home');?>"><button type="submit" class="btn btnBack"><i class="fas fa-angle-double-left"></i> Back</button></a>
			</div>
			<div class="col-7">
				<div class="container" style="background: white; border-radius: 5px;">
					<div style="padding: 25px;">
						<?php echo form_open_multipart('Register');?>
						<div class="form-group row">
							<div class="col">
								<input type="text" class="form-control" name="fname" placeholder="First Name" required>
							</div>
							<div class="col">
								<input type="text" class="form-control" name="lname" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
					        <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
						</div>
						<div class="form-group row">
							<div class="col">
								<input type="password" class="form-control" name="password" placeholder="Password" required>
								<small class="text-muted">Password min 8 characters</small>
							</div>
							<div class="col">
								<input type="password" class="form-control" name="passwordconf" placeholder="Retype Password" required>
								<small class="text-muted"><?php echo form_error('passwordconf');?></small>
							</div>
						</div>
						<div class="form-group">
					        <input type="date" class="form-control" name="bdate" placeholder="(dd/mm/yyyy)" required>
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" name="pnumber" placeholder="08777878939" required>
							<small class="text-muted"><?php echo form_error('pnumber');?></small>
						</div>
						<div class="form-group">
							<label for="ppicture" style="color: black;">Upload Profile Picture</label>
							<br>
							<input type="file" name="ppicture" id="" >
						</div>
						<div class="row d-flex justify-content-center">
							<div class="col-md-4 text-center">
								<input type="submit" class="btn btnYes btn-block" style="border-radius: 30px;" name="signUp" value="Sign Up" >
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