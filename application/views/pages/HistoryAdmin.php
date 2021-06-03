<!DOCTYPE html>
<html>
<?php echo $sidebar;?>
<body class="home" style="background-image: url('http://localhost/UASWebprogLab/assets/HomeBG.jpg');">
	<div class="container-fluid" style="margin-top: 15px; margin-bottom: 15px;">
		<div class="row">
			<div class="col-1"> </div>
			<div class="col-5 align-self-center">
				<h1>Booking History</h1>
			</div>
			<div class="col-5 d-flex justify-content-end">
				<img src="http://localhost/UASWebprogLab/assets/logo.png" style="width: 300px; height: 100px; margin-left: 20px;">
			</div>
		</div>
	</div>
	<?php if($listBook == NULL){

	}else{?>
	<div class="container custom-scrollbar-css p-2" style="height: 615px; margin-left: 20%;">
		<?php 
			foreach($listBook as $books){
				$Bookid = $books['BookingID'];
				$GName = $books['GName'];
				$Price = $books['Subtotal'];
				$HotelName = $books['HotelName'];
		?>
		<div class="row" style="background: #99E1D9; padding-top: 10px; margin-bottom: 10px;">
			<div class="col-2 text-center">
				<h5 style="font-weight: bold;">Order ID</h5>
				<p><?=$Bookid;?></p>
			</div>
			<div class="col-2 text-center">
				<h5 style="font-weight: bold;">Customer</h5>
				<p><?=$GName;?></p>
			</div>
			<div class="col-3 text-center">
				<h5 style="font-weight: bold;">Hotel's Name</h5>
				<p><?=$HotelName;?></p>
			</div>
			<div class="col-3 align-self-end text-center">
				<p style="font-weight: bold;">Subtotal Rp <?=$Price;?>,-</p>
			</div>
			<div class="col-2 align-self-center text-center">
				<a href="<?=site_url('Admin/BookHistory/'.$Bookid);?>" class="details"><h5 style="font-weight: bold;">View Details</h5></a>
			</div>
		</div>
		<?php } ?>	
	</div>
	<?php }?>
</body>
</html>