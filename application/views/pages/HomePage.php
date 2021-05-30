<!DOCTYPE html>
<html>
<?php echo $sidebar; ?>
<body class="home" style= "background-image: url('http://localhost/UASWebprogLab/assets/HomeBG.jpg');">
	<div class="container-fluid" style="margin-top: 15px; padding-right: 100px;">
		<div class="row d-flex justify-content-end">
			<div class="d-flex align-items-end">
				<a href="AboutUs.php"><h3 class="details"><u>About Us</u></h3></a>
			</div>
			<!-- Logo Potrait/Landscape -->
			<img src="./Gallery/example.jpg" style="width: 100px; height: 100px; margin-left: 20px;">
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 10px; padding-left: 100px; padding-right: 50px;">
		<div class="row">
			<div class="col-5">
				<div class="row">
					<form method="POST">
						<div class="input-group">
							<span class="input-group-prepend">
								<div class="input-group-text border-right-0 bg-white"><i class="fas fa-map-marker-alt d-flex "></i></div>
							</span>
							<input type="text" class="form-control py-2 border-left-0 border" name="search" placeholder="Enter a Destination">
							<span class="input-group-append">
								<button class="btn btnYes" type="submit">Search</button>
							</span>
						</div>
					</form>
				</div>
				<div class="row">
					<div class="col" style="margin-left: 25%; padding-bottom: 10px; background: rgba(255, 255, 255, 0.5);">
	            		<div class="row" style="padding: 10px;">
	            			<h3>Price Range</h3>
	            		</div>
	            		<div class="form-row">
	            			<div class="col-5">
	            				<input type="text" class="form-control" name="minPrice">
	            			</div>
	            			<div class="col-2 text-center">
	            				<h4>to</h4>
	            			</div>
	            			<div class="col-5">
	            				<input type="text" class="form-control" name="maxPrice">
	            			</div>
	            		</div>
	            		<hr style="border-color: black;">
	            		<div class="row" style="padding: 10px;">
	            			<h3>Star Rating</h3>
	            		</div>
	            		<div class="row" style="padding: 10px;">
	            			<div class="rating">
	            				<span class="rating__result"></span> 
								<i class="rating__star far fa-star fa-2x"></i>
								<i class="rating__star far fa-star fa-2x"></i>
								<i class="rating__star far fa-star fa-2x"></i>
								<i class="rating__star far fa-star fa-2x"></i>
								<i class="rating__star far fa-star fa-2x"></i>
	            			</div>
	            		</div>
	            	</div>
				</div>
			</div>
			<div class="col-7 custom-scrollbar-css p-2" style="height: 620px;">

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
				<div class="media" style="background: rgba(153, 225, 217, 0.64); padding: 10px; margin-bottom: 5px;">
					<img class="align-self-center" src="<?php echo site_url('home/showImg/').$hotelID ?>" style="width: 175px; height: 175px;">
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
							<div class="col-3 align-self-center">
								<a href="<?=site_url('DetailHotel').'/'.$hotelID;?>" class="details">View Details</a>
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

	<script>
		const ratingStars = [...document.getElementsByClassName("rating__star")];
		const ratingResult = document.querySelector(".rating__result");

		printRatingResult(ratingResult);

		function executeRating(stars, result) {
		   const starClassActive = "rating__star fas fa-star";
		   const starClassUnactive = "rating__star far fa-star";
		   const starsLength = stars.length;
		   let i;
		   stars.map((star) => {
		      star.onclick = () => {
		         i = stars.indexOf(star);

		         if (star.className.indexOf(starClassUnactive) !== -1) {
		            printRatingResult(result, i + 1);
		            for (i; i >= 0; --i) stars[i].className = starClassActive;
		         } else {
		            printRatingResult(result, i);
		            for (i; i < starsLength; ++i) stars[i].className = starClassUnactive;
		         }
		      };
		   });
		}

		function printRatingResult(result, num = 0) {
		   result.textContent = `${num}/5`;
		}

		executeRating(ratingStars, ratingResult);
	</script>
</body>
</html>