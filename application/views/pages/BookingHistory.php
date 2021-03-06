<?php echo $sidebar?>

<!DOCTYPE html>
<html>
<body class="home" style= "background-image: url('http://localhost/UASWebprogLab/assets/HomeBG.jpg');">
	<div class="container" style="margin-top: 15px; margin-bottom: 15px;">
		<div class="row">
			<div class="col-6 align-self-center">
				<h1>Booking History</h1>
			</div>
			<div class="col-6 d-flex justify-content-end">
				<img src="http://localhost/UASWebprogLab/assets/logo.png" style="width: 300px; height: 100px; margin-left: 20px;">
			</div>
		</div>
	</div>
	<?php if($history == NULL){

	}else{?>
	<div class="container custom-scrollbar-css p-2" style="height: 615px;">
		<?php foreach($history as $row){
			$BookingID = $row["BookingID"];
            $HotelID = $row["HotelID"];
            $HotelName = $row["HotelName"];
            $Address = $row["Address"];
            $RoomName = $row["RoomName"];
            $original = $row['CheckIn'];
            $newDate = date("d-m-Y", strtotime($original));
            $date = date_create("$newDate 0:00:00");
            $CheckIn = date_format($date,"d F Y");
            $original = $row['CheckOut'];
            $newDate = date("d-m-Y", strtotime($original));
            $date = date_create("$newDate 0:00:00");
            $CheckOut = date_format($date,"d F Y");
            $Subtotal = $row["Subtotal"];
		?>
		<div class="media" style="background: rgba(153, 225, 217, 0.64); padding: 10px; margin-bottom: 5px; margin-left: 200px;">
			<img src="<?= site_url('home/showImg/').$HotelID ?>" style="width: 175px; height: 175px;">
			<div class="media-body" style="padding-left: 10px;">
				<div class="row">
					<div class="col-9">
						<h4><?= $HotelName?> - <?= $RoomName?></h4>
						<p><i class="fas fa-map-marker-alt"></i> <?= $Address?></p>
						<p>Tanggal <?= $CheckIn?> s/d <?= $CheckOut?></p>
						<h5 style="font-weight: bold;">Subtotal Rp <?= $Subtotal?>,-</h5>
					</div>
					<div class="col-3">
						<a href="<?= site_url('Invoice/'.$BookingID)?>" class="btn btnYes">See Invoice</a>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
	<?php } ?>
</body>
</html>