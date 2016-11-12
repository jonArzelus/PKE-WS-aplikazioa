<?php
	$_GET['orrialdea']="reviewingQuizes";
	include 'php/orrialdeGoia.php';
?>
<script type="text/javascript">
xhttp = new XMLHttpRequest();
function akzioa(x) {
	//galderak ezabatu
	if(document.getElementById(x).checked==true) {
		//Galderak ezabatu ajax PHP erabiliz
		xhttp.onreadystatechange = function(){
			if((xhttp.readyState==4) && (xhttp.status==200)){
				document.getElementById("erabiltzaile_galderak").innerHTML=xhttp.responseText;
			}
		}
		xhttp.open("GET","galderakIkusi.php", true);
		xhttp.send();
		<?php
		$sqlekintza="DELETE from quiz WHERE galderaZenbakia='x'";
		$emaitza=$db->query($sqlekintza);
		if(!$emaitza) {
			echo("Errore bat egon da ekintza gehitzean: ".$db->error);
		}
		header("Location:reviewingQuizes.php");
		?>
		alert(htmlString);
	}
	alert(x);
}
</script>
<?php
	echo('</head>');
	echo('<body>');
	include 'php/orrialdeNabigazioa.php';
?>	
    <section class="main" id="s1">
		
	<div>
		<?php
			include 'dbkonexioak/dbOpen.php';

			//sesio informazioa gorde ekintzetan
			$eposta=$_SESSION['eposta'];
			$konexioid = $_SESSION['konexioid'];
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    			$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
    			$ip = $_SERVER['REMOTE_ADDR'];
			}
			$ekintza = "galderak kudeatu";
			date_default_timezone_set('Europe/Madrid');
			$data = date(DATE_RSS, time());
			$sqlekintza="INSERT INTO ekintzak(konexioa, postaElektronikoa, ekintzaMota, ekintzaData, IP) VALUES ('$konexioid', '$eposta', '$ekintza', '$data', '$ip')";
			$emaitza=$db->query($sqlekintza);
			if(!$emaitza) {
				echo("Errore bat egon da ekintza gehitzean: ".$db->error);
			}
			
			//Galderak ikusi PHP erabiliz
			echo("<h1>DBko galderak kudeatzeko administratzailea</h1></br></br>");
			$sqlekintza="SELECT galderaZenbakia, egilePosta, galderaTestua, erantzunTestua, zailtasuna, galderaArloa FROM quiz";
			$emaitza=$db->query($sqlekintza);
			if(!$emaitza) {
				echo("Errore bat egon da ekintza gehitzean: ".$db->error);
			}
			echo ('<table border="1">
					<tr>
						<th style="text-align:center"> Egilea </th>
						<th style="text-align:center"> Galdera </th>
						<th style="text-align:center"> Erantzuna </th>
						<th style="text-align:center"> Zailtasuna </th>
						<th style="text-align:center"> Arloa </th>
						<th style="text-align:center"> Ezabatu </th>
						<th style="text-align:center"> Aldatu </th>
					</tr> ');
		
			while($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)) {
					echo ("<tr>");	
						echo ("<td>".$lerroa['egilePosta']."</td>");
						echo ("<td>".$lerroa['galderaTestua']."</td>");
						echo ("<td>".$lerroa['erantzunTestua']."</td>");
						echo ('<td style="text-align:center">');
							switch($lerroa['zailtasuna']) {
							case 1:
							echo('✪');
							break;
							case 2:
							echo('✪✪');
							break;
							case 3:
							echo('✪✪✪');
							break;
							case 4:
							echo('✪✪✪✪');
							break;
							case 5:
							echo('✪✪✪✪✪');
							break;
						}
						echo("</td>");
						echo ("<td>".$lerroa['galderaArloa']."</td>");
						echo ("<td style='text-align:center'><input id='".$lerroa['galderaZenbakia']."' type='checkbox' name='ezabatu' value=".$lerroa['galderaZenbakia']."></td>");
						echo ("<td> <button type='button' onclick='akzioa(".$lerroa['galderaZenbakia'].")'>aldatu</button> </td>");
					echo("</tr>");
			}
		
			echo("</table></br></br>");
			include 'dbkonexioak/dbClose.php';
		?>
	</div>

    </section>
<?php include 'php/orrialdeOina.php'; ?>