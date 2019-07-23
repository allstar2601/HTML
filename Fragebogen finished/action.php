<?php
session_start();

// require_once "database.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db855337";

$conn = new mysqli($servername, $username, $password, $dbname);

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$data = array
	(
    'Zufriedenheit' => $_POST["Zufriedenheit"],
	
    'ErreichbarkeitSupp' => $_POST["ErreichbarkeitSupp"],
	'ErreichbarkeitBerat' => $_POST["ErreichbarkeitBerat"],
	
    'LoesungskompetenzSupp' => $_POST["LoesungskompetenzSupp"],
	'LoesungskompetenzBerat' => $_POST["LoesungskompetenzBerat"],
	
    'BedarfSchul' => $_POST["BedarfSchul"],
	'BedarfMobil' => $_POST["BedarfMobil"],
	'BedarfShop' => $_POST["BedarfShop"],
	'BedarfWebsite' => $_POST["BedarfWebsite"],
	'BedarfKunden' => $_POST["BedarfKunden"],
	'BedarfNumbirds' => $_POST["BedarfNumbirds"],
	
    'BenutzerfreundlichkeitSchul' => $_POST["BenutzerfreundlichkeitSchul"],
	'BenutzerfreundlichkeitMobil' => $_POST["BenutzerfreundlichkeitMobil"],
	'BenutzerfreundlichkeitShop' => $_POST["BenutzerfreundlichkeitShop"],
	'BenutzerfreundlichkeitWebsite' => $_POST["BenutzerfreundlichkeitWebsite"],
	'BenutzerfreundlichkeitKunden' => $_POST["BenutzerfreundlichkeitKunden"],
	'BenutzerfreundlichkeitNumbirds' => $_POST["BenutzerfreundlichkeitNumbirds"],
	
    'PreisLeistungSchul' => $_POST["PreisLeistungSchul"],
	'PreisLeistungMobil' => $_POST["PreisLeistungMobil"],
	'PreisLeistungShop' => $_POST["PreisLeistungShop"],
	'PreisLeistungWebsite' => $_POST["PreisLeistungWebsite"],
	'PreisLeistungKunden' => $_POST["PreisLeistungKunden"],
	'PreisLeistungNumbirds' => $_POST["PreisLeistungNumbirds"],
		
	'AllgZQuali' => $_POST["AllgZQuali"],
	'AllgZDesign' => $_POST["AllgZDesign"],
	'AllgZPreis' => $_POST["AllgZPreis"],
	
    'Gesamturteil' => $_POST["Gesamturteil"],
   
	'vierVerbesserung' => nl2br($_POST["vierVerbesserung"]),
	'fuenfVerbesserung' => nl2br($_POST["fuenfVerbesserung"]),
	'siebenVerbesserung' => nl2br($_POST["siebenVerbesserung"]),
	'achtMeinung' => nl2br($_POST["achtMeinung"]),
	'neunWeiterempfohlen' => nl2br($_POST["neunWeiterempfohlen"]),
	'zehnKommentar' => nl2br($_POST["zehnKommentar"])
	);


	$Zufriedenheit = $data['Zufriedenheit'];

	$ErreichbarkeitSupp = $data['ErreichbarkeitSupp'];
	$ErreichbarkeitBerat = $data['ErreichbarkeitBerat'];

	$LoesungskompetenzSupp = $data['LoesungskompetenzSupp'];
	$LoesungskompetenzBerat = $data['LoesungskompetenzBerat'];

	$BedarfSchul = $data['BedarfSchul'];
	$BedarfMobil = $data['BedarfMobil'];
	$BedarfShop = $data['BedarfShop'];
	$BedarfWebsite = $data['BedarfWebsite'];
	$BedarfKunden = $data['BedarfKunden']; 
	$BedarfNumbirds = $data['BedarfNumbirds'];

	$BenutzerfreundlichkeitSchul = $data['BenutzerfreundlichkeitSchul'];
	$BenutzerfreundlichkeitMobil = $data['BenutzerfreundlichkeitMobil'];
	$BenutzerfreundlichkeitShop = $data['BenutzerfreundlichkeitShop'];
	$BenutzerfreundlichkeitWebsite = $data['BenutzerfreundlichkeitWebsite'];
	$BenutzerfreundlichkeitKunden = $data['BenutzerfreundlichkeitKunden'];
	$BenutzerfreundlichkeitNumbirds = $data['BenutzerfreundlichkeitNumbirds'];

	$PreisLeistungSchul = $data['PreisLeistungSchul'];
	$PreisLeistungMobil = $data['PreisLeistungMobil'];
	$PreisLeistungShop = $data['PreisLeistungShop'];
	$PreisLeistungWebsite = $data['PreisLeistungWebsite'];
	$PreisLeistungKunden = $data['PreisLeistungKunden'];
	$PreisLeistungNumbirds = $data['PreisLeistungNumbirds'];

	$AllgZQuali = $data['AllgZQuali'];
	$AllgZDesign = $data['AllgZDesign'];
	$AllgZPreis = $data['AllgZPreis'];

	$Gesamturteil = $data['Gesamturteil'];

	$vierVerbesserung = $data['vierVerbesserung'];
	$fuenfVerbessrung = $data['fuenfVerbesserung'];
	$siebenVerbesserung = $data['siebenVerbesserung'];
	$achtMeinung = $data['achtMeinung'];
	$neunWeiterempfohlen = $data['neunWeiterempfohlen'];
	$zehnKommentar = $data['zehnKommentar'];

