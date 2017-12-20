
			<?php
				if (filter_input(INPUT_POST, 'create')){
					
					$fn = filter_input(INPUT_POST, 'fn')
						or die('Missing/illegal firstname parameter');

					$ln = filter_input(INPUT_POST, 'ln')
						or die('Missing/illegal lastname parameter');
					
					$phone = filter_input(INPUT_POST, 'phone')
						or die('Missing/illegal phone number parameter');

					$mail = filter_input(INPUT_POST, 'mail')
						or die('Missing/illegal mail parameter');
					
					$pw = filter_input(INPUT_POST, 'pw')
						or die('Missing/illegal password parameter');
					
					$pw = password_hash($pw, PASSWORD_DEFAULT);
					
					
					$sql = 'INSERT INTO profile(firstname, lastname, phone, email, password) 
							VALUES(?, ?, ?, ?, ?);';
					$stmt = $con->prepare($sql);
					$stmt->bind_param("ssiss", $fn, $ln, $phone, $mail, $pw);
					$stmt->execute();
					
					if($stmt->affected_rows > 0){
						echo '<h2>User '.$fn.' '.$ln.' created</h2>';
					} else {
						echo '<h2>Could not create user, maybe he is in our system already! Try a diffrent name :-)</h2>';
					}
					
				}
			
			?>

			<div id="overlay">
				<div class="signup-box">

					<h1>Signup: </h1>

					<button onclick="off()" class="btn btn-secondary closeButton">X</button>

					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

					<fieldset>
						<input type="text" name="fn" placeholder="Firstname" required/>
						<input type="text" name="ln" placeholder="Lastname" required/>
						<input type="number" name="phone" placeholder="Phone" required/>
						<input type="email" name="mail" placeholder="Email" required/>
						<input type="password" name="pw" placeholder="Password" required/>

						<input type="submit" value="Sign Up" name="create" class="btn btn-success" />
					</fieldset>

					</form>
				</div>
			</div>
