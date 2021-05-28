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
	<div class="container-fluid" style="padding-left: 50px; padding-right: 50px;">
		<div class="row">
			<div class="col-2" style="background: #BB6BD9;">
				<h2><u>INVOICE</u></h2>
				<p>Invoice to : </p>
				<h4 style="font-weight: bold;"><?php echo $invoice[0]['Name']?></h4>
				<h4 style="color: white;"><?php echo $invoice[0]['UserID']?></h4>
				<h4 style="color: white;"><?php echo $invoice[0]['Email']?></h4>
			</div>
			<div class="col-2">
				<div class="row d-flex justify-content-center">
					<img src="./Gallery/paid.png" style="width: 110px; height: 110px; margin: 15px; background-color: #99E1D9; border-radius: 50%;">
				</div>
				<div class="row d-flex justify-content-center">
					<h5>Your Booking ID</h5>
					<h5 style="font-weight: bold;"><?php echo $invoice[0]['BookingID']?></h5>
				</div>
			</div>
			<div class="col-8 d-flex justify-content-end">
				<!-- Logo Potrait/Landscape -->
				<img src="./Gallery/example.jpg" style="width: 100px; height: 100px; margin: 20px;">
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
						<div class="col-3">
							<h5>Room Type</h5>
						</div>
						<div class="col-1">
							<h5>Qty</h5>
						</div>
						<div class="col-1">
							<h5>Duration</h5>
						</div>
						<div class="col-3">
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
						<div class="col-3">
							<p><?php echo $invoice[0]['RoomName']?></p>
						</div>
						<div class="col-1">
							<p><?php echo $invoice[0]['RoomQty']?></p>
						</div>
						<div class="col-1">
							<p><?php echo $invoice[0]['Duration']?> Days</p>
						</div>
						<div class="col-3">
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
			<a href="<?php echo site_url('BookingHistory')?>"><button class="btn btnYes btn-block" style="margin-left: 20px; margin-right: 20px;">DONE</button></a>
		</div>
	</div>
</body>
</html>