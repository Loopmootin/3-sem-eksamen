<?php 
	session_start();
	require_once('php/db_con.php');

	if(isset($_POST['book'])) {
		$checkSeat = $_POST['checkSeat'];

		foreach ($checkSeat as $seat) {
			$cid = 1;

			$sql = 'INSERT INTO tickets (tickets, profile_pid, cinema_cid) VALUES (?, ?, ?)';
			$stmt = $con->prepare($sql);
			$stmt->bind_param('sii', $seat, $_SESSION['pid'], $cid);
			$stmt->execute();
		}
	}

	function checkSeat($con, $seatNr){
		$checkSeats = mysqli_query($con, "SELECT * FROM tickets WHERE tickets='{$seatNr}' AND cinema_cid = 1");
		if(mysqli_num_rows($checkSeats) > 0){
			return true;
		} else {
			return false;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sædevalg</title>

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

		<?php
			include('php/login.php');
		?>

		<div class="container">
			<?php 
			if(empty($_SESSION['pid'])) {
					echo '<h1>Du skal være logget ind for at kunne reservere billetter</h1>';

				} else {
			?>
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="cinema-seating">

					<img src="img/screen.svg" alt="Image of the screen">
					<div class="cinema-overview">
					<div>
						<input type="checkbox" name="checkSeat[]" value="r1s4" class="checkbox-seats"<?php if(checkSeat($con, 'r1s4') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r1s2" class="checkbox-seats"<?php if(checkSeat($con, 'r1s2') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r1s1" class="checkbox-seats"<?php if(checkSeat($con, 'r1s1') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r1s3" class="checkbox-seats"<?php if(checkSeat($con, 'r1s3') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r1s5" class="checkbox-seats"<?php if(checkSeat($con, 'r1s5') == true){ echo " disabled";} ?>>
					</div>
					<br>

					<div>
						<input type="checkbox" name="checkSeat[]" value="r2s4" class="checkbox-seats"<?php if(checkSeat($con, 'r2s4') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r2s2" class="checkbox-seats"<?php if(checkSeat($con, 'r2s2') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r2s1" class="checkbox-seats"<?php if(checkSeat($con, 'r2s1') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r2s3" class="checkbox-seats"<?php if(checkSeat($con, 'r2s3') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r2s5" class="checkbox-seats"<?php if(checkSeat($con, 'r2s5') == true){ echo " disabled";} ?>>
					</div>
					<br>

					<div>
						<input type="checkbox" name="checkSeat[]" value="r3s4" class="checkbox-seats"<?php if(checkSeat($con, 'r3s4') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r3s2" class="checkbox-seats"<?php if(checkSeat($con, 'r3s2') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r3s1" class="checkbox-seats"<?php if(checkSeat($con, 'r3s1') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r3s3" class="checkbox-seats"<?php if(checkSeat($con, 'r3s3') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r3s5" class="checkbox-seats"<?php if(checkSeat($con, 'r3s5') == true){ echo " disabled";} ?>>
					</div>
					<br>

					<div>
						<input type="checkbox" name="checkSeat[]" value="r4s4" class="checkbox-seats"<?php if(checkSeat($con, 'r4s4') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r4s2" class="checkbox-seats"<?php if(checkSeat($con, 'r4s2') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r4s1" class="checkbox-seats"<?php if(checkSeat($con, 'r4s1') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r4s3" class="checkbox-seats"<?php if(checkSeat($con, 'r4s3') == true){ echo " disabled";} ?>>
						<input type="checkbox" name="checkSeat[]" value="r4s5" class="checkbox-seats"<?php if(checkSeat($con, 'r4s5') == true){ echo " disabled";} ?>>
					</div>
					</div>
					<br>
					<input type="submit" name="book" value="Bestil" class="btn btn-success">
				</form>

			<?php } ?>
		</div>

		<?php 
			include('footer.php');
		?>

	</body>
</html>