$sql = "INSERT INTO fragebogen (Zufriedenheit , ErreichbarkeitSupp , ErreichbarkeitBerat , LoesungskompetenzSupp ,LoesungskompetenzBerat , BedarfSchul ,BedarfMobil , BedarfShop , BedarfWebsite, BedarfKunden, BedarfNumbirds, BenutzerfreundlichkeitSchul, BenutzerfreundlichkeitMobil, BenutzerfreundlichkeitShop, BenutzerfreundlichkeitWebsite, BenutzerfreundlichkeitKunden, BenutzerfreundlichkeitNumbirds, PreisLeistungSchul, PreisLeistungMobil, PreisLeistungShop, PreisLeistungWebsite, PreisLeistungKunden, PreisLeistungNumbirds, AllgZQuali, AllgZDesign, AllgZPreis, Gesamturteil, vierVerbesserung,fuenfVerbesserung ,siebenVerbesserung , achtMeinung , neunWeiterempfohlen , zehnKommentar) VALUES (' $Zufriedenheit' , '$ErreichbarkeitSupp' , '$ErreichbarkeitBerat' , '$LoesungskompetenzSupp' , '$LoesungskompetenzBerat' ,' $BedarfSchul ' , '$BedarfMobil' ,'$BedarfShop','$BedarfWebsite','$BedarfKunden','$BedarfNumbirds','$BenutzerfreundlichkeitSchul','$BenutzerfreundlichkeitMobil','$BenutzerfreundlichkeitShop','$BenutzerfreundlichkeitWebsite','$BenutzerfreundlichkeitKunden','$BenutzerfreundlichkeitNumbirds','$PreisLeistungSchul','$PreisLeistungMobil','$PreisLeistungShop','$PreisLeistungWebsite','$PreisLeistungKunden','$PreisLeistungNumbirds','$AllgZQuali','$AllgZDesign','$AllgZPreis','$Gesamturteil','$vierVerbesserung','$fuenfVerbessrung','$siebenVerbesserung','$achtMeinung','$neunWeiterempfohlen','$zehnKommentar')";

	if ($conn->query($sql) === TRUE) 
	{
		echo "Insert successfull";
	} else {
		echo "Insert failed: " . $conn->error;
	}

$conn->close();

?>

<html>

<head>
	<title>Fragebogen Waldhart</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="asset/css/bootstrap-grid.min.css">

	<script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

	<style>
		h4 {
			font-size: 17px;
			margin-top: 20px;
		}

	</style>
</head>

<body>

	<div class="container">
		<div class="row justify-content-md-center">

			<div class="col col-6">
				<div class="login-form-header" style="margin-top: 100px">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<img src="static/images/logo.png">
						</div>
						<div class="col-md-6 col-sm-6 text-right">
							<h4>Fragebogen</h4>
						</div>
					</div>
				</div>

				<h1 style="text-align: center; margin-top: 50px; color: #4A96D2;">Vielen
					Dank für Ihr Feedback</h1>
			</div>
		</div>
	</div>
</body>

</html>
