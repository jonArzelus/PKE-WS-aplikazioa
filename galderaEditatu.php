<?php
	$_GET['orrialdea']="reviewingQuizes";
	include 'php/orrialdeGoia.php';
?>
<script type="text/javascript" language="javascript">
function editatu(){
		if(confirm("Ziur al zaude "+document.getElementById("gzenbakia").value+".galdera editatu nahi duzula?")){
			window.location.href= ("galderaEdizioaGorde.php?zenbakia="+document.getElementById('gzenbakia').value+"&emaila="+document.getElementById('emaila').value+"&galdera="+document.getElementById('galdera').value+"&erantzuna="+document.getElementById('erantzuna').value+"&zailtasuna="+document.getElementById('zailtasuna').value+"&arloa="+document.getElementById('arloa').value);
		} else {
			alert("aldaketak ez dira gordeko");
		}
	}
</script>
<?php
	echo('</head>');
	echo('<body>');
	include 'php/orrialdeNabigazioa.php';
?>	

<section class="container">
	
	<br/><h1>DBko galderak editatzeko administratzailea</h1>
	<div id="edizioa">
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
		<h3>Editatu arloa:</h3>
		<?php
			echo'<input type="text" id="arloa" name="arloa" title="Editatu galdera arloa" value="'.$lerroa['galderaArloa'].'"><br><br>';	
		?>
		<h3>Aukeratu zailtasuna:</h3>
		<select id="zailtasuna">
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
		<input type="button" class="ikasle-botoia" name="button" value="Gorde" onclick="editatu();">
	</div>

</section>

<?php include 'php/orrialdeOina.php'; ?>

