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
	<div id="soap_geo">
		<h3>SOAP bezeroa erabiliz php-n</h3><br/>
		<?php
			$client = new SoapClient("http://www.webservicex.net/geoipservice.asmx?WSDL");
			$params = new stdClass();
 
			$params->IPAddress = $_SERVER['REMOTE_ADDR'];
			echo "Bezeroaren IP helbidea: " .$params->IPAddress;
			$result = $client->GetGeoIP($params);
			// Check for errors...
			$countryName = $result->GetGeoIPResult->CountryName;
			$countryCode = $result->GetGeoIPResult->CountryCode;
 			echo "<br/>Bere herrialde izena: " . $countryName . "<br/>Herrialde kodea: " . $countryCode;

		?>
	</div>
		<h3>Google-n API-a erabiliz Javascripten</h3>
		<h4>Fakultatea hemen dago</h4>
		<div id="map" class="mapa"></div><br>
		<h4>Zu hemen zaude</h4>
		<div id="map2" class="mapa"></div><br>
		<script>
		function myMap() {
			//map 1 fakultatea
  			var mapCanvas = document.getElementById("map");
  			var mapOptions = {
    			center: new google.maps.LatLng(43.307178, -2.010857),
    			zoom: 18
 			}
  			var map = new google.maps.Map(mapCanvas, mapOptions);
			
			//map 2 fakultatea
			var map2 = new google.maps.Map(document.getElementById('map2'), {
          	center: {lat: -34.397, lng: 150.644},
          	zoom: 16
        	});
        	var infoWindow = new google.maps.InfoWindow({map: map2});

        	// Try HTML5 geolocation.
       		if (navigator.geolocation) {
          		navigator.geolocation.getCurrentPosition(function(position) {
            	var pos = {
              		lat: position.coords.latitude,
              		lng: position.coords.longitude
           		};

            	infoWindow.setPosition(pos);
            	infoWindow.setContent('Lokalizazioa aurkitua!');
            	map2.setCenter(pos);
          	}, function() {
            	handleLocationError(true, infoWindow, map2.getCenter());
          	});	
        	} else {
          		// Browser doesn't support Geolocation
          		handleLocationError(false, infoWindow, map2.getCenter());
        	}
      	
			function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        		infoWindow.setPosition(pos);
        		infoWindow.setContent(browserHasGeolocation ?
               				'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
      		}


			
		}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWdc1h_ayPsJYOdy7USRFMN1rmR5YwJcg&callback=myMap"></script>
    </section>
<?php include 'php/orrialdeOina.php'; ?>