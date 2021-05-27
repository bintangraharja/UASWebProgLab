<!DOCTYPE html>
<html>
<head>
	<title>Hotel UAS IF430 - XXX</title>
	<?php
	echo $style;
	echo $script;
	?>
	<script>
		$(document).ready(function(){
			$('.captcha-refresh').on('click', function(){
				$.get('<?php echo base_url().'login/refresh'; ?>', function(data){
					$('#image_captcha').html(data);
				});
			});
		});
	</script>
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
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
						<form action="" method="POST">
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
									<?php echo $captchaImg; ?>
									<a href="javascript:void(0);"><button class="btn" style="background-color: #858585; color: white;"><span class="glyphicon glyphicon-refresh"></span></button></a>
									<input type="text" name="captcha" />
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