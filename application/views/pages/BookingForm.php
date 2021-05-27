<!DOCTYPE html>
<html>
<head>
	<title>Hotel UAS IF430 - XXX</title>
	<?php 
		echo $style;
		echo $script;
	?>
	</head>
<body style="background: #DBDBDB;">
	<?php
		foreach($dataForm as $data){
			$HotelID = $data['HotelID'];
			$RoomID = $data['RoomID'];
			$HotelName = $data['HotelName'];
			$RoomName = $data['RoomName'];
			$Address = $data['Address'];
			$Qty = $data['Qty'];
			$Price = $data['Price'];
			$Number = $data['Number'];
			$totalPrice = $Price;
		}
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<a href="<?=site_url('DetailHotel').'/'.$HotelID;?>">
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
							<p>: <?=$HotelName?></p>
							<p>: <?=$RoomName?></p>
							<p>: <?=$Address?></p>
							<p>: <?=$Number;?></p>
						</div>
					</div>
					<hr style="border-color: black;">
					<form action="<?=site_url('BookingForm/book');?>" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Guest Name</label>
							<div class="col-5">
								<input type="text" class="form-control bForm" name="GName" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Phone Number</label>
							<div class="col-5">
								<input type="tel" class="form-control bForm" name="PNumber" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Email</label>
							<div class="col-5">
								<input type="email" class="form-control bForm" name="Email" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Room Quantity</label>
							<div class="col-5">
								<div class="input-group input-number-group">
		                            <div class="input-group-button">
		                                <span class="input-number-decrement">-</span>
		                            </div>
		                            <input id="Qty" type="number" class="input-number" name="RoomQty" value="1" min="1" max="30">
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
							        <input type="date" id="checkin" class="form-control bForm" name="CheckIn"  required>
								</div>
							</div>
							<div class="col-4 text-center">
								<label>Check-Out</label>
						    	<div class="form-group">
							        <input type="date" id="checkout" class="form-control bForm" name="CheckOut" required>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Subtotal</label>
							<p class="col-5 subtotal" style="font-weight: bold;">Rp <?=$totalPrice?>,-</p>
							<input type="hidden" class="submitTotal" name="Subtotal" value="<?php echo $totalPrice;?>">
							<input type="hidden" class="duration" name="Duration" value="1"> 
							<input type="hidden"  name="HotelID" value="<?=$HotelID;?>">
							<input type="hidden"  name="RoomID" value="<?=$RoomID;?>">

						</div>
						<div class="row" style="float: right; margin: 10px;">
							<input type="submit" class="btn btnYes" name="submit" value="BOOK HOTEL">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
	$(document).ready(function(){
		Date.prototype.toDateInputValue = (function() {
			var local = new Date(this);
			local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
			return local.toJSON().slice(0,10);
		});
		document.getElementById('checkin').value = new Date().toDateInputValue();
		document.getElementById('checkout').value = new Date(new Date().getTime() + 24 * 60 * 60 * 1000).toJSON().slice(0,10);

		$('#checkin').change(function(){
			var cek = GetDays();
			if(cek < 1){
				var checkout = new Date(document.getElementById("checkout").value);
				document.getElementById('checkin').value = new Date(parseInt(checkout  -1)).toJSON().slice(0,10);
			}
			update_subtotal();
		});
		$('#checkout').change(function(){
			var cek = GetDays();
			if(cek < 1){
				document.getElementById('checkout').value = "";
			}
			update_subtotal();
		});
		function GetDays(){
            var checkin = new Date(document.getElementById("checkin").value);
            var checkout = new Date(document.getElementById("checkout").value);
			var duration = parseInt((checkout - checkin) / (24 * 3600 * 1000));
			$(".duration").val(duration);
            return duration;
		}

		$('.input-number-increment').click(function() {
			var $input = $(this).parents('.input-number-group').find('.input-number');
			var val = parseInt($input.val(), 10);
			$input.val(val + 1);
			if($input.val() > <?=$Qty?>){
				$input.val(<?=$Qty?>);
			}
			update_subtotal();
		});
		$('.input-number-decrement').click(function() {
			var $input = $(this).parents('.input-number-group').find('.input-number');
			var val = parseInt($input.val(), 10);
			$input.val(val - 1);
			if($input.val() < 1){
				$input.val(1);
			}
			update_subtotal();
			
		})
		function update_subtotal(){
			var duration = GetDays();
			if(isNaN(duration)){
				duration = 0;
			}
			var qty = document.getElementById('Qty').value
			$(".subtotal").text("Rp "+<?=$Price?>*qty*duration +",-");
			$(".submitTotal").val(<?=$Price?>*qty*duration);
		}

	});
		
	</script>
</body>
</html>