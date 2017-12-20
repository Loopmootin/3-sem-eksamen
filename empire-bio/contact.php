<!DOCTYPE html>
<html>
	<head>
		<title>Kontakt</title>

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="css/style.css">

			<script>
			function initMap() {

				var empire = {lat: 55.691972, lng: 12.555727};				
				
				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 16,
				  center: empire
				});
				
				
				var marker = new google.maps.Marker({
				  position: empire,
				  map: map
				});
			}
			</script>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</head>
	<body>

		<?php 
			include('header.php');
		?>
		
		<div class="container">

			<h1>Kontakt Empire Bio</h1>

			<p>
				Al skriftlig korrespondance bedes sendt til:<br>
 
				Empire Bio<br>
				Guldbergsgade 29 F<br>
				2200 København N<br><br>
				 
				Såfremt der er tale om ansøgninger på opslåede stillinger, bedes kuverten mærket med stillingsbetegnelsen. <br><br>
				 
				Billetbestilling kan ske dagligt kl. 12.00 - 22.00 på vores billettelefon: 3536 0036<br>
				Du kan også benytte vores online bestilling.<br><br>

				Såfrem du ønsker at sende os en email, bedes dette gøres på info@empirebio.dk<br>
				Vi gør dog opmærksom på at vi ikke modtager billetbestillinger pr. email.<br><br>
			</p>

			<div id="map"></div>
		
			<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGEY99kDW0EDzj0GHsND1Piag4A9fr4zo&callback=initMap">
			</script>
		</div>

		<?php 
			include('footer.php');
		?>

	</body>
</html>