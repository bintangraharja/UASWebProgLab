<!DOCTYPE html>
<html>
<?php echo $sidebar; ?>
<body class="home" style= "background-image: url('http://localhost/UASWebprogLab/assets/HomeBG.jpg');">
	<div class="container-fluid" style="margin-top: 25px; padding-right: 100px;">
		<div class="row d-flex justify-content-end">
			<div class="d-flex align-items-end">
				<a href="AboutUs.php"><h5><u>About Us</u></h5></a>
			</div>
			<!-- Logo Potrait/Landscape -->
			<img src="./Gallery/example.jpg" style="width: 100px; height: 100px; margin-left: 20px;">
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 10px; padding-left: 100px; padding-right: 50px;">
		<div class="row">
			<div class="col-5">
	            <div class="input-group">
	                <span class="input-group-prepend">
	                    <div class="input-group-text border-right-0 bg-white"><i class="fas fa-map-marker-alt d-flex "></i></div>
	                </span>
	                <input type="text" class="form-control py-2 border-left-0 border" name="search" placeholder="Enter a Destination">
	                <span class="input-group-append">
	                	<button class="btn btnYes" type="button">Search</button>
	                </span>
	            </div>
			</div>
			<div class="col-7">

				<?php
				//ini buat masukin list hotel
				//start looping
				foreach($listHotel as $hotel){
					$hotelID = $hotel['HotelID'];
					$hotelName = $hotel['HotelName'];
					$rating = $hotel['Rating'];
					$address = $hotel['Address'];
					$description = $hotel['Description'];
					$price =$hotel['Price'];
					//isi data
				?>
				<div class="media" style="background: rgba(153, 225, 217, 0.64); padding: 5px; margin-bottom: 5px;">
					<img  src="<?php echo site_url('home/showImg/').$hotelID ?>" style="width: 175px; height: 175px;">
					<div class="media-body" style="padding-left: 10px;">
						<div class="row">
							<div class="col-9">
								<h4><?php echo $hotelName; ?></h4>
								<p>
								<?php for($i = 0; $i < $rating ;$i++){ ?>
									⭐
								<?php } ?>
								</p>
								<p><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?></p>
								<p>Start from <span style="font-weight: bold;">Rp <?=$price;?>,-</span> /night</p>
							</div>
							<div class="col-3">
								<a href="<?=site_url('DetailHotel').'/'.$hotelID;?>" class="details" style="line-height: 175px;">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<?php 
				//akhir looping
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>