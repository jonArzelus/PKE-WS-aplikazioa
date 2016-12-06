<?php
	$_GET['orrialdea']="reviewingQuizes";
	include 'php/orrialdeGoia.php';
?>
<script type="text/javascript" language="javascript">

	xhttp = new XMLHttpRequest();
	
	function ezabatu(x){
		if(confirm("Ziur al zaude galdera hau ezabatu nahi duzula?")){
			xhttp.onreadystatechange = function(){
				if((xhttp.readyState==4) && (xhttp.status==200)){		
					document.getElementById("taula").innerHTML=xhttp.responseText;
				}	
			}
		xhttp.open("GET","galderaEzabatu.php?galderaZenb="+x, true);
		xhttp.send();
		}else{
			alert("Galdera ez da ezabatua izango.");
		}
	}
	
	function editatu(y){
		if(confirm("Ziur al zaude "+y+".galdera editatu nahi duzula?")){
			window.location.href= ("galderaEditatu.php?zenbakia="+y);
		}
	}

	

	
/*function akzioa(x) {

var xhttp = new XMLHttpRequest();

	//galderak ezabatu
	if(document.getElementById(x).checked==true) {
		alert(x);
		//Galderak ezabatu ajax PHP erabiliz
		//$_GET['ezabatzekoGalderaId'] = x;
		xhttp.open('GET', 'galderaEzabatuDeia.php?ezabatzekoGalderaId='+x, true);
    	xhttp.send();
	    if ((xhttp.readyState==4) && (request.status === 200)) {
	    	alert("Eragiketa ondo burutua, orrialdea birkargatzen...");
	    	alert(request.responseText);
	    }
	} else {
		//Galderak ezabatu ajax PHP erabiliz
		//$_GET['aldatzekoGalderaId'] = x;
		xhttp.open('GET', 'galderaEzabatu.php?aldatzekoGalderaId='+x, true);
    	xhttp.send();
	    if (request.status === 200) {
	    	alert(request.responseText);
	    }
	}
}*/

</script>
<?php
	echo('</head>');
	echo('<body>');
	include 'php/orrialdeNabigazioa.php';
?>	
    <section class="container">
		<br/><h1>DBko galderak kudeatzeko administratzailea</h1>
	<div id="taula">
		<?php
			include 'dbkonexioak/dbOpen.php';
			
			//Galderak ikusi PHP erabiliz
			$sqlekintza="SELECT galderaZenbakia, egilePosta, galderaTestua, erantzunTestua, zailtasuna, galderaArloa FROM quiz";
			$emaitza=$db->query($sqlekintza);
			if(!$emaitza) {
				echo("Errore bat egon da ekintza gehitzean: ".$db->error);
			}
			
			echo ('<table class="table table-striped">
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
					//$zenbakia=$lerroa['galderaZenbakia'];
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
						echo ("<td style='text-align:center'><input type='button' style='width:100%;' value='Ezabatu' onclick='ezabatu(".$lerroa['galderaZenbakia'].")'></td>");
						echo ("<td style='text-align:center'> <input name='editatu' type='button' style='width:100%;' value='Editatu' onclick='editatu(".$lerroa['galderaZenbakia'].")'> </td>");
						//echo ("<td style='text-align:center'> <form action='galderaEditatu.php?zenbakia=$zenbakia' method='POST'><input name='editatu' type='submit' style='width:100%;' value='Editatu' onclick=""> </form></td>");
					echo("</tr>");
			}
		
			echo("</table></br></br>");
			include 'dbkonexioak/dbClose.php';
		?>
	</div>

    </section>
<?php include 'php/orrialdeOina.php'; ?>