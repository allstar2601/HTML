<html>

<head>
	<title>Fragebogen Waldhartsoftware</title>



	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="assest/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" />

	<script type="text/javascript" src="asset/js/jquery-3.3.1.min.js">
	</script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" href="asset/css/stylesheet.css">

</head>


<!-- Main -->

<body>

	<div class="container">
		<div class="row justify-content-md-center">
			<div class="header" style="margin-top: 20px">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<img src="static/images/logo.png">
					</div>
					<div class="col-md-6 col-sm-6 text-right">
						<h4>Fragebogen</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class=" w3-panel w3-blue w3-round-xlarge">
		<div class="fluid">
			<div class="col">
				<div id="topnav">
					<a href="https://www.waldhart.at/"><img src="Pictures/WS-Logo.png" height="50px"></a>
				</div>
			</div>
		</div>
	</div>

	<form method="post" action="action.php">
		<div class="container" style="">
			<div class="content Überschriften">
				<h3>1. Zum Einstieg - wie zufrieden bist du mit Waldhart Software?</h3>
				<div class="Abstand">
					<div class=" Bewertung1 ">
						<label>
							<input type="radio" name="Zufriedenheit" id="dunkelgruen" value="4">
							<img src="Pictures/Unbenannt.PNG">
						</label>

						<label>
							<input type="radio" class="" id="hellgruen" name="Zufriedenheit" value="3">
							<img src="Pictures/Unbenannt2.PNG" style="">
						</label>

						<label>
							<input type="radio" class="" id="gelber" name="Zufriedenheit" value="2">
							<img src="Pictures/Unbenannt3.PNG" style="">
						</label>

						<label>
							<input type="radio" class="" id="oranger" name="Zufriedenheit" value="1">
							<img src="Pictures/Unbenannt4.PNG" style="">
						</label>

						<label>
							<input type="radio" class="" id="roter" name="Zufriedenheit" value="0" required>
							<img src="Pictures/Unbenannt5.PNG" style="" >
						</label>
					</div>

				</div>
			</div>

		</div>
		<div class="container">
			<div class="item">
				<div class="content Überschriften">
					<h3>2. Wie zufrieden bist du mit unserer Erreichbarkeit?</h3>
					<div class="row Abstand">
						<table>
							<tr>
								<th></th>
								<th>erreiche ich immer</th>
								<th>erreiche ich meistens</th>
								<th>erreiche ich selten</th>
								<th>erreiche ich nie</th>
							</tr>
							<tr>
								<td>Support</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="ErreichbarkeitSupp" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="ErreichbarkeitSupp" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="ErreichbarkeitSupp" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="ErreichbarkeitSupp" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Kundenberater/In</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" z name="ErreichbarkeitBerat" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="ErreichbarkeitBerat" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="ErreichbarkeitBerat" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="ErreichbarkeitBerat" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="content Überschriften">
					<h3>3. Wie schätzt du die Lösungskompetenz unseres Betreuerteams ein?</h3>
					<div class="row Abstand">
						<table>
							<tr>
								<th></th>
								<th>sehr kompetent</th>
								<th>kompetent</th>
								<th>meist kompetent</th>
								<th>unkompetent</th>
							</tr>
							<tr>
								<td>Support</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="LoesungskompetenzSupp" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="LoesungskompetenzSupp" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="LoesungskompetenzSupp" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="LoesungskompetenzSupp" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>

							</tr>
							<tr>
								<td>Kundenberater/In</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="LoesungskompetenzBerat" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="LoesungskompetenzBerat" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="LoesungskompetenzBerat" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="LoesungskompetenzBerat" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>

							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="content Überschriften">
					<h3>4. Wie gut entsprechen unsere Produkte Deinem Bedarf ?</h3>
					<div class="row Abstand">

						<table>
							<tr>
								<th></th>
								<th>sehr gut</th>
								<th>gut</th>
								<th>nicht so gut</th>
								<th>überhaupt nicht gut</th>
								<th>nutze ich nicht</th>
							</tr>
							<tr>
								<td>WS Sports <br>(Skischulprogramm)</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BedarfSchul" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfSchul" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfSchul" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfSchul" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfSchul" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Ws Sports Mobil</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BedarfMobil" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfMobil" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfMobil" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfMobil" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfMobil" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Onlineshop</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BedarfShop" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfShop" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfShop" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfShop" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfShop" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>

								<td>Website</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BedarfWebsite" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfWebsite" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfWebsite" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfWebsite" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfWebsite" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Kundenportal MySports</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BedarfKunden" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfKunden" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfKunden" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfKunden" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfKunden" value="0" required >
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Numbirds</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BedarfNumbirds" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfNumbirds" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfNumbirds" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfNumbirds" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BedarfNumbirds" value="0"required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
						</table>

					</div>
				</div>
			</div>


		
			
				<div class="form-group" style="margin-top:10px;">
					
						<h4>Was können wir verbessern?</h4>
					
					<textarea class="form-control" rows="5" id="" name="vierVerbesserung"></textarea>
				</div>
			


			<div class="item">
				<div class="content Überschriften">
					<h3>5. Wie zufrieden bist du mit der Usability (Benutzerfreundlichkeit) unserer Produkte?</h3>
					<div class="row Abstand">
						<table>
							<tr>
								<th></th>
								<th>sehr benutzerfreundlich</th>
								<th>benutzerfreundlich</th>
								<th>wenig benutzerfreundlich</th>
								<th>nicht benutzerfreundlich</th>

							</tr>
							<tr>
								<td>WS Sports <br>(Skischulprogramm)</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitSchul" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitSchul" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitSchul" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitSchul" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>

								</span>
							</tr>
							<tr>
								<td>Ws Sports Mobil</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitMobil" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitMobil" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitMobil" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitMobil" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>

								</span>
							</tr>
							<tr>
								<td>Onlineshop</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitShop" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitShop" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitShop" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitShop" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>

								</span>
							</tr>
							<tr>
								<td>Website</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitWebsite" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitWebsite" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitWebsite" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitWebsite" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>

								</span>
							</tr>
							<tr>
								<td>Kundenportal MySports</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitKunden" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitKunden" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitKunden" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitKunden" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>

								</span>
							</tr>
							<tr>
								<td>Numbirds</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitNumbirds" value="3">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitNumbirds" value="2">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitNumbirds" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="BenutzerfreundlichkeitNumbirds" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>

								</span>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<p></p>
			
				<div class="form-group">
					
						<h4>Was können wir verbessern?</h4>
					
					<textarea class="form-control" rows="5" id="" name="fuenfVerbesserung"></textarea>
				</div>
			


			<div class="item">
				<div class="content Überschriften">
					<h3>6. Wie bewertest du dass Preis-/Leistungsverhältnis unserer Produkte?</h3>
					<div class="row Abstand">
						<table>
							<tr>
								<th></th>
								<th>sehr gut</th>
								<th>gut</th>
								<th>durschnittlich</th>
								<th>nicht so gut (teuer)</th>
								<th>schlecht (überteuert)</th>
							</tr>
							<tr>
								<td>WS Sports <br>(Skischulprogramm)</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="PreisLeistungSchul" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungSchul" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungSchul" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungSchul" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungSchul" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Ws Sports Mobil</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="PreisLeistungMobil" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungMobil" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungMobil" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungMobil" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungMobil" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Onlineshop</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="PreisLeistungShop" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungShop" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungShop" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungShop" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungShop" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Website</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="PreisLeistungWebsite" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungWebsite" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungWebsite" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungWebsite" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungWebsite" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Kundenportal MySports</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="PreisLeistungKunden" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungKunden" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungKunden" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungKunden" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungKunden" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Numbirds</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="PreisLeistungNumbirds" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungNumbirds" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungNumbirds" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungNumbirds" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="PreisLeistungNumbirds" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="content Überschriften">
					<h3>7. Wie zufrieden bist du im Allgemeinen mit unseren Produkten?</h3>
					<div class="row Abstand">
						<table>
							<tr>
								<th></th>
								<th>sehr zufrieden</th>
								<th>zufrieden</th>
								<th>neutral</th>
								<th>unzufrieden</th>
								<th>sehr unzufrieden</th>
							</tr>
							<tr>
								<td>Qualität</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="AllgZQuali" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZQuali" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZQuali" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZQuali" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZQuali" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Design</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="AllgZDesign" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZDesign" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZDesign" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZDesign" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZDesign" value="0"required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
							<tr>
								<td>Preis</td>
								<span class="bewertung">
									<td> <label>
											<input type="radio" name="AllgZPreis" value="4">
											<img src="Pictures/Unbenannt.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZPreis" value="3">
											<img src="Pictures/Unbenannt2.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZPreis" value="2">
											<img src="Pictures/Unbenannt3.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZPreis" value="1">
											<img src="Pictures/Unbenannt4.PNG">
										</label></td>
									<td> <label>
											<input type="radio" name="AllgZPreis" value="0" required>
											<img src="Pictures/Unbenannt5.PNG">
										</label></td>
								</span>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<p></p>
			
				<div class="form-group">
					<label for="comment">
						<h4>Was können wir verbessern?</h4>
					</label>
					<textarea class="form-control" rows="5" id="" name="siebenVerbesserung"></textarea>
				</div>
			
			<div class="item">
				<div class="content Überschriften">
					<h3>8. Wie lautet dein Gesamturteil über uns?</h3>
					<div class=" Bewertung1 ">
						<label>
							<input type="radio" name="Gesamturteil" value="4">
							<img src="Pictures/Unbenannt.PNG">
						</label>

						<label>
							<input type="radio" class="" name="Gesamturteil" value="3">
							<img src="Pictures/Unbenannt2.PNG" style="">
						</label>

						<label>
							<input type="radio" class="" name="Gesamturteil" value="2">
							<img src="Pictures/Unbenannt3.PNG" style="">
						</label>

						<label>
							<input type="radio" class="" name="Gesamturteil" value="1">
							<img src="Pictures/Unbenannt4.PNG" style="">
						</label>

						<label>
							<input type="radio" class="" name="Gesamturteil" value="0" required>
							<img src="Pictures/Unbenannt5.PNG" style="">
						</label>
					</div>

				</div>

			</div>
			<p></p>
			
				<div class="form-group">
					<label for="comment">
						<h4>Bitte nennen Sie uns die Gründe für Ihre Meinung</h4>
					</label>
					<textarea class="form-control" rows="5" id="" name="achtMeinung"></textarea>
				</div>
			


			<div class="item">
				<div class="content Überschriften">
					<h3>9. Haben Sie uns schon einmal weiterempfohlen?</h3>
					<div class=" Bewertung1 ">
						<label>
							<input type="radio" name="Weiterempfohlen" value="1">
							<img src="Pictures/grueneshakerl.PNG">
						</label>

						<label>
							<input type="radio" name="Weiterempfohlen" value="0"required >
							<img src="Pictures/rotesX.PNG" style="">
						</label>


					</div>

				</div>

			</div>


			
				<div class="form-group">		
						<h4>Wenn nein , warum nicht?</h4>				
					<textarea class="form-control" rows="5" id="" name="neunWeiterempfohlen"></textarea>
				</div>
			

			<div class="item">
				<div class="content Überschriften">
					<h3>10. Hier ist Platz für Ihre Kommentare</h3>
				</div>
			</div>


			<br>
			<br>
				<div class="form-group">
					<textarea class="form-control" rows="5" id="" name="zehnKommentar"></textarea>
				</div>
			<br>
			<br>
			<br>
			<div style="float:right; margin-bottom:50px;">
				<button type="submit" class="btn btn-primary">Senden</button>
			</div>
		</div>

	</form>
</body>

</html>
