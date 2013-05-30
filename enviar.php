<?php
	if ($_POST['mail_send'] != '') {
		$missatge = file_get_contents("plantilla.html");
		$headers = "From: Dídac <didac.rios@gmail.com>\nContent-Type: text/html; charset=utf-8";

		mail('didac.rios@gmail.com', 'Felicitats Teresa, aquí tens el teu regal', $missatge, $headers);
	}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>24</title>
		<meta name="description" content="A Collection of Page Transitions with CSS Animations" />
		<meta name="keywords" content="page transition, css animation, website, effect, css3, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/multilevelmenu.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/animations.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="pt-triggers">
			<button id="iterateEffects" class="disparador pt-touch-button">Qui vols que sigui?</button>
			<button id="elKO" class="pt-touch-button">Ningú en concret</button>
		</div><!-- /triggers -->

		<!--- FICAR AQUI LES PAGINES -->

		<div id="pt-main" class="pt-perspective">
			<div class="pt-page pt-page-1">
				<h1>
					<span>Benvinguda</span><strong>Qui</strong> ets?
				</h1>
			</div>

			<div class="pt-page pt-page-2">
				<h1>
					<span style="font-size:100%">Moltes Felicitats !!!</span>
					<i class="icon-pastis" style="font-size:200%"></i>


				</h1>
			</div>
			<div class="pt-page pt-page-3">
				<h1>
					Què fas el <span style="font-size:140%">5, 6 i 7 de juliol?</span>
					<i class="icon-calendari" style="font-size:110%"></i>
				</h1>
			</div>

			<div class="pt-page pt-page-4">
				<h1>
					Doncs prepara la <i class="icon-maleta" style="font-size:90%"></i> que agafem el <i class="icon-cotxe" style="font-size:130%"></i>
				</h1>
			</div>

			<div class="pt-page pt-page-5">
				<h1>
					<span>Dissabte</span>
					Ferrada
					<i class="icon-ferrada" style="font-size:150%"></i>
				</h1>
			</div>

			<div class="pt-page pt-page-6">
				<h1>
					<span>Dissabte <strong>nit</strong></span>
					Sopar de gala
					<i class="icon-gala" style="font-size:150%"></i>
				</h1>
			</div>

			<div class="pt-page pt-page-7">
				<h1>
					<span>Diumenge <strong>mati</strong></span>
					Relax
					<i class="icon-piscina" style="font-size:150%"></i>
				</h1>
			</div>

			<div class="pt-page pt-page-8">
				<h1>
					<span style="font-size:200%">Que <strong>et</strong> sembla?</span>
					Vols el cap de setmana?
				</h1>
			</div>


			<div class="pt-page pt-page-9">
				<h1>
					<span>L'últim pas</span><br>
					Deixa'ns el teu correu i rebràs tots els detalls del teu cap de setmana
					<form action="enviar.php" method="post">
						<input type="email" name="mail_send" id="mail_send">
						<input type="submit" value="Apunta't">
					</form>
				</h1>
			</div>			

		</div>

		<div class="pt-message">
			<p>Ep, el teu navegador no soporta aquests efectes, poder millor mira-ho des d'un altre dispositiu</p>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script src="js/pagetransitions.js"></script>
	</body>
</html>
