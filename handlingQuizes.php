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
    <section class="main" id="s1">
		
	<div class='login'>
		<div class="login-header2">
			<h1>Sartu Galdera</h1>
		</div>
		<div id="kopurua">
		</div>

		<form id="galdera_sartu" name="galdera_sartu" method="POST" enctype="multipart/form-data">
			<div class="login-form">
				<h3>Galdera:</h3> 
  				<input type="text" id="galdera" name="galdera" title="Sartu zure galdera." placeholder="Sartu zure galdera" required><br>
				<h3>Erantzuna:</h3>
 				<input type="text" id="erantzuna"  name="erantzuna" title="Sartu galderaren erantzuna." placeholder="Sartu galderaren erantzuna" required><br>
 				<h3>Arloa:</h3>
 				<input type="text" id="arloa" name="arloa" title="Sartu galderaren arloa." placeholder="Sartu galderaren arloa"><br>
				<h3>Zailtasuna:</h3>
 				<!--<select id="zailtasuna" name="zailtasuna" >
  					<option value="1">1 - Oso erraza</option>
  					<option value="2">2 - Erraza</option>
  					<option value="3">3 - Erdibidekoa</option>
  					<option value="4">4 - Zaila</option>
					<option value="5">5 - Oso zaila</option>
				</select><br>-->
				<div style="max-width:160px; margin:auto">
				<fieldset id="zailtasuna" class="rating">
					<input type="radio" id="star5" name="zailtasuna" value="5" /><label class = "full" for="star5" title="5 - Oso zaila"></label>
					<input type="radio" id="star4" name="zailtasuna" value="4" /><label class = "full" for="star4" title="4 - Zaila"></label>
					<input type="radio" id="star3" name="zailtasuna" value="3" /><label class = "full" for="star3" title="3 - Erdibidekoa"></label>
					<input type="radio" id="star2" name="zailtasuna" value="2" /><label class = "full" for="star2" title="2 - Erraza"></label>
					<input type="radio" id="star1" name="zailtasuna" value="1" /><label class = "full" for="star1" title="1 - Oso erraza"></label>  
				</fieldset>
				</div>
				</br>
				</br>
				<input type="button" name="galderakBidali" id="galderakBidali" value="Bidali" onclick="galderaBidali(galdera.value,erantzuna.value,zailtasuna.value,arloa.value)"\>
				
				
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
			</div>	
		</form> 
		<input type="button" name="galderakIkusi" id="galderakIkusi" value="Zure galderak ikusi" onclick="galderakIkusi()"\>
		
		<div id="erabiltzaile_galderak">
		</div>
		<div id="mezuak">
		</div>
	</div>
    </section>
<?php include 'php/orrialdeOina.php'; ?>

