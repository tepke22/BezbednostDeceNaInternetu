<?php
	
$servername = "sql204.epizy.com";
$database = "epiz_25316721_baza1";
$username = "epiz_25316721";
$password = "123456789cpanel";
	

$conn = mysqli_connect($servername, $username, $password, $database);


$brGodManje=$brGodVise=$brGodIzmedju="";
$brm=$brz="";
$vremeZaK1=$vremeZaK2=$vremeZaK3=$vremeZaK4="";
$vremeNaI1=$vremeNaI2=$vremeNaI3=$vremeNaI4="";
$doba1=$doba2=$doba3=$doba4=$doba5="";
$uredjaj1=$uredjaj2=$uredjaj3=$uredjaj4="";
$brojU1=$brojU2=$brojU3="";
$dugoKoristite1=$dugoKoristite2=$dugoKoristite3=$dugoKoristite4=$dugoKoristite5="";
$zivotBez1=$zivotBez2="";
$facebook=$twitter=$instagram=$snapchat=$pinterest="";
$vesti_info=$video=$muzika=$knjige=$soc_mreže=$igrice=$shopping=$igre_na_srecu="";


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
	$sql = "SELECT pol,brGodina,vremeZaK,vremeNaI,doba,uredjaj,brojU,dugoKoristite,drustveneMrezeKoristite,internetKoristite,zivotBez FROM anketa";
	$result = mysqli_query($conn, $sql);
	
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		
		//------BROJI POLOVE-----
		if($row['pol'] == "Muški")
		{
			$brm++;
		}
		else if($row['pol'] == "Ženski")
		{
			$brz++;
		}
		
		
		//------BROJI BROJ GODINA-----
		if($row['brGodina'] == "manje od 13")
		{
			$brGodManje++;
		}
		else if($row['brGodina'] == "više od 19")
		{
			$brGodVise++;
		}
		else if($row['brGodina'] == "13 - 19")
		{
			$brGodIzmedju++;
		}
		
		//------VREME ZA KOMPJUTEROM-----
		if($row['vremeZaK'] == "retko koristim kompjuter")
		{
			$vremeZaK1++;
		}
		else if($row['vremeZaK'] == "najviše 2 sata dnevno")
		{
			$vremeZaK2++;
		}
		else if($row['vremeZaK'] == "najviše 5 sata dnevno")
		{
			$vremeZaK3++;
		}
		else if($row['vremeZaK'] == "neprekidno")
		{
			$vremeZaK4++;
		}
		
		
		
		//------VREME NA INTERNETU-----
		if($row['vremeNaI'] == "retko koristim internet")
		{
			$vremeNaI1++;
		}
		else if($row['vremeNaI'] == "najviše 1 sat dnevno")
		{
			$vremeNaI2++;
		}
		else if($row['vremeNaI'] == "najviše 4 sata dnevno")
		{
			$vremeNaI3++;
		}
		else if($row['vremeNaI'] == "neprekidno")
		{
			$vremeNaI4++;
		}
		
		
		
		//----------DOBA DANA----------
		if($row['doba'] == "nikad")
		{
			$doba1++;
		}
		else if($row['doba'] == "pre podne")
		{
			$doba2++;
		}
		else if($row['doba'] == "posle podne")
		{
			$doba3++;
		}
		else if($row['doba'] == "uveče")
		{
			$doba4++;
		}
		else if($row['doba'] == "neprekidno")
		{
			$doba5++;
		}		
		
		
		//------NJČEŠĆI UREDJAJ-----
		if($row['uredjaj'] == "mobilni telefon")
		{
			$uredjaj1++;
		}
		else if($row['uredjaj'] == "desktop računar")
		{
			$uredjaj2++;
		}
		else if($row['uredjaj'] == "laptop")
		{
			$uredjaj3++;
		}
		else if($row['uredjaj'] == "tablet")
		{
			$uredjaj4++;
		}
		
		
		//------UKUPAN BROJ UREDJAJA-----
		if($row['brojU'] <= 4)
		{
			$brojU1++;
		}
		else if($row['brojU'] <= 7)
		{
			$brojU2++;
		}
		else if($row['brojU'] > 7)
		{
			$brojU3++;
		}
		
		
		//------DUGO KORISTITE INTERNET-----
		if($row['dugoKoristite'] == "manje od godinu dana")
		{
			$dugoKoristite1++;
		}
		else if($row['dugoKoristite'] == "1 do 3 godine")
		{
			$dugoKoristite2++;
		}
		else if($row['dugoKoristite'] == "od 3 do 5 godina")
		{
			$dugoKoristite3++;
		}
		else if($row['dugoKoristite'] == "od 5 do 10 godina")
		{
			$dugoKoristite4++;
		}
		else if($row['dugoKoristite'] == "preko 10 godina")
		{
			$dugoKoristite5++;
		}
		
		
		
		//---------ZA ŠTA NAJVIŠE KORISTITE INTERNET----------
		if($row['internetKoristite'] != null)
		{
			$internetKoristite= explode (";", $row['internetKoristite']); 
			
			foreach ($internetKoristite as &$value1) 
			{				
				if($value1 == "vesti, informacije")
				{
					$vesti_info++;
				}
				else if($value1 == "video, TV, fotografije")
				{
					$video++;
				}
				else if($value1 == "muzika")
				{
					$muzika++;
				}
				else if($value1 == "knjige/edukacija")
				{
					$knjige++;
				}
				else if($value1 == "socijalne mreže, chat")
				{
					$soc_mreže++;
				}
				else if($value1 == "igrice")
				{
					$igrice++;
				}
				else if($value1 == "shopping")
				{
					$shopping++;
				}
				else if($value1 == "igre na sreću/klađenje")
				{
					$igre_na_srecu++;
				}
			}
		}
		
		
		
		//------KOJE DRUŠTVENE MREŽE NAJVIŠE KORISTITE----------
		if($row['drustveneMrezeKoristite'] != null)
		{
			$drustveneMrezeKoristite= explode (";", $row['drustveneMrezeKoristite']); 
			
			foreach ($drustveneMrezeKoristite as &$value2) 
			{
				if($value2 == "Facebook")
				{
					$facebook++;
				}
				else if($value2 == "Twitter")
				{
					$twitter++;
				}
				else if($value2 == "Instagram")
				{
					$instagram++;
				}
				else if($value2 == "Snapchat")
				{
					$snapchat++;
				}
				else if($value2 == "Pinterest")
				{
					$pinterest++;
				}
			}
		}		
		
		
		
		//------ŽIVOT BEZ INTERNETA----------
		if($row['zivotBez'] == "Da")
		{
			$zivotBez1++;
		}
		else if($row['zivotBez'] == "Ne")
		{
			$zivotBez2++;
		}
		
    }
} else {
    echo "0 results";
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
		
		<script src="js/Chart.js"></script>
		
		<link rel="icon" href="img/logo.png"> 
		<title>Statistika</title>

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
	  <a class="nav-item nav-link" href="statistika.php">Statistika</a>
	  <a class="nav-item nav-link" href="kontakt.html">Kontakt</a>
    </div>
  </div>
</nav>

	<div class="glavni">

	<section class="snaslov"> 
      <div class="container">
          <h1 class="naslov text-center">Statistika</h1>
          <br><br>
      </div>    
	</section>
	
	<section id="statprvi">
		<div class="container">	
		<div class="row">		
			<div class="col-md-6">
				<h3>Pol:</h3>
				<canvas id="pieChart1"></canvas>
			</div>
			
			<div class="col-md-6">
				<h3>Koliko godina imate?</h3>
				<canvas id="pieChart2"></canvas>
			</div>
			</div>			
		</div>
	</section>
	
	<section id="statdrugi">
		<div class="container">	
		<div class="row">		
			<div class="col-md-6">
				<h5>Koliko vremena dnevno provodite za kompjuterom?</h5>
				<canvas id="barChart1"></canvas>
			</div>
			
			<div class="col-md-6">
				<h5>Koliko vremena dnevno provodite na internetu?</h5>
				<canvas id="barChart2"></canvas>
			</div>
		</div>			
		</div>
	</section>
	
	
	<section id="stattreci">
		<div class="container">	
		<div class="row">		
			<div class="col-md-6">
				<h5>U koje doba dana najčešće koristite internet?</h5>
				<canvas id="doughnutChart1"></canvas>
			</div>
			
			<div class="col-md-6">
				<h5>Preko kog uređaja najčešće pristupate internetu?</h5>
				<canvas id="doughnutChart2"></canvas>
			</div>
		</div>			
		</div>
	</section>
	
	
	<section id="statcetvrti">
		<div class="container">	
		<div class="row">		
			<div class="col-md-6">
				<h5>Ukupan broj uredjaja (PC, laptopova, tableta ,mobilnih telefona) u Vašem domaćinstvu</h5>
				<canvas id="pieChart3"></canvas>
			</div>
			
			<div class="col-md-6">
				<h5>Koliko dugo koristite internet?</h5>
				<canvas id="pieChart4"></canvas>
			</div>
		</div>			
		</div>
	</section>
	
	<section id="statpeti">
		<div class="container">	
		<div class="row">		
			<div class="col-md-12">
				<h3>Za šta najviše koristite internet?</h3>
				<canvas id="barChart3"></canvas>
			</div>
		</div>			
		</div>
	</section>
	
	<section id="statsesti">
		<div class="container">	
		<div class="row">		
			<div class="col-md-6">
				<h5>Koje društvene mreže najviše koristite?</h5>
				<canvas id="doughnutChart3"></canvas>
			</div>
			<div class="col-md-6">
				<h5>Da li možeš da zamisliš svoj život bez društvenih mreža?</h5>
				<canvas id="doughnutChart4"></canvas>
			</div>
		</div>			
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
				</hr>
			</div>	
		</div>
	</section>
	
	
	
	</div>
	
	
	<script>
	
	//////////////////////////////////////////////////////////////
	
	var ctx = document.getElementById('pieChart1').getContext('2d');
	var myPieChart1 = new Chart(ctx,{

    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['Muško','Žensko'],
		
        datasets: [{
            label: "My First dataset",
             backgroundColor: [
                'rgba(54, 162, 235, 0.9)',
				'rgba(22, 99, 132, 0.9)',
            ],
			
           borderColor: 'white',
		   
            data: ["<?php echo $brm ?>","<?php echo $brz ?>"]
        }]
    },

    // Configuration options go here
    options: {}
});	

		
	//////////////////////////////////////////////////////////////
	var ctx = document.getElementById('pieChart2').getContext('2d');
	var myPieChart2 = new Chart(ctx,{

    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['manje od 13','13 - 19','više od 19'],
		
        datasets: [{
            label: "My First dataset",
             backgroundColor: [
                'rgba(255, 157, 59, 0.9)',
				'rgba(255, 99, 22, 0.9)',
                'rgba(255, 236, 179, 0.9)',
            ],
			
           borderColor: 'white',
		   
            data: ["<?php echo $brGodManje; ?>","<?php echo $brGodIzmedju; ?>","<?php echo $brGodVise; ?>"]
        }]
    },

    // Configuration options go here
    options: {}
});	

		
	//////////////////////////////////////////////////////////////
	var ctx = document.getElementById('barChart1').getContext('2d');
	var myBarChart1 = new Chart(ctx, {

    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['retko koristim','najviše 2 sata','najviše 5 sata','neprekidno'],
		
        datasets: [
		{			
             backgroundColor: [
                'rgba( 255, 205, 210 , 0.9)',
                'rgba( 211, 47, 47 , 0.9)',
				'rgba( 244, 67, 54 , 0.9)',
                'rgba( 255, 235, 238 , 0.9)',
            ],
			
            borderColor: '#4db8ff',
			
				data: ['<?php echo $vremeZaK1; ?>','<?php echo $vremeZaK2; ?>','<?php echo $vremeZaK3; ?>','<?php echo $vremeZaK4; ?>']
            
        },]
    },
	options: {
		legend: {
        display: false
		},		
        scales: {
            yAxes: [{
				display: true,
				ticks: {
					beginAtZero: true,
					steps: 10,
					stepValue: 1,
					max: 10
                            }
                        }]
        }
    }
});	
	
	
		
	//////////////////////////////////////////////////////////////
