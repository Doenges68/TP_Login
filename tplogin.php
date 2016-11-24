<?php
session_start();
$_SESSION['pseudo']='admin';
$_SESSION['password']='admin';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connection Page</title>
		<link rel="stylesheet" href="stylelogin.css">
		<script src="script.js"></script>
	</head>
	<body>
		<?php include ("tploginphp.php") ?>
			<form action="#" method="POST">
				<p>
					<label for="pseudo"><center>Pseudo: </center</label><input type="text" name="pseudo" />
						<br/>
						<br/>
					<label for="password"><center>Mot de passe: </center</label><input type="text" name="password" />
						<br/>
						<br/>
					<input type="submit" value="Connection" />
				</p>
			</form>
	</body>
</html>



