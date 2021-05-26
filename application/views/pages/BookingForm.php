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
<body style="background: #DBDBDB;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<a href="DetailHotel.php">
					<button type="submit" class="btn btnBack text-right" style="margin-top: 100px; margin-left: 50px;">
						<span class="fas fa-angle-double-left"></span> Back
					</button>
				</a>
			</div>
			<div class="col-8 bookForm" style="padding-bottom: 20px;">
				<div style="padding: 10px;">
					<div class="row d-flex justify-content-center">
						<div class="col-md-6 text-center">
							<h1>Hotel Reservation Room</h1>
						</div>
					</div>
					<hr style="border-color: black;">
					<div class="row">
						<div class="col-3">
							<p>Hotel</p>
							<p>Room Type</p>
							<p>Address</p>
							<p>Phone Number</p>
						</div>
						<div class="col-9">
							<p>: Hotel's Name</p>
							<p>: Room Type Name</p>
							<p>: Hotel's Address, Indonesia</p>
							<p>: Hotel's Phone Number</p>
						</div>
					</div>
					<hr style="border-color: black;">
					<form action="">
						<div class="form-group row">
							<label class="col-3 col-form-label">Guest Name</label>
							<div class="col-5">
								<input type="text" class="form-control bForm" name="guestName">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Phone Number</label>
							<div class="col-5">
								<input type="tel" class="form-control bForm" name="pNumber">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Email</label>
							<div class="col-5">
								<input type="email" class="form-control bForm" name="email">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Room Quantity</label>
							<div class="col-5">
								<div class="input-group input-number-group">
		                            <div class="input-group-button">
		                                <span class="input-number-decrement">-</span>
		                            </div>
		                            <input type="number" class="input-number" name="durations" value="1" min="1" max="30">
		                            <div class="input-group-button">
		                                <span class="input-number-increment">+</span>
		                            </div>
		                        </div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-4 text-center">
								<label>Check-In</label>
						    	<div class="form-group">
							        <input type="date" class="form-control bForm" name="bdate">
								</div>
							</div>
							<div class="col-4 text-center">
								<label>Check-Out</label>
						    	<div class="form-group">
							        <input type="date" class="form-control bForm" name="bdate">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Subtotal</label>
							<p class="col-5" style="font-weight: bold;">Rp 4.500.000,-</p>
						</div>
						<div class="row" style="float: right; margin: 10px;">
							<input type="submit" class="btn btnYes" name="book2" value="BOOK HOTEL">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('.input-number-increment').click(function() {
			var $input = $(this).parents('.input-number-group').find('.input-number');
			var val = parseInt($input.val(), 10);
			$input.val(val + 1);
		});
		$('.input-number-decrement').click(function() {
			var $input = $(this).parents('.input-number-group').find('.input-number');
			var val = parseInt($input.val(), 10);
			$input.val(val - 1);
		})
	</script>
</body>
</html>