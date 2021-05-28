<?php
	include_once('sidenavAdmin.php');
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
						<label>Search : &nbsp;</label>
						<input type="text" class="form-control border" name="search">
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
			<div class="row">
				<div class="col-2">
					<img src="./Gallery/example.jpg" style="width: 100px; height: 100px;">
				</div>
				<div class="col-2">
					<p>H0001</p>
				</div>
				<div class="col-2">
					<p>Ritz Carlton</p>
				</div>
				<div class="col-2">
					<p>⭐⭐⭐⭐⭐</p>
				</div>
				<div class="col-2">
					<p>Jl.M.H Thamrin no. 1 Jakarta Pusat, Jakarta</p>
				</div>
				<div class="col-2">
					<a href=""><span class="fas fa-trash-alt fa-2x details"></span></a>
					<!-- modal edit -->
					<a href="" data-toogle="modal" data-target="#editHotel"><span class="far fa-edit fa-2x details"></span></a>
				</div>
			</div>
			<hr style="border-color: rgba(0, 0, 0, 0.25);">
			<div class="row">
				<div class="col-2">
					<img src="./Gallery/example.jpg" style="width: 100px; height: 100px;">
				</div>
				<div class="col-2">
					<p>H0001</p>
				</div>
				<div class="col-2">
					<p>Ritz Carlton</p>
				</div>
				<div class="col-2">
					<p>⭐⭐⭐⭐⭐</p>
				</div>
				<div class="col-2">
					<p>Jl.M.H Thamrin no. 1 Jakarta Pusat, Jakarta</p>
				</div>
				<div class="col-2">
					<a href=""><span class="fas fa-trash-alt fa-2x details"></span></a>
					<!-- modal edit -->
					<a href="HomePage.php"><span class="far fa-edit fa-2x details"></span></a>
				</div>
			</div>
			<hr style="border-color: rgba(0, 0, 0, 0.25);">
			<div class="row">
				<div class="col-2">
					<img src="./Gallery/example.jpg" style="width: 100px; height: 100px;">
				</div>
				<div class="col-2">
					<p>H0001</p>
				</div>
				<div class="col-2">
					<p>Ritz Carlton</p>
				</div>
				<div class="col-2">
					<p>⭐⭐⭐⭐⭐</p>
				</div>
				<div class="col-2">
					<p>Jl.M.H Thamrin no. 1 Jakarta Pusat, Jakarta</p>
				</div>
				<div class="col-2">
					<a href=""><span class="fas fa-trash-alt fa-2x details"></span></a>
					<!-- modal edit -->
					<a href="HomePage.php"><span class="far fa-edit fa-2x details"></span></a>
				</div>
			</div>
			<hr style="border-color: rgba(0, 0, 0, 0.25);">
			<div class="row">
				<div class="col-2">
					<img src="./Gallery/example.jpg" style="width: 100px; height: 100px;">
				</div>
				<div class="col-2">
					<p>H0001</p>
				</div>
				<div class="col-2">
					<p>Ritz Carlton</p>
				</div>
				<div class="col-2">
					<p>⭐⭐⭐⭐⭐</p>
				</div>
				<div class="col-2">
					<p>Jl.M.H Thamrin no. 1 Jakarta Pusat, Jakarta</p>
				</div>
				<div class="col-2">
					<a href=""><span class="fas fa-trash-alt fa-2x details"></span></a>
					<!-- modal edit -->
					<a href="HomePage.php"><span class="far fa-edit fa-2x details"></span></a>
				</div>
			</div>
			<hr style="border-color: rgba(0, 0, 0, 0.25);">
			<div class="row">
				<div class="col-2">
					<img src="./Gallery/example.jpg" style="width: 100px; height: 100px;">
				</div>
				<div class="col-2">
					<p>H0001</p>
				</div>
				<div class="col-2">
					<p>Ritz Carlton</p>
				</div>
				<div class="col-2">
					<p>⭐⭐⭐⭐⭐</p>
				</div>
				<div class="col-2">
					<p>Jl.M.H Thamrin no. 1 Jakarta Pusat, Jakarta</p>
				</div>
				<div class="col-2">
					<a href=""><span class="fas fa-trash-alt fa-2x details"></span></a>
					<!-- modal edit -->
					<a href="HomePage.php"><span class="far fa-edit fa-2x details"></span></a>
				</div>
			</div>
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
	

	<script>
		
	</script>
</body>
</html>