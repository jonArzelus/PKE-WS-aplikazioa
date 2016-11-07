<?php
	$_GET['orrialdea'] = "credits";
	include 'php/orrialdeGoia.php';
	echo('</head>
		<body>');
	include 'php/orrialdeNabigazioa.php';
?>
    <section class="main" id="s1">
	<div>
		<h2><a style="text-decoration: none" href="https://www.linkedin.com/in/jon-arzelus-rodriguez-63306b128">Jon Arzelus</a> eta <a style="text-decoration: none" href='inaki.html'>Iñaki Berriotxoa</a></h2><br>
		<h3>Software Ingeniaritza espezialitatea</h3><br>
		<img src="irudiak/index.jpeg" alt="computer_software"><br>
		Web Sistemak ikasgaieko lehen laborategiko lana da hau, pixkanaka osatzen joango gara
	</div>
	<div id="geolokalizazioa">
		<?php
			$client = new SoapClient("http://www.webservicex.net/geoipservice.asmx?WSDL");
			$params = new stdClass;
 
			$params->IPAddress = $_SERVER['REMOTE_ADDR'];
			echo "Bezeroaren IP helbidea: " .$params->IPAddress;
			$result = $client->GetGeoIP($params);
			// Check for errors...
			$countryName = $result->GetGeoIPResult->CountryName;
			$countryCode = $result->GetGeoIPResult->CountryCode;
 			echo "<br/>Bere herrialde izena: " . $countryName . "<br/>Herrialde kodea: " . $countryCode;

		?>
	</div>
    </section>
<?php include 'php/orrialdeOina.php'; ?>