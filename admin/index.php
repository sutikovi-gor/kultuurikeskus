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

		// if($_COOKIE['user'] == ''):

		?>

		<div class="row">
			<div class="col">

				<h1>Registratsiooni vorm</h1>
				<form action="./check.php" method="post">
				<input type="text" class="form-control" name="login" id="login" placeholder="sisestage login"><br>
				<input type="text" class="form-control" name="name" id="name" placeholder="sisestage nimi"><br>
				<input type="password" class="form-control" name="pass" id="pass" placeholder="sisestage salasona"><br>

				<button class="btn btn-success" type="submit">registreerida</button>
				</form>
			</div>
			
			<!--  <div class="col">
				<h1>Autoriseerimise vorm</h1>
				<form action="auth.php" method="post">
				<input type="text" class="form-control" name="login" id="login" placeholder="sisestage login"><br>
				<input type="password" class="form-control" name="pass" id="pass" placeholder="sisestage salasona"><br>

				<button class="btn btn-success" type="submit">Autoriseerida</button>
				</form>

			</div> 

		-->

		<?  //php else:  ?>



			<!--<p>Tervist <?=$_COOKIE['user']?>. Tagasi admin <a href="/praktika/">esilehele</a>.</p> -->
			<!--<a href="./kultuurikeskus"></a> -->

			

<!--Начало добавления новостей. временно не работает -->

			<div class="container" style="min-height: 400px;">
<div class="col-md-11">
	
	<h2>Lisa uudis </h2>
	<?php
	if (isset($test)) {
		if ($test==true) 
			{
	?>

	<div class="alert alert-info">
		<strong>Запись добавлена. </strong><a href="newsAdmin"> Список новостей</a>
	</div>
	<?php
		}
		else if ($test==false) 
		{
	?>

	<div class="alert alert-warning">
		<strong>Ошибка добавления записи!</strong><a href="newsAdmin"> Список новостей</a>
	</div>
	<?php
		}
	}
	else{
		?>
		<form method='POST' action="newsAddResult" enctype="multipart/form-data">
		<table class='table table-bordered'>
			<tr>
				<td>Uudise tiitel</td>
				<td><input type="text" name="title" class="form-control" required></td>
			</tr>
			<tr>
				<td>Uudise tekst</td>
				<td><textarea rows="5" name="text" class="form-control" required></textarea></td>
			</tr>
			<tr>
				<td>Uudise kategooria</td>
				<td>
					<select name="idCategory" class="form-control">
						<?php
							foreach ($arr as $row) {
								echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Lisa pilt</td>
				<td><div>
					<input type="file" name="picture" style="color:black;">
				</div></td>
			</tr>

			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary" name="save">
						<span class="glyphicon glyphicon-plus"></span> Salvesta
					</button>
					<a href="newsAdmin" class="btn btn-large btn-success">
						<i class="glyphicon glyphicon-backward"></i> &nbsp;Tagasi nimekirja juurde</a>
				</td>
			</tr>
		</table>
	</form>
	<?php
	}
	?>
</div>
</div>

<!-- конец добавления новостей
-->

<br><br>
<br>
			<p>Üleminek <a href="./exit.php">admin lehele</a></p>

		<? //php endif;?>

		</div>
	

	</div>

</body>
</html>