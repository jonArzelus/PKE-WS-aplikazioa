<?php
	$_GET['orrialdea']="handlingQuizes";
	include 'php/orrialdeGoia.php';
?>
	  
	 <script type="text/javascript" language="javascript">
		
		xhttp = new XMLHttpRequest();
		
		function galderakIkusi(){
			xhttp.onreadystatechange = function(){
				if((xhttp.readyState==4) && (xhttp.status==200)){
					document.getElementById("erabiltzaile_galderak").innerHTML=xhttp.responseText;
				}
			}
			xhttp.open("GET","galderakIkusi.php", true);
			xhttp.send();
		}
		
		function galderaBidali(galdera, erantzuna, zailtasuna, arloa){
			xhttp.onreadystatechange = function(){
				if((xhttp.readyState==4) && (xhttp.status==200)){
					document.getElementById("mezuak").innerHTML=xhttp.responseText;
				}
					
					
				}
				xhttp.open("GET","galderakSartuAjax.php?galdera="+galdera+"&erantzuna="+erantzuna+"&zailtasuna="+zailtasuna+"&arloa="+arloa, true);
				xhttp.send();
				/*xhttp.open("POST","galderakSartuAjax.php", true);
				xhttp.send("galdera="+galdera+"&erantzuna="+erantzuna+"&zailtasuna="+zailtasuna+"&arloa="+arloa);*/
		}
		
		 
		function dbDatuakIkusi(){
			xhttp.onreadystatechange=function(){
			if((xhttp.readyState==4) && (xhttp.status==200)){
				document.getElementById("kopurua").innerHTML=xhttp.responseText;
			}
			}
			xhttp.open("GET","galderaKopurua.php",true);
			xhttp.send();
		}
		function freskatu(){
			dbDatuakIkusi();
			setInterval(dbDatuakIkusi,5000);
		}
		
	</script>
<?php
	echo('</head>
		<body onload="freskatu()">');
	include 'php/orrialdeNabigazioa.php';
?>	
    <div class="container">
	<div class="panel panel-default col-md-12">
		<div class="panel-heading"><h1>Galdera Berriak Sortu</h1></div>
 	 	<div class="panel-body text-center">	
	<div class='login'>
		<div class="panel panel-default col-md-6 col-md-push-3">
  		<div class="panel-body">
		<div class="login-header2">
			<h1>Sartu Galdera</h1>
		</div>
		<div id="kopurua">
		</div>
		</div></div>

		<form id="galdera_sartu" name="galdera_sartu" method="POST" enctype="multipart/form-data">
			<div class="login-form">
  				<input class="form-control" placeholder="Galdera" type="text" id="galdera" name="galdera" title="Sartu zure galdera." placeholder="Sartu zure galdera" required><br>
 				<input class="form-control" placeholder="Erantzuna" type="text" id="erantzuna"  name="erantzuna" title="Sartu galderaren erantzuna." placeholder="Sartu galderaren erantzuna" required><br>
 				<input class="form-control" placeholder="Arloa" type="text" id="arloa" name="arloa" title="Sartu galderaren arloa." placeholder="Sartu galderaren arloa"><br>
				<h3>Zailtasuna:</h3>
				<div style="max-width:160px; margin:auto">
				<fieldset id="zailtasuna" class="rating">
					<input type="radio" id="star5" name="zailtasuna" value="5" /><label class = "full" for="star5" title="5 - Oso zaila"></label>
					<input type="radio" id="star4" name="zailtasuna" value="4" /><label class = "full" for="star4" title="4 - Zaila"></label>
					<input type="radio" id="star3" name="zailtasuna" value="3" /><label class = "full" for="star3" title="3 - Erdibidekoa"></label>
					<input type="radio" id="star2" name="zailtasuna" value="2" /><label class = "full" for="star2" title="2 - Erraza"></label>
					<input type="radio" id="star1" name="zailtasuna" value="1" /><label class = "full" for="star1" title="1 - Oso erraza"></label>  
				</fieldset>
				</div>
				<br/>
				<br/>
				<input class="btn btn-primary btn-lg" type="button" name="galderakBidali" id="galderakBidali" value="Bidali" onclick="galderaBidali(galdera.value,erantzuna.value,zailtasuna.value,arloa.value)"\>
				
				
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
			</div>	
		</form> 
		<br><input class="btn btn-primary btn-lg" type="button" name="galderakIkusi" id="galderakIkusi" value="Zure galderak ikusi" onclick="galderakIkusi()"\>
		
		<div id="erabiltzaile_galderak">
		</div>
		<div id="mezuak">
		</div>
	</div>
	</div>
	</div>
    </div>
<?php include 'php/orrialdeOina.php'; ?>

