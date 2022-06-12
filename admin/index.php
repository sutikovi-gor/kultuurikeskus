<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registratsiooni vorm</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css\style.css">

</head>
<body>
	<div class="container mt-4">

		<?php

		if($_COOKIE['user'] == ''):

		?>

		<div class="row">
			<div class="col">

				<h1>Registratsiooni vorm</h1>
				<form action="check.php" method="post">
				<input type="text" class="form-control" name="login" id="login" placeholder="sisestage login"><br>
				<input type="text" class="form-control" name="name" id="name" placeholder="sisestage nimi"><br>
				<input type="password" class="form-control" name="pass" id="pass" placeholder="sisestage salasona"><br>

				<button class="btn btn-success" type="submit">registreerida</button>
				</form>
			</div>
			<div class="col">
				<h1>Autoriseerimise vorm</h1>
				<form action="auth.php" method="post">
				<input type="text" class="form-control" name="login" id="login" placeholder="sisestage login"><br>
				<input type="password" class="form-control" name="pass" id="pass" placeholder="sisestage salasona"><br>

				<button class="btn btn-success" type="submit">Autoriseerida</button>
				</form>

			</div> 

		<?php else:  ?>



			<!--<p>Tervist <?=$_COOKIE['user']?>. Tagasi admin <a href="/praktika/">esilehele</a>.</p> -->
			<!--<a href="./kultuurikeskus"></a> -->
			<p>Üleminek <a href="./index.php">admin lehele</a></p>

		<?php endif;?>

		</div>
	

	</div>

</body>
</html>