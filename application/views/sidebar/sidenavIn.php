
<head>
	<title>Hotel UAS IF430 - Hotel.io</title>
	<?php 
	echo $style;
	echo $script;
	?>
</head>
<nav class="nav__cont">
	<div class="vLine">
		<ul class="nav">
			<li class="nav__items row" style="margin-top: 200px;">
				<a href="<?php echo site_url('Home')?>" style="line-height: 75px;">HOME</a>
			</li>
			<li class="nav__items row">
				<a href="<?php echo site_url('BookingHistory')?>">BOOKING HISTORY</a>
			</li>
			<li class="nav__items row">
				<a href="<?php echo site_url('Account')?>">MY ACCOUNT</a>
			</li>
			<li class="nav__items row" style="line-height: 75px;">
				<a href="<?php echo site_url('Account/Logout')?>">LOG OUT</a>
			</li>
		</ul>
	</div>
</nav>