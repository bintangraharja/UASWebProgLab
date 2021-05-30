<?php 
echo $sidebar; ?>
<!DOCTYPE html>
<html>
<body class="home" style= "background-image: url('http://localhost/UASWebprogLab/assets/HomeBG.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-6">
				
			</div>
			<div class="col-6" style="background-color: rgba(153, 225, 217, 0.64); padding-bottom: 80px;">
				<div class="row">
					<div class="col-6 align-self-center">
						<h2>MY ACCOUNT</h2>
					</div>
					<div class="col-6" style="font-size: 24px;">
						<?php if($user['Pict'] != NULL){?>
						<img src="<?php echo site_url('Account/getImg');?>" style="width: 250px; height: 250px; padding: 10px; border-radius: 50%;">
						<?php }else{?>
						<i class="fas fa-user-circle fa-9x" style="padding: 10px;"></i>
						<?php }?>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-3 d-flex justify-content-end">
							<i class="fas fa-user-alt fa-2x" style="background-color: white; border-radius: 25px; padding: 10px;"></i>
						</div>
					<div class="col-6 align-self-center">
						<h3><?php echo $user['FName'].' '.$user['LName']?></h3>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-3 d-flex justify-content-end">
							<i class="fas fa-envelope fa-2x" style="background-color: white; border-radius: 25px; padding: 10px;"></i>
						</div>
					<div class="col-6 align-self-center">
						<h3><?php echo $user['Email']?></h3>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-3 d-flex justify-content-end">
							<i class="fas fa-calendar-alt fa-2x" style="background-color: white; border-radius: 25px; padding: 10px;"></i>
						</div>
					<div class="col-6 align-self-center">
						<h3><?php echo $user['BDay']?></h3>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-3 d-flex justify-content-end">
							<i class="fas fa-phone fa-2x" style="background-color: white; border-radius: 25px; padding: 10px;"></i>
						</div>
					<div class="col-6 align-self-center">
						<h3><?php echo $user['PNumber']?></h3>
					</div>
				</div>
				<br><br>
				<div class="row d-flex justify-content-end" style="margin-right: 50px;">
					<a href="<?=site_url('EditProfile');?>"><button class="btn btn-lg btnEdit btn-block" style="margin-right: 10px;">EDIT PROFILE</button></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>