
<?php
	echo $script;
	echo $style;
	echo $sidebar;
?>

<!DOCTYPE html>
<html>
<body class="home" style="background-image: url('http://localhost/UASWebprogLab/assets/HomeBG.jpg');">
	<div class="container-fluid" style="margin-top: 10px; padding-left: 15%; padding-right: 5%;">
		<div class="row">
			<div class="col-9 align-self-center">
				<a href="<?php echo site_url("Admin/AddHotel")?>"><button type="submit" class="btn btnYes">Add Hotel</button></a>
			</div>
			<div class="col-3 ">
				<div class="row d-flex justify-content-end">
					<img src="http://localhost/UASWebprogLab/assets/logo.png" style="width: 300px; height: 100px; margin-left: 20px;">
				</div>
				<br>
				<div class="row d-flex justify-content-end">
					<div class="input-group">
						<form method="post">
						<label>Search : &nbsp;</label>
						<input type="text" class="form-control border" name="search" placeholder="Location">
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="col headTable">
			<div class="row">
				<div class="col-2">
					<h4>Image</h4>
				</div>
				<div class="col-2">
					<h4>Hotel's ID</h4>
				</div>
				<div class="col-2">
					<h4>Hotel's Name</h4>
				</div>
				<div class="col-2">
					<h4>Rating</h4>
				</div>
				<div class="col-2">
					<h4>Address</h4>
				</div>
				<div class="col-2">
					<h4>Action</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 10px; padding-left: 15%; padding-right: 5%;">
		<div class="col bodyAdmin custom-scrollbar-css p-2" style="height: 420px;">
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
			<div class="row">
				<div class="col-2">
					<img src="<?php echo site_url('home/showImg/').$hotelID ?>" style="width: 100px; height: 100px;">
				</div>
				<div class="col-2">
					<p><?= $hotelID ?></p>
				</div>
				<div class="col-2">
					<p><?= $hotelName?></p>
				</div>
				<div class="col-2">
					<p><?php for($i = 0; $i < $rating ;$i++){ ?>
									⭐
						<?php }?></p>
				</div>
				<div class="col-2">
					<p><?= $address?></p>
				</div>
				<div class="col-2">
					<a href="<?= site_url("Admin/DeleteHotel/".$hotelID)?>"><span class="fas fa-trash-alt fa-2x details"></span></a>
					<a href="<?php echo site_url('Admin/EditHotel/'.$hotelID)?>"><span class="far fa-edit fa-2x details"></span></a>
				</div>
			</div>
			<hr style="border-color: rgba(0, 0, 0, 0.25);">
			<?php 
				//akhir looping
				}
			?>
		</div>
	</div>
	
</body>
</html>