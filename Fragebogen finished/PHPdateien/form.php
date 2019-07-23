<?php
session_start();


?>

<html>

<head>
	<title>Fragebogen Waldhart</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="asset/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="asset/css/strenebewertung.css">

	<script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="asset/js/generate.js"></script>

	<style>
		h4 {
			font-size: 17px;
			margin-top: 20px;
		}

		#generated-link-box.aktiv {
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 5px;
		}


		.form-group {

			margin-bottom: 1rem;
			display: block;
			overflow: hidden;

		}

	</style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col col-12">
				<div class="login-form-header" style="margin-top: 100px">
					<div class="row">
						<div class="col-md-6 col-sm-6"><img src="static/images/logo.png"></div>
						<div class="col-md-6 col-sm-6 text-right">
							<h4>Fragebogen</h4>
						</div>
					</div>
				</div>
				<div class="" style="margin-top: 50px">

					<div class="form-group">
						<form method="post" action="save.php">
							<div class="">
								<div class="form-group">
									<input type="text" readonly name="Skischule" value="<?php echo $_GET["Skischule"]; ?>" class="form-control" />
								</div>
								<div class="form-group">
									<input type="text" readonly name="Namen" value="<?php echo $_GET["Namen"]; ?>" class="form-control" />
								</div>
								<input type="hidden" name="Datum" value="<?php echo time(); ?>" />
							</div>

							<legend> Erreichbarkeit von Support und Kundenberatern</legend>
							<div class="form-group">
								<span class="sternebewertung">
									<input type="radio" id="stern5" name="erreichbarkeit" value="5"><label for="stern5" title="5 Sterne">5 Sterne</label>
									<input type="radio" id="stern4" name="erreichbarkeit" value="4"><label for="stern4" title="4 Sterne">4 Sterne</label>
									<input type="radio" id="stern3" name="erreichbarkeit" value="3"><label for="stern3" title="3 Sterne">3 Sterne</label>
									<input type="radio" id="stern2" name="erreichbarkeit" value="2"><label for="stern2" title="2 Sterne">2 Sterne</label>
									<input type="radio" id="stern1" name="erreichbarkeit" value="1" required><label for="stern1" title="1 Stern">1 Stern</label>
									<span id="Bewertung">
										<label>
											Erreichbarkeit:
										</label>
									</span>
								</span>
							</div>
							<div class="form-group">
								<span class="sternebewertung">
									<input type="radio" id="stern5-1" name="support" value="5"><label for="stern5-1" title="5 Sterne">5 Sterne</label>
									<input type="radio" id="stern4-1" name="support" value="4"><label for="stern4-1" title="4 Sterne">4 Sterne</label>
									<input type="radio" id="stern3-1" name="support" value="3"><label for="stern3-1" title="3 Sterne">3 Sterne</label>
									<input type="radio" id="stern2-1" name="support" value="2"><label for="stern2-1" title="2 Sterne">2 Sterne</label>
									<input type="radio" id="stern1-1" name="support" value="1" required><label for="stern1-1" title="1 Stern">1 Stern</label>
									<span id="Bewertung">
										<label>
											Support:
										</label>
									</span>
								</span>
							</div>
							<div class="form-group">
								<span class="sternebewertung">
									<input type="radio" id="stern5-2" name="beratung" value="5"><label for="stern5-2" title="5 Sterne">5 Sterne</label>
									<input type="radio" id="stern4-2" name="beratung" value="4"><label for="stern4-2" title="4 Sterne">4 Sterne</label>
									<input type="radio" id="stern3-2" name="beratung" value="3"><label for="stern3-2" title="3 Sterne">3 Sterne</label>
									<input type="radio" id="stern2-2" name="beratung" value="2"><label for="stern2-2" title="2 Sterne">2 Sterne</label>
									<input type="radio" id="stern1-2" name="beratung" value="1" required><label for="stern1-2" title="1 Stern">1 Stern</label>
									<span id="Bewertung">
										<label>
											Beratung:
										</label>
									</span>
								</span>
							</div>

							<legend>Lösungskompetenz des Betreuerteams</legend>
							<div class="form-group">
								<span class="sternebewertung">
									<input type="radio" id="stern5-3" name="loesungskompetenz" value="5"><label for="stern5-3" title="5 Sterne">5 Sterne</label>
									<input type="radio" id="stern4-3" name="loesungskompetenz" value="4"><label for="stern4-3" title="4 Sterne">4 Sterne</label>
									<input type="radio" id="stern3-3" name="loesungskompetenz" value="3"><label for="stern3-3" title="3 Sterne">3 Sterne</label>
									<input type="radio" id="stern2-3" name="loesungskompetenz" value="2"><label for="stern2-3" title="2 Sterne">2 Sterne</label>
									<input type="radio" id="stern1-3" name="loesungskompetenz" value="1" required><label for="stern1-3" title="1 Stern">1 Stern</label>

								</span>
							</div>

							<legend>Nutzen der Tools</legend>

							<div class="pl-5">
								<legend class="small small-legend">WS Sports</legend>
								<div class="form-group">
									<span class="sternebewertung">
										<input type="radio" id="stern5-4" name="wsSports" value="5"><label for="stern5-4" title="5 Sterne">5 Sterne</label>
										<input type="radio" id="stern4-4" name="wsSports" value="4"><label for="stern4-4" title="4 Sterne">4 Sterne</label>
										<input type="radio" id="stern3-4" name="wsSports" value="3"><label for="stern3-4" title="3 Sterne">3 Sterne</label>
										<input type="radio" id="stern2-4" name="wsSports" value="2"><label for="stern2-4" title="2 Sterne">2 Sterne</label>
										<input type="radio" id="stern1-4" name="wsSports" value="1" required><label for="stern1-4" title="1 Stern">1 Stern</label>

									</span>
								</div>

								<legend class="small small-legend">Onlineshop</legend>
								<div class="form-group">
									<span class="sternebewertung">
										<input type="radio" id="stern5-5" name="onlineshop" value="5"><label for="stern5-5" title="5 Sterne">5 Sterne</label>
										<input type="radio" id="stern4-5" name="onlineshop" value="4"><label for="stern4-5" title="4 Sterne">4 Sterne</label>
										<input type="radio" id="stern3-5" name="onlineshop" value="3"><label for="stern3-5" title="3 Sterne">3 Sterne</label>
										<input type="radio" id="stern2-5" name="onlineshop" value="2"><label for="stern2-5" title="2 Sterne">2 Sterne</label>
										<input type="radio" id="stern1-5" name="onlineshop" value="1" required><label for="stern1-5" title="1 Stern">1 Stern</label>

									</span>
								</div>

								<legend class="small small-legend">WS Sports Mobil</legend>
								<div class="form-group">
									<span class="sternebewertung">
										<input type="radio" id="stern5-6" name="WsSportsMobil" value="5"><label for="stern5-6" title="5 Sterne">5 Sterne</label>
										<input type="radio" id="stern4-6" name="WsSportsMobil" value="4"><label for="stern4-6" title="4 Sterne">4 Sterne</label>
										<input type="radio" id="stern3-6" name="WsSportsMobil" value="3"><label for="stern3-6" title="3 Sterne">3 Sterne</label>
										<input type="radio" id="stern2-6" name="WsSportsMobil" value="2"><label for="stern2-6" title="2 Sterne">2 Sterne</label>
										<input type="radio" id="stern1-6" name="WsSportsMobil" value="1" required><label for="stern1-6" title="1 Stern">1 Stern</label>
									</span>
								</div>

								<legend class="small small-legend">Numbirds</legend>
								<div class="form-group">
									<span class="sternebewertung">
										<input type="radio" id="stern5-7" name="numbirds" value="5"><label for="stern5-7" title="5 Sterne">5 Sterne</label>
										<input type="radio" id="stern4-7" name="numbirds" value="4"><label for="stern4-7" title="4 Sterne">4 Sterne</label>
										<input type="radio" id="stern3-7" name="numbirds" value="3"><label for="stern3-7" title="3 Sterne">3 Sterne</label>
										<input type="radio" id="stern2-7" name="numbirds" value="2"><label for="stern2-7" title="2 Sterne">2 Sterne</label>
										<input type="radio" id="stern1-7" name="numbirds" value="1" required><label for="stern1-7" title="1 Stern">1 Stern</label>
									</span>
								</div>

								<legend class="small small-legend">Kundenportal mySports</legend>
								<div class="form-group">
									<span class="sternebewertung">
										<input type="radio" id="stern5-8" name="kundenportalMySports" value="5"><label for="stern5-8" title="5 Sterne">5 Sterne</label>
										<input type="radio" id="stern4-8" name="kundenportalMySports" value="4"><label for="stern4-8" title="4 Sterne">4 Sterne</label>
										<input type="radio" id="stern3-8" name="kundenportalMySports" value="3"><label for="stern3-8" title="3 Sterne">3 Sterne</label>
										<input type="radio" id="stern2-8" name="kundenportalMySports" value="2"><label for="stern2-8" title="2 Sterne">2 Sterne</label>
										<input type="radio" id="stern1-8" name="kundenportalMySports" value="1" required><label for="stern1-8" title="1 Stern">1 Stern</label>
									</span>
								</div>

								<legend class="small small-legend">Website</legend>
								<div class="form-group">
									<span class="sternebewertung">
										<input type="radio" id="stern5-9" name="website" value="5"><label for="stern5-9" title="5 Sterne">5 Sterne</label>
										<input type="radio" id="stern4-9" name="website" value="4"><label for="stern4-9" title="4 Sterne">4 Sterne</label>
										<input type="radio" id="stern3-9" name="website" value="3"><label for="stern3-9" title="3 Sterne">3 Sterne</label>
										<input type="radio" id="stern2-9" name="website" value="2"><label for="stern2-9" title="2 Sterne">2 Sterne</label>
										<input type="radio" id="stern1-9" name="website" value="1" required><label for="stern1-9" title="1 Stern">1 Stern</label>
									</span>
								</div>

								<legend>Bedienerfreundlichkeit</legend>
								<div class="form-group">
									<span class="sternebewertung">
										<input type="radio" id="stern5-10" name="bedienerfreundlichkeit" value="5"><label for="stern5-10" title="5 Sterne">5 Sterne</label>
										<input type="radio" id="stern4-10" name="bedienerfreundlichkeit" value="4"><label for="stern4-10" title="4 Sterne">4 Sterne</label>
										<input type="radio" id="stern3-10" name="bedienerfreundlichkeit" value="3"><label for="stern3-10" title="3 Sterne">3 Sterne</label>
										<input type="radio" id="stern2-10" name="bedienerfreundlichkeit" value="2"><label for="stern2-10" title="2 Sterne">2 Sterne</label>
										<input type="radio" id="stern1-10" name="bedienerfreundlichkeit" value="1" required><label for="stern1-10" title="1 Stern">1 Stern</label>
									</span>
								</div>
							</div>

							<legend>Kommentar</legend>
							<div class="form-group">
								<textarea class="form-control form-control-lg form-text" name="kommentar"></textarea>
							</div>




							<div class="text-right">
								<button type="submit" id="save-form-btn" class="btn btn-default">Absenden</button>
							</div>
						</form>
					</div>
				</div>

				<div id="generated-link-box">

				</div>
			</div>
		</div>
	</div>
</body>

</html>
