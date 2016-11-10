<?php
	$_GET['orrialdea'] = "pasahitzaBerreskuratu";
	include 'php/orrialdeGoia.php';
	echo('</head>');
?>
	<script type="text/javascript">
		emaila
	</script>
<?php
	echo('<body>');
	include 'php/orrialdeNabigazioa.php';
?>
    <section class="main" id="s1">
		
		<div id="gorputza">
		 <form id="erregistro" name="erregistro" method="POST" action="pasahitzaBerreskuratu.php" enctype="multipart/form-data">
  			Sar ezazu zure posta helbidea:
  			<input type="email" name="eposta" required pattern="^[a-z]+[0-9]{3}@ikasle\.ehu\.eu?s$" title="emailak unibertsitatekoa izan behar du." oninvalid="this.setCustomValidity('Atal hau ezin da hutsik utzi')"><br/><br/>
			<input id="botoia" type="submit" name="button" value="Bidali" onclick=""><br/>
		</form> 
		</div>
		<div id="mezuak">
		</div>
		
    </section>
<?php include 'php/orrialdeOina.php'; ?>
<?php
	if (isset($_POST['eposta'])){
	include 'dbkonexioak/dbOpen.php';
	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
			null;
		} else { //post eskaera landu	
			$eposta= $_POST['eposta'];
			
	}
	}
?>