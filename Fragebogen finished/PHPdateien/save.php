<?php
require_once "static/database.php";

$data = array(
    'Skischule' => $_POST["Skischule"],
    'Namen' => $_POST["Namen"],
    'Erreichbarkeit' => $_POST["erreichbarkeit"],
    'Support' => $_POST["support"],
    'Beratung' => $_POST["beratung"],
    'Loesungskompetenz' => $_POST["loesungskompetenz"],
    'WsSports' => $_POST["wsSports"],
    'Onlineshop' => $_POST["onlineshop"],
    'WsSportsMobil' => $_POST["WsSportsMobil"],
    'Numbirds' => $_POST["numbirds"],
    'KundenportalMySports' => $_POST["kundenportalMySports"],
    'Website' => $_POST["website"],
    'Bedienerfreundlichkeit' => $_POST["bedienerfreundlichkeit"],
    'Kommentar' => ($_POST["kommentar"])
);

$Skischule = $data['Skischule'];
$Name = $data['Namen'];
$Erreichbarkeit = $data['Erreichbarkeit'];
$Support = $data['Support'];
$Beratung = $data['Beratung'];
$Loesungskompetenz = $data['Loesungskompetenz'];
$WsSports = $data['WsSports'];
$Onlineshop = $data['Onlineshop'];
$WsSportsMobil = $data['WsSportsMobil'];
$Numbirds = $data['Numbirds'];
$KundenportalMySports = $data['KundenportalMySports'];
$Website = $data['Website'];
$Bedienerfreundlichkeit = $data['Bedienerfreundlichkeit'];
$Kommentar = $data['Kommentar'];

$sql = "INSERT INTO fragebogen (Skischule , Name , Erreichbarkeit , Support ,Beratung , Loesungskompetenz ,WsSports ,Onlineshop ,WsSportsMobil , Numbirds ,KundenportalMySports ,Website ,Bedienerfreundlichkeit,Kommentar ) VALUES (' $Skischule' , '$Name' , '$Erreichbarkeit' , '$Support' , '$Beratung' ,'$Loesungskompetenz' , '$WsSports' ,'$Onlineshop','$WsSportsMobil','$Numbirds','$KundenportalMySports' ,'$Website' ,'$Bedienerfreundlichkeit' ,'$Kommentar')";


print($sql);

 $stmt = $conn->prepare($sql);
 if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }


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
