<!DOCTYPE html>
<html>
<body class="home">
	<?php echo $sidebar; ?>
	<div class="container">
		<div class="text-right">
			<a href="AboutUs.php">About Us</a>
			<!-- Logo Potrait/Landscape -->
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 50px; padding-left: 100px; padding-right: 50px;">
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
				<div class="media" style="background: rgba(153, 225, 217, 0.64); padding: 5px; margin-bottom: 5px;">
					<img src="./Gallery/H0006-example.jpg" style="width: 175px; height: 175px;">
					<div class="media-body" style="padding-left: 10px;">
						<div class="row">
							<div class="col-9">
								<h4>Hotel Indonesia Kempinski</h4>
								<p>⭐⭐⭐⭐⭐</p>
								<p><i class="fas fa-map-marker-alt"></i> Jl.M.H Thamrin no. 1 Jakarta Pusat, Jakarta</p>
								<p>Start from <span style="font-weight: bold;">Rp 2.498.999,-</span> /night</p>
							</div>
							<div class="col-3">
								<a href="DetailHotel.php" class="details" style="line-height: 175px;">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="media" style="background: rgba(153, 225, 217, 0.64); padding: 5px; margin-bottom: 5px;">
					<img src="./Gallery/example.jpg" style="width: 175px; height: 175px;">
					<div class="media-body" style="padding-left: 10px;">
						<div class="row">
							<div class="col-9">
								<h4>Nama Hotel</h4>
								<p>Rating</p>
								<p>Location</p>
								<p>Price</p>
							</div>
							<div class="col-3">
								<a href="DetailHotel.php" class="details" style="line-height: 175px;">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="media" style="background: rgba(153, 225, 217, 0.64); padding: 5px; margin-bottom: 5px;">
					<img src="./Gallery/example.jpg" style="width: 175px; height: 175px;">
					<div class="media-body" style="padding-left: 10px;">
						<div class="row">
							<div class="col-9">
								<h4>Nama Hotel</h4>
								<p>Rating</p>
								<p>Location</p>
								<p>Price</p>
							</div>
							<div class="col-3">
								<a href="DetailHotel.php" class="details" style="line-height: 175px;">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>