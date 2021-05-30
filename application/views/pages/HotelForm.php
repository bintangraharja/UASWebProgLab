<?php
	echo $style;
	echo $script;
?>

<!DOCTYPE html>
<html>
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
					<!-- Logo Potrait/Landscape -->
					<img src="./Gallery/example.jpg" style="width: 100px; height: 100px; margin-left: 20px;">
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
							<form action="">
								<div class="form-group row">
									<label class="col-3 col-form-label">Hotel's ID</label>
									<div class="col-7">
										<input type="text" class="form-control" name="hotelID" required>
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
									</div>
								</div>
								<div class="form-group row">
									<label class="col-3 col-form-label">Hotel's Number</label>
									<div class="col-7">
										<input type="tel" class="form-control" name="hnumber" required>
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
												<input type="checkbox" class="form-check-input" value="">Meeting Room
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">Swimming Pool
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">Restaurant
												</label>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">Receptionist 24 Hours
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">Picked Up from Airport
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">Spa
												</label>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">Gym
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">Bar
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">WiFi
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
												<input type="file" name="hotelPict1">
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<label>2nd Photo</label>
											<div class="row">
												<input type="file" name="hotelPict2">
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="form-group">
											<label>3rd Photo</label>
											<div class="row">
												<input type="file" name="hotelPict3">
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
										<input type="text" class="form-control" name="roomID" required>
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
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Room's Price</label>
									<div class="col-7">
										<input type="text" class="form-control" name="roomPrice" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Room's Facilities</label>
									<div class="col-7">
										<textarea class="form-control" name="roomFacilities" required></textarea> 
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
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>