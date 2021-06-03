<!DOCTYPE html>
<?php echo $script;
echo $style;
?>
<html>
<head>
	<title>Hotel UAS IF430 - My Hotel</title>
</head>
<body>
	<div class="container-fluid" style="background-color:#99E1D9; height: 50%; position: fixed;"> </div>
	<div class="container-fluid" style="padding-top: 5%;">
        <div class="row d-flex justify-content-center" style="">
            <h1 style="color: white; position: absolute;">Meet Our Team Members</h1>
        </div>
        <br><br><br>
		<div class="row">
			<div class="col-2 d-flex justify-content-end">
				<a href="<?php echo site_url('Home');?>">
			        <button type="submit" class="btn btnBack"><span class="fas fa-angle-double-left"></span> Back</button>
		        </a>
			</div>
		</div>
        <br><br><br>
		<div class="row" data-aos="zoom-out-right" data-aos-anchor-placement="top-center">
            <div class="col-6 d-flex justify-content-end">
                <img src="http://localhost/UASWebprogLab/assets/Nan.jpg" style="width: 50%; border-radius: 50%;">
            </div>
            <div class="col-4 align-self-center" style="text-align : left;">
                <h2 style="text-decoration: underline;">Ananda Setiyani</h2>
                <h4>Front-end Developer - 00000037692</h4>
                <a href="https://www.instagram.com/anandasf29/" target="_blank">
                    <span class="fab fa-instagram fa-3x details"></span>
                </a>
                <a href="https://github.com/AnandaSetiyani" target="_blank">
                    <span class="fab fa-github fa-3x details"></span>
                </a>
                <p style="text-align:justify;">“Berbagi itu indah, tapi jangan sampai kebaikan itu disalahgunakan orang lain.” - Nan (2021)
                </p>
            </div>
        </div>
        <br><br><br>
        <div class="row" data-aos="zoom-out-right" data-aos-anchor-placement="top-center">
            <div class="col-2"> </div>
            <div class="col-4 align-self-center" style="text-align : right;">
                <h2 style="text-decoration: underline;">Bintang Raharja</h2>
                <h4>Back-end Developer - 0000003786</h4>
                <a href="https://www.instagram.com/bintangraharja_/" target="_blank">
                    <span class="fab fa-instagram fa-3x details"></span>
                </a>
                <a href="https://github.com/bintangraharja" target="_blank">
                    <span class="fab fa-github fa-3x details"></span>
                </a>
                <p style="text-align:justify;">“Segala sesuatu yang berlebihan tidak akan menjadi suatu hal yang baik.” - Bintang Raharja (2021)
                </p>
            </div>
            <div class="col-6">
                <img src="http://localhost/UASWebprogLab/assets/Bintang.jpg" style="width: 50%; border-radius: 50%;">
            </div>
        </div>
        <br><br><br>
        <div class="row" data-aos="zoom-out-right" data-aos-anchor-placement="top-center">
            <div class="col-6  d-flex justify-content-end">
                <img src="http://localhost/UASWebprogLab/assets/Ferlay.jpg" style="width: 50%; border-radius: 50%;">
            </div>
            <div class="col-4 align-self-center" style="text-align : left;">
                <h2 style="text-decoration: underline;">Ferry Lay</h2>
                <h4>Back-end Developer - 00000037514</h4>
                <a href="https://www.instagram.com/ferlay00/" target="_blank">
                    <span class="fab fa-instagram fa-3x details"></span>
                </a>
                <a href="https://github.com/ferrylay" target="_blank">
                    <span class="fab fa-github fa-3x details"></span>
                </a>
                <p style="text-align:justify;">“Kalo ada yang gampang, ngapain disusah-susahin.” - Ferry Lay (2021)
                </p>
            </div>
        </div>
        <br><br><br>
        <div class="row" data-aos="zoom-out-right" data-aos-anchor-placement="top-center">
            <div class="col-2"> </div>
            <div class="col-4 align-self-center" style="text-align : right;">
                <h2 style="text-decoration: underline;">Maureen Zerlina O.</h2>
                <h4>Front-end Developer - 00000036850</h4>
                <a href="https://www.instagram.com/maureenzerl/" target="_blank">
                    <span class="fab fa-instagram fa-3x details"></span>
                </a>
                <a href="https://github.com/maureenzerl" target="_blank">
                   <span class="fab fa-github fa-3x details"></span>
                </a>
                <p style="text-align:justify;">“I'm not the best at anything, but that's not enough of a reason to quit, nor is it an excuse.” - Maureen Zerlina (2021)
                </p>
            </div>
            <div class="col-6">
                <img src="http://localhost/UASWebprogLab/assets/Maureen.png" style="width: 50%; border-radius: 50%;">
            </div>
        </div>
        <br><br><br>
	</div>

	<script>
        AOS.init();
    </script>
</body>
</html>