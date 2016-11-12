<?php
	$_GET['orrialdea']="reviewingQuizes";
	include 'php/orrialdeGoia.php';
?>
<?php
	echo('</head>');
	echo('<body>');
	include 'php/orrialdeNabigazioa.php';
?>	

<section class="main" id="s1">
	
	<br/><h1>DBko galderak editatzeko administratzailea</h1>
	<div id="edizioa">
	<form action="" method="POST">
	<?php
		if (isset($_GET['zenbakia'])){
			include 'dbkonexioak/dbOpen.php';
			$zenbakia=$_GET['zenbakia'];
			//echo $zenbakia;
			$sqlekintza="SELECT galderaZenbakia, egilePosta, galderaTestua, erantzunTestua, zailtasuna, galderaArloa FROM quiz WHERE galderaZenbakia='$zenbakia'";
			$emaitza=$db->query($sqlekintza);
			if(!$emaitza) {
				echo("Errore bat egon da galdera lortzean: ".$db->error);
			}else{
				$lerroa = $emaitza->fetch_array(MYSQLI_BOTH);
		?>
		<h3>Galdera zenbakia:</h3>
		<?php 
			echo'<input type="text" id="gzenbakia" name="gzenbakia"  title="Galdera zenbakia" value="'.$lerroa['galderaZenbakia'].'" readonly><br><br>';		
		?>		
		<h3>Posta-elektronikoa:</h3>
		<?php 
			echo'<input type="text" id="emaila" name="emaila"  title="Ikasle emaila" value="'.$lerroa['egilePosta'].'" readonly><br><br>';		
		?>		
		<h3>Editatu galdera:</h3>	
		<?php	
			echo'<input type="text" id="galdera" name="galdera" title="Editatu galdera" value="'.$lerroa['galderaTestua'].'"><br><br>';	
		?>
		<h3>Editatu erantzuna:</h3>
		<?php
			echo'<input type="text" id="erantzuna" name="erantzuna" title="Editatu erantzuna" value="'.$lerroa['erantzunTestua'].'"><br><br>';	
		?>
		<h3>Aukeratu zailtasuna:</h3>
		<select>
  			<option value="1">Oso erraza</option>
  			<option value="2">Erraza</option>
  			<option value="3">Erdibidekoa</option>
  			<option value="4">Zaila</option>
			<option value="5">Oso zaila</option>
		</select> 
  		<?php
				}
			include 'dbkonexioak/dbClose.php';
		}		
		?>
		<br><br><input type="button" class="ikasle-botoia" name="button" value="Atzera" onClick="window.location.href='reviewingQuizes.php'">
		<input type="submit" class="ikasle-botoia" name="button" value="Gorde">
	</form>	
	</div>

</section>
<?php 
if (isset($_POST['emaila'])){
	include 'dbkonexioak/dbOpen.php';
	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
			null;
		} else { //post eskaera landu
			$gzenbakia= $_POST['gzenbakia'];
			$eposta= $_POST['emaila'];
			$galdera= $_POST['galdera'];
			$erantzuna= $_POST['erantzuna'];
			$zailtasuna= $_POST['zailtasuna'];
	}
	//errore mezuak sortu
	/*$hasiera="<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
			<div class='error-page'>
				<div class='try-again'>";
	
	$bukaera="Errorea: Saiatu berriro?
				</div>
			</div>
			<script src='js/signIn.js'></script>";
	echo $gzenbakia;
	echo $eposta;
	echo $galdera;
	echo $erantzuna;
	echo $zailtasuna;

	echo $hasiera."Emaitzak honakoak dira".$bukaera;*/
	
	include 'dbkonexioak/dbClose.php';
}
?>
<?php include 'php/orrialdeOina.php'; ?>

