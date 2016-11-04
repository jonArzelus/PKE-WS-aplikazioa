<?php
	$_GET['orrialdea'] = "ikasleakIkusi";
	include 'php/orrialdeGoiburua.php';
	echo('</header>
		<body>');
	include 'php/orrialdeNabigazioa.php';
?>
	<OBJECT id="datuak" data="xml/erabiltzaileak.xml" type="text/xml" style="display:none"></OBJECT>
	<script type="text/javascript">
		function begiratu(){
			
			var dago=false;
			var xmlDoc = document.getElementById('datuak').contentDocument;
			
			var kor = document.getElementById("emaila").value;
			var epostenZer=xmlDoc.getElementsByTagName("eposta");
			var tfnoZer=xmlDoc.getElementsByTagName("telefonoa");
			var izenZer=xmlDoc.getElementsByTagName("izena");
			var AbizenZer=xmlDoc.getElementsByTagName("abizena1");
			var Abizen2Zer=xmlDoc.getElementsByTagName("abizena2");
			
			
			for (var i = 0; i < epostenZer.length; i++) {
				if (kor==epostenZer[i].childNodes[0].nodeValue){
					document.getElementById('tfonoa').value=tfnoZer[i].childNodes[0].nodeValue;
					document.getElementById('izena').value=izenZer[i].childNodes[0].nodeValue +"  " + AbizenZer[i].childNodes[0].nodeValue + "  " + Abizen2Zer[i].childNodes[0].nodeValue ;
					dago=true;
					break;
				}
			}
			if(!dago){
				alert("Eposta hau ez dago UPV/EHUn erregistraturik. Sar ezazu beste bat");
			}

		}
	</script>
    <section class="main" id="s1">
		
	<h1>Sartu ikaslearen e-maila</h1> <br/>
	<div>
		<form id="ikasle_emaila" name="ikasle_emaila">
			
  				<h3>Posta-elektronikoa:</h3> 
  				<input type="text" id="emaila" name="emaila" required  title="Sartu ikasle emaila" placeholder="E-mail" oninvalid="this.setCustomValidity('Sartu ikasle baten e-posta')"><br><br>
				<h3>Ikaslearen izena:</h3>
 				<input type="text" id="izena" name="ikasle_izena" title="Hau da ikaslearen izena." placeholder="Ikasle izena"><br><br>
				<h3>Telefono zenbakia:</h3>
 				<input type="text" id="tfonoa" name="telefono_zenbakia" title="Hau da ikaslearen telefono zenbakia." placeholder="Telfono zenbakia"><br><br>
				<br><br>
				<input type="button" class="ikasle-botoia" name="button" value="Begiratu" onClick="begiratu()">
			
		</form>
	</div>
		
		
    </section>
<?php include 'php/orrialdeOina.php'; ?>