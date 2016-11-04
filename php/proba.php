<?php

	$pass='SDÑGH3452';
	/*$handle = fopen("toppasswords.txt", "r");
	if ($handle) {
    	while (($line = fgets($handle)) !== false) {
			echo $line;
			$line=rtrim($line,"\r\n");
        	if(strcmp($line,'000000')==0){
				echo "baliogabea da";
				return 'BALIOGABEA';
			} 
   		 }
		fclose($handle);
		echo "balizkoa da";
		return 'BALIOZKOA';
	} else {
   
	}	*/

	if(strpos(file_get_contents("toppasswords.txt"),$pass)!==false){
		echo "baliogabea da";
	}else{
		echo "baliozkoa da";
	}


?>
