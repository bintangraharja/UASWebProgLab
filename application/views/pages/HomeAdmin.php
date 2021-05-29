
<?php
	echo $script;
	echo $style;
	echo $sidebar;
?>

<!DOCTYPE html>
<html>
<body class="home">
	<div class="container-fluid" style="margin-top: 10px; padding-left: 15%; padding-right: 5%;">
		<div class="row">
			<div class="col-9 align-self-center">
				<button type="submit" class="btn btnYes">Add Hotel</button>
			</div>
			<div class="col-3 ">
				<div class="row d-flex justify-content-end">
					<!-- Logo Potrait/Landscape -->
					<img src="./Gallery/example.jpg" style="width: 100px; height: 100px;">
				</div>
				<br>
				<div class="row d-flex justify-content-end">
					<div class="input-group">
						<form method="post">
						<label>Search : &nbsp;</label>
						<input type="text" class="form-control border" name="search">
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
					<a href=""><span class="fas fa-trash-alt fa-2x details"></span></a>
					<!-- modal edit -->
					<a id="edit"><span class="far fa-edit fa-2x details"></span></a>
				</div>
			</div>
			<hr style="border-color: rgba(0, 0, 0, 0.25);">
			<?php 
				//akhir looping
				}
			?>
		</div>
	</div>

	<div class="container">
		<div class="modal fade" id="editHotel" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span class="fas fa-times-circle" style="color: red;"></span></button>
						<h3>Add Menu</h3>
					</div>
					<form action="">
						<div class="modal-body">
						
							<div class="form-group">
								<label for="idMenu">ID Menu :</label>
								<input type="text" name="idMenu" class="form-control" id="idMenu" required>
							</div>
							<div class="form-group">
								<label for="namaMenu">Menu Name :</label>
								<input type="text" name="namaMenu" class="form-control" id="namaMenu" required>
							</div>
							<div class="form-group">
								<label for="harga">Price :</label>
								<input type="text" name="harga" class="form-control" id="harga" required>
							</div>
							<div class="form-group">
								<label for="kategori">Category :</label>
	                                <select class="form-control" name="kategori" id="kategori">
	                                    <option>Appetizer</option>
	                                    <option>Dessert</option>
	                                    <option>Drinks</option>
	                                    <option>Main Dish</option>
	                                </select>
							</div>
							<div class="form-group">
								<label for="deskripsi">Description :</label>
								<textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
							</div>
							<div class="form-group">
								<label for="imageMenu">Upload Image</label>
								<input type="file" name="imageMenu" id="imageMenu" required>
							</div>
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btnYes" name="" value="UPDATE">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- <script type="text/javascript" language="javascript">
		var array = <?php //echo json_encode($listHotel); ?>;           >>>>> buat nanti editing
	</script> -->

	<script>
		$(document).ready(function() {
			$('#editHotel').modal({
				keyboard: false,
				show: false,
				backdrop: 'static'
			});

			$('#edit').click(function() {
				$('#editHotel').modal('show');
			})
		});
	</script>
</body>
</html>