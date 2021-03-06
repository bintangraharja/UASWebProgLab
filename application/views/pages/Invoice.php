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
	<div class="container-fluid" style="padding-left: 50px; padding-right: 50px;">
		<div class="row">
			<div class="col-4" style="background: #BB6BD9;">
				<h2><u>INVOICE</u></h2>
				<p>Invoice to : </p>
				<h4 style="font-weight: bold;"><?php echo $invoice[0]['GName']?></h4>
				<h4 style="color: white;"><?php echo $invoice[0]['UserID']?></h4>
				<h4 style="color: white;"><?php echo $invoice[0]['Email']?></h4>
			</div>
			<div class="col-2">
				<div class="row d-flex justify-content-center">
					<img src="http://localhost/UASWebprogLab/assets/paid.png" style="width: 110px; height: 110px; margin: 15px; background-color: #99E1D9; border-radius: 50%;">
				</div>
				<div class="row d-flex justify-content-center">
					<h5>Your Booking ID</h5>
				</div>
				<div class="row d-flex justify-content-center">
					<h5 style="font-weight: bold;"><?php echo $invoice[0]['BookingID']?></h5>
				</div>
			</div>
			<div class="col-6 d-flex justify-content-end">
				<img src="http://localhost/UASWebprogLab/assets/logo.png" style="width: 300px; height: 100px; margin-left: 20px;">
			</div>
		</div>
		<br>
		<div class="row">
			<h2>Details</h2>
		</div>
		<div class="row">
			<div class="container-fluid" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 5px; border: 2px solid white;">
				<p style="color: rgba(0, 0, 0, 0.5);">Payment Time</p>
				<p><?php echo $invoice[0]['BookingTime']?></p>
				<hr style="border-color: white;">
				<div class="container-fluid">
					<div class="row text-center">
						<div class="col-1">
							<h5>No</h5>
						</div>
						<div class="col-3">
							<h5>Hotel Name</h5>
						</div>
						<div class="col-2">
							<h5>Room Type</h5>
						</div>
						<div class="col-1">
							<h5>Qty</h5>
						</div>
						<div class="col-2">
							<h5>Check-In / Check-Out</h5>
						</div>
						<div class="col-1">
							<h5>Duration</h5>
						</div>
						<div class="col-2">
							<h5>Price</h5>
						</div>
					</div>
					<hr style="border-color: rgba(0, 0, 0, 0.25);">
					<div class="row text-center">
						<div class="col-1">
							<p>1</p>
						</div>
						<div class="col-3">
							<p><?php echo $invoice[0]['HotelName']?></p>
						</div>
						<div class="col-2">
							<p><?php echo $invoice[0]['RoomName']?></p>
						</div>
						<div class="col-1">
							<p><?php echo $invoice[0]['RoomQty']?></p>
						</div>
						<div class="col-2">
							<p><?php 
                        		$original = $invoice[0]['CheckIn'];
                        		$newDate = date("d-m-Y", strtotime($original));
                        		$date = date_create("$newDate 0:00:00");
                        		echo date_format($date,"d F Y");
                        		?> - 
								<?php 
								$original = $invoice[0]['CheckOut'];
								$newDate = date("d-m-Y", strtotime($original));
								$date = date_create("$newDate 0:00:00");
								echo date_format($date,"d F Y");
								?>
							</p>
						</div>
						<div class="col-1">
							<p><?php echo $invoice[0]['Duration']?> Days</p>
						</div>
						<div class="col-2">
							<p>Rp <?php echo $invoice[0]['Price']?>,-</p>
						</div>
					</div>
				</div>
				<hr style="border-color: white;">
				<!-- <p class="text-right">Subtotal Rp 14.993.994,-</p> -->
				<div class="row">
					<div class="col-8"></div>
					<div class="col-1 text-right">
						<p>Subtotal</p>
					</div>
					<div class="col-3 text-center" style="font-weight: bold;">
						<p>Rp <?php echo $invoice[0]['Subtotal']?>,-</p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row d-flex justify-content-end" style="margin-right: 20px;">
			<?php if($this->session->userdata('userID') == 'ADMIN'){ ?>
			<a href="<?php echo site_url('Admin/BookHistory')?>"><button class="btn btnYes btn-block" style="margin-left: 20px; margin-right: 20px;">DONE</button></a>
			<?php }else{?>
			<a href="<?php echo site_url('BookingHistory')?>"><button class="btn btnYes btn-block" style="margin-left: 20px; margin-right: 20px;">DONE</button></a>
			<?php }?>
		</div>
	</div>
</body>
</html>