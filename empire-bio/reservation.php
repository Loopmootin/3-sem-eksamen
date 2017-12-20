<?php 
	session_start();
	require_once('php/db_con.php');

	if(isset($_POST['btn-delete-ticket'])) {

		$tid = filter_input(INPUT_POST, 'ticket-id')
						or die('Missing/illegal firstname parameter');
				
		$sql = 'DELETE FROM tickets WHERE tid = ?';
		$stmt = $con->prepare($sql);
		$stmt->bind_param("i", $tid);
		$stmt->execute();
	}
?> 

<!DOCTYPE html>
<html>
	<head>
		<title>Min Reservation</title>

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

			<?php 
				if(empty($_SESSION['pid'])) {
					echo '<h2>Du skal være logget ind for at kunne se dine reservationer</h2>';

				} else {
					echo '<h2>Her kan du se dine reservationer:</h2>';
					
					if(isset($_SESSION['pid'])) {
				
						$sql = 'SELECT tickets.tid, profile.firstname, profile.lastname, profile.phone, tickets.tickets, cinema.cid, movie.title 
								FROM cinema, movie, profile, tickets 
								WHERE profile.pid = ? 
								AND cinema.cid = tickets.cinema_cid AND movie.mid = cinema.movie_mid AND profile.pid = tickets.profile_pid';
						$stmt = $con->prepare($sql);
						$stmt->bind_param("i", $_SESSION['pid']);
						$stmt->execute();
						$stmt->bind_result($tid, $fn, $ln, $phone, $tickets, $cid, $movie);
									
						while($stmt->fetch()){

							echo '<table class="ticket-template">
								  <tr>
								    <th>Navn</th>
								    <th>Række og sæde</th> 
								    <th>Biografnummer</th>
								    <th>Filmtitel</th>
								    <th>Slet billet</th>
								  </tr>
								  <tr>
								    <td>'.$fn.' '.$ln.'</td>
								    <td>'.$tickets.'</td>
								    <td>'.$cid.'</td>
								    <td>'.$movie.'</td>
								    <td>
										<form action="'. $_SERVER['PHP_SELF'] .'" method="post">
											<input type="hidden" name="ticket-id" value="'.$tid.'">
											<input type="submit" name="btn-delete-ticket" value="Slet" class="btn btn-danger">
										</form>
								    </td>
								  </tr>
								</table><br><br>';
						
						} 
					}	
				}
			?>	
		</div>

		<?php 
			include('footer.php');
		?>

		<script src="js/scripts.js" type="text/javascript"></script>

	</body>
</html>