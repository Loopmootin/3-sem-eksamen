<!DOCTYPE html>
<html>
	<head>
		<title>Empire Bio</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</head>
	<body>

		<?php 
			include('header.php');
		?>

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="img/go-dream.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/star-wars.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/bkd.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div class="container">

			<div class="practical">
				<h1>Praktisk Info</h1>
				<p>
					Afhentning af billetter:<br>
					Bestilte billetter skal afhentes 45 min. før til forestillinger mellem kl. 18.45 og 20.30, og 30 min. før til alle øvrige forestillinger.<br>

					Undtagelser kan forekomme ved særvisninger/premierer.<br>
					
					3D briller sælges separat og er derfor ikke en del af den ordinære billetpris.

					Åbningstider:<br>

					Alle dage fra kl. 12.00 til 22.30, <br>

					dog altid 30 min. før første forestilling. <br>

					Parkeringhus 2 min. fra Empire Bio<br>
				</p>
			</div>

			<div class="events">
				<h1>Events</h1>
				<p>
					Søndag d. 17. december kl. 13:00<br>
					JULEBIO OG JULEKLIP<br>
					Med kortfilm og småkager.<br><br>
					 
					Tirsdag d. 9. januar kl. 19:30<br>
					FORPREMIERE: THREE BILLBOARDS OUTSIDE EBBING, MISSOURI<br>
					I samarbejde med VICE Bio.<br>
				</p>
			</div>

			<div class="babybio">
				<h1>BabyBio</h1>
				<p>BabyBio holder juleferie. Vi er tilbage onsdag d. 3. januar.</p>
			</div>

		</div>
		
		<?php 
			include('footer.php');
		?>
	</body>
</html>