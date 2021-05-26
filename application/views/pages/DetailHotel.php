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
	}
	?>
	<div class="container-fluid" style="padding-left: 100px; padding-left: 20%; padding-right: 50px;">
		<div class="row">
			<div class="col-9">
				<h1><?php echo $hotelName;?> - <?php for($i = 0; $i < $rating ;$i++){ ?>⭐<?php } ?></h1>
				<h4><span class="fas fa-map-marker-alt"></span> <?php echo $address;?></h4>
			</div>
			<div class="col-3">
				LOGO
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
									<input type="submit" class="btn btnYes" name="book1" value="BOOK NOW">
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