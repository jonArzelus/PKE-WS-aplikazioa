
<?php
	if (isset($_POST['eposta']) && isset($_POST['g-recaptcha-response'])){
	
		include 'dbkonexioak/dbOpen.php';
		if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera
			null;
		} else { //post eskaera	
			// captcha frogatu
        	$captcha=$_POST['g-recaptcha-response'];
        	if(!$captcha){
        		echo '<h2>Mesedez klikatu ezazu captcha!!</h2>';
        		exit;
        	}
        
			$secretKey = "6LerogsUAAAAAHiIYXlWy9QM40UIUnppNhiXi_Dq";
        	$ip = $_SERVER['REMOTE_ADDR'];
        	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        	$responseKeys = json_decode($response,true);
        	if(intval($responseKeys["success"]) !== 1) {
          		echo '<h2>Madarikatua hi, spam zikina!!</h2>';
        	} else {
          		//emaila bidali
				echo "dena ondo joan da, orain emaila bidaliko dizugu";
				$eposta= $_POST['eposta'];
				$to      = 'berriotxoa86@gmail.com';
				$subject = 'Pasahitz aldaketa';
				$message = 'Kaixo,
				Zure emaila aldatzeko eskaera jaso dugu. Zure email berria honako hau da:
								pasahitza=kakadebaka';
				$headers = 'From: iberriochoa001@ikasle.ehu.eus' . "\r\n" .
							'Reply-To: iberriochoa001@ikasle.ehu.eus' . "\r\n" .
    						'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $message, $headers);
        	}
		
		
		
		}
	}
?>