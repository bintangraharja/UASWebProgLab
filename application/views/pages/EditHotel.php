<?php echo $style;
echo $script;?>
<!DOCTYPE html>
<html>
<body class="home" style="background-image: url('http://localhost/UASWebprogLab/assets/HomeBG.jpg');">
	<div class="container-fluid" style="margin-top: 15px; padding-right: 100px; position: fixed;">
		<div class="row">
			<div class="col-3 d-flex justify-content-end">
				<div class="d-flex align-items-end">
					<a href="<?php echo site_url('Admin');?>"><button type="submit" class="btn btnBack btn-lg"><i class="fas fa-angle-double-left"></i> Back</button></a>
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
		<div class="row" style="padding-left: 30%;">
			<div class="col-7">
				<div class="container">
					<!-- form 1 - edit hotel -->
					<div class="row">
						<div class="col" style="background: #C4C4C4; border-radius: 5px; padding: 15px;">
							<div class="row d-flex justify-content-center">
								<div class="col-md-6 text-center">
									<h1>Edit Hotel</h1>
								</div>
							</div>
							<div class="row" style="background-color: #99E1D9; padding: 5px;">
								<h5 class="col">Hotel's Information</h5>
							</div>
							<br>
							<?php echo form_open_multipart('Admin/editHotel/'.$hotel[0]['HotelID']);?>
								<div class="form-group row">
									<label class="col-4 col-form-label">Hotel's ID</label>
									<div class="col-7">
										<input type="text" value="<?= $hotel[0]['HotelID']?>" class="form-control" name="hotelID" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Hotel's Name</label>
									<div class="col-7">
										<input type="text" value="<?= $hotel[0]['HotelName']?>" class="form-control" name="hotelName" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Hotel's Rating</label>
									<div class="col-7">
										<input type="text" value="<?= $hotel[0]['Rating']?>" class="form-control" name="rating" required>
										<small class="text-muted"><?php echo form_error('rating');?></small>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Hotel's Number</label>
									<div class="col-7">
										<input type="tel" class="form-control" name="hnumber">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Hotel's Address</label>
									<div class="col-7">
										<textarea required type="text" class="form-control" name="address"><?= $hotel[0]['Address']?></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label">Hotel's Description</label>
									<div class="col-7">
										<textarea type="text" class="form-control" name="description"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-4 col-form-label" for="ppicture" >Hotel's Main Photo</label>
									<div class="col-7 align-self-center">
										<input type="file" name="hotelPict">
									</div>
								</div>
								<div class="row d-flex justify-content-end" style="padding-right: 15px;">
									<input type="submit" class="btn btnYes" name="updateHotel" value="UPDATE">
								</div>
							</form>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col" style="background: #C4C4C4; border-radius: 5px;">
							<div class="row" style="background-color: #99E1D9; padding: 5px; border-radius: 5px;">
								<h5 class="col">Hotel's Main Facilities</h5>
							</div>
                            <!-- edit facilities -->
							<form action="" method="POST">
								<div class="row" style="padding-top: 10px;">
									<div class="col-4">
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="MeetingRoom" class="form-check-input" value="1" 
												<?php if($facility[0]["MeetingRoom"] != 0){
														echo "checked";
													}
												?>>Meeting Room
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="SwimmingPool" class="form-check-input" value="1"
												<?php if($facility[0]["SwimmingPool"] != 0){
														echo "checked";
													}
												?>>Swimming Pool
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="Restaurant" class="form-check-input" value="1"
												<?php if($facility[0]["Restaurant"] != 0){
														echo "checked";
													}
												?>>Restaurant
												</label>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="Receptionist24" class="form-check-input" value="1"
												<?php if($facility[0]["Receptionist24"] != 0){
														echo "checked";
													}
												?>>Receptionist 24 Hours
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="WiFi" class="form-check-input" value="1"
												<?php if($facility[0]["WiFi"] != 0){
														echo "checked";
													}
												?>>WiFi
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="Spa" class="form-check-input" value="1"
												<?php if($facility[0]["Spa"] != 0){
														echo "checked";
													}
												?>>Spa
												</label>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="Gym" class="form-check-input" value="1"
												<?php if($facility[0]["Gym"] != 0){
														echo "checked";
													}
												?>>Gym
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="Bar" class="form-check-input" value="1"
												<?php if($facility[0]["Bar"] != 0){
														echo "checked";
													}
												?>>Bar
												</label>
											</div>
										</div>
										<div class="row" style="padding-left: 5%;">
											<div class="form-check">
												<label class="form-check-label">
												<input type="checkbox" name="PUAirport" class="form-check-input" value="1"
												<?php if($facility[0]["PUAirport"] != 0){
														echo "checked";
													}
												?>>Picked Up from Airport
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row d-flex justify-content-end" style="padding-right: 15px;">
									<input type="submit" class="btn btnYes" name="updateHotelFacility" value="UPDATE">
								</div>
							</form>
						</div>
					</div>
					<br>
					<!-- edit photo -->
					<div class="row">
						<div class="col" style="background: #C4C4C4; border-radius: 5px; padding-bottom: 10px;">
							<div class="row" style="background-color: #99E1D9; border-radius: 5px; margin-bottom: 10px; padding: 5px;">
								<h5 class="col">Hotel's Facilities</h5>
							</div>
							<?php for($i = 1; $i < 4; $i++){
								
							?>
							<div class="row">
								<div class="col-3">
									<img src="<?php echo site_url('DetailHotel/hotelImg/').$hotel[0]['HotelID'].'/'.$i?>" style="width: 125px; height: 75px;">
								</div>
								<div class="col-6 align-self-center">
									<h4 class="text-center"><?= $i?></h4>
								</div>
								<div class="col-3 align-self-center">
									<a class="editPhoto" data-imageID="<?= $i?>"><button class="btn btnYes">Edit Photo</button></a>
								</div>
							</div>
							<hr style="border-color: black;">
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<!-- edit room type -->
		<div class="row">
			<div class="container">
				<div class="col" style="background: #C4C4C4; border-radius: 5px; padding-bottom: 10px;">
					<div class="row" style="background-color: #99E1D9; border-radius: 5px; padding: 10px;">
						<div class="col-6 align-self-end">
							<h5 class="col">Hotel's Facilities</h5>
						</div>
						<div class="col-6 align-self-end">
							<div class="row d-flex justify-content-end">
								<a id="addRoom"><button class="btn btnYes">Add Room Type</button></a>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-2 text-center">
							<h5>Image</h5>
						</div>
						<div class="col-2 text-center">
							<h5>Room's ID</h5>
						</div>
						<div class="col-2 text-center">
							<h5>Room's Name</h5>
						</div>
						<div class="col-2 text-center">
							<h5>Room's Price</h5>
						</div>
						<div class="col-2 text-center">
							<h5>Room's Facilities</h5>
						</div>
						<div class="col-2 text-center">
							<h5>Action</h5>
						</div>
					</div>
					<hr style="background-color: white;">
					<div class="row">
						<div class="col custom-scrollbar-css p-2" style="height: 250px;">
							<?php 
							$x = 0;
							foreach($room as $row){
								?>
							<div class="row">
								<div class="col-2 text-center">
									<img src="<?php echo site_url('DetailHotel/roomImg/').$hotel[0]['HotelID'].'/'.$row['RoomID'];?>" style="width: 125px; height:85px;">
								</div>
								<div class="col-2 text-center">
									<p><?= $row['RoomID']?></p>
								</div>
								<div class="col-2 text-center">
									<p><?= $row['RoomName']?></p>
								</div>
								<div class="col-2 text-center">
									<p>Rp <?= $row['Price']?>,-</p>
								</div>
								<div class="col-2">
									<?= $row['Facility']?>
								</div>
								<div class="col-2 text-center">
									<a class="editRoom" data-index="<?= $x?>"><button class="btn btnYes">Edit Room</button></a>
								</div>
							</div>
							<hr style="border-color: black;">
							<?php 
						$x++;}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- modal edit photo -->
	<div class="container">
		<div class="modal fade" id="editHotel1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #99E1D9;">
						<h5>Edit Hotel's Facilities</h5>
						<button type="button" class="close" data-dismiss="modal"><span class="fas fa-times-circle" style="color: red;"></span></button>
					</div>
					<div class="modal-body">
						<?php echo form_open_multipart();?>
							<div class="form-group row">
								<label class="col-4 col-form-label">Image's ID</label>
								<div class="col-7">
									<input type="text" id="photoimageID" class="form-control" name="imageID" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-4 col-form-label" for="ppicture" >Hotel's Image</label>
								<div class="col-7 align-self-center">
									<input type="file" name="hotelFacilityPict" required/>
								</div>
							</div>
							<div class="row d-flex justify-content-end" style="padding-right: 10px;">
								<input type="submit" class="btn btnYes" name="updatePhoto" value="UPDATE">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- modal add room -->
	<div class="container">
		<div class="modal fade" id="editHotel2" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #99E1D9;">
						<h5>Add Hotel's Room</h5>
						<button type="button" class="close" data-dismiss="modal"><span class="fas fa-times-circle" style="color: red;"></span></button>
					</div>
					<div class="modal-body">
					<?php echo form_open_multipart();?>
						<div class="form-group row">
							<label class="col-4 col-form-label">Room's ID</label>
							<div class="col-7">
								<input type="text" class="form-control" name="roomID">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-form-label">Room's Name</label>
							<div class="col-7">
								<input type="text" class="form-control" name="roomName">
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
								<input type="text" class="form-control" name="roomPrice" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-form-label">Room's Facilities</label>
							<div class="col-7">
								<textarea class="form-control" name="roomFacilities"></textarea> 
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-form-label" for="ppicture" >Room's Photo</label>
							<div class="col-7 align-self-center">
								<input type="file" name="roomPict">
							</div>
						</div>
						<div class="row d-flex justify-content-end" style="padding-right: 10px;">
							<input type="submit" class="btn btnYes" name="addRoom" value="SUBMIT">
						</div>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- modal edit room -->
	<div class="container">
		<div class="modal fade" id="editHotel3" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #99E1D9;">
						<h5>Edit Hotel's Room</h5>
						<button type="button" class="close" data-dismiss="modal"><span class="fas fa-times-circle" style="color: red;"></span></button>
					</div>
					<div class="modal-body">
					<?php echo form_open_multipart();?>
						<div class="form-group row">
							<label class="col-4 col-form-label">Room's ID</label>
							<div class="col-7">
								<input type="text" id="editroomID" class="form-control" name="editroomID" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-form-label">Room's Name</label>
							<div class="col-7">
								<input type="text" id="editroomName" class="form-control" name="editroomName">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-form-label">Room's Qty</label>
							<div class="col-7">
								<input type="number" class="form-control" name="rqty">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-form-label">Room's Price</label>
							<div class="col-7">
								<input type="text" id="editroomPrice" class="form-control" name="editroomPrice" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-form-label">Room's Facilities</label>
							<div class="col-7">
								<textarea class="form-control" id="editroomFacilities" name="editroomFacilities"></textarea> 
							</div>
						</div>
						<div class="form-group row">
							<label class="col-4 col-form-label" for="ppicture" >Room's Photo</label>
							<div class="col-7 align-self-center">
								<input type="file" name="editroomPict">
							</div>
						</div>
						<div class="row d-flex justify-content-end" style="padding-right: 10px;">
							<input type="submit" class="btn btnYes" name="editRoom" value="UPDATE">
						</div>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<script>
		$(document).ready(function() {
			var array = <?php echo json_encode($room); ?>;
			$('#editHotel1').modal({
				keyboard: false,
				show: false,
				backdrop: 'static'
			});
			$('.editPhoto').click(function() {
				index = $(this).data('imageid');
				console.log(index);
				$('#photoimageID').val(index);
				$('#editHotel1').modal('show');
			});

			$('#editHotel2').modal({
				keyboard: false,
				show: false,
				backdrop: 'static'
			});
			$('#addRoom').click(function() {
				$('#editHotel2').modal('show');
			});

			$('#editHotel3').modal({
				keyboard: false,
				show: false,
				backdrop: 'static'
			});
			$('.editRoom').click(function() {
				index = $(this).data('index')
				$('#editroomID').val(array[index]["RoomID"]);
				$('#editroomName').val(array[index]["RoomName"]);
				$('#editroomPrice').val(array[index]["Price"]);
				$('#editroomFacilities').html(array[index]["Facility"]);
				$('#editHotel3').modal('show');
			})
		});
	</script>
</body>
</html>