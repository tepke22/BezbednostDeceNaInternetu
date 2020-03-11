<?php

$drustvene="";
$internet="";

	
$servername = "sql204.epizy.com";
$database = "epiz_25316721_baza1";
$username = "epiz_25316721";
$password = "123456789cpanel";
	
	// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
	date_default_timezone_set('Europe/Belgrade');
	$vreme=date('Y/m/d H:i:s');
	$pol=$_POST['rbPol'];
	$brGodina=$_POST['rbBrGodina'];
	$vremeZaK=$_POST['rbVremezak'];
	$vremeNaI=$_POST['rbVremenai'];
	$doba=$_POST['rbDoba'];
	$uredjaj=$_POST['rbUredjaj'];
	$brojU=$_POST['tbBrojUredjaja'];
	$dugoKoristite=$_POST['rbDugoKoristite'];
	$zivotBez=$_POST['rbZivotBez'];	
	
	foreach($_POST['cekirano_drustvene'] as $item){
		$drustvene = $drustvene.$item.";";
	}
	foreach($_POST['cekirano_internet'] as $item){
		$internet = $internet.$item.";";
	}
 
$sql = "INSERT INTO anketa (ID,pol,brGodina,vremeZaK,vremeNaI,doba,uredjaj,brojU,dugoKoristite,internetKoristite,drustveneMrezeKoristite,zivotBez,vreme) VALUES ('','$pol','$brGodina','$vremeZaK','$vremeNaI','$doba','$uredjaj','$brojU','$dugoKoristite','$internet','$drustvene','$zivotBez','$vreme')";
if (mysqli_query($conn, $sql)) {
} else {
      die(" Error: " . $sql . "<br>" . mysqli_error($conn));
}

mysqli_close($conn);		
	
?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="css/animate.min.css">
	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css" type="text/css"> 
		
		<link rel="icon" href="img/logo.png"> 
		<title>Bezbednost dece na internetu</title>

	</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">Bezbednost dece na internetu</a>	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.html">Početna <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="zloupotreba.html">Zloupotreba dece na Internetu</a>
      <a class="nav-item nav-link" href="zastita.html">Zaštita dece na Internetu</a>
      <a class="nav-item nav-link" href="anketa.html">Anketa</a>
	  <a class="nav-item nav-link" href="statistika2.php">Statistika</a>
	  <a class="nav-item nav-link" href="kontakt.html">Kontakt</a>
    </div>
  </div>
</nav>

<div class="glavni">

	<section class="snaslov"> 
      <div class="container">

        <header>
          <h1 class="naslov text-center">HVALA!!!</h1>
          <br><br>
        </header>

     </div>
    
	</section>
	
	<section id="footer">
		<div class="container">
			<div class="row" >
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5" >
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/bezbednostdecenainternetu/" target="_blank"><i class="fab fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/BInternetu" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/bezbednostdecenainternetu/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://plus.google.com/u/2/107964773571755895636" target="_blank"><i class="fab fa-google-plus"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	
</div>

		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/js.js"></script>	
</body>
</html>