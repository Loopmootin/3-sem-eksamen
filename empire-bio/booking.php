<?php 
	session_start();
	require_once('php/db_con.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Billetbestilling</title>

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
		
		<button onclick="on()" type="button" class="btn btn-primary sign-up-btn">Tilmeld dig</button>

		<?php
			include('php/create.php');			
		?>

		<?php
			include('php/login.php');
		?>

		<div class="container">

			<div class="movies-playing">

				<div class="movie-1">
					<h1>Star Wars - The Last Jedi</h1>
					<img src="img/star-wars-movie-poster1.jpg" alt="poster of star wars">
					<div class="timeschedule-movie1">
						<div class="day-mon">
							<p>Man</p>
							<a href="mon1200-cin1.php" class="active-movie">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-tue">
							<p>Tir</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-wed">
							<p>Ons</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-thu">
							<p>Tor</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-fri">
							<p>Fre</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-sat">
							<p>Lør</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-sun">
							<p>Søn</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
					</div>
				</div>

				<div class="movie-2">
					<h1>Ferdinand</h1>
					<img src="img/ferdinand-movie-poster1.jpg" alt="poster of ferdinand">
					<div class="timeschedule-movie2">
						<div class="day-mon">
							<p>Man</p>
							<a href="mon1200-cin2.php" class="active-movie">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-tue">
							<p>Tir</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-wed">
							<p>Ons</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-thu">
							<p>Tor</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-fri">
							<p>Fre</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-sat">
							<p>Lør</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
						<div class="day-sun">
							<p>Søn</p>
							<a href="#">12:00</a>
							<a href="#">14:30</a>
							<a href="#">17:00</a>
							<a href="#">19:30</a>
							<a href="#">22:00</a>
						</div>
					</div>
				</div>

			</div>

		</div>

			<?php 
				include('footer.php');
			?>

			<script src="js/scripts.js" type="text/javascript"></script>
	</body>
</html>