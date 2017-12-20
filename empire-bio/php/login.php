			<?php
				if(filter_input(INPUT_POST, 'login')) {
					
					$em = filter_input(INPUT_POST, 'em', FILTER_VALIDATE_EMAIL)
						or die('Missing/illegal email parameter');
					
					$pw = filter_input(INPUT_POST, 'pw')
						or die('Missing/illegal password parameter');
					
					
					$sql = 'SELECT pid, firstname, password FROM profile WHERE email=?;';
					$stmt = $con->prepare($sql);
					$stmt->bind_param('s', $em);
					$stmt->execute();
					$stmt->bind_result($pid, $fname, $pwhash);
					
					while($stmt->fetch()){
						
					}
					
					if(password_verify($pw, $pwhash)) {
						$_SESSION['pid'] = $pid;
						$_SESSION['firstname'] = $fname;
					} else {
						echo '<p>The login has failed try again!</p>';
					}
				}
			?>

			<div class="login-box">

						<h2>Log ind: </h2>

					<?php 

					if(empty($_SESSION['pid'])) { ?>

						<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
							<fieldset>
								<input type="email" name="em" placeholder="Email" required/>
								<input type="password" name="pw" placeholder="Password" required/>
								<input type="submit" value="Log ind" name="login" class="btn btn-success" />
							</fieldset>
						</form>

					<?php } else { 

					echo '<h2>Du er logget ind</h2>'; ?><br><br>

					<form action="php/logout.php" method="post">
						<input type="submit" name="logout" value="Log ud" class="btn btn-danger">
					</form>	

					<?php } ?>

				</div>