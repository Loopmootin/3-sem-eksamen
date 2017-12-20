<!DOCTYPE html>
<html>
	<head>
		<title>Om Empire</title>

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

		<div class="container">

			<h1>Empire Bio's billetpriser</h1>

			<p>
				I Empire opererer vi med tre forskellige prisniveauer. Som biografelskere ved vi, at "den gode placering" er meget individuel fra person til person. Dette har vi taget konsekvensen af og derfor er prisen ens ligegyldig hvor i salen, du vil sidde.<br><br>

				 
				<table class="table-prices">	
					 <tr>
						<th>Tidspunkt</th>
						<th>Pris</th> 
					</tr>
					<tr>
						<td>Før kl. 14.00</td>
						<td>75,-</td>
					</tr>
					<tr>
						<td>Før kl. 18.00</td>
						<td>85,-</td>
					</tr>
					<tr>
						<td>Fra kl. 18.00</td>
						<td>90,-</td>
					</tr>
				</table>

				Alle priser er inkl. moms<br><br>

				 

				Studie- og pensionistrabat mandag - fredag før kl. 18.00: Spar 10,-<br>

				Alm. børnerabat (under 13 år): Spar 5,-<br>

				VIB-børnefilmklub (under 13 år): Spar 15,-<br>

				Tillæg på film med forlænget spilletid (135 - 149 minutter): 10,-<br>

				Tillæg på helaftensfilm (150 minutter eller længere): 20,-<br>

				Tillæg på 3D film: 20,- ekskl. 3D brille<br><br>

				 
				Som det ses i skemaet, er prisniveauerne istedet inddelt efter hvornår på dagen du ønsker at se filmen. Naturligt nok afspejler priserne Empire Bios behov for at fylde salene op tidligt på dagen i modsætning til nødvendigheden for at drive en forretning om aftenen, hvor størstedelen af vores gæster vælger at besøge os.<br><br>

				Iøvrigt har Empire Bio ind imellem særarrangementer, som falder lidt ved siden af vores normale prispolitik. For at holde dig oplyst om disse spændende filmarrangementer kan du tilmelde dig vores nyhedsbrev.<br><br>

				Billetter kan refunderes - dog ikke efter forestillingens start. Husk at medbringe dit dankort/kreditkort samt gyldigt billed-ID. 
			</p>

			<div class="sub-menu">
				<a class="empire-history" href="about.php">Om Empire Bio's historie</a>
				<a class="ticket-prices selected" href="#">Billetpriser</a>
				<a class="wheelchair" href="wheelchair.php">Kørestolsbrugere</a>
				<a class="cafe-information" href="cafe-information.php">Café/Kiosken</a>	
			</div>

		</div>

		<?php 
			include('footer.php');
		?>

	</body>
</html>