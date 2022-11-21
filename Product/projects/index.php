 <?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="input.css">
<link rel="stylesheet" type="text/css" href="webtitle.css">
<head>
<title>Tunas Muda eDisiplinary System</title>

		<?php
		 echo '<p class="webtitle">Tunas Muda eDisciplinary System</p>';
		?>
</head>

<main align = "center">

	<form action="code/login.code.php" method="post">

	<h1 align="center">Login</h1>

	<div class="imgcontainer">
			<img src="img/logo.png" alt="Avatar" class="avatar">
	</div>

			<div class="container">
				<label for="uname"><b>Username</b></label><br>
				<input type="text" name="mailUID" placeholder="Username/E-mail" required><br>

				<label for="pswd"><b>Password</b></label><br>
				<input type="password" name="pswd" placeholder="Password"><br>

				<button type="submit" name="login-submit">Login</button><br>
			</form>
			<br><a class="register" href="signup.php">Register / Signup</a><br><br><br>
</main>
