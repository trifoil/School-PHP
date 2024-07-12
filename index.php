<?php
session_start();
if (isset($_POST['connection'])){
	$login = trim($_POST['login']);
	$password = SHA1(trim($_POST['password']));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trifoil | HOME</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<nav>
			<a href="."><h1>🛆TRIFOIL</h1></a>
			<ul>
				<li><div class="activated"><a href=".">Home</a></div></li>
				<li><a href=".">Projects</a></li>
				<li><a href=".">Contact</a></li>
				<li><a href=".">Account</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="news">
			<p>
				<?php
				echo "stop mewing";
				?>
			</p>
			<section id="login">
			<p>
				<?php
				$now=getdate();
				echo "{$now['mday']}/{$now['mon']}/{$now['year']} // {$now['hours']} : {$now['minutes']} : {$now['seconds']}";
				?>
			</p>
			</section>

		</section>
		<section>
			<form action="…" method="…">
				<fieldset>
					<section></section>
					<legend>Register</legend>
					<label for="login">Username :<br>
						<input type="text" name="login" id="login"><br>
					</label>
					<label for="password">Password :<br>
						<input type="password"><br>
					</label>

<label for="email">Email :<br>
<input type="email"><br>
</label>
<label for="tel">Phone number (optional) :<br>
<input type="tel"><br>
</label>
<section></section>

					<input type="submit" name="ok" value="Create my account"><br>

					<section></section>

				</fieldset>
			</form>
		</section>
		<section>
			<form action="">
				<fieldset>
				<section></section>

				<legend>
					Log in
				</legend>
				<label for="login">User :<br>
                	<input type="text" name="login" id="login"><br>
            	</label>
				<label for="password">Password :<br>
                		<input type="password" name="password" id="password"><br>
            	</label>
				<section></section>

				<input type="submit" name="connexion" value="Connect">
				</fieldset>
			</form>

		</section>
		<section>

		</section>
	</main>
	<footer>

	</footer>
</body>

</html>