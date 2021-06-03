<!DOCTYPE html>
<html>
<?php
	echo $style;
	echo $script;
?>
<body class="home" style="background-image: url('http://localhost/UASWebprogLab/assets/HomeBG.jpg');">
	<div class="container-fluid" style="margin-top: 15px; padding-right: 100px; position: fixed;">
		<div class="row">
			<div class="col-3 d-flex justify-content-end">
				<div class="d-flex align-items-end">
					<a href="<?=site_url('Admin');?>"><button type="submit" class="btn btnBack btn-lg"><i class="fas fa-angle-double-left"></i> Back</button></a>
				</div>
			</div>
			<div class="col">
				<div class="row d-flex justify-content-end">
					<img src="http://localhost/UASWebprogLab/assets/logo.png" style="width: 300px; height: 100px; margin-left: 20px;">
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="padding-top: 5%; margin-bottom: 15px; padding-left: 100px;">
		<div class="row" style="padding-left: 22%;">
			<div class="col-9">
				<div class="container">
					<div class="row">
						<div class="col" style="background: #C4C4C4; border-radius: 5px; padding: 15px;">
							<div class="row d-flex justify-content-center">
								<div class="col-md-6 text-center">
									<h1>Add Hotel</h1>
								</div>
							</div>
							<div class="row" style="background-color: #99E1D9; padding: 5px;">
								<h5 class="col">Hotel's Information</h5>
							</div>
							<br>
							<?php echo form_open_multipart();?>
								<div class="form-group row">
									<label class="col-3 col-form-label">Hotel's ID</label>
									<div class="col-7">
										<input type="text" id="hotelID" class="form-control" name="hotelID" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-3 col-form-label">Hotel's Name</label>
									<div class="col-7">
										<input type="text" class="form-control" name="hotelName" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-3 col-form-label">Hotel's Rating</label>
									<div class="col-7">
										<input type="text" class="form-control" name="rating" required>
										<small class="text-muted"><?php echo form_error('rating');?></small>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-3 col-form-label">Hotel's Number</label>
									<div class="col-7">
										<input type="tel" class="form-control" name="hnumber" required>
										<small class="text-muted"><?php echo form_error('hnumber');?></small>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-3 col-form-label">Hotel's Address</label>
									<div class="col-7">
										<textarea type="text" class="form-control" name="address" required></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-3 col-form-label">Hotel's Description</label>
									<div class="col-7">
										<textarea type="text" class="form-control" name="description" required></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-3 col-form-label" for="ppicture" >Hotel's Main Photo</label>
									<div class="col-7 align-self-center">
										<input type="file" name="hotelPict" required>
									</div>
								</div>
								<div class="row" style="background-color: #99E1D9; padding: 5px;">
									<h5 class="col">Hotel's Facilities</h5>
								</div>
								<div class="row" style="padding-top: 10px;">
									<div class="col-4">
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="MeetingRoom" value="1">Meeting Room
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="SwimmingPool" value="1">Swimming Pool
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="Restaurant" value="1">Restaurant
												</label>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="Receptionist24" value="1">Receptionist 24 Hours
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="PUAirport" value="1">Picked Up from Airport
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="Spa" value="1">Spa
												</label>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="Gym" value="1">Gym
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="Bar" value="1">Bar
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="WiFi" value="1">WiFi
												</label>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row" style="margin-left: 15px;">
									<div class="col-4">
										<div class="form-group">
											<label>1st Photo</label>
											<div class="row">
												<input type="file" name="hotelPict1" required>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<label>2nd Photo</label>
											<div class="row">
												<input type="file" name="hotelPict2" required>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<label>3rd Photo</label>
											<div class="row">
												<input type="file" name="hotelPict3" required>
											</div>
										</div>
									</div>
								</div>
								<div class="row" style="background-color: #99E1D9; padding: 5px;">
									<h5 class="col">Hotel's Rooms</h5>
								</div>
								<br>
								<div class="form-group row">
									<label class="col-4 col-form-label">Room's ID</label>
									<div class="col-7">
										<input type="text" id="roomID" class="form-control" name="roomID" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Room's Name</label>
									<div class="col-7">
										<input type="text" class="form-control" name="roomName" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Room's Qty</label>
									<div class="col-7">
										<input type="number" class="form-control" name="rqty" required>
										<small class="text-muted"><?php echo form_error('rqty');?></small>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Room's Price</label>
									<div class="col-7">
										<input type="text" class="form-control" name="roomPrice" required>
										<small class="text-muted"><?php echo form_error('roomPrice');?></small>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Room's Facilities</label>
									<div class="col-7">
										<textarea class="form-control" name="roomFacilities" required></textarea> 
										<div class="row">
											<div class="col">
												<small>Template : &lt;li&gt; facility 1 &lt;/li&gt; <br>
												 &lt;li&gt; facility 2 &lt;/li&gt; <br>
												&lt;li&gt; Area &lt;sup&gt;2&lt;/sup&gt; &lt;/li&gt;</small>
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-4 col-form-label" for="ppicture">Room's Photo</label>
									<div class="col-7 align-self-center">
										<input type="file" name="roomPict" required>
									</div>
								</div>
								<div class="row d-flex justify-content-end" style="padding-right: 10px;">
									<input type="submit" class="btn btnYes" name="addHotel" value="SUBMIT">
								</div>
							<?php echo form_close();?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	$(document).ready(function(){
		
		var HotelId = '<?=$lastHotel['HotelID']?>';
		var TempHid = parseInt(HotelId.substr(1,5))+1;
		var Hid = (TempHid < 10 ? '000'+TempHid : TempHid < 100? '00'+TempHid : TempHid);
		$('#hotelID').val('H'+Hid);
		$('#roomID').val('R'+Hid+'01');
	});
</script>
</html>