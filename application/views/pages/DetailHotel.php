<!DOCTYPE html>
<html>
<?php echo $sidebar;?>
<body style="backgroud: #F2F2F2;">
	<br>
	<?php 
	foreach($detailHotel as $hotel){
		$hotelID = $hotel['HotelID'];
		$hotelName = $hotel['HotelName'];
		$address = $hotel['Address'];
		$desc = $hotel['Description'];
		$rating = $hotel['Rating'];
		$number = $hotel['Number'];
	}
	?>
	<div class="container-fluid" style="padding-left: 100px; padding-left: 20%; padding-right: 50px;">
		<div class="row">
			<div class="col-9">
				<h1><?php echo $hotelName;?> - <?php for($i = 0; $i < $rating ;$i++){ ?>⭐<?php } ?></h1>
				<h4><span class="fas fa-map-marker-alt"></span> <?php echo $address;?> (<?=$number;?>)</h4>
			</div>
			<div class="col-3 d-flex justify-content-end">
				<!-- Logo Potrait/Landscape -->
				<img src="./Gallery/example.jpg" style="width: 100px; height: 100px; margin-left: 20px;">
			</div>
		</div>
		<hr style="border-color: black;">
		<div class="row">
			<div class="container">
				<div class="row equal">
					<a class="col-md-7">
						<img src="<?php echo site_url('DetailHotel/hotelImg/').$hotelID.'/1' ?>" class="align-self-center img-fluid" style="width: 700px; height: 385px;">
					</a>
					<div class="col-5">
						<a class="row">
							<img src="<?php echo site_url('DetailHotel/hotelImg/').$hotelID.'/2' ?>" class="img-fluid" style="width: 400px; height: 180px;">
						</a>
						<br>
						<a class="row">
							<img src="<?php echo site_url('DetailHotel/hotelImg/').$hotelID.'/3' ?>" class="img-fluid" style="width: 400px; height: 180px;">
						</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-10">
				<h4>Description</h4>
				<p style="text-align: justify;"><?php echo $desc; ?> </p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-10">
				<h4>Facilities</h4>
				<div class="row" style="margin-left: 5px;">
				<?php 
				foreach($facility as $row){
					if($row['Gym'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-dumbbell fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">Gym</p>
						</div>
					</div>
				<?php 
					}
					if($row['Spa'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-hot-tub fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">Spa</p>
						</div>
					</div>
				<?php 
					}
					if($row['Bar'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-cocktail fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">Bar</p>
						</div>
					</div>
				<?php 
					}
					if($row['SwimmingPool'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-swimmer fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">Swimming Pool</p>
						</div>
					</div>
				<?php 
					}
					if($row['WiFi'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-wifi fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">WiFi</p>
						</div>
					</div>
				<?php 
					}
					if($row['MeetingRoom'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-laptop fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">Meeting Room</p>
						</div>
					</div>
				<?php 
					}
					if($row['Restaurant'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-utensils fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">Restaurant</p>
						</div>
					</div>
				<?php 
					}
					if($row['PUAirport'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-shuttle-van fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">Pick Up from Airport</p>
						</div>
					</div>
				<?php 
					}
					if($row['Receptionist24'] == 1){
				?>
					<div class="col-1">
						<div class="row d-flex justify-content-center">
							<i class="fas fa-headphones fa-3x"></i>
						</div>
						<div class="row d-flex justify-content-center">
							<p class="text-center">Receptionist 24 Hours</p>
						</div>
					</div>
				<?php 
					}
				} 
				?>
				</div>
			</div>
		</div>
		<br>
		<?php 
		foreach($hotelRoom as $room){
			$roomID   = $room['RoomID'];
			$roomName = $room['RoomName'];
			$qty      = $room['Qty'];
			$price    = $room['Price'];
			$facility = $room['Facility'];
		?>
		<div class="row">
			<div class="col">
				<div class="media" style="background: #C4C4C4; padding: 15px; margin-bottom: 5px;">
					<img src="<?php echo site_url('DetailHotel/roomImg/').$hotelID.'/'.$roomID ?>" style="width: 300px; height: 165px;">
					<div class="media-body" style="padding-left: 10px;">
						<div class="row">
							<div class="col-9">
								<h4><?php echo $roomName;?></h4>
								<ul>
									Room Facilities :
									<?php echo $facility;?>
								</ul>
							</div>
							<div class="col-3">
								<div class="details">
									<span style="font-weight: bold;">Rp <?php echo $price;?>,-</span><span> /night</span> 
									<?php if($qty <= 0){?>
									<button type="submit" class="btn btnYes" disabled >BOOK NOW</button>
									<?php }else if(!$this->session->userdata('status')){ ?>
									<a href="<?=site_url('Login');?>"><button type="submit" class="btn btnYes" >BOOK NOW</button></a>
									<?php }else{?>
									<a href="<?=site_url('BookingForm/form').'/'.$hotelID.'/'.$roomID;?>"><button type="submit" class="btn btnYes" name="book1" value="BOOK NOW">BOOK NOW</button></a>
									<?php }?> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</body>
</html>