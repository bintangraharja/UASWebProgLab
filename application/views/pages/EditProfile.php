<!DOCTYPE html>
<html>
<head>
	<title>Hotel UAS IF430 - Hotel.io</title>
	<?php
	echo $style;
	echo $script;
	?>
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
						<?php echo form_open_multipart('EditProfile');?>
							<div class="form-group row">
								<div class="col">
									<input type="text" class="form-control" name="fname" placeholder="First Name" value=<?=$profile['FName'];?>>
								</div>
								<div class="col">
									<input type="text" class="form-control" name="lname" placeholder="Last Name" value=<?=$profile['LName'];?>>
								</div>
							</div>
							<div class="form-group">
						        <input type="email" class="form-control" name="email" placeholder="example@gmail.com" value=<?=$profile['Email'];?> readonly>
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
						        <input type="date" class="form-control" name="bdate" placeholder="(dd/mm/yyyy) " value=<?=$profile['BDay'];?>>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" name="pnumber" placeholder="0877-787-8939" value=<?=$profile['PNumber'];?>>
								<small class="text-muted"><?php echo form_error('pnumber');?></small>
							</div>
							<br>
							<div class="form-group">
								<div class="row" style="margin-left: 5px;">
									<label for="ppicture" style="color: black;">Upload Profile Picture</label>
								</div>
								<input type="file" name="ppicture" id="" >
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
								<a href="<?=site_url('Account');?>"><button class="btn btnBack btn-block" style="padding: 5px;">CANCEL</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>