var ctx = document.getElementById('barChart2').getContext('2d');
	var myBarChart2 = new Chart(ctx, {

    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['retko koristim','najviše 2 sata','najviše 5 sata','neprekidno'],
		
        datasets: [
		{			
             backgroundColor: [
				'rgba( 211, 47, 47 , 0.9)',
				'rgba( 244, 67, 54 , 0.9)',
                'rgba( 255, 235, 238 , 0.9)',
				'rgba( 183, 28, 28 , 0.9)',
            ],
			
            borderColor: '#4db8ff',
			
				data: ['<?php echo $vremeNaI1; ?>','<?php echo $vremeNaI2; ?>','<?php echo $vremeNaI3; ?>','<?php echo $vremeNaI4; ?>']
            
        },]
    },
	options: {
		legend: {
        display: false
		},
        scales: {
            yAxes: [{
				display: true,
				ticks: {
					beginAtZero: true,
					steps: 10,
					stepValue: 1,
					max: 10
                            }
                        }]
        }
    }
});	
	
		
	//////////////////////////////////////////////////////////////
	var ctx = document.getElementById('doughnutChart1').getContext('2d');
	var myDoughnutChart1 = new Chart(ctx, {

    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ['nikad','pre podne','posle podne','uveče','neprekidno'],
		
        datasets: [{
            label: "My First dataset",
             backgroundColor: [
                'rgba(255, 157, 59, 0.9)',
                'rgba(54, 162, 235, 0.9)',
				'rgba(255, 99, 22, 0.9)',
                'rgba(255, 236, 179, 0.9)',
				'rgba(22, 99, 132, 0.9)',
            ],
			
             borderColor: 'white',
			 
            data: ["<?php echo $doba1; ?>","<?php echo $doba2; ?>","<?php echo $doba3; ?>","<?php echo $doba4; ?>","<?php echo $doba5; ?>"]
        }]
    },

    // Configuration options go here
    options: {}
});	
	
		
	//////////////////////////////////////////////////////////////
	var ctx = document.getElementById('doughnutChart2').getContext('2d');
	var myDoughnutChart2 = new Chart(ctx, {

    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ['mobilni telefon','desktop računar','laptop','tablet'],
		
        datasets: [{
            label: "My First dataset",
             backgroundColor: [
                'rgba(255, 157, 59, 0.9)',
                'rgba(54, 162, 235, 0.9)',
				'rgba(255, 99, 22, 0.9)',
                'rgba(22, 99, 132, 0.9)',
            ],
			
           borderColor: 'white',
		   
            data: ["<?php echo $uredjaj1; ?>","<?php echo $uredjaj2; ?>","<?php echo $uredjaj3; ?>","<?php echo $uredjaj4; ?>"]
        }]
    },

    // Configuration options go here
    options: {}
});	
	
	//////////////////////////////////////////////////////////////

	var ctx = document.getElementById('pieChart3').getContext('2d');
	var myPieChart3 = new Chart(ctx,{

    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['manje od 5','5 - 7','vise od 7'],
		
        datasets: [{
            label: "My First dataset",
             backgroundColor: [
                'rgba( 255, 245, 157 , 0.9)',
                'rgba( 251, 192, 45 , 0.9)',
				'rgba( 255, 235, 59 , 0.9)',
            ],
			
            borderColor: '#4db8ff',
			
            data: ["<?php echo $brojU1; ?>","<?php echo $brojU2; ?>","<?php echo $brojU3; ?>"]
        }]
    },

    // Configuration options go here
    options: {}
});	

	
		
	//////////////////////////////////////////////////////////////
	var ctx = document.getElementById('pieChart4').getContext('2d');
	var myPieChart4 = new Chart(ctx,{

    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['manje od godinu dana','1 do 3 godine','od 3 do 5 godina','od 5 do 10 godina','preko 10 godina'],
		
        datasets: [{
            label: "My First dataset",
             backgroundColor: [
                'rgba( 255, 205, 210 , 0.9)',
                'rgba( 211, 47, 47 , 0.9)',
				'rgba( 244, 67, 54 , 0.9)',
                'rgba( 255, 235, 238 , 0.9)',
				'rgba( 183, 28, 28 , 0.9)',
            ],
			
            borderColor: '#4db8ff',
			
            data: ["<?php echo $dugoKoristite1; ?>","<?php echo $dugoKoristite2; ?>","<?php echo $dugoKoristite3; ?>","<?php echo $dugoKoristite4; ?>","<?php echo $dugoKoristite5; ?>"]
        }]
    },

    // Configuration options go here
    options: {}
});	

		
	//////////////////////////////////////////////////////////////
