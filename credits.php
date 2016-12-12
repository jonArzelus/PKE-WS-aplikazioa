<?php
	$_GET['orrialdea'] = "credits";
	include 'php/orrialdeGoia.php';
	echo('</head>
		<body>');
	include 'php/orrialdeNabigazioa.php';
?>

    <div class="container">
	<div class="panel panel-default col-md-12 text-center">
			  
		<h2><a style="text-decoration: none" href="https://www.linkedin.com/in/jon-arzelus-rodriguez-63306b128">Jon Arzelus</a> eta <a style="text-decoration: none" href='inaki.html'>Iñaki Berriotxoa</a></h2><br>

			  <div class="panel-body">
			  <div class="col-md-4 col-md-push-4">
			    <div class="thumbnail">
			      <img src="irudiak/index.gif" alt="computer_software">
			      <div class="caption">
			        <h3>Software ingeniaritza</h3>
			        <p>PKE proiektua bootstrap erabiliz</p>
			      </div>
			    </div>
			  </div>
		
		
	</div>
	<div class="panel panel-default col-md-12">
			  <div class="panel-heading"><h3>SOAP bezeroa erabiliz php-n</h3></div>
			  <div class="panel-body">
	<div id="geolokalizaioa">
		<div id="soap_geo">
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

 			/*//http://ipinfo.io/developers/getting-started
 			$ip = $_SERVER['REMOTE_ADDR'];
 			echo "Bezeroaren IP helbidea: " . $ip . "<br>";
 			$result = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
 			$countryName = $result->city;
			$countryCode = $result->country;
			$countryLocation = $result->loc;
 			echo "<br/>Bere herrialde izena: " . $countryName . "<br/>Herrialde kodea: " . $countryCode. "<br>Bezeroaren koordenatuak: ".$countryLocation;*/

			?>
		</div></div></div><br/>
	<!--	<h3>Google-n API-a erabiliz Javascripten</h3>
		<div class="mapadivl">
			<h4>Fakultatea hemen dago</h4><br><br>
			<div id="map" class="mapa"></div><br>
		</div>
		<div class="mapadivr">
			<h4>Zu hemen zaude</h4><br><br>
			<div id="map2" class="mapa"></div><br>
		</div>
	

		<script>
		function myMap() {
			//map 1 fakultatea
  			var mapCanvas = document.getElementById("map");
  			var mapOptions = {
    			center: new google.maps.LatLng(43.307178, -2.010857),
    			mapTypeId: google.maps.MapTypeId.SATELLITE,
    			zoom: 18
 			}
  			var map = new google.maps.Map(mapCanvas, mapOptions);
			
			//map 2 bezeroa adierazten du, ez bada aurkitzen urretxu erakutsiko du (Munduko hiriburua)
			var map2 = new google.maps.Map(document.getElementById('map2'), {

          	center: {lat: -34.397, lng: 150.644},
          	mapTypeId: google.maps.MapTypeId.SATELLITE,
          	zoom: 16

        	});

        	var infoWindow1 = new google.maps.InfoWindow({map: map});
        	var pos1 = {
              		lat: 43.307178,
              		lng: -2.010857
           		};
        	infoWindow1.setPosition(pos1);
            infoWindow1.setContent('Informatika Fakultatea');

        	var infoWindow = new google.maps.InfoWindow({map: map2});
				infoWindow.setContent('Gora Iparragirre eta Urretxuarrak!!');

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
				//calculateDistance(pos);
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

			
		/*function calculateDistance(position){
			var distantzia = google.maps.geometry.spherical.computeDistanceBetween({lat: 43.093274, lng: -2.314143}, {lat: position.coords.latitude,lng: position.coords.longitude});
			alert (distantzia);
		}*/
		</script> -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWdc1h_ayPsJYOdy7USRFMN1rmR5YwJcg&callback=myMap"></script>
		</div>
    </div>
<?php include 'php/orrialdeOina.php'; ?>