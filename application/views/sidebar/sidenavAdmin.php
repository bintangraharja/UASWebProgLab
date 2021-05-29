<head>
	<title>Hotel UAS IF430 - XXX</title>
	<?php 
	echo $style;
	echo $script;
	?>
</head>
<nav class="nav__cont">
	<div class="vLine">
		<ul class="nav">
			<li class="nav__items row" style="margin-top: 200px;">
				<a href="<?= site_url('Admin');?>" style="line-height: 75px;">HOME</a>
			</li>
			<li class="nav__items row">
				<a href="HistoryAdmin.php">BOOKING HISTORY</a>
			</li>
			<li class="nav__items row" style="line-height: 75px;">
				<a href="<?= site_url('Account/logout');?>">LOG OUT</a>
			</li>
		</ul>
	</div>
</nav>