		<?php

			$fn = basename($_SERVER['PHP_SELF']);
		
		?>
		<div class="jumbotron" id="header">
			<img src="img/empire-logo.svg" alt="Logo">

			<div class="menu">
				<a id="<?= ($fn=='index.php')?'selected':''?>" href="index.php">Home</a>
				<a id="<?= ($fn=='booking.php')?'selected':''?>" href="booking.php">Billetbooking</a>
				<a id="<?= ($fn=='reservation.php')?'selected':''?>" href="reservation.php">Min Profil</a>
				<a id="<?= ($fn=='about.php')?'selected':''?>" href="about.php">Om Empire</a>
				<a id="<?= ($fn=='contact.php')?'selected':''?>" href="contact.php">Kontakt</a>
			</div>
		</div>