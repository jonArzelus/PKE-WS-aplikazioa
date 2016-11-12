<?php
	$_GET['orrialdea']="reviewingQuizes";
	echo $_GET['ezabatzekoGalderaId'];
	include 'php/orrialdeGoia.php';
?>
<?php
	echo('</head>');
	echo('<body>');
	include 'php/orrialdeNabigazioa.php';
?>	
    <section class="main" id="s1">
		
	<div>
		<?php
			include 'dbkonexioak/dbOpen.php';
			$gzbkia = $_GET['ezabatzekoGalderaId'];
			//Galderak ikusi PHP erabiliz
			echo("<h1>DBko galderak kudeatzeko administratzailea</h1></br></br>");
			$sqlekintza="SELECT galderaZenbakia, egilePosta, galderaTestua, erantzunTestua, zailtasuna, galderaArloa FROM quiz WHERE galderaZenbakia=".$gzbkia."";
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
						echo ("<td> <button style='width:100%;' type='button' onclick='akzioa(".$lerroa['galderaZenbakia'].")'>aldatu</button> </td>");
					echo("</tr>");
			}
		
			echo("</table></br></br>");
			include 'dbkonexioak/dbClose.php';
		?>
	</div>

    </section>
<?php include 'php/orrialdeOina.php'; ?>