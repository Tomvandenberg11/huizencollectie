<!doctype html>
<html>

<head>
	<title> Hendriks &amp; Berg - Welkom</title>
	<link href="main.css" type="text/css" rel="stylesheet">
	<link href="/Images/favicon.ico" rel="icon" type="image/x-icon" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<meta name="author" content="Tom van den Berg">
	<meta lang="nl" charset="utf-8">
	<meta name="description" content="webshop">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div id="wrap">
		<div class="top">
			<header>
				<div id="cart">
					<a href="inlog.php"> <img id="user" src="http://www.jedox.com/wp-content/themes/jedox-wp-theme-v2/images/icons/business-user-white.png" alt="user"></a><a href="#"> <img id="shopicon" src="http://www.clker.com/cliparts/e/Z/D/V/W/u/shopping-cart-hi.png" alt="Shop"></a>

				</div>
				<br/>

				<div id="logo">
					<img src="img/logo%20cut.png" alt="Logo">
				</div>
				<h3>Waarom? Daarom.</h3>
				<br/>
			</header>
			<nav>
				<ul>
					<li><a id="eerste" class="selected" href="index.html">Home</a></li>
					<li><a href="shop.html">Shop</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>








		<main>
			<!--
                <div id="logcheck">
                    <p>U bent niet ingelogd.</p>
                </div>
-->

			<section class="login" id="inloggen">
				<h3>Welkom</h3>

				<?php
	if (isset($_POST['submit_btn'])){
		$username = $_POST['name'];
		$password = $_POST['pwd'];
		
		//haal inloggegevens op
		$userData = file_get_contents('accounts.txt');
		
		//stel de data uit de submit samen
		$inputUser = $username . " - " . $password . "; ";
		
		$isItThere = strpos ($userData, $inputUser);
		
		if ($isItThere === false) {
			echo "<p>Naam en wachtwoord combinatie is niet gevonden.</p>";
			session_start();
			$_SESSION ['user'] = "";
			
			//remove all session variables
			session_unset();
			//destroy the sessions
			session_destroy();
		}
		else{
			echo "<p>U bent nu ingelogd!</p>";
			session_start();
			$_SESSION['user'] = $username;
			
		}
	}
?>

					<form action="" method="post">
						<h1>Inloggen</h1>
						<p>
							<label>Gebruikersnaam:</label>
							<input class="velden" type="text" name="name" required="required" autofocus placeholder="Typ hier" />
							<br/>
							<br/>
							<label>Wachtwoord:</label>
							<input class="velden" type="password" name="pwd" required="required" placeholder="Typ hier" />
							<br/>
							<br/>
							<br/>
						</p>
						<input class="buttons" type="submit" name="submit_btn" id="submit" value="Inloggen" />
						<input class="buttons" type="reset" id="reset" value="Resetten" />
						<br/>
						<br/>
						<p>Heeft u nog geen account? Klik <a href="register.php">hier</a> om te registreren.</p>

					</form>
			</section>
			<br/>
			<br/>


		</main>
		<footer>
			<p>Jim Hendriks &amp; Tom van den Berg</p>
		</footer>
	</div>
</body>

</html>