var ctx = document.getElementById('barChart3').getContext('2d');
	var myBarChart3 = new Chart(ctx, {

    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['vesti, informacije','video, TV, fotografije','muzika','knjige/edukacija','socijalne mreže, chat','igrice','shopping','igre na sreću/klađenje'],
		
        datasets: [
		{			
             backgroundColor: [
                'rgba( 26, 35, 126 , 0.9)',
                'rgba( 2, 119, 189 , 0.9)',
				'rgba( 0, 96, 100 , 0.9)',
                'rgba( 79, 195, 247 , 0.9)',
                'rgba( 179, 229, 252 , 0.9)',
                'rgba( 207, 216, 220 , 0.9)',
				'rgba(0, 200, 200, 0.9)',
                'rgba( 13, 71, 161 , 0.9)',
            ],
			
             borderColor: 'white',
			
				data: ['<?php echo $vesti_info; ?>','<?php echo $video; ?>','<?php echo $muzika; ?>','<?php echo $knjige; ?>','<?php echo $soc_mreže; ?>','<?php echo $igrice; ?>','<?php echo $shopping; ?>','<?php echo $igre_na_srecu; ?>']
            
        },]
    },
	options: {
	legend: {
        display: false
		},
        scales: {
            yAxes: [{
				display: true,
				ticks: {
					beginAtZero: true,
					steps: 10,
					stepValue: 1
                            }
                        }]
        }
    }
});	
	
		
	//////////////////////////////////////////////////////////////
	var ctx = document.getElementById('doughnutChart3').getContext('2d');
	var myDoughnutChart3 = new Chart(ctx, {

    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ['Facebook','Twitter','Instagram','Snapchat','Pinterest'],
		
        datasets: [{
            label: "My First dataset",
             backgroundColor: [
               'rgba( 255, 205, 210 , 0.9)',
                'rgba( 255, 39, 21 , 0.9)',
				'rgba( 244, 67, 54 , 0.9)',
                'rgba( 255, 235, 238 , 0.9)',
				'rgba( 183, 28, 28 , 0.9)',
            ],
			
           borderColor: '#4db8ff',
		   
            data: ["<?php echo $facebook; ?>","<?php echo $twitter; ?>","<?php echo $instagram; ?>","<?php echo $snapchat; ?>","<?php echo $pinterest; ?>"]
        }]
    },

    // Configuration options go here
    options: {}
});	
	
	//////////////////////////////////////////////////////////////

	var ctx = document.getElementById('doughnutChart4').getContext('2d');
	var myDoughnutChart4 = new Chart(ctx, {

    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ['Da','Ne'],
		
        datasets: [{
            label: "My First dataset",
             backgroundColor: [
                 'rgba( 255, 245, 157 , 0.9)',
                'rgba( 251, 192, 45 , 0.9)',
            ],
			
             borderColor: '#4db8ff',
			 
            data: ["<?php echo $zivotBez1; ?>","<?php echo $zivotBez2; ?>"]
        }]
    },

    // Configuration options go here
    options: {}
});	
	
	//////////////////////////////////////////////////////////////
	</script>
	
	
	
	
		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/js.js"></script>	
		
</body>
</html>